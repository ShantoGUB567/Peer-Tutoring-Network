<?php
session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: admin-login.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="logo.png">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <a href="home.php" class="logo-link">
              <img src="logo.png" alt="Peer Tutor Logo" class="logo">
              <span class="site-name">Peer Tutor</span>
            </a>
          </div>
        <nav class="nav-menu">
          <a href="home.php" class="nav-link">Home</a>
          <a href="about.html" class="nav-link">About</a>
          <a href="service.html" class="nav-link">Service</a>
          <a href="blog.html" class="nav-link">Blog</a>
          <a href="contact.html" class="nav-link">Contact</a>
          <a href="logout.php" class="nav-link">Logout</a>
        </nav>
    </header>

<main class="main-content">
      <h1>Welcome to the Dashboard</h1>
      <h2>Thank you for logging in, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
      <br>

      <h2>Your Enrolled Courses:</h2>
      <ul>
          <li>web programming</li>
          <li>database management</li>
          <li>cyber security</li>
      </ul>
      
      <div class="add-blog-form">
        <h2>Add New Blog</h2>
        <form action="submit_blog.php" method="POST">
            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="content">Blog Content</label>
                <textarea id="content" name="content" rows="6" required></textarea>
            </div>

            <div class="form-group">
                <label for="author">Author Name</label>
                <input type="text" id="author" name="author" required>
            </div>

            <button type="submit" class="submit-btn">Submit Blog</button>
        </form>
    </div>
    </main>

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
