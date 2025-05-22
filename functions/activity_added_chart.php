<?php

function getMonthlyActivityAdditions(PDO $pdo, int $userId = null): array {
  $labels = [];
  $data = [];

  $current = new DateTime();
  for ($i = 11; $i >= 0; $i--) {
    $month = (clone $current)->modify("-$i months");
    $label = $month->format('M Y');
    $key = $month->format('Y-m');
    $labels[] = $label;
    $data[$key] = 0;
  }

  $startDate = (clone $current)->modify('-11 months')->format('Y-m-01');
  $endDate = $current->format('Y-m-t');

  $sql = "
    SELECT DATE_FORMAT(activity_date, '%Y-%m') AS month_key, COUNT(*) AS total
    FROM user_activities
    WHERE activity_date BETWEEN :start AND :end
    " . ($userId ? "AND user_id = :userId" : "") . "
    GROUP BY month_key
  ";

  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':start', $startDate);
  $stmt->bindParam(':end', $endDate);
  if ($userId) $stmt->bindParam(':userId', $userId);
  $stmt->execute();

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $key = $row['month_key'];
    if (isset($data[$key])) {
      $data[$key] = (int)$row['total'];
    }
  }

  return [
    'labels' => $labels,
    'data' => array_values($data)
  ];
}


function getActivityUsageData(PDO $pdo): array {
    $sql = "
      SELECT a.name AS activity_name, COUNT(ua.activity_id) AS total
      FROM user_activities ua
      JOIN activity a ON ua.activity_id = a.id
      GROUP BY ua.activity_id
      ORDER BY total DESC
    ";
  
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  
    $labels = [];
    $values = [];
  
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $labels[] = $row['activity_name'];
      $values[] = (int)$row['total'];
    }
  
    return ['labels' => $labels, 'data' => $values];
  }
