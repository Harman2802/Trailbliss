<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shimla Retreat - Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* Hero background for Shimla Retreat page */
    .hero {
      background-image: url('image/shimla.jpg');
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
      position: relative;
    }
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.45);
    }
    /* ==============================
  General Reset & Fonts
============================== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  line-height: 1.6;
  color: #333;
  background: #fdfdfd;
}


/* ==============================
  Hero Section
============================== */
.hero {
  height: 80vh;
  background: url('image/shimla.jpg') center/cover no-repeat;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.45);
}

.hero-text {
  position: relative;
  color: #fff;
  text-align: center;
  z-index: 1;
}

.hero-text .small-title {
  font-size: 22px;
  font-weight: 400;
  letter-spacing: 1px;
}

.hero-text .big-title {
  font-size: 50px;
  font-weight: 700;
  margin-top: 10px;
}

/* ==============================
  Intro Section
============================== */
.wildlife-section {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding: 50px 20px;
  gap: 50px;
  flex-wrap: wrap;
}

.wildlife-text {
  flex: 1;
  min-width: 300px;
}

.wildlife-text h1 {
  font-size: 28px;
  color: #ff66a0;
  margin-bottom: 15px;
}

.wildlife-text p {
  font-size: 15px;
  color: #444;
  line-height: 1.6;
}

.wildlife-image {
  flex: 1;
  min-width: 300px;
}

.wildlife-image img {
  width: 100%;
  border-radius: 10px;
  border: 1px solid #e6e6e6;
}

/* ==============================
  SECTION HEADINGS
============================== */
.section h2,
.best-time-section h2 {
  text-align: center;
  font-size: 28px;
  color: #ff66a0; /* Accent color */
  margin-bottom: 30px;
  font-weight: 600;
}


/* ==============================
  BEST TIME SECTION
============================== */
.best-time-section {
  background: #f9f9f9;
  padding: 50px 20px;
}

.bt-container {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  max-width: 1100px;
  margin: 0 auto;
  gap: 30px;
}

.bt-left {
  flex: 1 1 500px;
}

.bt-left h2 {
  font-size: 26px;
  margin-bottom: 25px;
  color: #ff66a0; /* Accent color */
}

.bt-list {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.bt-item {
  display: flex;
  gap: 15px;
  align-items: flex-start;
}

.bt-item span {
  font-size: 24px;
  font-weight: 700;
  color: #ff66a0;
}

.bt-item h3 {
  margin: 0;
  font-size: 18px;
  color: #333;
}

.bt-item p {
  margin: 5px 0 0 0;
  font-size: 14px;
  color: #555;
}

.bt-text p {
  margin-top: 20px;
  font-size: 15px;
  color: #444;
}

/* Image on the right */
.bt-right {
  flex: 1 1 400px;
}

.bt-right img {
  width: 100%;
  border-radius: 12px;
  display: block;
}

/* ==============================
  RESPONSIVE
============================== */
@media (max-width: 900px) {
  .bt-container {
    flex-direction: column-reverse;
  }
  .bt-right {
    margin-bottom: 30px;
  }
}

/* ==============================
  Quick Query
============================== */
.quick-query {
  padding: 50px 20px;
  text-align: center;
}

.quick-query h2 {
  color: #ff66a0;
  margin-bottom: 20px;
}

.quick-query-form {
  max-width: 500px;
  margin: auto;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.quick-query-form input,
.quick-query-form textarea,
.quick-query-form select {
  padding: 10px;
  border-radius: 8px;
  border: 1px solid #e6e6e6;
  font-size: 14px;
  width: 100%;
}

.quick-query-form button {
  padding: 12px;
  border-radius: 8px;
  border: none;
  background: #ff66a0;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
}

.quick-query-form button:hover {
  background: #fff;
  color: #ff66a0;
  border: 1px solid #ff66a0;
}

/* ==============================
  About Section
============================== */
#about {
  padding: 50px 20px;
  text-align: center;
  background: #f3f8ff;
}

#about h2 {
  font-size: 28px;
  color: #ff66a0;
  margin-bottom: 15px;
}

#about p {
  font-size: 15px;
  max-width: 750px;
  margin: 0 auto 25px auto;
  line-height: 1.6;
  color: #444;
}

.about-grid {
  display: grid;
  gap: 25px;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  max-width: 1000px;
  margin: auto;
}

.about-grid div {
  background: #fff;
  padding: 20px 18px;
  border-radius: 10px;
  border: 1px solid #e6e6e6;
  transition: 0.3s ease;
}

.about-grid div:hover {
  background: #f9e6f0;
  transform: translateY(-5px);
}

.about-grid div h4 {
  font-size: 18px;
  color: #ff66a0;
  margin-bottom: 10px;
}

.about-grid div p {
  font-size: 14px;
  color: #555;
  line-height: 1.5;
}


/* ==============================
  Navbar - White Header
============================== */
.navbar {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 50px;
  background: #fff; /* White header */
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1000;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.navbar .logo span {
  color: #ff66a0; /* Accent color */
}

.navbar nav ul li a,
.navbar nav ul li button {
  color: #333; /* Dark text for white header */
}

.navbar nav ul li a:hover,
.navbar nav ul li button:hover {
  color: #ff66a0;
}

/* ==============================
  Footer - White Footer
============================== */

.site-footer {
  background-color: #1c1e21;
  color: #ccc;
  text-align: center;
  padding: 50px 5% 25px;
  font-family: "Poppins", sans-serif;
  border-top: 2px solid #d13d70;
}

.footer-logos {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 60px;
  flex-wrap: wrap;
  margin-bottom: 30px;
}

.footer-logos img {
  height: 45px;
  opacity: 0.85;
  filter: brightness(0) invert(1);
  transition: opacity 0.3s;
}

.footer-logos img:hover {
  opacity: 1;
}

.footer-info {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  padding: 25px 0;
  margin: 20px 0;
}

.footer-contact {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px 40px;
  max-width: 1200px;
  margin: auto;
  font-size: 0.95rem;
}

.footer-contact i {
  color: #d13d70;
  margin-right: 8px;
}

.footer-social {
  margin: 25px 0;
  display: flex;
  justify-content: center;
  gap: 15px;
}

.footer-social a {
  width: 40px;
  height: 40px;
  border: 1.5px solid #d13d70;
  color: #d13d70;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.4s ease;
}

.footer-social a:hover {
  background-color: #d13d70;
  color: #fff;
  transform: translateY(-3px);
}
.footer-copy {
  font-size: 0.9rem;
  color: #aaa;
  margin-top: 10px;
}
  </style>
</head>

<body class="shimla-page">

<!-- Navbar -->
<header class="navbar">
  <div class="logo">
    <img src="image/logo.png" alt="Trailbliss Logo">
    <span>Trailbliss</span>
  </div>
  <nav>
    <ul>
      <li><a href="front.php">Home</a></li>
      <li><a href="front.php">Destinations</a></li>
      <li><a href="front.php">Packages</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#feedback-section">Reviews</a></li>
      <li><button id="openQuote" class="planTripBtn">Book Your Trip</button></li>
    </ul>
  </nav>
</header>

<!-- HERO SECTION -->
<div class="hero">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <div class="small-title">Escape to the Mountains</div>
    <div class="big-title">Shimla Retreat</div>
  </div>
</div>

<!-- INTRO -->
<section class="wildlife-section">
  <div class="wildlife-container">

    <div class="wildlife-text">
      <h1>Shimla Retreat <br> Packages</h1>
      <p>
        Shimla, the Queen of Hills, offers serene landscapes, pine forests, colonial architecture, and cool mountain air.
        Perfect for a relaxing retreat, honeymoon, or family vacation.
        <br><br>
        Explore Mall Road, Jakhoo Temple, and Kufri. Enjoy nature walks, adventure activities, and cozy stays
        amidst scenic mountains.
        <br><br>
        Our Shimla Retreat packages include guided tours, comfortable stays, local experiences,
        and hassle-free travel arrangements for an unforgettable hill station holiday.
      </p>
    </div>

    <div class="wildlife-image">
      <img src="image/shimla-intro.jpg" alt="Shimla Retreat">
    </div>

  </div>
</section>


<!-- BEST TIME -->
<section class="best-time-section">
  <div class="bt-container">

    <div class="bt-left">
      <h2>Best Time to Visit <br> Shimla</h2>

      <div class="bt-list">
        <div class="bt-item">
          <span>01</span>
          <h3>Summer (March - June)</h3>
          <p>Ideal to enjoy pleasant weather and scenic walks.</p>
        </div>

        <div class="bt-item">
          <span>02</span>
          <h3>Monsoon (July - Sept)</h3>
          <p>Green hills, waterfalls, and nature trails.</p>
        </div>

        <div class="bt-item">
          <span>03</span>
          <h3>Winter (Oct - Feb)</h3>
          <p>Snowfall, winter sports, and cozy stays.</p>
        </div>
      </div>

      <div class="bt-text">
        <p>
          Shimla is a year-round destination with each season offering unique experiences —
          from summer hikes to winter snow activities.
        </p>
      </div>
    </div>

    <div class="bt-right">
      <img src="image/shimla-5.jpg" alt="Shimla Scenery">
    </div>

  </div>
</section>

<!-- QUICK QUERY -->
<section class="quick-query">
  <h2>Quick Query</h2>

  <form class="quick-query-form" action="quick-query.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="text" name="phone" placeholder="Your Phone" required>
    <input type="text" name="country" placeholder="Country" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit">Submit</button>
  </form>
</section>

<!-- ABOUT -->
<section id="about">
  <h2>About Shimla Retreat</h2>
  <p>
    Shimla is the perfect hill station getaway for all travelers seeking serenity,
    adventure, and picturesque landscapes in the Himalayas.
  </p>

  <div class="about-grid">
    <div>
      <h4>Scenic Walks</h4>
      <p>Stroll through pine forests, Mall Road & scenic viewpoints.</p>
    </div>

    <div>
      <h4>Snow Fun</h4>
      <p>Enjoy snowfall, skiing, and snowball fights in winter months.</p>
    </div>

    <div>
      <h4>Adventure Sports</h4>
      <p>Paragliding, trekking, and ziplining options for thrill seekers.</p>
    </div>

    <div>
      <h4>Relax & Unwind</h4>
      <p>Stay in cozy cottages, enjoy local cuisine & peaceful surroundings.</p>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="site-footer">
  <div class="footer-info">
    <div class="footer-contact">
      <p><i class="fa-solid fa-location-dot"></i> C - 81C, Sector - 8, Noida - 201301</p>
      <p><i class="fa-solid fa-phone"></i> +91-120-4052615</p>
      <p><i class="fa-solid fa-mobile-screen"></i> +91-9512787224/26</p>
      <p><i class="fa-solid fa-envelope"></i> info@trailbliss.com</p>
    </div>
  </div>
  <div class="footer-social">
    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
  </div>
  <p class="footer-copy">Copyright © 2025, TRAILBLISS Pvt. Ltd</p>
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
