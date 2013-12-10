<?php
	include "config.php";
	$id = $_GET['id'];

	MessageDAO::delete_message($id);
	echo "<script>alert('Successfully Deleted!!');window.location.href='list_of_messages.php'</script>";
?>
?>