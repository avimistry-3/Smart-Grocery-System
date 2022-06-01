<!DOCTYPE html>
<html>
<head>
	<title> validation </title>
</head>
<body>

<?php 
	$cnc= new mysqli("localhost","root","","smart_system");

	if(isset($_REQUEST['sub2']))
	{
		echo $lg_t=$_REQUEST['lg_typ'];
		$usr_name=$_REQUEST['us_name'];
		$pw=$_REQUEST['p_w'];
		if($lg_t=="User")
		{
		setcookie("mml",$usr_name,time()+1000000);
			$sql="select * from  user where us_mail='".$usr_name."'AND us_pass='".$pw."'";
			$obj=$cnc->query($sql);
				
			$row=mysqli_num_rows($obj);
			if($row>0)
			{
		?>
				<script type="text/javascript">
					window.location.assign("us_main_page.php");
				</script>
		<?php	
			}
			else
			{
		?>
				<script type="text/javascript">
					alert(" Invalid User ");
					window.location.assign("lg.php");
				</script>
		<?php
			}
		}
		else
		{
			setcookie("mml2",$usr_name,time()+1000000);
			$sql="select * from  vendor where ven_mail='".$usr_name."'AND ven_pass='".$pw."'";
			$obj=$cnc->query($sql);

			$row=mysqli_num_rows($obj);
			if($row>0)
			{
		?>
				<script type="text/javascript">
					window.location.assign("ven_main_page.php");
				</script>
		<?php	
			}
			else
			{
		?>
				<script type="text/javascript">
					alert(" Invalid Vendor ");
					window.location.assign("lg.php");
				</script>
		<?php
			}					
		}
	}
	 ?>

</body>
</html>