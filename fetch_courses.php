<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peertutordb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Fetch courses from the database
$sql = "SELECT * FROM Course"; // Assuming there is a Courses table
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each course
    while($row = $result->fetch_assoc()) {
        echo "<div class='course'>";
        echo "<h2>" . $row['name'] . "</h2>"; // Assuming 'course_name' is a column in the Courses table
        echo "<p>" . $row['details'] . "</p>"; // Assuming 'description' is a column in the Courses table
        echo "<p><strong>Time to Complete:</strong> " . $row['time'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No courses available.";
}

$conn->close();
?>
