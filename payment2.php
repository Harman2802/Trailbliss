<?php
$data = $_POST;

// Dynamic UPI QR
$amount = htmlspecialchars($data['price'] ?? 0);
$upi_id = "8284845308@pthdfc";
$name = "Divya Kumari";

$upi_link = "upi://pay?pa=$upi_id&pn=".urlencode($name)."&am=$amount&cu=INR";
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment</title>
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
  max-width:900px;
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
  color:#ff4d88;
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
  border-color:#ff4d88;
}

.option.active{
  background:#ffe4ec;
  border-color:#ff4d88;
}

/* QR BOX */
.qr-box{
  display:none;
  text-align:center;
  margin-top:15px;
}

.qr-box img{
  width:240px;
  max-width:100%;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.amount{
  margin-top:10px;
  font-weight:800;
  color:#e11d74;
  font-size:18px;
}

.btn-pay{
  width:100%;
  padding:14px;
  border:none;
  border-radius:30px;
  background:#ff4d88;
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
    <h4>📋 Booking Summary</h4>
    <p><span>From</span><span><?= htmlspecialchars($data['from'] ?? '') ?></span></p>
    <p><span>To</span><span><?= htmlspecialchars($data['to'] ?? '') ?></span></p>
    <p><span>Date</span><span><?= htmlspecialchars($data['date'] ?? '') ?></span></p>
    <p><span>Passenger</span><span><?= htmlspecialchars($data['name'] ?? '') ?></span></p>
    <p><span>Total</span><span>₹<?= $amount ?></span></p>
  </div>

  <!-- RIGHT: PAYMENT -->
  <div class="card-box">
    <h4>💳 Select Payment</h4>

    <div class="option" data-type="Cash">💵 Pay Cash</div>
    <div class="option" data-type="QR">📱 Scan & Pay</div>

    <!-- QR DISPLAY -->
    <div class="qr-box" id="qrBox">
      <p style="font-weight:700;">Scan & Pay via UPI</p>

      <!-- Dynamic QR -->
      <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=<?= urlencode($upi_link) ?>" alt="UPI QR">

      <div class="amount">Amount: ₹<?= $amount ?></div>

      <p style="font-weight:600;">
        UPI ID: <b><?= $upi_id ?></b>
      </p>

      <!-- CONFIRM CHECK -->
      <div style="margin-top:10px;">
        <label style="font-weight:600;">
          <input type="checkbox" id="paidCheck">
          I have completed the payment
        </label>
      </div>
    </div>

    <!-- FORM -->
    <form action="confirm_booking.php" method="POST" id="form">
      <?php foreach($data as $k=>$v): ?>
        <input type="hidden" name="<?= htmlspecialchars($k) ?>" value="<?= htmlspecialchars($v) ?>">
      <?php endforeach; ?>

      <!-- IMPORTANT FIX -->
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
    alert("⚠️ Please select payment method.");
    return;
  }

  if(methodInput.value === "QR" && !paidCheck.checked){
    e.preventDefault();
    alert("⚠️ Please complete the payment and confirm.");
    return;
  }

});
</script>

</body>
</html>