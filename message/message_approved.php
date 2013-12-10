<?php
 	include "config.php";

 	$id = $_GET['id'];
 	$approved = MessageDAO::get_approved($id);

 	if($approved['is_approved'] == 'N'){
 		MessageDAO::approve_message($id);
 		 header("location:list_of_messages.php");
 	}else{
 		MessageDAO::reject_message($id);
 		header("location:list_of_messages.php");
 	}
?>