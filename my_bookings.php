<?php
include "db.php";

if (!isset($_GET['booking_id'])) {
    die("Invalid booking");
}

$booking_id = $_GET['booking_id'];

$stmt = $conn->prepare("SELECT * FROM bookings WHERE id = ?");
$stmt->bind_param("i", $booking_id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Booking not found");
}

$row = $result->fetch_assoc();
$stmt->close();

function e($v){
    return htmlspecialchars($v);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>My Booking</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  font-family:'Segoe UI',sans-serif;
  background:linear-gradient(135deg,#eef2ff,#f8fafc);
  padding:50px;
}

.card{
  max-width:600px;
  margin:auto;
  border-radius:20px;
  box-shadow:0 20px 60px rgba(0,0,0,.1);
  background:#fff;
  overflow:hidden;
}

.header{
  background:#6366f1;
  color:#fff;
  padding:20px;
  text-align:center;
}

.body{
  padding:30px;
}

.row-item{
  display:flex;
  justify-content:space-between;
  padding:12px 0;
  border-bottom:1px dashed #ddd;
}

.label{
  font-weight:600;
  color:#64748b;
}

.value{
  font-weight:600;
  color:#111827;
}

.btn-home{
  display:inline-block;
  margin-top:25px;
  padding:12px 22px;
  border-radius:25px;
  font-weight:600;
  background:#6366f1;
  color:#fff;
  text-decoration:none;
}

.btn-home:hover{
  background:#4f46e5;
}
</style>
</head>

<body>

<div class="card">

<div class="header">
  <h4>Booking Details</h4>
</div>

<div class="body">

<div class="row-item">
  <span class="label">Booking ID</span>
  <span class="value">#<?= $row['id'] ?></span>
</div>

<div class="row-item">
  <span class="label">Passenger Name</span>
  <span class="value"><?= e($row['passenger_name']) ?></span>
</div>

<div class="row-item">
  <span class="label">From</span>
  <span class="value"><?= e($row['from_city']) ?></span>
</div>

<div class="row-item">
  <span class="label">To</span>
  <span class="value"><?= e($row['to_city']) ?></span>
</div>

<div class="row-item">
  <span class="label">Travel Date</span>
  <span class="value"><?= e($row['travel_date']) ?></span>
</div>

<div class="row-item">
  <span class="label">Amount</span>
  <span class="value">₹<?= number_format($row['price']) ?></span>
</div>

<div class="row-item">
  <span class="label">Payment Status</span>
  <span class="value"><?= e($row['payment_status']) ?></span>
</div>

<div class="row-item">
  <span class="label">Booking Status</span>
  <span class="value"><?= e($row['booking_status']) ?></span>
</div>

<div class="text-center">
  <a href="front.php" class="btn-home">⬅ Back to Home</a>
</div>

</div>
</div>

</body>
</html>