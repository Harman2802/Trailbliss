<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailbliss - Travel Website</title>
  <link rel="stylesheet" href="front1.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <!-- Swiper CSS -->
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #fff;
        color: #2b2b2b;
    }

    /* HEADER */
    header {
        width: 100%;
        background: #ffffff;
        box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .logo img {
        height: 50px;
    }
    nav ul {
        list-style: none;
        display: flex;
        gap: 30px;
        margin: 0;
        font-weight: 500;
    }
    nav a {
        text-decoration: none;
        color: #2b2b2b;
        transition: 0.3s;
    }
    nav a:hover {
        color: #b30000;
    }

    /* BANNER */
    .banner {
        width: 100%;
        height: 430px;
        background-image: url('image/tajbar.jpg'); /* CHANGE */
        background-size: cover;
        background-position: center;
    }

    /* MAIN MESSAGE */
    .content-box {
        padding: 50px 20px;
        max-width: 900px;
        margin: auto;
        text-align: center;
    }
    .content-box h2 {
        font-size: 24px;
        font-weight: 600;
        color: #8B0000;
        line-height: 1.6;
    }
    .contact-info {
        margin-top: 20px;
        font-size: 16px;
        line-height: 30px;
    }
    .contact-info i {
        margin-right: 7px;
        color: #8B0000;
    }

    hr {
        margin: 45px auto;
        width: 70%;
        border: 0;
        border-bottom: 1px solid #ddd;
    }

    /* Back Button */
    .back-btn {
        margin-top: 25px;
        background: #8B0000;
        color: #fff;
        padding: 12px 28px;
        border-radius: 5px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
    }
    .back-btn:hover {
        background: #b30000;
    }

    /* FOOTER */
    footer {
        background: #1c1c1c;
        color: #f2f2f2;
        padding: 35px 20px;
        text-align: center;
        margin-top: 40px;
    }
    footer p {
        margin: 6px 0;
        font-size: 14px;
        line-height: 26px;
    }

    /* RESPONSIVE */
    @media(max-width: 768px) {
        header {
            padding: 15px 20px;
        }
        nav ul {
            gap: 15px;
        }
        .banner {
            height: 330px;
        }
        .content-box h2 {
            font-size: 20px;
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
      <li><a href="#hero">Home</a></li>
      <li><a href="#destination">Destinations</a></li>
      <li><a href="#packages">Packages</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#feedback-section">Reviews</a></li>
      <li><button id="openQuote" class="planTripBtn">Book Your Trip</button>
</li>

    </ul>
  </nav>
</header>


<!-- TOP IMAGE -->
<div class="banner"></div>

<!-- MESSAGE + CONTACT -->
<div class="content-box">

    <h2>
        Thanks for visiting our website and making a query.<br>
        We will revert back to you with our reply within the shortest possible time,<br>
        not more than 12 hours.
    </h2>

    <p style="font-weight:600; margin-top:35px;">You can also contact us :</p>

    <div class="contact-info">
        <p><i class="fa-solid fa-phone"></i>Tel: +91-120-4052615-99</p>
        <p><i class="fa-solid fa-mobile-screen"></i>Mob: +91-9212777223/24</p>
        <p><i class="fa-brands fa-whatsapp"></i>WhatsApp: +91-9212777225</p>
        <p><i class="fa-solid fa-envelope"></i>Email: info@trailbliss.com</p>
        <p><i class="fa-brands fa-skype"></i>Skype: trailblisspunjab</p>
    </div>

    <!-- BACK BUTTON -->
    <a href="front.php" class="back-btn">⬅ Go Back to Home</a>

    <hr>
</div>

<!-- FOOTER -->
<footer>
    <p>© 2025 Trailbliss Holidays. All Rights Reserved.</p>
    <p>India’s Trusted Travel Partner for Chardham Yatra Tour & Pilgrimage Packages.</p>
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
