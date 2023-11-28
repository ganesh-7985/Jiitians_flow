<?php
// Establish connection to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsw_project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data sent from JavaScript
$data = json_decode(file_get_contents('php://input'), true);

$title = $data['title'];
$body = $data['body'];
$tags = $data['tags'];
$email = $data['email'];

// You might want to perform some validation and sanitization on $title, $body, and $tags

// Insert the question into the database
$sql = "INSERT INTO questions (title, body, tags, vote, user_email, Asked_date)
        VALUES ('$title', '$body', '$tags', 0, '$email', CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "Question inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
