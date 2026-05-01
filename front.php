<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trailbliss - Travel Website</title>
  <link rel="stylesheet" href="front1.css">
  <link rel="stylesheet" href="pop.css">
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <!-- Swiper CSS -->
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
  <style>
    /* =====================================================
   GUIDE SECTION
===================================================== */
.guide-section {
  padding: 70px 20px;
  background: #f4f7fb;
  font-family: Arial, sans-serif;
}

.section-title {
  text-align: center;
  font-size: 34px;
}

.section-title span {
  color: #ff4d4f;
}

.section-subtitle {
  text-align: center;
  color: #666;
  margin-bottom: 40px;
}

.guide-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
}

.guide-card {
  background: #fff;
  border-radius: 18px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
  transition: 0.3s ease;
}

.guide-card:hover {
  transform: translateY(-8px);
}

.badge-row {
  display: flex;
  justify-content: space-between;
  font-size: 12px;
  margin-bottom: 10px;
}

.verified {
  color: green;
  font-weight: bold;
}

.status {
  padding: 3px 10px;
  border-radius: 20px;
}

.available {
  background: #e6fff0;
  color: green;
}

.busy {
  background: #ffe6e6;
  color: red;
}

/* ⭐ CIRCLE IMAGE FIX */
.guide-avatar {
  display: flex;
  justify-content: center;
  margin-bottom: 15px;
}

.guide-avatar img {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border-radius: 50%;   /* 🔥 Circle shape */
  border: 4px solid #ff4d4f;
  padding: 3px;
  background: #fff;
}

.guide-info h3 {
  margin: 5px 0;
}

.role {
  color: #777;
  font-size: 14px;
}

.rating {
  color: #f5b50a;
  margin: 8px 0;
}

.meta {
  font-size: 13px;
  color: #555;
  margin: 4px 0;
}

.guide-actions {
  margin-top: 15px;
  display: flex;
  gap: 8px;
  justify-content: center;
}

.btn {
  padding: 8px 12px;
  border-radius: 8px;
  font-size: 13px;
  text-decoration: none;
  color: #fff;
}

.call { background: #2ecc71; }
.whatsapp { background: #25d366; }
.disabled {
  background: #ccc;
  pointer-events: none;
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
      <li><a href="#guide-section">Guiders</a></li>
      <li><a href="#about">About</a></li>      
      <li><a href="#feedback-section">Reviews</a></li>
      <li><a href="#faq-section">FAQ</a></li>
      <li><button id="openQuote" class="planTripBtn">Book Your Trip</button>
</li>

    </ul>
  </nav>
</header>


  <!-- Hero Section -->
  <section class="hero" id="hero">
  <!-- Left Swiper -->
 <div class="hero-left swiper mySwiper">
  <div class="swiper-wrapper">

    <a href="chardham.php" class="swiper-slide">
      <img src="image/chardham yatra.jpg" alt="Chardham Yatra" />
      <div class="slide-text">
        <h2>Chardham Yatra Package 2025</h2>
        <p>11 Nights - 12 Days</p>
      </div>
    </a>

    <a href="goa-tour.php" class="swiper-slide">
      <img src="image/goa.jpg" alt="Goa Beach Holiday" />
      <div class="slide-text">
        <h2>Goa Beach Holiday</h2>
        <p>5 Nights - 6 Days</p>
      </div>
    </a>

    <a href="leh.php" class="swiper-slide">
      <img src="image/leh ladakh.jpeg" alt="Leh Ladakh" />
      <div class="slide-text">
        <h2>Leh Ladakh Tours</h2>
        <p>10 Nights - 11 Days</p>
      </div>
    </a>

    <a href="sikkim.php" class="swiper-slide">
      <img src="image/Sikkim.jpg" alt="Sikkim Holiday" />
      <div class="slide-text">
        <h2>Sikkim Holiday</h2>
        <p>5 Nights - 6 Days</p>
      </div>
    </a>

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
  <a href="wildlife.php" class="category-card">
    <img src="image/wildlife.jpg" alt="Wildlife Safari" />
    <h3>Wildlife</h3>
    <p>70+ Packages</p>
  </a>

  
  <a href="heritage.php" class="category-card">
    <img
      src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e"
      alt="Indian Heritage"/>
    <h3>Heritage</h3>
    <p>25+ Packages</p>
  </a>

  <a href="trekking.php" class="category-card">
    <img
      src="https://images.unsplash.com/photo-1501785888041-af3ef285b470"
      alt="Mountain Trekking"
    />
    <h3>Trekking</h3>
    <p>70+ Packages</p>
  </a>

  <!-- Hill Stations -->
  <a href="hill-stations.php" class="category-card">
    <img src="image/hill.jpg" alt="Hill Stations" />
    <h3>Hill Stations</h3>
    <p>75+ Packages</p>
  </a>

  <!-- Beach Tour -->
  <a href="beach.php" class="category-card">
    <img src="image/bt.jpg" alt="Beach Tour" />
    <h3>Beach Tour</h3>
    <p>20+ Packages</p>
  </a>

  <!-- Pilgrimage -->
  <a href="pilgrimage.php" class="category-card">
    <img src="image/pilgrimage.jpg" alt="Pilgrimage" />
    <h3>Pilgrimage</h3>
    <p>50+ Packages</p>
  </a>

</div>


  </div>
</section>


<!-- 3. Destinations Section -->
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

  <a href="uttarakhand.php" class="destination-card large">
    <img src="image/uttarakhand.jpg" alt="Uttarakhand">
    <div class="card-text">
      <h3>Uttarakhand</h3>
      <p>50+ Packages</p>
    </div>
  </a>

  <a href="rajasthan.php" class="destination-card">
    <img src="image/rajasthan.jpg" alt="Rajasthan">
    <div class="card-text">
      <h3>Rajasthan</h3>
      <p>30+ Packages</p>
    </div>
  </a>

  <a href="himachal.php" class="destination-card">
    <img src="image/himachal.jpg" alt="Himachal">
    <div class="card-text">
      <h3>Himachal</h3>
      <p>60+ Packages</p>
    </div>
  </a>

  <a href="uttarpradesh.php" class="destination-card">
    <img src="image/up.jpg" alt="Uttar Pradesh">
    <div class="card-text">
      <h3>Uttar Pradesh</h3>
      <p>25+ Packages</p>
    </div>
  </a>

  <a href="delhi.php" class="destination-card">
    <img src="image/delhi.jpg" alt="Delhi">
    <div class="card-text">
      <h3>Delhi</h3>
      <p>20+ Packages</p>
    </div>
  </a>

  <a href="punjab.php" class="destination-card">
    <img src="image/punjab.jpg" alt="Punjab">
    <div class="card-text">
      <h3>Punjab</h3>
      <p>15+ Packages</p>
    </div>
  </a>

</div>


  <!-- South India -->
  <div class="destination-grid" id="south" style="display:none;">
    <a href="kerala.php" class="destination-card large">
      <img src="image/kerala.jpg" alt="Kerala">
      <div class="card-text"><h3>Kerala</h3><p>40+ Packages</p></div>
    </a>
    <a href="tamilnadu.php" class="destination-card">
      <img src="image/tamil.jpg" alt="Tamil Nadu">
      <div class="card-text"><h3>Tamil Nadu</h3><p>35+ Packages</p></div>
    </a>
    <a href="karnataka.php" class="destination-card">
      <img src="image/karnatak.jpg" alt="Karnataka">
      <div class="card-text"><h3>Karnataka</h3><p>30+ Packages</p></div>
    </a>
    <a href="andhra.php" class="destination-card">
      <img src="image/andhra.jpg" alt="Andhra Pradesh">
      <div class="card-text"><h3>Andhra Pradesh</h3><p>20+ Packages</p></div>
    </a>
    <a href="telangana.php" class="destination-card">
      <img src="image/telangana.jpg" alt="Telangana">
      <div class="card-text"><h3>Telangana</h3><p>15+ Packages</p></div>
    </a>
</div>


  <!-- East India -->
  <div class="destination-grid" id="east" style="display:none;">
    
    <div class="destination-card large">
      <a href="west-bengal.php">
        <img src="image/westb.jpg" alt="West Bengal">
        <div class="card-text"><h3>West Bengal</h3><p>30+ Packages</p></div>
      </a>
    </div>

    <div class="destination-card">
      <a href="odisha.php">
        <img src="image/odisha.jpg" alt="Odisha">
        <div class="card-text"><h3>Odisha</h3><p>20+ Packages</p></div>
      </a>
    </div>

    <div class="destination-card">
      <a href="assam.php">
        <img src="image/assam.jpg" alt="Assam">
        <div class="card-text"><h3>Assam</h3><p>25+ Packages</p></div>
      </a>
    </div>

    <div class="destination-card">
      <a href="sikkim.php">
        <img src="image/sikkim.jpg" alt="Sikkim">
        <div class="card-text"><h3>Sikkim</h3><p>15+ Packages</p></div>
      </a>
    </div>

</div>


  <!-- West India -->
  <div class="destination-grid" id="west" style="display:none;">

    <div class="destination-card large">
      <a href="goa-tour.php">
        <img src="image/goa.jpg" alt="Goa">
        <div class="card-text"><h3>Goa</h3><p>50+ Packages</p></div>
      </a>
    </div>

    <div class="destination-card">
      <a href="gujarat.php">
        <img src="image/gujarat.jpg" alt="Gujarat">
        <div class="card-text"><h3>Gujarat</h3><p>30+ Packages</p></div>
      </a>
    </div>

    <div class="destination-card">
      <a href="maharashtra.php">
        <img src="image/maharashtra.jpg" alt="Maharashtra">
        <div class="card-text"><h3>Maharashtra</h3><p>25+ Packages</p></div>
      </a>
    </div>

    <div class="destination-card">
      <a href="rajasthan.php">
        <img src="image/rajasthan.jpg" alt="Rajasthan">
        <div class="card-text"><h3>Rajasthan</h3><p>40+ Packages</p></div>
      </a>
    </div>

</div>


  <!-- Central India -->
  <div class="destination-grid" id="central" style="display:none;">

  <a href="madhya-pradesh.php" class="destination-card large">
    <img src="image/madhya.jpg" alt="Madhya Pradesh">
    <div class="card-text"><h3>Madhya Pradesh</h3><p>35+ Packages</p></div>
  </a>

  <a href="chhattisgarh.php" class="destination-card">
    <img src="image/chhattisgarh.jpg" alt="Chhattisgarh">
    <div class="card-text"><h3>Chhattisgarh</h3><p>15+ Packages</p></div>
  </a>

  <a href="jharkhand.php" class="destination-card">
    <img src="image/jharkhand.jpg" alt="Jharkhand">
    <div class="card-text"><h3>Jharkhand</h3><p>10+ Packages</p></div>
  </a>

</div>

</section>


<!-- International Destinations Section -->
<section class="destinations" id="international">
  <h2>Explore Top<span> International Destinations</span></h2>

  <!-- Tabs -->
  <div class="tabs">
    <button class="tab active" data-region="america">America</button>
    <button class="tab" data-region="europe">Europe</button>
    <button class="tab" data-region="asia">Asia</button>
    <button class="tab" data-region="middleeast">Middle East</button>
    <button class="tab" data-region="oceania">Oceania</button>
  </div>

<!-- America -->
<div class="destination-grid" id="america">
  
  <a href="newyork.php" class="destination-card large">
    <img src="image/ny0.jpg" alt="New York">
    <div class="card-text">
      <h3>New York</h3>
      <p>45+ Packages</p>
    </div>
  </a>

  <a href="losangeles.php" class="destination-card">
    <img src="image/lg0.jpg" alt="Los Angeles">
    <div class="card-text">
      <h3>Los Angeles</h3>
      <p>30+ Packages</p>
    </div>
  </a>

  <a href="lasvegas.php" class="destination-card">
    <img src="image/lv0.jpg" alt="Las Vegas">
    <div class="card-text">
      <h3>Las Vegas</h3>
      <p>28+ Packages</p>
    </div>
  </a>

  <a href="miami.php" class="destination-card">
    <img src="image/mi0.jpg" alt="Miami">
    <div class="card-text">
      <h3>Miami</h3>
      <p>25+ Packages</p>
    </div>
  </a>

  <a href="sanfrancisco.php" class="destination-card">
    <img src="image/s0.jpg" alt="San Francisco">
    <div class="card-text">
      <h3>San Francisco</h3>
      <p>22+ Packages</p>
    </div>
  </a>

</div>

<!-- Europe -->
<div class="destination-grid" id="europe" style="display:none;">

  <a href="paris.php" class="destination-card large">
    <img src="image/pa0.jpg" alt="Paris">
    <div class="card-text">
      <h3>Paris</h3>
      <p>40+ Packages</p>
    </div>
  </a>

  <a href="london.php" class="destination-card">
    <img src="image/london0.jpg" alt="London">
    <div class="card-text">
      <h3>London</h3>
      <p>35+ Packages</p>
    </div>
  </a>

  <a href="rome.php" class="destination-card">
    <img src="image/rome0.jpg" alt="Rome">
    <div class="card-text">
      <h3>Rome</h3>
      <p>28+ Packages</p>
    </div>
  </a>

  <a href="santorini.php" class="destination-card">
    <img src="image/greece0.jpg" alt="Santorini">
    <div class="card-text">
      <h3>Santorini</h3>
      <p>24+ Packages</p>
    </div>
  </a>

  <a href="switzerland.php" class="destination-card">
    <img src="image/sw0.jpg" alt="Switzerland">
    <div class="card-text">
      <h3>Switzerland</h3>
      <p>30+ Packages</p>
    </div>
  </a>

</div>


<!-- Asia -->
<div class="destination-grid" id="asia" style="display:none;">

  <a href="dubai.php" class="destination-card large">
    <img src="image/dubai.jpg" alt="Dubai">
    <div class="card-text">
      <h3>Dubai</h3>
      <p>45+ Packages</p>
    </div>
  </a>

  <a href="th.php" class="destination-card">
    <img src="image/thailand.jpg" alt="Thailand">
    <div class="card-text">
      <h3>Thailand</h3>
      <p>38+ Packages</p>
    </div>
  </a>

  <a href="singapore.php" class="destination-card">
    <img src="image/singapore.jpg" alt="Singapore">
    <div class="card-text">
      <h3>Singapore</h3>
      <p>25+ Packages</p>
    </div>
  </a>

  <a href="malaysia.php" class="destination-card">
    <img src="image/malaysia.jpg" alt="Malaysia">
    <div class="card-text">
      <h3>Malaysia</h3>
      <p>20+ Packages</p>
    </div>
  </a>

  <a href="bali.php" class="destination-card">
    <img src="image/bali.jpg" alt="Bali">
    <div class="card-text">
      <h3>Bali</h3>
      <p>30+ Packages</p>
    </div>
  </a>

</div>


<!-- Middle East -->
<div class="destination-grid" id="middleeast" style="display:none;">

  <a href="dubai.php" class="destination-card large">
    <img src="image/dubai.jpg" alt="Dubai">
    <div class="card-text">
      <h3>Dubai</h3>
      <p>40+ Packages</p>
    </div>
  </a>

  <a href="abudhabi.php" class="destination-card">
    <img src="image/abudhabi.jpg" alt="Abu Dhabi">
    <div class="card-text">
      <h3>Abu Dhabi</h3>
      <p>25+ Packages</p>
    </div>
  </a>

  <a href="doha.php" class="destination-card">
    <img src="image/qatar.jpg" alt="Qatar">
    <div class="card-text">
      <h3>Doha</h3>
      <p>18+ Packages</p>
    </div>
  </a>

  <a href="muscat.php" class="destination-card">
    <img src="image/oman.jpg" alt="Oman">
    <div class="card-text">
      <h3>Muscat</h3>
      <p>15+ Packages</p>
    </div>
  </a>

</div>


<!-- Oceania -->
<div class="destination-grid" id="oceania" style="display:none;">

  <a href="sydney.php" class="destination-card large">
    <img src="image/sydney.jpg" alt="Sydney">
    <div class="card-text">
      <h3>Sydney</h3>
      <p>35+ Packages</p>
    </div>
  </a>

  <a href="melbourne.php" class="destination-card">
    <img src="image/melbourne.jpg" alt="Melbourne">
    <div class="card-text">
      <h3>Melbourne</h3>
      <p>28+ Packages</p>
    </div>
  </a>

  <a href="goldcoast.php" class="destination-card">
    <img src="image/goldcoast.jpg" alt="Gold Coast">
    <div class="card-text">
      <h3>Gold Coast</h3>
      <p>22+ Packages</p>
    </div>
  </a>

  <a href="newzealand.php" class="destination-card">
    <img src="image/newzealand.jpg" alt="New Zealand">
    <div class="card-text">
      <h3>Auckland</h3>
      <p>20+ Packages</p>
    </div>
  </a>

</div>

</section>



<!-- 4. Top Trending Destinations -->
<section class="trending">
  <div class="header">
    <h2>Top Trending<span> Destinations</span></h2>
    <a href="viewtour.php">View All Tours <span>&#8250;</span></a>
  </div>

  <div class="slider-container">
    <div class="trending-wrapper">
      
      <a href="uttarakhand.php" class="place-box">
        <div class="place-image">
          <img src="image/uk.jpg" alt="Uttarakhand">
        </div>
        <div class="place-content">
          <p>50+ Packages</p>
          <h3>Uttarakhand</h3>
        </div>
      </a>

      <a href="kerala.php" class="place-box">
        <div class="place-image">
          <img src="image/kerala.jpg" alt="Kerala">
        </div>
        <div class="place-content">
          <p>40+ Packages</p>
          <h3>Kerala</h3>
        </div>
      </a>

      <a href="sikkim.php" class="place-box">
        <div class="place-image">
          <img src="image/Sikkim.jpg" alt="Sikkim">
        </div>
        <div class="place-content">
          <p>40+ Packages</p>
          <h3>Sikkim</h3>
        </div>
      </a>

      <a href="bhutan.php" class="place-box">
        <div class="place-image">
          <img src="image/bhuttan.jpg" alt="Bhutan">
        </div>
        <div class="place-content">
          <p>20+ Packages</p>
          <h3>Bhutan</h3>
        </div>
      </a>

      <a href="thailand.php" class="place-box">
        <div class="place-image">
          <img src="image/thailand.jpg" alt="Thailand">
        </div>
        <div class="place-content">
          <p>10+ Packages</p>
          <h3>Thailand</h3>
        </div>
      </a>

    </div>
  </div>

  <div class="arrows">
    <button class="prev">&larr;</button>
    <button class="next">&rarr;</button>
  </div>
</section>


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
    <a href="wildlife.php" class="package-card show" data-category="wildlife">
  <img src="image/tiger1.jpg" alt="India Tiger Tour">
  <div class="package-info"><h3>India Tiger Tour</h3><p>13 Nights - 14 Days</p></div>
</a>

<a href="GoldenT.php" class="package-card show" data-category="wildlife">
  <img src="image/tiger2.jpg" alt="Golden Triangle with Tigers">
  <div class="package-info"><h3>Golden Triangle with Tigers</h3><p>9 Nights - 10 Days</p></div>
</a>

<a href="rhino-tigers.php" class="package-card show" data-category="wildlife">
  <img src="image/tiger3.jpg" alt="Rhino & Tigers Tour">
  <div class="package-info"><h3>Rhino & Tigers Tour</h3><p>13 Nights - 14 Days</p></div>
</a>

<a href="tiger-safari.php" class="package-card show" data-category="wildlife">
  <img src="image/tiger4.jpg" alt="Tiger Safari Expedition">
  <div class="package-info"><h3>Tiger Safari Expedition</h3><p>10 Nights - 11 Days</p></div>
</a>

<a href="corbett-safari.php" class="package-card show" data-category="wildlife">
  <img src="image/tiger5.jpg" alt="Corbett Safari">
  <div class="package-info"><h3>Corbett Safari</h3><p>7 Nights - 8 Days</p></div>
</a>

<a href="mp-wildlife.php" class="package-card show" data-category="wildlife">
  <img src="image/tiger6.jpg" alt="MP Wildlife Safari">
  <div class="package-info"><h3>MP Wildlife Safari</h3><p>7 Nights - 8 Days</p></div>
</a>

<!-- Hill Station (6) -->
  <a href="hill-stations.php" class="package-card" data-category="hill">
  <img src="image/manali.jpg" alt="Manali Getaway">
  <div class="package-info"><h3>Manali Getaway</h3><p>5 Nights - 6 Days</p></div>
</a>

<a href="shimla.php" class="package-card" data-category="hill">
  <img src="image/shimla.jpg" alt="Shimla Retreat">
  <div class="package-info"><h3>Shimla Retreat</h3><p>4 Nights - 5 Days</p></div>
</a>

<a href="Darjeeling.php" class="package-card" data-category="hill">
  <img src="image/darjeeling.webp" alt="Darjeeling Tea Tour">
  <div class="package-info"><h3>Darjeeling Tea Tour</h3><p>5 Nights - 6 Days</p></div>
</a>

<a href="mussoorie.php" class="package-card" data-category="hill">
  <img src="image/mussoorie.jpg" alt="Mussoorie Hills">
  <div class="package-info"><h3>Mussoorie Hills</h3><p>3 Nights - 4 Days</p></div>
</a>

<a href="nainital.php" class="package-card" data-category="hill">
  <img src="image/nainital.jpg" alt="Nainital Escape">
  <div class="package-info"><h3>Nainital Escape</h3><p>4 Nights - 5 Days</p></div>
</a>

<a href="ooty.php" class="package-card" data-category="hill">
  <img src="image/ooty.jpg" alt="Ooty Hill Retreat">
  <div class="package-info"><h3>Ooty Hill Retreat</h3><p>5 Nights - 6 Days</p></div>
</a>

    <!-- Pilgrimage (6) -->
    <a href="pilgrimage.php" class="package-card" data-category="pilgrimage">
  <img src="image/varanasi.jpeg" alt="Varanasi Spiritual Tour">
  <div class="package-info"><h3>Varanasi Spiritual Tour</h3><p>3 Nights - 4 Days</p></div>
</a>

<a href="Kedarnath.php" class="package-card" data-category="pilgrimage">
  <img src="image/Kedarnath Yatra.webp" alt="Kedarnath Yatra">
  <div class="package-info"><h3>Kedarnath Yatra</h3><p>6 Nights - 7 Days</p></div>
</a>

<a href="vaishno.php" class="package-card" data-category="pilgrimage">
  <img src="image/vaishno.jpg" alt="Vaishno Devi Pilgrimage">
  <div class="package-info"><h3>Vaishno Devi Pilgrimage</h3><p>4 Nights - 5 Days</p></div>
</a>

<a href="rameshwaram.php" class="package-card" data-category="pilgrimage">
  <img src="image/rameshwaram.webp" alt="Rameshwaram Darshan">
  <div class="package-info"><h3>Rameshwaram Darshan</h3><p>5 Nights - 6 Days</p></div>
</a>

<a href="ajmer.php" class="package-card" data-category="pilgrimage">
  <img src="image/ajmer.jpg" alt="Ajmer Sharif Visit">
  <div class="package-info"><h3>Ajmer Sharif Visit</h3><p>2 Nights - 3 Days</p></div>
</a>

<a href="amritsar.php" class="package-card" data-category="pilgrimage">
  <img src="image/amritsar.webp" alt="Golden Temple Tour">
  <div class="package-info"><h3>Golden Temple Tour</h3><p>3 Nights - 4 Days</p></div>
</a>

    <!-- Heritage (6) -->
     <a href="tajmaha.php">
    <div class="package-card" data-category="heritage">
      <img src="image/tajmahal.jpg" alt="Agra & Jaipur Heritage">
      <div class="package-info"><h3>Agra & Jaipur Heritage</h3><p>5 Nights - 6 Days</p></div>
    </div>
    </a>
    <a href="heritage.php">
    <div class="package-card" data-category="heritage">
      <img src="image/hampi.jpg" alt="Hampi Historical Tour">
      <div class="package-info"><h3>Hampi Historical Tour</h3><p>4 Nights - 5 Days</p></div>
    </div>
    </a>
    <a href="konark.php">
    <div class="package-card" data-category="heritage">
      <img src="image/konark.jpg" alt="Konark Sun Temple Visit">
      <div class="package-info"><h3>Konark Sun Temple Visit</h3><p>3 Nights - 4 Days</p></div>
    </div></a>
    <a href="ellora.php">
    <div class="package-card" data-category="heritage">
      <img src="image/ellora.jpg" alt="Ellora & Ajanta Caves">
      <div class="package-info"><h3>Ellora & Ajanta Caves</h3><p>4 Nights - 5 Days</p></div>
    </div></a>
    <a href="khajuraho.php">
    <div class="package-card" data-category="heritage">
      <img src="image/khajuraho.jpg" alt="Khajuraho Heritage Tour">
      <div class="package-info"><h3>Khajuraho Heritage Tour</h3><p>3 Nights - 4 Days</p></div>
    </div></a>
    <a href="mysore.php">
    <div class="package-card" data-category="heritage">
      <img src="image/mysore1.jpg" alt="Mysore Palace Tour">
      <div class="package-info"><h3>Mysore Palace Tour</h3><p>2 Nights - 3 Days</p></div>
    </div></a>

    <!-- Beach (6) -->
    <a href="goa-tour.php" class="package-card" data-category="beach">
  <img src="image/goa.jpg" alt="Goa Beach Fun">
  <div class="package-info"><h3>Goa Beach Fun</h3><p>4 Nights - 5 Days</p></div>
</a>

<a href="andaman.php" class="package-card" data-category="beach">
  <img src="image/andaman.jpg" alt="Andaman Paradise">
  <div class="package-info"><h3>Andaman Paradise</h3><p>6 Nights - 7 Days</p></div>
</a>

<a href="lakshadweep.php" class="package-card" data-category="beach">
  <img src="image/lakshadweep.jpg" alt="Lakshadweep Islands">
  <div class="package-info"><h3>Lakshadweep Islands</h3><p>5 Nights - 6 Days</p></div>
</a>

<a href="puri.php" class="package-card" data-category="beach">
  <img src="image/puri.jpg" alt="Puri Beach Holiday">
  <div class="package-info"><h3>Puri Beach Holiday</h3><p>3 Nights - 4 Days</p></div>
</a>

<a href="kovalam.php" class="package-card" data-category="beach">
  <img src="image/kovalam.jpg" alt="Kovalam Beach Retreat">
  <div class="package-info"><h3>Kovalam Beach Retreat</h3><p>4 Nights - 5 Days</p></div>
</a>

<a href="daman.php" class="package-card" data-category="beach">
  <img src="image/daman.jpg" alt="Daman & Diu Holiday">
  <div class="package-info"><h3>Daman & Diu Holiday</h3><p>3 Nights - 4 Days</p></div>
</a>

    <!-- Honeymoon (6) -->
    <a href="maldives.php" class="package-card" data-category="honeymoon">
  <img src="image/maldives.jpeg" alt="Maldives Honeymoon">
  <div class="package-info"><h3>Maldives Honeymoon</h3><p>5 Nights - 6 Days</p></div>
</a>

<a href="kashmir.php" class="package-card" data-category="honeymoon">
  <img src="image/ka7.jpg" alt="Kashmir Romance">
  <div class="package-info"><h3>Kashmir Romance</h3><p>6 Nights - 7 Days</p></div>
</a>

<a href="shillong.php" class="package-card" data-category="honeymoon">
  <img src="image/shillong.jpg" alt="Shillong Bliss">
  <div class="package-info"><h3>Shillong Bliss</h3><p>5 Nights - 6 Days</p></div>
</a>

<a href="udaipur.php" class="package-card" data-category="honeymoon">
  <img src="image/udaipur.jpg" alt="Udaipur Romantic Trip">
  <div class="package-info"><h3>Udaipur Romantic Trip</h3><p>4 Nights - 5 Days</p></div>
</a>

<a href="shimla.php" class="package-card" data-category="honeymoon">
  <img src="image/shimla.jpg" alt="Shimla Honeymoon">
  <div class="package-info"><h3>Shimla Honeymoon</h3><p>4 Nights - 5 Days</p></div>
</a>

<a href="munnar.php" class="package-card" data-category="honeymoon">
  <img src="image/munnar.jpg" alt="Munnar Honeymoon">
  <div class="package-info"><h3>Munnar Honeymoon</h3><p>5 Nights - 6 Days</p></div>
</a>

    <!-- Adventure (6) -->
    <a href="adventure.php" class="package-card" data-category="adventure">
  <img src="image/rafting.jpg" alt="Rishikesh Rafting">
  <div class="package-info"><h3>Rishikesh Rafting</h3><p>3 Nights - 4 Days</p></div>
</a>

<a href="desert.php" class="package-card" data-category="adventure">
  <img src="image/desert.webp" alt="Jaisalmer Desert Safari">
  <div class="package-info"><h3>Jaisalmer Desert Safari</h3><p>4 Nights - 5 Days</p></div>
</a>

<a href="bir.php" class="package-card" data-category="adventure">
  <img src="image/bir.jpeg" alt="Bir Billing Paragliding">
  <div class="package-info"><h3>Bir Billing Paragliding</h3><p>2 Nights - 3 Days</p></div>
</a>

<a href="scuba.php" class="package-card" data-category="adventure">
  <img src="image/scuba.jpg" alt="Scuba Diving in Andaman">
  <div class="package-info"><h3>Scuba Diving in Andaman</h3><p>3 Nights - 4 Days</p></div>
</a>

<a href="skiing.php" class="package-card" data-category="adventure">
  <img src="image/skiing.jpg" alt="Skiing in Auli">
  <div class="package-info"><h3>Skiing in Auli</h3><p>5 Nights - 6 Days</p></div>
</a>

<a href="leh.php" class="package-card" data-category="adventure">
  <img src="image/ladakh.jpg" alt="Ladakh Motorbike Trip">
  <div class="package-info"><h3>Ladakh Motorbike Trip</h3><p>7 Nights - 8 Days</p></div>
</a>

    <!-- Trekking (6) -->
    <a href="trekking.php" class="package-card" data-category="trekking">
  <img src="image/roopkund.jpg" alt="Roopkund Trek">
  <div class="package-info"><h3>Roopkund Trek</h3><p>7 Nights - 8 Days</p></div>
</a>

<a href="kedarkantha.php" class="package-card" data-category="trekking">
  <img src="image/kedarkantha.jpg" alt="Kedarkantha Trek">
  <div class="package-info"><h3>Kedarkantha Trek</h3><p>6 Nights - 7 Days</p></div>
</a>

<a href="himpta.php" class="package-card" data-category="trekking">
  <img src="image/himpta.webp" alt="Hampta Pass Trek">
  <div class="package-info"><h3>Hampta Pass Trek</h3><p>6 Nights - 7 Days</p></div>
</a>

<a href="valley.php" class="package-card" data-category="trekking">
  <img src="image/valley.jpg" alt="Valley of Flowers Trek">
  <div class="package-info"><h3>Valley of Flowers Trek</h3><p>7 Nights - 8 Days</p></div>
</a>

<a href="sandakphu.php" class="package-card" data-category="trekking">
  <img src="image/sandakphu.jpg" alt="Sandakphu Trek">
  <div class="package-info"><h3>Sandakphu Trek</h3><p>8 Nights - 9 Days</p></div>
</a>

<a href="everest.php" class="package-card" data-category="trekking">
  <img src="image/everest.jpg" alt="Everest Base Camp Trek">
  <div class="package-info"><h3>Everest Base Camp Trek</h3><p>12 Nights - 13 Days</p></div>
</a>

  </div>
</section>

 
<!-- 6. Tour Guiders -->
<!-- Tour Guides Section -->
<section class="guide-section" id="guide-section">

  <h2 class="section-title">Meet Our <span>Expert Tour Guides</span></h2>
  <p class="section-subtitle">
    Certified local experts who make your journey safe, memorable and full of experiences.
  </p>

  <div class="guide-grid">

    <!-- GUIDE 1 -->
    <div class="guide-card">

      <div class="badge-row">
        <span class="verified">✔ Verified</span>
        <span class="status available">Available</span>
      </div>

      <div class="guide-avatar">
        <img src="image/guide1.jpg" alt="Rohit Sharma">
      </div>

      <div class="guide-info">
        <h3>Rohit Sharma</h3>
        <p class="role">Senior Tour Guide</p>

        <div class="rating">★★★★★ <span>(4.9)</span></div>

        <p class="meta"><strong>Languages:</strong> Hindi, English, French, ਪੰਜਾਬੀ</p>
        <p class="meta"><strong>Experience:</strong> 8+ Years</p>
      </div>

      <div class="guide-actions">
        <a href="tel:+919812737425" class="btn call">
  📞 Call 
</a>
        <a href="https://wa.me/919812737425" target="_blank" class="btn whatsapp">WhatsApp</a>
      </div>

    </div>

    <!-- GUIDE 2 -->
    <div class="guide-card">

      <div class="badge-row">
        <span class="verified">✔ Verified</span>
        <span class="status busy">Busy</span>
      </div>

      <div class="guide-avatar">
        <img src="image/guide2.jpg" alt="Anjali Verma">
      </div>

      <div class="guide-info">
        <h3>Anjali Verma</h3>
        <p class="role">Travel Expert</p>

        <div class="rating">★★★★☆ <span>(4.6)</span></div>

        <p class="meta"><strong>Languages:</strong> Hindi, English, ਪੰਜਾਬੀ</p>
        <p class="meta"><strong>Experience:</strong> 6+ Years</p>
      </div>

      <div class="guide-actions">
        <a href="#" class="btn disabled">Unavailable</a>
        <a href="https://wa.me/919876543210" target="_blank" class="btn whatsapp">WhatsApp</a>
      </div>

    </div>

    <!-- GUIDE 3 -->
    <div class="guide-card">

      <div class="badge-row">
        <span class="verified">✔ Verified</span>
        <span class="status available">Available</span>
      </div>

      <div class="guide-avatar">
        <img src="image/guide3.jpg" alt="Arjun Singh">
      </div>

      <div class="guide-info">
        <h3>Arjun Singh</h3>
        <p class="role">Adventure Guide</p>

        <div class="rating">★★★★★ <span>(5.0)</span></div>

        <p class="meta"><strong>Languages:</strong> Hindi, English</p>
        <p class="meta"><strong>Experience:</strong> 10+ Years</p>
      </div>

      <div class="guide-actions">
        <a href="tel:+919812737425" class="btn call">
  📞 Call 
</a>
        <a href="https://wa.me/919998887776" target="_blank" class="btn whatsapp">WhatsApp</a>
      </div>

    </div>

    <!-- GUIDE 4 -->
    <div class="guide-card">

      <div class="badge-row">
        <span class="verified">✔ Verified</span>
        <span class="status busy">Busy</span>
      </div>

      <div class="guide-avatar">
        <img src="image/guide5.jpg" alt="Priya Kapoor">
      </div>

      <div class="guide-info">
        <h3>Priya Kapoor</h3>
        <p class="role">Cultural Guide</p>

        <div class="rating">★★★★☆ <span>(4.7)</span></div>

        <p class="meta"><strong>Languages:</strong> Hindi, English, Spanish</p>
        <p class="meta"><strong>Experience:</strong> 7+ Years</p>
      </div>

      <div class="guide-actions">
        <a href="#" class="btn disabled">Unavailable</a>
        <a href="https://wa.me/919811223344" target="_blank" class="btn whatsapp">WhatsApp</a>
      </div>

    </div>

  </div>
</section>


<!-- 7. About Section -->
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

      <!-- Button Link -->
      <a href="discover.php" class="about-btn">Discover More</a>
    </div>

    <div class="about-image">
      <img src="image/incredible-india.jpg" alt="Incredible India">
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



<!-- 8. Why Choose Us? -->
<section class="choose-section">
  <div class="container">
    <h2>Why <span>Choose Us?</span></h2>
    <p class="subtitle">Your Journey, Our Commitment</p>

    <div class="choose-grid">
      <div class="choose-card">
        <img src="image/expert-guide.png" alt="Expert Guidance">
        <h4>Expert Guidance</h4>
        <p>
          With years of experience organizing pilgrimages across India, our travel experts handle every detail of your journey so you can focus on creating lifelong memories.
        </p>
      </div>

      <div class="choose-card">
        <img src="image/expert-guide.png" alt="Customized Itineraries">
        <h4>Customized Itineraries</h4>
        <p>
          Every traveler is unique. We design personalized itineraries according to your preferences, budget, and travel style—ensuring a perfect spiritual or leisure journey.
        </p>
      </div>

      <div class="choose-card">
        <img src="image/expert-guide.png" alt="24/7 Support">
        <h4>24/7 Customer Support</h4>
        <p>
          Travel with peace of mind! Our team is available round-the-clock to assist with travel queries, emergencies, or guidance, keeping your trip smooth and stress-free.
        </p>
      </div>

      <div class="choose-card">
        <img src="image/expert-guide.png" alt="Trusted & Reliable">
        <h4>Trusted & Reliable</h4>
        <p>
          Thousands of satisfied travelers trust us for their journeys. Transparent policies, verified partnerships, and commitment to quality make us a reliable choice.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- 9. FAQ Section -->
<section class="faq-section" id="faq-section">
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



<!-- WhatsApp Icon -->
<div class="whatsappIcon">
<a href="https://wa.me/8284845308" target="_blank"><img src="image/WhatsApp-icone.png" alt="Whatsapp Logo"></a>
</div>

<style type="text/css">
.whatsappIcon{
	position: fixed;
    right: 5px;
    z-index: 999;
    bottom: 170px;    
    box-sizing: border-box;
    text-align: center;
}
.whatsappIcon a{
	background: #41c34f;
    border-radius: 100px;
	display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
}
.whatsappIcon img{
	width: 42px;
}

</style>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69b0f5b696b7f41c343ff71a/1jjdjvkn7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



<!-- OPEN BUTTON -->
<button class="open-ticket-popup">🎟️ Book Tickets</button>

<!-- POPUP -->
<div class="ticket-popup-overlay" id="ticketPopup">
  <div class="ticket-popup">

    <!-- Header -->
    <div class="popup-header">
      <h2>Book Tickets</h2>
      <span class="close-popup">&times;</span>
    </div>

    <!-- Tabs -->
    <div class="ticket-tabs">
      <button type="button" class="tab active" data-tab="flight">✈ Flights</button>
      <button type="button" class="tab" data-tab="bus">🚌 Bus</button>
      <button type="button" class="tab" data-tab="cab">🚕 Cab</button>
      <button type="button" class="tab" data-tab="train">🚆 Train</button>
    </div>

    <!-- FORM -->
    <form id="ticketForm" method="GET" action="search-results.php">



      <input type="hidden" name="type" id="ticketType" value="flight">

     <!-- FLIGHT -->
<div class="tab-content active" id="flight">
  <div class="trip-type">
    <span class="trip-option active" data-trip="oneway">One Way</span>
    <span class="trip-option" active data-trip="round">Round Trip</span>
    <label class="direct-check">
      <input type="checkbox" name="direct" value="1">
      Direct Flights Only
    </label>
  </div>

  <div class="input-row">
    <input type="text" name="flight_from" placeholder="From city">
    <input type="text" name="flight_to" placeholder="To city">
  </div>

  <div class="input-row">
    <input type="date" name="depart_date" id="departDate">
    <input type="date" name="return_date" class="return-date" style="display:none;">
  </div>
</div>

<!-- BUS -->
<div class="tab-content" id="bus">
  <div class="input-row">
    <input type="text" name="bus_from" placeholder="From city">
    <input type="text" name="bus_to" placeholder="To city">
  </div>

  <div class="input-row">
    <input type="date" name="travel_date_bus" id="busDate">
    <input type="date" name="return_date_bus" class="return-date" style="display:none;">
  </div>
</div>

<!-- CAB -->
<div class="tab-content" id="cab">
  <div class="input-row">
    <input type="text" name="pickup" placeholder="Pickup location">
    <input type="text" name="drop_location" placeholder="Drop location">
  </div>

  <div class="input-row">
    <input type="date" name="travel_date_cab" id="cabDate">
    <input type="date" name="return_date_cab" class="return-date" style="display:none;">
  </div>
</div>

<!-- TRAIN -->
<div class="tab-content" id="train">
  <div class="input-row">
    <input type="text" name="from_station" placeholder="From station">
    <input type="text" name="to_station" placeholder="To station">
  </div>

  <div class="input-row">
    <input type="date" name="travel_date_train" id="trainDate">
    <input type="date" name="return_date_train" class="return-date" style="display:none;">
  </div>
</div>

      <!-- RESULTS PLACEHOLDER -->
      <div id="searchResults" style="margin-top:15px; max-height:300px; overflow-y:auto;"></div>

      <!-- Footer -->
      <div class="popup-footer">
        <button type="submit" class="search-btn">Search</button>
        <small>🔒 Secure payments • Best fares</small>
      </div>

    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="js/front.js"></script>


</body>
</html>
