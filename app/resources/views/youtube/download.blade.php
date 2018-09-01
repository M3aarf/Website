<?php
use inoledge\classes\YoutubeDownloader;

if (!isset($_GET['id']) || !$_GET['id']) {
    echo "id is missing";
    die();
}

if (!isset($_GET['itag']) || !$_GET['itag']) {
    echo "itag is missing";
    die();
}
$id = $_GET['id'];
$itag = $_GET['itag'];

$url = "https://www.youtube.com/watch?v=$id";
$yd = new YoutubeDownloader($url);
$yd->downloadViaServer($itag);
