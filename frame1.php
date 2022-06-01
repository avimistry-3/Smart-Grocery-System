<html>
<head>
<title> Frame1 </title>
<link rel="stylesheet" type="text/css"  href="themify-icons.css">
<style type="text/css">
	#a1
	{
		background-image: url("IMG-20190403-WA0007.jpg");
		background-size: 100% 100%;
		background-repeat: no-repeat;
	}
	#a2
	{
		position: absolute;
		left: 80px;
		top: 200px;
	}#d3
	{
		position: absolute;
		left: 120px;
		top: 	50px;
		height: 130px;
		width: 130px;
		border-radius: 100%;
	}
	ul
	{
		List-style-type:none;
	}
	ul li
	{
		display:inline-block;
	}
	ul li a
	{
		text-decoration: none;
		color: red;
		padding: 5px 20px;
		border: 1px solid red;
		border-radius: 7px 7px 7px 7px;
		transition: 0.6s ease;
		font-size: 25px;
	}
	ul li a:hover
	{
		background-color: yellow;
		color: green;
	}
</style>
</head>
<body id="a1">
	<img src="lg1.jpg" id="d3" >
	<div id="a2">
		<ul>
			<li><a href="home.php" target="b1"> Home </a></li></br></br></br>
			<li><a href="servc.php" target="b1"> Services </a></li></br></br></br>
			<li><a href="ab.php" target="b1"> About_Us</a></li></br></br></br>
			<li><a href="cont.php" target="b1"> Contact </a></li></br></br></br>
		</ul>
	</div>
</body>
</html>
