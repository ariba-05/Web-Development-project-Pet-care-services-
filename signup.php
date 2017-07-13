<?php

  $conn = mysqli_connect("localhost", "root", "", "logintest" );

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }

  $username = "";
  $password = "";
  $firstname = "";
  $lastname = "";
  $housenumber = "";
  $street = "";
  $num = "";
  $urstel = "";
  $email = "";
  $petname = "";
  $gender = "";
  $age = "";
  $type = "";
  $breed = "";


  if(isset($_POST['username']))
  {   $username = $_POST['username'];
  }
  if(isset($_POST['password']))
  { $password = $_POST['password'];
  }
  if(isset($_POST['firstname']))
  { $firstname = $_POST['firstname'];
  }
  if(isset($_POST['lastname']))
  { $lastname = $_POST['lastname'];
  }
  if(isset($_POST['housenumber']))
  { $housenumber = $_POST['housenumber'];
  }
  if(isset($_POST['street']))
  { $street = $_POST['street'];
  }
  if(isset($_POST['num']))
  { $num = $_POST['num'];
  }
  if(isset($_POST['urstel']))
  { $urstel = $_POST['urstel'];
  }
  if(isset($_POST['email']))
  { $email = $_POST['email'];
  }
  if(isset($_POST['petname']))
  { $petname = $_POST['petname'];
  }
  if(isset($_POST['gender']))
  { $gender = $_POST['gender'];
  }
  if(isset($_POST['age']))
  { $age = $_POST['age'];
  }
  if(isset($_POST['type']))
  { $type = $_POST['type'];
  }
  if(isset($_POST['breed']))
  { $breed = $_POST['breed'];
  }

  echo $uid."<br>";
  echo $pwd."<br>";

  $sql = "INSERT INTO user(first,last,uid,pwd,houseno,street,pin,tel,email) VALUES('$firstname','$lastname','$username','$password','$housenumber','$street','$num','$urstel','$email')";
  $result = mysqli_query($conn,$sql);
  $sql = "INSERT INTO pet_info(Name,gender,age,type,breed) VALUES('$petname','$gender','$age','$type','$breed')";
  $result = mysqli_query($conn,$sql);
  header("Location: login.php");

 ?>
