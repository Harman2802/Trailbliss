<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rameshwaram Tours - Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* About Section CSS */
    #about {
      padding: 50px 20px;
      text-align: center;
      background: #f3f8ff;
    }

    #about h2 {
      font-size: 30px;
      color: #006666;
      margin-bottom: 15px;
      font-weight: 600;
    }

    #about p {
      font-size: 15px;
      max-width: 750px;
      margin: 0 auto 35px auto;
      line-height: 1.6;
      color: #444;
    }

    /* Simple Grid */
    .about-grid {
      display: grid;
      gap: 25px;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      max-width: 1000px;
      margin: auto;
    }

    .about-grid div {
      background: #ffffff;
      padding: 20px 18px;
      border-radius: 10px;
      border: 1px solid #e6e6e6;
      transition: 0.3s ease;
    }

    .about-grid div:hover {
      background: #eaf7f5;
      transform: translateY(-5px);
    }

    .about-grid div h4 {
      font-size: 18px;
      color: #007799;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .about-grid div p {
      font-size: 14px;
      color: #555;
      line-height: 1.5;
    }
    /* TOUR SECTION */
.tour-section {
  padding: 60px 20px;
  background: #f7fafc;
  text-align: center;
}

.tour-section h2 {
  font-size: 32px;
  margin-bottom: 40px;
  color: #0b3c5d;
  font-weight: 600;
}

/* GRID */
.tour-grid {
  max-width: 1100px;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 25px;
}

/* CARD */
.tour-card {
  background: #ffffff;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 8px 22px rgba(0,0,0,0.08);
  transition: all 0.35s ease;
  text-align: left;
}

.tour-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

/* IMAGE */
.tour-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  display: block;
}

/* CONTENT */
.tour-card h4 {
  font-size: 18px;
  color: #006666;
  margin: 15px 16px 5px;
  font-weight: 600;
}

.tour-card p {
  font-size: 14px;
  color: #555;
  margin: 0 16px 18px;
}

/* MOBILE */
@media (max-width: 600px) {
  .tour-section h2 {
    font-size: 26px;
  }

  .tour-card img {
    height: 180px;
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
      <li><a href="front.php">Home</a></li>
      <li><a href="front.php">Destinations</a></li>
      <li><a href="front.php">Packages</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#feedback-section">Reviews</a></li>
      <li><button id="openQuote" class="planTripBtn">Book Your Trip</button></li>
    </ul>
  </nav>
</header>

<!-- MAIN TITLE -->
<div class="container">
  <h1 class="main-title">Rameshwaram Pilgrimage Tours</h1>
  <p class="route">Chennai - Rameshwaram - Dhanushkodi - Ramanathaswamy Temple</p>

  <!-- IMAGE GALLERY -->
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/rameshwaram.jpg" alt="Rameshwaram">
    </div>
    <div class="gallery-right">
      <img src="image/rameshwaram.webp" alt="Ramanathaswamy Temple">
      <img src="image/rameshwaram-2.jpg" alt="Dhanushkodi Beach">
      <img src="image/rameshwaram-3.jpg" alt="Temple Corridor">
      <img src="image/rameshwaram-4.jpg" alt="Pamban Bridge View">
    </div>
  </div>

  <!-- POPULAR TOURS -->
   <section>
  <div class="tour-section">
    <h2>Popular Rameshwaram Packages</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/rameshwaram-1.jpg" alt="Rameshwaram Basic Tour">
        <h4>Rameshwaram Spiritual Trip</h4>
        <p>2 Nights / 3 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/rameshwaram-2.jpg" alt="Extended Tour">
        <h4>Rameshwaram & Dhanushkodi Combo</h4>
        <p>3 Nights / 4 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/rameshwaram-3.jpg" alt="Beach & Temple Tour">
        <h4>Rameshwaram Beach & Temple Experience</h4>
        <p>1 Night / 2 Days</p>
      </div>
    </div>
  </div>
</section>

  <!-- CONTENT SECTION -->
  <div class="content-area">

    <!-- LEFT CONTENT -->
    <div class="left-content">
      <div class="section-box">
        <h2>Overview</h2>
        <p>
          Rameshwaram, located in Tamil Nadu, is a sacred Hindu pilgrimage site famous for Ramanathaswamy Temple.
          Explore spiritual sites, serene beaches, and historical landmarks like Dhanushkodi and Pamban Bridge.
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival in Rameshwaram – Check-in at Hotel</li>
          <li>Day 02: Visit Ramanathaswamy Temple & Temple Corridor</li>
          <li>Day 03: Excursion to Dhanushkodi & Pamban Bridge</li>
          <li>Day 04: Explore Local Beaches & Cultural Sites</li>
          <li>Day 05: Departure</li>
        </ul>
      </div>
    </div>

    <!-- RIGHT QUERY FORM -->
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

  
  <!-- ABOUT SECTION -->
  <section id="about">
    <h2>About Rameshwaram Tours</h2>
    <p>
      Rameshwaram is a holy town in Tamil Nadu, known for its spiritual significance, pristine beaches, 
      and historical landmarks. Experience temple visits, beach walks, and a serene spiritual journey.
    </p>

    <div class="about-grid">
      <div>
        <h4>Ramanathaswamy Temple</h4>
        <p>Visit the sacred temple with its longest corridor in India.</p>
      </div>

      <div>
        <h4>Dhanushkodi Beach</h4>
        <p>Explore the ruins and scenic beauty of the famous Dhanushkodi beach.</p>
      </div>

      <div>
        <h4>Pamban Bridge</h4>
        <p>Witness the iconic Pamban Bridge connecting Rameshwaram to mainland Tamil Nadu.</p>
      </div>

      <div>
        <h4>Spiritual Experience</h4>
        <p>Participate in rituals, temple visits, and explore local traditions.</p>
      </div>
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


