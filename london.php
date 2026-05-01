<!-- Save as london.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trailbliss - London Tour Packages</title>

<link rel="stylesheet" href="front1.css">
<link rel="stylesheet" href="h1.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* HERO */
.hero{
  height:90vh;
  background:url('image/london0.jpg') center/cover no-repeat;
  position:relative;
}
.hero-overlay{
  position:absolute;
  inset:0;
  background:rgba(0,0,0,0.45);
}

/* INTRO */
.travel-section{
  padding:70px 20px;
  background:#fff;
}
.travel-container{
  max-width:1200px;
  margin:auto;
  display:flex;
  gap:50px;
  align-items:center;
}
.travel-text{flex:1;}
.travel-text h1{
  font-size:42px;
  margin-bottom:20px;
}
.travel-text p{
  font-size:16px;
  color:#444;
  line-height:1.8;
}
.travel-image{flex:1;}
.travel-image img{
  width:100%;
  border-radius:14px;
  box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

/* PACKAGE SECTION */
.london-section{
  padding:90px 20px;
  background:#f6f7fb;
  text-align:center;
}
.london-section h2{
  font-size:40px;
  margin-bottom:50px;
}
.london-grid{
  max-width:1200px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:28px;
}
.london-card{
  background:#fff;
  border-radius:18px;
  overflow:hidden;
  box-shadow:0 10px 30px rgba(0,0,0,0.08);
  transition:.3s;
}
.london-card:hover{
  transform:translateY(-10px);
}
.london-card img{
  width:100%;
  height:220px;
  object-fit:cover;
}
.london-content{
  padding:20px;
  text-align:left;
}
.london-duration{
  display:inline-block;
  background:#ff7b00;
  color:#fff;
  padding:5px 12px;
  border-radius:20px;
  font-size:12px;
}
.london-title{
  font-size:18px;
  font-weight:600;
  margin:12px 0 8px;
}
.london-text{
  font-size:14px;
  color:#666;
}

/* BEST TIME */
.best-time{
  padding:80px 20px;
  background:#fff;
}
.bt-container{
  max-width:1200px;
  margin:auto;
  display:flex;
  gap:40px;
  align-items:center;
}
.bt-left{flex:1;}
.bt-left h2{
  font-size:38px;
  margin-bottom:25px;
}
.bt-item{
  margin-bottom:20px;
  padding:15px;
  border-left:4px solid #ff7b00;
}
.bt-right{flex:1;}
.bt-right img{
  width:100%;
  border-radius:14px;
}

/* REVIEWS */
.feedback-section{
  padding:90px 20px;
  background:#f9f9f9;
  text-align:center;
}
.feedback-wrapper{
  max-width:1200px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
  gap:25px;
}
.feedback-box{
  background:#fff;
  padding:30px;
  border-radius:16px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

/* FOOTER */
.site-footer{
  background:#111;
  color:#fff;
  text-align:center;
  padding:40px 20px;
}
.footer-contact p{
  margin:6px 0;
  color:#ccc;
}

/* MOBILE */
@media(max-width:900px){
  .travel-container,
  .bt-container{
    flex-direction:column;
    text-align:center;
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
<div class="hero">
<div class="hero-overlay"></div>
</div>

<!-- INTRO -->
<section class="travel-section">
<div class="travel-container">

<div class="travel-text">
<h1>London Tour Packages</h1>
<p>
London is a city of royalty, history, culture and modern attractions.  
Explore Buckingham Palace, Tower Bridge, Big Ben, London Eye and Thames River Cruise.  
Trailbliss offers premium London holiday packages with hotels, sightseeing, airport pickup and visa support.
</p>
</div>

<div class="travel-image">
<img src="image/lon1.jpg">
</div>

</div>
</section>

<!-- PACKAGES -->
<section class="london-section">
<h2>Best Selling London Packages</h2>

<div class="london-grid">

<div class="london-card">
<img src="image/lon3.jpg">
<div class="london-content">
<div class="london-duration">5N / 6D</div>
<div class="london-title">Classic London Tour</div>
<div class="london-text">Big Ben, London Eye & Thames Cruise.</div>
</div>
</div>

<div class="london-card">
<img src="image/lon4.jpg">
<div class="london-content">
<div class="london-duration">6N / 7D</div>
<div class="london-title">Family London Holiday</div>
<div class="london-text">Museums, parks & Harry Potter studio.</div>
</div>
</div>

<div class="london-card">
<img src="image/lon5.jpg">
<div class="london-content">
<div class="london-duration">4N / 5D</div>
<div class="london-title">Luxury London Escape</div>
<div class="london-text">Premium hotel & shopping streets.</div>
</div>
</div>

<div class="london-card">
<img src="image/lon6.jpg">
<div class="london-content">
<div class="london-duration">3N / 4D</div>
<div class="london-title">Short London Trip</div>
<div class="london-text">Quick city sightseeing package.</div>
</div>
</div>

</div>
</section>

<!-- BEST TIME -->
<section class="best-time">
<div class="bt-container">

<div class="bt-left">
<h2>Best Time to Visit London</h2>

<div class="bt-item">
<h3>Spring</h3>
<p>Pleasant weather & blooming parks.</p>
</div>

<div class="bt-item">
<h3>Summer</h3>
<p>Best for sightseeing & outdoor events.</p>
</div>

<div class="bt-item">
<h3>Winter</h3>
<p>Christmas markets & festive lights.</p>
</div>

</div>

<div class="bt-right">
<img src="image/lon7.jpg">
</div>

</div>
</section>

<!-- REVIEWS -->
<section class="feedback-section" id="feedback-section">
<h2>What Our Clients Say</h2>

<div class="feedback-wrapper">

<div class="feedback-box">
<p>Wonderful London experience with smooth planning.</p>
<h4>Rahul Mehra</h4>
</div>

<div class="feedback-box">
<p>Excellent hotel and sightseeing arrangements.</p>
<h4>Jasleen Kaur</h4>
</div>

<div class="feedback-box">
<p>Best travel service for UK holiday packages.</p>
<h4>Aman Verma</h4>
</div>

</div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
<div class="footer-contact">
<p><i class="fa fa-location-dot"></i> Noida, India</p>
<p><i class="fa fa-phone"></i> +91-120-4052615</p>
<p><i class="fa fa-envelope"></i> info@trailbliss.com</p>
</div>

<p>© 2026 TRAILBLISS Pvt. Ltd</p>
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