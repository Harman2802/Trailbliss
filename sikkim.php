<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailbliss - Sikkim Tour</title>
  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

<!-- HERO -->
<div class="hero">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <div class="small-title">Discover The Paradise</div>
    <div class="big-title">Beautiful Sikkim</div>
  </div>
</div>

<!-- CONTENT SECTION -->
<section class="wildlife-section">
  <div class="wildlife-container">

    <div class="wildlife-text">
      <h1>Sikkim Tour <br> Packages</h1>

      <p>
        Nestled in the Himalayas, Sikkim is one of India’s most scenic destinations, offering lush landscapes, snow-capped mountains, monasteries, lakes, and adventure activities. Explore the majestic beauty of Sikkim with Trailbliss’ carefully curated packages designed for nature lovers, peace seekers, honeymooners, and adventure enthusiasts.
        Witness the grandeur of Mount Kanchenjunga, experience the vibrant Tibetan culture, and visit pristine lakes like Tsomgo and Gurudongmar. Whether it’s a quiet village escape or a thrilling North Sikkim tour, Sikkim promises an unforgettable holiday experience.
      </p>
    </div>

    <div class="wildlife-image">
      <img src="image/sikkim1.jpg" alt="Sikkim Tour">
    </div>

  </div>
</section>

<section class="section">
  <h2>Best Selling Sikkim Packages</h2>

  <div class="card-grid">
    <div class="card">
      <img src="image/sikkim2.jpg">
      <div class="card-content">
        <a href="#"> 5 Nights & 6 Days
        <h4>North Sikkim Adventure</h4>
        <p>Explore Lachen, Lachung & Gurudongmar Lake.</p>
      </a></div>
    </div>

    <div class="card">
      <img src="image/sikkim3.jpg">
      <div class="card-content"><a href="#"> 4 Nights & 5 Days
        <h4>Gangtok & Tsomgo Lake Tour</h4>
        <p>Monasteries, lakes & cable car adventure.</p>
      </a></div>
    </div>

    <div class="card">
      <img src="image/pelling.jpg">
      <div class="card-content"><a href="#"> 6 Nights & 7 Days
        <h4>Romantic Sikkim Honeymoon</h4>
        <p>Pelling, waterfalls & mountain views.</p></a>
      </div>
    </div>

    <div class="card">
      <img src="image/yumthang.jpg">
      <div class="card-content"><a href="#"> 7 Nights & 8 Days
        <h4>Yumthang Valley Expedition</h4>
        <p>Witness the valley of flowers in North Sikkim.</p></a>
      </div>
    </div>
  </div>
</section>

<!-- Best Time To Visit -->
<section class="best-time-section">
  <div class="bt-container">

    <div class="bt-left">
      <h2>Best Time to Visit <br> Sikkim</h2>

      <div class="bt-list">
        <div class="bt-item">
          <span>01</span>
          <h3>Summer</h3>
          <p>March to June — Pleasant weather & sightseeing.</p>
        </div>

        <div class="bt-item">
          <span>02</span>
          <h3>Winter</h3>
          <p>December to February — Snowfall in high altitude regions.</p>
        </div>

        <div class="bt-item">
          <span>03</span>
          <h3>Spring</h3>
          <p>April to May — Blooming flowers at Yumthang Valley.</p>
        </div>
      </div>

      <div class="bt-text">
        <p>
          Sikkim offers breathtaking Himalayan views throughout the year. The pleasant climate and scenic beauty make it one of India’s top mountain destinations.
        </p>
      </div>
    </div>

    <div class="bt-right">
      <img src="image/sikkim2.jpg" alt="Sikkim">
    </div>

  </div>
</section>

<!-- BOOK YOUR TRIP SECTION -->
<section class="booktrip-section">
  <h2>Plan Your <span>Dream Holiday</span></h2>
  <p class="subtitle">Choose the perfect way to explore Sikkim with Trailbliss</p>

  <div class="trip-options">
    
    <div class="trip-box">
      <img src="image/sikkim.jpg" alt="Adventure Tour">
      <h3>Adventure Tours</h3>
      <p>High altitude lakes, trekking & thrill in North Sikkim.</p>
      <button class="trip-btn" data-package="Adventure Tours">Book Now</button>
    </div>

    <div class="trip-box">
      <img src="image/sikkim4.jpg" alt="Honeymoon">
      <h3>Honeymoon Getaways</h3>
      <p>Romantic Pelling views & peaceful hill escapes.</p>
      <button class="trip-btn" data-package="Honeymoon Getaways">Book Now</button>
    </div>

    <div class="trip-box">
      <img src="image/sikkim5.jpg" alt="Family Tour">
      <h3>Family Holidays</h3>
      <p>Fun sightseeing, shops & monasteries in Gangtok.</p>
      <button class="trip-btn" data-package="Family Holidays">Book Now</button>
    </div>

    <div class="trip-box">
      <img src="image/sikkim3.jpg" alt="Nature Tour">
      <h3>Nature & Wildlife</h3>
      <p>Lush greens, waterfalls & Himalayan beauty.</p>
      <button class="trip-btn" data-package="Nature & Wildlife">Book Now</button>
    </div>

  </div>
</section>


<section class="about-section" id="about">
  <h2>About <span>Sikkim Tourism</span></h2>
  <div class="about-content">
    <div class="about-text">
      <p class="intro">
        Sikkim is known for its rich culture, spirituality, and Himalayan beauty. Explore monasteries like Rumtek & Pemayangtse, experience snow-covered regions in North Sikkim, and enjoy adventure sports like rafting & trekking.
        From Gangtok’s urban charm to the peaceful nature of Pelling and the alpine beauty of Lachung, Sikkim promises unforgettable memories.
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


<script>
  const bookButtons = document.querySelectorAll(".trip-btn");
  const overlay = document.getElementById("quoteOverlay");
  const closeBtn = document.getElementById("closePopup");
  const packageSelect = document.getElementById("packageSelect");

  // Open popup on Book Now
  bookButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      const selectedPackage = btn.getAttribute("data-package");

      overlay.classList.add("active");

      // Auto select package
      if (selectedPackage) {
        packageSelect.value = selectedPackage;
      }
    });
  });

  // Close popup
  closeBtn.addEventListener("click", () => {
    overlay.classList.remove("active");
  });

  // Close on overlay click
  overlay.addEventListener("click", (e) => {
    if (e.target === overlay) {
      overlay.classList.remove("active");
    }
  });
</script>


<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="js/front.js"></script>


</body>
</html>
