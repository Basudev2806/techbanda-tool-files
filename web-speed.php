<?php
header('Content-Type: application/json');

if (isset($_GET['url'])) {
    $website_url = $_GET['url'];

    function checkWebsiteStatus($url) {
        $response = @file_get_contents($url);
        if ($response === false) {
            return "Website is down or unreachable.";
        } else {
            return "Website is up and running.";
        }
    }

    $status = checkWebsiteStatus($website_url);
    $response = ['status' => $status];

    echo json_encode($response);
} else {
    echo json_encode(['error' => 'Missing URL parameter']);
}
?>
