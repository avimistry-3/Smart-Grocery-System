<html>
<head>
<meta charset="utf-8">
<title> reg </title>
<link rel="stylesheet" type="text/css"  href="themify-icons.css">
<style>
	body
	{
		background-size: cover;
		background-image: url("IMG-20190404-WA0005.jpg");
		font-family: Verdana;
		font-size: 13px;
		margin: 0;
		line-height: 10px;
	}
	#navbar
	{
		text-align: center;;
		width: 100%;
		background: orange;
	}
	#navbar ul
	{
		margin: 0;
		padding: 0;
		list-style: none;
		position: relative;
	}
	#navbar ul li a
	{
		display: block;;
		padding: 25px;
		color: white;
		font-size: 20px;
		text-decoration: none;
		width: 150px;
	}
	#navbar ul:after
	{
		content: "";
		clear: both;
		display: block;
	}
	#navbar ul li
	{
		float: left;
		list-style: none;
	}
	#navbar ul li:hover >ul 
	{
		display: block;
	}
	#navbar ul li:hover   
	{
		background: skyblue;
		transition: 0.9s;
	}
	#navbar ul li:hover a 
	{
		color: white;
	}
	#box3
	{
		position: absolute;
		top: 150px;
		left: 470px;
		font-size: 20px;
		height: 30px;
		width:100px;
		color:black; 
	}
	#box2
	{
		position: absolute;
		height: 470px;
		width: 340px;
		top: 200px;
		left: 350px;
		background-color: rgba(255,165,0,0.4);
		border-radius: 10px;
	}
	#i1
	{
		position: absolute;
		top: 30px;
		left: 13px;
		width: 300px;
		height: 30px;
		border:solid;
		border-color: white;
		
	}
	#i2
	{
		position: absolute;
		top: 90px;
		left: 13px;
		width: 300px;
		height: 30px;
		border: solid;
		border-color: white;
		
	}
	#i3
	{
		position: absolute;
		top: 150px;
		left: 13px;
		width: 300px;
		height: 30px;
		border:solid;
		border-color: white;
		
	}
	#i4
	{
		position: absolute;
		top: 210px;
		left: 13px;
		width: 300px;
		height: 30px;
		border:solid;
		border-color: white;
		
	}
	#i6
	{
		position: absolute;
		top: 270px;
		left: 13px;
		width: 300px;
		height: 30px;
		border:solid;
		border-color: white;
	}
	#i7
	{
		position: absolute;
		top: 330px;
		left: 13px;
		width: 300px;
		height: 30px;
		border:solid;
		border-color: white;
	}
	input[type=text]
	{
		height: 100%;
		background-color: transparent;
		border: none;
	}
	input[type=password]
	{
		height: 100%;
		background-color: transparent;
		border: none;
	}
	input[type=Submit]
	{
		position: absolute;
		left: 400px;
		top: 600px;
		width: 15rem; 
		height: 2rem;
		color: blue;
		background:white;

	}
	input[type=Submit]:hover
	{
		color:white;
		background:#7F7D9C;
	}
	select
	{
		background: transparent;
	}
	#box7
	{
		position: absolute;
		top: 290px;
		left: 100px;
	}
</style>
</head>

<body>

	<div id="navbar">
		<ul>
			<li><a href="home.php" id="linkref"><?php echo "<";?> Back</a></li>
			</ul>
	</div>

	<?php 
	$cnc= new mysqli("localhost","root","","smart_system");

	if(isset($_POST['sub1']))
	{
			$lg_t=$_REQUEST['lg_typ'];
			$nm=$_POST['nam'];
			$ad=$_REQUEST['addr'];
			$c_n=$_REQUEST['cnno'];
			$ml=$_REQUEST['mail'];
			$psw=$_REQUEST['p_w'];
	
			if($lg_t=="User")
			{
				$sql="INSERT INTO  user(us_name,us_addr,us_mono,us_mail,us_pass) VALUES ('". $nm ."','". $ad ."','". $c_n ."','". $ml ."','". $psw ."')";
				$obj=$cnc->query($sql);
				if($obj)
				{ 
		?>
					<script type="text/javascript">
						alert("Registration Sucessfull");
						window.location.assign("reg.php");
					</script>
		<?php	}
				else
				{
		?>	
					<script type="text/javascript">
						alert("Registration Not Sucessfull");
						window.location.assign("show_table.php");
					</script>
		<?php
				}
			}
			else
			{
				$sql="INSERT INTO  vendor(ven_name,ven_addr,ven_mono,ven_mail,ven_pass) VALUES ('". $nm ."','". $ad ."','". $c_n ."','". $ml ."','". $psw ."')";
				$obj=$cnc->query($sql);
				if($obj)
				{ 
		?>
					<script type="text/javascript">
						alert("Registration  Sucessfull");
						window.location.assign("reg.php");
					</script>
		<?php	}
				else
				{
		?>	
					<script type="text/javascript">
						alert("Registration Not Sucessfull");
						window.location.assign("reg.php");
					</script>
		<?php
				}
			
			}
			
		}
	 ?>

	<form method="post">
			<div id="box3">Register</div>
			<div id="box2">
				<div id="i1">
					<select name="lg_typ" style="background-color: transparent; height: 100%; width: 100%;">
						<option hidden=""> Login as </option>
						<option value="User"> User </option>
						<option value="Vendor"> Vendor </option>
					</select>
				</div>
				<div id="i2">
					<input type="text" size=8 name="nam" placeholder="Name" style="background-color: transparent;">
				</div>
				<div id="i3">
					<input type="text" size=8 name="addr" placeholder="Address" style="background-color: transparent;">
				</div>
				<div id="i4">
					<input type="text" size=8 name="cnno" placeholder="Contact Number" style="background-color: transparent;">
				</div>
				<div id="i6">
					<input type="text" size=8 name="mail" placeholder="Email" style="background-color: transparent;">
				</div>
				<div id="i7">
					<input type="password" size=8 name="p_w" placeholder="Password" >
						</div>
				</div>
					<input type="Submit" name="sub1" value="Register" >
			</div>		
		
	</form>
</body>
</html>
