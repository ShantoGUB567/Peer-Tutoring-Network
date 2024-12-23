<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PeerTutorDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Query the database to check admin credentials
    $sql = "SELECT * FROM Admin WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $inputUsername, $inputPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any record matches
    if ($result->num_rows > 0) {
        // Redirect to admin dashboard
        echo "Admin Log In successful!";
        header("Location: admin_dashboard.html");
        exit();
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();
?>
