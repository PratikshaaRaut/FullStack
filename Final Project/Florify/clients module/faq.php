<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Florify - FAQ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 3.4.1 CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Optional: Your custom CSS -->
  <link rel="stylesheet" href="style.css">
<?php
include "header.php" ?>
  <style>
    body {
      background-color: #fffaf5;
      font-family: Arial, sans-serif;
    }

    .faq-container {
      max-width: 850px;
      margin: 40px auto;
      padding: 20px;
      background-color: white;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .faq-title {
      text-align: center;
      margin-bottom: 30px;
      color: #b71c5a;
      font-size: 28px;
    }

    .faq-item {
      margin-bottom: 20px;
    }

    .faq-question {
      font-weight: bold;
      cursor: pointer;
      background-color: #f8a9c2;
      color: white;
      padding: 10px 15px;
      border-radius: 4px;
    }

    .faq-answer {
      background-color: #fff0f6;
      padding: 10px 15px;
      display: none;
      border-radius: 4px;
    }
  </style>

  <script>
    $(document).ready(function(){
      $(".faq-question").click(function(){
        $(this).next(".faq-answer").slideToggle();
        $(".faq-answer").not($(this).next()).slideUp(); // optional: close others
      });
    });
  </script>
</head>

<body>
  <!-- Main FAQ Section -->
  <div class="faq-container">
    <h2 class="faq-title">Frequently Asked Questions</h2>

    <div class="faq-item">
      <div class="faq-question">What are your delivery timings?</div>
      <div class="faq-answer">We deliver flowers every day from 9 AM to 8 PM. Same-day delivery is available if ordered before 4 PM.</div>
    </div>

    <div class="faq-item">
      <div class="faq-question">Can I customize my bouquet?</div>
      <div class="faq-answer">Yes! You can choose flowers, colors, packaging, and even add a personal message at checkout.</div>
    </div>

    <div class="faq-item">
      <div class="faq-question">What payment methods are accepted?</div>
      <div class="faq-answer">We accept UPI, debit/credit cards, net banking, and popular wallets like Paytm and PhonePe.</div>
    </div>

    <div class="faq-item">
      <div class="faq-question">Do you offer international shipping?</div>
      <div class="faq-answer">Currently, we only deliver within India. We're working to expand our services soon.</div>
    </div>

    <div class="faq-item">
      <div class="faq-question">How can I track my order?</div>
      <div class="faq-answer">Once your order is placed, you'll get an SMS and email with a tracking link. You can also log in to your profile to check order status.</div>
    </div>
  </div>
<?php 
include "footer.php" ?>
</body>
</html>