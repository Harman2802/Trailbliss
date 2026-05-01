<?php
include "db.php";

// Validate required fields
$required = ['type','from','to','date','price','name','phone','email','payment_status'];

foreach($required as $field){
    if(empty($_POST[$field])){
        die("Missing field: $field");
    }
}

function e($v){
    return htmlspecialchars($v);
}

$payment_status = $_POST['payment_status'];
$booking_status = "Confirmed";

/*
    PAYMENT LOGIC
    - Cash → Cash_Pending
    - Online → Paid
*/
if ($payment_status === "Cash") {
    $payment_status_db = "Cash_Pending";
} else {
    $payment_status_db = "Paid";
}

// INSERT BOOKING
$stmt = $conn->prepare("
    INSERT INTO bookings 
    (type, from_city, to_city, travel_date, price, passenger_name, phone, email, payment_status, booking_status, booked_at)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
");

$stmt->bind_param(
    "ssssisssss",
    $_POST['type'],
    $_POST['from'],
    $_POST['to'],
    $_POST['date'],
    $_POST['price'],
    $_POST['name'],
    $_POST['phone'],
    $_POST['email'],
    $payment_status_db,
    $booking_status
);

$stmt->execute();
$booking_id = $conn->insert_id;
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Status</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #eef2ff, #fdf2f8);
    text-align: center;
    padding: 60px 20px;
}

.card {
    background: #fff;
    width: 460px;
    margin: auto;
    padding: 40px;
    border-radius: 22px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.12);
    animation: fadeIn 0.6s ease-in-out;
    border-top: 6px solid #6366f1;
}

.icon {
    font-size: 70px;
    margin-bottom: 10px;
}

h2 {
    margin: 10px 0;
    font-size: 24px;
    color: #111827;
}

p {
    font-size: 15px;
    color: #374151;
    line-height: 1.6;
    margin: 8px 0;
}

b {
    color: #111827;
}

.status {
    display: inline-block;
    padding: 6px 14px;
    border-radius: 20px;
    font-weight: 600;
    margin-top: 10px;
}

.paid {
    background: #dcfce7;
    color: #166534;
}

.pending {
    background: #fef3c7;
    color: #92400e;
}

.cancel {
    background: #fee2e2;
    color: #991b1b;
}

.btn {
    display: inline-block;
    margin-top: 25px;
    padding: 12px 22px;
    background: #6366f1;
    color: #fff;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
    border: none;
    cursor: pointer;
}

.btn:hover {
    background: #4f46e5;
    transform: translateY(-2px);
}

.btn-cancel {
    background: #ef4444;
    margin-right: 10px;
}

.btn-cancel:hover {
    background: #b91c1c;
}

@keyframes fadeIn {
    from {opacity:0; transform: translateY(20px);}
    to {opacity:1; transform: translateY(0);}
}
</style>
</head>

<body>

<div class="card">

<?php if ($payment_status === "Cash"): ?>

    <div class="icon">💵</div>
    <h2>Booking Confirmed</h2>

    <span class="status pending">Payment Pending (Cash)</span>

    <p>Hi <b><?= e($_POST['name']) ?></b>,</p>

    <p>
        Your <b><?= e($_POST['type']) ?></b> booking from 
        <b><?= e($_POST['from']) ?></b> to 
        <b><?= e($_POST['to']) ?></b> is confirmed.
    </p>

    <p><b>Instruction:</b> Pay cash at departure and collect your ticket.</p>
    <p><b>Total Amount:</b> ₹<?= number_format($_POST['price']) ?></p>

<?php else: ?>

    <div class="icon">✔️</div>
    <h2>Payment Successful</h2>

    <span class="status paid">Paid</span>

    <p>Hi <b><?= e($_POST['name']) ?></b>,</p>

    <p>
        Your <b><?= e($_POST['type']) ?></b> booking from 
        <b><?= e($_POST['from']) ?></b> to 
        <b><?= e($_POST['to']) ?></b> is confirmed.
    </p>

    <p><b>Payment Method:</b> Online</p>
    <p><b>Total Paid:</b> ₹<?= number_format($_POST['price']) ?></p>

<?php endif; ?>

<!-- ACTION BUTTONS -->
<div style="margin-top:20px;">

    <!-- CANCEL BUTTON -->
    <form action="cancel_booking.php" method="post" style="display:inline;"
          onsubmit="return confirm('Are you sure you want to cancel this booking?');">

        <input type="hidden" name="booking_id" value="<?= $booking_id ?>">

        <button type="submit" class="btn btn-cancel">
            ❌ Cancel Booking
        </button>

    </form>

    <!-- VIEW BOOKING -->
    <a class="btn" href="my_bookings.php?booking_id=<?= $booking_id ?>">
        📋 View My Booking
    </a>

</div>

</div>

</body>
</html>