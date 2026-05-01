<?php
include "db.php";

// =====================
// VALIDATION
// =====================
$required = ['full_name','email','package','travel_date','persons','contact','amount','payment_status'];

foreach($required as $field){
    if(empty($_POST[$field])){
        die("Missing field: $field");
    }
}

function e($v){
    return htmlspecialchars($v);
}

// =====================
// FETCH DATA
// =====================
$name        = $_POST['full_name'];
$email       = $_POST['email'];
$package     = $_POST['package'];
$guide       = $_POST['guide'] ?? '';
$description = $_POST['description'] ?? '';
$travel_date = $_POST['travel_date'];
$duration    = $_POST['duration'] ?? '';
$persons     = (int)$_POST['persons'];
$contact     = $_POST['contact'];
$amount      = (float)$_POST['amount'];
$payment     = $_POST['payment_status'];

// =====================
// PAYMENT LOGIC
// =====================
if ($payment === "Cash") {
    $payment_db = "Cash_Pending";
} else {
    $payment_db = "Paid";
}

// =====================
// INSERT INTO QUOTE TABLE
// =====================
$stmt = $conn->prepare("
    INSERT INTO quote 
    (full_name, email, package, guide, description, travel_date, duration, persons, contact, amount, payment_method)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "sssssssisss",
    $name,
    $email,
    $package,
    $guide,
    $description,
    $travel_date,
    $duration,
    $persons,
    $contact,
    $amount,
    $payment_db
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
    width: 480px;
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

<?php if ($payment === "Cash"): ?>

    <div class="icon">💵</div>
    <h2>Booking Confirmed</h2>

    <span class="status pending">Payment Pending (Cash)</span>

    <p>Hi <b><?= e($name) ?></b>,</p>

    <p>Your <b><?= e($package) ?></b> trip is confirmed.</p>

    <?php if(!empty($guide)): ?>
        <p><b>Guide:</b> <?= e($guide) ?></p>
    <?php endif; ?>

    <p><b>Travel Date:</b> <?= e($travel_date) ?></p>
    <p><b>Persons:</b> <?= e($persons) ?></p>

    <p><b>Instruction:</b> Pay cash at departure.</p>
    <p><b>Total Amount:</b> ₹<?= number_format($amount) ?></p>

<?php else: ?>

    <div class="icon">✔️</div>
    <h2>Payment Successful</h2>

    <span class="status paid">Paid</span>

    <p>Hi <b><?= e($name) ?></b>,</p>

    <p>Your <b><?= e($package) ?></b> trip is confirmed.</p>

    <?php if(!empty($guide)): ?>
        <p><b>Guide:</b> <?= e($guide) ?></p>
    <?php endif; ?>

    <p><b>Total Paid:</b> ₹<?= number_format($amount) ?></p>

<?php endif; ?>

<!-- ACTION BUTTONS -->
<div style="margin-top:20px;">

    <!-- CANCEL -->
    <form action="cancel_booking.php" method="post" style="display:inline;"
          onsubmit="return confirm('Are you sure you want to cancel this booking?');">

        <input type="hidden" name="booking_id" value="<?= $booking_id ?>">

        <button type="submit" class="btn btn-cancel">
            ❌ Cancel Booking
        </button>

    </form>

    <!-- VIEW -->
    <a class="btn" href="my_bookings.php?booking_id=<?= $booking_id ?>">
        📋 View Booking
    </a>

</div>

</div>

</body>
</html>