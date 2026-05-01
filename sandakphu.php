<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sandakphu Trek - Trailbliss</title>

  <!-- CSS Files -->
  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .about-goa{
      padding:50px 20px;
      background:#f9f9f9;
      text-align:center;
    }
    .about-goa h2{
      font-size:32px;
      color:#0f766e;
      margin-bottom:15px;
    }
    .about-goa p{
      font-size:16px;
      color:#333;
      max-width:800px;
      margin:0 auto 40px;
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
    }
    .about-item i{
      font-size:40px;
      color:#0f766e;
      margin-bottom:15px;
    }
    .about-item h4{
      font-size:20px;
      color:#0f766e;
    }
    .about-item p{
      font-size:15px;
      color:#555;
    }

    .tour-section{
      padding:70px 20px;
      background:#f3f4f6;
    }
    .tour-section h2{
      text-align:center;
      font-size:34px;
      margin-bottom:50px;
    }
    .tour-grid{
      max-width:1200px;
      margin:auto;
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
      gap:30px;
    }
    .tour-card{
      background:#fff;
      padding:30px;
      border-radius:14px;
      box-shadow:0 10px 25px rgba(0,0,0,.08);
      border-left:5px solid #0f766e;
    }
    .tour-card h4{
      font-size:20px;
      display:flex;
      gap:10px;
    }
    .tour-card h4 i{
      color:#0f766e;
    }
    .tour-card p{
      font-size:15px;
      color:#475569;
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
  <h1 class="main-title" style="color:#0f766e;">Sandakphu Trek</h1>
  <p class="route">Manebhanjan – Tonglu – Kalipokhri – Sandakphu</p>
</section>

<!-- GALLERY -->
<section class="gallery">
  <div class="gallery-left">
    <img src="image/sandakphu-main.webp">
  </div>
  <div class="gallery-right">
    <img src="image/sandakphu-trail.jpg">
    <img src="image/kalipokhri.jpg">
    <img src="image/sandakphu-view.jpg">
    <img src="image/sandakphu-village.jpg">
  </div>
</section>

<!-- CONTENT -->
<section class="content-area">

  <div class="left-content">

    <div class="section-box">
      <h2>Overview</h2>
      <p>
        Sandakphu Trek is the highest trek in West Bengal and offers
        spectacular views of the world’s tallest mountains including
        Mount Everest, Kanchenjunga, Lhotse, and Makalu — all visible in one panoramic sweep.
      </p>
    </div>

    <div class="section-box">
      <h2>Itinerary</h2>
      <ul class="itinerary">
        <li>Day 01: NJP/Bagdogra to Manebhanjan</li>
        <li>Day 02: Manebhanjan to Tonglu</li>
        <li>Day 03: Tonglu to Kalipokhri</li>
        <li>Day 04: Kalipokhri to Sandakphu</li>
        <li>Day 05: Sandakphu to Phalut</li>
        <li>Day 06: Phalut to Manebhanjan & Departure</li>
      </ul>
    </div>

  </div>

  <!-- RIGHT FORM -->
  <div class="right-form">
    <h3 style="color:#0f766e;">Quick Query</h3>
    <form>
      <input type="text" placeholder="Your Name" required>
      <input type="email" placeholder="Your Email" required>
      <input type="text" placeholder="Your Phone" required>
      <input type="text" placeholder="Country" required>
      <textarea placeholder="Your Message" required></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>

</section>

<!-- ABOUT -->
<section class="about-goa" id="about">
  <h2>About Sandakphu Trek</h2>
  <p>
    Sandakphu lies on the Singalila Ridge, offering unmatched views of
    four of the five highest peaks in the world.
  </p>

  <div class="about-goa-grid">
    <div class="about-item">
      <i class="fa-solid fa-mountain"></i>
      <h4>World’s Highest Peaks</h4>
      <p>Views of Everest, Kanchenjunga, Lhotse & Makalu.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-tree"></i>
      <h4>Rhododendron Forests</h4>
      <p>Walk through colorful forests in spring season.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-camera"></i>
      <h4>Photography Paradise</h4>
      <p>Golden sunrise & sunset mountain views.</p>
    </div>
    <div class="about-item">
      <i class="fa-solid fa-person-hiking"></i>
      <h4>Moderate Trek</h4>
      <p>Well-defined trails suitable for fit beginners.</p>
    </div>
  </div>
</section>

<!-- DETAILS -->
<section class="tour-section">
  <h2>Sandakphu Trek – Complete Details</h2>

  <div class="tour-grid">

    <div class="tour-card">
      <h4><i class="fa-solid fa-calendar-days"></i> Best Time</h4>
      <p>April–May (flowers) & Oct–Nov (clear views).</p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-gauge-high"></i> Difficulty</h4>
      <p>Easy to Moderate trek with gradual ascents.</p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-route"></i> Distance & Altitude</h4>
      <p>Total Distance: ~47 km<br>Max Altitude: 11,930 ft</p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-users"></i> Who Can Trek?</h4>
      <p>Nature lovers, photographers, fit beginners.</p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-bed"></i> Stay</h4>
      <p>Trekker huts, lodges, and guest houses.</p>
    </div>

    <div class="tour-card">
      <h4><i class="fa-solid fa-shield-halved"></i> Safety</h4>
      <p>Experienced guides, first-aid, local support.</p>
    </div>

  </div>
</section>

<!-- REVIEWS -->
<section class="customer-reviews" id="feedback-section">
  <h2>What Trekkers Say</h2>
  <div class="reviews-container">
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Sourav Das</h3>
      <span>Kolkata</span>
      <p>Watching Everest from Sandakphu was surreal!</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Anjali Roy</h3>
      <span>Bangalore</span>
      <p>Best sunrise views of Kanchenjunga.</p>
    </div>
    <div class="review-card">
      <img src="image/user1.jpg">
      <h3>Michael Brown</h3>
      <span>Australia</span>
      <p>A must-do trek for mountain lovers.</p>
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

