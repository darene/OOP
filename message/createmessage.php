<?php 
	include "config.php";
	
	$message  = MessageDAO::approved_messages();
?>
<html>
<head>
	<title>MESSAGES</title>
</head>
<body>
	<br><h1>Messages</h1>
	<table border = '1'>
		<tr>
			<td> Name</td>
			<td> Message</td>
			<td> Date Posted</td>
		</tr>

		<?php foreach ($message as $messages):?>
		<tr>
			<td><?php echo $messages['name'];?></td>
			<td><?php echo $messages['message'];?></td>
			<td><?php echo $messages['date_posted'];?></td>

		</tr>
		<?php endforeach;?>
	</table>
	
	<br><h1>Post New Message</h1>
	<table>
		<form method = 'post' action = 'messages.php'>
			<tr>
			<td><b>Name:</td>
			<td><input type = 'text' size = '30' name = 'name' id = 'name' onblur = 'check_name();'><span id = "helpname"></sapn></td>
			</tr>

			<tr>
			<td><b>Email:</td>
			<td><input type = 'text' size = '30' name = 'email' id = 'email' onblur = 'check_email();'><span id = "helpemail"></sapn></td>
			</tr>

			<tr>
			<td><b>Message:</td>
			<td><textarea name="message" id="message" style="margin: 2px; width: 529px; height: 159px;" onblur = 'check_message();'></textarea><span id = "helpmessage"></span></td>
			</tr>

			<tr>
			<td><input type="submit" value="Post Message"></td>
		</tr></form>

		<form method = 'post' action = 'list_of_messages.php'>
			<tr>
			<td><input type="submit" value="View List of Messages"></td>
		</tr>
		</form>
	</table>

</body>
</html>

<script type="text/javascript">

	function check_name(){
		var name = document.getElementById("name").value;
		if(name.length > 0){
			document.getElementById("helpname").innerHTML = '';
			return true;
		}else{
			document.getElementById("helpname").innerHTML = 'Enter your name!';
			return false;
		}
	}

	function check_email(){
		var email = document.getElementById("email").value;
		if(email.length > 0){
			document.getElementById("helpemail").innerHTML = '';
			return true;
		}else{
			document.getElementById("helpemail").innerHTML = 'Enter your email address correctly!';
			return false;
		}
	}

	function check_message(){
		var message = document.getElementById("message").value;
		if(message.length > 0){
			document.getElementById("helpmessage").innerHTML = '';
			return true;
		}else{
			document.getElementById("helpmessage").innerHTML = 'Please Fill the Message Box!';
			return false;
		}
	}
</script>