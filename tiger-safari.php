<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiger Safari Tours - Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* About Section */
    #about {
      background: #ffffff;
      padding: 60px 20px;
      text-align: center;
    }
    #about h2 {
      font-size: 30px;
      font-weight: 600;
      margin-bottom: 15px;
      color: #222;
    }
    #about p {
      font-size: 16px;
      color: #555;
      max-width: 900px;
      margin: 0 auto 40px;
      line-height: 1.7;
    }
    .about-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 25px;
      max-width: 1000px;
      margin: auto;
    }
    .about-grid div {
      background: #f5f5f5;
      padding: 20px 15px;
      border-radius: 8px;
      border: 1px solid #eee;
      transition: 0.3s;
    }
    .about-grid div:hover {
      background: #e9e9e9;
      transform: translateY(-3px);
    }
    .about-grid div h4 {
      font-size: 18px;
      margin-bottom: 8px;
      color: #333;
    }
    .about-grid div p {
      color: #555;
      font-size: 14px;
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
  <h1 class="main-title">Tiger Safari Tours</h1>
  <p class="route">Wildlife – Jungles – National Parks – Big Cats</p>

  <!-- IMAGE GALLERY -->
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/tiger4.jpg" alt="Tiger Safari">
    </div>
    <div class="gallery-right">
      <img src="image/tiger1.jpg" alt="Ranthambore Tiger Safari">
      <img src="image/tiger2.jpg" alt="Bandhavgarh National Park">
      <img src="image/tiger3.jpg" alt="Kanha Tiger Reserve">
      <img src="image/tiger5.jpg" alt="Pench National Park">
    </div>
  </div>

  <!-- CONTENT SECTION -->
  <div class="content-area">

    <!-- LEFT CONTENT -->
    <div class="left-content">
      <div class="section-box">
        <h2>Overview</h2>
        <p>
          Experience India’s most thrilling wildlife adventures with our Tiger Safari tours.
          Explore renowned national parks like Ranthambore, Bandhavgarh, Kanha, and Pench
          accompanied by expert naturalists and trained forest guides.
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival & Jungle Orientation</li>
          <li>Day 02: Morning & Evening Tiger Safari</li>
          <li>Day 03: Wildlife Photography & Nature Walk</li>
          <li>Day 04: Transfer to Another National Park</li>
          <li>Day 05: Final Safari & Departure</li>
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

  <!-- About Tiger Safari -->
  <section id="about">
    <h2>Why Choose Tiger Safari Tours?</h2>
    <p>
      Witness the majestic Royal Bengal Tiger in its natural habitat while exploring
      India’s most iconic wildlife reserves with comfort, safety, and expert guidance.
    </p>

    <div class="about-grid">
      <div>
        <h4>High Tiger Sightings</h4>
        <p>Carefully selected zones for maximum chances of tiger encounters.</p>
      </div>

      <div>
        <h4>Expert Naturalists</h4>
        <p>Experienced wildlife guides and forest professionals.</p>
      </div>

      <div>
        <h4>Luxury Jungle Stays</h4>
        <p>Handpicked resorts near national parks with modern amenities.</p>
      </div>

      <div>
        <h4>Photography Friendly</h4>
        <p>Ideal safaris for wildlife photography and birdwatching.</p>
      </div>
    </div>
  </section>

  <!-- POPULAR TIGER SAFARIS -->
  <div class="tour-section">
    <h2>Popular Tiger Safari Packages</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/tiger1.jpg">
        <h4>Ranthambore Tiger Safari</h4>
        <p>3 Days / 2 Nights</p>
      </div>

      <div class="tour-card">
        <img src="image/tiger6.jpg">
        <h4>Bandhavgarh Safari</h4>
        <p>4 Days / 3 Nights</p>
      </div>

      <div class="tour-card">
        <img src="image/tiger2.jpg">
        <h4>Kanha Tiger Reserve</h4>
        <p>5 Days / 4 Nights</p>
      </div>
    </div>
  </div>

  <!-- MORE WILDLIFE -->
  <div class="tour-section">
    <h2>More Wildlife Safaris</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/tiger3.jpg">
        <h4>Pench National Park</h4>
      </div>

      <div class="tour-card">
        <img src="image/tiger4.jpg">
        <h4>Kaziranga Rhino Safari</h4>
      </div>

      <div class="tour-card">
        <img src="image/tiger5.jpg">
        <h4>Corbett National Park</h4>
      </div>

      <div class="tour-card">
        <img src="image/tiger1.jpg">
        <h4>MP Wildlife Safari</h4>
      </div>
    </div>
  </div>

</div>

<!-- REVIEWS -->
<section class="customer-reviews">
  <h2>Traveler Experiences</h2>
  <div class="reviews-container">
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Amit Sharma</h3>
      <span>India</span>
      <p>Once in a lifetime experience! Saw two tigers in Bandhavgarh.</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>James Wilson</h3>
      <span>UK</span>
      <p>Very professional safari arrangements and knowledgeable guides.</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Priya Mehta</h3>
      <span>India</span>
      <p>Luxury jungle stay and amazing wildlife sightings.</p>
    </div>
  </div>
</section>

<!-- FOOTER (unchanged) -->
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
