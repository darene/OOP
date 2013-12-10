<?php 
	include "config.php";
		$all_Message = array(
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'message' => $_POST['message'],
			'is_approved' => 'N'
			);
		$get = new Message($all_Message);
		$_message = $get->getMessage();
		$_name = $get->getName();
		$_email = $get->getEmail();
		$_approved = $get->isApproved();
		MessageDAO::post_message($_name,$_email,$_message,$_approved);
		header("location:createmessage.php");
	
?>