connect.php
DETAILS
ACTIVITY
connect.php
Sharing Info
A

General Info
Type
PHP
Size
1 KB (1,470 bytes)
Storage used
0 bytesOwned by someone else
Location
project
Owner
Aysha Athar
Modified
29 Apr 2017 by Aysha Athar
Opened
07:36 by me
Created
29 Apr 2017
Description
Add a description
Download permissions
Viewers can download
All selections cleared


<?php


$link = mysqli_connect("localhost", "root", "","login");
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
/// attempt insert query execution
$query= "SELECT * FROM user WHERE (`uid` LIKE '%".$uid."%')";
$querys= mysqli_query($link, $query);
if(mysqli_num_rows($querys) > 0)
{
$results = "SELECT * FROM pet_clinic WHERE (`Time` LIKE '%".$time."%') AND (`Apptdate` LIKE '%".$Apptdate."%') AND (`Doctor` LIKE '%".$Doctor."%')";
$result = mysqli_query($link, $results);

if (mysqli_num_rows($result) > 0)
{
  echo "select another option";
}
else
 {
  $sql = "INSERT INTO pet_clinic (uid,Time, Apptdate,Doctor,service) VALUES ('$uid','$time', '$Apptdate','$Doctor','$service')";

  if(mysqli_query($link, $sql)){
  header("location: main.html");
      echo "Records added successfully.";
  }
  else
  {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

}  # code...
  }
  else
 {
    echo "This username does not exist!";
  }


}

// Close connection
mysqli_close($link);


 ?>
