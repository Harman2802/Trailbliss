<!-- Save as miami.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trailbliss - Miami Tour Packages</title>

<link rel="stylesheet" href="front1.css">
<link rel="stylesheet" href="h1.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
.hero{
height:92vh;
background:url('image/mi1.jpg') center/cover no-repeat;
position:relative;
display:flex;
align-items:center;
justify-content:center;
}
.hero::before{
content:"";
position:absolute;
inset:0;
background:rgba(0,0,0,.45);
}
.hero-text{
position:relative;
z-index:2;
text-align:center;
color:#fff;
}
.hero-text .small-title{
font-size:18px;
letter-spacing:4px;
text-transform:uppercase;
margin-bottom:12px;
}
.hero-text .big-title{
font-size:68px;
font-weight:700;
}

.city-intro{
padding:70px 20px;
background:#fff;
}
.city-wrap{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:1fr 1fr;
gap:45px;
align-items:center;
}
.city-wrap img{
width:100%;
border-radius:18px;
box-shadow:0 8px 28px rgba(0,0,0,.15);
}
.city-text h2{
font-size:42px;
margin-bottom:20px;
}
.city-text p{
font-size:17px;
line-height:1.8;
color:#444;
}

.feature-strip{
padding:70px 20px;
background:#f7f7f7;
}
.feature-grid{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}
.feature-box{
background:#fff;
padding:28px;
border-radius:18px;
text-align:center;
box-shadow:0 5px 18px rgba(0,0,0,.08);
}
.feature-box i{
font-size:34px;
margin-bottom:14px;
color:#00bcd4;
}
.feature-box h4{
font-size:22px;
margin-bottom:10px;
}

@media(max-width:900px){
.city-wrap,
.feature-grid{
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
<div class="hero-text">
<div class="small-title">Sunshine Paradise</div>
<div class="big-title">Miami</div>
</div>
</section>

<!-- INTRO -->
<section class="city-intro">
<div class="city-wrap">

<div class="city-text">
<h2>Miami Tour Packages</h2>
<p>
Miami is one of America’s most exciting beach destinations, known for white sand beaches, luxury lifestyle, nightlife, Latin culture, and tropical weather.
<br><br>
Explore South Beach, Ocean Drive, Little Havana, Bayside Marketplace, luxury cruises, art districts, and waterfront adventures.
<br><br>
Trailbliss offers premium Miami holiday packages with beach resorts, airport transfers, sightseeing tours, cruises, and customized experiences.
</p>
</div>

<div>
<img src="image/mi2.jpg" alt="">
</div>

</div>
</section>

<!-- FEATURES -->
<section class="feature-strip">
<div class="section">
<h2>Why Visit Miami?</h2>
</div>

<div class="feature-grid">

<div class="feature-box">
<i class="fa-solid fa-umbrella-beach"></i>
<h4>Beaches</h4>
<p>Relax on famous South Beach coastline.</p>
</div>

<div class="feature-box">
<i class="fa-solid fa-martini-glass"></i>
<h4>Nightlife</h4>
<p>Enjoy clubs, music and vibrant nightlife.</p>
</div>

<div class="feature-box">
<i class="fa-solid fa-ship"></i>
<h4>Cruises</h4>
<p>Luxury cruises and ocean adventures.</p>
</div>

<div class="feature-box">
<i class="fa-solid fa-palette"></i>
<h4>Culture</h4>
<p>Art districts and Latin American vibes.</p>
</div>

</div>
</section>

<!-- PACKAGES -->
<section class="section">
<h2>Best Selling Miami Packages</h2>

<div class="card-grid">

<div class="card">
<img src="image/mi3.jpg">
<div class="card-content">
<a href="#">
4 Nights & 5 Days
<h4>South Beach Escape</h4>
<p>Beach resort and nightlife experience.</p>
</a>
</div>
</div>

<div class="card">
<img src="image/mi4.jpg">
<div class="card-content">
<a href="#">
3 Nights & 4 Days
<h4>Classic Miami Tour</h4>
<p>Ocean Drive and city sightseeing.</p>
</a>
</div>
</div>

<div class="card">
<img src="image/mi5.jpeg">
<div class="card-content">
<a href="#">
5 Nights & 6 Days
<h4>Miami Cruise Holiday</h4>
<p>City stay plus luxury cruise package.</p>
</a>
</div>
</div>

<div class="card">
<img src="image/mi6.jpeg">
<div class="card-content">
<a href="#">
6 Nights & 7 Days
<h4>Luxury Miami Vacation</h4>
<p>Premium stay, yacht and shopping.</p>
</a>
</div>
</div>

</div>
</section>

<!-- BEST TIME -->
<section class="best-time-section">
<div class="bt-container">

<div class="bt-left">
<h2>Best Time to Visit <br> Miami</h2>

<div class="bt-list">

<div class="bt-item">
<span>01</span>
<h3>Winter (Nov - April)</h3>
<p>Best weather for beach vacations.</p>
</div>

<div class="bt-item">
<span>02</span>
<h3>Summer (May - Aug)</h3>
<p>Warm tropical season and lively events.</p>
</div>

<div class="bt-item">
<span>03</span>
<h3>Autumn (Sep - Oct)</h3>
<p>Less crowded and attractive deals.</p>
</div>

</div>

</div>

<div class="bt-right">
<img src="image/mi7.jpg" alt="">
</div>

</div>
</section>

<!-- REVIEWS -->
<section class="feedback-section" id="reviews">
<h2>Traveler <span>Reviews</span></h2>

<div class="feedback-card active">
<div class="feedback-text center">
<h4>Perfect Beach Holiday!</h4>
<p>
Miami was amazing. Great hotel, clean beaches, nightlife and smooth arrangements by Trailbliss.
</p>
<p class="reviewer">– Jasleen Kaur</p>
</div>
</div>

</section>

<!-- ABOUT -->
<section class="about-section" id="about">
<h2>About <span>Miami Tourism</span></h2>

<div class="about-content">
<div class="about-text">
<p class="intro">
Miami is famous for beaches, luxury travel, cruises, nightlife, and multicultural experiences. It is ideal for honeymooners, families, and premium vacations.
</p>
</div>
</div>
</section>

<!-- FAQ -->
<section class="faq-section">
<h2>Frequently <span>Asked Questions</span></h2>

<div class="faq-container">

<div class="faq-item">
<button class="faq-question">1. Is Miami good for honeymoon?</button>
<div class="faq-answer"><p>Yes, Miami is excellent for couples and beach romance.</p></div>
</div>

<div class="faq-item">
<button class="faq-question">2. Best season to visit Miami?</button>
<div class="faq-answer"><p>November to April offers the best weather.</p></div>
</div>

<div class="faq-item">
<button class="faq-question">3. Are cruises available?</button>
<div class="faq-answer"><p>Yes, cruise packages can be added.</p></div>
</div>

<div class="faq-item">
<button class="faq-question">4. Can family packages be customized?</button>
<div class="faq-answer"><p>Yes, all Miami packages are customizable.</p></div>
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