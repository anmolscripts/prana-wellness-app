<?php

function fetchLayoutData($layoutKey, $api)
{
    $url = "$api?key=" . urlencode($layoutKey);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    return $data;
}
?>