<?php
require_once __DIR__ . '/YoutubeDownloader.php';
$response = array(
    'success'  => true,
    'response' => null,
    'error'    => null
);
try {
    if (!isset($_GET['action']) || !$_GET['action']) {
        throw  new Exception('action is missing');
    }
    $action = $_GET['action'];
    switch ($action) {
        case 'info':
            if (!isset($_GET['id']) || !$_GET['id']) {
                throw new Exception('id is missing');
            }
            $id = $_GET['id'];
            $yd = new YoutubeDownloader($id);
            $res = $yd->getVideoInfo();
            $baseInfo = $res['baseInfo'];
            $downloadsInfo = $yd->getDownloadsInfo();
            $response['response'] = array(
                'baseInfo'     => $baseInfo,
                'downloadInfo' => $yd->getDownloadsInfo(),
            );
            break;
        case 'download':
            if (!isset($_GET['id']) || !$_GET['id']) {
                throw new Exception('id is missing');
            }
            if (!isset($_GET['itag']) || !$_GET['itag']) {
                throw new Exception('itag is missing');
            }
            $id = $_GET['id'];
            $itag = $_GET['itag'];
            $yd = new YoutubeDownloader($id);
            $yd->downloadViaServer($itag, true);
            break;
        default:
            throw new Exception('unknown action');
            break;
    }

} catch (Exception $e) {
    $response['success'] = false;
    $response['error'] = $e->getMessage();
}
header('Content-Type: application/json');
if (is_null($response['response'])) {
    unset($response['response']);
}

if (is_null($response['error'])) {
    unset($response['error']);
}

echo json_encode($response);