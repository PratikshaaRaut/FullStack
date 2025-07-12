<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Florify</title>
  <link rel="stylesheet" href="style.css">
  <style>
  main {
    display: flex;
    justify-content: center;
  }

  .main-content {
    width: 90%;
    max-width: 1200px;
    padding-top: 30px;
    margin-bottom: 140px; /* Add this line */
  }

  h2 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 20px;
    color: #880e4f;
  }

  .grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    padding: 10px;
  }

  .grid-item {
    text-align: center;
    text-decoration: none;
    background-color: #fff0f6;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    padding: 10px;
    transition: transform 0.2s ease;
  }

  .grid-item:hover {
    transform: scale(1.03);
  }

  .grid-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
  }

  .grid-item p {
    margin-top: 10px;
    font-weight: bold;
    color: #6a1b9a;
  }
</style>

</head>
<body>

<?php include "header.php"; ?>

<main>
  <div class="main-content">
    <h2>Shop Our Categories</h2>
    <div class="grid-container">
      <a href="birthday.php" class="grid-item">
        <img src="flowerimg/birthflow.jpeg" alt="Flowers">
        <p>Flowers</p>
      </a>
      <a href="anniversary.php" class="grid-item">
        <img src="flowerimg/anni.jpeg" alt="Anniversary">
        <p>Anniversary</p>
      </a>
      <a href="events.php" class="grid-item">
        <img src="flowerimg/event.jpeg" alt="Events">
        <p>Events</p>
      </a>
      <a href="#" class="grid-item">
        <img src="flowerimg/rose.jpeg" alt="Special Day">
        <p>Special Day</p>
      </a>
    </div>
  </div>
</main>
<br>

<?php include "footer.php"; ?>

</body>
</html>
