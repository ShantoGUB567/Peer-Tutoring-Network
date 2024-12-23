<?php
include 'db_connect.php';

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $studentId = mysqli_real_escape_string($conn, $_POST['studentId']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $institution = mysqli_real_escape_string($conn, $_POST['institution']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $batch = mysqli_real_escape_string($conn, $_POST['batch']);

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

    // Prepare SQL query using direct execution
    //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // $sql = "INSERT INTO users (name, student_id, email, password, phone, institution, department, batch) VALUES ('$name', '$studentId', '$email', '$hashedPassword', '$phone', '$institution', '$department', '$batch')";

    // $sql = "INSERT INTO `users` (`id`, `name`, `studentId`, `email`, `password`, `phone`, `institution`, `department`, `batch`, `created_at`) VALUES (NULL, '$name', '$studentId', '$email', '$hashedPassword', '$phone', '$institution', '$department', '$batch', current_timestamp());";

    $sql = "INSERT INTO users ( name, studentId, email, password, phone, institution, department, batch, created_at) VALUES ( '$name', '$studentId', '$email', '$hashedPassword', '$phone', '$institution', '$department', '$batch', current_timestamp());";

    // // Prepare SQL query using prepared statements
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // $stmt = $conn->prepare("INSERT INTO users (name, studentid, email, password, phone, institution, department, batch) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param("ssssssss", $name, $studentId, $email, $hashedPassword, $phone, $institution, $department, $batch);
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    }
 else {
    echo "Invalid request method.";
}
?>
