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
</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
  <div class="logo">
    <img src="image/logo.jpeg" alt="Trailbliss Logo">
    <span>Trailbliss</span>
  </div>
  <nav>
    <ul>
      <li><a href="#destinations">Destinations</a></li>
      <li><a href="#packages">Packages</a></li>
      <li><a href="#testimonials">Testimonials</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="login.php">Book Your Trip</a></li>
    </ul>
  </nav>
</header>


  <!-- Hero Section -->
  <section class="hero">
  <!-- Left Swiper -->
  <div class="hero-left swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <img src="image/chardham yatra.jpg" alt="Chardham Yatra">
        <div class="slide-text">
          <h2>Chardham Yatra Package 2025</h2>
          <p>11 Nights - 12 Days</p>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide">
        <img src="image/goa.jpg" alt="Goa Beach Holiday">
        <div class="slide-text">
          <h2>Goa Beach Holiday</h2>
          <p>5 Nights - 6 Days</p>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide">
        <img src="image/Sikkim.jpg" alt="Sikkim Holiday">
        <div class="slide-text">
          <h2>Sikkim Holiday</h2>
          <p>5 Nights - 6 Days</p>
        </div>
      </div>
    </div>
    <!-- Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
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

    <!-- Categories -->
   <!-- Categories Slider -->
<div class="category-grid swiper categorySwiper">
  <div class="swiper-wrapper">
    <!-- Wildlife -->
    <div class="category-card swiper-slide">
      <div class="card-header">
        <h3>Wildlife</h3>
      </div>
      <img src="image/wildlife.jpg" alt="Wildlife Safari">
      <p>70+ Packages</p>
    </div>

    <!-- Heritage -->
    <div class="category-card swiper-slide">
      <div class="card-header">
        <h3>Heritage</h3>
        
      </div>
      <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Indian Heritage">
      <p>25+ Packages</p>
    </div>

    <!-- Trekking -->
    <div class="category-card swiper-slide">
      <div class="card-header">
        <h3>Trekking</h3>
      </div>
      <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="Mountain Trekking">
      <p>70+ Packages</p>
    </div>

    <!-- Hill Stations -->
    <div class="category-card swiper-slide">
      <div class="card-header">
        <h3>Hill Stations</h3>
        
      </div>
      <img src="image/hill.jpg" alt="Hill Stations">
      <p>75+ Packages</p>
    </div>

    <!-- Beach Tour -->
    <div class="category-card swiper-slide">
      <div class="card-header">
        <h3>Beach Tour</h3>
        
      </div>
      <img src="image/bt.jpg" alt="Beach Tour">
      <p>20+ Packages</p>
    </div>

    <!-- Pilgrimage -->
    <div class="category-card swiper-slide">
      <div class="card-header">
        <h3>Pilgrimage</h3>
        
      </div>
      <img src="image/Pilgrimage.jpg" alt="Pilgrimage Tour">
      <p>65+ Packages</p>
    </div>
  </div>

  <!-- Navigation Arrows -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>

  
</div>
</div>
</section>


<section class="destinations">
  <h2>Explore Top Destinations by Region</h2>

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
    <h2>Top Trending Destinations</h2>
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
  <h2>Packages By Interest</h2>

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





  <!-- Footer -->
 <footer class="footer">
  <!-- Contact Info -->
  <div class="footer-contact">
    <p>C - 81C, Sector - 8, Noida - 201301</p>
    <p>+91-120-4052615 - 99 (85 hunting lines are available)</p>
    <p>+91-120-4052699</p>
    <p>+91-9212777223/24</p>
    <p>info@trailbliss.com</p>
    <p>+91-9212777225 (Only for WhatsApp)</p>
    <p>trailblissdelhi (Skype)</p>
  </div>

  <!-- Social Icons -->
  <div class="footer-social">
    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
  </div>

  <!-- Copyright -->
  <p class="copyright">Copyright © 2025, Trailbliss Tours Pvt. Ltd</p>
</footer>




  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    slidesPerView: 1,
    allowTouchMove: false, // disables drag/scroll, only buttons + autoplay
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 4000, // 4 seconds between slides
      disableOnInteraction: false, // keeps autoplay after clicking arrows
    },
    speed: 800, // smooth transition speed
  });
</script>


<script>
function showRegion(region, event) {
  document.querySelectorAll('.region-grid').forEach(grid => grid.style.display = "none");
  document.getElementById(region).style.display = "grid";

  document.querySelectorAll('.tab').forEach(btn => btn.classList.remove('active'));
  event.target.classList.add('active');
}
</script>

<script>
  const tabs = document.querySelectorAll(".tab");
  const grids = document.querySelectorAll(".destination-grid");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // Remove active from all tabs
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      // Hide all grids
      grids.forEach(grid => grid.style.display = "none");

      // Show selected grid
      document.getElementById(tab.dataset.region).style.display = "grid";
    });
  });
</script>

<script>
var swiper = new Swiper(".categorySwiper", {
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
  },
});
</script>

<script>
  const wrapper = document.querySelector(".trending-wrapper");
  const prevBtn = document.querySelector(".prev");
  const nextBtn = document.querySelector(".next");

  let scrollAmount = 0;
  const cardWidth = 270; // card + gap

  nextBtn.addEventListener("click", () => {
    scrollAmount += cardWidth;
    if (scrollAmount > wrapper.scrollWidth - wrapper.clientWidth) {
      scrollAmount = 0; // reset to start
    }
    wrapper.style.transform = `translateX(-${scrollAmount}px)`;
  });

  prevBtn.addEventListener("click", () => {
    scrollAmount -= cardWidth;
    if (scrollAmount < 0) {
      scrollAmount = wrapper.scrollWidth - wrapper.clientWidth;
    }
    wrapper.style.transform = `translateX(-${scrollAmount}px)`;
  });
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".interest-tabs .tab");
  const cards = document.querySelectorAll(".package-card");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // Remove active from all tabs
      tabs.forEach(t => t.classList.remove("active"));
      // Add active to clicked one
      tab.classList.add("active");

      const category = tab.getAttribute("data-category");

      // Hide all cards first
      cards.forEach(card => {
        card.classList.remove("show");
        if (card.getAttribute("data-category") === category) {
          card.classList.add("show");
        }
      });
    });
  });
});
</script>





</body>
</html>
