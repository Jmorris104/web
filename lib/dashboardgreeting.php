<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /auth/login.php');
    exit;
}
echo "Welcome, " . htmlspecialchars($_COOKIE['user']);
?>
