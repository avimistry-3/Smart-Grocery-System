<html>
<head>
<meta charset="utf-8">
<title> lg </title>
<link rel="stylesheet" type="text/css"  href="ce.css">
<link rel="stylesheet" type="text/css"  href="themify-icons.css">
<style>
	body
	{
		background-image: url("IMG-20190404-WA0005.jpg");
		background-size: cover;
		font-family: Verdana;
		font-size: 20px;
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
		background: orange;
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
		font-size: 25px;
		height: 30px;
		width:100px;
		color:black; 
	}
	#box2
	{
		position: absolute;
		height: 440px;
		width: 340px;
		top: 200px;
		left: 350px;
		background-color: rgba(255,165,0,0.4);
		border-radius: 10px;
	}
	#box5
	{
		position: absolute;
		top: 150px;
		left: 13px;
		width: 300px;
		height: 35px;
		border:solid;
		border-color: white;
		
	}
	#box6
	{
		position: absolute;
		top: 235px;
		left: 13px;
		width: 300px;
		height: 35px;
		border: solid;
		border-color: white;	
	}
	#box10
	{
		position: absolute;
		top: 65px;
		left: 13px;
		width: 300px;
		height: 35px;
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
		left: 50px;
		top: 320px;
		width: 15rem; 
		height: 2rem;
		color:blue;

	}
	input[type=Submit]:hover
	{
		color:white;
		background:#7F7D9C;
	}
	#box7
	{
		position: absolute;
		top: 385px;
		left: 80px;
	}
</style>
</head>

<body>
	<div id="navbar">
		<ul>
			<li><a href="home.php" id="linkref"><?php echo "<";?> Back</a></li>
			</ul>
	</div>

	<form method="post" action="validation.php">
			<div id="box3"> Login</div>
			<div id="box2">
				<div id="box10">
					<select name="lg_typ" style="background-color: transparent; height: 100%; width: 100%;">
						<option hidden=""> Login as </option>
						<option value="User"> User </option>
						<option value="Vendor"> Vendor </option>
					</select>
				</div>
				<div id="box5">
					<i class="ti-user"></i>
					<input type="text" size=21 name="us_name" placeholder="User Name/Email Address" style="background-color: transparent;">
				</div>
				<div id="box6">
					<i class="ti-lock"></i>
					<input type="password" size=8 name="p_w" placeholder="Password" >
				</div>
				<div id="b1">
					<input type="Submit" name="sub2" value="Login" >
				</div>
				<div id="box7">
					<a href="for_pass.php">Forget Password ?</a>
				</div>
			</div>		
		
	</form>
</body>
</html>