<html>
<head>
	<title> td_od </title>	
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
			top: 390px;
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
			$delt="delete from placed_order where wmy_id='".$id."'";
			$exec=$cnc->query($delt);
			if($exec)
			{
	?>
				<script type="text/javascript">
					alert("Deleted");
					window.location.assign("td_od.php");
				</script>
	<?php			
			}
			else
			{
	?>
				<script type="text/javascript">
					alert("Deleted");
					window.location.assign("td_od.php");
				</script>
	<?php			
			}
		}
	?>

	<form  method="POST" action="td_od.php">
	<table border="1" id="x1" cellpadding="5px" cellspacing="5px" style="width: 800px;">
		<tr>
			<th> Item Id </th>
			<th> Item Name </th>
			<th> Item Price </th>
			<th> Item quantity </th>
			<th> Quantity </th>
			<th> Shop Name </th>
		</tr>
		<?php
		
			$cnc= new mysqli("localhost","root","","smart_system");
			$ii=$_COOKIE['mml'];

			$sqlx=" select * from user WHERE us_mail='".$ii ."' ";
			$objx=$cnc->query($sqlx);
			$valuex=mysqli_fetch_object($objx);
			$id1=$valuex->us_id;

			$sql=" select * from placed_order WHERE us_id='".$id1 ."' ";
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
					<td> <a href="td_od.php?del=<?php echo $value->wmy_id; ?>"> Delete </a></td>
					<td> <a href="ed_td_od.php?edt=<?php echo $value->wmy_id; ?>"> Edit </a></td>
		 		</tr>
		<?php
		 	}
		?>
		<input type="Submit" name="sub1" value="Check Out" id="cen">
	</table>
	</form>
</body>
</html>