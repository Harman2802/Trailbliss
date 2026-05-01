<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $query = "INSERT INTO quick_query (name, email, phone, country, message) 
              VALUES ('$name', '$email', '$phone', '$country', '$message')";

    if (mysqli_query($conn, $query)) {
        header("Location: thankyouquery.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
