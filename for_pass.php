<!DOCTYPE html>
<html>
<head>
	<title> ser </title>
	<style type="text/css">
		#i1
		{
			position: absolute;
			font-size: 20px;
			top: 100px;
			left: 100px;
		}
	</style>
</head>
<body>
	<h1><b><u><center> Reset Your Password</center></u></b></h1>
	<div id="i1">
		<form >
			Enter Your Email Address :: 
			<input type="text" name="re_mail"></br>
			<input type="submit" name="su" value="Submit">
		</form>
	</div>
</body>
</html>

<?php
	if(isset($_POST['su']))
	{

	?>
				<script type="text/javascript">
					alert("We Have Sent Link For Reset Password On Your Email Id");
					window.location.assign("lg.php");
				</script>
	<?php	
	}


?>