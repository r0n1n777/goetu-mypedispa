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
    <title>Subscribe -  My Pedi Spa</title>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
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

    </style>
</head>

<body>
<?php include_once('includes/nav.php');?>
 
    <main class="page contact-us-page">
        <section class="clean-block light">
            <div class="container">
                <div class="block-heading">
                    <h2 style="font-weight: 300;color: #8B0000;">Subscribe to Our Salon</h2>
                </div>
        
                    <br><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">

                    <form  method="post" id="contactfrm">
                    <div class="form-group"><label>Your Name*</label><input class="form-control" type="text" id="name" name="name"></div>
                    <div class="form-group"><label>Phone (xxx) xxx-xxxx</label><input class="form-control" type="text" id="phone" name="phone"></div>
                    <div class="form-group"><label>Note</label><textarea class="form-control" id="note" name="note"></textarea></div>
                      <br><div class="g-recaptcha" data-sitekey="6LcS8boZAAAAAEEXeH6qDeVBKoCecOOKGlpEOqqG"></div><br>
                    <div class="form-group"><button class="btn btn-danger btn-block" id="btnSend" name="btnSend" type="submit" style="background-color: #8B0000;border-color: #8B0000;width: 150px;">Submit</button></div>



<?php

/* [VERIFY CAPTCHA FIRST] */
$secret = '6LcS8boZAAAAAJXHaXImyZ876nj4Zf5BeOYtotK7'; 
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST['g-recaptcha-response'];
$verify = json_decode(file_get_contents($url));

if(isset($_POST['btnSend'])){
if ($verify->success) {
 $name=$_POST['name'];
    $note=$_POST['note'];

   $phone=$_POST['phone'];
    $query=mysqli_query($con,"insert into tblsubscribe(Name,PhoneNumber,Note) value('$name','$phone','$phone')");
    if ($query) {
$ret=mysqli_query($con,"select ID from tblsubscribe Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);

  echo 
    '<script>swal("Success!", "Thank you for subscribing. You will receive the latest updates and promotions.", "success");</script>'; 

  }


}
else {
  
      echo '<script>swal("Error", "Invalid captcha. Please check and try again.", "error");</script>';
}
}
?>
                </form></div> 
                        <div class="col-md-1"></div>
                    </div>
                
            </div>
        </section>
    </main>
 <div  class="btnicon">
        <?php include_once('includes/sideicon.php');?>
      </div>
 <div  class="btnicon2">
        <?php include_once('includes/bottomicon.php');?>
      </div>
           
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="assets/js/theme.js"></script>


                    <script>


     $(document).ready(function(e) {

            $("#btnSend").click(function(e) {

                   if (fullname.value.trim().length == 0) {
                    
                    document.getElementById("fullname").setAttribute("style", "border: 1px solid red;");
                    fullname.value = "";
                    $('#fullname').attr('placeholder', 'This field is required.');
                   
                    return false;
                }
                else
                {
                   document.getElementById("fullname").setAttribute("style", "border:none;");
                }

                 if (eadd.value.trim().length == 0) {
                    
                    document.getElementById("eadd").setAttribute("style", "border: 1px solid red;");
                    eadd.value = "";
                    $('#eadd').attr('placeholder', 'This field is required.');
                   
                    return false;
                }
                    else
                {
                   document.getElementById("eadd").setAttribute("style", "border:none;");
                }

               if (msg.value.trim().length == 0) {
                    
                    document.getElementById("msg").setAttribute("style", "border: 1px solid red;");
                    msg.value = "";
                    $('#msg').attr('placeholder', 'This field is required.');
                   
                    return false;
                }
                    else
                {
                   document.getElementById("msg").setAttribute("style", "border:none;");
                }


          
            var $recaptcha = document.querySelector('#g-recaptcha-response');

            if($recaptcha) {
                $recaptcha.setAttribute("required", "required");
            }

          
             });



        });
</script>
</body>

</html>