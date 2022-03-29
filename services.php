<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html style="width: 100%;max-width: 100%;height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Services - My Pedi Spa</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" >
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fonts.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Filterable-Gallery-with-Lightbox.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="assets/css/Glass-Panel-With-Images.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
        
    <style>
                     .btnicon
{
  position: fixed;
  text-align: right;
  top: 25%;
  right: 1%;
} 
      .btnicon2
{
  position: fixed;
  text-align: right;
  bottom: 5%;
  right: 3%;
  padding: 1%;
}
.btnicon2 img
{

  border-radius: 50%;
  object-fit: cover;
  border:1px solid #8B0000;
padding:5px;

}


.circular img {
     height: 129px;
  width: 129px;
  border-radius: 50%;
  object-fit: cover;
  border:1px solid #8B0000;
padding:5px;
}

.photo img {
  width: 100%;
  height:233px;
  object-fit:cover;
  display:block;
}

.photo {
  grid-row: span 0;
}




.list-add
{
  font-size: .9rem;

 padding: 0;
 margin:0;
   display:  inline-block;

}
ul.list-add {
    margin-top: 0;
    display: block;
    list-style-type: none;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
    
    color:#8B0000;
}
.list-hours
{
  font-size: .9rem;
   border-bottom:0.5px solid #8B0000;
 padding: 0;
 margin:0;
   display:  inline-block;

}
ul.list-hours {
    margin-top: 0;
    display: block;
    list-style-type: none;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
    
    color:#8B0000;
}
ul.menu li {
  list-style: none; 
  display: inline;
  color:#000000;
  font-weight: llghter;

}
ul.menu2 li {
  list-style: none; 
  display: inline;
  font-weight: llghter;

}

ul.menu li:before { content: " \2022 ";}
ul.menu li:last-child:after { content: none; }


ul.menu2  li:before { content: "  \2022  "; }
ul.menu2  li:last-child:after { content: ""; }
</style>


</head>

<body style="height: auto;width: 100%;max-width: 100%;">

<?php include_once('includes/nav.php');?>
 
    
        <div class="container" style="padding:7%;">
            <div class="jscroll" id="jscroll">
 
 <div class="block-heading">
                   <h2 style="font-weight:400;color:#8B0000;padding-top: 10%;"  class="text-center">Our Services</h2>
                    <hr style="height: 2px;width: 7%;border-color: :#8B0000;background-color: #8B0000;color:#8B0000;">
                </div>
                <br/><br/>
                <div class="row text-center" style="color:#8B0000;">
                   <div class="col-md-4"></div>
                    <div class="col-md-4"> <div class="circular"><img src="assets/img/IMG_9291.png" ></div>
                        <br/><h3 class='text-center' style="font-weight:600;color:#8B0000;">NATURAL NAILS</h3>
                        <br/></div>

                    <div class="col-md-4"></div>
                </div>

                  <div class="row text-center" style="color:#8B0000;">
                   <div class="col-md-4"></div>
                    <div class="col-md-4">  

                            <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='NATURAL NAILS' LIMIT 4");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li class="d-flex list-hours"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>

                        </div>
             
                        <div class="col-md-4"></div>

                
                </div>
<br/><br/>

          <div class="row text-center" style="color:#8B0000;">
                   <div class="col-md-3"></div>
                    <div class="col-md-6">     <div class="circular"><img src="assets/img/IMG_9285-(1).png" ></div>
                        <br/><h3 class='text-center' style="font-weight:600;">LUXURY SPA PEDICURE</h3>
                        <br/>
                            <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='LUXURY SPA PEDICURE' AND NOT SubCategory='Additional' LIMIT 0,2");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>
                            <p class="text-center"><span style="font-weight: 600;"><?php  echo $row['ServiceName'];?>&emsp;<?php  echo "$".$row['Cost'];?></span><br/>
                              <?php  echo $row['ServiceDesc'];?></p>

                           
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                            <br/><br/>
                            <span style="font-weight: 600;" class='text-center'>Additional</span>
                                   <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='LUXURY SPA PEDICURE' AND SubCategory='Additional'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li  class="d-flex list-add"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>

                          </div>
                    <div class="col-md-3"></div>
                </div>
                 <hr style="border-color: :#8B0000;background-color: #8B0000;color:#8B0000;">
                      <div class="row text-center" style="color:#8B0000;">
                   <div class="col-md-3"></div>
                    <div class="col-md-6"> 
                         <br/><br/>
                            <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='LUXURY SPA PEDICURE' AND NOT SubCategory='Additional' LIMIT 2,3");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>
                            <p class="text-center"><span style="font-weight: 600;"><?php  echo $row['ServiceName'];?>&emsp;<?php  echo "$".$row['Cost'];?></span><br/>
                              <?php  echo $row['ServiceDesc'];?></p>

                           
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                            <br/><br/>
                        <span  class="text-center" style="font-weight: 600;" >Additional</span><br/>
                                   <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='LUXURY SPA PEDICURE' AND SubCategory='Addition'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li  class="d-flex list-add"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>

                          </div>
                    <div class="col-md-3"></div>
                </div>
                <hr style="border-color: :#8B0000;background-color: #8B0000;color:#8B0000;">

                 <div class="row" style="color:#8B0000;">
                   <div class="col-md-3"></div>
                    <div class="col-md-6 text-center"> 
                      <p class="text-center"><strong>**PARAFFIN WAX INCLUDED**</strong></p>
                 
                        <br/><br/>
                                  <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='LUXURY SPA PEDICURE' AND SubCategory='PARAFFIN WAX'");
                           
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>
                            <p class="text-center"><span style="font-weight: 600;"><?php  echo $row['ServiceName'];?>&emsp;<?php  echo "$".$row['Cost'];?></span><br/>
                              <?php  echo $row['ServiceDesc'];?></p>

                           
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                            <br/><br/>
                             <p  class="text-center" style="font-weight: 600;">Additional</p><br/>
                                   <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='LUXURY SPA PEDICURE' AND SubCategory='Addition'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li  class="d-flex list-add"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                            <br/><br/>
                          </div>
                    <div class="col-md-3"></div>
                </div>

 </div>  


 <div class="row" style="color:#8B0000;">
                   <div class="col-md-1"></div>
                    <div class="col-md-4 "> 
                        <br/><div class="circular text-center"><img src="assets/img/121.jpg" ></div>
                        <br/><h3 style="font-weight:600;" class='text-center'><center>FULL SET (SOLAR ACRYLIC)</center></h3>
                        <br/>
                                <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='FULL SET (SOLAR ACRYLIC)'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li class="d-flex list-hours"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                            <br/><br/>
                         <div class="circular text-center"><img src="assets/img/IMG_9406.png" ></div>
                        <br/><h3 style="font-weight:600;"><center>ADDITIONAL SERVICES</h3></span>
                        <br/>
                          <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='ADDITIONAL SERVICES'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li class="d-flex list-hours"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>


                                    <br/><br/>  
                       <div class="circular text-center"><img src="assets/img/shutterstock_1291818742.jpg" ></div>
                        <br/><h3 style="font-weight:600;" class='text-center'><center>CHILDREN SERVICES</center></h3>
                        <br/>
                              <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='CHILDREN SERVICES'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li class="d-flex list-hours"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                      </div>
                          <div class="col-md-2"></div>
                    <div class="col-md-4"> 

                        <br/>
                         <div class="circular text-center"><img src="assets/img/4.jpg" ></div>
                        <br/><h3 style="font-weight:600;" class='text-center'><center>FILL (SOLAR ACRYLIC)</center></h3>
                        <br/>
                                 <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='FILL SET'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li class="d-flex list-hours"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                            <br/><br/>
                         <div class="circular text-center"><img src="assets/img/shutterstock_230437132.png" ></div>
                        <br/><h3 style="font-weight:600;" class='text-center'><center>WAXING</center></h3>
                        <br/>
                                  <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='WAXING'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li class="d-flex list-hours"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                            <br/><br/>
                         <div class="circular text-center"><img src="assets/img/IMG_8563.png" ></div>
                        <br/><h3 style="font-weight:600;" class='text-center'><center>DIPPING POWDER (NEW/POPULAR)</center></h3>
                        <br/>
                                <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='DIPPING POWDER'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li class="d-flex list-hours"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                            <br/><br/>
                           <div class="circular text-center"><img src="assets/img/shutterstock_188704022.png" ></div>
                        <br/><h3 style="font-weight:600;" class='text-center'><center>LASHES</center></h3>
                        <br/><br/>
                           <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='LASHES'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul>
                            <li class="d-flex list-hours"><?php  echo $row['ServiceName'];?><span class="ml-auto"><?php  echo "$".$row['Cost'];?></span></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                        <br/><br/>  
                      </div>
                    <div class="col-md-1"></div>
     </div>

     <hr style="border-color: :#8B0000;background-color: #8B0000;color:#8B0000;">
            <div class="row text-center" style="color:#8B0000;">
                   <div class="col-md-3"></div>
                    <div class="col-md-6">     <div class="circular"><img src="assets/img/IMG_9285-(1).png" ></div>
                        <br/><h3 style="font-weight:600;" class='text-center'>COMPLIMENTARY BEVERAGES</h3>
                        <br/>
                             <p  class="text-center" style="font-weight: 600;">Wine</p><br/>
                            <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='COMPLIMENTARY BEVERAGES' AND SubCategory='Wine'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul class="menu2">
                            <li ><?php  echo $row['ServiceName'];?></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                             <br/><br/>
                                  <p  class="text-center" style="font-weight: 600;">Soft Drinks</p><br/>
                            <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='COMPLIMENTARY BEVERAGES' AND SubCategory='Soft Drinks'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul  class="menu2">
                            <li><?php  echo $row['ServiceName'];?></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                               <br/><br/>
                                    <p  class="text-center" style="font-weight: 600;">Other Beverages</p><br/>
                            <?php
                            $ret=mysqli_query($con,"select *from  tblservices where ServiceCategory='COMPLIMENTARY BEVERAGES' AND SubCategory='Other Beverages'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {

                            ?>

                            <ul class="menu2">
                            <li ><?php  echo $row['ServiceName'];?></li>
                            </ul>
                             <?php 
                            $cnt=$cnt+1;
                            }?>
                          </div>
                    <div class="col-md-3"></div>
                </div>
      <div  class="btnicon">
        <?php include_once('includes/sideicon.php');?>
      </div>
        <div  class="btnicon2">
        <?php include_once('includes/bottomicon.php');?>
      </div>
         <footer style="padding-top: 15%;">
        <div class="row text-center">
          <div class="col-md-3"></div>
          <div class="col-md-6 text-secondary"><strong>MY PEDI SPA</strong><br/>5060 S Fort Apache Rd #160 Las Vegas, NV 89148.<br/> 702-740-2100</div>
          <div class="col-md-3"></div>
        </div>
      </footer>
    </div>

     

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>