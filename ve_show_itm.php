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
	</style>

</head>
<body>
	<?php
		$cnc= new mysqli("localhost","root","","smart_system");
		if(isset($_REQUEST['del']))
		{
			$id=$_REQUEST['del'];
			$delt="delete from grocery where gr_id='".$id."'";
			$exec=$cnc->query($delt);
			if($exec)
			{
	?>
				<script type="text/javascript">
					alert("Deleted");
					window.location.assign("ve_show_itm.php");
				</script>
	<?php			
			}
			else
			{
	?>
				<script type="text/javascript">
					alert("Deleted");
					window.location.assign("ve_show_itm.php");
				</script>
	<?php			
			}
		}
	?>
	<table border="1" id="x1" cellpadding="5px" cellspacing="5px" style="width: 800px;">
		<tr>
			<th> Item Id </th>
			<th> Item Name </th>
			<th> Item Price </th>
			<th> Item quantity </th>
		</tr>
		<?php
			$id1=$_COOKIE['mml2'];
			$edi="select * from vendor where ven_mail='".$id1."'";
			$exec1=$cnc->query($edi);
			$dat=mysqli_fetch_object($exec1);

			$a3=$dat->ven_id;
	
			$sql=" select * from grocery where ven_id='".$a3."'";
			$obj=$cnc->query($sql);
			while ($value=mysqli_fetch_object($obj)) 
			{
		?>
				<tr>
		 			<td><?php echo $value->gr_id ; ?></td>
		 			<td><?php echo $value->gr_name; ?></td>
		 			<td><?php echo $value->gr_price; ?></td>
		 			<td><?php echo $value->gr_quant; ?></td>
					<td> <a href="ve_show_itm.php?del=<?php echo $value->gr_id; ?>"> Delete </a></td>
					<td> <a href="ve_ed_itm.php?edt=<?php echo $value->gr_id; ?>"> Edit </a></td>
		 		</tr>
		<?php
		 	}
		?>
	</table>
</body>
</html>