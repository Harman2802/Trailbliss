<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ooty Tours - Trailbliss</title>

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
  <h1 class="main-title">Ooty Hill Station Tours</h1>
  <p class="route">Ooty - Coonoor - Mudumalai - Botanical Gardens</p>

  <!-- IMAGE GALLERY -->
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/ooty-main.jpeg" alt="Ooty">
    </div>
    <div class="gallery-right">
      <img src="image/ooty-1.jpg" alt="Ooty Lake">
      <img src="image/ooty-2.jpg" alt="Nilgiri Mountain Railway">
      <img src="image/ooty-3.jpg" alt="Botanical Gardens">
      <img src="image/ooty-4.jpg" alt="Doddabetta Peak">
    </div>
  </div>

  <!-- CONTENT SECTION -->
  <div class="content-area">

    <!-- LEFT CONTENT -->
    <div class="left-content">
      <div class="section-box">
        <h2>Overview</h2>
        <p>
          Ooty, known as the Queen of Nilgiris, is famous for its tea plantations, rolling hills, and serene lakes.
          Ideal for nature lovers and honeymooners. Enjoy scenic train rides, trekking, and refreshing walks in gardens.
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival in Ooty – Check-in & local sightseeing</li>
          <li>Day 02: Ooty Lake boating & Botanical Gardens visit</li>
          <li>Day 03: Nilgiri Mountain Railway ride & Doddabetta Peak</li>
          <li>Day 04: Excursion to Coonoor – Tea Garden tour</li>
          <li>Day 05: Departure from Ooty</li>
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

  <!-- POPULAR HILL TOURS -->
  <div class="tour-section">
    <h2>Popular Ooty Packages</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/ooty-1.jpg" alt="Ooty Tour">
        <h4>Ooty Weekend Escape</h4>
        <p>2 Nights / 3 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/ooty-2.jpg" alt="Coonoor Tour">
        <h4>Ooty & Coonoor Explorer</h4>
        <p>3 Nights / 4 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/ooty-3.jpg" alt="Nilgiri Tour">
        <h4>Ooty & Nilgiri Retreat</h4>
        <p>4 Nights / 5 Days</p>
      </div>
    </div>
  </div>

  <!-- MORE DESTINATIONS -->
  <div class="tour-section">
    <h2>More Cool Destinations</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/manali.jpg" alt="Manali Tour">
        <h4>Manali Getaway Tour</h4>
      </div>

      <div class="tour-card">
        <img src="image/shimla.jpg" alt="Shimla Tour">
        <h4>Shimla Weekend Trip</h4>
      </div>

      <div class="tour-card">
        <img src="image/khandala.jpg" alt="Khandala">
        <h4>Lonavala & Khandala</h4>
      </div>

      <div class="tour-card">
        <img src="image/nainital.jpg" alt="Nainital">
        <h4>Nainital Hill Station</h4>
      </div>
    </div>
  </div>
</div>

<!-- REVIEWS -->
<section class="customer-reviews">
  <h2>What Our Travelers Say</h2>
  <div class="reviews-container">
    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 1">
      <h3>Rohit Sharma</h3>
      <span>India</span>
      <p>Ooty is mesmerizing! Loved the gardens and scenic train rides.</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 2">
      <h3>Emily Clark</h3>
      <span>USA</span>
      <p>A perfect hill station escape with peace and nature.</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 3">
      <h3>Sarah Johnson</h3>
      <span>UK</span>
      <p>Wonderful experience exploring Ooty and Coonoor.</p>
    </div>
  </div>
</section>

<!-- About Hill Station Section -->
<section id="about">
  <h2>About Ooty Tours</h2>
  <p>
    Ooty, nestled in the Nilgiri Hills, is famous for its tea estates, botanical gardens, lakes, and scenic viewpoints. 
    Enjoy a mix of adventure, relaxation, and sightseeing.
  </p>

  <div class="about-grid">
    <div>
      <h4>Ooty Lake Boating</h4>
      <p>Relax and enjoy boating in the scenic Ooty Lake surrounded by hills.</p>
    </div>

    <div>
      <h4>Nilgiri Mountain Railway</h4>
      <p>Ride the UNESCO World Heritage toy train for breathtaking views.</p>
    </div>

    <div>
      <h4>Botanical Gardens</h4>
      <p>Explore lush gardens with exotic plants, flowers, and trees.</p>
    </div>

    <div>
      <h4>Hilltop Viewpoints</h4>
      <p>Visit Doddabetta Peak & nearby viewpoints for panoramic views of Nilgiris.</p>
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


