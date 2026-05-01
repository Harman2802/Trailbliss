<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indian Heritage Tours - Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* About Heritage Section */
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
    .about-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
      text-align: left;
    }
    .about-grid div {
      background: #fff;
      padding: 25px 15px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .about-grid div:hover { transform: translateY(-5px); }
    .about-grid div h4 {
      font-size: 20px;
      color: #0066cc;
      margin-bottom: 10px;
    }
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
  <h1 class="main-title">Indian Heritage Tours</h1>
  <p class="route">Rajasthan - Varanasi - Khajuraho - Hampi</p>

  <!-- IMAGE GALLERY -->
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/heritage-main.jpg" alt="Indian Heritage">
    </div>
    <div class="gallery-right">
      <img src="image/tajmahal.jpg" alt="Taj Mahal">
      <img src="image/jaipur.jpg" alt="Jaipur Palace">
      <img src="image/varanasi.jpeg" alt="Varanasi Ghats">
      <img src="image/temple-pack.jpg" alt="Khajuraho Temple">
    </div>
  </div>

  <!-- CONTENT SECTION -->
  <div class="content-area">

    <!-- LEFT CONTENT -->
    <div class="left-content">
      <div class="section-box">
        <h2>Overview</h2>
        <p>
          Discover the rich cultural heritage of India through majestic forts, palaces, temples, and vibrant traditions.
          Explore royal Rajasthan, spiritual Varanasi, and UNESCO World Heritage sites.
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival in Delhi - Jaipur</li>
          <li>Day 02: Jaipur Sightseeing - Amber Fort & City Palace</li>
          <li>Day 03: Jaipur to Jodhpur - Mehrangarh Fort</li>
          <li>Day 04: Jodhpur to Udaipur - City Palace & Lake Pichola</li>
          <li>Day 05: Udaipur to Varanasi - Ghats & Ganga Aarti</li>
          <li>Day 06: Varanasi - Sarnath Visit</li>
          <li>Day 07: Departure from Varanasi</li>
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

  <!-- About Heritage Section -->
  <section id="about">
    <h2>About Indian Heritage Tours</h2>
    <p>
      Discover the historical and cultural richness of India. Visit royal palaces, ancient temples,
      spiritual cities, and experience the traditions and festivals that make India unique.
    </p>

    <div class="about-grid">
      <div>
        <h4>Historic Monuments</h4>
        <p>Visit iconic landmarks like the Taj Mahal, Jaipur Forts, and temples across India.</p>
      </div>

      <div>
        <h4>Arts & Culture</h4>
        <p>Experience traditional music, dance, crafts, and local festivals showcasing India’s heritage.</p>
      </div>

      <div>
        <h4>Royal Palaces</h4>
        <p>Explore palaces and havelis in Rajasthan, witnessing the grandeur of India’s royal history.</p>
      </div>

      <div>
        <h4>Cultural Trails</h4>
        <p>Travel through historic cities, UNESCO World Heritage sites, and spiritual centers.</p>
      </div>
    </div>
  </section>

  <!-- POPULAR TOURS -->
  <div class="tour-section">
    <h2>Popular Heritage Packages</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/rajasthan.jpg" alt="Rajasthan Royal Tour">
        <h4>Rajasthan Royal Tour</h4>
        <p>6 Nights / 7 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/varanasi.jpeg" alt="Varanasi Spiritual Tour">
        <h4>Varanasi Spiritual Tour</h4>
        <p>4 Nights / 5 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/north-india-pack.jpg" alt="Khajuraho & Hampi Tour">
        <h4>Khajuraho & Hampi Tour</h4>
        <p>5 Nights / 6 Days</p>
      </div>
    </div>
  </div>

  <!-- EXTENSION TOURS -->
  <div class="tour-section">
    <h2>More Heritage Tours</h2>
    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/agra.jpg" alt="Pushkar Tour">
        <h4>Pushkar & Ajmer Tour</h4>
      </div>

      <div class="tour-card">
        <img src="image/heritage-main.jpg" alt="Orchha Tour">
        <h4>Orchha Heritage Tour</h4>
      </div>

      <div class="tour-card">
        <img src="image/jaipur.jpg" alt="Jaipur Tour">
        <h4>Jaipur City & Forts</h4>
      </div>

      <div class="tour-card">
        <img src="image/agra.jpg" alt="Agra Tour">
        <h4>Agra & Taj Mahal</h4>
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
      <h3>Anjali Mehra</h3>
      <span>India</span>
      <p>Beautiful historical sites and excellent arrangements! Truly memorable.</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 2">
      <h3>Rahul Sharma</h3>
      <span>USA</span>
      <p>Well-planned itinerary and comfortable accommodations. Loved every moment.</p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Traveler 3">
      <h3>Priya Verma</h3>
      <span>UK</span>
      <p>Experienced India’s culture and heritage like never before. Excellent guidance!</p>
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
