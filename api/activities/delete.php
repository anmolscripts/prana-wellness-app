<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only DELETE method allowed.']);
    exit;
}

require_once '../../functions/db.php';

// Get DELETE data from body
parse_str(file_get_contents("php://input"), $data);
$id = trim($data['id'] ?? '');

if (empty($id)) {
    echo json_encode(['success' => false, 'message' => 'ID is required.']);
    exit;
}

try {
    $conn->exec("USE $dbname");
    $stmt = $conn->prepare("DELETE FROM activity WHERE id = :id");
    $stmt->execute([':id' => $id]);
    
    echo json_encode(['success' => true, 'id' => $id]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}

