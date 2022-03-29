<?php


session_start();
include('includes/dbconnection.php');

if(isset($_POST) && !empty($_POST['id'])){


		$sql = "DELETE FROM tblimage WHERE id = ".$_POST['id'];
		mysqli_query($con,$sql);


		$_SESSION['success'] = 'Image Deleted successfully.';
		header("Location: ./manage-gallery.php");
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: ./manage-gallery.php");
}


?>