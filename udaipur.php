<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Udaipur Tour Packages - Trailbliss</title>

  <!-- CSS Files -->
  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
.about-section{
  padding:50px 20px;
  background:#f9f9f9;
  text-align:center;
}
.about-section h2{
  font-size:32px;
  color:#d35400;
  margin-bottom:15px;
}
.about-section p{
  font-size:16px;
  color:#333;
  max-width:800px;
  margin:0 auto 40px auto;
  line-height:1.6;
}
.about-grid{
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
  color:#d35400;
  margin-bottom:15px;
}
.about-item h4{
  font-size:20px;
  color:#d35400;
  margin-bottom:10px;
}
.about-item p{
  font-size:15px;
  color:#555;
}
/* DESTINATION SECTION */
.destination-section {
  padding: 60px 20px;
  background: #fff8f0;
}

.destination-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  max-width: 1200px;
  margin: auto;
  flex-wrap: wrap;
}

.destination-text {
  flex: 1;
  min-width: 300px;
}

.destination-text h1 {
  font-size: 36px;
  color: #d35400;
  margin-bottom: 20px;
  font-weight: 700;
}

.destination-text p {
  font-size: 16px;
  color: #333;
  line-height: 1.7;
}

.destination-image {
  flex: 1;
  min-width: 300px;
  text-align: center;
}

.destination-image img {
  width: 100%;
  border-radius: 12px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  transition: transform 0.3s ease;
}

.destination-image img:hover {
  transform: scale(1.05);
}

/* TOUR SECTION */
.tour-section {
  padding: 60px 20px;
  background: #fdf6f1;
  text-align: center;
}

.tour-section h2 {
  font-size: 32px;
  color: #d35400;
  margin-bottom: 40px;
  font-weight: 700;
}

.tour-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  max-width: 1200px;
  margin: auto;
}

.tour-card {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.tour-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  display: block;
}

.tour-card h4 {
  font-size: 20px;
  color: #d35400;
  margin: 15px 10px 5px 10px;
}

.tour-card p {
  font-size: 14px;
  color: #555;
  margin: 0 10px 15px 10px;
}

.tour-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .destination-container {
    flex-direction: column;
    text-align: center;
  }

  .destination-text, .destination-image {
    min-width: 100%;
  }

  .tour-card img {
    height: 180px;
  }
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

<!-- HERO -->
<div class="hero" style="background-image:url('image/u1.jpg');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <div class="small-title">City of Lakes</div>
    <div class="big-title">Udaipur</div>
  </div>
</div>

<!-- INTRO -->
<section class="destination-section">
  <div class="destination-container">
    <div class="destination-text">
      <h1>Udaipur Tour Packages</h1>
      <p>
        Udaipur, the "City of Lakes", is one of Rajasthan’s most romantic destinations.
        Famous for its palaces, scenic lakes, cultural heritage, and royal charm.
        <br><br>
        Visit Lake Pichola, City Palace, Jag Mandir, and experience a boat ride
        surrounded by magnificent architecture. Udaipur is perfect for couples,
        photographers, and culture enthusiasts.
      </p>
    </div>
    <div class="destination-image">
      <img src="image/u2.jpg" alt="Udaipur City">
    </div>
  </div>
</section>

<!-- PACKAGES -->
<section class="tour-section">
  <h2>Popular Udaipur Packages</h2>
  <div class="tour-grid">
    <div class="tour-card">
      <img src="image/udaipur.jpg">
      <h4>Udaipur Royal Getaway</h4>
      <p>3 Nights / 4 Days</p>
    </div>
    <div class="tour-card">
      <img src="image/udaipur-lake.jpg">
      <h4>Udaipur Honeymoon</h4>
      <p>4 Nights / 5 Days</p>
    </div>
    <div class="tour-card">
      <img src="image/udaipur-fort.jpg">
      <h4>Rajasthan Explorer</h4>
      <p>5 Nights / 6 Days</p>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about-section" id="about">
  <h2>About Udaipur</h2>
  <p>
    Udaipur is a blend of royal grandeur, artistic palaces, serene lakes,
    and vibrant markets. Explore historic forts, enjoy traditional Rajasthani cuisine,
    and experience the charm of folk music and dances. Perfect for a cultural escape.
  </p>

  <div class="about-grid">
    <div class="about-item">
      <i class="fa-solid fa-water"></i>
      <h4>Lakes & Palaces</h4>
      <p>Lake Pichola, Fateh Sagar & City Palace.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-landmark"></i>
      <h4>Heritage Sites</h4>
      <p>Jag Mandir, Saheliyon Ki Bari & Monsoon Palace.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-utensils"></i>
      <h4>Cuisine</h4>
      <p>Traditional Rajasthani food & street delicacies.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-camera"></i>
      <h4>Photography</h4>
      <p>Perfect destination for sunset & architectural shots.</p>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="customer-reviews" id="feedback-section">
  <h2>What Travelers Say</h2>
  <div class="reviews-container">
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Amit Singh</h3>
      <span>Jaipur</span>
      <p>Udaipur is beautiful! The lake views and palaces are unforgettable.</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Priya Sharma</h3>
      <span>Delhi</span>
      <p>Romantic getaway with amazing heritage and culture. Loved every moment.</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Rohan Mehta</h3>
      <span>Mumbai</span>
      <p>The City Palace and boat rides on Lake Pichola are magical.</p>
    </div>
  </div>
</section>

<!-- FOOTER -->
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

