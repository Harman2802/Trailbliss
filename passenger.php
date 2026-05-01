<!DOCTYPE html>
<html>
<head>
<title>Passenger Details</title>
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
  max-width:700px;
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

/* LABELS */
.form-label{
  font-weight:600;
  color:#374151;
}

/* INPUTS */
.form-control{
  padding:12px 14px;
  border-radius:14px;
  border:1px solid #e5e7eb;
}

.form-control:focus{
  border-color:#ff66a0;
  box-shadow:0 0 0 4px rgba(255,102,160,.15);
}

/* BUTTON */
.btn-success{
  background:#ff66a0;
  border:none;
  padding:14px;
  font-weight:700;
  border-radius:30px;
  transition:all .3s ease;
}

.btn-success:hover{
  background:#e11d74;
  transform:translateY(-2px);
  box-shadow:0 10px 25px rgba(255,102,160,.35);
}

/* ANIMATION */
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
  <h4 class="mb-3">👤 Passenger Details</h4>

  <form action="payment2.php" method="post">


    <?php foreach($_POST as $k => $v): ?>
      <input type="hidden" name="<?= $k ?>" value="<?= htmlspecialchars($v) ?>">
    <?php endforeach; ?>

    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Phone</label>
        <input type="tel" name="phone" class="form-control" required>
      </div>

      <div class="col-md-12">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
    </div>

    <button class="btn btn-success w-100 mt-4">
      ✅ Confirm Booking
    </button>
  </form>
</div>

</body>
</html>
