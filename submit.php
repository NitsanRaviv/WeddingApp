<?php

// Connect the Google Sheets API client
require_once __DIR__ . '/vendor/autoload.php';

$googleAccountKeyFilePath = __DIR__ . '/client.json';
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

// Create new client
$client = new Google_Client();
// Set credentials
$client->useApplicationDefaultCredentials();

$client->addScope('https://www.googleapis.com/auth/spreadsheets');

$service = new Google_Service_Sheets($client);

// you spreadsheet ID
$spreadsheetId = '1gj9Psxy90gbFHpXWFS7tP5_tTcig8X-neKMoQg2KmmQ';//1352vX2MluKjGCRjLsiIfGEFohQSSqRPG7B0_aSNc56E';
$response = $service->spreadsheets->get($spreadsheetId);

$range = 'A2:H';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

$song_1 = $values[0][0];
$song_2 = $values[0][1];
$song_3 = $values[0][2];
$song_4 = $values[0][3];
$song_5 = $values[0][4];

if ($_POST['song'] == '1') {
    $song_1 = $song_1 + 1;
} elseif ($_POST['song'] == '2') {
    $song_2 = $song_2 + 1;
} elseif ($_POST['song'] == '3') {
    $song_3 = $song_3 + 1;
} elseif ($_POST['song'] == '4') {
    $song_4 = $song_4 + 1;
} elseif ($_POST['song'] == '5') {
    $song_5 = $song_5 + 1;
}

$values = [[$song_1, $song_2, $song_3, $song_4, $song_5]];
$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);

$params = [
    'valueInputOption' => 'USER_ENTERED'
];
$update_sheet = $service->spreadsheets_values->update($spreadsheetId, $range, $body, $params);

//header("location:index.php");