<html>
<head>
<meta charset="utf-8">
<title> reg </title>
<link rel="stylesheet" type="text/css"  href="themify-icons.css">
<style>
	
	#box3
	{
		position: absolute;
		top: 150px;
		left: 480px;
		font-size: 20px;
		height: 30px;
		width:100px;
		color:black; 
	}
	#box2
	{
		position: absolute;
		height: 430px;
		width: 380px;
		top: 200px;
		left: 350px;
		background-color: rgba(255,165,0,0.4);
		border-radius: 10px;
	}
	#i1
	{
		position: absolute;
		top: 30px;
		left: 33px;
		width: 300px;
		height: 30px;
		font-size: 15px;
	}
	#d1
	{
		position: absolute;
		top: 60px;
		left: 33px;
		width: 300px;
		height: 30px;
		border: solid;
		border-color: white;
		
	}
	#i2
	{
		position: absolute;
		top: 130px;
		left: 33px;
		width: 300px;
		height: 30px;
		font-size: 15px;
	}
	#d2
	{
		position: absolute;
		top: 160px;
		left: 33px;
		width: 300px;
		height: 30px;
		border: solid;
		border-color: white;
		
	}
	#i3
	{
		position: absolute;
		top: 230px;
		left: 33px;
		width: 300px;
		height: 30px;
		font-size: 15px;
	}
	#d3
	{
		position: absolute;
		top: 260px;
		left: 33px;
		width: 300px;
		height: 30px;
		border: solid;
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
		left:80px;
		top: 340px;
		width: 13rem; 
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

			$id1=$_REQUEST['edt'];
			$edi="select * from grocery where gr_id='".$id1."'";
			$exec1=$cnc->query($edi);
			$dat=mysqli_fetch_object($exec1);

			if(isset($_REQUEST['sub1']))
			{
				$nm=$_POST['it_nam'];
				$pr=$_REQUEST['prc'];
				$it_qn=$_REQUEST['it_quan'];
	
	
				 $sql="UPDATE grocery SET gr_name='".$nm."',gr_price='".$pr."',gr_quant='".$it_qn."' WHERE gr_id='".$id1."'";
				$obj=$cnc->query($sql);
				if($obj)
				{
				?>
					<script type="text/javascript">
						alert('Updated');
						window.location.assign('ve_show_itm.php');
					</script>
				<?php
				}
				else
				{
				?>
					<script type="text/javascript">
						alert('Not Updated');
						window.location.assign('ve_show_itm.php');
					</script>
				<?php
				}
			}
		
	?>

	<form method="post">
			<div id="box3">Edit Item</div>
			<div id="box2">
				<div id="i1" style="background-color: transparent;">
					Item Name :: 
				</div>
				<div id="d1">
					<input type="text" size=8 name="it_nam"  value="<?php echo $dat->gr_name ?>" style="background-color: transparent;">
				</div>
				<div id="i2" style="background-color: transparent;">
					Item Price ::
				</div>
				<div id="d2">
					<input type="text" size=8 name="prc"  value="<?php echo $dat->gr_price ?>" style="background-color: transparent;">
				</div>
				<div id="i3" style="background-color: transparent;">
					Item Quantity As per price ::
				</div>
				<div id="d3">
					<input type="text" size=8 name="it_quan" value="<?php echo $dat->gr_quant ?>" style="background-color: transparent;">
				</div>
					<input type="Submit" name="sub1" value="Done" >
			</div>		
		
	</form>
</body>
</html>