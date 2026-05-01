<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indian Beach Tours - Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    #about {
      padding: 50px 20px;
      text-align: center;
      background: #f1faff;
    }
    #about h2 {
      font-size: 32px;
      color: #0096c7;
      margin-bottom: 20px;
    }
    #about p {
      font-size: 16px;
      max-width: 800px;
      margin: 0 auto 40px auto;
      line-height: 1.6;
      color: #333;
    }
  </style>
</head>

<body>

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

<div class="container">
  <h1 class="main-title">Indian Beach Tours</h1>
  <p class="route">Goa - Kerala - Andaman - Lakshadweep</p>

  <div class="gallery">
    <div class="gallery-left">
      <img src="image/beach-main.jpg" alt="Beach">
    </div>
    <div class="gallery-right">
      <img src="image/goa.jpg" alt="Goa Beach">
      <img src="image/kerala.jpg" alt="Kerala Backwaters">
      <img src="image/andaman.jpg" alt="Andaman Islands">
      <img src="image/lakshadweep.jpg" alt="Lakshadweep">
    </div>
  </div>

  <div class="content-area">

    <div class="left-content">
      <div class="section-box">
        <h2>Overview</h2>
        <p>
          Relax on sandy beaches, enjoy crystal clear waters, water sports, and seafood delights.
          Discover India’s top tropical beach destinations.
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival Goa – Leisure Beach Time</li>
          <li>Day 02: North Goa Sightseeing – Baga, Calangute</li>
          <li>Day 03: South Goa – Basilica & Colva Beach</li>
          <li>Day 04: Fly to Kerala – Houseboat Stay</li>
          <li>Day 05: Kerala Beach Day – Kovalam</li>
          <li>Day 06: Andaman – Radhanagar Beach</li>
          <li>Day 07: Departure</li>
        </ul>
      </div>
    </div>

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

  <section id="about">
    <h2>About Beach Tours</h2>
    <p>
      Feel the ocean breeze, golden sands, lush greenery, and water adventures. 
      Enjoy sunsets, seafood, and tropical island vibes.
    </p>

    <div class="about-grid">
      <div>
        <h4>Stunning Beaches</h4>
        <p>Explore famous beaches like Baga, Kovalam & Radhanagar.</p>
      </div>
      <div>
        <h4>Water Adventures</h4>
        <p>Experience scuba diving, jet ski rides, parasailing & more.</p>
      </div>
      <div>
        <h4>Island Escapes</h4>
        <p>Visit Andaman & Lakshadweep for marine beauty & coral reefs.</p>
      </div>
      <div>
        <h4>Relax & Rejuvenate</h4>
        <p>Health retreats, beach yoga, and houseboat stays.</p>
      </div>
    </div>
  </section>

  <div class="tour-section">
    <h2>Popular Beach Packages</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/goa.jpg" alt="Goa Tour">
        <h4>Goa Beach Holiday</h4>
        <p>4 Nights / 5 Days</p>
      </div>
      <div class="tour-card">
        <img src="image/andaman.jpg" alt="Andaman Tour">
        <h4>Andaman Islands Tour</h4>
        <p>5 Nights / 6 Days</p>
      </div>
      <div class="tour-card">
        <img src="image/kerala.jpg" alt="Kerala Tour">
        <h4>Kerala Backwater & Beach</h4>
        <p>6 Nights / 7 Days</p>
      </div>
    </div>
  </div>

  <div class="tour-section">
    <h2>More Beach Tours</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/lakshadweep.jpg" alt="Lakshadweep">
        <h4>Lakshadweep Islands</h4>
      </div>
      <div class="tour-card">
        <img src="image/goa.jpg" alt="Goa Luxury">
        <h4>Goa Luxury Escape</h4>
      </div>
      <div class="tour-card">
        <img src="image/kerala.jpg" alt="Varkala">
        <h4>Varkala Beach Tour</h4>
      </div>
      <div class="tour-card">
        <img src="image/andaman.jpg" alt="Marine Adventure">
        <h4>Island Adventure Trip</h4>
      </div>
    </div>
  </div>
</div>
<!-- TRAVELER TESTIMONIALS SECTION -->
<section id="travelers-say" class="customer-reviews">
  <h2>What Our Travelers Say</h2>

  <div class="reviews-container">
    
    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 1">
      <h3>Aarav Patel</h3>
      <span>India</span>
      <p>Mesmerizing beach views and well-organised trip! I will definitely book again with Trailbliss.</p>
      <div class="rating">
        ⭐⭐⭐⭐⭐
      </div>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 2">
      <h3>Emily Johnson</h3>
      <span>UK</span>
      <p>The beach resort, activities and hospitality were amazing. Truly a tropical paradise experience.</p>
      <div class="rating">
        ⭐⭐⭐⭐⭐
      </div>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 3">
      <h3>David Miller</h3>
      <span>USA</span>
      <p>Kayaking, scuba diving and sunsets… the best vacation ever! Great arrangements.</p>
      <div class="rating">
        ⭐⭐⭐⭐⭐
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
</div><!-- POPUP OVERLAY -->
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
