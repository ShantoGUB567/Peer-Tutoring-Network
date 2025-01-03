<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peer Tutor</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="logo.png">

    <!-- <style>
      .course-container {
        display: flex;
        flex-wrap: wrap; /* Allows wrapping to the next row */
        justify-content: center; /* Centers blocks horizontally */
        align-items: center; /* Centers blocks vertically */
        gap: 20px; /* Space between blocks */
        padding: 20px; /* Padding around the container */
        min-height: 100vh; /* Ensures full height to center blocks */
        background-color: #f4f4f4; /* Light gray background */
        box-sizing: border-box; /* Includes padding in container dimensions */
      }

    </style> -->
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


    <main class="main-content">
      <h1>Available Courses</h1>
      <?php
        
        // Include the file that fetches and displays courses
        include('fetch_courses.php');
        ?>
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