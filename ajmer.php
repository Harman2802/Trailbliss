<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailbliss - Ajmer Tour Packages</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* INTRO SECTION */
.wildlife-section{
  padding:60px 20px;
}
.wildlife-container{
  max-width:1200px;
  margin:auto;
  display:flex;
  gap:40px;
  align-items:center;
}
.wildlife-text h1{
  font-size:40px;
  margin-bottom:20px;
}
.wildlife-text p{
  font-size:16px;
  line-height:1.7;
  color:#444;
}
.wildlife-image img{
  max-width:500px;
  width:100%;
  border-radius:12px;
  box-shadow:0 10px 30px rgba(0,0,0,0.15);
}
@media(max-width:900px){
  .wildlife-container{flex-direction:column;text-align:center;}
}
</style>
</head>

<body>

<!-- NAVBAR (SAME) -->
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
      <li><a href="#feedback-section">Reviews</a></li>
      <li><button id="openQuote" class="planTripBtn">Book Your Trip</button></li>
    </ul>
  </nav>
</header>

<!-- HERO -->
<div class="hero" style="background-image:url('image/ajmer-main.webp');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <div class="small-title">Welcome to Rajasthan</div>
    <div class="big-title">Ajmer</div>
  </div>
</div>

<!-- INTRO -->
<section class="wildlife-section">
  <div class="wildlife-container">
    <div class="wildlife-text">
      <h1>Ajmer Tour Packages</h1>
      <p>
        Ajmer is one of India’s most sacred cities, famous for the revered <b>Ajmer Sharif Dargah</b>.
        Surrounded by the Aravalli Hills, Ajmer blends spirituality, history, and culture beautifully.
        <br><br>
        Pilgrims from all religions visit the Dargah of Khwaja Moinuddin Chishti seeking blessings.
        Nearby destinations like Pushkar add spiritual charm with the Brahma Temple and holy Pushkar Lake.
        <br><br>
        Explore Ajmer with our customized packages including comfortable hotels, guided sightseeing,
        Pushkar excursions, and seamless travel arrangements.
      </p>
    </div>

    <div class="wildlife-image">
      <img src="image/ajmer.jpg" alt="Ajmer Tourism">
    </div>
  </div>
</section>

<!-- PACKAGES -->
<section class="section">
  <h2>Popular Ajmer Tour Packages</h2>
  <div class="card-grid">

    <div class="card">
      <img src="image/ajmer-1.jpg">
      <div class="card-content">
        <a href="#">
          2 Nights & 3 Days
          <h4>Ajmer Sharif Dargah Tour</h4>
          <p>Spiritual visit with local sightseeing.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/ajmer-2.jpg">
      <div class="card-content">
        <a href="#">
          3 Nights & 4 Days
          <h4>Ajmer – Pushkar Combo</h4>
          <p>Dargah visit, Brahma Temple & Pushkar Lake.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/ajmer-3.jpg">
      <div class="card-content">
        <a href="#">
          1 Night & 2 Days
          <h4>Ajmer Spiritual Retreat</h4>
          <p>Perfect short religious getaway.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/rajasthan.jpg">
      <div class="card-content">
        <a href="#">
          5 Nights & 6 Days
          <h4>Ajmer with Rajasthan Highlights</h4>
          <p>Jaipur, Pushkar & cultural heritage.</p>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- BEST TIME -->
<section class="best-time-section">
  <div class="bt-container">
    <div class="bt-left">
      <h2>Best Time to Visit <br> Ajmer</h2>

      <div class="bt-list">
        <div class="bt-item">
          <span>01</span>
          <h3>Winter (Oct – March)</h3>
          <p>Ideal for sightseeing & Dargah visit.</p>
        </div>

        <div class="bt-item">
          <span>02</span>
          <h3>Summer (April – June)</h3>
          <p>Hot but manageable for short trips.</p>
        </div>

        <div class="bt-item">
          <span>03</span>
          <h3>Urs Festival</h3>
          <p>Best time for devotees visiting Ajmer Sharif.</p>
        </div>
      </div>

      <div class="bt-text">
        <p>
          Winter is the best season to explore Ajmer comfortably.
          The Urs festival attracts devotees from across the world.
        </p>
      </div>
    </div>

    <div class="bt-right">
      <img src="image/ajmer-urs.jpg">
    </div>
  </div>
</section>

<!-- FEEDBACK -->
<section class="feedback-section" id="feedback-section">
  <h2>Guest Experiences</h2>

  <div class="feedback-card active">
    <div class="feedback-text center">
      <h4>Peaceful & Divine</h4>
      <p>
        Visiting Ajmer Sharif through Trailbliss was well organized and spiritually fulfilling.
      </p>
      <p class="reviewer">– Salman Khan</p>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about-section" id="about">
  <h2>About <span>Ajmer Tourism</span></h2>
  <div class="about-content">
    <p class="intro">
      Ajmer is a historic city of Rajasthan known for religious harmony.
      Our packages cover Ajmer Sharif Dargah, Pushkar, local markets,
      heritage sites, and cultural experiences with expert guides.
    </p>
  </div>
</section>

<!-- FOOTER (SAME) -->
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
