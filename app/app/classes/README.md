# Simple Youtube Video Downloader

## Updates

* Removed all unnecessary files
* php-curl is no longer needed
* Added a script for direct downloading of videos by id and itag (http://www.genyoutube.net/formats-resolution-youtube-videos.html) 
* Added a simple JSON API for getting information about the video


## Usage 


### Basic usage

1. Download the script to a folder on your web server
2. Open the link in the browser http://you_server/path_to_downloader/
3. Enter the youtube link in the input field and click on the "Get download links"
4. If the link is correct, a page with information about the video and a table of various formats for download will open
5. In most cases, the "Download via client" button will work - this is a direct link to the resource from the server youtube, which will open in the user's browser
6. For some videos, youtube generates direct links available ONLY for the same IP with which this link was requested, hence such a link will not open on the client. You can bypass this restriction by uploading video through your server and giving the uploaded stream to the client. The "Download via server" button does this. Attention: loading a video in this way will increase the load on your server.

### Usage download script

To download a video by skipping it through your server, go to the URL 

http://you_server/path_to_downloader/download?id=youtube_id&itag=youtube_itag

Read more about itag on this page: http://www.genyoutube.net/formats-resolution-youtube-videos.html



### Using simple JSON API

The entry point for the JSON API is located at http://you_server/path_to_downloader/api.php

#### Request information about the video

Send request: GET http://you_server/path_to_downloader/api.php?action=info&id=youtube_id

Response: 
```json
{
  "success": true,
  "response": {
    "baseInfo": {
      "name": "Video name",
      "previewUrl": "Url to preview video image, e.g. https://img.youtube.com/vi/RCXnOsc5ajY/hqdefault.jpg",
      "description": "Video description"
    },
    "downloadInfo": [ // array of file formats
      {
        "fileSize": "file size in bytes, e.g. 101055832",
        "fileSizeHuman": "a human-readable file size, e.g. 96.37 MB",
        "url": "direct download link for 'download via client'",
        "youtubeItag": "itag format for file, e.g. 43",
        "fileType": "MIME file type, e.g. video/webm",
        "name": "file name, e.g. Bio-Dome - Nostalgia Critic.webm",
        "itagInfo": {
          "format": "file extension, e.g. mp4",
          "withVideo": "true if the file contains a video",
          "withAudio": "true if the file contains a audio"
        }
      }
      //... other files
    ]
  }
}
```

If an error occurs during the request, the response will be as follows:

```json
{
  "success": false,
  "error": "Error description"
}
```