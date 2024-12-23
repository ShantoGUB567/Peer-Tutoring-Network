<?php
// Database connection
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    // Prepare and execute SQL query to insert the blog post
    $query = "INSERT INTO blog (title, content, author) VALUES ('$title', '$content', '$author')";
    
    if (mysqli_query($conn, $query)) {
        echo "New blog post created successfully!";
        // Redirect to dashboard or blog list after successful insertion
        header("Location: dashboard.html");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
