<html>
<head>
	<title> ed_yearly </title>	
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
	<form method="POST">
	<table border="1" id="x1" cellpadding="5px" cellspacing="5px" style="width: 800px;">
		<tr>
			<th> Item Id </th>
			<th> Item Name </th>
			<th> Item Price </th>
			<th> Item quantity </th>
			<th> Shop Name </th>
			<th> Date </th>
			<th> Quantity </th>
		</tr>
		<?php
	
			$cnc= new mysqli("localhost","root","","smart_system");
			$id1=$_REQUEST['edt'];
			$edi="select * from yearly where yr_id='".$id1."'";
			$exec1=$cnc->query($edi);
			$value=mysqli_fetch_object($exec1);
		?>
				<tr>
		 			<td><?php echo $value->gr_id ; ?></td>
		 			<td><?php echo $value->gr_name; ?></td>
		 			<td><?php echo $value->gr_price; ?></td>
		 			<td><?php echo $value->gr_quant; ?></td>
		 			<td><?php echo $value->date2; ?></td>
		 			<td><?php echo $value->ven_name; ?></td>
		 			<td> <input type="text" name="text1" value="<?php echo $value->quantity; ?>" > </td>
		 		</tr>

		<input type="Submit" name="sub1" value="Check Out" id="cen">
	</table>
	</form>
</body>
</html>

<?php
		$cnc= new mysqli("localhost","root","","smart_system");

			if(isset($_REQUEST['sub1']))
			{
				$tx=$_REQUEST['text1'];
				$id1=$_REQUEST['edt'];
				$sql="UPDATE yearly SET quantity='".$tx."' WHERE yr_id='".$id1."'";
				$obj=$cnc->query($sql);
				if($obj)
				{
				?>
					<script type="text/javascript">
						alert('Updated');
						window.location.assign('sh_yearly.php');
					</script>
				<?php
				}
				else
				{
				?>
					<script type="text/javascript">
						alert('Not Updated');
						window.location.assign('sh_yearly.php');
					</script>
				<?php
				}
			}
		
	?>
