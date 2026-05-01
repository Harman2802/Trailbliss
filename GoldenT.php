<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Golden Triangle with Tigers | Trailbliss</title>

  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="h1.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

  <!-- Swiper + FontAwesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
/* Hero background ONLY for Golden Triangle with Tigers page */
.hero {
  background: url("image/tiger2.jpg") center center / cover no-repeat;
  height: 100vh;
  position: relative;
}

/* Optional: darker overlay for readability */
.hero-overlay {
  background: rgba(0, 0, 0, 0.55);
}
</style>


</head>

<body>

<!-- NAVBAR -->
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
    <div class="small-title">Explore India’s Heritage & Wildlife</div>
    <div class="big-title">Golden Triangle with Tigers</div>
  </div>
</div>

<!-- INTRO SECTION -->
<section class="wildlife-section">
  <div class="wildlife-container">

    <div class="wildlife-text">
      <h1>Golden Triangle Tour <br> with Tiger Safari</h1>

      <p>
        The Golden Triangle with Tigers tour is one of India’s most popular travel experiences, 
        combining iconic heritage cities — <b>Delhi, Agra & Jaipur</b> — with the thrill of 
        spotting Royal Bengal Tigers in <b>Ranthambore National Park</b>.

        This journey lets you explore UNESCO World Heritage monuments like the Taj Mahal, 
        Amber Fort, and Qutub Minar, while also diving into India’s wild heart through guided 
        jungle safaris. Perfect for first-time visitors, photographers, families, and wildlife lovers,
        this tour blends culture, history, and adventure into one unforgettable experience.
      </p>
    </div>

    <div class="wildlife-image">
      <img src="image/golden-triangle.jpg" alt="Golden Triangle with Tigers">
    </div>

  </div>
</section>

<!-- PACKAGES -->
<section class="section">
  <h2>Best Selling Golden Triangle with Tiger Tours</h2>

  <div class="card-grid">

    <div class="card">
      <img src="image/agra.jpg">
      <div class="card-content">
        <a href="#">
          5 Nights & 6 Days
          <h4>Golden Triangle Classic</h4>
          <p>Delhi, Agra & Jaipur heritage tour.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/Ranthambore Safari.jpg">
      <div class="card-content">
        <a href="#">
          6 Nights & 7 Days
          <h4>Golden Triangle with Ranthambore</h4>
          <p>Heritage cities + tiger safari adventure.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/tajmahal.jpg">
      <div class="card-content">
        <a href="#">
          7 Nights & 8 Days
          <h4>Luxury Golden Triangle & Tigers</h4>
          <p>Luxury hotels with exclusive jungle safaris.</p>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="image/jaipur.jpg">
      <div class="card-content">
        <a href="#">
          8 Nights & 9 Days
          <h4>Extended Golden Triangle Tour</h4>
          <p>Jaipur culture + wildlife exploration.</p>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- BEST TIME -->
<section class="best-time-section">
  <div class="bt-container">

    <div class="bt-left">
      <h2>Best Time to Visit <br> Golden Triangle with Tigers</h2>

      <div class="bt-list">
        <div class="bt-item">
          <span>01</span>
          <h3>Heritage Sightseeing</h3>
          <p>October to March offers pleasant weather for monuments.</p>
        </div>

        <div class="bt-item">
          <span>02</span>
          <h3>Tiger Safari</h3>
          <p>March to June gives higher chances of tiger sightings.</p>
        </div>

        <div class="bt-item">
          <span>03</span>
          <h3>Photography</h3>
          <p>Winter mornings and summer safaris are perfect for photos.</p>
        </div>
      </div>
    </div>

    <div class="bt-right">
      <img src="image/Tiger Safari.jpg" alt="Golden Triangle Safari">
    </div>

  </div>
</section>

<!-- REVIEWS -->
<section class="feedback-section" id="feedback-section">
  <h2>Traveler <span>Experiences</span></h2>
  <p class="subtitle">Real stories from Golden Triangle guests</p>

  <div class="feedback-card active">
    <div class="feedback-images">
      <img src="image/tajmahal-main.jpg">
      <img src="image/tiger1.jpg">
    </div>
    <div class="feedback-text">
      <h4>Perfect Mix of Culture & Wildlife</h4>
      <p>
        The Golden Triangle with Tigers tour exceeded our expectations. 
        Seeing the Taj Mahal and spotting a tiger in Ranthambore on the same trip was magical.
      </p>
      <p class="reviewer">– Ankit Verma</p>
      <p class="review-date">February 2024</p>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about-section" id="about">
  <h2>About <span>Golden Triangle with Tigers</span></h2>
  <p class="intro">
    This tour is ideal for travelers who want to experience India’s rich history along with 
    its famous wildlife. Trailbliss ensures expert guides, comfortable hotels, safe transfers,
    and well-planned safaris — all customizable to your needs.
  </p>
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