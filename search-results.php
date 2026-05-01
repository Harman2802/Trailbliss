<?php
include "db.php";

/* =====================
   BASIC INPUT
===================== */
$type        = $_GET['type'] ?? 'flight';
$trip_type  = $_GET['trip_type'] ?? 'oneway';
$directOnly = isset($_GET['direct']) && $_GET['direct'] == '1';

/* =====================
   DATES
===================== */
$depart_date = $_GET['depart_date'] ?? date('Y-m-d');
$return_date = $_GET['return_date'] ?? '';

$bus_date    = $_GET['travel_date_bus'] ?? date('Y-m-d');
$cab_date    = $_GET['travel_date_cab'] ?? date('Y-m-d');
$train_date  = $_GET['travel_date_train'] ?? date('Y-m-d');

/* =====================
   FROM / TO
===================== */
switch ($type) {
    case 'flight':
        $from = $_GET['flight_from'] ?? '';
        $to   = $_GET['flight_to'] ?? '';
        $date = $depart_date;
        break;

    case 'bus':
        $from = $_GET['bus_from'] ?? '';
        $to   = $_GET['bus_to'] ?? '';
        $date = $bus_date;
        break;

    case 'cab':
        $from = $_GET['pickup'] ?? '';
        $to   = $_GET['drop_location'] ?? '';
        $date = $cab_date;
        break;

    case 'train':
        $from = $_GET['from_station'] ?? '';
        $to   = $_GET['to_station'] ?? '';
        $date = $train_date;
        break;

    default:
        $from = $to = '';
        $date = date('Y-m-d');
}

/* =====================
   SAMPLE DATA
===================== */
$cities = ["Delhi","Mumbai","Chennai","Kolkata","Bangalore","Pune","Hyderabad","Goa","Jaipur","Amritsar"];
$icons  = ['flight'=>'✈️','bus'=>'🚌','cab'=>'🚕','train'=>'🚆'];


// ----------------------
// 5. Generate results
// ----------------------
function generate_results($type, $from, $to, $date, $directOnly, $count = 7) {
    global $cities;

    $results = [];

    while (count($results) < $count) {

        $isDirect = rand(0,1);

        // ✅ APPLY DIRECT FILTER
        if ($type === 'flight' && $directOnly && $isDirect == 0) {
            continue;
        }

        $fromCity = $from ?: $cities[array_rand($cities)];
        $toCity   = $to ?: $cities[array_rand($cities)];
        if ($fromCity === $toCity) continue;

        $results[] = [
            'from_city'  => $fromCity,
            'to_city'    => $toCity,
            'depart_date'=> $date,
            'travel_date'=> $date,
            'price'      => rand(1500, 7000),
            'direct'     => $isDirect,
            'time'       => rand(5,22) . ':00'
        ];
    }

    return $results;
}

$results = generate_results($type, $from, $to, $date, $directOnly);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Results</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* =========================
   BASE LAYOUT
========================= */
body {
    background: #f4f6f9;
    font-family: sans-serif;
    padding: 0 20px;    /* 🔥 remove top padding */
    margin: 0;          /* remove default body margin */
}

.container {
    max-width: 1100px;
    margin: 16px auto 0;  /* small gap from top, auto center horizontally */
}

.result-header {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #333;
    text-align: center;  /* 🔹 centers the heading */
}

/* =========================
   FILTER BAR (ONE ROW)
========================= */
.filters form {
    display: flex;
    align-items: flex-end;
    flex-wrap: nowrap;
    gap: 24px;
    background: white;
    padding: 14px 16px;
    border-radius: 14px;
    border: 1px solid #eef0f4;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

/* Disable bootstrap column widths */
.filters .col-md-3,
.filters .col-md-2,
.filters .col-md-12 {
    width: auto;
    flex: 0 0 auto;
}

/* =========================
   INPUTS
========================= */
.filters input[type="text"] {
    width: 200px;
    height: 43px;
    font-size: 15px;
}

.filters input[type="date"] {
    width: 190px;
    height: 40px;
    font-size: 14px;
}

/* =========================
   DIRECT FLIGHT CHECKBOX
========================= */
.direct-check {
    display: flex;
    align-items: center;
    gap: 8px;
    height: 46px;
    padding: 0 16px;
    border-radius: 10px;
    background: #fff5f9;
    border: 1px solid #ffd6e6;
    font-size: 14px;
    font-weight: 500;
    color: #d63384;
    white-space: nowrap;
    cursor: pointer;
}

/* Custom checkbox */
.direct-check input {
    appearance: none;
    width: 18px;
    height: 18px;
    border: 2px solid #ff66a0;
    border-radius: 5px;
    position: relative;
    cursor: pointer;
}

.direct-check input:checked {
    background: #ff66a0;
}

.direct-check input:checked::after {
    content: "✓";
    position: absolute;
    color: #fff;
    font-size: 12px;
    left: 3px;
    top: -1px;
}

/* =========================
   FILTER BUTTON
========================= */
.filters .btn {
    height: 46px;
    min-width: 120px;
    padding: 0 28px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 10px;
    border: none;
    background: linear-gradient(135deg, #ff66a0, #ff3d81);
    color: #fff;
    white-space: nowrap;
}

/* =========================
   MOBILE RESPONSIVE
========================= */
@media (max-width: 992px) {
    .filters form {
        flex-wrap: wrap;
    }

    .filters input,
    .filters .btn,
    .direct-check {
        width: 100%;
    }

    .direct-check {
        justify-content: center;
    }
}

.card {margin-bottom:20px; border-radius:12px; background:#fff; border-left:6px solid #ff66a0; box-shadow:0 2px 8px rgba(0,0,0,0.08); transition:all 0.3s ease;}
.card:hover {transform:translateY(-4px); box-shadow:0 6px 20px rgba(0,0,0,0.15);}
.card .d-flex {align-items:center;}
.card-title {font-weight:600; font-size:18px; margin-bottom:5px;}
.card-small {font-size:14px; color:#555; margin-bottom:5px;}
.time-badge {background:#ffe3ef; color:#ff66a0; padding:3px 8px; border-radius:6px; font-size:13px; margin-left:10px;}
.rating {font-size:14px; color:#ff66a0;}
.btn-book {background:#ff66a0; color:#fff; font-weight:500; border:none; border-radius:6px; padding:6px 20px; transition:0.3s;}
.btn-book:hover {background:#e0558c;}
@media(max-width:768px){
    .card .d-flex {flex-direction:column; align-items:flex-start;}
    .card .btn-book {margin-top:10px;}
    .filters .col-md-2,.filters .col-md-3{flex:0 0 100%; max-width:100%;}
}
</style>
</head>
<body>
<div class="container">
<h2 class="result-header">🔍 Search Results</h2>

<!-- FILTERS -->
<div class="filters mb-4">
<form method="get" class="row g-3 align-items-end">
<input type="hidden" name="type" value="<?= $type ?>">
<input type="hidden" name="trip_type" value="<?= $trip_type ?>">

<div class="col-md-3">
    <input type="text" class="form-control" name="flight_from"
           placeholder="From" value="<?= htmlspecialchars($from) ?>">
</div>

<div class="col-md-3">
    <input type="text" class="form-control" name="flight_to"
           placeholder="To" value="<?= htmlspecialchars($to) ?>">
</div>

<div class="col-md-2">
    <input type="date" class="form-control" name="depart_date"
           value="<?= $depart_date ?>">
</div>

<?php if ($trip_type === 'round'): ?>
<div class="col-md-2">
    <input type="date" class="form-control" name="return_date"
           value="<?= $return_date ?>">
</div>
<?php endif; ?>

<?php if ($type === 'flight'): ?>
<div class="col-md-12">
    <label class="direct-check">
        <input type="checkbox" name="direct" value="1" <?= $directOnly ? 'checked' : '' ?>>
        Direct Flights Only
    </label>
</div>
<?php endif; ?>

<div class="col-md-2">
    <button class="btn btn-primary w-100">Filter</button>
</div>
</form>
</div>

<!-- FLIGHT ROUND-TRIP JS -->
<script>
document.querySelectorAll('.trip-option').forEach(el => {
    el.addEventListener('click', function() {
        document.querySelectorAll('.trip-option').forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');

        const tripTypeInput = document.getElementById('trip_type_input');
        if(tripTypeInput) tripTypeInput.value = this.dataset.trip;

        const returnDate = document.querySelector('input[name="return_date"]');
        if(returnDate){
            returnDate.style.display = this.dataset.trip==='round' ? 'block' : 'none';
        }
    });
});
</script>

<!-- RESULTS -->
<?php if(!empty($results)): ?>
    <?php foreach($results as $row): ?>
        <div class="card p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <div class="icon-badge"><?= $icons[$type] ?? '❓' ?></div>
                    <div>
                        <?php if($type==='flight'): ?>
                            <div class="card-title"><?= $row['from_city']?> → <?= $row['to_city']?> <span class="time-badge"><?= $row['time']?></span></div>
                            <div class="card-small">
                                Depart: <?= $row['depart_date'] ?>
                                <?php if($trip_type==='round'): ?> | Return: <?= $return_date ?><?php endif; ?>
                                | Price: ₹<?= $row['price'] ?> | <?= $row['direct']?"Direct":"Connecting" ?>
                            </div>
                            <div class="rating">⭐⭐⭐⭐☆</div>
                        <?php else: ?>
                            <div class="card-title"><?= $row['from_city'] ?? $row['pickup'] ?? $row['from_station'] ?> → <?= $row['to_city'] ?? $row['drop_location'] ?? $row['to_station'] ?> <span class="time-badge"><?= $row['time']?></span></div>
                            <div class="card-small">Date: <?= $row['travel_date'] ?> | Price: ₹<?= $row['price'] ?></div>
                            <div class="rating"><?= $type==='bus'?'⭐⭐⭐☆☆':($type==='cab'?'⭐⭐⭐⭐☆':'⭐⭐⭐⭐⭐') ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <form action="book.php" method="post">
                        <input type="hidden" name="type" value="<?= $type ?>">
                        <input type="hidden" name="from" value="<?= $row['from_city'] ?? $row['pickup'] ?? $row['from_station'] ?>">
                        <input type="hidden" name="to" value="<?= $row['to_city'] ?? $row['drop_location'] ?? $row['to_station'] ?>">
                        <input type="hidden" name="date" value="<?= $type==='flight' ? $row['depart_date'] : $row['travel_date'] ?>">
                        <input type="hidden" name="return_date" value="<?= $trip_type==='round' ? $return_date : '' ?>">
                        <input type="hidden" name="price" value="<?= $row['price'] ?>">
                        <button class="btn-book" type="submit">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p class="text-danger">No results found 😢</p>
<?php endif; ?>

</div>



</body>
</html>
