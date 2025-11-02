<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailbliss - Travel Website</title>
  <link rel="stylesheet" href="front.css">

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
      <li><a href="#hero">Home</a></li>
      <li><a href="#destination">Destinations</a></li>
      <li><a href="#packages">Packages</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#feedback-section">Reviews</a></li>
      <li><a href="login.php">Book Your Trip</a></li>
    </ul>
  </nav>
</header>


  <!-- Hero Section -->
  <section class="hero" id="hero">
  <!-- Left Swiper -->
  <div class="hero-left swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="image/chardham yatra.jpg" alt="Chardham Yatra" />
        <div class="slide-text">
          <h2>Chardham Yatra Package 2025</h2>
          <p>11 Nights - 12 Days</p>
        </div>
      </div>

      <div class="swiper-slide">
        <img src="image/goa.jpg" alt="Goa Beach Holiday" />
        <div class="slide-text">
          <h2>Goa Beach Holiday</h2>
          <p>5 Nights - 6 Days</p>
        </div>
      </div>

      <div class="swiper-slide">
        <img src="image/leh ladakh.jpeg" alt="Leh Ladakh" />
        <div class="slide-text">
          <h2>Leh Ladakh Tours</h2>
          <p>10 Nights - 11 Days</p>
        </div>
      </div>

      <div class="swiper-slide">
        <img src="image/Sikkim.jpg" alt="Sikkim Holiday" />
        <div class="slide-text">
          <h2>Sikkim Holiday</h2>
          <p>5 Nights - 6 Days</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Right Content -->
  <div class="hero-right">
    <h1>
      Let us plan you a perfect <span>India Holiday</span>
    </h1>
    <p>
      Trailbliss offers custom-crafted tour packages for unforgettable holiday
      experiences across India and beyond.
    </p>

    <!-- Category Cards -->
    <div class="category-grid">
      <div class="category-card">
        <img src="image/wildlife.jpg" alt="Wildlife Safari" />
        <h3>Wildlife</h3>
        <p>70+ Packages</p>
      </div>

      <div class="category-card">
        <img
          src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e"
          alt="Indian Heritage"
        />
        <h3>Heritage</h3>
        <p>25+ Packages</p>
      </div>

      <div class="category-card">
        <img
          src="https://images.unsplash.com/photo-1501785888041-af3ef285b470"
          alt="Mountain Trekking"
        />
        <h3>Trekking</h3>
        <p>70+ Packages</p>
      </div>
     <!-- Hill Stations --> 
      <div class="category-card"> 
       <img 
       src="image/hill.jpg" alt="Hill Stations"/> 
       <h3>Hill Stations</h3>
       <p>75+ Packages</p>
       </div> 
      <!-- Beach Tour --> 
       <div class="category-card">   
        <img 
        src="image/bt.jpg" alt="Beach Tour"/> 
        <h3>Beach Tour</h3> 
        <p>20+ Packages</p>
       </div>
       <!-- Pilgrimage --> 
        <div class="category-card"> 
          <img
          src="image/pilgrimage.jpg"/>
           <h3>Pilgrimage</h3>
           <p>50+ Packages</p>
        </div>

  </div>
</section>



<section class="destinations" id="destination">
  <h2>Explore Top<span> Destinations by Region</span></h2>

  <!-- Tabs -->
  <div class="tabs">
    <button class="tab active" data-region="north">North India</button>
    <button class="tab" data-region="south">South India</button>
    <button class="tab" data-region="east">East India</button>
    <button class="tab" data-region="west">West India</button>
    <button class="tab" data-region="central">Central India</button>
  </div>

  <!-- North India -->
  <div class="destination-grid" id="north">

    <div class="destination-card large">
      <img src="image/uttarakhand.jpg" alt="Uttarakhand">
      <div class="card-text">
        <h3>Uttarakhand</h3>
        <p>50+ Packages</p>
      </div>
    </div>

    <div class="destination-card">
      <img src="image/rajasthan.jpg" alt="Rajasthan">
      <div class="card-text"><h3>Rajasthan</h3><p>30+ Packages</p></div>
    </div>

    <div class="destination-card">
      <img src="image/himachal.jpg" alt="Himachal">
      <div class="card-text"><h3>Himachal</h3><p>60+ Packages</p></div>
    </div>

    <div class="destination-card">
      <img src="image/up.jpg" alt="Uttar Pradesh">
      <div class="card-text"><h3>Uttar Pradesh</h3><p>25+ Packages</p></div>
    </div>

    <div class="destination-card">
      <img src="image/delhi.jpg" alt="Delhi">
      <div class="card-text"><h3>Delhi</h3><p>20+ Packages</p></div>
    </div>

    <div class="destination-card">
  <img src="image/punjab.jpg" alt="Punjab">
  <div class="card-text">
    <h3>Punjab</h3>
    <p>15+ Packages</p>
  </div>
</div>

  </div>

  <!-- South India -->
  <div class="destination-grid" id="south" style="display:none;">
    <div class="destination-card large">
      <img src="image/kerala.jpg" alt="Kerala">
      <div class="card-text"><h3>Kerala</h3><p>40+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/tamil.jpg" alt="Tamil Nadu">
      <div class="card-text"><h3>Tamil Nadu</h3><p>35+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/karnatak.jpg" alt="Karnataka">
      <div class="card-text"><h3>Karnataka</h3><p>30+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/andhra.jpg" alt="Andhra Pradesh">
      <div class="card-text"><h3>Andhra Pradesh</h3><p>20+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/telangana.jpg" alt="Telangana">
      <div class="card-text"><h3>Telangana</h3><p>15+ Packages</p></div>
    </div>
  </div>

  <!-- East India -->
  <div class="destination-grid" id="east" style="display:none;">
    <div class="destination-card large">
      <img src="image/westb.jpg" alt="West Bengal">
      <div class="card-text"><h3>West Bengal</h3><p>30+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/odisha.jpg" alt="Odisha">
      <div class="card-text"><h3>Odisha</h3><p>20+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/assam.jpg" alt="Assam">
      <div class="card-text"><h3>Assam</h3><p>25+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/sikkim.jpg" alt="Sikkim">
      <div class="card-text"><h3>Sikkim</h3><p>15+ Packages</p></div>
    </div>
  </div>

  <!-- West India -->
  <div class="destination-grid" id="west" style="display:none;">
    <div class="destination-card large">
      <img src="image/goa.jpg" alt="Goa">
      <div class="card-text"><h3>Goa</h3><p>50+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/gujarat.jpg" alt="Gujarat">
      <div class="card-text"><h3>Gujarat</h3><p>30+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/maharashtra.jpg" alt="Maharashtra">
      <div class="card-text"><h3>Maharashtra</h3><p>25+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/rajasthan.jpg" alt="Rajasthan">
      <div class="card-text"><h3>Rajasthan</h3><p>40+ Packages</p></div>
    </div>
  </div>

  <!-- Central India -->
  <div class="destination-grid" id="central" style="display:none;">
    <div class="destination-card large">
      <img src="image/madhya.jpg" alt="Madhya Pradesh">
      <div class="card-text"><h3>Madhya Pradesh</h3><p>35+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/chhattisgarh.jpg" alt="Chhattisgarh">
      <div class="card-text"><h3>Chhattisgarh</h3><p>15+ Packages</p></div>
    </div>
    <div class="destination-card">
      <img src="image/jharkhand.jpg" alt="Jharkhand">
      <div class="card-text"><h3>Jharkhand</h3><p>10+ Packages</p></div>
    </div>
  </div>
</section>






<!-- 4. Top Trending Destinations -->
<section class="trending">
  <div class="header">
    <h2>Top Trending<span> Destinations</span></h2>
    <a href="#">View All Tours <span>&#8250;</span></a>
  </div>

  <div class="slider-container">
    <div class="trending-wrapper">
      
      <div class="place-box">
        <div class="place-image">
          <img src="image/uk.jpg" alt="Uttarakhand">
        </div>
        <div class="place-content">
          <p>50+ Packages</p>
          <h3>Uttarakhand</h3>
        </div>
      </div>

      <div class="place-box">
        <div class="place-image">
          <img src="image/kerala.jpg" alt="Kerala">
        </div>
        <div class="place-content">
          <p>40+ Packages</p>
          <h3>Kerala</h3>
        </div>
      </div>

      <div class="place-box">
        <div class="place-image">
          <img src="image/Sikkim.jpg" alt="Sikkim">
        </div>
        <div class="place-content">
          <p>40+ Packages</p>
          <h3>Sikkim</h3>
        </div>
      </div>

      <div class="place-box">
        <div class="place-image">
          <img src="image/bhuttan.jpg" alt="Bhutan">
        </div>
        <div class="place-content">
          <p>20+ Packages</p>
          <h3>Bhutan</h3>
        </div>
      </div>

      <div class="place-box">
        <div class="place-image">
          <img src="image/thailand.jpg" alt="Thailand">
        </div>
        <div class="place-content">
          <p>10+ Packages</p>
          <h3>Thailand</h3>
        </div>
      </div>

    </div>
  </div>

  <div class="arrows">
    <button class="prev">&larr;</button>
    <button class="next">&rarr;</button>
  </div>
</section>




<!-- 5. Packages by Interest -->
<!-- 5. Packages by Interest -->
<section id="packages">
  <h2>Packages<span> By Interest</span></h2>

  <!-- Tabs -->
  <div class="interest-tabs">
    <button class="tab active" data-category="wildlife">Wildlife</button>
    <button class="tab" data-category="hill">Hill Station</button>
    <button class="tab" data-category="pilgrimage">Pilgrimage</button>
    <button class="tab" data-category="heritage">Heritage</button>
    <button class="tab" data-category="beach">Beach</button>
    <button class="tab" data-category="honeymoon">Honeymoon</button>
    <button class="tab" data-category="adventure">Adventure</button>
    <button class="tab" data-category="trekking">Trekking</button>
  </div>

  <!-- Package Grid -->
  <div class="package-grid">

    <!-- Wildlife (6+) -->
    <div class="package-card show" data-category="wildlife">
      <img src="image/tiger1.jpg" alt="India Tiger Tour">
      <div class="package-info"><h3>India Tiger Tour</h3><p>13 Nights - 14 Days</p></div>
    </div>
    <div class="package-card show" data-category="wildlife">
      <img src="image/tiger2.jpg" alt="Golden Triangle with Tigers">
      <div class="package-info"><h3>Golden Triangle with Tigers</h3><p>9 Nights - 10 Days</p></div>
    </div>
    <div class="package-card show" data-category="wildlife">
      <img src="image/tiger3.jpg" alt="Rhino & Tigers Tour">
      <div class="package-info"><h3>Rhino & Tigers Tour</h3><p>13 Nights - 14 Days</p></div>
    </div>
    <div class="package-card show" data-category="wildlife">
      <img src="image/tiger4.jpg" alt="Tiger Safari Expedition">
      <div class="package-info"><h3>Tiger Safari Expedition</h3><p>10 Nights - 11 Days</p></div>
    </div>
    <div class="package-card show" data-category="wildlife">
      <img src="image/tiger5.jpg" alt="Corbett Safari">
      <div class="package-info"><h3>Corbett Safari</h3><p>7 Nights - 8 Days</p></div>
    </div>
    <div class="package-card show" data-category="wildlife">
      <img src="image/tiger6.jpg" alt="MP Wildlife Safari">
      <div class="package-info"><h3>MP Wildlife Safari</h3><p>7 Nights - 8 Days</p></div>
    </div>

    <!-- Hill Station (6) -->
    <div class="package-card" data-category="hill">
      <img src="image/manali.jpg" alt="Manali Getaway">
      <div class="package-info"><h3>Manali Getaway</h3><p>5 Nights - 6 Days</p></div>
    </div>
    <div class="package-card" data-category="hill">
      <img src="image/shimla.jpg" alt="Shimla Retreat">
      <div class="package-info"><h3>Shimla Retreat</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="hill">
      <img src="image/darjeeling.webp" alt="Darjeeling Tea Tour">
      <div class="package-info"><h3>Darjeeling Tea Tour</h3><p>5 Nights - 6 Days</p></div>
    </div>
    <div class="package-card" data-category="hill">
      <img src="image/mussoorie.jpg" alt="Mussoorie Hills">
      <div class="package-info"><h3>Mussoorie Hills</h3><p>3 Nights - 4 Days</p></div>
    </div>
    <div class="package-card" data-category="hill">
      <img src="image/nainital.jpg" alt="Nainital Escape">
      <div class="package-info"><h3>Nainital Escape</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="hill">
      <img src="image/ooty.jpg" alt="Ooty Hill Retreat">
      <div class="package-info"><h3>Ooty Hill Retreat</h3><p>5 Nights - 6 Days</p></div>
    </div>

    <!-- Pilgrimage (6) -->
    <div class="package-card" data-category="pilgrimage">
      <img src="image/varanasi.jpeg" alt="Varanasi Spiritual Tour">
      <div class="package-info"><h3>Varanasi Spiritual Tour</h3><p>3 Nights - 4 Days</p></div>
    </div>
    <div class="package-card" data-category="pilgrimage">
      <img src="image/Kedarnath Yatra.webp" alt="Kedarnath Yatra">
      <div class="package-info"><h3>Kedarnath Yatra</h3><p>6 Nights - 7 Days</p></div>
    </div>
    <div class="package-card" data-category="pilgrimage">
      <img src="image/vaishno.jpg" alt="Vaishno Devi Pilgrimage">
      <div class="package-info"><h3>Vaishno Devi Pilgrimage</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="pilgrimage">
      <img src="image/rameshwaram.webp" alt="Rameshwaram Darshan">
      <div class="package-info"><h3>Rameshwaram Darshan</h3><p>5 Nights - 6 Days</p></div>
    </div>
    <div class="package-card" data-category="pilgrimage">
      <img src="image/ajmer.jpg" alt="Ajmer Sharif Visit">
      <div class="package-info"><h3>Ajmer Sharif Visit</h3><p>2 Nights - 3 Days</p></div>
    </div>
    <div class="package-card" data-category="pilgrimage">
      <img src="image/amritsar.webp" alt="Golden Temple Tour">
      <div class="package-info"><h3>Golden Temple Tour</h3><p>3 Nights - 4 Days</p></div>
    </div>

    <!-- Heritage (6) -->
    <div class="package-card" data-category="heritage">
      <img src="image/tajmahal.jpg" alt="Agra & Jaipur Heritage">
      <div class="package-info"><h3>Agra & Jaipur Heritage</h3><p>5 Nights - 6 Days</p></div>
    </div>
    <div class="package-card" data-category="heritage">
      <img src="image/hampi.jpg" alt="Hampi Historical Tour">
      <div class="package-info"><h3>Hampi Historical Tour</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="heritage">
      <img src="image/konark.jpg" alt="Konark Sun Temple Visit">
      <div class="package-info"><h3>Konark Sun Temple Visit</h3><p>3 Nights - 4 Days</p></div>
    </div>
    <div class="package-card" data-category="heritage">
      <img src="image/ellora.jpg" alt="Ellora & Ajanta Caves">
      <div class="package-info"><h3>Ellora & Ajanta Caves</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="heritage">
      <img src="image/khajuraho.jpg" alt="Khajuraho Heritage Tour">
      <div class="package-info"><h3>Khajuraho Heritage Tour</h3><p>3 Nights - 4 Days</p></div>
    </div>
    <div class="package-card" data-category="heritage">
      <img src="image/mysore.jpg" alt="Mysore Palace Tour">
      <div class="package-info"><h3>Mysore Palace Tour</h3><p>2 Nights - 3 Days</p></div>
    </div>

    <!-- Beach (6) -->
    <div class="package-card" data-category="beach">
      <img src="image/goa.jpg" alt="Goa Beach Fun">
      <div class="package-info"><h3>Goa Beach Fun</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="beach">
      <img src="image/andaman.jpg" alt="Andaman Paradise">
      <div class="package-info"><h3>Andaman Paradise</h3><p>6 Nights - 7 Days</p></div>
    </div>
    <div class="package-card" data-category="beach">
      <img src="image/lakshadweep.jpg" alt="Lakshadweep Islands">
      <div class="package-info"><h3>Lakshadweep Islands</h3><p>5 Nights - 6 Days</p></div>
    </div>
    <div class="package-card" data-category="beach">
      <img src="image/puri.jpg" alt="Puri Beach Holiday">
      <div class="package-info"><h3>Puri Beach Holiday</h3><p>3 Nights - 4 Days</p></div>
    </div>
    <div class="package-card" data-category="beach">
      <img src="image/kovalam.jpg" alt="Kovalam Beach Retreat">
      <div class="package-info"><h3>Kovalam Beach Retreat</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="beach">
      <img src="image/daman.jpg" alt="Daman & Diu Holiday">
      <div class="package-info"><h3>Daman & Diu Holiday</h3><p>3 Nights - 4 Days</p></div>
    </div>

    <!-- Honeymoon (6) -->
    <div class="package-card" data-category="honeymoon">
      <img src="image/maldives.jpeg" alt="Maldives Honeymoon">
      <div class="package-info"><h3>Maldives Honeymoon</h3><p>5 Nights - 6 Days</p></div>
    </div>
    <div class="package-card" data-category="honeymoon">
      <img src="image/kashmir.jpg" alt="Kashmir Romance">
      <div class="package-info"><h3>Kashmir Romance</h3><p>6 Nights - 7 Days</p></div>
    </div>
    <div class="package-card" data-category="honeymoon">
      <img src="image/shillong.jpg" alt="Shillong Bliss">
      <div class="package-info"><h3>Shillong Bliss</h3><p>5 Nights - 6 Days</p></div>
    </div>
    <div class="package-card" data-category="honeymoon">
      <img src="image/udaipur.jpg" alt="Udaipur Romantic Trip">
      <div class="package-info"><h3>Udaipur Romantic Trip</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="honeymoon">
      <img src="image/shimla.jpg" alt="Shimla Honeymoon">
      <div class="package-info"><h3>Shimla Honeymoon</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="honeymoon">
      <img src="image/munnar.jpg" alt="Munnar Honeymoon">
      <div class="package-info"><h3>Munnar Honeymoon</h3><p>5 Nights - 6 Days</p></div>
    </div>

    <!-- Adventure (6) -->
    <div class="package-card" data-category="adventure">
      <img src="image/rafting.jpg" alt="Rishikesh Rafting">
      <div class="package-info"><h3>Rishikesh Rafting</h3><p>3 Nights - 4 Days</p></div>
    </div>
    <div class="package-card" data-category="adventure">
      <img src="image/desert.webp" alt="Jaisalmer Desert Safari">
      <div class="package-info"><h3>Jaisalmer Desert Safari</h3><p>4 Nights - 5 Days</p></div>
    </div>
    <div class="package-card" data-category="adventure">
      <img src="image/bir.jpeg" alt="Bir Billing Paragliding">
      <div class="package-info"><h3>Bir Billing Paragliding</h3><p>2 Nights - 3 Days</p></div>
    </div>
    <div class="package-card" data-category="adventure">
      <img src="image/scuba.jpg" alt="Scuba Diving in Andaman">
      <div class="package-info"><h3>Scuba Diving in Andaman</h3><p>3 Nights - 4 Days</p></div>
    </div>
    <div class="package-card" data-category="adventure">
      <img src="image/skiing.jpg" alt="Skiing in Auli">
      <div class="package-info"><h3>Skiing in Auli</h3><p>5 Nights - 6 Days</p></div>
    </div>
    <div class="package-card" data-category="adventure">
      <img src="image/ladakh.jpg" alt="Ladakh Motorbike Trip">
      <div class="package-info"><h3>Ladakh Motorbike Trip</h3><p>7 Nights - 8 Days</p></div>
    </div>

    <!-- Trekking (6) -->
    <div class="package-card" data-category="trekking">
      <img src="image/roopkund.jpg" alt="Roopkund Trek">
      <div class="package-info"><h3>Roopkund Trek</h3><p>7 Nights - 8 Days</p></div>
    </div>
    <div class="package-card" data-category="trekking">
      <img src="image/kedarkantha.jpg" alt="Kedarkantha Trek">
      <div class="package-info"><h3>Kedarkantha Trek</h3><p>6 Nights - 7 Days</p></div>
    </div>
    <div class="package-card" data-category="trekking">
      <img src="image/himpta.webp" alt="Hampta Pass Trek">
      <div class="package-info"><h3>Hampta Pass Trek</h3><p>6 Nights - 7 Days</p></div>
    </div>
    <div class="package-card" data-category="trekking">
      <img src="image/valley.jpg" alt="Valley of Flowers Trek">
      <div class="package-info"><h3>Valley of Flowers Trek</h3><p>7 Nights - 8 Days</p></div>
    </div>
    <div class="package-card" data-category="trekking">
      <img src="image/sandakphu.jpg" alt="Sandakphu Trek">
      <div class="package-info"><h3>Sandakphu Trek</h3><p>8 Nights - 9 Days</p></div>
    </div>
    <div class="package-card" data-category="trekking">
      <img src="image/everest.jpg" alt="Everest Base Camp Trek">
      <div class="package-info"><h3>Everest Base Camp Trek</h3><p>12 Nights - 13 Days</p></div>
    </div>

  </div>
</section>


<!--  Feedback Section -->
<section class="feedback-section" id="feedback-section">
  <h2>Guest Satisfaction<span> is Our Goal</span></h2>
  
  <p class="subtitle">Valuable Feedback Matters to Us</p>

  <div class="tab-buttons">
    <button class="tab-btn active" data-tab="dham">Do Dham Yatra</button>
    <button class="tab-btn" data-tab="kashmir">Kashmir Ladakh Trip</button>
    <button class="tab-btn" data-tab="ranthambore">Ranthambore Visit</button>
    <button class="tab-btn" data-tab="all">View All</button>
  </div>

  <!-- Do Dham -->
  <div class="feedback-card active" id="dham">
    <div class="feedback-images">
      <img src="image/Yamunotri Temple.jpg" alt="Yamunotri Temple">
      <img src="image/Gangotri Temple.jpg" alt="Gangotri Temple">
    </div>
    <div class="feedback-text">
      <h4>Nice Experience!</h4>
      <p>
        Tour of Do Dham - Yamunotri & Gangotri for 7 days from 10.05.22 to 16.05.22.
        Overall arrangements were very good. Our Darshan of both Yamunotri & Gangotri was divine.
        Hotels were good and comfortable. Mr. Manavendra of Tour My India coordinated everything well
        and personally met us in Dehradun.
      </p>
      <p class="reviewer">– Chandrakant Gourimath</p>
      <p class="review-date">May 2022</p>
    </div>
  </div>

  <!-- Kashmir -->
  <div class="feedback-card" id="kashmir">
    <div class="feedback-images">
      <img src="image/Kashmir.jpg" alt="Kashmir">
      <img src="image/Ladakh.jpg" alt="Ladakh">
    </div>
    <div class="feedback-text">
      <h4>Magical Experience in Kashmir!</h4>
      <p>
        Our trip to Kashmir and Ladakh was nothing short of spectacular. The arrangements by Tour My India
        were smooth and hassle-free. The guides were knowledgeable and the views—absolutely breathtaking.
      </p>
      <p class="reviewer">– Meera Kapoor</p>
      <p class="review-date">June 2023</p>
    </div>
  </div>

  <!-- Ranthambore -->
  <div class="feedback-card" id="ranthambore">
    <div class="feedback-images">
      <img src="image/Ranthambore Safari.jpg" alt="Ranthambore Safari">
      <img src="image/Tiger Safari.jpg" alt="Tiger Safari">
    </div>
    <div class="feedback-text">
      <h4>A Thrilling Jungle Adventure!</h4>
      <p>
        Our Ranthambore visit was amazing! We got to see tigers in the wild, and our safari guide was excellent.
        The accommodations and transport were well-arranged. Highly recommend this trip!
      </p>
      <p class="reviewer">– Rahul Sharma</p>
      <p class="review-date">August 2023</p>
    </div>
  </div>

  <!-- All Feedback -->
  <div class="feedback-card" id="all">
    <div class="feedback-text center">
      <h4>See All Guest Stories</h4>
      <p>
        Explore hundreds of authentic experiences shared by our happy travelers.
        Each story reflects our commitment to making every journey special.
      </p>
      <button class="explore-btn">Read All Reviews</button>
    </div>
  </div>
</section>



<section class="choose-section">
  <h2>Why <span> Choose Us</span>?</h2>
  <p class="subtitle">Your Journey, Our Commitment</p>

  <div class="choose-grid">
    <div class="choose-card">
      <img src="image/expert-guide.png" alt="Expert Guidance">
      <h4>Expert Guidance</h4>
      <p>
        With years of experience in organizing pilgrimages and tours across India, our travel experts are well-versed in every destination we offer. 
        From route planning to on-ground coordination, we ensure that every part of your journey is handled with care and precision so you can focus on creating lifelong memories.
      </p>
    </div>

    <div class="choose-card">
      <img src="image/expert-guide.png" alt="Customized Itineraries">
      <h4>Customized Itineraries</h4>
      <p>
        We believe that no two travelers are alike. Our team listens to your preferences, budget, and travel style to design a personalized itinerary just for you. 
        Whether it’s a spiritual retreat, adventure escape, or family holiday, every tour plan is crafted to match your unique expectations and comfort level.
      </p>
    </div>

    <div class="choose-card">
      <img src="image/expert-guide.png" alt="24/7 Support">
      <h4>24/7 Customer Support</h4>
      <p>
        Travel with peace of mind knowing that our friendly support team is available around the clock. 
        From last-minute travel assistance to local guidance, we’re just a call or message away—ready to ensure your trip remains smooth, safe, and stress-free at every step.
      </p>
    </div>

    <div class="choose-card">
      <img src="image/expert-guide.png" alt="Trusted & Reliable">
      <h4>Trusted & Reliable</h4>
      <p>
        We are proud to have served thousands of satisfied travelers who continue to trust us for their spiritual and leisure journeys. 
        Our transparent policies, verified partnerships, and commitment to quality make us one of the most reliable travel service providers in the industry.
      </p>
    </div>
  </div>
</section>



<section class="about-section" id="about">
  <h2>About <span>Incredible India</span></h2>
  <div class="about-content">
    <div class="about-text">
      
      <p class="intro">
        India — a land of vibrant cultures, timeless traditions, and breathtaking landscapes. 
        From the snow-capped Himalayas to the golden deserts of Rajasthan, every corner tells a story of faith, history, and heritage.
      </p>

      <p>
        At <strong>Incredible India Travels</strong>, we are passionate about helping travelers discover the true spirit of this magnificent country. 
        Our carefully curated tours combine comfort, adventure, and cultural immersion — giving you experiences that stay with you forever.
      </p>

      <p>
        Whether you wish to explore the sacred temples of Uttarakhand, cruise through the backwaters of Kerala, 
        or witness the architectural wonders of North India, our expert team ensures a smooth, safe, and unforgettable journey. 
        We take care of everything — so you can travel freely and experience India’s incredible diversity at its finest.
      </p>

      <button class="about-btn">Discover More</button>
    </div>

    <div class="about-image">
      <img src="image/incredible-india.jpg" alt="Incredible India">
    </div>
  </div>
</section>


<section class="faq-section">
  <h2>Frequently <span> Asked Questions</span></h2>
  <p class="subtitle">Find answers to the most common travel queries</p>

  <div class="faq-container">
    <div class="faq-item">
      <button class="faq-question">1. How do I book a tour with Incredible India Travels?</button>
      <div class="faq-answer">
        <p>You can easily book a tour through our website’s booking form, by calling our travel consultants, or by sending us an email with your preferred destination and dates. We’ll guide you through the entire process and confirm your itinerary quickly.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">2. Are your tour packages customizable?</button>
      <div class="faq-answer">
        <p>Yes! All our travel packages are fully customizable. Whether you want to extend your stay, choose specific hotels, or include certain destinations, we’ll tailor the itinerary to your needs.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">3. What kind of support can I expect during the trip?</button>
      <div class="faq-answer">
        <p>We offer 24/7 customer assistance throughout your journey. Our on-ground support ensures you enjoy a seamless experience — from hotel check-ins to guided excursions and emergency assistance.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">4. Do you offer travel insurance?</button>
      <div class="faq-answer">
        <p>Yes, we recommend and help you arrange comprehensive travel insurance to cover medical emergencies, trip cancellations, and other unforeseen situations during your journey.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">5. What payment methods do you accept?</button>
      <div class="faq-answer">
        <p>We accept all major payment methods including credit/debit cards, bank transfers, UPI, and secure online gateways. Payment details are shared safely after confirmation.</p>
      </div>
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
    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
  </div>

  <p class="footer-copy">
    Copyright©2025, TRAILBLISS Pvt. Ltd
  </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script src="js/front.js"></script>
</body>
</html>
