<?php
include('includes/dbconnection.php');
    

    $id = $_GET['id']; 

    // sending query
    $query = mysqli_query($con,"delete from tblappointment where ID = '$id'");
 header('location:../admin/all-appointment.php'); 
?>