<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Goa Beach Tour - Trailbliss</title>

  <!-- CSS Files -->
  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
  /* About Goa Section */
.about-goa {
  padding: 50px 20px;
  background: #f9f9f9;
  text-align: center;
}

.about-goa h2 {
  font-size: 32px;
  color: #0066cc;
  margin-bottom: 15px;
}

.about-goa p {
  font-size: 16px;
  color: #333;
  max-width: 800px;
  margin: 0 auto 40px auto;
  line-height: 1.6;
}

/* Grid Layout */
.about-goa-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 30px;
  max-width: 1000px;
  margin: 0 auto;
  text-align: center;
}

/* Individual Item */
.about-item {
  background: #fff;
  padding: 25px 15px;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.about-item:hover {
  transform: translateY(-5px);
}

/* Icon */
.about-item i {
  font-size: 40px;
  color: #0066cc;
  margin-bottom: 15px;
}

/* Title */
.about-item h4 {
  font-size: 20px;
  margin-bottom: 10px;
  color: #0066cc;
}

/* Text */
.about-item p {
  font-size: 15px;
  color: #555;
  line-height: 1.5;
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

  <!-- Main Section -->
  <main class="container">

    <!-- Title & Route -->
    <section class="main-title-section">
      <h1 class="main-title" style="color:#0066cc;">Goa Beach Tour</h1>
      <p class="route">North Goa – South Goa – Water Sports – Nightlife</p>
    </section>

    <!-- Image Gallery -->
    <section class="gallery">
      <div class="gallery-left">
        <img src="image/goa.jpg" alt="Goa Beach Main">
      </div>
      <div class="gallery-right">
        <img src="image/goa-baga.jpg" alt="Baga Beach">
        <img src="image/goa-calangute.jpg" alt="Calangute Beach">
        <img src="image/goa-church.jpg" alt="Goa Church">
        <img src="image/goa-nightlife.jpg" alt="Goa Nightlife">
      </div>
    </section>

    <!-- Content & Query Form -->
    <section class="content-area">

      <!-- Left Content -->
      <div class="left-content">
        <div class="section-box">
          <h2>Overview</h2>
          <p>
            Goa is India’s favorite beach paradise known for golden sands, vibrant nightlife,
            thrilling water sports, churches and delightful seafood. A perfect getaway for leisure, fun and adventure!
          </p>
        </div>

        <div class="section-box">
          <h2>Itinerary</h2>
          <ul class="itinerary">
            <li>Day 01: Arrival at Goa – Leisure at Beach</li>
            <li>Day 02: North Goa – Baga, Calangute & Fort Aguada</li>
            <li>Day 03: South Goa – Miramar & Basilica of Bom Jesus</li>
            <li>Day 04: Water Sports & Cruise Dinner</li>
            <li>Day 05: Shopping & Departure</li>
          </ul>
        </div>
      </div>

      <!-- Right Query Form -->
      <div class="right-form">
        <h3 style="color:#0066cc;">Quick Query</h3>
        <form action="quick-query.php" method="POST">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="email" name="email" placeholder="Your Email" required>
          <input type="text" name="phone" placeholder="Your Phone" required>
          <input type="text" name="country" placeholder="Country" required>
          <textarea name="message" placeholder="Your Message" required></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>

    </section>
     <!-- About Goa Section -->
    <section class="about-goa" id="about">
      <h2>About Goa Beaches</h2>
      <p>
        Goa is famous worldwide for its breathtaking beaches, golden coastline,
        thrilling adventure sports and unforgettable nightlife. From peaceful
        shores in South Goa to party hotspots in North Goa — every corner is a
        blend of fun, nature and culture.
      </p>

      <div class="about-goa-grid">
        <div class="about-item">
          <i class="fa-solid fa-umbrella-beach"></i>
          <h4>Beautiful Beaches</h4>
          <p>Baga, Calangute, Anjuna & Colva are among the most stunning beaches perfect for relaxation and sunsets.</p>
        </div>
        <div class="about-item">
          <i class="fa-solid fa-person-swimming"></i>
          <h4>Adventure & Water Sports</h4>
          <p>Jet ski, parasailing, banana rides, scuba diving and more thrill-filled activities await you!</p>
        </div>
        <div class="about-item">
          <i class="fa-solid fa-champagne-glasses"></i>
          <h4>Nightlife & Parties</h4>
          <p>Goa offers electrifying nightlife with beach clubs, casinos, music festivals and cruises.</p>
        </div>
        <div class="about-item">
          <i class="fa-solid fa-church"></i>
          <h4>Heritage & Culture</h4>
          <p>Explore ancient churches, Portuguese architecture, markets and local Goan seafood flavors.</p>
        </div>
      </div>
    </section>

    <!-- Popular Goa Packages -->
    <section class="tour-section">
      <h2>Popular Goa Packages</h2>
      <div class="tour-grid">
        <div class="tour-card">
          <img src="image/goa-pack1.jpg" alt="Goa Beach Delight">
          <h4>Goa Beach Delight</h4>
          <p>4 Nights / 5 Days</p>
        </div>
        <div class="tour-card">
          <img src="image/goa-pack2.jpg" alt="Goa Honeymoon Package">
          <h4>Goa Honeymoon Package</h4>
          <p>5 Nights / 6 Days</p>
        </div>
        <div class="tour-card">
          <img src="image/goa-pack3.jpg" alt="Goa Adventure Tour">
          <h4>Goa Adventure Tour</h4>
          <p>3 Nights / 4 Days</p>
        </div>
      </div>
    </section>

    <!-- More Beach Destinations -->
<section class="tour-section">
  <h2>More Beach Destinations</h2>
  <div class="tour-grid">

    <!-- Existing Destinations -->
    <div class="tour-card">
      <img src="image/andaman.jpg" alt="Andaman Beach Tour">
      <h4>Andaman Beach Tour</h4>
    </div>
    <div class="tour-card">
      <img src="image/pondicherry.jpg" alt="Pondicherry Trip">
      <h4>Pondicherry Trip</h4>
    </div>
    <div class="tour-card">
      <img src="image/kerala.jpg" alt="Kerala Beaches & Backwaters">
      <h4>Kerala Beaches & Backwaters</h4>
    </div>

    <!-- New Destinations -->
    <div class="tour-card">
      <img src="image/goa-church.jpg" alt="North Goa Beaches">
      <h4>North Goa Beaches</h4>
    </div>
  </div>

</section>
    

   

    <!-- Customer Reviews -->
    <section class="customer-reviews" id="feedback-section">
      <h2>What Travelers Say</h2>
      <div class="reviews-container">
        <div class="review-card">
          <img src="image/user1.jpg" alt="Rohit Mehta">
          <h3>Rohit Mehta</h3>
          <span>Delhi</span>
          <p>Best trip ever! Loved the nightlife and beaches. Highly recommended!</p>
        </div>
        <div class="review-card">
          <img src="image/user1.jpg" alt="Sarah Wilson">
          <h3>Sarah Wilson</h3>
          <span>Australia</span>
          <p>Very well organized and friendly team. Amazing water sports experience!</p>
        </div>
        <div class="review-card">
          <img src="image/user1.jpg" alt="Anjali Gupta">
          <h3>Anjali Gupta</h3>
          <span>Mumbai</span>
          <p>Fantastic tour and delicious seafood! Goa is love!</p>
        </div>
      </div>
    </section>
    

  </main>

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
