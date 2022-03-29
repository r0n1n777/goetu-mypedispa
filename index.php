<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - My Pedi Spa</title>
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


.circular img {
     height: 129px;
  width: 129px;
  border-radius: 50%;
  object-fit: cover;
  border:1px solid #8B0000;
padding:5px;
}



#gallery {
/*   display:grid; */
  margin: 0 ;
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


@media (max-width:399px) {
  #gallery {
    display:grid;
    grid-template-columns:1fr 1fr;
    grid-gap: 0;
  }
}

@media (min-width:400px) {
  #gallery {
      display:grid;
    grid-template-columns:1fr 1fr 1fr;
       grid-gap: 0;
  }
}

@media (min-width:600px) {
  #gallery {
      display:grid;
    grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr;
       grid-gap: 0;
  }
}

.btnicon
{
  position: fixed;
  text-align: right;
  top: 25%;
  right: 1%;
}

  </style>
</head>

<body>
   <?php include_once('includes/nav.php');?>
 
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image: url(&quot;assets/img/shutterstock_343091618.png&quot;);color: rgba(9,34,255,0.39);">
            <div class="text">
                <h2><span style="font-family: 'shinkregular',arial; font-size: 100px; font-weight: 500;">My Pedi Spa</span>
                <p style="font-weight: 400;">Professional Nail Care for Ladies & Gentlemen</p>
                <a class="btn btn-danger btn-lg" type="button" style="background-color: #8B0000;border-color: #8B0000;" href="#about">&emsp;&emsp;FIND OUT MORE&emsp;&emsp;</a></div>
        </section>
        <section class="clean-block clean-info light text-light" style="background-color: #8B0000;" id="about">
            <div class="container">
                <div class="block-heading">
                                                         <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                    <h2 style="font-weight: 500;" ><?php  echo $row['PageTitle'];?></h2>
                    <hr style="height: 2px;width: 7%;border-color: :#fff;background-color: #fff;color:#fff;">
                </div>
                <div class="row align-items-center">
                    
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">

                        <div >
                            <p style="font-weight: 300;line-height: 2.2;"><?php  echo $row['PageDescription'];?></p>
                             <a class="btn btn-danger btn-lg" type="button" style="background-color: #fff;border-color: #fff;color:#8B0000;" href="./services.php">&emsp;&emsp;GET STARTED!&emsp;&emsp;</a>
                             <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                   <h2 style="font-weight:500;color:#8B0000;">At Your Service</h2>
                    <hr style="height: 2px;width: 7%;border-color: :#8B0000;background-color: #8B0000;color:#8B0000;">
                </div>
                <div class="row text-center" style="color:#8B0000;">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="circular"><img src="assets/img/IMG_9291.png" ></div>
                        <br>NATURAL NAILS
                        <br><br>
                         <div class="circular"><img src="assets/img/IMG_9285-(1).png" ></div>
                        <br>LUXURY SPA PEDICURE
                        <br><br>
                         <div class="circular"><img src="assets/img/shutterstock_1291818742.jpg" ></div>
                        <br>CHILDREN SERVICES
                        <br><br>
                         <div class="circular"><img src="assets/img/121.jpg" ></div>
                        <br>FULL SET (SOLAR ACRYLIC)
                        <br><br>
                         <div class="circular centered"><img src="assets/img/4.jpg" ></div>
                        <br>FILL (SOLAR ACRYLIC)
                    </div>
                     <div class="col-md-4">
                        
                         <div class="circular"><img src="assets/img/IMG_8563.png" ></div>
                        <br>DIPPING POWDER (NEW/POPULAR)
                        <br><br>
                         <div class="circular"><img src="assets/img/shutterstock_188704022.png" ></div>
                        <br>LASHES
                        <br><br>
                         <div class="circular"><img src="assets/img/shutterstock_230437132.png" ></div>
                        <br>WAXING
                        <br><br>
                         <div class="circular"><img src="assets/img/IMG_9406.png" ></div>
                        <br>ADDITIONAL SERVICES
                        <br><br>

                     </div>
                     <div class="col-md-2"></div>

                </div>
           <div class="row text-center">
             <div class="col-md-4"></div>
             <div class="col-md-4"><a class="btn btn-danger btn-sm" type="button" style="font-size: 13px;background-color: #8B0000;border-color: #8B0000;" href="./services.php">&emsp;SERVICES DETAILS&emsp;</a></div>
             <div class="col-md-4"></div>
           </div>
            </div>
        </section>
              <div class="container-fluid">
           <div class="row " >
               <div class="col-xs-12" style="background-color: #fff;">

<div id="gallery">
	       	    <?php
            

            $sql = "SELECT * FROM tblimage where category='front'";
            $images = mysqli_query($con,$sql);



            while($image = $images->fetch_assoc()){


            ?> 
  <div class="photo">
    <img  src="./assets/img/upload/<?php echo $image['image']; ?>" />
  </div>
   <?php } ?>
  </div>
</div>
               </div></div>
            </div>
        </section>
        
        <section class="clean-block clean-info light text-light" style="background-color: #8B0000;">
            <div class="container">
                <div class="block-heading">
                    <h2 style="font-weight: 500;">Our Photos</h2>
                    <hr style="height: 2px;width: 7%;border-color: :#fff;background-color: #fff;color:#fff;">
                </div>
                <div class="row align-items-center">
                    
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        
                        <div >
               
                             <a class="btn btn-danger btn-lg" type="button" style="background-color: #fff;border-color: #fff;color:#8B0000;" href="gallery.php">&emsp;&emsp;SHOW MORE...&emsp;&emsp;</a>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

            </div>
        </section>
        <div  class="btnicon">
        <?php include_once('includes/sideicon.php');?>
      </div>

           <?php include_once('includes/footer.php');?>
 
     
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="assets/js/theme.js"></script>
   
</body>

</html>