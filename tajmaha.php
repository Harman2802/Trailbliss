<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailbliss - Taj Mahal Tour Packages</title>

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
<div class="hero" style="background-image:url('image/tajmahal-main.jpg');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <div class="small-title">Welcome to Agra</div>
    <div class="big-title">Taj Mahal</div>
  </div>
</div>

<!-- INTRO -->
<section class="wildlife-section">
  <div class="wildlife-container">
    <div class="wildlife-text">
      <h1>Taj Mahal Tour Packages</h1>
      <p>
        The <b>Taj Mahal</b>, one of the Seven Wonders of the World, is a timeless symbol
        of love built by Mughal Emperor Shah Jahan in memory of Mumtaz Mahal.
        <br><br>
        Located in Agra, this white marble masterpiece reflects extraordinary
        Mughal architecture, intricate carvings, and breathtaking symmetry.
        <br><br>
        Our Taj Mahal tour packages include guided sightseeing, sunrise & sunset views,
        luxury stays, local heritage tours, and smooth travel arrangements.
      </p>
    </div>

    <div class="wildlife-image">
      <img src="image/tajmahal.jpg" alt="Taj Mahal Agra">
    </div>
  </div>
</section>

<!-- PACKAGES -->
<section class="section">
  <h2>Popular Taj Mahal Tour Packages</h2>
  <div class="card-grid">

    <div class="card">
      <img src="image/taj-1.jpg">
      <div class="card-content">
        <a href="#">
          Same Day Tour
          <h4>Taj Mahal Sunrise Tour</h4>
          <p>Experience Taj Mahal at sunrise with guide.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/taj-2.jpg">
      <div class="card-content">
        <a href="#">
          1 Night & 2 Days
          <h4>Agra Heritage Tour</h4>
          <p>Taj Mahal, Agra Fort & Mehtab Bagh.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/fatehpur-sikri.jpg">
      <div class="card-content">
        <a href="#">
          2 Nights & 3 Days
          <h4>Agra with Fatehpur Sikri</h4>
          <p>Mughal heritage & UNESCO sites.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/golden-triangle.jpg">
      <div class="card-content">
        <a href="#">
          5 Nights & 6 Days
          <h4>Golden Triangle Tour</h4>
          <p>Delhi – Agra – Jaipur highlights.</p>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- BEST TIME -->
<section class="best-time-section">
  <div class="bt-container">
    <div class="bt-left">
      <h2>Best Time to Visit <br> Taj Mahal</h2>

      <div class="bt-list">
        <div class="bt-item">
          <span>01</span>
          <h3>Winter (Oct – March)</h3>
          <p>Pleasant weather for sightseeing.</p>
        </div>

        <div class="bt-item">
          <span>02</span>
          <h3>Summer (April – June)</h3>
          <p>Early morning visits recommended.</p>
        </div>

        <div class="bt-item">
          <span>03</span>
          <h3>Full Moon Nights</h3>
          <p>Special moonlight Taj viewing.</p>
        </div>
      </div>

      <div class="bt-text">
        <p>
          Winter is the best season to visit the Taj Mahal.
          Sunrise and full-moon visits offer magical views.
        </p>
      </div>
    </div>

    <div class="bt-right">
      <img src="image/taj-sunset.jpg">
    </div>
  </div>
</section>

<!-- FEEDBACK -->
<section class="feedback-section" id="feedback-section">
  <h2>Guest Experiences</h2>

  <div class="feedback-card active">
    <div class="feedback-text center">
      <h4>Truly Magical</h4>
      <p>
        Watching the sunrise at the Taj Mahal arranged by Trailbliss
        was a dream come true.
      </p>
      <p class="reviewer">– Ankit Verma</p>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about-section" id="about">
  <h2>About <span>Taj Mahal Tourism</span></h2>
  <div class="about-content">
    <p class="intro">
      The Taj Mahal is India’s most iconic monument and a UNESCO World Heritage Site.
      Our tours include Taj Mahal, Agra Fort, Fatehpur Sikri,
      guided heritage walks, and premium travel experiences.
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

