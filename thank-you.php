<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Thank you - My Pedi Spa</title>
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
</head>

<body style="background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('assets/img/bg.jpg');background-image: url(&quot;none&quot;);background-color: white;">
     
  <?php include_once('includes/nav.php');?>



    <section class="page-section about-heading text-center">
        <div class="container"><img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/shutterstock_626152427.jpg" >
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-lg-11 col-xl-10 mx-auto">
                        <div class="bg-faded rounded " style="padding-top: 10%;" >
                            <h5 class="section-heading "> <div class="block-heading">
                    <h2 style="font-weight: 300;color: #8B0000;">Thank You</h2>
                </div>
        
                                 <p class="text-center" style="margin-right: 15px;margin-left: 15px;padding-bottom: 2%;">
               <h5 style="font-weight: 500;"> Your Appointment no. is <span style="color:  #8B0000;"> <?php echo $_SESSION['aptno'];?></span>. Kindly wait for the notification via e-mail and phone number. We will contact you should anything changes. </h5> <br>
                <div class="btn-group" role="group"><a class="btn btn-danger btn-lg text-uppercase btn-block" role="button"  href="booking.php"  style="background-color:  #8B0000;">&emsp; BOOK ANOTHER APPOINTMENT &emsp;</a></div>

        </p>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once('includes/info.php');?>
 
<?php include_once('includes/footer.php');?>
 
    
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
   <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>