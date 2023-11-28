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

// Fetch data from the questions table
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $questions = array();
    while ($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
    // Convert fetched data to JSON and echo it
    echo json_encode($questions);
} else {
    echo "No questions found";
}

$conn->close();
?>
