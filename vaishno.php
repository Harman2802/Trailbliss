<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vaishno Devi Tour - Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
/* General Reset */
body, h1, h2, h3, h4, p, ul, li {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}
ul { list-style: none; }
a { text-decoration: none; color: inherit; }

/* Hero Section - Modern Overlay */
.hero-section {
  width: 100%;
  height: 500px;
  background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('image/vaishno.jpg') center/cover no-repeat;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: #fff;
}
.hero-section h1 {
  font-size: 46px;
  font-weight: 700;
  margin-bottom: 12px;
  letter-spacing: 1px;
}
.hero-section p {
  font-size: 20px;
  background: rgba(0,0,0,0.4);
  padding: 10px 25px;
  border-radius: 6px;
}

/* Content Section - Cards Layout */
.vaishno-content {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 40px;
  max-width: 1200px;
  margin: 50px auto;
  padding: 0 20px;
}

.vaishno-left {
  background: #fff;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.vaishno-left:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 25px rgba(0,0,0,0.12);
}
.vaishno-left h2 {
  color: #b30059;
  margin-bottom: 15px;
  font-size: 24px;
}
.vaishno-left p, .vaishno-left ul {
  color: #444;
  font-size: 15px;
  line-height: 1.7;
  margin-bottom: 20px;
}
.vaishno-left ul li {
  margin-bottom: 10px;
  padding-left: 15px;
  list-style-type: disc;
}

.vaishno-right {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 15px;
}
.vaishno-right img {
  width: 100%;
  border-radius: 10px;
  object-fit: cover;
  height: 200px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.vaishno-right img:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* Packages Section - Modern Cards with Accent */
.package-section {
  background: #fff0f6;
  padding: 60px 20px;
  text-align: center;
}
.package-section h2 {
  color: #b30059;
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 40px;
}
.package-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
  max-width: 1100px;
  margin: auto;
}
.package-card {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  border-left: 5px solid #b30059;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.package-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}
.package-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}
.package-card h4 {
  color: #b30059;
  font-size: 18px;
  margin: 15px 0 5px 0;
}
.package-card p {
  font-size: 14px;
  color: #555;
  margin-bottom: 15px;
}

/* About Section - Grid with Hover */
#about {
  padding: 60px 20px;
  max-width: 1100px;
  margin: auto;
  text-align: center;
}
#about h2 {
  color: #b30059;
  font-size: 28px;
  margin-bottom: 15px;
}
#about p {
  font-size: 15px;
  color: #444;
  line-height: 1.7;
  margin-bottom: 40px;
}
.about-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 25px;
}
.about-grid div {
  background: #fff;
  border-radius: 12px;
  padding: 20px;
  border-left: 4px solid #b30059;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.about-grid div:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.08);
}
.about-grid div h4 {
  color: #b30059;
  margin-bottom: 10px;
  font-size: 18px;
}
.about-grid div p {
  font-size: 14px;
  color: #555;
  line-height: 1.5;
}
.package-section {
  background: #fff0f6;
  padding: 60px 20px;
  text-align: center;
}

.package-section h2 {
  color: #b30059;
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 40px;
}

.package-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
  max-width: 1100px;
  margin: auto;
}

.package-card {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.package-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.12);
}

.package-card img {
  width: 100%;
  height: 180px;
  object-fit: cover; /* Ensures the image fits inside the box */
}

.package-info {
  padding: 15px 20px;
}

.package-info h4 {
  color: #b30059;
  font-size: 18px;
  margin: 10px 0 5px 0;
  font-weight: 600;
}

.package-info p {
  font-size: 14px;
  color: #555;
  margin-bottom: 12px;
}

.book-btn {
  background: #b30059;
  color: #fff;
  border: none;
  padding: 8px 15px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  transition: background 0.3s ease;
}

.book-btn:hover {
  background: #e60073;
}

/* Responsive */
@media(max-width: 768px){
  .vaishno-right {
    grid-template-columns: 1fr;
  }
  .hero-section h1 {
    font-size: 34px;
  }
  .hero-section p {
    font-size: 16px;
  }
}
</style>

</head>

<body>

<!-- Header -->
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

<!-- Hero Section -->
<div class="hero-section">
  <div>
    <h1>Vaishno Devi Pilgrimage</h1>
    <p>Katra - Bhawan - Trikuta Hills - Spiritual Journey</p>
  </div>
</div>

<!-- Content Section -->
<div class="vaishno-content">
  <div class="vaishno-left">
    <h2>Overview</h2>
    <p>
      Vaishno Devi is one of the most revered Hindu pilgrimage destinations in India.
      Nestled in the Trikuta Mountains, it attracts millions of devotees every year.
      Experience spiritual vibes, scenic trekking, and breathtaking Himalayan views.
    </p>

    <h2>Itinerary</h2>
    <ul>
      <li>Day 01: Arrival at Katra – Check-in at Hotel</li>
      <li>Day 02: Trek to Vaishno Devi Bhawan – Participate in Aarti</li>
      <li>Day 03: Optional visit to Bhairavnath Temple & Holy Caves</li>
      <li>Day 04: Return trek to Katra – Departure</li>
    </ul>
  </div>

  <div class="vaishno-right">
    <img src="image/vaishno-1.jpg" alt="Vaishno Devi Trek">
    <img src="image/vaishno-2.jpg" alt="Bhawan Temple">
    <img src="image/vaishno.jpg" alt="Trikuta Hills View">
  </div>
</div>


<!-- About Vaishno Section -->
<section id="about">
  <h2>About Vaishno Devi</h2>
  <p>
    Vaishno Devi is a spiritual haven in the Trikuta Hills of Jammu & Kashmir.
    Embark on a pilgrimage trek, visit the Bhawan Temple, and enjoy the serene Himalayan landscapes.
  </p>

  <div class="about-grid">
    <div>
      <h4>Bhawan Temple</h4>
      <p>Visit the sacred shrine and seek blessings at the holy Bhawan Temple.</p>
    </div>

    <div>
      <h4>Trekking Routes</h4>
      <p>Trek from Katra to Vaishno Devi Bhawan through scenic trails.</p>
    </div>

    <div>
      <h4>Spiritual Experience</h4>
      <p>Participate in Aarti, rituals, and experience divine energy.</p>
    </div>

    <div>
      <h4>Nearby Attractions</h4>
      <p>Explore Bhairavnath Temple, holy caves, and local markets at Katra.</p>
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

