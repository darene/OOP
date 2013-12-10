<?php
	mysql_connect('localhost','root') && mysql_select_db('message');

	session_start();

	function view_list_message(){
		$query = "SELECT * FROM messages";
		$result = mysql_query($query);
		$message_lists = array();
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_assoc($result)){
					$message_lists[] = $row;
			}
		}
		return $message_lists;
	}

	function post_message($name,$email,$message,$action){
		$query = "INSERT INTO messages(name,message,email,date_posted,is_approved) Values('$name','$message','$email',CURRENT_DATE,'$action')";
		$result = mysql_query($query);
		header("location:createmessage.php");
	}

	function reject_message($id){
		$query = "UPDATE messages SET is_approved = 'N' WHERE id = '{$id}' ";
		$result = mysql_query($query);

	}

	function approve_message($id){
		$query = "UPDATE messages SET is_approved = 'Y' WHERE id = '{$id}' ";
		$result = mysql_query($query);
	}

	function delete_message($id){
		$query = "DELETE FROM messages WHERE id = '$id'";
		$result = mysql_query($query);

	}

	function approved_messages(){
		$query = "SELECT * FROM messages WHERE is_approved = 'Y'";
		$result = mysql_query($query);
		$list =  array();
		if(mysql_num_rows($result) > 0){
			while($row = mysql_fetch_assoc($result)){
				$list[] = $row;
			}
		}
		return $list;
	}

	function get_approved($id){
		$query = "SELECT is_approved FROM messages WHERE id = '$id' ";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		return $row;
	}
?>