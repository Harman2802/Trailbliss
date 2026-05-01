<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andaman Beach Tour - Trailbliss</title>

  <!-- CSS Files -->
  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* About Andaman Section */
.about-goa{
  padding:50px 20px;
  background:#f9f9f9;
  text-align:center;
}
.about-goa h2{
  font-size:32px;
  color:#009688;
  margin-bottom:15px;
}
.about-goa p{
  font-size:16px;
  color:#333;
  max-width:800px;
  margin:0 auto 40px auto;
  line-height:1.6;
}
.about-goa-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:30px;
  max-width:1000px;
  margin:auto;
}
.about-item{
  background:#fff;
  padding:25px 15px;
  border-radius:10px;
  box-shadow:0 3px 10px rgba(0,0,0,0.1);
  transition:transform .3s;
}
.about-item:hover{
  transform:translateY(-5px);
}
.about-item i{
  font-size:40px;
  color:#009688;
  margin-bottom:15px;
}
.about-item h4{
  font-size:20px;
  color:#009688;
  margin-bottom:10px;
}
.about-item p{
  font-size:15px;
  color:#555;
}
</style>
</head>

<body>

<!-- NAVBAR -->
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

<main class="container">

<!-- TITLE -->
<section class="main-title-section">
  <h1 class="main-title" style="color:#009688;">Andaman Beach Tour</h1>
  <p class="route">Port Blair – Havelock – Neil Island – Scuba & Snorkeling</p>
</section>

<!-- GALLERY -->
<section class="gallery">
  <div class="gallery-left">
    <img src="image/andaman.jpg" alt="Andaman Beach">
  </div>
  <div class="gallery-right">
    <img src="image/havelock.jpg">
    <img src="image/neil-island.jpg">
    <img src="image/andaman-scuba.jpg">
    <img src="image/cellular-jail.jpg">
  </div>
</section>

<!-- CONTENT -->
<section class="content-area">

  <!-- LEFT -->
  <div class="left-content">

    <div class="section-box">
      <h2>Overview</h2>
      <p>
        Andaman & Nicobar Islands are known for crystal-clear waters,
        white sandy beaches, coral reefs and thrilling water adventures.
        A perfect tropical escape for couples, families and adventure lovers.
      </p>
    </div>

    <div class="section-box">
      <h2>Itinerary</h2>
      <ul class="itinerary">
        <li>Day 01: Arrival at Port Blair – Cellular Jail & Light Show</li>
        <li>Day 02: Port Blair – Havelock Island – Radhanagar Beach</li>
        <li>Day 03: Scuba Diving & Snorkeling</li>
        <li>Day 04: Neil Island – Natural Bridge & Beaches</li>
        <li>Day 05: Shopping & Departure</li>
      </ul>
    </div>

  </div>

  <!-- RIGHT FORM -->
  <div class="right-form">
    <h3 style="color:#009688;">Quick Query</h3>
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

<!-- ABOUT -->
<section class="about-goa" id="about">
  <h2>About Andaman Islands</h2>
  <p>
    Andaman is a paradise for beach lovers, scuba divers and honeymooners.
    Untouched beaches, turquoise waters and marine life make it one of India’s
    most exotic destinations.
  </p>

  <div class="about-goa-grid">
    <div class="about-item">
      <i class="fa-solid fa-water"></i>
      <h4>Pristine Beaches</h4>
      <p>Radhanagar, Elephant Beach & Bharatpur are world famous.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-person-swimming"></i>
      <h4>Scuba & Snorkeling</h4>
      <p>Experience coral reefs and colorful marine life.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-ship"></i>
      <h4>Island Hopping</h4>
      <p>Explore Havelock, Neil Island & Ross Island.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-landmark"></i>
      <h4>Historic Places</h4>
      <p>Cellular Jail tells India’s freedom struggle story.</p>
    </div>
  </div>
</section>

<!-- PACKAGES -->
<section class="tour-section">
  <h2>Popular Andaman Packages</h2>
  <div class="tour-grid">
    <div class="tour-card">
      <img src="image/andaman-pack1.jpg">
      <h4>Andaman Delight</h4>
      <p>4 Nights / 5 Days</p>
    </div>
    <div class="tour-card">
      <img src="image/andaman-pack2.jpg">
      <h4>Andaman Honeymoon</h4>
      <p>5 Nights / 6 Days</p>
    </div>
    <div class="tour-card">
      <img src="image/andaman-pack3.jpg">
      <h4>Adventure Andaman</h4>
      <p>6 Nights / 7 Days</p>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="customer-reviews" id="feedback-section">
  <h2>What Travelers Say</h2>
  <div class="reviews-container">
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Rahul Verma</h3>
      <span>Bangalore</span>
      <p>Scuba diving was unforgettable. Perfect honeymoon destination!</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Emily Brown</h3>
      <span>UK</span>
      <p>Beautiful beaches and well planned tour. Loved every moment.</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Neha Sharma</h3>
      <span>Delhi</span>
      <p>Clean beaches, peaceful vibes and great hospitality.</p>
    </div>
  </div>
</section>

</main>

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

<!-- POPUP (SAME AS YOUR FILE) -->
<div id="quoteOverlay" class="overlay">
  <!-- unchanged popup -->
</div>


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

