<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rhino & Tigers Tour | Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
.hero {
  background: url("image/tiger3.jpg") center center / cover no-repeat;
  height: 100vh;
  position: relative;
}
.hero-overlay {
  background: rgba(0,0,0,0.55);
}
/* RESET */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background: #fafafa;
  color: #222;
  line-height: 1.6;
}

/* NAVBAR */
.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  background: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 40px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  z-index: 1000;
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

.planTripBtn {
  background: #ff6b00;
  color: #fff;
  border: none;
  padding: 8px 16px;
  border-radius: 5px;
  cursor: pointer;
}

/* HERO */
.hero {
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.hero-text {
  position: relative;
  z-index: 2;
  color: #fff;
}

.small-title {
  letter-spacing: 2px;
  font-size: 14px;
  opacity: 0.9;
}

.big-title {
  font-size: 46px;
  font-weight: 700;
  margin-top: 10px;
}

/* CONTAINER */
.container {
  max-width: 1200px;
  margin: 80px auto;
  padding: 0 20px;
}

/* GALLERY */
.gallery {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 10px;
  margin-bottom: 50px;
}

.gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 8px;
}

.gallery-right {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
}

/* CONTENT AREA */
.content-area {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 40px;
  margin-bottom: 60px;
}

.section-box {
  background: #fff;
  padding: 25px;
  border-radius: 10px;
  margin-bottom: 25px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.06);
}

.section-box h2 {
  margin-bottom: 10px;
  font-size: 22px;
}

/* ITINERARY */
.itinerary li {
  margin-left: 18px;
  padding: 5px 0;
}

/* FORM */
.right-form {
  background: #fff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.06);
}

.right-form input,
.right-form textarea {
  width: 100%;
  margin-bottom: 12px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.right-form button {
  width: 100%;
  background: #ff6b00;
  color: #fff;
  border: none;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
}

/* ABOUT */
#about {
  background: #fff;
  padding: 70px 20px;
  text-align: center;
}

.about-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 25px;
  margin-top: 40px;
}

.about-grid div {
  background: #f7f7f7;
  padding: 20px;
  border-radius: 8px;
}

/* REVIEWS */
.customer-reviews {
  background: #f2f2f2;
  padding: 70px 20px;
  text-align: center;
}

.reviews-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 25px;
  margin-top: 40px;
}

.review-card {
  background: #fff;
  padding: 25px;
  border-radius: 10px;
}

.review-card img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin-bottom: 10px;
}

/* FOOTER */
.site-footer {
  background: #111;
  color: #ccc;
  padding: 40px 20px;
  text-align: center;
}

.footer-social a {
  color: #fff;
  margin: 0 10px;
  font-size: 18px;
}

/* RESPONSIVE */
@media(max-width: 900px) {
  .gallery,
  .content-area {
    grid-template-columns: 1fr;
  }

  .big-title {
    font-size: 34px;
  }
}

</style>
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">
  <div class="logo">
    <img src="image/logo.png">
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
<div class="hero">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <div class="small-title">Wildlife & Heritage</div>
    <div class="big-title">Golden Triangle with Tigers</div>
  </div>
</div>

<!-- IMAGE GALLERY (ADDED) -->
<div class="container">
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/tiger1.jpg">
    </div>
    <div class="gallery-right">
      <img src="image/tiger2.jpg">
      <img src="image/tiger4.jpg">
      <img src="image/tiger5.jpg">
      <img src="image/tiger3.jpg">
    </div>
  </div>

<!-- CONTENT + FORM -->
<div class="content-area">

<!-- LEFT -->
<div class="left-content">

<div class="section-box">
<h2>Overview</h2>
<p>
Explore India's iconic Golden Triangle (Delhi–Agra–Jaipur) combined with thrilling tiger safaris
in Ranthambore and Kaziranga. Witness majestic wildlife, royal heritage, and rich culture in one unforgettable journey.
</p>
</div>

<div class="section-box">
<h2>Itinerary</h2>
<ul class="itinerary">
<li>Day 01: Arrival in Delhi & Sightseeing</li>
<li>Day 02: Delhi → Agra (Taj Mahal)</li>
<li>Day 03: Agra → Jaipur via Fatehpur Sikri</li>
<li>Day 04: Jaipur Sightseeing</li>
<li>Day 05: Ranthambore Tiger Safari</li>
<li>Day 06: Kaziranga Rhino Safari</li>
<li>Day 07: Departure</li>
</ul>
</div>

</div>

<!-- RIGHT FORM -->
<div class="right-form">
<h3>Quick Query</h3>
<form>
<input type="text" placeholder="Your Name" required>
<input type="email" placeholder="Your Email" required>
<input type="text" placeholder="Phone" required>
<input type="text" placeholder="Country" required>
<textarea placeholder="Your Message"></textarea>
<button>Submit</button>
</form>
</div>

</div>
</div>

<!-- ABOUT SECTION (ADDED) -->
<section id="about">
<h2>Why Choose This Tour?</h2>
<p>
This tour blends India’s cultural heritage with thrilling wildlife safaris, guided by experts
and designed for comfort, safety, and unforgettable memories.
</p>

<div class="about-grid">
<div>
<h4>Tiger & Rhino Safaris</h4>
<p>Experience jungle safaris with expert naturalists.</p>
</div>
<div>
<h4>Golden Triangle Heritage</h4>
<p>Visit Taj Mahal, Jaipur forts & historic landmarks.</p>
</div>
<div>
<h4>Comfortable Stays</h4>
<p>Premium hotels & jungle resorts.</p>
</div>
<div>
<h4>Expert Guides</h4>
<p>Certified wildlife and cultural guides.</p>
</div>
</div>
</section>

<!-- REVIEWS (ADDED) -->
<section class="customer-reviews" id="reviews">
<h2>Traveler Experiences</h2>

<div class="reviews-container">
<div class="review-card">
<img src="image/user1.jpg">
<h3>Rohit Mehra</h3>
<span>India</span>
<p>Perfect mix of culture and wildlife. Tigers were incredible!</p>
</div>

<div class="review-card">
<img src="image/user1.jpg">
<h3>Sarah Williams</h3>
<span>UK</span>
<p>Luxury hotels and unforgettable safaris.</p>
</div>

<div class="review-card">
<img src="image/user1.jpg">
<h3>Daniel Cruz</h3>
<span>USA</span>
<p>Best wildlife tour experience in India.</p>
</div>
</div>
</section>

  <!-- Footer -->
<footer class="site-footer">
  <div class="footer-info">
    <div class="footer-contact">
      <p>
        <i class="fa-solid fa-location-dot"></i> C - 81C, Sector - 8, Noida -
        201301
      </p>
      <p>
        <i class="fa-solid fa-phone"></i> +91-120-4052615 - 99 (85 hunting lines
        are available)
      </p>
      <p><i class="fa-solid fa-fax"></i> +91-120-4052699</p>
      <p><i class="fa-solid fa-mobile-screen"></i> +91-9512787224/26</p>
      <p><i class="fa-solid fa-envelope"></i> info@trailbliss.com</p>
      <p><i class="fa-brands fa-whatsapp"></i> +91-9512787225 (Only for Whatsapp)</p>
      <p><i class="fa-brands fa-skype"></i> Trailblisspunjab</p>
    </div>
  </div>

  <div class="footer-social">
    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
    <a href="facebook"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
  </div>

  <p class="footer-copy">
    Copyright©2025, TRAILBLISS Pvt. Ltd
  </p>
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