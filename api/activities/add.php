<?php
// login.php

header('Content-Type: application/json');

// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
    exit;
}

// Include DB connection
require_once '../../functions/db.php';


// echo json_encode($_POST);
// exit;


// Validate input
$name = trim($_POST['name'] ?? '');
$type = trim($_POST['type'] ?? '');
$status = trim($_POST['status'] ?? '');
$minTime = trim($_POST['minTime'] ?? '');
$maxTime = trim($_POST['maxTime'] ?? '');

if (empty($name)) {
    echo json_encode(['success' => false, 'message' => 'Name is required.']);
    exit;
}

if (empty($type)) {
    echo json_encode(['success' => false, 'message' => 'Type is required.']);
    exit;
}

if($type == 'time') {
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
    $stmt = $conn->prepare("INSERT INTO activity (name, type, state, min_duration, max_duration, created_at) VALUES (:name, :type, :status, :min_duration, :max_duration, :created_at)");
    $stmt->execute([
        'name'     => $name,
        'type'    => $type,
        'status' => $status,
        'min_duration' => $minTime,
        'max_duration' => $maxTime,
        'created_at' => $datetime
    ]);
    $lastId = $conn->lastInsertId();
    echo json_encode(['success' => true, 'id' => $lastId]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>