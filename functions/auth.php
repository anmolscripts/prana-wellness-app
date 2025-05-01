<?php
// auth.php

session_start();

function checkLogin() {
    // Check if session exists
    if (!isset($_SESSION['user'])) {
        return false;
    }

    // Check session timeout (12 hours = 43200 seconds)
    $login_time = $_SESSION['user']['login_time'] ?? 0;
    if ((time() - $login_time) > 43200) {
        session_unset();
        session_destroy();
        return false;
    }

    return true;
}

function requireLogin($redirectUrl = 'auth/login') {
    if (!checkLogin()) {
        header("Location: $redirectUrl");
        exit;
    }
}
?>
