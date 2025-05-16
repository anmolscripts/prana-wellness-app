<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
    exit;
}

require_once '../../functions/db.php';

$id = trim($_POST['id'] ?? '');
$name = trim($_POST['name'] ?? '');
$type = trim($_POST['type'] ?? '');
$status = trim($_POST['status'] ?? '');
$minTime = trim($_POST['minTime'] ?? '');
$maxTime = trim($_POST['maxTime'] ?? '');
$description = trim($_POST['description'] ?? '');

if (empty($id)) {
    echo json_encode(['success' => false, 'message' => 'Activity ID is required.']);
    exit;
}

if (empty($name)) {
    echo json_encode(['success' => false, 'message' => 'Name is required.']);
    exit;
}

if (empty($type)) {
    echo json_encode(['success' => false, 'message' => 'Type is required.']);
    exit;
}

if ($type == 'time') {
    if (empty($minTime)) {
        echo json_encode(['success' => false, 'message' => 'Min time is required.']);
        exit;
    }
    if (empty($maxTime)) {
        echo json_encode(['success' => false, 'message' => 'Max time is required.']);
        exit;
    }
}

try {
    $conn->exec("USE $dbname");
    $datetime = date('Y-m-d H:i:s');

    $stmt = $conn->prepare("UPDATE activity SET name = :name, type = :type, state = :status, min_duration = :min_duration, max_duration = :max_duration, description = :description, modified_datetime = :modified_datetime WHERE id = :id");
    $stmt->execute([
        'name' => $name,
        'type' => $type,
        'status' => $status,
        'min_duration' => $minTime,
        'max_duration' => $maxTime,
        'description' => $description,
        'modified_datetime' => $datetime,
        'id' => $id
    ]);

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
