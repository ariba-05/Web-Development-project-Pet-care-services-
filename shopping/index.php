<head>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran|Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bungee|Convergence|Josefin+Slab:400,700|Voces" rel="stylesheet">
  <link rel="stylesheet" href="css/store.css">
</head>

<header id="aboutheading">
  <h1><a href="../index.html"><img src="images/Logo.png" class="logo"></a>
      <a href="cart.php"><img src="images/shopping-cart-icon-30.png" class="cart"></a>
  <div class="text"><a href="index.php">free shipping, no minimum<br> on hundreds of items! ></div>

  </h1>

  <h2>
    <ul>
    <li><a href="../index.html">Home</a></li>
    <li><a href="../about us.html">About Us</a></li>
    
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">User</a>
      <div class="dropdown-content">
        <a href="../login.php">Login</a>
        <a href="../petinfo.php">Register</a>
          <a href="../myaccounts.php">My Account</a>
      </div>
    </li>
    <li><a href="index.php">Shop</a></li>
    <li><a href="../petclinic.html">Pet Clinic</a></li>
    <li><a href="../contactus.html">Contact Us</a></li>
  </ul>
  </h2>
<h3><img src="images/petshop.png" height="152px" width="462px"></h3>

</header>


<?php
  require 'connect.php';   //require is similar to include except that it halts the script upon failure and include only gives a warning...it's a statement not a function
  $result = mysqli_query($con,'select * from product');  //data retrieval from table 'product' and stores the returned object in 'result'
?>
<body style="background-color:#FCFCFC;">

<div class="gallery">
  <?php while($product = mysqli_fetch_object($result)/*returns the current row of a result set as an object*/) { ?>
          <a href="cart.php?id=<?php echo $product->id; ?>" class="yo">
            <div class="box">
          <img src= "<?php echo $product->image?>" class="galleryimg">
          <div class="desc"><?php echo $product->name; ?><br>
          Rs.<?php echo $product->price; ?><br>
          <b>ORDER NOW</b><br>
          </div>
        </div>
          </a>
    <?php } ?>
</div>
</body>
<footer>
  <a href="http://www.facebook.com/pawsandclaws">
    <img src="images/facebook-wrap.png" alt="facebook logo" class="social-icon" id="fb">
  </a>
  <a href="http://www.twitter.com/pawsandclaws">
    <img src="images/twitter-wrap.png" alt="twitter logo" class="social-icon" id="twitter">
  </a>
  <p id='footer'>&#169 2017 Paws and Claws</p>


</footer>
