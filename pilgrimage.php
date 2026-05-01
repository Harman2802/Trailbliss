<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilgrimage Tours of India - Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
  /* ABOUT SECTION */
#about {
  background: #f8f8f8;
  padding: 60px 0;
  text-align: center;
}

#about h2 {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 20px;
  color: #333;
}

#about p {
  max-width: 850px;
  margin: 0 auto 40px;
  font-size: 15px;
  line-height: 1.7;
  color: #555;
}

/* Grid for About Features */
.about-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 25px;
  max-width: 1100px;
  margin: auto;
  padding: 0 20px;
}

.about-grid div {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  border: 1px solid #eee;
  transition: 0.3s ease;
}

.about-grid div h4 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
  color: #222;
}

.about-grid div p {
  font-size: 14px;
  color: #666;
  line-height: 1.5;
}

/* Hover Effect */
.about-grid div:hover {
  transform: translateY(-5px);
  border-color: #d4b300; /* Golden shade */
  box-shadow: 0 5px 15px rgba(0,0,0,0.07);
}

/* Responsive */
@media(max-width: 900px) {
  .about-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media(max-width: 600px) {
  .about-grid {
    grid-template-columns: 1fr;
  }
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
  <h1 class="main-title">Indian Pilgrimage Tours</h1>
  <p class="route">Varanasi - Ayodhya - Amritsar - Rameshwaram - Puri - Shirdi</p>

  <!-- IMAGE GALLERY -->
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/pilgrim-main.jpg" alt="Pilgrimage India">
    </div>
    <div class="gallery-right">
      <img src="image/varanasi.jpeg" alt="Varanasi">
      <img src="image/amritsar.webp" alt="Golden Temple Amritsar">
      <img src="image/rameshwaram.jpg" alt="Rameshwaram">
      <img src="image/jagannath-puri.jpg" alt="Jagannath Puri">
    </div>
  </div>

  <!-- CONTENT SECTION -->
  <div class="content-area">

    <!-- LEFT CONTENT -->
    <div class="left-content">
      <div class="section-box">
        <h2>Overview</h2>
        <p>
          Experience India’s most sacred pilgrimage sites covering spiritual cities, ancient temples,
          holy ghats, and revered shrines. From the divine Ganga Aarti in Varanasi
          to sacred Sikh worship at Golden Temple, and Jyotirlinga journeys in South India.
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival Delhi – Travel to Varanasi</li>
          <li>Day 02: Varanasi Ghats + Ganga Aarti</li>
          <li>Day 03: Varanasi – Ayodhya – Local Visit</li>
          <li>Day 04: Fly to Amritsar – Golden Temple</li>
          <li>Day 05: Amritsar – Rameshwaram Travel (Flight)</li>
          <li>Day 06: Rameshwaram Temple + Ramanathaswamy Darshan</li>
          <li>Day 07: Fly to Bhubaneswar – Visit Jagannath Puri</li>
          <li>Day 08: Departure</li>
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

  <!-- About Section -->
  <section id="about">
    <h2>About Pilgrimage Tours of India</h2>
    <p>
      India is home to some of the world’s most spiritually significant pilgrimage destinations.
      Journey through sacred temples, divine rivers, and holy pilgrimage circuits
      filled with devotion and peace.
    </p>

    <div class="about-grid">
      <div>
        <h4>Holy Temples</h4>
        <p>Visit India’s UNESCO temples, ancient shrines & Jyotirlinga holy places.</p>
      </div>
      <div>
        <h4>Spiritual Experiences</h4>
        <p>Attend divine Aartis, rituals, langars & sacred festivities.</p>
      </div>
      <div>
        <h4>Sacred Cities</h4>
        <p>Discover Hindu, Sikh, Jain & Buddhist pilgrimage centers of India.</p>
      </div>
      <div>
        <h4>Faith & Culture</h4>
        <p>Witness traditional customs, holy chants & religious harmony.</p>
      </div>
    </div>
  </section>

  <!-- POPULAR TOURS -->
  <div class="tour-section">
    <h2>Popular Pilgrimage Packages</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/varanasi.jpeg" alt="Varanasi">
        <h4>Ganga Aarti Varanasi Tour</h4>
        <p>4 Nights / 5 Days</p>
      </div>
      <div class="tour-card">
        <img src="image/amritsar.webp" alt="Golden Temple">
        <h4>Amritsar Golden Temple Tour</h4>
        <p>3 Nights / 4 Days</p>
      </div>
      <div class="tour-card">
        <img src="image/rameshwaram.jpg" alt="Rameshwaram">
        <h4>Rameshwaram Darshan</h4>
        <p>4 Nights / 5 Days</p>
      </div>
    </div>
  </div>

  <!-- EXTENSION TOURS -->
  <div class="tour-section">
    <h2>More Pilgrimage Tours</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/shirdi.jpg" alt="Shirdi">
        <h4>Shirdi Sai Baba Tour</h4>
      </div>
      <div class="tour-card">
        <img src="image/jagannath-puri.jpg" alt="Puri">
        <h4>Jagannath Puri Yatra</h4>
      </div>
      <div class="tour-card">
        <img src="image/vaishno.jpg" alt="Vaishno Devi">
        <h4>Vaishno Devi Darshan</h4>
      </div>
      <div class="tour-card">
        <img src="image/mathura.jpg" alt="Mathura Vrindavan">
        <h4>Mathura – Vrindavan Tour</h4>
      </div>
    </div>
  </div>
</div>

<!-- REVIEWS -->
<section class="customer-reviews">
  <h2>What Our Travelers Say</h2>
  <div class="reviews-container">
    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler">
      <h3>Anjali Kapoor</h3>
      <span>India</span>
      <p>Very peaceful and devotional trip. Well-organized arrangements!</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler">
      <h3>Michael Paul</h3>
      <span>Australia</span>
      <p>Fabulous journey through sacred temples. Highly recommended!</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler">
      <h3>Asha Sharma</h3>
      <span>USA</span>
      <p>Memorable spiritual experience with great service!</p>
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
