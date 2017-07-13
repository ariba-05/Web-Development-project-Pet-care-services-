
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/petinfo.css">
  <link href="https://fonts.googleapis.com/css?family=Catamaran|Poiret+One" rel="stylesheet">
</head>



<header>
  <h1><a href="index.html"><img src="images/Logo.png" class="logo"></a>
      <a href="shopping/cart.php"><img src="images/shopping-cart-icon-30.png" class="cart"></a>
  <div class="text"><a href="shopping">free shipping, no minimum<br> on hundreds of items! ></div>

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
<form action="signup.php" method="post" >

<br>
User ID:<br>
<input type="text" name="username" id="username">
<br><br>
Password:<br>
<input type="password" name="password" id="password">
<br><br>

<fieldset>
<legend><b>Owner Information:</b></legend>
First Name:<br>
<input type="text" name="firstname">
<br><br>
Last name:<br>
<input type="text" name="lastname">
<br><br>
<b>Address:</b><br><br>
House Number:<br>
<input type="text" name="housenumber">
<br><br>
Street:<br>
<input type="text" name="street">
<br><br>
Pin Code:<br>
<input type="number" name="num" size="6">
<br><br>
Phone number:<br>
<input type="tel" name="urstel">
<br><br>
Email Id:<br>
<input type="email" name="email">
<br><br>
</fieldset>
<br>

<fieldset>
<legend><b>Pet Information:</b></legend>
Name of Pet:<br>
<input type="text" name="petname">

<br><br>
Gender:<br><br>
<input type="radio" name="gender" value="Male">Male<br><br>
<input type="radio" name="gender" value="Female">Female<br>
<br>
Age:<br>
<input type="number" name="age">
<br><br>

Type:<br>
<select name="type">
<option value="Cat" name="type" id="cat">Cat</option>
<option value="Dog" name="type" id="dog">Dog</option>

</select>
<br><br>
Breed:<br>
<select name="breed">
<option value="American Bobtail" name="breed">American Bobtail</option>
<option value="German Shepherd">German Shephard</option>
<option value="Golden Retriever">Golden Retriever</option>
<option value="Indian Pariah">Indian Pariah</option>
<option value="Maine Coon">Maine Coon</option>
<option value="Persian">Persian</option>
<option value="Pugs">Pugs</option>
<option value="Rottweiler">Rottweiler</option>
<option value="Saint Bernard">Saint Bernard</option>
<option value="Siamese">Siamese</option>

</select>

<br><br>
</fieldset>
<br><br>
<input type = "submit" value = " submit " id="btn"><br />
<br><br>
</form>

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
