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


// Fetch blogs from the database
$sql = "SELECT * FROM blog ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='blog'>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p><strong>Author:</strong> " . $row['author'] . "</p>";
        echo "<p>" . substr($row['content'], 0, 150) . "...</p>"; // Show first 150 characters
        echo "<p><em>Posted on: " . $row['created_at'] . "</em></p>";
        echo "<a href='#' class='read-more'>Read More</a>";
        echo "</div>";
    }
} else {
    echo "No blogs available.";
}

$conn->close();
?>
