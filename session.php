<?php
$link = mysqli_connect("localhost", "root", "","logintest");
 if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($link,"select uid from user where uid = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['uid'];

   if(!isset($_SESSION['login_user']))
   {
      header("location:login.php");
   }
?>
