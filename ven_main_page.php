<html>
<head>
<title> Admin_main </title>
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
		width: 120px;
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
	#navbar ul li:hover   
	{
		background: skyblue;
		transition: 0.9s;
	}
	#navbar ul li:hover a 
	{
		color: white;
	}
</style>
</head>
<body>
	<div id="navbar">
		<ul>
			<li><a href="lg.php" id="linkref" ><?php echo "<"; ?> Back</a></li>
			<li><a href="ve_td_od.php" id="linkref" target="a1"> Order </a></li>
			<li><a href="ve_add_itm.php" id="linkref" target="a1"> Add Item </a></li>
			<li><a href="ve_show_itm.php" id="linkref" target="a1"> Show Item </a></li>
			<li><a href="ven_edt_pro.php" id="linkref" target="a1"> Profile </a></li>
			<li><a href="lg.php" id="linkref" >Log Out</a></li>
		</ul>
	</div>
	<iframe name="a1" width="100%" height="100%" scrolling="none"></iframe>
</body>
</html>
