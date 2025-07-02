<?php
// filepath: d:\Repositories\WebLPS\api\v1\profiles.php
header('Content-Type: application/json');
$data = json_decode(file_get_contents(__DIR__ . '/../../data/avalProfiles.json'), true);

unset($data['$schema']);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($data[$id])) {
        echo json_encode($data[$id]);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Profile not found']);
    }
} else {
    echo json_encode($data);
}