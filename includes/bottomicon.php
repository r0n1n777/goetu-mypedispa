 <?php
session_start();
include('includes/dbconnection.php');
?>

                                                    


           <?php
 $query3=mysqli_query($con,"select * from tblsms");
              while($row3=mysqli_fetch_array($query3))
              {
                $phonesalon = $row3['PhoneNumber'];
               
 ?>
             <a href="tel:<?php  echo $phonesalon;?>" target="_blank"><img src="assets/img/icons/27.png" style="width:35px;height:35px;"></a>
              <?php } ?>
              <?php 
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
     $salonaddr = $row['PageDescription'];
   
                $salonaddr2 = "https://www.google.com/maps/place/".str_replace('<br>', '', $salonaddr) ;
  ?>
       <a href="<?php  echo $salonaddr2;?>" target="_blank"><img src="assets/img/icons/28.png" style="width:35px;height:35px;"></a>
        <?php } ?>
       <a href="booking.php" target="_blank"><img src="assets/img/icons/calendar.png" style="width:35px;height:35px;"></a>
     

    