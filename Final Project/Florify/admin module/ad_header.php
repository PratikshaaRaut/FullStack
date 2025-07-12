<!DOCTYPE html>
<html>
<head>
  <title>Florify</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif;">

<header style="background-color: #f8a9c2; padding: 20px; position: relative;">
  <div style="display: flex; align-items: center; justify-content: center; position: relative;">
    
    <!-- Centered Logo and Title -->
    <div style="display: flex; align-items: center; gap: 10px;">
      <img src="logo.jpeg" alt="Florify Logo" style="height: 60px; width: 60px; border-radius: 50%;">
      <h1 style="margin: 0; color: white; font-size: 32px;">Florify</h1>
    </div>

    <!-- Login/Logout Positioned to the Right -->
    <div style="position: absolute; right: 20px; text-align: right;">
      <label style="color: white; font-weight: bold; font-size: 18px;">

    <!-- Login/Logout & Welcome -->
    <div style="text-align: right;">
      <label style="color: white; font-weight: bold; font-size: 18px;">
        <?php
          session_start();
          if (isset($_SESSION['name'])) {
            echo "Welcome " . $_SESSION['name'];
          }
        ?>
      </label><br>
      <?php
        if (!isset($_SESSION['name'])) {
          echo "<a href='login.php' style='text-decoration: none; padding: 10px 20px; background-color: white; color: black; border-radius: 8px;'>Login</a>";
        } else {
          echo "<a href='logout.php' style='text-decoration: none; padding: 10px 20px; background-color: white; color: black; border-radius: 8px;'>Logout</a>";
        }
      ?>
    </div>
  </div>
</header>

<!-- MAIN CONTENT: SIDEBAR + MAIN AREA -->
<div style="display: flex; min-height: 100vh;">

  <!-- VERTICAL SIDEBAR MENU -->
  <nav style="width: 250px; background-color: #f8a9c2; padding: 20px; display: flex; flex-direction: column; gap: 15px;">

    <a href="index.php" style="text-decoration: none; color: white; font-weight: bold;">Dashboard</a>

    <div>
      <div onclick="toggleDropdown('catDropdown')" style="cursor: pointer; color: white; font-weight: bold;">Users ▾</div>
      <div id="catDropdown" style="display: none; padding-left: 15px; margin-top: 5px;">
        <a href="view_users.php" style="text-decoration: none; color: white;">• View Users</a><br>
        <a href="add_users.php" style="text-decoration: none; color: white;">• Add new Users</a><br>
      </div>
    </div>

    <a href="orders.php" style="text-decoration: none; color: white; font-weight: bold;">Orders</a>
   
    <div>
      <div onclick="toggleDropdown('orderDropdown')" style="cursor: pointer; color: white; font-weight: bold;">Products ▾</div>
      <div id="orderDropdown" style="display: none; padding-left: 15px; margin-top: 5px;">
        <a href="view_products.php" style="text-decoration: none; color: white;">• View Products</a><br>
        <a href="add_product.php" style="text-decoration: none; color: white;">•  Add New Products</a>
      </div>
    </div>
  </nav>



<!-- DROPDOWN TOGGLE SCRIPT -->
<script>
  function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
  }
</script>

</body>
</html>
