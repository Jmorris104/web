//loginvalidation
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        setcookie('user', $user['name'], time() + 3600, "/");
        header('Location: /private/dashboard.php');
    } else {
        echo "Invalid credentials!";
    }
}
?>
