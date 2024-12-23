<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="logo.png">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <a href="home.html" class="logo-link">
              <img src="logo.png" alt="Peer Tutor Logo" class="logo">
              <span class="site-name">Peer Tutor</span>
            </a>
          </div>
          <nav class="nav-menu">
            <a href="home.php" class="nav-link">Home</a>
            <a href="about.html" class="nav-link">About</a>
            <a href="service.html" class="nav-link">Service</a>
            <a href="blog.php" class="nav-link">Blog</a>
            <a href="contact.html" class="nav-link">Contact</a>
            <a href="login.php" class="nav-link">Login</a>
            <a href="register.php" class="nav-link">Register</a>
            <a href="dashboard.php" class="nav-link">Dashboard</a>
            <!-- <a href="register.html" class="nav-link">Admin Dashboard</a> -->
          </nav>
    </header>


    <div class="login-container">
        <div class="login-box">
          <h1>Student Login</h1>
<?php
session_start();

// Check if the user is logged in
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

    // Hardcoded credentials for demonstration (replace with database check in production)
    if ($student_id === '123456789' && $password === 'password') {
        $_SESSION['username'] = $student_id; // Set session variable
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: dashboard.php");
        echo "<script>alert('Invalid Student ID or Password');</script>";
    }
}
?>
<form action="login.php" method="POST" class="login-form">
            <div class="form-group">
              <label for="student-id">Student ID</label>
              <input type="text" id="student-id" name="student_id" maxlength="9" pattern="\d{9}" placeholder="Enter your Student ID" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
            <p class="register-link">
              Don't have an account? <a href="register.html">Register here</a>.
            </p>
          </form>
        </div>
    </div>


    <footer class="footer">
        <div class="footer-section contact">
          <h3>Contact Us</h3>
          <p>Email: <a href="mailto:contact@peertutor.com" class="email-link">contact@peertutor.com</a></p>
          <p>Phone: +880123456789</p>
        </div>
        <div class="footer-section follow">
          <h3>Follow Us</h3>
          <a href="https://facebook.com" target="_blank">Facebook</a><br>
          <a href="https://twitter.com" target="_blank">Twitter</a><br>
          <a href="https://linkedin.com" target="_blank">LinkedIn</a>
        </div>
        <div class="footer-section admin">
          <h3>Admin Login</h3>
          <form action="admin-login.html" method="POST">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Login</button>
          </form>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Peer Tutor | Developed by Al Shahriar Ahommed Shanto & Tajmin Khanam</p>
        </div>
      </footer>
</body>
</html>