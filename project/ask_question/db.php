<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questions";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch questions from the database
$sql = "SELECT * FROM questions_table";
$result = $conn->query($sql);

$questions = array();

if ($result->num_rows > 0) {
    // Fetch each row as an associative array
    while($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
}

// Close the connection
$conn->close();

// Convert the questions array to JSON
$jsonData = json_encode($questions);

// Return the JSON data
header('Content-Type: application/json');
echo $jsonData;
?>
