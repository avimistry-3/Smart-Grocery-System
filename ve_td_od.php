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
			top: 510px;
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
					alert("Done");
					window.location.assign("ve_td_od.php");
				</script>
	<?php			
			}
			else
			{
	?>
				<script type="text/javascript">
					alert("Not Done");
					window.location.assign("ve_td_od.php");
				</script>
	<?php			
			}
		}
	?>

	<form  method="POST" action="td_od.php">
	<table border="1" id="x1" cellpadding="5px" cellspacing="5px" style="width: 800px;">
		<tr>	
			<th> Item Name </th>
			<th> Item Price </th>
			<th> Item quantity </th>
			<th> Quantity </th>
			<th> Customer Name </th>
			<th> Customer Address </th>
			<th> Customer Contact Number </th>
		</tr>
		<?php
		
			$cnc= new mysqli("localhost","root","","smart_system");
			$ii=$_COOKIE['mml2'];
			$sqlz=" select * from vendor WHERE ven_mail='".$ii ."' ";
			$objz=$cnc->query($sqlz);
			$valuez=mysqli_fetch_object($objz);
			$id1z=$valuez->ven_id;


			$sql=" select * from placed_order WHERE ven_id='".$id1z ."' ";
			$obj=$cnc->query($sql);
			while ($value=mysqli_fetch_object($obj)) 
			{
		?>
				<tr>
		 			<td><?php echo $value->gr_name; ?></td>
		 			<td><?php echo $value->gr_price; ?></td>
		 			<td><?php echo $value->gr_quant; ?></td>
		 			<td><?php echo $value->quantity; ?></td>
		 			<td><?php echo $value->us_name; ?></td>
		 <?php
					$se=" select * from user WHERE us_id='".$value->us_id."' ";
					$ob=$cnc->query($se);
					$va=mysqli_fetch_object($ob);
					$ix=$va->us_addr;
					$iy=$va->us_mono;
		?>
		 			<td><?php echo $ix; ?></td>
		 			<td><?php echo $iy; ?></td>

					<td> <a href="ve_td_od.php?del=<?php echo $value->wmy_id; ?>"> Order Delivered </a></td>
		 		</tr>
		<?php
		 	}
		?>
		<input type="Submit" name="sub1" value="Check Out" id="cen">
	</table>
	</form>
</body>
</html>