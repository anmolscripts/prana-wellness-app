<?php

/**
 * Configuration file
 */
?>

<?php
require_once '../../functions/db.php';

try {
    $stmt = $conn->prepare("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = :dbname");
    $stmt->bindParam(':dbname', $dbname);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "✅ Database '$dbname' exists. \n";
    } else {
        $sql = "CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
        $conn->exec($sql);
        echo "Database checked/created successfully \n";

        $conn->exec("USE `$dbname`");
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// -- USERS TABLE
$userTable = "users";
try {
    $conn->exec("USE $dbname");
    $stmt = $conn->prepare("
        SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = :dbname 
          AND TABLE_NAME = :table
    ");
    $stmt->execute([
        ':dbname' => $dbname,
        ':table' => $userTable
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<br>✅ Table '$userTable' exists in database '$dbname'. \n";
    } else {
        echo "<br>❌ Table '$userTable' does not exist in database '$dbname'. \n";
        $createTableSQL = "
            CREATE TABLE `$userTable` (
                id INT PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) UNIQUE NOT NULL,
                password VARCHAR(255) NOT NULL,
                permission ENUM('user', 'admin') NOT NULL,
                status ENUM('active', 'inactive') NOT NULL DEFAULT 'inactive',
                otp INT NOT NULL,
                created_at DATETIME NOT NULL
            );
        ";
        $conn->exec($createTableSQL);
        echo "<br>✅ Table '$userTable' created successfully.\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// -- ACTIVITY TABLE
$activityTable = "activity";
try {
    $stmt = $conn->prepare("
        SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = :dbname 
          AND TABLE_NAME = :table
    ");
    $stmt->execute([
        ':dbname' => $dbname,
        ':table' => $activityTable
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<br>✅ Table '$activityTable' exists in database '$dbname'. \n";
    } else {
        echo "<br>❌ Table '$activityTable' does not exist in database '$dbname'. \n";
        $createActivitySQL = "
            CREATE TABLE `$activityTable` (
                id INT(3) ZEROFILL PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(255) NOT NULL,
                type ENUM('time', 'boolean') NOT NULL,
                state ENUM('active', 'inactive') NOT NULL DEFAULT 'active',
                min_duration INT NULL,
                max_duration INT NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
            );
        ";
        $conn->exec($createActivitySQL);
        echo "<br>✅ Table '$activityTable' created successfully.\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// -- USER_ACTIVITIES TABLE
$userActivitiesTable = "user_activities";
try {
    $stmt = $conn->prepare("
        SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = :dbname 
          AND TABLE_NAME = :table
    ");
    $stmt->execute([
        ':dbname' => $dbname,
        ':table' => $userActivitiesTable
    ]);

    if ($stmt->rowCount() > 0) {
        $alterDB = "ALTER TABLE `$userActivitiesTable`
MODIFY COLUMN activity_date DATETIME NOT NULL;";
        $conn->exec($alterDB);
        echo "<br>✅ Table '$userActivitiesTable' Alter successfully.\n";

        echo "<br>✅ Table '$userActivitiesTable' exists in database '$dbname'. \n";
    } else {
        echo "<br>❌ Table '$userActivitiesTable' does not exist in database '$dbname'. \n";
        $createUserActivitiesSQL = "
            CREATE TABLE `$userActivitiesTable` (
                record_id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT NOT NULL,
                activity_id INT(3) ZEROFILL NOT NULL,
                logged_duration INT NULL,
                logged_value BOOLEAN NULL,
                score INT NULL,
                activity_date DATETIME NOT NULL,
                FOREIGN KEY (user_id) REFERENCES `$userTable`(id) ON DELETE CASCADE,
                FOREIGN KEY (activity_id) REFERENCES `$activityTable`(id) ON DELETE CASCADE
            );
        ";
        $conn->exec($createUserActivitiesSQL);
        echo "<br>✅ Table '$userActivitiesTable' created successfully.\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}



$goalsTable = "goals";
try {
    $stmt = $conn->prepare("
        SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = :dbname 
          AND TABLE_NAME = :table
    ");
    $stmt->execute([
        ':dbname' => $dbname,
        ':table' => $goalsTable
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<br>✅ Table '$goalsTable' exists in database '$dbname'. \n";
    } else {
        echo "<br>❌ Table '$goalsTable' does not exist in database '$dbname'. \n";
        $createGoalsSQL = "
            CREATE TABLE `$goalsTable` (
                goal_id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT NOT NULL,
                activity_id INT(3) ZEROFILL NOT NULL,
                goal_date DATETIME NOT NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES `$userTable`(id) ON DELETE CASCADE,
                FOREIGN KEY (activity_id) REFERENCES `$activityTable`(id) ON DELETE CASCADE
            );
        ";
        $conn->exec($createGoalsSQL);
        echo "<br>✅ Table '$goalsTable' created successfully.\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>
