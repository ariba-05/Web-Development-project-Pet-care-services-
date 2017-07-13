<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Metrophobic" rel="stylesheet">
<link rel="stylesheet" href="../css/formstyles.css">

</head>

<body>
<header>
<h1><br>PAWS AND CLAWS<br></h1>
</header>


<form action="signup.php" method="post" class="box">
<b>User ID:</b><br>
<input type="text" name="uid" autofocus>
<br><br>
<b>Password:</b><br>
<input type="password" name="pwd">
<br><br>


<fieldset>
<legend><b>Owner Information:</b></legend>
First Name:<br>
<input type="text" name="first">
<br><br>
Last name:<br>
<input type="text" name="last">
<br><br>
<strong>Address:</strong><br><br>
House Number:<br>
<input type="text" name="houseno">
<br><br>
Street:<br>
<input type="text" name="street">
<br><br>
Pin Code:<br>
<input type="number" name="pin" size="6">
<br><br>
Phone number:<br>
<input type="tel" name="tel">
<br><br>
Email Id:<br>
<input type="email" name="email">
<br><br>
<button type="submit">Sign up</button>
</fieldset>






</form>


<br>

<fieldset>
  <form>
<legend><b>Pet Information:</b></legend>
Name of Pet:<br>
<input type="text" name="firstname">

<br><br>
Gender:<br>
<input type="radio" name="gender" value="Male">Male<br>
<input type="radio" name="gender" value="Female">Female<br>
<br>
Age:<br>
<input type="number" name="age">
<br><br>

Type:<br>
<select name="dropdown">
<option value="Cat">Cat</option>
<option value="Dog">Dog</option>

</select>
<br><br>
Breed:<br>
<select name="dropdown">
<option value="American Bobtail">American Bobtail</option>
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
<input type="Submit" value="Submit">
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
