<!-- Save as losangeles.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trailbliss - Los Angeles Tour Packages</title>

<link rel="stylesheet" href="front1.css">
<link rel="stylesheet" href="h1.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
.hero{
  height: 90vh;
  position: relative;

  background-image: url('image/lg1.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* dark overlay */
.hero-overlay{
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.45);
}

/* TEXT AT BOTTOM */
.hero-text{
  position: absolute;
  bottom: 60px;   /* 👈 MAIN CHANGE */
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  color: #fff;
  z-index: 2;
}

.hero-text .small-title{
  font-size: 18px;
  letter-spacing: 3px;
  text-transform: uppercase;
  margin-bottom: 10px;
}

.hero-text .big-title{
  font-size: 65px;
  font-weight: 700;
}

.intro-section{
padding:70px 20px;
background:#fff;
}
.intro-wrap{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:1fr 1fr;
gap:45px;
align-items:center;
}
.intro-wrap img{
width:100%;
border-radius:16px;
box-shadow:0 8px 25px rgba(0,0,0,.15);
}
.intro-text h2{
font-size:42px;
margin-bottom:20px;
}
.intro-text p{
font-size:17px;
line-height:1.8;
color:#444;
}

.highlight-box{
background:#f8f8f8;
padding:70px 20px;
}
.highlight-grid{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}
.highlight-card{
background:#fff;
padding:30px;
border-radius:16px;
text-align:center;
box-shadow:0 6px 20px rgba(0,0,0,.08);
}
.highlight-card i{
font-size:34px;
margin-bottom:15px;
color:#ff7b00;
}
.highlight-card h4{
margin-bottom:10px;
font-size:22px;
}

@media(max-width:900px){
.intro-wrap,
.highlight-grid{
grid-template-columns:1fr;
}
.hero-text .big-title{
font-size:42px;
}
}
</style>
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">
<div class="logo">
<img src="image/logo.png" alt="">
<span>Trailbliss</span>
</div>

<nav>
<ul>
<li><a href="front.php">Home</a></li>
<li><a href="front.php">Destinations</a></li>
<li><a href="front.php">Packages</a></li>
<li><a href="#about">About</a></li>
<li><a href="#reviews">Reviews</a></li>
<li><button id="openQuote" class="planTripBtn">Book Your Trip</button></li>
</ul>
</nav>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-overlay"></div>

  <div class="hero-text">
    <div class="small-title">California Dreaming</div>
    <div class="big-title">Los Angeles</div>
  </div>
</section>

<!-- INTRO -->
<section class="intro-section">
<div class="intro-wrap">

<div class="intro-text">
<h2>Los Angeles Tour Packages</h2>
<p>
Los Angeles is the entertainment capital of the world, famous for Hollywood, beaches, celebrity lifestyle, luxury shopping, and sunny weather.
<br><br>
Explore Hollywood Walk of Fame, Universal Studios, Beverly Hills, Santa Monica Pier, Venice Beach, and Disneyland nearby.
<br><br>
Trailbliss offers premium Los Angeles packages with hotel stays, airport transfers, theme park tickets, and guided sightseeing tours.
</p>
</div>

<div>
<img src="image/lg2.jpg" alt="">
</div>

</div>
</section>

<!-- HIGHLIGHTS -->
<section class="highlight-box">
<div class="section">
<h2>Why Visit Los Angeles?</h2>
</div>

<div class="highlight-grid">

<div class="highlight-card">
<i class="fa-solid fa-film"></i>
<h4>Hollywood</h4>
<p>See iconic movie landmarks and celebrity spots.</p>
</div>

<div class="highlight-card">
<i class="fa-solid fa-umbrella-beach"></i>
<h4>Beaches</h4>
<p>Relax at Santa Monica & Venice Beach.</p>
</div>

<div class="highlight-card">
<i class="fa-solid fa-bag-shopping"></i>
<h4>Luxury Shopping</h4>
<p>Enjoy Rodeo Drive premium brands.</p>
</div>

<div class="highlight-card">
<i class="fa-solid fa-child-reaching"></i>
<h4>Theme Parks</h4>
<p>Universal Studios & Disneyland adventures.</p>
</div>

</div>
</section>

<!-- PACKAGES -->
<section class="section">
<h2>Best Selling Los Angeles Packages</h2>

<div class="card-grid">

<div class="card">
<img src="image/lg3.jpg">
<div class="card-content">
<a href="#">
4 Nights & 5 Days
<h4>Hollywood Discovery Tour</h4>
<p>Walk of Fame, Beverly Hills & city tour.</p>
</a>
</div>
</div>

<div class="card">
<img src="image/lg4.jpg">
<div class="card-content">
<a href="#">
5 Nights & 6 Days
<h4>Beach Holiday Package</h4>
<p>Santa Monica, Venice Beach & sunset vibes.</p>
</a>
</div>
</div>

<div class="card">
<img src="image/lg5.jpg">
<div class="card-content">
<a href="#">
3 Nights & 4 Days
<h4>Universal Studios Tour</h4>
<p>Theme park adventure with transfers.</p>
</a>
</div>
</div>

<div class="card">
<img src="image/lg6.jpg">
<div class="card-content">
<a href="#">
6 Nights & 7 Days
<h4>Luxury LA Escape</h4>
<p>Premium hotel, shopping & VIP experiences.</p>
</a>
</div>
</div>

</div>
</section>

<!-- BEST TIME -->
<section class="best-time-section">
<div class="bt-container">

<div class="bt-left">
<h2>Best Time to Visit <br> Los Angeles</h2>

<div class="bt-list">

<div class="bt-item">
<span>01</span>
<h3>Spring (March - May)</h3>
<p>Mild weather and clear skies.</p>
</div>

<div class="bt-item">
<span>02</span>
<h3>Summer (June - August)</h3>
<p>Best for beaches and nightlife.</p>
</div>

<div class="bt-item">
<span>03</span>
<h3>Winter (Nov - Feb)</h3>
<p>Cool weather and fewer crowds.</p>
</div>

</div>

</div>

<div class="bt-right">
<img src="image/lg1.jpg" alt="">
</div>

</div>
</section>

<!-- REVIEWS -->
<section class="feedback-section" id="reviews">
<h2>Traveler <span>Reviews</span></h2>

<div class="feedback-card active">
<div class="feedback-text center">
<h4>Fantastic California Trip!</h4>
<p>
Everything from airport pickup to Hollywood sightseeing was perfectly arranged.
</p>
<p class="reviewer">– Gurpreet Singh</p>
</div>
</div>

</section>

<!-- ABOUT -->
<section class="about-section" id="about">
<h2>About <span>Los Angeles Tourism</span></h2>

<div class="about-content">
<div class="about-text">
<p class="intro">
Los Angeles combines glamour, beaches, entertainment, food culture, and outdoor fun. Ideal for families, honeymooners, and luxury travelers.
</p>
</div>
</div>
</section>

<!-- FAQ -->
<section class="faq-section">
<h2>Frequently <span>Asked Questions</span></h2>

<div class="faq-container">

<div class="faq-item">
<button class="faq-question">1. Is Los Angeles good for family trips?</button>
<div class="faq-answer"><p>Yes, great for families with beaches and theme parks.</p></div>
</div>

<div class="faq-item">
<button class="faq-question">2. Best time for beaches?</button>
<div class="faq-answer"><p>June to September is ideal.</p></div>
</div>

<div class="faq-item">
<button class="faq-question">3. Can Disneyland be added?</button>
<div class="faq-answer"><p>Yes, fully customizable package options available.</p></div>
</div>

</div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
<div class="footer-contact">
<p><i class="fa-solid fa-location-dot"></i> Noida, India</p>
<p><i class="fa-solid fa-phone"></i> +91-120-4052615</p>
<p><i class="fa-solid fa-envelope"></i> info@trailbliss.com</p>
</div>

<p class="footer-copy">Copyright ©2026 TRAILBLISS Pvt. Ltd</p>
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