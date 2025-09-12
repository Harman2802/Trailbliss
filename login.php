<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request a Quote - Trailbliss</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: url('IMG_8213.JPG') no-repeat center center fixed;
      background-size: cover;
    }

    .overlay {
      background: rgba(255, 236, 238, 0.92); /* Transparent overlay using base color */
      width: 100%;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .quote-container {
      display: flex;
      max-width: 950px;
      background: #ffe0e6;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 8px 18px rgba(0,0,0,0.2);
    }

    .left-panel {
      flex: 1;
      padding: 30px;
      background: #ffd4de;
      color: #333;
    }

    .left-panel h2 {
      color: #fea5be;
    }

    .left-panel ul {
      padding-left: 20px;
    }

    .left-panel ul li {
      margin: 10px 0;
      font-size: 15px;
    }

    .left-panel .social-icons {
      margin-top: 20px;
    }

    .left-panel .social-icons a {
      margin: 0 10px;
      font-size: 20px;
      text-decoration: none;
      color: #feb1c6;
    }

    .right-panel {
      flex: 1.5;
      padding: 30px;
      background: #ffc9d6;
    }

    .right-panel h2 {
      margin-bottom: 20px;
      color: #fe5d94;
    }

    form {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
    }

    form input, form textarea, form select {
      width: 100%;
      padding: 10px;
      border: 1px solid #febdce;
      border-radius: 8px;
      font-size: 14px;
      background: #ffecee;
    }

    form textarea {
      grid-column: span 2;
      resize: none;
      height: 100px;
    }

    .submit-btn {
      grid-column: span 2;
      padding: 12px;
      background: #fea5be;
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .submit-btn:hover {
      background: #feb1c6;
    }

    @media (max-width: 768px) {
      .quote-container {
        flex-direction: column;
      }

      form {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <div class="overlay">
    <div class="quote-container">
      <!-- Left Panel -->
      <div class="left-panel">
        <h2>How It Works</h2>
        <ul>
          <li>Tell us details of your holiday plan.</li>
          <li>After you submit the form, one of our experts will get back to you with a customized package within 24 hours.</li>
          <li>Grab the deal and start packing your bags for an indelible holiday with Trailbliss.</li>
        </ul>
        <div class="social-icons">
          <a href="#">🌐</a>
          <a href="#">🐦</a>
          <a href="#">📸</a>
        </div>
        <p><strong>Call Us:</strong> +91-8284845308</p>
      </div>

      <!-- Right Panel -->
      <div class="right-panel">
        <h2>Request a <strong style="color:#fea5be;">Quote</strong></h2>
        <form>
          <input type="text" placeholder="Full Name*" required>

          <select required>
            <option value="">Select Country*</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
          </select>

          <input type="email" placeholder="Email ID*" required>
<br>
          <input type="text" placeholder="Contact No*" required>

          <textarea placeholder="Tour Description*" required></textarea>

          <input type="number" placeholder="Travel Dates*" required>

          <input type="text" placeholder="Duration of Stay*" required>

          <input type="number" placeholder="No of Persons*" required>

          <button type="submit" class="submit-btn">Submit</button>

        </form>
      </div>
    </div>
  </div>
</body>
</html>
