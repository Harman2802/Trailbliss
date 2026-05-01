<!-- Save as switzerland.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trailbliss - Switzerland Tour Packages</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <link rel="stylesheet" href="front1.css">
<link rel="stylesheet" href="h1.css">
<style>

/* RESET */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

/* HERO */
.hero {
  height: 75vh;
  background: url("image/sw0.jpg") center/cover no-repeat;
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

/* BEST TIME */
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
  border-left: 5px solid #2b6cb0;
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

/* FOOTER */
footer {
  background: #000;
  color: #fff;
  text-align: center;
  padding: 25px;
  margin-top: 40px;
}

/* RESPONSIVE */
@media(max-width: 900px){
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

  <!-- Navbar -->
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
  <div class="hero-text">
    <div class="small-title">Land of Alps</div>
    <div class="big-title">Switzerland</div>
  </div>
</section>

<!-- INTRO -->
<section class="container">
  <h2 class="main-title">Switzerland Tour Packages</h2>

  <div class="content-area">
    <div class="section-box">
      <p>
        Switzerland is known for its breathtaking Alps, crystal-clear lakes, scenic train journeys, and charming cities like Zurich, Lucerne, and Interlaken. 
        It is a dream destination for nature lovers and adventure seekers. From snow-capped mountains to peaceful villages, Switzerland offers unforgettable experiences all year round including skiing, hiking, and luxury mountain stays.
      </p>
    </div>

    <div class="right-content">
      <img src="image/sw0.jpg">
    </div>
  </div>
</section>

<!-- BEST TIME -->
<section class="container">
  <h2 class="main-title">Best Time to Visit</h2>

  <div class="best-time-wrapper">

    <ul class="best-time-list">
      <li>
        <strong>Summer (Jun–Aug)</strong>
        <span>Best for lakes, hiking and scenic views.</span>
      </li>

      <li>
        <strong>Winter (Dec–Feb)</strong>
        <span>Perfect for skiing and snowy mountains.</span>
      </li>

      <li>
        <strong>Spring/Autumn</strong>
        <span>Less crowd and beautiful landscapes.</span>
      </li>
    </ul>

    <div class="best-time-img">
      <img src="image/sw1.jpg">
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