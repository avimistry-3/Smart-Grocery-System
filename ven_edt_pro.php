<html>
<head>
	<title> edited_cnd </title>
	<style>
	body
	{
		background-size: cover;
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
		left: 430px;
		font-size: 20px;
		height: 30px;
		width:500px;
		color:black; 
	}
	#box2
	{
		position: absolute;
		height: 410px;
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
		top: 535px;
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
</style>

</head>
<body>
	<?php
		$cnc= new mysqli("localhost","root","","smart_system");

			$id1=$_COOKIE['mml2'];
			$edi="select * from vendor where ven_mail='".$id1."'";
			$exec1=$cnc->query($edi);
			$dat=mysqli_fetch_object($exec1);

			if(isset($_REQUEST['sub1']))
			{
				$nm=$_POST['nam'];
				$ad=$_REQUEST['addr'];
				$c_n=$_REQUEST['cnno'];
				$ml=$_REQUEST['mail'];
				$psw=$_REQUEST['p_w'];
	
	
				 $sql="UPDATE vendor SET ven_name='".$nm."',ven_addr='".$ad."',ven_mono='".$c_n."',ven_mail='".$ml."',ven_pass='".$psw."' WHERE ven_mail='".$id1."'";
				$obj=$cnc->query($sql);
				if($obj)
				{
				?>
					<script type="text/javascript">
						alert('Updated');
						window.location.assign('ven_edt_pro.php');
					</script>
				<?php
				}
				else
				{
				?>
					<script type="text/javascript">
						alert('Not Updated');
						window.location.assign('ven_edt_pro.php');
					</script>
				<?php
				}
			}
		
	?>
	<form method="post">
			<div id="box3"> Edit Your Profile </div>
			<div id="box2">
				<div id="i1">
					<input type="text" size=8 name="nam" placeholder="Name" value="<?php echo $dat->ven_name ?>" style="background-color: transparent;">
				</div>
				<div id="i2">
					<input type="text" size=8 name="addr" placeholder="Address" value="<?php echo $dat->ven_addr ?>" style="background-color: transparent;">
				</div>
				<div id="i3">
					<input type="text" size=8 name="cnno" placeholder="Contact Number" value="<?php echo $dat->ven_mono ?>" style="background-color: transparent;">
				</div>
				<div id="i4">
					<input type="text" size=8 name="mail" placeholder="Email" value="<?php echo $dat->ven_mail ?>" style="background-color: transparent;">
				</div>
				<div id="i6">
					<input type="password" size=8 name="p_w" value="<?php echo $dat->ven_pass ?>" placeholder="Password" >
						</div>
				</div>
					<input type="Submit" name="sub1" value="Done" >
			</div>		
		
</body>
</html>