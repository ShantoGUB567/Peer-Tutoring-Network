<?php
include 'db_connect.php';

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $studentId = $_POST['studentId'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $institution = $_POST['institution'];
    $department = $_POST['department'];
    $batch = $_POST['batch'];

    // Debugging: Print received data (commented out for production)
    // echo "Received Data:<br>";
    // echo "Name: $name<br>";
    // echo "Student ID: $studentId<br>";
    // echo "Email: $email<br>";
    // echo "Phone: $phone<br>";
    // echo "Institution: $institution<br>";
    // echo "Department: $department<br>";
    // echo "Batch: $batch<br>";

    // Check for password confirmation
    if ($password !== $_POST['confirmPassword']) {
        die("Error: Passwords do not match.");
    }

    // Prepare SQL query using prepared statements
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (name, student_id, email, password, phone, institution, department, batch) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $studentId, $email, $hashedPassword, $phone, $institution, $department, $batch);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    }
} else {
    echo "Invalid request method.";
}
?>
