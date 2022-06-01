
<html>
<head>
<title> home </title>
<style type="text/css">
	body
	{
		background-image:url("bg.jpg");
		background-size: 100% 100%;

	}
	#x1
	{
		position: absolute;
		height: 400px;
		width: 500px;
		background-color: rgba(0,0,0,0.5);
		top: 270px;
		left: 300px;
	}
	#d1
	{
		position: absolute;
		margin-left: 270px;
		margin-top: 90px;
		font-size: 90px;
		color: black;

	}
	#d2
	{
		position: absolute;
		left: 70px;
		top: 70px;
		font-size: 35px;
		color: black;
	}
	
	#l1
	{
		position: absolute;
		left: 40px;
		top: 200px;
	}
	#r1
	{
		position: absolute;
		left: 250px;
		top: 200px;
	}
	ul li
	{
		display:inline-block;

	}
	ul li a
	{
		background:orange;
		text-decoration: none;
		color: white;
		font-size: 20px;
		border-radius: 7px 7px 7px 7px;
		padding: 15px 70px;
		border: 1px solid red;
		transition: 0.6s ease;
	}
	ul li a:hover
	{
		background-color: yellow;
		color: green;
	}
</style>
</head>
<body>
	<div id="d1"><b>Smart System</b></div>
	<div id="x1">
		<div id="d2"><b>Your Vote Is Your Voice</b></div>
		<ul>
			<li id="l1"><a href="lg.php" > Login</a></li></br></br></br>
			<li id="r1"><a href="reg.php" > Register </a></li></br></br></br>
		</ul>
		</div>
	</div>
</body>
</html>
