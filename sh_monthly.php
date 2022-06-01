<html>
<head>
	<title> sh_monthly </title>	
	<style type="text/css">
		#x1
		{
			position: absolute;
			width: 500px;
			top: 100px;
			left: 150px;
			font-size: 17px;
		}
		#cen
		{
			position:relative;
			top: 400px;
			left: 420px;
			font-size: 20px;
		}
	</style>

</head>
<body>
	<?php
		$cnc= new mysqli("localhost","root","","smart_system");
		if(isset($_REQUEST['del']))
		{
			$id=$_REQUEST['del'];
			$delt="delete from monthly where mn_id='".$id."'";
			$exec=$cnc->query($delt);
			if($exec)
			{
	?>
				<script type="text/javascript">
					alert("Deleted");
					window.location.assign("sh_monthly.php");
				</script>
	<?php			
			}
			else
			{
	?>
				<script type="text/javascript">
					alert("Not Deleted");
					window.location.assign("sh_monthly.php");
				</script>
	<?php			
			}
		}
	?>

	<form  method="POST" action="sh_monthly.php">
	<table border="1" id="x1" cellpadding="5px" cellspacing="5px" style="width: 800px;">
		<tr>
			<th> Item Id </th>
			<th> Item Name </th>
			<th> Item Price </th>
			<th> Item quantity </th>
			<th> Quantity </th>
			<th> Shop Name </th>
			<th> Date </th>
		</tr>
		<?php
		
			$cnc= new mysqli("localhost","root","","smart_system");
			$i=$_COOKIE['mml'];
			$s=" select * from user where us_mail='".$i."'";
			$ob=$cnc->query($s);
			$v=mysqli_fetch_object($ob);
			$ii=$v->us_id;
			$sql=" select * from monthly where us_id='".$ii."'";
			
			$obj=$cnc->query($sql);
			while ($value=mysqli_fetch_object($obj)) 
			{
		?>
				<tr>
		 			<td><?php echo $value->gr_id ; ?></td>
		 			<td><?php echo $value->gr_name; ?></td>
		 			<td><?php echo $value->gr_price; ?></td>
		 			<td><?php echo $value->gr_quant; ?></td>
		 			<td><?php echo $value->quantity; ?></td>
		 			<td><?php echo $value->ven_name; ?></td>
		 			<td><?php echo $value->date; ?></td>
					<td> <a href="sh_monthly.php?del=<?php echo $value->mn_id; ?>"> Delete </a></td>
					<td> <a href="ed_monthly.php?edt=<?php echo $value->mn_id; ?>"> Edit </a></td>
		 		</tr>
		<?php
		 	}
		?>
		<input type="Submit" name="sub1" value="Check Out" id="cen">
	</table>
	</form>
</body>
</html>