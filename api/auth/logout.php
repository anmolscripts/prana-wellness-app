<?php
// logout.php

session_start();
header('Content-Type: application/json');

// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
    exit;
}

// Remove all session variables
$_SESSION = [];

// Destroy the session
if (session_id() != '' || isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}
session_destroy();

echo json_encode([
    'success' => true,
    'message' => 'Logout successful.'
]);
?>
