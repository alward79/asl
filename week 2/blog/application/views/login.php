<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">   
</head>
<body>
	<!-- Primary Page Layout
	================================================== -->

	<?php
		if (isset($this->session->userdata['logged_in'])) {
		header("location: http://localhost:8888/blog/index.php/user_authentication/user_login_process");
		}
	?>

	<?php
		if (isset($logout_message)) {
			echo "<div class='message'>";
			echo $logout_message;
			echo "</div>";
		}
	?>
	
	<?php
		if (isset($message_display)) {
			echo "<div class='message'>";
			echo $message_display;
			echo "</div>";
		}
	?>
	<div id="main">
		<div id="login">
			<h2>Login Form</h2>
			<hr/>
			<?php echo form_open('user_authentication/user_login_process'); ?>
			<?php
				echo "<div class='error_msg'>";
				
				if (isset($error_message)) {
					echo $error_message;
				}
				echo validation_errors();
				
				echo "</div>";
			?>
			<label>UserName </label>
			<input type="text" name="username" id="name" placeholder="username"/><br /><br />
			
			<label>Password </label>
			<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
			<input type="submit" value=" Login " name="submit"/><br />
			<a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">Not A Member Register here!</a>
			<?php echo form_close(); ?>
		</div>
	</div>
	
	<!-- JavaScript
	================================================== -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>