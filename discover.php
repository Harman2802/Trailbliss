<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Discover More - Incredible India Travels</title>
  <link rel="stylesheet" href="front1.css">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #ffffff;
      color: #2d2d2d;
    }

    .header {
      background: #0077b6;
      color: #fff;
      padding: 18px 30px;
      text-align: center;
      font-size: 26px;
      font-weight: 700;
    }

    .discover-wrapper {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .discover-title {
      text-align: center;
      font-size: 34px;
      color: #0077b6;
      margin-bottom: 20px;
    }

    .discover-text {
      line-height: 1.8;
      font-size: 17px;
      background: #f2f7ff;
      padding: 25px;
      border-left: 6px solid #0077b6;
      border-radius: 8px;
      margin-bottom: 40px;
    }

    .highlights {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .highlight-card {
      background: #ffffff;
      width: 300px;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
    }

    .highlight-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .back-btn {
      display: inline-block;
      margin: 40px auto;
      text-align: center;
      padding: 12px 35px;
      background: #ff7900;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    .back-btn:hover {
      background: #e66c00;
    }

    @media (max-width: 768px) {
      .highlight-card {
        width: 100%;
      }
    }
  </style>
</head>
<body>
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
        
      </ul>
    </nav>
  </header>

  <div class="header">Incredible India Travels 🇮🇳</div>

  <div class="discover-wrapper">

    <h2 class="discover-title">Discover More About Incredible India</h2>

    <div class="discover-text">
      India is a land of wonders — where every journey feels like a celebration.
      From rich cultural heritage to natural beauty and vibrant cities —
      there’s always something new to explore. We bring you closer to
      India’s most iconic destinations through immersive and comfortable travel experiences.
    </div>

    <!-- Highlights Section -->
    <div class="highlights">

      <div class="highlight-card">
        <img src="image/heritage-main.jpg" alt="Heritage Tour">
        <h3>Heritage Tours</h3>
        <p>Explore ancient palaces, forts & monuments that define Indian history.</p>
      </div>

      <div class="highlight-card">
        <img src="image/hill.jpg" alt="Nature Beauty">
        <h3>Nature & Adventure</h3>
        <p>Experience mountains, beaches, wildlife & thrilling adventures.</p>
      </div>

      <div class="highlight-card">
        <img src="image/goa.jpg" alt="Spiritual Journey">
        <h3>Spiritual Journeys</h3>
        <p>Discover peace at holy temples, ghats & pilgrim destinations.</p>
      </div>

    </div>

    <center>
      <a href="front.php" class="back-btn">⬅ Back to Home</a>
    </center>

  </div>

</body>
</html>
