<?php

include("database/db_conection.php");

$fullname =  $_REQUEST['fullname']; 
$date = $_REQUEST['date']; 
$time =  $_REQUEST['time'];
$temp = $_REQUEST['temp']; 
$pulserate = $_REQUEST['pulserate']; 
$oxygenlevel = $_REQUEST['oxygen'];

$view_users_query="select * from patient WHERE patient_full_name='$fullname'";
$run=mysqli_query($dbcon,$view_users_query);
while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
{
    $patient_id = $row[0];
}

$sql = "INSERT INTO patient_details VALUES (NULL, '$patient_id', '$temp','$pulserate','$oxygenlevel','$time','$date')"; 
if(mysqli_query($dbcon, $sql)){ 

    echo "<script>alert('Record for patient $fullname has been added', '_self')</script>";
    echo "<script> 
    if($oxygenlevel > 100){
        alert('Patient $fullname has oxygen level more than expected value', '_self')
    </script>";
    echo "<script>window.open('dashboard.php','_self')</script>";

} else{ 
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($dbcon); 
} 


?>

