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

// Validate input



$email = trim($_POST['email'] ?? '');
$userId = trim($_POST['userId'] ?? '');


if (empty($email)) {
    echo json_encode(['success' => false, 'message' => 'Email and password are required.']);
    exit;
}

// echo json_encode(['success' => false, 'message' => $_POST]);
// exit;



try {
    $conn->exec("USE $dbname");

   

$stmt = $conn->prepare("SELECT * FROM notification WHERE userEmail = ? AND userId = ?");
$stmt->execute([$email, $userId]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if ($result) {
            echo json_encode(['success' => true, 'message' => $result]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Email not registered.']);
        exit;
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>