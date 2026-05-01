<?php
$type  = $_POST['type'] ?? '';
$from  = $_POST['from'] ?? '';
$to    = $_POST['to'] ?? '';
$date  = $_POST['date'] ?? '';
$price = $_POST['price'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
<title>Review Booking</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* PAGE CENTER */
body{
  min-height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  background: linear-gradient(135deg, #fff0f6, #fdf2f8);
  font-family: 'Segoe UI', sans-serif;
}

/* CARD */
.card{
  width:100%;
  max-width:650px;
  border-radius:26px;
  border:none;
  background:#ffffff;
  box-shadow:0 25px 60px rgba(0,0,0,.12);
  animation: fadeUp .6s ease;
}

/* TITLE */
h4{
  font-weight:700;
  color:#ff66a0;
  text-align:center;
  margin-bottom:25px;
}

/* CONTENT CENTER */
p{
  font-size:16px;
  color:#374151;
  text-align:center;
  margin-bottom:12px;
}

p strong{
  color:#111827;
}

.fs-5{
  font-size:20px !important;
  color:#ff66a0;
  font-weight:700;
  text-align:center;
}

/* BUTTONS */
.btn-primary{
  background:#ff66a0;
  border:none;
  padding:14px;
  font-weight:700;
  border-radius:30px;
  transition:all .3s ease;
}

.btn-primary:hover{
  background:#e11d74;
  transform:translateY(-2px);
  box-shadow:0 10px 25px rgba(255,102,160,.35);
}

.btn-outline-secondary{
  border-radius:30px;
  padding:13px;
  font-weight:600;
}

/* FADE ANIMATION */
@keyframes fadeUp{
  from{
    opacity:0;
    transform:translateY(20px);
  }
  to{
    opacity:1;
    transform:translateY(0);
  }
}
</style>

</head>
<body>

<div class="card p-4">
  <h4 class="mb-3">🧾 Review Your Booking</h4>

  <p><strong>Transport:</strong> <?= ucfirst($type) ?></p>
  <p><strong>From:</strong> <?= htmlspecialchars($from) ?></p>
  <p><strong>To:</strong> <?= htmlspecialchars($to) ?></p>
  <p><strong>Date:</strong> <?= $date ?></p>
  <p class="fs-5"><strong>Price:</strong> ₹<?= $price ?></p>

  <form action="passenger.php" method="post">
    <input type="hidden" name="type" value="<?= $type ?>">
    <input type="hidden" name="from" value="<?= $from ?>">
    <input type="hidden" name="to" value="<?= $to ?>">
    <input type="hidden" name="date" value="<?= $date ?>">
    <input type="hidden" name="price" value="<?= $price ?>">

    <button class="btn btn-primary w-100 mt-3">
      Continue →
    </button>
  </form>

  <a href="javascript:history.back()" class="btn btn-outline-secondary w-100 mt-2">
    ← Go Back
  </a>
</div>

</body>
</html>
