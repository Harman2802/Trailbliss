<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mussoorie Hills Tours - Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    /* Simple About Section CSS */
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
  <h1 class="main-title">Mussoorie Hills Tours</h1>
  <p class="route">Mussoorie - Dehradun - Dhanaulti - Kempty Falls</p>

  <!-- IMAGE GALLERY -->
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/mussoorie-7.jpg" alt="Mussoorie">
    </div>
    <div class="gallery-right">
      <img src="image/mussoorie-1.jpg" alt="Mussoorie Sightseeing">
      <img src="image/mussoorie-2.jpg" alt="Camel’s Back Road">
      <img src="image/mussoorie-5.jpg" alt="Kempty Falls">
      <img src="image/mussoorie-4.jpg" alt="Lal Tibba">
    </div>
  </div>

  <!-- CONTENT SECTION -->
  <div class="content-area">

    <!-- LEFT CONTENT -->
    <div class="left-content">
      <div class="section-box">
        <h2>Overview</h2>
        <p>
          Mussoorie, the Queen of Hills, offers panoramic mountain views, colonial charm, 
          scenic walks, and adventure activities. Ideal for families, honeymooners, and nature lovers.
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival in Dehradun – Transfer to Mussoorie</li>
          <li>Day 02: Mussoorie Local Sightseeing – Camel’s Back Road & Mall Road</li>
          <li>Day 03: Kempty Falls & Lal Tibba viewpoint</li>
          <li>Day 04: Excursion to Dhanaulti – Eco Park & Adventure Activities</li>
          <li>Day 05: Return to Dehradun – Departure</li>
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
    <h2>Popular Mussoorie Packages</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/mussoorie-1.jpg" alt="Mussoorie Tour">
        <h4>Mussoorie Weekend Retreat</h4>
        <p>3 Nights / 4 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/mussoorie-2.jpg" alt="Dhanaulti Tour">
        <h4>Mussoorie & Dhanaulti Explorer</h4>
        <p>4 Nights / 5 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/mussoorie-6.jpg" alt="Kempty Falls Tour">
        <h4>Mussoorie & Kempty Falls Tour</h4>
        <p>2 Nights / 3 Days</p>
      </div>
    </div>
  </div>

  <!-- MORE TOURS -->
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
        <img src="image/oooty.jpg" alt="Ooty">
        <h4>Ooty & Coonoor</h4>
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
      <h3>Neha Kaur</h3>
      <span>India</span>
      <p>The views were breathtaking! Loved the stay and arrangements.</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 2">
      <h3>Michael Brown</h3>
      <span>USA</span>
      <p>A peaceful escape to the mountains. Great hospitality!</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 3">
      <h3>Ankit Sharma</h3>
      <span>UK</span>
      <p>Adventure-filled and scenic — perfect for vacations!</p>
    </div>
  </div>
</section>

<!-- About Hill Station Section -->
<section id="about">
  <h2>About Mussoorie Tours</h2>
  <p>
    Mussoorie, surrounded by lush forests and hills, offers scenic walks, adventure sports, 
    viewpoints, waterfalls, and a tranquil mountain retreat.
  </p>

  <div class="about-grid">
    <div>
      <h4>Scenic Walks</h4>
      <p>Enjoy strolling along Mall Road and Camel’s Back Road.</p>
    </div>

    <div>
      <h4>Waterfalls & Adventure</h4>
      <p>Visit Kempty Falls and try zip-lining, rappelling, and trekking.</p>
    </div>

    <div>
      <h4>Himalayan Views</h4>
      <p>Catch panoramic views of Doon Valley and surrounding peaks.</p>
    </div>

    <div>
      <h4>Relaxing Getaway</h4>
      <p>Peaceful resorts and hill stays for a rejuvenating break.</p>
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

