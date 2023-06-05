<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "Akisophiekingking";
    $database = "login_credentials";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the session variable is set
    if (!isset($_SESSION['dean_username'])) {
        // Redirect to the login page if the session variable is not set
        header("Location: login-page.php");
        exit();
    }

    // Retrieve the username from the session variable
    $faculty_username = $_SESSION['faculty_username'];

    // Retrieve the ID where faculty_username matches
    $query = "SELECT ID FROM faculty_credentials WHERE username = '$faculty_username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the row and retrieve the ID value
        $row = mysqli_fetch_assoc($result);
        $ID = $row['ID'];

    } else {
        // No matching row found
        echo "No matching faculty_username found.";
    }
    $conn->close();
}
?>
 <form action="SAMPLE.PHP">


    <button type="submit">asd</button>
 </form>

</body>
</html>