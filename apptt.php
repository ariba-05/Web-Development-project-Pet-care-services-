


<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/normalize.css">
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
    <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="about us.html">About Us</a></li>

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
<form name="clinicform" class="box" action="" method="post">
  <img src="images/forms.png" height="700px">
<h2>We require details for what's bothering that little one!<br></h2><br><br>
<font size="5">User ID:<br><input type="text" name="uid"><br><br>
City:<br><select name="city">
  <option value="Delhi">Delhi</option>
  <option value="Bengaluru">Bengaluru</option>
  <option value="Goa">Goa</option>
</select>
<br><br>
Clinic Service:<br><select name="service">
  <option value="Vaccination">Vaccination</option>
  <option value="XandU">X-ray and Ultrasound</option>
  <option value="Laser">Laser Therapy</option>
  <option value="PE">Physical Exams</option>
  <option value="Surgery">Surgery</option>
</select>

<h3> BOOK AN APPOINTMENT! <br>

  <!-- <img src="images/download.jpg" class="image" align="left"> -->
ENTER DATE AND TIME SUITABLE TO YOU...</h3>

4 time slots are available, except on <b>SUNDAY</b>, when we need a rest!<br>

<ul class="a">
<br>09:00 AM
<br >12:00 NOON
<br >16:00 PM
<br >19:00 PM
</ul>
<br>
<label for="time"><br>Time</label><br>
<select name="time">
  <option value="9 AM">09:00 AM</option>
  <option value="12 AM">12:00 NOON</option>
  <option value="16 PM">16:00 PM</option>
  <option value="19 PM">19:00 PM</option>
</select>
<br>
<label for="Apptdate">Date</label><br>
<input type="date" name="Apptdate" id="Apptdate"><br>
<label for="Doctor"><br>Doctor</label><br>
<select name="Doctor">
  <option value="Dr Priya">Dr Priya</option>
  <option value="Dr Anup">Dr Anup</option>
  <option value="Dr Raj">Dr Raj</option>
</select>

<br><br>
<input type="submit" value="Submit"><br>
</font>



<?php
$link = mysqli_connect("localhost", "root", "","logintest");
 if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$uid = mysqli_real_escape_string($link, $_REQUEST['uid']);
$time = mysqli_real_escape_string($link, $_REQUEST['time']);
$Apptdate=mysqli_real_escape_string($link,$_REQUEST['Apptdate']);
$Doctor = mysqli_real_escape_string($link, $_REQUEST['Doctor']);
$service = mysqli_real_escape_string($link, $_REQUEST['service']);
$query= "SELECT uid FROM user WHERE uid ='$uid' ";
$querys= mysqli_query($link, $query);
if(mysqli_num_rows($querys) > 0)
{
$results = "SELECT * FROM pet_clinic WHERE (`Time` LIKE '%".$time."%') AND (`Apptdate` LIKE '%".$Apptdate."%') AND (`Doctor` LIKE '%".$Doctor."%')";
$result = mysqli_query($link, $results);
if (mysqli_num_rows($result) > 0)
{
  echo '<span style="color: red;" /><center>No Appoitment available,Kindly select another option!</center></span>';
}
else
 {
  $sql = "INSERT INTO pet_clinic (uid,Time, Apptdate,Doctor,service) VALUES ('$uid','$time', '$Apptdate','$Doctor','$service')";
  if(mysqli_query($link, $sql))
  {
      echo "Appointment Booked!";
  }
  else {
    echo "not booked!";
  }
}
}
else {
  echo '<span style="color: red;" /><center>Enter a valid Username!</center></span>';
}
}


mysqli_close($link);
?>
</form>
<footer>
  <a href="http://www.facebook.com/pawsandclaws">

  <img src="images/facebook-wrap.png" alt="facebook logo" class="social-icon" id="fb">
</a>

<a href="http://www.twitter.com/pawsandclaws">
    <img src="images/twitter-wrap.png" alt="twitter logo" class="social-icon" id="twitter">
  </a>

<p id='footer'>&#169 2017 Paws and Claws</p>

</footer>
</body>

</html>
