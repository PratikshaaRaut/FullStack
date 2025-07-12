<header style="background-color: #f8a9c2; padding: 20px;">
  <div class="header-content" style="display: flex; align-items: center; justify-content: space-between;">
    
    <!-- Ce<ntered Logo and Title -->
    <div style="flex: 1; display: flex; justify-content: center; align-items: center; gap: 10px;">
      <img src="flowerimg/logo.jpeg" alt="Florify Logo" style="height: 60px; width: 60px; border-radius: 50%;">
      <h1 style="margin: 0; font-color:white; font-size: 32px; font-weight: bold;">Florify</h1>
    </div>

    <!-- Welcome Message & Logout -->
    <div style="text-align: right;">
      <label style="color: white; font-weight: bold; font-size: 18px;">

  
  <div class="col-sm-2 background" style="text-align:right;  padding-left:70px;">
                                <label>
                                    <?php
                                        if(isset($_SESSION['name'])){
                                            echo "Welcome ".$_SESSION['name'];
                                        }
                                    ?>
                                </label>
                                <?php
                                    if(!isset($_SESSION['name'])){
                                            echo "<a href='login.php' class='btn btn-default loginbtn' style='text-decoration: none; padding: 10px 20px; border: 0px solidrgb(22, 21, 23); background-color: white; color:rgb(9, 9, 9); border-radius: 8px; box-shadow: 2px 2px 5px rgba(0,0,0,0.2); display: inline-block;'>Login</a>";
                                    }
                                    else{
                                        echo "<a href='logout.php' class='btn btn-default loginbtn' style='text-decoration: none; padding: 10px 20px; border: 2px solidrgb(23, 20, 24); background-color: white; color:rgb(6, 4, 8); border-radius: 8px; box-shadow: 2px 2px 5px rgba(0,0,0,0.2); display: inline-block;'>Logout</a>";
        }
                                    
                                ?>
                                
                                
      </div>    
                            </div>

                        </div>
                    </div>
  </div>
  </header>

  <nav>
    <ul class="navbar">
      <li><a href="index.php">Home</a></li>

      <li class="dropdown">
        <a href="#">Shop by Category ▾</a>
        <ul class="dropdown-content">
          <li><a href="birthday.php">Birthday</a></li>
          <li><a href="anniversary.php">Anniversary</a></li>
          <li><a href="events.php">Business Events</a></li>
        </ul>
      </li>
      <li><a href="cart.php">Cart</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="faq.php">FAQ</a></li>

      <li class="dropdown">
      <a href="#">Order Info ▾</a>
        <ul class="dropdown-content">
          <li><a href="order_confirm.php">Shipping</a></li>
          <li><a href="view_order.php">Order History</a></li>
        </ul>
  
    </nav>
  