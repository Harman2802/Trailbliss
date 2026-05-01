<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trailbliss - New York Tour Packages</title>

<link rel="stylesheet" href="front1.css">
<link rel="stylesheet" href="h1.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
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
      <li><a href="#reviews">Reviews</a></li>
      <li><button id="openQuote" class="planTripBtn">Book Your Trip</button></li>
    </ul>
  </nav>
</header>

<!-- TITLE -->
<div class="container">
  <h1 class="main-title">New York City Tour Experience</h1>
  <p class="route">Statue of Liberty - Times Square - Central Park - Brooklyn Bridge</p>

  <!-- IMAGE GALLERY -->
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/ny1.jpg">
    </div>

    <div class="gallery-right">
      <img src="image/ny0.jpg">
      <img src="image/ny2.jpg">
      <img src="image/ny3.jpg">
      <img src="image/ny4.jpg">
    </div>
  </div>

  <!-- CONTENT AREA -->
  <div class="content-area">

    <!-- LEFT -->
    <div class="left-content">

      <div class="section-box">
        <h2>Overview</h2>
        <p>
          Explore the world’s most iconic city — New York City.
          From skyscrapers to Broadway shows, NYC offers unmatched energy, culture, and entertainment.
          Experience Times Square lights, Statue of Liberty cruise, Central Park walks, and luxury shopping.
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival in New York</li>
          <li>Day 02: Times Square & Broadway Tour</li>
          <li>Day 03: Statue of Liberty Cruise</li>
          <li>Day 04: Central Park & Museums</li>
          <li>Day 05: Brooklyn Bridge & DUMBO</li>
          <li>Day 06: Shopping on 5th Avenue</li>
          <li>Day 07: Departure</li>
        </ul>
      </div>

    </div>

    <!-- RIGHT FORM -->
    <div class="right-form">
      <h3>Quick Query</h3>

      <form action="quick-query.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="phone" placeholder="Your Phone" required>
        <input type="text" name="country" placeholder="Country" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </div>

  </div>

  <!-- PACKAGES -->
  <div class="tour-section">
    <h2>Popular New York Tour Packages</h2>

    <div class="tour-grid">

      <div class="tour-card">
        <img src="image/ny5.jpg">
        <h4>Classic New York Tour</h4>
        <p>5 Nights / 6 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/ny6.jpg">
        <h4>Luxury NYC Experience</h4>
        <p>6 Nights / 7 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/ny2.jpg">
        <h4>Family New York Trip</h4>
        <p>4 Nights / 5 Days</p>
      </div>

    </div>
  </div>

  <!-- EXTRA TOURS -->
  <div class="tour-section">
    <h2>Nearby Attractions</h2>

    <div class="tour-grid">

      <div class="tour-card">
        <img src="image/ny7.jpg">
        <h4>Niagara Falls Tour</h4>
      </div>

      <div class="tour-card">
        <img src="image/ny8.jpg">
        <h4>Washington DC Trip</h4>
      </div>

      <div class="tour-card">
        <img src="image/ny9.jpg">
        <h4>Boston City Tour</h4>
      </div>

      <div class="tour-card">
        <img src="image/ny10.jpg">
        <h4>Orlando Theme Parks</h4>
      </div>

    </div>
  </div>

</div>

<!-- REVIEWS -->
<section class="customer-reviews" id="reviews">
  <h2>What Travelers Say</h2>

  <div class="reviews-container">

    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>John Smith</h3>
      <span>USA</span>
      <p>Amazing NYC experience, everything was well organized.</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Priya Sharma</h3>
      <span>India</span>
      <p>Best trip ever! Loved Times Square night lights.</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>David Lee</h3>
      <span>UK</span>
      <p>Very professional service and smooth planning.</p>
    </div>

  </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="footer-info">

    <div class="footer-contact">
      <p><i class="fa fa-location-dot"></i> C-81C, Sector 8, Noida</p>
      <p><i class="fa fa-phone"></i> +91-120-4052615</p>
      <p><i class="fa fa-envelope"></i> info@trailbliss.com</p>
    </div>

  </div>

  <div class="footer-social">
    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
  </div>

  <p class="footer-copy">© 2026 TRAILBLISS Pvt. Ltd</p>
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