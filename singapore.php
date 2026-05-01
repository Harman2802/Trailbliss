<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trailbliss - Malaysia Tour Packages</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="stylesheet" href="front1.css">
<link rel="stylesheet" href="h1.css">

<style>
.hero{height:75vh;background:url("image/singapore.jpg") center/cover no-repeat;display:flex;align-items:center;justify-content:center;position:relative;color:white;}
.hero::before{content:"";position:absolute;inset:0;background:rgba(0,0,0,0.5);}
.hero-text{position:relative;text-align:center;}
.big-title{font-size:60px;font-weight:800;}
.container{max-width:1200px;margin:auto;padding:60px 20px;}
.content-area{display:grid;grid-template-columns:1.2fr 1fr;gap:30px;}
.section-box{background:#fff;padding:25px;border-radius:15px;}
.best-time-wrapper{
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 25px;
  background: #fff;
  padding: 25px;
  border-radius: 15px;
  align-items: center;
}

/* LIST STYLE FIX */
.best-time-wrapper ul{
  list-style: none;
  padding: 0;
  margin: 0;
}

.best-time-wrapper ul li{
  margin-bottom: 18px;
  padding: 15px;
  background: #f8f8f8;
  border-left: 5px solid #2b6cb0; /* theme color (you can change) */
  border-radius: 10px;
}

.best-time-wrapper ul li strong{
  display: block;
  margin-bottom: 5px;
}

.best-time-wrapper ul li span{
  font-size: 14px;
  color: #666;
}

/* IMAGE FIX (IMPORTANT PART) */
.best-time-wrapper img{
  width: 100%;
  height: 320px;
  object-fit: cover;
  border-radius: 12px;
  display: block;
}
footer{background:#000;color:#fff;text-align:center;padding:25px;margin-top:40px;}
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
      <li><a href="#reviews">Reviews</a></li>
      <li><button id="openQuote" class="planTripBtn">Book Your Trip</button></li>
    </ul>
  </nav>
</header>

<section class="hero">
<div class="hero-text">
<div class="big-title">Singapore</div>
</div>
</section>

<section class="container">
<h2 class="main-title">Singapore Tour Packages</h2>
<div class="content-area">
<div class="section-box">
<p>Singapore is a modern city known for Marina Bay Sands, Sentosa Island, and clean futuristic architecture.Singapore is a modern island city-state in Southeast Asia known for its cleanliness, safety, and world-class infrastructure. It is famous for iconic attractions like Marina Bay Sands, Gardens by the Bay, and Sentosa Island. The city offers a perfect mix of futuristic architecture and rich cultural diversity. Singapore is home to people of Chinese, Malay, Indian, and other communities living harmoniously. It is also a global financial hub with a strong economy and advanced technology sector. Tourists enjoy shopping on Orchard Road and exploring vibrant street food at hawker centers. The city has strict laws that help maintain its order and cleanliness. Public transport is highly efficient, making travel easy for visitors. Singapore also features beautiful green spaces despite being highly urbanized.
</p>
</div>
<div class="right-content">
<img src="image/singapore1.jpg">
</div>
</div>
</section>

<section class="container">
<h2 class="main-title">Best Time</h2>
<div class="best-time-wrapper">
<ul>
<li><strong>Feb–Apr</strong><span>Best weather</span></li>
<li><strong>Jul–Sep</strong><span>Shopping festivals</span></li>
</ul>
<div><img src="image/singapore2.jpg"></div>
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