<html>
<head>
<title> us_main_page </title>
<style type="text/css">
	body
	{
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
		width: 130px;
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
	#navbar ul ul
	{
		display: none;
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
	#navbar ul ul 
	{
		background: skyblue;
		padding: 0;
		margin: 0;
		position: absolute;
		top: 100%;
	}
	#navbar ul ul li 
	{
		float: none;
		position: relative;
	}
	#navbar ul ul li a
	{
		padding: 25px;
		color: white;
		width: 300px;
		text-align: left;
	}
	#navbar ul ul li a:hover
	{
		background: lightblue;
		color: black;
		transition: 0.9s;
	}
</style>
</head>
<body>
	<div id="navbar">
		<ul>
			<li><a href="lg.php" id="linkref" ><?php echo "<"; ?> Back</a></li>
			<li><a href="td_od.php" id="linkref" target="a1"> Order </a></li>
			<li><a href="" id="linkref"> Add Item </a>
				<ul>
					<li><a href="add_daily.php" id="linkref" target="a1"> Daily </a></li>
					<li><a href="add_weekly.php" id="linkref" target="a1"> Weekly </a></li>
					<li><a href="add_monthly.php" id="linkref" target="a1"> Monthly </a></li>
					<li><a href="add_yearly.php" id="linkref" target="a1"> Yearly </a></li>
				</ul>
			</li>
			<li><a href="" id="linkref"> Show Item </a>
				<ul>
					<li><a href="sh_daily.php" id="linkref" target="a1"> Daily </a></li>
					<li><a href="sh_weekly.php" id="linkref" target="a1"> Weekly </a></li>
					<li><a href="sh_monthly.php" id="linkref" target="a1"> Monthly </a></li>
					<li><a href="sh_yearly.php" id="linkref" target="a1"> Yearly </a></li>
				</ul>
			</li>
			<li><a href="us_edt_pro.php" id="linkref" target="a1"> Profile </a></li>
			<li><a href="lg.php" id="linkref" >Log Out</a></li>
		</ul>
	</div>
	<iframe name="a1" width="100%" height="100%" scrolling="none">
	</iframe>
</body>
</html>
