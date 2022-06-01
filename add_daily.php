<html>
<head>
	<title> ve_show_itm </title>	
	<style type="text/css">
		#x1
		{
			position: absolute;
			width: 500px;
			top: 100px;
			left: 150px;
			font-size: 17px;
		}
		.cc
		{
			position: relative;
			top: 600px;
			left: 420px;
			font-size: 20px;
		}
	</style>

</head>
<body>
	<form action="add_daily.php" method="POST">
	<table border="1" id="x1" cellpadding="5px" cellspacing="5px" style="width: 800px;">
		<tr>
			<th> Item Id </th>
			<th> Item Name </th>
			<th> Item Price </th>
			<th> Item quantity </th>
			<th> Shop Name </th>
			<th> Select </th>
			<th> Quantity </th>
		</tr>
		<?php
	
			$cnc= new mysqli("localhost","root","","smart_system");
			$sql=" select * from grocery ";
			$obj=$cnc->query($sql);
			while ($value=mysqli_fetch_object($obj)) 
			{
		?>
				<tr>
		 			<td><?php echo $value->gr_id ; ?></td>
		 			<td><?php echo $value->gr_name; ?></td>
		 			<td><?php echo $value->gr_price; ?></td>
		 			<td><?php echo $value->gr_quant; ?></td>
		 			<td><?php echo $value->ven_name; ?></td>
		 			<td><input type="checkbox" name="ch[]" value="<?php echo $value->gr_id; ?>" > </td>
		 			<td> <input type="text" name="text1[]" > </td>
		 		</tr>
		<?php
		 	}
		?>
		<input type="Submit" name="sub1" value="Check Out" class="cc">
	</table>
	</form>
</body>
</html>
<?php
	$cnc= new mysqli("localhost","root","","smart_system");
	if(isset($_POST['sub1']))
	{

		$p=implode(",",$_POST['text1']);
		$b=explode(",",$p);

		$q=implode(",",$_POST['ch']);
		$a=explode(",",$q);
		$len=count($a);
		for($i=0;$i<$len;$i++)
		{		
			echo $a1=$a[$i];

			$sel="SELECT * FROM grocery WHERE gr_id='".$a1."'";
			$exec1=$cnc->query($sel);
			$dat=mysqli_fetch_object($exec1);
			$a2=$dat->gr_name;
			$a3=$dat->gr_price;
			$a4=$dat->gr_quant;
			$a5=$b[$i];
			$a8=$dat->ven_id;
			$a9=$dat->ven_name;

			$id1=$_COOKIE['mml'];
			$edi="select * from user where us_mail='".$id1."'";
			$exec2=$cnc->query($edi);
			$dat2=mysqli_fetch_object($exec2);

			$a6=$dat2->us_id;
			$a7=$dat2->us_name;
			$sql="INSERT INTO  daily(gr_id,gr_name,gr_price,gr_quant,quantity,us_id,us_name,ven_id,ven_name) VALUES ('". $a1 ."','". $a2 ."','". $a3 ."','". $a4 ."','". $a5 ."','". $a6 ."','". $a7 ."','". $a8 ."','". $a9 ."')";
			$obj=$cnc->query($sql);
			if($obj)
				{
				?>
					<script type="text/javascript">
						alert('Added');
						window.location.assign('add_daily.php');
					</script>
				<?php
				}
				else
				{
				?>
					<script type="text/javascript">
						alert('Not Added');
						window.location.assign('add_daily.php');
					</script>
				<?php
				}

		}
	}

?>