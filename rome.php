<!-- Save as rome.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trailbliss - Rome Tour Packages</title>


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="h1.css">
<link rel="stylesheet" href="front1.css">
<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
scroll-behavior:smooth;
}

body{
background:#fff;
color:#111;
overflow-x:hidden;
}

/* ================= NAVBAR ================= */

.logo {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 22px;
  font-weight: 700;
  color: #fe5d94; /* pink theme */
}

.logo img {
  height: 40px;
  width: auto;
}

/* Navbar */
.navbar {
  display: flex; 
  justify-content: space-between; 
  align-items: center;
  padding: 20px 50px; 
  background: #fff; 
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  position: sticky; 
  top: 0; 
  z-index: 100;
}
.navbar ul li:last-child a {
  background: linear-gradient(135deg, #fe5d94, #feb1c6);
  color: #fff !important;
  padding: 10px 18px;
  border-radius: 25px;
  font-weight: 600;
  box-shadow: 0 4px 12px rgba(254, 93, 148, 0.4);
  transition: all 0.3s ease;
}

/* Hover effect */
.navbar ul li:last-child a:hover {
  background: linear-gradient(135deg, #ff80aa, #ffbfd4);
  box-shadow: 0 6px 16px rgba(254, 93, 148, 0.5);
  transform: translateY(-2px) scale(1.05);
}

.navbar .logo { 
  font-size: 22px; 
  font-weight: 700; 
  color: #fe5d94; 
}
.navbar ul { 
  display: flex; 
  gap: 25px; 
  list-style: none; 
}
.navbar a {
   text-decoration: none; 
   color: #333; 
   font-weight: 500; 
  }
.navbar a:hover { 
  color: #fe5d94; 
}

/* ================= HERO ================= */

.hero{
height:92vh;
background:url('image/rome0.jpg') center/cover no-repeat;
position:relative;
display:flex;
align-items:center;
}

.hero::before{
content:"";
position:absolute;
inset:0;
background:rgba(0,0,0,.55);
}

.hero-content{
position:relative;
z-index:2;
max-width:1200px;
margin:auto;
width:100%;
padding:0 20px;
}

.hero-content h1{
font-size:58px;
color:#fff;
margin-bottom:15px;
}

.hero-content p{
font-size:18px;
color:#eee;
max-width:650px;
line-height:1.8;
}

.hero-btn{
display:inline-block;
margin-top:25px;
padding:14px 30px;
background:#ff7b00;
color:#fff;
text-decoration:none;
border-radius:40px;
font-weight:600;
transition:.3s;
}

.hero-btn:hover{
background:#e66d00;
transform:translateY(-3px);
}

/* ================= COMMON ================= */

.section-title{
font-size:42px;
text-align:center;
margin-bottom:55px;
color:#111;
}

/* ================= ABOUT ================= */

.about{
padding:90px 20px;
background:#fff;
}

.about-wrap{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:1fr 1fr;
gap:45px;
align-items:center;
}

.about-wrap img{
width:100%;
border-radius:18px;
box-shadow:0 12px 30px rgba(0,0,0,.12);
}

.about-text h2{
font-size:38px;
margin-bottom:20px;
}

.about-text p{
font-size:16px;
line-height:1.9;
color:#555;
}

/* ================= PACKAGE SECTION ================= */
/* ================= ROME PACKAGE SECTION ================= */

.rome-package-section{
width:100%;
padding:90px 20px;
background:#f8f9fc;
display:block;
}

.rome-package-wrapper{
max-width:1200px;
margin:0 auto;
}

.rome-package-heading{
text-align:center;
font-size:42px;
font-weight:700;
color:#111;
margin-bottom:55px;
}

.rome-package-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

/* CARD */
.rome-package-card{
background:#fff;
border-radius:18px;
overflow:hidden;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.3s ease;
}

.rome-package-card:hover{
transform:translateY(-8px);
}

/* IMAGE */
.rome-package-card img{
width:100%;
height:230px;
object-fit:cover;
display:block;
}

/* INFO */
.rome-package-info{
padding:20px;
}

.rome-package-days{
display:inline-block;
background:#ff7b00;
color:#fff;
padding:6px 12px;
border-radius:30px;
font-size:12px;
margin-bottom:12px;
}

.rome-package-info h3{
font-size:20px;
margin-bottom:10px;
color:#111;
}

.rome-package-info p{
font-size:14px;
color:#666;
line-height:1.7;
}

/* ================= RESPONSIVE ================= */

@media(max-width:992px){
.rome-package-grid{
grid-template-columns:repeat(2,1fr);
}
}

@media(max-width:600px){
.rome-package-grid{
grid-template-columns:1fr;
}

.rome-package-heading{
font-size:32px;
}
}

/* ================= HIGHLIGHTS ================= */

.highlights{
padding:90px 20px;
background:#fff;
}

.highlight-grid{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.highlight-box{
background:#fff7f0;
padding:30px 20px;
border-radius:18px;
text-align:center;
transition:.3s;
}

.highlight-box:hover{
transform:translateY(-8px);
}

.highlight-box i{
font-size:34px;
color:#ff7b00;
margin-bottom:15px;
}

.highlight-box h4{
font-size:20px;
margin-bottom:10px;
}

.highlight-box p{
font-size:14px;
line-height:1.7;
color:#666;
}

/* ================= REVIEWS ================= */

.reviews{
padding:90px 20px;
background:#f5f5f5;
}

.review-grid{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
}

.review-card{
background:#fff;
padding:30px;
border-radius:18px;
box-shadow:0 10px 25px rgba(0,0,0,.07);
}

.review-card p{
font-size:15px;
line-height:1.8;
color:#555;
}

.review-card h4{
margin-top:15px;
font-size:18px;
}

/* ================= FOOTER ================= */

.site-footer{
background:#111;
color:#fff;
text-align:center;
padding:45px 20px;
}

.footer-contact p{
margin:8px 0;
color:#ccc;
}


/* ================= RESPONSIVE ================= */

@media(max-width:992px){

.package-grid,
.highlight-grid{
grid-template-columns:repeat(2,1fr);
}

.review-grid{
grid-template-columns:1fr;
}

.about-wrap{
grid-template-columns:1fr;
}

.hero-content h1{
font-size:44px;
}

nav ul{
gap:15px;
}
}

@media(max-width:600px){

.navbar{
flex-direction:column;
gap:15px;
padding:18px;
}

nav ul{
flex-wrap:wrap;
justify-content:center;
gap:12px;
}

.package-grid,
.highlight-grid{
grid-template-columns:1fr;
}

.form-row,
.row{
grid-template-columns:1fr;
}

.section-title,
.package-heading{
font-size:30px;
}

.hero-content h1{
font-size:34px;
}

.hero-content p{
font-size:16px;
}

.right,
.left{
padding:25px;
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
<h1>Rome Tour Packages</h1>
<p>
Walk through centuries of history in the Eternal City. Discover ancient landmarks, romantic streets and unforgettable Italian experiences.
</p>
<a href="#" class="hero-btn">Explore Rome</a>
</div>
</section>

<!-- ABOUT -->
<section class="about" id="about">
<div class="about-wrap">

<img src="image/rome1.jpg">

<div class="about-text">
<h2>Experience the Charm of Rome</h2>
<p>
Rome is famous for the Colosseum, Vatican City, Trevi Fountain and timeless architecture.  
Trailbliss offers complete Rome holiday packages with hotels, airport pickup, guided sightseeing and customized travel plans.
</p>
</div>

</div>
</section>




<section class="rome-package-section">

<div class="rome-package-wrapper">

<h2 class="rome-package-heading">Best Selling Rome Packages</h2>

<div class="rome-package-grid">

<div class="rome-package-card">
<img src="image/rome3.jpg">
<div class="rome-package-info">
<span class="rome-package-days">4 Nights / 5 Days</span>
<h3>Classic Rome Holiday</h3>
<p>Visit Colosseum, Roman Forum and guided sightseeing.</p>
</div>
</div>

<div class="rome-package-card">
<img src="image/rome4.jpg">
<div class="rome-package-info">
<span class="rome-package-days">5 Nights / 6 Days</span>
<h3>Romantic Rome Escape</h3>
<p>Luxury stay, Trevi Fountain evenings and candlelight dinner.</p>
</div>
</div>

<div class="rome-package-card">
<img src="image/rome5.jpg">
<div class="rome-package-info">
<span class="rome-package-days">6 Nights / 7 Days</span>
<h3>Family Rome Tour</h3>
<p>Vatican Museum, parks and family fun.</p>
</div>
</div>

<div class="rome-package-card">
<img src="image/rome6.jpg">
<div class="rome-package-info">
<span class="rome-package-days">3 Nights / 4 Days</span>
<h3>Quick Rome Trip</h3>
<p>Top attractions with premium hotel stay.</p>
</div>
</div>

</div>
</div>

</section>

<!-- HIGHLIGHTS -->
<section class="highlights">
<h2 class="section-title">Why Visit Rome?</h2>

<div class="highlight-grid">

<div class="highlight-box">
<i class="fa-solid fa-landmark"></i>
<h4>Historic Wonders</h4>
<p>Explore ancient Roman monuments and architecture.</p>
</div>

<div class="highlight-box">
<i class="fa-solid fa-church"></i>
<h4>Vatican City</h4>
<p>Visit one of the world's most iconic spiritual sites.</p>
</div>

<div class="highlight-box">
<i class="fa-solid fa-utensils"></i>
<h4>Italian Cuisine</h4>
<p>Enjoy pasta, pizza and authentic gelato.</p>
</div>

<div class="highlight-box">
<i class="fa-solid fa-heart"></i>
<h4>Romantic Vibes</h4>
<p>Beautiful streets, fountains and piazzas.</p>
</div>

</div>
</section>

<!-- REVIEWS -->
<section class="reviews" id="reviews">
<h2 class="section-title">What Our Clients Say</h2>

<div class="review-grid">

<div class="review-card">
<p>Rome was magical. Hotels and sightseeing were perfectly arranged.</p>
<h4>Ritika Sharma</h4>
</div>

<div class="review-card">
<p>Excellent service and smooth visa guidance.</p>
<h4>Manpreet Singh</h4>
</div>

<div class="review-card">
<p>Best Europe package experience with Trailbliss.</p>
<h4>Karan Mehta</h4>
</div>

</div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
<div class="footer-contact">
<p><i class="fa fa-location-dot"></i> Noida, India</p>
<p><i class="fa fa-phone"></i> +91-120-4052615</p>
<p><i class="fa fa-envelope"></i> info@trailbliss.com</p>
</div>

<p>© 2026 TRAILBLISS Pvt. Ltd</p>
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