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
         <script type="text/javascript">
         function swap(image) {
             document.getElementById("img").src = image.href;
         }
     </script>

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
  background-color: white;
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
}</style>
</head>
<body>
 <?php include_once('includes/nav.php');?>
 
    <main class="page pricing-table-page" >
    <section  style="background-color: #fff;">
                  <div class="container-fluid">
           <div class="row">
               <div class="col-xs-12" style="background-color: #fff;">

<div id="gallery">
              <?php
            

            $sql = "SELECT * FROM tblimage where category='main'";
            $images = mysqli_query($con,$sql);



            while($image = $images->fetch_assoc()){


            ?> 
  <div class="photo">
    <!--<img  src="./assets/img/upload/<?php //echo $image['image']; ?>" />-->
 <a href="./assets/img/upload/<?php echo $image['image']; ?>"><img id="img" class="img-fluid" data-caption="<strong>Image description</strong><br><em>Lorem ipsum</em>" src="./assets/img/upload/<?php echo $image['image']; ?>" alt="image"></a>
  </div>
   <?php } ?>
  </div>
</div>
               </div></div>
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
               
                             <a class="btn btn-primary btn-lg" type="button" style="background-color: #fff;border-color: #fff;color:#8B0000;" href=".">&emsp;&emsp;SHOW MORE...&emsp;&emsp;</a>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

            </div>
        </section>
        <div  class="btnicon">
        <?php include_once('includes/sideicon.php');?>
      </div>
        <div  class="btnicon2">
        <?php include_once('includes/bottomicon.php');?>
      </div>
        </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>