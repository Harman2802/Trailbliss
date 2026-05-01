<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailbliss - Uttarakhand Tour Packages</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    /* Wildlife (Rajasthan) Section */
.wildlife-section {
  padding: 60px 20px;
  background: #fff;
}

.wildlife-container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}

.wildlife-text {
  flex: 1;
}

.wildlife-text h1 {
  font-size: 40px;
  margin-bottom: 20px;
  font-weight: 700;
  line-height: 1.2;
}

.wildlife-text p {
  font-size: 17px;
  line-height: 1.6;
  color: #444;
}


/* IMAGE */
.wildlife-image {
  flex: 1;
  display: flex;
  justify-content: center;
}

.wildlife-image img {
  width: 100%;
  max-width: 500px;
  height: auto;
  border-radius: 10px;
  object-fit: cover;
  object-position: center;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}


/* Responsive: Mobile View */
@media (max-width: 900px) {
  .wildlife-container {
    flex-direction: column;
    text-align: center;
  }

  .wildlife-image img {
    max-width: 90%;
  }

  .wildlife-text h1 {
    font-size: 32px;
  }
}

</style>

</head>


<body>

<!-- ========== NAVBAR ========== -->
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

<!-- ========== HERO SECTION ========== -->
<div class="hero" style="background-image:url('image/utramain.jpg');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <div class="small-title">Welcome to Devbhumi</div>
    <div class="big-title">Uttarakhand</div>
  </div>
</div>

<!-- ========== INTRO SECTION ========== -->
<section class="wildlife-section">
  <div class="wildlife-container">
    
    <div class="wildlife-text">
      <h1>Uttarakhand Tour <br> Packages</h1>
      <p>
        Uttarakhand, also known as Devbhumi (Land of Gods), is blessed with majestic mountains, sacred rivers, spiritual shrines, dense forests, wildlife sanctuaries, and breathtaking hill stations. From snow-covered Auli to peaceful Nainital, from the divine Char Dham Yatra to the enchanting Valley of Flowers — Uttarakhand offers something for every traveler.
        <br><br>
        Adventure seekers can enjoy river rafting in Rishikesh, trekking in Kedarkantha, and skiing in Auli. Nature lovers admire Jim Corbett’s wildlife richness, serene lakes, pine forests, and mystical landscapes. Pilgrims experience divinity at Kedarnath, Badrinath, Gangotri, and Yamunotri.
        <br><br>
        Explore Uttarakhand through our customizable packages, curated with expert guides, top hotels, and the best transportation options for a seamless travel experience.
      </p>
    </div>

    <div class="wildlife-image">
      <img src="image/uttarakhand.jpg" alt="Uttarakhand Tour">
    </div>

  </div>
</section>

<!-- ========== BEST SELLING PACKAGES ========== -->
<section class="section">
  <h2>Best Selling Uttarakhand Packages</h2>

  <div class="card-grid">

    <div class="card">
      <img src="image/rishikesh1.jpg">
      <div class="card-content">
        <a href="#"> 5 Nights & 6 Days
          <h4>Rishikesh Haridwar Tour</h4>
          <p>Explore Ganga Aarti, Ashrams & River Rafting.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/auli1.jpg">
      <div class="card-content">
        <a href="#"> 4 Nights & 5 Days
          <h4>Auli Skiing Tour</h4>
          <p>Ski, snow adventure & Himalayan views.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/nainital2.jpg">
      <div class="card-content">
        <a href="#"> 3 Nights & 4 Days
          <h4>Nainital Lake Tour</h4>
          <p>Enjoy boating, viewpoints & nature walks.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/tiger4.jpg">
      <div class="card-content">
        <a href="#"> 2 Nights & 3 Days
          <h4>Jim Corbett Wildlife Safari</h4>
          <p>Spot tigers, elephants & rich wildlife.</p>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- ========== BEST TIME SECTION ========== -->
<section class="best-time-section">
  <div class="bt-container">
    
    <div class="bt-left">
      <h2>Best Time to Visit <br> Uttarakhand</h2>

      <div class="bt-list">
        <div class="bt-item">
          <span>01</span>
          <h3>Summer (March - June)</h3>
          <p>Perfect for hill stations like Nainital, Mussoorie, and Auli.</p>
        </div>

        <div class="bt-item">
          <span>02</span>
          <h3>Monsoon (July - September)</h3>
          <p>Ideal for Valley of Flowers and nature lovers.</p>
        </div>

        <div class="bt-item">
          <span>03</span>
          <h3>Winter (Oct - Feb)</h3>
          <p>Best for snow trips, Auli skiing & honeymoon travel.</p>
        </div>
      </div>

      <div class="bt-text">
        <p>
          Uttarakhand is pleasant year-round. Summer brings cool hill escapes, winter welcomes snowfall, and monsoon blooms the valley landscapes.
        </p>
        <p>
          Whether spiritual, adventurous, or relaxing—Uttarakhand offers endless beauty.
        </p>
      </div>
    </div>

    <div class="bt-right">
      <img src="image/uttarakhand2.jpg" alt="Uttarakhand Scenic View">
    </div>

  </div>
</section>

<!-- ========== FEEDBACK SECTION ========== -->
<section class="feedback-section" id="feedback-section">
  <h2>Guest Satisfaction <span>is Our Priority</span></h2>
  <p class="subtitle">Valuable Feedback Matters to Us</p>

  <div class="tab-buttons">
    <button class="tab-btn active" data-tab="kedarnath">Kedarnath Visit</button>
    <button class="tab-btn" data-tab="nainital">Nainital Trip</button>
    <button class="tab-btn" data-tab="corbett">Corbett Safari</button>
    <button class="tab-btn" data-tab="all">View All</button>
  </div>

  <!-- Kedarnath -->
  <div class="feedback-card active" id="kedarnath">
    <div class="feedback-images">
      <img src="image/kedarnath1.jpg">
      <img src="image/kedarnath2.jpg">
    </div>
    <div class="feedback-text">
      <h4>A Divine Experience!</h4>
      <p>
        Our Kedarnath Yatra was beautifully organized. Stay, transport, VIP darshan — everything was smooth and comfortable.
      </p>
      <p class="reviewer">– Aman Verma</p>
      <p class="review-date">May 2024</p>
    </div>
  </div>

  <!-- Nainital -->
  <div class="feedback-card" id="nainital">
    <div class="feedback-images">
      <img src="image/nainital2.jpg">
      <img src="image/naini-lake.jpg">
    </div>
    <div class="feedback-text">
      <h4>Relaxing Hill Escape</h4>
      <p>
        Loved the scenic views, boating experience, and peaceful itinerary arranged by Trailbliss.
      </p>
      <p class="reviewer">– Pooja Sharma</p>
      <p class="review-date">August 2023</p>
    </div>
  </div>

  <!-- Corbett -->
  <div class="feedback-card" id="corbett">
    <div class="feedback-images">
      <img src="image/tiger1.jpg">
      <img src="image/tiger3.jpg">
    </div>
    <div class="feedback-text">
      <h4>Thrilling Wildlife Safari</h4>
      <p>
        Excellent jungle safari experience! Saw elephants, deer, and even a tiger. Wonderful hospitality.
      </p>
      <p class="reviewer">– Rohan Gupta</p>
      <p class="review-date">December 2023</p>
    </div>
  </div>

  <!-- All Feedback -->
  <div class="feedback-card" id="all">
    <div class="feedback-text center">
      <h4>See All Guest Stories</h4>
      <p>
        Explore authentic reviews and memorable travel stories from our Uttarakhand travelers.
      </p>
      <button class="explore-btn">Read All Reviews</button>
    </div>
  </div>
</section>

<!-- ========== ABOUT SECTION ========== -->
<section class="about-section" id="about">
  <h2>About <span>Uttarakhand Tourism</span></h2>
  <div class="about-content">
    <div class="about-text">
      <p class="intro">
        Uttarakhand is home to divine temples, UNESCO sites, Himalayan peaks, wildlife reserves, lakes, and serene hill towns. Our tour packages cover Char Dham Yatra, trekking, wildlife tours, honeymoon packages, spiritual tours, and adventure activities. Enjoy premium hotel stays, comfortable transportation, and expert tour assistance throughout your trip.
      </p>
    </div>
  </div>
</section>

<!-- ========== FAQ SECTION ========== -->
<section class="faq-section">
  <h2>Frequently <span> Asked Questions</span></h2>
  <p class="subtitle">Find answers to the most common Uttarakhand travel queries</p>

  <div class="faq-container">

    <div class="faq-item">
      <button class="faq-question">1. What is the best time to visit Uttarakhand?</button>
      <div class="faq-answer">
        <p>March–June and October–February are ideal for most destinations.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">2. Are customized Uttarakhand packages available?</button>
      <div class="faq-answer">
        <p>Yes, all packages can be customized as per your dates, hotels & itinerary.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">3. Is Char Dham Yatra included?</button>
      <div class="faq-answer">
        <p>Yes, Kedarnath, Badrinath, Gangotri, and Yamunotri packages are available.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">4. Do you provide local guides?</button>
      <div class="faq-answer">
        <p>Yes, certified guides are available for treks, temples & wildlife tours.</p>
      </div>
    </div>

  </div>
</section>

<!-- ========== FOOTER SECTION ========== -->
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
