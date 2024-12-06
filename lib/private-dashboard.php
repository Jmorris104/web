<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_COOKIE['user']); ?></h1>
    <nav>
        <a href="create.php">Create</a>
        <a href="update.php">Update</a>
        <a href="delete.php">Delete</a>
        <a href="../auth/logout.php">Logout</a>
    </nav>
</body>
</html>
