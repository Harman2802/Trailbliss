<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailbliss - Gujarat Tour Packages</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">
  

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
<div class="hero" style="background-image:url('image/g1.jpg');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <div class="small-title">Welcome to Vibrant Gujarat</div>
    <div class="big-title">Gujarat</div>
  </div>
</div>

<!-- INTRO -->
<section class="wildlife-section">
  <div class="wildlife-container">
    <div class="wildlife-text">
      <h1>Gujarat Tour <br> Packages</h1>
      <p>
        Gujarat, the land of rich culture, heritage, and stunning landscapes, offers a perfect blend of history and nature. 
        Explore the white desert of Kutch, Gir National Park (home of the Asiatic Lions), ancient temples, and vibrant cities like Ahmedabad, Vadodara, and Surat.
        <br><br>
        Enjoy Rann Utsav, Somnath Temple, Dwarka Darshan, Saputara Hill Station, and beautiful coastal views.
        <br><br>
        Our Gujarat tour packages include curated itineraries, hotel stays, transport, guided tours, and cultural experiences.
      </p>
    </div>

    <div class="wildlife-image">
      <img src="image/gujarat.jpg" alt="Gujarat Tourism">
    </div>
  </div>
</section>

<!-- BEST SELLING PACKAGES -->
<section class="section">
  <h2>Best Selling Gujarat Packages</h2>

  <div class="card-grid">

    <div class="card">
      <img src="image/g2.jpg">
      <div class="card-content">
        <a href="#"> 3 Nights & 4 Days
          <h4>Rann of Kutch Tour</h4>
          <p>Experience Rann Utsav, White Desert & Cultural Programs.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/g3.jpg">
      <div class="card-content">
        <a href="#"> 2 Nights & 3 Days
          <h4>Gir National Park Safari</h4>
          <p>Meet the Asiatic Lions in their natural habitat.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/g4.jpg">
      <div class="card-content">
        <a href="#"> 4 Nights & 5 Days
          <h4>Somnath & Dwarka Tour</h4>
          <p>Pilgrimage tour covering two major Jyotirlingas.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/g5.jpg">
      <div class="card-content">
        <a href="#"> 2 Nights & 3 Days
          <h4>Saputara Hill Station</h4>
          <p>Peaceful hill escape with boating & nature trails.</p>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- BEST TIME TO VISIT -->
<section class="best-time-section">
  <div class="bt-container">
    <div class="bt-left">
      <h2>Best Time to Visit <br> Gujarat</h2>
      <div class="bt-list">
        <div class="bt-item">
          <span>01</span>
          <h3>Winter (Nov - Feb)</h3>
          <p>Perfect for sightseeing, wildlife safari & Rann Utsav.</p>
        </div>
        <div class="bt-item">
          <span>02</span>
          <h3>Summer (Mar - Jun)</h3>
          <p>Hot but good for temple tours and hill stations.</p>
        </div>
        <div class="bt-item">
          <span>03</span>
          <h3>Monsoon (Jul - Oct)</h3>
          <p>Refreshing greenery; ideal for Saputara and dams.</p>
        </div>
      </div>
    </div>

    <div class="bt-right">
      <img src="image/g6.jpg" alt="Best Time Gujarat">
    </div>
  </div>
</section>

<!-- QUICK QUERY -->
<section class="quick-query">
  <h2>Quick Query</h2>

  <form class="quick-query-form">
    <input type="text" placeholder="Your Name" required>
    <input type="email" placeholder="Your Email" required>
    <input type="text" placeholder="Phone Number" required>
    <textarea placeholder="Write your query here..." required></textarea>
    <button type="submit" class="query-btn">Submit</button>
  </form>
</section>

<!-- ABOUT -->
<section class="about-section" id="about">
  <h2>About <span>Gujarat Tourism</span></h2>
  <div class="about-content">
    <div class="about-text">
      <p class="intro">
        Gujarat is known for its heritage sites, festivals, wildlife, pilgrimage sites, and world-famous White Desert. 
        From the spiritual charm of Dwarka and Somnath to the wilderness of Gir, Gujarat offers a well-rounded travel experience.
      </p>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq-section">
  <h2>Frequently <span> Asked Questions</span></h2>
  <p class="subtitle">Find answers to Gujarat travel queries</p>

  <div class="faq-container">

    <div class="faq-item">
      <button class="faq-question">1. Is Gujarat safe for tourists?</button>
      <div class="faq-answer">
        <p>Yes, Gujarat is one of the safest and cleanest states in India for tourists.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">2. When is Rann Utsav celebrated?</button>
      <div class="faq-answer">
        <p>Every year from November to February.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">3. Are safaris available throughout the year?</button>
      <div class="faq-answer">
        <p>Gir Safari remains closed from June to mid-October due to rains.</p>
      </div>
    </div>

  </div>
</section>

<!-- FOOTER SAME AS THAILAND PAGE -->
<footer class="site-footer">
  <div class="footer-info">
    <div class="footer-contact">
      <p><i class="fa-solid fa-location-dot"></i> C - 81C, Sector - 8, Noida - 201301</p>
      <p><i class="fa-solid fa-phone"></i> +91-120-4052615 - 99</p>
      <p><i class="fa-solid fa-mobile-screen"></i> +91-9512787224/26</p>
      <p><i class="fa-solid fa-envelope"></i> info@trailbliss.com</p>
      <p><i class="fa-brands fa-whatsapp"></i> +91-9512787225</p>
    </div>
  </div>

  <div class="footer-social">
    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
  </div>

  <p class="footer-copy">Copyright©2025, TRAILBLISS Pvt. Ltd</p>
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
