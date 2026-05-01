<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailbliss - Travel Website</title>
  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <!-- Swiper CSS -->
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 
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
      <li><button id="openQuote" class="planTripBtn">Book Your Trip</button>
     </li>
    </ul>
  </nav>
</header>

<!-- MAIN TITLE -->
<div class="container">
  <h1 class="main-title">Golden Triangle & Majestic Tiger</h1>
  <p class="route">Delhi - Jaipur - Ranthambore - Fatehpur Sikri - Agra - Delhi</p>

  <!-- IMAGE GALLERY -->
  <div class="gallery">
    <div class="gallery-left">
      <img src="image/tiger5.jpg">
    </div>
    <div class="gallery-right">
      <img src="image/tiger3.jpg">
      <img src="image/tiger7.jpg">
      <img src="image/tiger6.jpg">
      <img src="image/tiger2.jpg">
    </div>
  </div>

  <!-- CONTENT SECTION -->
  <div class="content-area">

    <!-- LEFT CONTENT -->
    <div class="left-content">
      <div class="section-box">
        <h2>Overview</h2>
        <p>
          This Golden Triangle & Majestic Tiger Tour offers a perfect blend of history, 
          architecture, and wildlife. Visit Delhi, Jaipur, Agra and enjoy thrilling safaris at Ranthambore.
        </p>
      </div>

      <div class="section-box">
        <h2>Itinerary</h2>
        <ul class="itinerary">
          <li>Day 01: Arrival Delhi</li>
          <li>Day 02: Delhi Sightseeing</li>
          <li>Day 03: Delhi - Jaipur</li>
          <li>Day 04: Jaipur Sightseeing</li>
          <li>Day 05: Jaipur - Ranthambore</li>
          <li>Day 06: Jungle Safari</li>
          <li>Day 07: Ranthambore - Agra</li>
          <li>Day 08: Agra - Delhi Departure</li>
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

  <!-- POPULAR TOURS -->
  <div class="tour-section">
    <h2>Popular Golden Triangle Tour Packages</h2>

    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/Gangotri Temple.jpg">
        <h4>Golden Triangle Tour</h4>
        <p>5 Nights / 6 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/himachal.jpg">
        <h4>Golden Triangle Tour</h4>
        <p>7 Nights / 8 Days</p>
      </div>

      <div class="tour-card">
        <img src="image/hill.jpg">
        <h4>Golden Triangle Tour</h4>
        <p>6 Nights / 7 Days</p>
      </div>
    </div>
  </div>

  <!-- EXTENSION TOURS -->
  <div class="tour-section">
    <h2>Extension Tours Worth Taking</h2>

    <div class="tour-grid">
      <div class="tour-card">
        <img src="image/yoga.jpg">
        <h4>Golden Triangle with Yoga</h4>
      </div>

      <div class="tour-card">
        <img src="image/goa.jpg">
        <h4>Golden Triangle with Goa</h4>
      </div>

      <div class="tour-card">
        <img src="image/varanasi.jpeg">
        <h4>Golden Triangle with Varanasi</h4>
      </div>

      <div class="tour-card">
        <img src="image/tiger1.jpg">
        <h4>Golden Triangle & Tiger</h4>
      </div>
    </div>
  </div>
</div>


<section class="customer-reviews">
  <h2>Happy Customers</h2>

  <div class="reviews-container">

    <div class="review-card">
      <img src="image/user1.jpg" alt="Customer">
      <h3>Shilpa Shah & Family</h3>
      <span>USA</span>
      <p>
        Our Golden Triangle & Tiger Tour was beautifully organized.  
        Hotels were excellent and the jungle safari was unforgettable.
        Truly a lifetime experience.
      </p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Customer">
      <h3>Vasanthi Moav</h3>
      <span>United Kingdom</span>
      <p>
        The tour was perfectly planned with professional guides and drivers.
        The tiger sighting at Ranthambore was magical. Highly recommended!
      </p>
    </div>

    <div class="review-card">
      <img src="image/user1.jpg" alt="Customer">
      <h3>Rohit Verma</h3>
      <span>India</span>
      <p>
        From booking to execution everything was smooth. Great service,
        great accommodation and unforgettable wildlife experience.
      </p>
    </div>

  </div>
</section>



 <!-- Footer -->
<footer class="site-footer">
  <div class="footer-info">
    <div class="footer-contact">
      <p>
        <i class="fa-solid fa-location-dot"></i> C - 81C, Sector - 8, Noida -
        201301
      </p>
      <p>
        <i class="fa-solid fa-phone"></i> +91-120-4052615 - 99 (85 hunting lines
        are available)
      </p>
      <p><i class="fa-solid fa-fax"></i> +91-120-4052699</p>
      <p><i class="fa-solid fa-mobile-screen"></i> +91-9512787224/26</p>
      <p><i class="fa-solid fa-envelope"></i> info@trailbliss.com</p>
      <p><i class="fa-brands fa-whatsapp"></i> +91-9512787225 (Only for Whatsapp)</p>
      <p><i class="fa-brands fa-skype"></i> Trailblisspunjab</p>
    </div>
  </div>

  <div class="footer-social">
    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
    <a href="facebook"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
  </div>

  <p class="footer-copy">
    Copyright©2025, TRAILBLISS Pvt. Ltd
  </p>
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