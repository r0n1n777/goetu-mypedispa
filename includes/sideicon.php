 <?php
session_start();
include('includes/dbconnection.php');
?>


                                                      <?php

$ret=mysqli_query($con,"select * from tblicon");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
             <a href="<?php  echo $row['IconLink'];?>" target="_blank"><img src="assets/img/icons/<?php  echo $row['IconName'];?>.png" style="width:5%;height: 5%;"></a></p>
     

         <?php $cnt++; } ?>