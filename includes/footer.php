 <?php
session_start();
include('includes/dbconnection.php');
?>




 <footer id="footerpad " style="color:#8B0000;background-color:#fff;padding-top: 70px;margin-top: 67px;padding-bottom: 50px;">
                <div class="container">
                           <div class="block-heading text-center">
                   <h2 style="font-weight:400;color:#333333;">Let's Get In Touch!</h2>
                    <hr style="height: 2px;width: 7%;border-color: :#8B0000;background-color: #8B0000;color:#8B0000;"><br>
                </div>

                                                      <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
     $salonaddr = $row['PageDescription'];
                $salonaddr2 = "https://www.google.com/maps/place/".str_replace('<br>', '', $salonaddr) ;

?>


                    <div class="row text-center text-dark">
                        <div class="col-md-4 col-lg-3 mx-auto">
                            <p ><span style="font-weight: 400;"><i class="fa fa-phone fa-3x" aria-hidden="true"></i></span><br><br>
                            <span style="font-weight: 500;color:#8B0000;"><?php  echo $row['MobileNumber'];?></span></p>
                        </div>
                        <div class="col-md-4 col-lg-3 mx-auto">
                           <p> <i class="fa fa-envelope fa-3x" aria-hidden="true"></i><br><br>
                            <span style="font-weight: 500;color:#8B0000;"> <?php  echo $row['Email'];?></span></p>
                        </div>
                        <div class="col-md-4 col-lg-3 mx-auto">
                              <p ><span style="font-weight: 400;"><i class="fa fa-map-marker fa-3x"  aria-hidden="true"></i></span><br><br>  <span style="color:#8B0000;font-weight: 500;line-height: 2.2;"><?php  echo $row['PageDescription'];?></span><br><a class="btn btn-primary btn-sm" type="button" style="font-size:12px;font-weight:600;background-color: #B8B8B8;border-color: #B8B8B8;color:#333333;" href="<?php echo $salonaddr2;?>" >GET DIRECTIONS</a></p>
                              </p>

                        </div>
                   
                    </div>
                    <hr style="border-color: :#8B0000;background-color: #8B0000;color:#8B0000;">
                    <div  class="row text-center text-dark">
                         <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">   <div class="block-heading text-center">
                   <br><br><h2 style="font-weight:300;color:#333333;">Business Hours</h2>
                    <hr style="height: 2px;width: 7%;border-color: :#8B0000;background-color: #8B0000;color:#8B0000;"><br>
                    <p></i>
                            <span style="font-weight: 500;line-height: 2.2;color:#8B0000;"> <?php  echo $row['Timing'];?></span></p>
                </div>
 <?php } ?>
                 <a class="btn btn-primary btn-lg" type="button" style="background-color: #8B0000;border-color: #8B0000;" href="./booking.php">&emsp;&emsp;BOOK NOW&emsp;&emsp;</a></div>
                 <div class="col-md-2"></div>
                    </div>
                </div>
            </footer>