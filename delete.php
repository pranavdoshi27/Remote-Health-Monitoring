<?php

include("database/db_conection.php");
$delete_id=$_GET['del'];
$delete_query="delete from patient WHERE patient_full_name='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
    echo "<script>alert('$delete_id user has been deleted', '_self')</script>";
    echo "<script>window.open('dashboard.php','_self')</script>";
}

?>

