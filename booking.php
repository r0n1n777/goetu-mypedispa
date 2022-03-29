<?php 
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('includes/dbconnection.php');
session_start();
error_reporting(0);

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "AC2951d1d8e5b727800ac2e88a04319202";
$token  = "4dff9b13216012fbfa94c5e22f266b0f";
$twilio = new Client($sid, $token);
if(isset($_POST['submit']))
  {
    $query4=mysqli_query($con,"select * from tblpage where PageType='contactus'");
              while($row4=mysqli_fetch_array($query4))
              {
                $salonemail = $row4['Email'];
                $salonaddr = $row4['PageDescription'];
                $salonaddr2 = str_replace('<br>', '', $salonaddr) ;
              }

        $query3=mysqli_query($con,"select * from tblsms");
              while($row3=mysqli_fetch_array($query3))
              {
                $phonesalon = $row3['PhoneNumber'];
                $phonesalon2 = substr($phonesalon, 0, 2).'-'.substr($phonesalon, 2, 3).'-'.substr($phonesalon, 5, 3).'-'.substr($phonesalon, 8,4);
              }

    $name=$_POST['name'];
    $fname = explode(' ',trim($name));
    $email=$_POST['email'];
    $services=$_POST['serv'];
    $serviceslower=strtolower($_POST['serv']);
    $adate=$_POST['date'];
    $atime=$_POST['time'];
    $phone="+1".str_replace("-", "", $_POST['phone']);
    $aptnumber = mt_rand(100000000, 999999999);
    $employee=$_POST['emp'];
    $notes = $_POST['notes'];
    $query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,EmployeeName,AptDate,AptTime,Services,Notes) value('$aptnumber','$name','$email','$phone','$employee','$adate','$atime','$services','$notes')");
    if ($query) {
 
try
 {
  //SMS Notification to Salon
  $message = $twilio->messages
                  ->create($phonesalon, 
                           array(
                               "body" => "You have a new online booking appointment. Here are the details: ". "\n" ."Name: ".$name. "\n" ."Appointment No.: ".$aptnumber. "\n" ."Service: ".$services. "\n" ."Date/Time: ".$adate." ".$atime. "\n" ."Technician: ".$employee."",
                               "from" => "+12054635799"
                           )
                  );


   //SMS Notification to Patrick
  $message = $twilio->messages
                  ->create("+17144488888", 
                           array(
                               "body" => "You have a new online booking appointment. Here are the details: ". "\n" ."Name: ".$name. "\n" ."Appointment No.: ".$aptnumber. "\n" ."Service: ".$services. "\n" ."Date/Time: ".$adate." ".$atime. "\n" ."Technician: ".$employee."",
                               "from" => "+12054635799"
                           )
                  );
  }
   catch (\Exception $e)
 {

 }

try
 {
//SMS Notification to Customer
                    $message = $twilio->messages
                  ->create($phone, 
                           array(
                               "body" => "Hi ".$fname[0]."! This is a reminder that you have a ".$serviceslower." appointment with ".$employee." at My Pedi Spa this ".$adate." at ".$atime.". Please call us at ".$phonesalon2." if you need to reschedule! Our location is at ".$salonaddr2.". Your appointment number is ".$aptnumber. ".",
                               "from" => "+12054635799"
                           )
                  );


                  //SMS Notification to Patrick
                    $message = $twilio->messages
                  ->create("+17144488888",
                           array(
                               "body" => "Hi ".$fname[0]."! This is a reminder that you have a ".$serviceslower." appointment with ".$employee." at My Pedi Spa this ".$adate." at ".$atime.". Please call us at ".$phonesalon2." if you need to reschedule! Our location is at ".$salonaddr2.". Your appointment number is ".$aptnumber. ".",
                               "from" => "+12054635799"
                           )
                  );

 }
   catch (\Exception $e)
 {

 }

//EMAIL Notification to Customer
$subject = 'My Pedi Spa Online Appointment';


 
$msg = '<table style="height: 290px; width: 592px;
            font-family: Arial; color:#3a3d3c;">
<tbody>
<tr>
<td style="width: 386px; padding: 3%;">
<h1>Thank You</h1>
<p>Hi '.$fname[0].',</p>
<p>Your appointment has been booked with My Pedi Spa.</p>
<p><strong>When:</strong> '.$adate.', '.$atime.'<br /><strong>Service:</strong> '.$services.'<br /><strong>Technician:</strong> '.$employee.'<br /><strong>Appointment Number:</strong> '.$aptnumber.'</p>
<p>Best Regards,<br />My Pedi Spa</p>
<p>&nbsp;</p>
</td>
<td style="width: 190px; background-color: #efefef; padding: 3%; border-radius: 10px;">
<img src="https://mypedispa.com/assets/img/icons/logo.png" style="width:150px;height: 50px;">
<p><h3>My Pedi Spa</h3><br /> <a href="https://www.google.com/maps/place/'.$salonaddr2.'" target="_blank">'.$salonaddr.'</a><br /> <a href="tel:'.$phonesalon.'">'.$phonesalon2.'</a><br><a href="mailto:'.$salonemail.'">'.$salonemail.'</a></p>
<p><br /><a title="Visit Website" href="https://mypedispa.com/" target="_blank" rel="noopener">Visit Website</a></p>
</td>
</tr>
</tbody>
</table>';

       $mail = new PHPMailer();
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'az1-ss30.a2hosting.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'no-reply@mypedispa.com';                     // SMTP username
    $mail->Password   = '{IzezL%*m)!N';                               // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = "587";                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
  $mail->setFrom('no-reply@mypedispa.com', 'no-reply@mypedispa.com');  //from
$mail->addAddress($email, $name);     // to
   
$mail->addReplyTo($salonemail, 'My Pedi Spa');



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $msg;
   

  $mail->send();

//EMAIL Notification to Salon
$subject2 = 'Notification: NEW My Pedi Spa Online Appointment';

$msg2= '<table style="height: 290px; width: 592px;
            font-family: Arial; color:#3a3d3c;">
<tbody>
<tr>
<td style="width: 386px; padding: 3%;">
<h1>You have a new online booking appointment</h1>
<p>Here are the details:</p>
<p><strong>When:</strong> '.$adate.', '.$atime.'<br /><strong>Service:</strong> '.$services.'<br /><strong>Technician:</strong> '.$employee.'<br /><strong>Appointment Number:</strong> '.$aptnumber.'</p>
<p>&nbsp;</p>
</td>
<td style="width: 190px; background-color: #efefef; padding: 3%; border-radius: 10px;">
<img src="https://mypedispa.com/assets/img/icons/logo.png" style="width:150px;height: 50px;">
<p><h3>My Pedi Spa</h3><br /> <a href="https://www.google.com/maps/place/'.$salonaddr2.'" target="_blank">'.$salonaddr.'</a><br /> <a href="tel:'.$phonesalon.'">'.$phonesalon2.'</a><br><a href="mailto:'.$salonemail.'">'.$salonemail.'</a></p>
<p><br /><a title="Visit Website" href="https://mypedispa.com/" target="_blank" rel="noopener">Visit Website</a></p>
</td>
</tr>
</tbody>
</table>';

    $mail2 = new PHPMailer();
    $mail2->isSMTP();                                            // Send using SMTP
    $mail2->Host       = 'az1-ss30.a2hosting.com';                    // Set the SMTP server to send through
    $mail2->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail2->Username   = 'no-reply@mypedispa.com';                     // SMTP username
    $mail2->Password   = '{IzezL%*m)!N';                               // SMTP password
    $mail2->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail2->Port = "587";                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients

  $mail2->setFrom('no-reply@mypedispa.com', 'no-reply@mypedispa.com');  //from
$mail2->addAddress($salonemail, 'My Pedi Spa');     // to
    // Content
    $mail2->isHTML(true);                                  // Set email format to HTML
    $mail2->Subject = $subject2;
    $mail2->Body    = $msg2;
   

  $mail2->send();


$ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 echo "<script>window.location.href='thank-you.php'</script>";  



  }
  else
    {
     echo '<script>swal("Something Went Wrong", "Please check and try again.", "error");</script>';
    }
  
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Online Appointment -  My Pedi Spa</title>

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
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
 legend {
   color: #000;
   font-size: 20px;
   margin-bottom: 10px;
}
 #hide{
  display: none;
 }
body
{
  font-family: 'Poppins';
}
    </style>
</head>

<body>
<?php include_once('includes/nav.php');?>
 

    <main class="page contact-us-page">
        <section class="clean-block light">
            <div class="container">
               
        <?php include_once('app/index.html');?>
 
                    <br><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">

                 <?php
session_start();
include('includes/dbconnection.php');
?>




 <footer id="footerpad " style="color:#8B0000;background-color:#fff;;margin-top: 67px;padding-bottom: 50px;">
                <div class="container">
                           <div class="block-heading text-center">
                   <h2 style="font-weight:400;color:#333333;">Call us to book an appointment!</h2>
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
                            <p ><a href="tel:<?php  echo $row['MobileNumber'];?>" style="font-weight: 400;color:#8B0000;"><i class="fa fa-phone fa-3x" aria-hidden="true"></i></as><br><br>
                            <a href="tel:<?php  echo $row['MobileNumber'];?>" style="font-weight: 500;color:#8B0000;"><?php  echo $row['MobileNumber'];?></a></p>
                        </div>
                
                   
                    </div>
                    <hr style="border-color: :#8B0000;background-color: #8B0000;color:#8B0000;">
                    <div  class="row text-center text-dark">
                         <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">   <div class="block-heading text-center">
                   <br><br><h2 style="font-weight:300;color:#333333;">Business Hours</h2>
                    <hr style="height: 2px;width: 7%;border-color: :#8B0000;background-color: #8B0000;color:#8B0000;"><br>
                    <p></i>
                            <span style="font-weight: 500;line-height: 2.2;color:#333333;"> <?php  echo $row['Timing'];?></span></p>
                </div>

                </div>
                         <div class="col-md-4 col-lg-3 mx-auto">
                           <p> <i class="fa fa-envelope fa-3x" aria-hidden="true"></i><br><br>
                            <span style="font-weight: 500;color:#8B0000;"> <?php  echo $row['Email'];?></span></p>
                        </div>
                        <div class="col-md-4 col-lg-3 mx-auto">
                              <p ><span style="font-weight: 400;"><i class="fa fa-map-marker fa-3x"  aria-hidden="true"></i></span><br><br>  <span style="color:#8B0000;font-weight: 500;line-height: 2.2;"><?php  echo $row['PageDescription'];?></span><br><a class="btn btn-primary btn-sm" type="button" style="font-size:12px;font-weight:600;background-color: #B8B8B8;border-color: #B8B8B8;color:#333333;" href="<?php echo $salonaddr2;?>" >GET DIRECTIONS</a></p>
                              </p>
 <?php } ?>
                        </div>
                    </div>
                </div>
            </footer>
                    
                        <div class="row" >

                            <div class="col-sm-4"></div>
                       
                        <div class="col-md-1"></div>
                    </div>
                
            </div>
        </section>
        <!--     <div  class="btnicon">
        <?php// include_once('includes/sideicon.php');?>
      </div>-->
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
         <script src="assets/js/bootstrap-datepicker.js"></script>

</body>

</html>