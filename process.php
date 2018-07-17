<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbdb = "portfolio_contact";

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbdb);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
error_reporting(E_ERROR | E_WARNING | E_PARSE);



$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO mailbox (fullname, email, message)
VALUES ('$fullname', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='display: table; margin:100px auto; color: red; font-size: 2em;' class='message'>Twoja Wiadomość została wysłana pomyślnie! Dziękujemy :)";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>