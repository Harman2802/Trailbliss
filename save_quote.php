<?php
// =====================
// Database Connection
// =====================
$conn = new mysqli("localhost", "root", "", "trailbliss");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// =====================
// Receive Form Data
// =====================
$full_name   = trim($_POST['full_name']   ?? '');
$email       = trim($_POST['email']       ?? '');
$package     = trim($_POST['package']     ?? '');
$guide       = trim($_POST['guide_name']  ?? ''); // OPTIONAL
$description = trim($_POST['description'] ?? '');
$travel_date = trim($_POST['travel_date'] ?? '');
$duration    = trim($_POST['duration']    ?? '');
$persons     = trim($_POST['persons']     ?? '');
$contact     = trim($_POST['contact']     ?? '');

// =====================
// Required Field Validation
// =====================
if (
    $full_name === '' ||
    $email === '' ||
    $package === '' ||
    $travel_date === '' ||
    $persons === '' ||
    $contact === ''
) {
    die("Please fill all required fields!");
}

// =====================
// Insert into Database
// =====================
$stmt = $conn->prepare("
    INSERT INTO quote 
    (full_name, email, package, guide, description, travel_date, duration, persons, contact)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "sssssssis",
    $full_name,
    $email,
    $package,
    $guide,        // may be empty (optional)
    $description,
    $travel_date,
    $duration,
    $persons,
    $contact
);

// =====================
// Execute & Redirect
// =====================
if ($stmt->execute()) {

    header("Location: payment.php?" . http_build_query([
        'name'        => $full_name,
        'email'       => $email,
        'package'     => $package,
        'guide'       => $guide,   // optional
        'description' => $description,
        'travel_date' => $travel_date,
        'duration'    => $duration,
        'persons'     => $persons,
        'contact'     => $contact
    ]));
    exit();

} else {
    echo "Database Error: " . $stmt->error;
}

// =====================
// Close Connection
// =====================
$stmt->close();
$conn->close();
?>
