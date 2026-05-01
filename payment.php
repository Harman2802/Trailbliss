<?php
// =====================
// FETCH DATA
// =====================
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$package = strtolower(trim($_GET['package'] ?? ''));
$description = $_GET['description'] ?? '';
$travel_date = $_GET['travel_date'] ?? '';
$duration = $_GET['duration'] ?? '';
$persons = intval($_GET['persons'] ?? 1);
$contact = $_GET['contact'] ?? '';

// =====================
// PRICING SYSTEM
// =====================
$price_per_person = 0;

// India
if (str_contains($package, "north") || str_contains($package, "himachal") || str_contains($package, "kashmir")) {
    $price_per_person = 8000;
}
elseif (str_contains($package, "south") || str_contains($package, "kerala") || str_contains($package, "tamil")) {
    $price_per_person = 10000;
}
elseif (str_contains($package, "goa") || str_contains($package, "west") || str_contains($package, "rajasthan")) {
    $price_per_person = 9000;
}
elseif (str_contains($package, "east") || str_contains($package, "assam") || str_contains($package, "sikkim")) {
    $price_per_person = 7000;
}
elseif (str_contains($package, "central") || str_contains($package, "mp")) {
    $price_per_person = 6000;
}

// International
elseif (str_contains($package, "dubai")) {
    $price_per_person = 35000;
}
elseif (str_contains($package, "thailand")) {
    $price_per_person = 30000;
}
elseif (str_contains($package, "singapore")) {
    $price_per_person = 45000;
}
elseif (str_contains($package, "europe") || str_contains($package, "paris")) {
    $price_per_person = 120000;
}
elseif (str_contains($package, "usa")) {
    $price_per_person = 150000;
}
elseif (str_contains($package, "maldives")) {
    $price_per_person = 60000;
}
elseif (str_contains($package, "australia")) {
    $price_per_person = 140000;
}
else {
    $price_per_person = 15000;
}

$total_cost = $price_per_person * $persons;

// =====================
// UPI PAYMENT
// =====================
$upi_id = "8284845308@pthdfc";
$upi_name = "TrailBliss Travel";
$upi_link = "upi://pay?pa=$upi_id&pn=" . urlencode($upi_name) . "&am=$total_cost&cu=INR";
?>

<!DOCTYPE html>
<html>
<head>
<title>TrailBliss Payment</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  min-height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  background: linear-gradient(135deg,#fdf2f8,#fff);
  font-family:'Segoe UI', sans-serif;
}

.wrapper{
  width:100%;
  max-width:950px;
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:30px;
}

.card-box{
  background:#fff;
  padding:30px;
  border-radius:20px;
  box-shadow:0 15px 40px rgba(0,0,0,0.1);
}

h4{
  text-align:center;
  color:#ff1493;
  font-weight:800;
  margin-bottom:20px;
}

.summary p{
  display:flex;
  justify-content:space-between;
  padding:10px 0;
  border-bottom:1px dashed #ddd;
  font-weight:600;
}

/* PAYMENT OPTIONS */
.option{
  border:2px solid #eee;
  padding:15px;
  border-radius:12px;
  margin-bottom:15px;
  cursor:pointer;
  text-align:center;
  font-weight:700;
  transition:0.3s;
}

.option:hover{
  border-color:#ff1493;
}

.option.active{
  background:#ffe4f0;
  border-color:#ff1493;
}

/* QR */
.qr-box{
  display:none;
  text-align:center;
  margin-top:15px;
}

.qr-box img{
  width:240px;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.amount{
  margin-top:10px;
  font-weight:800;
  color:#e11d74;
  font-size:18px;
}

/* BUTTON */
.btn-pay{
  width:100%;
  padding:14px;
  border:none;
  border-radius:30px;
  background:#ff1493;
  color:#fff;
  font-weight:800;
  margin-top:20px;
}

.btn-pay:hover{
  background:#e11d74;
}

@media(max-width:768px){
  .wrapper{
    grid-template-columns:1fr;
  }
}
</style>
</head>

<body>

<div class="wrapper">

  <!-- LEFT: SUMMARY -->
  <div class="card-box summary">
    <h4>📋 Trip Summary</h4>

    <p><span>Name</span><span><?= htmlspecialchars($name) ?></span></p>
    <p><span>Email</span><span><?= htmlspecialchars($email) ?></span></p>
    <p><span>Package</span><span><?= ucfirst($package) ?></span></p>
    <p><span>Date</span><span><?= htmlspecialchars($travel_date) ?></span></p>
    <p><span>Duration</span><span><?= htmlspecialchars($duration) ?></span></p>
    <p><span>Persons</span><span><?= $persons ?></span></p>
    <p><span>Contact</span><span><?= htmlspecialchars($contact) ?></span></p>
    <p><span>Total</span><span>₹<?= $total_cost ?></span></p>
  </div>

  <!-- RIGHT: PAYMENT -->
  <div class="card-box">
    <h4>💳 Payment Options</h4>

    <div class="option" data-type="Cash">💵 Pay Cash</div>
    <div class="option" data-type="QR">📱 Scan & Pay (UPI)</div>

    <!-- QR SECTION -->
    <div class="qr-box" id="qrBox">
      <p style="font-weight:700;">Scan & Pay via UPI</p>

      <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=<?= urlencode($upi_link) ?>" alt="QR">

      <div class="amount">Amount: ₹<?= $total_cost ?></div>

      <p style="font-weight:600;">
        UPI ID: <b><?= $upi_id ?></b>
      </p>

      <div style="margin-top:10px;">
        <label>
          <input type="checkbox" id="paidCheck">
          I have completed the payment
        </label>
      </div>
    </div>

    <!-- FORM -->
    <form action="save_payment.php" method="POST" id="form">

      <input type="hidden" name="full_name" value="<?= $name ?>">
      <input type="hidden" name="email" value="<?= $email ?>">
      <input type="hidden" name="package" value="<?= $package ?>">
      <input type="hidden" name="travel_date" value="<?= $travel_date ?>">
      <input type="hidden" name="duration" value="<?= $duration ?>">
      <input type="hidden" name="persons" value="<?= $persons ?>">
      <input type="hidden" name="contact" value="<?= $contact ?>">
      <input type="hidden" name="amount" value="<?= $total_cost ?>">

      <input type="hidden" name="payment_status" id="paymentMethod">

      <button class="btn-pay">✅ Confirm Booking</button>
    </form>

  </div>

</div>

<script>
const options = document.querySelectorAll('.option');
const methodInput = document.getElementById('paymentMethod');
const qrBox = document.getElementById('qrBox');
const paidCheck = document.getElementById('paidCheck');
const form = document.getElementById('form');

options.forEach(opt => {
  opt.addEventListener('click', () => {

    options.forEach(o => o.classList.remove('active'));
    opt.classList.add('active');

    const type = opt.getAttribute('data-type');
    methodInput.value = type;

    if(type === "QR"){
      qrBox.style.display = "block";
    } else {
      qrBox.style.display = "none";
      paidCheck.checked = false;
    }
  });
});

form.addEventListener('submit', function(e){

  if(methodInput.value === ""){
    e.preventDefault();
    alert("⚠️ Please select a payment method.");
    return;
  }

  if(methodInput.value === "QR" && !paidCheck.checked){
    e.preventDefault();
    alert("⚠️ Please confirm payment first.");
    return;
  }

});
</script>

</body>
</html>