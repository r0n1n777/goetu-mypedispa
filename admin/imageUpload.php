<?php


session_start();
include('includes/dbconnection.php');


if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){


	$name = $_FILES['image']['name'];
	list($txt, $ext) = explode(".", $name);
	$image_name = time().".".$ext;
	$tmp = $_FILES['image']['tmp_name'];


	if(move_uploaded_file($tmp, '../assets/img/upload/'.$image_name)){


		$sql = "INSERT INTO tblimage (title, image,category) VALUES ('".$_POST['title']."', '".$image_name."', 'front')";
		mysqli_query($con,$sql);


		$_SESSION['success'] = 'Image Uploaded successfully.';
		header("Location: ./manage-gallery.php");
	}else{
		$_SESSION['error'] = 'image uploading failed';
		header("Location:  ./manage-gallery.php");
	}
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location:  ./manage-gallery.php");
}


?>