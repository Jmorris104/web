<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/validations.js"></script>
</head>
<body>
    <h1>Contact Us</h1>
    <form id="contactForm" method="post" action="/contact-handler.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>
