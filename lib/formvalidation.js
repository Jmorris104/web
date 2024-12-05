//jsformvalidation
document.getElementById('registerForm').addEventListener('submit', function (e) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        e.preventDefault();
        alert('Invalid email format');
    }

    if (password.length < 6) {
        e.preventDefault();
        alert('Password must be at least 6 characters long');
    }
});