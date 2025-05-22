<?php
require_once '../../functions/db.php';

header('Content-Type: application/json');

$layoutKey = $_GET['key'] ?? null;

if (!$layoutKey) {
    echo json_encode(['success' => false, 'message' => 'Missing layout key']);
    exit;
}

try {
    $conn->exec("USE $dbname");

    $stmt = $conn->prepare("SELECT settings, is_active FROM layout_settings WHERE layout_key = ?");
    $stmt->execute([$layoutKey]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $settings = json_decode($row['settings'], true);

        $response = [
            'success' => true,
            'data' => [
                'layout_key' => $layoutKey,
                'is_active' => (bool) $row['is_active'],
                'settings' => $settings
            ]
        ];
    } else {
        $response = ['success' => false, 'message' => 'No layout found for the given key'];
    }

    echo json_encode($response);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'DB error: ' . $e->getMessage()]);
}
