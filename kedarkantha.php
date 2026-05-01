<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kedarkantha Trek - Trailbliss</title>

  <!-- CSS Files -->
  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* About Kedarkantha */
    .about-goa{
      padding:50px 20px;
      background:#f9f9f9;
      text-align:center;
    }
    .about-goa h2{
      font-size:32px;
      color:#2e7d32;
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
      color:#2e7d32;
      margin-bottom:15px;
    }
    .about-item h4{
      font-size:20px;
      color:#2e7d32;
      margin-bottom:10px;
    }
    .about-item p{
      font-size:15px;
      color:#555;
    }
    /* TREK DETAILS SECTION */
.tour-section {
  padding: 70px 20px;
  background: linear-gradient(180deg, #f8fafc, #eef2f7);
}

.tour-section h2 {
  text-align: center;
  font-size: 34px;
  color: #1f2933;
  margin-bottom: 50px;
  font-weight: 700;
  position: relative;
}

.tour-section h2::after {
  content: "";
  width: 80px;
  height: 4px;
  background: #0ea5e9;
  display: block;
  margin: 15px auto 0;
  border-radius: 2px;
}

/* GRID */
.tour-grid {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
}

/* CARD */
.tour-card {
  background: #ffffff;
  border-radius: 14px;
  padding: 30px 25px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  border-left: 5px solid #0ea5e9;
}

.tour-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 40px rgba(0, 0, 0, 0.15);
}

/* CARD TITLE */
.tour-card h4 {
  font-size: 20px;
  color: #0f172a;
  margin-bottom: 12px;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 10px;
}

/* ICON */
.tour-card h4 i {
  color: #0ea5e9;
  font-size: 22px;
}

/* CARD TEXT */
.tour-card p {
  font-size: 15px;
  color: #475569;
  line-height: 1.7;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .tour-section {
    padding: 50px 15px;
  }

  .tour-section h2 {
    font-size: 28px;
  }

  .tour-card {
    padding: 25px 20px;
  }
}

  </style>
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">
  <div class="logo">
    <img src="image/logo.png" alt="Trailbliss">
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
  <h1 class="main-title" style="color:#2e7d32;">Kedarkantha Trek</h1>
  <p class="route">Sankri – Juda Ka Talab – Kedarkantha Summit</p>
</section>

<!-- GALLERY -->
<section class="gallery">
  <div class="gallery-left">
    <img src="image/kedarkantha-main.jpg" alt="Kedarkantha Trek">
  </div>
  <div class="gallery-right">
    <img src="image/kedarkantha-camp.jpg">
    <img src="image/juda-ka-talab.jpeg">
    <img src="image/kedarkantha-summit.jpg">
    <img src="image/kedarkantha-snow.jpg">
  </div>
</section>

<!-- CONTENT -->
<section class="content-area">

  <!-- LEFT -->
  <div class="left-content">

    <div class="section-box">
      <h2>Overview</h2>
      <p>
        Kedarkantha is one of India’s most popular winter treks, famous for its
        snow-covered trails, pine forests, and breathtaking summit views.
        Ideal for beginners and adventure lovers looking for a Himalayan snow trek.
      </p>
    </div>

    <div class="section-box">
      <h2>Itinerary</h2>
      <ul class="itinerary">
        <li>Day 01: Dehradun to Sankri (Drive)</li>
        <li>Day 02: Sankri to Juda Ka Talab</li>
        <li>Day 03: Juda Ka Talab to Kedarkantha Base Camp</li>
        <li>Day 04: Summit Trek & Return to Base Camp</li>
        <li>Day 05: Return to Sankri & Departure</li>
      </ul>
    </div>

  </div>

  <!-- RIGHT FORM -->
  <div class="right-form">
    <h3 style="color:#2e7d32;">Quick Query</h3>
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
  <h2>About Kedarkantha Trek</h2>
  <p>
    Kedarkantha Trek offers stunning snow landscapes, forest trails, and a
    360-degree Himalayan summit view, making it one of the best winter treks in India.
  </p>

  <div class="about-goa-grid">
    <div class="about-item">
      <i class="fa-solid fa-mountain"></i>
      <h4>Snow Trek</h4>
      <p>Perfect winter trek with heavy snow experience.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-tree"></i>
      <h4>Pine Forests</h4>
      <p>Walk through dense oak and pine forests.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-campground"></i>
      <h4>Camping</h4>
      <p>Stay in scenic campsites under starry skies.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-person-hiking"></i>
      <h4>Beginner Friendly</h4>
      <p>Ideal Himalayan trek for first-time trekkers.</p>
    </div>
  </div>
</section>

<!-- TREK DETAILS SECTION -->
<section class="tour-section">
  <h2>Kedarkantha Trek – Complete Details</h2>

  <div class="tour-grid">

    <div class="tour-card">
      <h4><i class="fa-solid fa-calendar-days"></i> Best Time to Visit</h4>
      <p>
        December to April is the best time for snow trekking.
        Summers (April–June) offer pleasant weather and green meadows.
      </p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-gauge-high"></i> Trek Difficulty</h4>
      <p>
        Easy to Moderate – suitable for beginners with basic fitness.
        Ideal as a first Himalayan trek.
      </p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-route"></i> Trek Distance & Altitude</h4>
      <p>
        Total distance: ~20 km<br>
        Maximum altitude: 12,500 ft (Kedarkantha Summit)
      </p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-person-hiking"></i> Who Can Do This Trek?</h4>
      <p>
        Beginners, students, solo travelers, couples, and adventure
        enthusiasts aged 12–55 years.
      </p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-campground"></i> Stay & Accommodation</h4>
      <p>
        Comfortable alpine tents with sleeping bags and mats.
        Homestay accommodation at Sankri village.
      </p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-bowl-food"></i> Meals Included</h4>
      <p>
        Nutritious vegetarian meals including breakfast, lunch,
        evening snacks, and dinner during the trek.
      </p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-shield-halved"></i> Safety & Support</h4>
      <p>
        Certified trek leaders, local guides, first-aid kits,
        oxygen cylinder, and emergency evacuation support.
      </p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-snowflake"></i> Highlights</h4>
      <p>
        Snow-covered trails, pine forests, Juda Ka Talab,
        360° Himalayan summit views, and scenic campsites.
      </p>
    </div>

  </div>
</section>


<!-- REVIEWS -->
<section class="customer-reviews" id="feedback-section">
  <h2>What Trekkers Say</h2>
  <div class="reviews-container">
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Rohit Negi</h3>
      <span>Delhi</span>
      <p>My first Himalayan trek – unforgettable experience!</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Ananya Gupta</h3>
      <span>Jaipur</span>
      <p>Snow, views, and amazing trek leaders. Highly recommended.</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Mark Wilson</h3>
      <span>UK</span>
      <p>Beautiful trek with well-managed camps and routes.</p>
    </div>
  </div>
</section>

</main>

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

