<?php
if (isset($_GET['ping'])) {
    $domain = $_GET['ping'];
    if ($domain != '') {
        $ch = curl_init();
        $url = "https://whoisdata.tech/?ping=" . urlencode($domain);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error_message = 'cURL error: ' . curl_error($ch);
            echo json_encode(['error' => $error_message]);
        } else {
            // Successful response
            echo $response;
        }

        curl_close($ch);
    }
}
?>
