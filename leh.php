<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leh-Ladakh Tour - Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    /* About Leh-Ladakh Section */
#about {
  padding: 50px 20px;
  text-align: center;
  background: #f9f9f9;
}

#about h2 {
  font-size: 32px;
  color: #0066cc;
  margin-bottom: 20px;
}

#about p {
  font-size: 16px;
  max-width: 800px;
  margin: 0 auto 40px auto;
  line-height: 1.6;
  color: #333;
}

/* Grid layout */
.about-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 30px;
  max-width: 1000px;
  margin: 0 auto;
  text-align: left;
}

/* Individual Item */
.about-grid div {
  background: #fff;
  padding: 25px 15px;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.about-grid div:hover {
  transform: translateY(-5px);
}

/* Item Heading */
.about-grid div h4 {
  font-size: 20px;
  color: #0066cc;
  margin-bottom: 10px;
}

/* Item Text */
.about-grid div p {
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

<!-- MAIN TITLE -->
<div class="container">
  <h1 class="main-title">Leh-Ladakh Adventure Tour</h1>
  <p class="route">Leh - Nubra Valley - Pangong Lake - Magnetic Hill</p>

  <!-- IMAGE GALLERY -->
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/leh-ladakh-main.jpg" alt="Leh-Ladakh Main">
    </div>
    <div class="gallery-right">
      <img src="image/leh-palace.jpeg" alt="Leh Palace">
      <img src="image/nubra-valley.jpg" alt="Nubra Valley">
      <img src="image/pangong-lake.jpg" alt="Pangong Lake">
      <img src="image/magnetic-hill.jpg" alt="Magnetic Hill">
    </div>
  </div>

  <!-- CONTENT SECTION -->
  <div class="content-area">

    <!-- LEFT CONTENT -->
    <div class="left-content">
      <div class="section-box">
        <h2>Overview</h2>
        <p>
          Explore the majestic landscapes of Leh-Ladakh, including high mountains, pristine lakes, and charming monasteries.
          An unforgettable adventure for nature lovers and thrill-seekers alike!
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival at Leh - Local Sightseeing</li>
          <li>Day 02: Leh to Nubra Valley via Khardung La</li>
          <li>Day 03: Explore Nubra Valley - Diskit Monastery & Sand Dunes</li>
          <li>Day 04: Nubra Valley to Pangong Lake</li>
          <li>Day 05: Pangong Lake - Leh Sightseeing</li>
          <li>Day 06: Leh to Magnetic Hill - Shanti Stupa</li>
          <li>Day 07: Departure from Leh</li>
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

  <!-- About Leh-Ladakh Section -->
<section id="about">
  <h2>About Leh-Ladakh</h2>
  <p>
    Leh-Ladakh is a land of mesmerizing landscapes, high mountains, pristine lakes, 
    and unique monasteries. From serene valleys to adventurous mountain passes, 
    it offers an unforgettable experience for nature lovers and adventure seekers alike.
  </p>

  <div class="about-grid">
    <div>
      <h4>Majestic Landscapes</h4>
      <p>Experience breathtaking mountains, valleys, and crystal-clear lakes like Pangong and Tso Moriri.</p>
    </div>

    <div>
      <h4>Adventure & Activities</h4>
      <p>Indulge in trekking, biking, river rafting, and exploring offbeat routes across the Himalayas.</p>
    </div>

    <div>
      <h4>Cultural Heritage</h4>
      <p>Visit ancient monasteries, local villages, and experience the unique traditions of Ladakhi culture.</p>
    </div>

    <div>
      <h4>Road Trips & Scenic Routes</h4>
      <p>Drive through high mountain passes like Khardung La and enjoy the thrill of unforgettable road journeys.</p>
    </div>
  </div>
</section>

  <!-- POPULAR TOURS -->
  <div class="tour-section">
    <h2>Popular Leh-Ladakh Packages</h2>

    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/leh-pack1.jpg" alt="Leh-Ladakh Adventure">
        <h4>Leh-Ladakh Road Trip</h4>
        <p>6 Nights / 7 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/leh-pack2.jpg" alt="Leh-Ladakh Highlights">
        <h4>Leh-Ladakh Highlights</h4>
        <p>5 Nights / 6 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/leh-pack3.jpg" alt="Pangong & Nubra Tour">
        <h4>Pangong & Nubra Valley Tour</h4>
        <p>4 Nights / 5 Days</p>
      </div>
    </div>
  </div>

  <!-- EXTENSION TOURS -->
  <div class="tour-section">
    <h2>More Himalayan Tours</h2>

    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/spiti.jpg" alt="Spiti Valley Tour">
        <h4>Spiti Valley Adventure</h4>
      </div>

      <div class="tour-card">
        <img src="image/manali.jpg" alt="Manali Tour">
        <h4>Manali & Solang Valley</h4>
      </div>

      <div class="tour-card">
        <img src="image/lahaul.jpg" alt="Lahaul Tour">
        <h4>Lahaul Valley Tour</h4>
      </div>

      <div class="tour-card">
        <img src="image/tso-moriri.jpg" alt="Tso Moriri Lake">
        <h4>Tso Moriri Lake Tour</h4>
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
      <h3>Sara Khan</h3>
      <span>India</span>
      <p>
        Breath-taking landscapes and amazing arrangements! Pangong Lake was surreal.
      </p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 2">
      <h3>Rohit Mehra</h3>
      <span>USA</span>
      <p>
        Well organized and comfortable journey. Truly an adventure of a lifetime!
      </p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 3">
      <h3>Priya Sharma</h3>
      <span>UK</span>
      <p>
        Excellent planning and guidance. Leh-Ladakh tour exceeded expectations!
      </p>
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
