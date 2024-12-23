<?php
// Simulate login process
include 'db_connect.php';

// Sample login credentials
$inputUsername = 'shanto'; // Change as needed
$inputPassword = '567'; // Change as needed

// Query the database to check admin credentials
$sql = "SELECT * FROM admin WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $inputUsername);
$stmt->execute();
$result = $stmt->get_result();

// Check if any record matches
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($inputPassword, $row['password'])) {
        // Output success message
        echo "Admin Log In successful!";
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid username or password.";
}

$stmt->close();
$conn->close();
echo "Login test executed.";
?>
