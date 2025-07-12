<?php
    session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Florify - Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 3.4.1 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Optional: Your own CSS -->
  <link rel="stylesheet" href="style.css">
<?php
include "header.php" ?>
 <style>
     body {
      background-color: #fffaf5;
      font-family: 'Arial', sans-serif;
    }

    .contact-container {
      max-width: 1000px;
      margin: 50px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .contact-container h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
      color: #b71c5a;
    }

    .whatsapp-box {
      background-color: #e8f5e9;
      border-left: 5px solid #25d366;
      padding: 20px;
      border-radius: 6px;
      margin-bottom: 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .whatsapp-box img {
      height: 100px;
      margin-top: 10px;
    }

    .whatsapp-text h4 {
      margin-top: 0;
      font-weight: bold;
    }

    .address-box {
      margin-bottom: 30px;
    }

    .contact-label {
      font-weight: bold;
      color: #b71c5a;
    }

    .social-icons a {
      display: inline-block;
      margin-right: 10px;
      font-size: 20px;
      color: #555;
      text-decoration: none;
    }

    .social-icons a:hover {
      color: #f06292;
    }
  </style>
</head>
<body>
<div class="contact-container">
    <h2>Contact Us!!</h2>
    <p style="text-align:center; font-size:16px;">We’d love to hear from you! Whether you have a question or just want to say hi, feel free to reach out.</p>

    <!-- WhatsApp Section -->
    <div class="whatsapp-box">
      <div class="whatsapp-text">
        <h4>📱 Fastest way to reach us.</h4>
        <p>WhatsApp us at <strong>+91-1133224455</strong> or <strong>scan QR</strong>:</p>
      </div>
    </div>

    <!-- Address Section -->
    <div class="row address-box">
      <div class="col-sm-6">
        <p class="contact-label">📍 Address:</p>
        <p>
          Unit No. 2, A Wing,<br>
          2nd Floor, Times Square Building,<br>
          Nandanvan Road, Nagpur - 440025,<br>
          Maharashtra
        </p>
      </div>

      <!-- Email Section -->
      <div class="col-sm-6">
        <p class="contact-label">✉️ Email:</p>
        <p>support@florify.com</p>

        <!-- Social Links -->
        <p class="contact-label">🌐 Socials:</p>
        <div class="social-icons">
          <a href="#"><span class="glyphicon glyphicon-globe"></span></a>
          <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span></a>
          <a href="#"><span class="glyphicon glyphicon-camera"></span></a>
          <a href="#"><span class="glyphicon glyphicon-user"></span></a>
        </div>
      </div>
    </div>
  </div>

<?php 
include "footer.php" ?>