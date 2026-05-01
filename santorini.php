<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Santorini - Trailbliss</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="h1.css">
<link rel="stylesheet" href="front1.css">
<style>

/* ================= BASE ================= */

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#fff;
color:#111;
}

/* ================= NAV ================= */

.nav{
display:flex;
justify-content:space-between;
align-items:center;
padding:18px 6%;
background:#111;
position:sticky;
top:0;
z-index:1000;
}

.nav .logo{
color:#fff;
font-size:24px;
font-weight:700;
}

.nav ul{
display:flex;
gap:25px;
list-style:none;
}

.nav ul a{
color:#fff;
text-decoration:none;
font-size:14px;
transition:.3s;
}

.nav ul a:hover{
color:#ff7b00;
}

/* ================= HERO ================= */

.hero{
height:92vh;
background:url('image/greece0.jpg') center/cover no-repeat;
position:relative;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
}

.hero::before{
content:"";
position:absolute;
inset:0;
background:rgba(0,0,0,0.45);
}

.hero-content{
position:relative;
max-width:850px;
padding:20px;
}

.hero-content h1{
font-size:60px;
color:#fff;
}

.hero-content p{
margin-top:15px;
font-size:18px;
color:#eee;
line-height:1.6;
}

.hero-btn{
display:inline-block;
margin-top:25px;
padding:14px 30px;
background:#ff7b00;
color:#fff;
border-radius:40px;
text-decoration:none;
font-weight:600;
transition:.3s;
}

.hero-btn:hover{
background:#e66d00;
transform:translateY(-3px);
}

/* ================= TITLE ================= */

.title{
text-align:center;
font-size:42px;
margin:80px 0 40px;
}

/* ================= ABOUT ================= */

.about{
padding:80px 6%;
display:grid;
grid-template-columns:1fr 1fr;
gap:40px;
align-items:center;
}

.about img{
width:100%;
border-radius:18px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.about p{
color:#555;
line-height:1.8;
font-size:16px;
}

/* ================= PACKAGES ================= */

/* ================= PACKAGES NEW DESIGN ================= */

.santorini-pack-sec{
padding:80px 6%;
background:#f8f9fc;
}

.santorini-pack-title{
text-align:center;
font-size:42px;
margin-bottom:50px;
color:#111;
}

.santorini-pack-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.santorini-pack-card{
background:#fff;
border-radius:18px;
overflow:hidden;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:.3s;
}

.santorini-pack-card:hover{
transform:translateY(-8px);
}

.santorini-pack-card img{
width:100%;
height:200px;
object-fit:cover;
}

.santorini-pack-body{
padding:18px;
}

.santorini-pack-tag{
display:inline-block;
padding:5px 12px;
background:#ff7b00;
color:#fff;
font-size:12px;
border-radius:20px;
margin-bottom:10px;
}

.santorini-pack-body h3{
font-size:18px;
margin-bottom:6px;
}

.santorini-pack-body p{
font-size:13px;
color:#666;
line-height:1.5;
}

/* RESPONSIVE */

@media(max-width:992px){
.santorini-pack-grid{
grid-template-columns:repeat(2,1fr);
}
}

@media(max-width:600px){
.santorini-pack-grid{
grid-template-columns:1fr;
}

.santorini-pack-title{
font-size:32px;
}
}

/* ================= HIGHLIGHTS ================= */

.highlights{
padding:80px 6%;
}

.h-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.box{
background:#fff7f0;
padding:30px;
text-align:center;
border-radius:18px;
transition:.3s;
}

.box:hover{
transform:translateY(-8px);
}

.box i{
font-size:32px;
color:#ff7b00;
margin-bottom:10px;
}

/* ================= FOOTER ================= */

footer{
background:#111;
color:#fff;
text-align:center;
padding:40px;
margin-top:60px;
}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){
.grid,.h-grid{
grid-template-columns:repeat(2,1fr);
}

.about{
grid-template-columns:1fr;
text-align:center;
}

.hero-content h1{
font-size:42px;
}
}

@media(max-width:600px){
.grid,.h-grid{
grid-template-columns:1fr;
}

.hero-content h1{
font-size:32px;
}
}

</style>
</head>

<body>

<!-- NAVBAR -->
 <header class="navbar">
  <div class="logo">
    <img src="image/logo.png" alt="Trailbliss Logo">
    <span>Trailbliss</span>
  </div>
  <nav>
    <ul>
      <li><a href="#hero">Home</a></li>
      <li><a href="#destination">Destinations</a></li>
      <li><a href="#packages">Packages</a></li>
      <li><a href="#guide-section">Guiders</a></li>
      <li><a href="#about">About</a></li>      
      <li><a href="#feedback-section">Reviews</a></li>
      <li><a href="#faq-section">FAQ</a></li>
      <li><button id="openQuote" class="planTripBtn">Book Your Trip</button>
</li>

    </ul>
  </nav>
</header>

<!-- HERO -->
<section class="hero">
<div class="hero-content">
<h1>Santorini Greece</h1>
<p>White buildings, blue domes & breathtaking sunsets</p>
<a href="#" class="hero-btn">Explore Now</a>
</div>
</section>

<!-- ABOUT -->
<h2 class="title">About Santorini</h2>

<section class="about">
<img src="image/ge1.jpg">
<p>
Santorini is a world-famous Greek island known for its white architecture,
blue domes, volcanic beaches, and romantic sunsets.
</p>
</section>

<!-- PACKAGES -->
<section class="santorini-pack-sec">

<h2 class="santorini-pack-title">Top Packages</h2>

<div class="santorini-pack-grid">

<div class="santorini-pack-card">
<img src="image/ge3.jpg">

<div class="santorini-pack-body">
<span class="santorini-pack-tag">5 Days</span>
<h3>Classic Santorini</h3>
<p>Oia sunset & island tour</p>
</div>

</div>

<div class="santorini-pack-card">
<img src="image/g34.jpg">

<div class="santorini-pack-body">
<span class="santorini-pack-tag">6 Days</span>
<h3>Luxury Stay</h3>
<p>Private villa experience</p>
</div>

</div>

<div class="santorini-pack-card">
<img src="image/ge5.jpg">

<div class="santorini-pack-body">
<span class="santorini-pack-tag">7 Days</span>
<h3>Honeymoon Package</h3>
<p>Romantic cruise & dinners</p>
</div>

</div>

<div class="santorini-pack-card">
<img src="image/ge6.jpg">

<div class="santorini-pack-body">
<span class="santorini-pack-tag">4 Days</span>
<h3>Quick Trip</h3>
<p>Top attractions in short stay</p>
</div>

</div>

</div>
</section>

<!-- HIGHLIGHTS -->
<section class="highlights">

<h2 class="title">Why Santorini?</h2>

<div class="h-grid">

<div class="box">
<i class="fa-solid fa-sun"></i>
<p>Sunsets</p>
</div>

<div class="box">
<i class="fa-solid fa-water"></i>
<p>Sea Views</p>
</div>

<div class="box">
<i class="fa-solid fa-heart"></i>
<p>Romance</p>
</div>

<div class="box">
<i class="fa-solid fa-hotel"></i>
<p>Luxury Stay</p>
</div>

</div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="footer-info">
    <div class="footer-contact">
      <p><i class="fa-solid fa-location-dot"></i> C - 81C, Sector - 8, Noida</p>
      <p><i class="fa-solid fa-phone"></i> +91-120-4052615</p>
      <p><i class="fa-solid fa-envelope"></i> info@trailbliss.com</p>
    </div>
  </div>
  <p class="footer-copy">Copyright © 2025 TRAILBLISS</p>
</footer>

<!-- POPUP OVERLAY -->
<div id="quoteOverlay" class="overlay">

  <div class="popup-box">

    <!-- LEFT SECTION -->
    <div class="left">
      <h2>How It Works</h2>

      <ul class="steps">
        <li>Tell us details of your holiday plan.</li>
        <li>After you submit the form, our travel expert will contact you within 24 hours.</li>
        <li>Grab the deal and start packing your bags!</li>
      </ul>
<hr class="line">

   <div class="social">
  <a href="https://www.facebook.com" target="_blank" class="icon">
    <i class="fa-brands fa-facebook-f"></i>
  </a>

  <a href="https://www.twitter.com" target="_blank" class="icon">
    <i class="fa-brands fa-twitter"></i>
  </a>

  <a href="https://www.instagram.com" target="_blank" class="icon">
    <i class="fa-brands fa-instagram"></i>
  </a>
</div>



      <p class="call-text">Call Us for details</p>
      <p class="phone">+91-9812737425</p>
    </div>

    <!-- RIGHT SECTION -->
    <div class="right">

  <span id="closePopup" class="close-btn">✖</span>

  <h2 class="title">Request a <span>QUOTE</span></h2>

  <form action="save_quote.php" method="POST">

    <div class="form-row">
  <div class="input-group">
    <label>Full Name*</label>
    <input type="text" name="full_name" required>
  </div>

  <div class="input-group">
    <label>Email ID*</label>
    <input type="email" name="email" required>
  </div>
</div>

    <div class="input-group">
  <label>Enter Package*</label>

  <input 
    type="text" 
    name="package" 
    list="packageList" 
    placeholder="Type your package (e.g. Goa Tour, Dubai Trip, Europe Tour)" 
    required
  >

  <datalist id="packageList">

    <!-- India Packages -->
    <option value="North India Tour">
    <option value="South India Tour">
    <option value="West India Tour (Goa, Rajasthan)">
    <option value="East India Tour (Sikkim, Assam)">
    <option value="Central India Tour (MP, Chhattisgarh)">
    <option value="Kashmir Holiday Package">
    <option value="Himachal Hill Station Tour">
    <option value="Kerala Backwaters Tour">
    <option value="Rajasthan Heritage Tour">
    <option value="Goa Beach Holiday">

    <!-- International Packages -->
    <option value="Dubai Tour Package">
    <option value="Thailand Tour Package">
    <option value="Singapore Holiday">
    <option value="Bali Tour Package">
    <option value="Europe Tour (Paris, Rome, Switzerland)">
    <option value="London & UK Tour">
    <option value="USA Tour (New York, Los Angeles, Las Vegas)">
    <option value="Maldives Honeymoon Package">
    <option value="Australia Tour (Sydney, Melbourne)">
    <option value="Middle East Tour (Dubai, Abu Dhabi)">

  </datalist>
</div>


    <div class="input-group">
      <label>Tour Description*</label>
      <textarea name="description" required></textarea>
    </div>

    

    <div class="row">
      <div class="input-group">
        <label>Travel Dates*</label>
        <input type="date" id="travelDate" name="travel_date" required>
      </div>

      <div class="input-group">
        <label>Duration*</label>
        <select name="duration" required>
          <option value="">Select Duration</option>
          <option>1-3 Days</option>
          <option>4-7 Days</option>
          <option>8-10 Days</option>
          <option>11-15 Days</option>
          <option>More than 15 Days</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="input-group">
        <label>No. of Persons*</label>
        <input type="number" name="persons" min="1" required>
      </div>

      <div class="input-group">
        <label>Contact No*</label>
        <input type="text" name="contact" required>
      </div>
    </div>

    <button class="submit-btn">Submit</button>
  </form>
</div>

  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="js/front.js"></script>

</body>
</html>