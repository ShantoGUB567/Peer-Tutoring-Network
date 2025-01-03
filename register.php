<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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


    <div class="registration-container">
      <form id="registrationForm" class="registration-form" action="save_registration.php" method="POST">
            <h1>Registration Form</h1>
            <!-- Name -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <!-- Student ID -->
            <div class="form-group">
                <label for="studentId">Student ID</label>
                <input type="text" id="studentId" name="studentId" required maxlength="9" pattern="\d{9}" title="Student ID must be exactly 9 digits">
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <!-- Confirm Password -->
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <!-- Phone Number -->
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required pattern="\d{10,15}" title="Phone number must be between 10 to 15 digits">
            </div>
            <!-- Institution -->
            <div class="form-group">
                <label for="institution">Institution Name</label>
                <select id="institution" name="institution" required>
                    <option value="Green University of Bangladesh">Green University of Bangladesh</option>
                </select>
            </div>
            <!-- Department -->
            <div class="form-group">
                <label for="department">Department</label>
                <select id="department" name="department" required>
                    <option value="">Select Department</option>
                    <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                    <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                    <option value="Textile Engineering">Textile Engineering</option>
                    <option value="Artificial Intelligence and Data Science">Artificial Intelligence and Data Science</option>
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="Green Business School">Green Business School</option>
                    <option value="Department of Law">Department of Law</option>
                    <option value="Department of English">Department of English</option>
                    <option value="Department of Sociology">Department of Sociology</option>
                    <option value="Department of Journalism & Media Communication">Department of Journalism & Media Communication</option>
                </select>
            </div>
            <!-- Batch -->
            <div class="form-group">
                <label for="batch">Batch</label>
                <input type="text" id="batch" name="batch" required maxlength="3" pattern="\d{3}" title="Batch must be exactly 3 digits">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Register</button>
        </form>
    </div>

    <script src="script.js"></script>


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