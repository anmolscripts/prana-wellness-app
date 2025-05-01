<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prana_wellness";

function checkDatabaseExists($servername, $username, $password, $dbname)
{
  // Check if the database exists
  try {
    $pdo = new PDO("mysql:host=$servername", $username, $password);

    $stmt = $pdo->query("SHOW DATABASES LIKE " . $pdo->quote($dbname));
    if ($stmt->fetch()) {
      echo "Database '$dbname' exists.";
    } else {
      echo "Database '$dbname' does NOT exist.";
    }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

// Create connection
try {
  $conn = new PDO("mysql:host=$servername;", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}






?>