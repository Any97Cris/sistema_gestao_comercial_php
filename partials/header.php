<?php

session_start();
if(!isset($_SESSION['mail'])){
	header('Location: ../sign.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Sistema PHP</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/Nura-Admin/src/assets/images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link href="/Nura-Admin/src/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="/Nura-Admin/src/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="/Nura-Admin/src/assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this page -->
		
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>