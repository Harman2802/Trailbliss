<?php
include "db.php";

if (!isset($_POST['booking_id'])) {
    die("Invalid request");
}

$booking_id = $_POST['booking_id'];

// Update booking status
$stmt = $conn->prepare("
    UPDATE bookings 
    SET booking_status = 'Cancelled' 
    WHERE id = ?
");

$stmt->bind_param("i", $booking_id);
$stmt->execute();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>Cancelled</title>

<script>
    alert("Your booking has been cancelled successfully!");
    window.location.href = "front.php";
</script>

</head>
<body></body>
</html>