<?php
header('Content-Type: application/json');

$apiKey = 'AIzaSyDxrU335dVnwBXNyvDydxLFmG99qOsNdZs'; // Your API key
$channelId = 'UCP8_Td7L5rrzzlTWfNB_4CQ'; // Your YouTube channel ID
$maxResults = 6; // Number of videos to fetch

$url = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&part=snippet,id&order=date&maxResults=$maxResults";

$response = file_get_contents($url);
echo $response;
