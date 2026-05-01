<!-- Save as lasvegas.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trailbliss - Las Vegas Tour Packages</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* RESET */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  background: #f6f7fb;
  color: #333;
}

/* HEADER */
.top-header {
  width: 100%;
  position: sticky;
  top: 0;
  z-index: 1000;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 70px;
  background: rgba(255,255,255,0.9);
  backdrop-filter: blur(10px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.logo {
  font-size: 28px;
  font-weight: 800;
  color: #d13d70;
}

.top-header ul {
  display: flex;
  gap: 25px;
  list-style: none;
}

.top-header ul li a {
  text-decoration: none;
  color: #333;
  font-weight: 500;
  transition: 0.3s;
}

.top-header ul li a:hover {
  color: #d13d70;
}

/* HERO */
.hero {
  height: 75vh;
  background: url("image/lv0.jpg") center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  color: white;
}

.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.5);
}

.hero-text {
  position: relative;
  text-align: center;
}

.small-title {
  font-size: 18px;
  letter-spacing: 2px;
}

.big-title {
  font-size: 60px;
  font-weight: 800;
}

/* CONTAINER */
.container {
  max-width: 1200px;
  margin: auto;
  padding: 60px 20px;
}

.main-title {
  text-align: center;
  font-size: 32px;
  margin-bottom: 30px;
}

/* CONTENT */
.content-area {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: 30px;
}

.section-box {
  background: #fff;
  padding: 25px;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
  line-height: 1.7;
}

.right-content img {
  width: 100%;
  border-radius: 15px;
}

/* CARDS */
.tour-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}

.tour-card {
  background: white;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
}

/* ================= BEST TIME FIXED ================= */

.best-time-wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 25px;
  align-items: center;
  background: white;
  padding: 25px;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.06);
}

.best-time-list {
  list-style: none;
}

.best-time-list li {
  margin-bottom: 18px;
  padding: 15px;
  background: #f8f8f8;
  border-left: 5px solid #d13d70;
  border-radius: 10px;
}

.best-time-list strong {
  display: block;
  margin-bottom: 5px;
}

.best-time-list span {
  font-size: 14px;
  color: #666;
}

.best-time-img img {
  width: 100%;
  border-radius: 12px;
}

/* FOOTER BLACK */
footer {
  background: #000;
  color: #fff;
  text-align: center;
  padding: 25px;
  margin-top: 40px;
}

/* RESPONSIVE */
@media(max-width: 900px){
  .tour-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .content-area,
  .best-time-wrapper {
    grid-template-columns: 1fr;
  }

  .big-title {
    font-size: 40px;
  }
}

</style>
</head>

<body>

<!-- HEADER -->
<header class="top-header">
  <div class="logo">Trailbliss</div>
  <ul>
    <li><a href="front.php">Home</a></li>
    <li><a href="front.php">Destinations</a></li>
    <li><a href="front.php">Packages</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#reviews">Reviews</a></li>
  </ul>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-text">
    <div class="small-title">Entertainment Capital</div>
    <div class="big-title">Las Vegas</div>
  </div>
</section>

<!-- INTRO -->
<section class="container">
  <h2 class="main-title">Las Vegas Tour Packages</h2>

  <div class="content-area">
    <div class="section-box">
        <p>
    Las Vegas is world-famous for its luxury resorts, vibrant nightlife, high-end casinos, fine dining experiences, and non-stop entertainment. 
    Located in the heart of the Nevada desert, the city offers a unique blend of modern architecture, themed hotels, and world-class attractions.
    Visitors can explore the iconic Las Vegas Strip, witness the stunning Bellagio Fountains, stroll through the historic Fremont Street Experience, and enjoy luxury shopping malls and entertainment shows.
    Beyond the city, adventure seekers can take unforgettable day trips to the Grand Canyon, Hoover Dam, and Red Rock Canyon, making Las Vegas a perfect mix of urban excitement and natural wonders.
  </p>
    </div>

    <div class="right-content">
      <img src="image/lv0.jpg">
    </div>
  </div>
</section>

<!-- BEST TIME -->
<section class="container">
  <h2 class="main-title">Best Time to Visit</h2>

  <div class="best-time-wrapper">

    <ul class="best-time-list">
      <li>
        <strong>Spring (Mar–May)</strong>
        <span>Best weather for sightseeing and outdoor tours.</span>
      </li>

      <li>
        <strong>Autumn (Sep–Nov)</strong>
        <span>Perfect for nightlife, events and fewer crowds.</span>
      </li>

      <li>
        <strong>Winter (Dec–Feb)</strong>
        <span>Festive lights, shows and luxury experiences.</span>
      </li>
    </ul>

    <div class="best-time-img">
      <img src="image/lv6.jpg">
    </div>

  </div>
</section>

<!-- FOOTER -->
<footer>
  <p>© 2026 Trailbliss Pvt. Ltd | All Rights Reserved</p>
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