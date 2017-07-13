<?php


$link = mysqli_connect("localhost", "root", "","login");
 if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$type = mysqli_real_escape_string($link, $_REQUEST['type']);
$breed = mysqli_real_escape_string($link, $_REQUEST['breed']);


// attempt insert query execution
$sql = "INSERT INTO pet_info (name, gender, age, type, breed) VALUES ('$name', '$gender', '$age','$type','$breed')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


 ?>
