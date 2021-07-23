<?php

include("database/db_conection.php");

$fullname =  $_REQUEST['fullname']; 
$age = $_REQUEST['age']; 
$gender =  $_REQUEST['gender'];
$email = $_REQUEST['email']; 
$address = $_REQUEST['address']; 
$number = $_REQUEST['number'];
$date = $_REQUEST['date'];
$bloodtype = $_REQUEST['bloodtype'];

$sql = "INSERT INTO patient VALUES (NULL, '$fullname', '$age','$gender','$email','$address','$number', '$date', '$bloodtype')"; 
if(mysqli_query($dbcon, $sql)){ 
    // echo "<h3>data stored in a database successfully." 
    //     . " Please browse your localhost php my admin" 
    //     . " to view the updated data</h3>";  

    // echo nl2br("\n$first_name\n $last_name\n "
    //     . "$gender\n $address\n $email"); 
    echo "<script>alert('$fullname patient has been added', '_self')</script>";
    echo "<script>window.open('dashboard.php','_self')</script>";

} else{ 
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($dbcon); 
} 


?>

