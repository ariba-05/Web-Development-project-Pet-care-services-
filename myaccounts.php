<?php
include('session.php');

?>
<html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran|Poiret+One" >
</head>
<link rel="stylesheet" type="text/css" href="project.css"
<style>

  <header>
    <h1><a href="index.html"><img src="images/Logo.png" class="logo"></a>
      <a href="shopping/cart.php"><img src="images/shopping-cart-icon-30.png" class="cart"></a>
  <div class="text"><a href="shopping/index.php">free shipping, no minimum<br> on hundreds of items! ></div>

  </h1>

  <h2>
    <ul >
    <li ><a href="index.html">Home</a></li>
    <li ><a href="about us.html">About Us</a></li>
    
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">User</a>
      <div class="dropdown-content">
        <a href="login.php">Login</a>
        <a href="petinfo.php">Register</a>
          <a href="myaccounts.php">My Account</a>
      </div>
    </li>
    <li><a href="shopping">Shop</a></li>
    <li><a href="petclinic.html">Pet Clinic</a></li>
    <li><a href="contactus.html">Contact Us</a></li>
  </ul>
  </h2>

</header>


  <body>
   <ul >

     <li><a href="apptt.php">Book an appointment</a></li>
     <li><a href="Logout.php">LogOut</a></li>


   </ul>
   <br><br>
<h2>Welcome <?php echo $login_session; ?></h2>


<?php
$link = mysqli_connect("localhost", "root", "","logintest");
 if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$user_check = $_SESSION['login_user'];
$sql = "SELECT Time, ApptDate FROM pet_clinic where uid= '$user_check' ";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0)
{
  echo "<br><br> Your Appointments: <br>";
  while($row = mysqli_fetch_assoc($result))
  {
    echo  "  Appointment Date: " . $row["ApptDate"]. "Time: " . $row["Time"]."<br>";
  }
}
else
{
  echo "No Appointments booked!";
  echo "<td><a href='apptt.php'><br>Book An Appointment here!</a></td>";
}

?>



<footer>
  <a href="http://www.facebook.com/pawsandclaws">

  <img src="images/facebook-wrap.png" alt="facebook logo" class="social-icon" id="fb">
</a>

<a href="http://www.twitter.com/pawsandclaws">
    <img src="images/twitter-wrap.png" alt="twitter logo" class="social-icon" id="twitter">
  </a>

<p id='footer'>&#169 2017 Paws and Claws</p>

</footer>

</form>
</body>
</html>
