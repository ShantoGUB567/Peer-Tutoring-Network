<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Peer Tutor</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="logo.png">

    <style>
      /* Blog container */
      .blog-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 20px; /* Space between the blog blocks */
          padding: 20px;
          margin: 0 auto;
      }

      /* Blog block */
      .blog {
          flex: 0 1 calc(50% - 20px); /* Two columns with gap adjustment */
          background-color: #f9f9f9;
          border: 1px solid #ddd;
          border-radius: 10px;
          padding: 20px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          box-sizing: border-box;
          transition: transform 0.3s, box-shadow 0.3s;
      }

      /* Hover effect for blog block */
      .blog:hover {
          transform: translateY(-5px);
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }

      /* Blog title */
      .blog h2 {
          font-size: 1.6rem;
          color: #004d99; /* Navy Blue */
          margin-bottom: 10px;
      }

      /* Author details */
      .blog p strong {
          font-weight: bold;
          color: #555;
      }

      /* Blog content preview */
      .blog p {
          font-size: 1rem;
          color: #333;
          margin-bottom: 10px;
          line-height: 1.5;
      }

      /* Posted date */
      .blog p em {
          font-size: 0.9rem;
          color: #888;
      }

      /* Read More link */
      .read-more {
          display: inline-block;
          margin-top: 10px;
          padding: 8px 12px;
          background-color: #004d99; /* Navy Blue */
          color: #fff;
          text-decoration: none;
          border-radius: 5px;
          font-size: 0.9rem;
          transition: background-color 0.3s;
      }

      .read-more:hover {
          background-color: #003366; /* Darker Navy Blue */
      }

      /* Responsive Design */
      @media (max-width: 768px) {
          .blog {
              flex: 0 1 100%; /* Stack in one column for smaller screens */
          }
      }

    </style>

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

    <main>
      <h1 style="text-align: center; margin-top: 20px;">Our Blogs</h1>
      <div class="blog-container">
          <?php include 'fetch_blog.php'; ?>
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
