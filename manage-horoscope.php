<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit;
}

include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $zodiac_id = $_POST['zodiac_id'];
    $horoscope = $_POST['horoscope'];
    $date = $_POST['date'];

    $stmt = $pdo->prepare('INSERT INTO daily_horoscopes (zodiac_id, date, horoscope)
                           VALUES (?, ?, ?)
                           ON DUPLICATE KEY UPDATE horoscope = ?');
    $stmt->execute([$zodiac_id, $date, $horoscope, $horoscope]);
}

$stmt = $pdo->prepare('SELECT * FROM zodiac_signs');
$stmt->execute();
$zodiac_signs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Horoscope</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Manage Horoscope</h1>
    <form method="post">
        <label for="zodiac_id">Zodiac Sign:</label>
        <select name="zodiac_id" id="zodiac_id" required>
            <?php foreach ($zodiac_signs as $sign): ?>
                <option value="<?php echo $sign['id']; ?>"><?php echo $sign['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>
        <label for="horoscope">Horoscope:</label>
        <textarea name="horoscope" id="horoscope" required></textarea>
        <button type="submit">Save Horoscope</button>
    </form>
</body>
</html>
