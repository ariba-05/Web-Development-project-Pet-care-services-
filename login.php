<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet"  href="css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Catamaran|Poiret+One" rel="stylesheet">
<title>Login Page</title>
</head>
<header>
  <h1><a href="../index.html"><img src="images/Logo.png" class="logo"></a>
      <a href="cart.php"><img src="images/shopping-cart-icon-30.png" class="cart"></a>
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
    <li><a href="apptt.php">Pet Clinic</a></li>
    <li><a href="contactus.html">Contact Us</a></li>
  </ul>
  </h2>


</header>
<body>


<div class="left">
<form action = "" method = "post" >
<fieldset>
  <legend>Log In</legend>
<label>UserName  :</label><br><input type = "text" name="username"  placeholder="Username..."><br /><br />
<label>Password  :</label><br><input type = "password" name = "password" placeholder="Password..."><br/><br />
<label>Confirm Password  :</label><br><input type = "password" name="confirmpassword" placeholder="Confirm Password..."><br/><br/>

<input type = "submit" value = " Submit " id="btn" ><br />

<p>Not a registered user ? </p>
<a href="petinfo.php" target="_blank">Register here!<br></a>
<?php

$link = mysqli_connect("localhost", "root", "","logintest");
 if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']);
      $confirmpassword = mysqli_real_escape_string($link,$_POST['confirmpassword']);
      if($mypassword==$confirmpassword)
      {
        $sql = "SELECT id FROM user WHERE uid = '$myusername' and pwd = '$mypassword'  ";
        $result = mysqli_query($link,$sql);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {

          $_SESSION['login_user'] = $myusername;
          header("location: myaccounts.php");
        }
        else
        {
            echo  "Your Login Name or Password is invalid,Try Again!";

        }
      }
      else
      {
            echo  "Your passwords dont match!";

      }

    }
?>

</fieldset>
</form>
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

</html>
