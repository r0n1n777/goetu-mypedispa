<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Manage Gallery - My Pedi Spa Admin</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">


 <style type="text/css">
    
    .close-icon{
    border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
       
    </style>
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="container">


    <h3 class="title1">Manage Gallery</h3>
					
    <form action="imageUpload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">


        <?php if(!empty($_SESSION['error'])){ ?>
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    <li><?php echo $_SESSION['error']; ?></li>
                </ul>
            </div>
        <?php unset($_SESSION['error']); } ?>


        <?php if(!empty($_SESSION['success'])){ ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo $_SESSION['success']; ?></strong>
        </div>
        <?php unset($_SESSION['success']); } ?>


        <div class="row">
            <div class="col-md-4">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-4">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-1">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>


    </form> 


  <div class="container" style="height: auto;">
        <div class="row flex-box flex-wrap-wrap flex-justify-left flex-align-left">

     <div class="col-sm-9">   <div class="row">
            <?php
            

            $sql = "SELECT * FROM tblimage";
            $images = mysqli_query($con,$sql);



            while($image = $images->fetch_assoc()){


            ?> 
         
                <div class="col-sm-3">
                    <a class="thumbnail fancybox" rel="ligthbox" href="../assets/img/upload/<?php echo $image['image'] ?>">
                        <img  class="img-fluid" alt="" src="../assets/img/upload/<?php echo $image['image'] ?>" />
                        <div class='text-center'>
                            <small class='text-muted'><?php echo $image['title'] ?></small>
                        </div> <!-- text-center / end -->
                    </a>
                    <form action="imageDelete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                    </form>
               </div>
               
               <!-- col-6 / end -->
            <?php } ?>
 </div></div> <div class="col-sm-3"></div>

        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->
			</div>
		</div>
	</div>
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->

	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
     <script src="../assets/js/Basic-fancyBox-Gallery.js"></script>
</body>
</html>
<?php }  ?>