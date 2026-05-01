<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "trailbliss";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
<?php
$conn = new mysqli("localhost","root","","trailbliss");
if ($conn->connect_error) die("Database Error");
?>
