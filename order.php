<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	ini_set('max_execution_time',900);
	$cnc= new mysqli("localhost","root","","smart_system");
	$dt=date("d/m/y");
	echo $dy=date("l");
	$ar=explode("/",$dt);
	$tm=date("h:i:s a");
	$de="DELETE FROM `placed_order`";
	$ob=$cnc->query($de);
	if($ob>0)
	{
		echo "done";
	}
	while(1)
	{
		echo "h  ";
		$sq=" select * from placed_order ";
		$ob=$cnc->query($sq);
		while ($va=mysqli_fetch_object($ob)) 
		{
			$b[]=$va->wmy_id;
		}
		$sql=" select * from daily ";
		$obj=$cnc->query($sql);
		while ($value=mysqli_fetch_object($obj)) 
		{
				$a1=$value->gr_id;
				$a2=$value->gr_name;
				$a3=$value->gr_price;
				$a4=$value->gr_quant;
				$a5=$value->quantity;
				$a6=$value->us_id;
				$a7=$value->us_name;
				$a8=$value->ven_id;
				$a9=$value->ven_name;
				$a10=$value->dl_id;
				if(in_array($a10,$b))
				{
				}
				else
				{
					$sql1="INSERT INTO placed_order(gr_id,gr_name,gr_price,gr_quant,quantity,us_id,us_name,ven_id,ven_name,wmy_id) VALUES ('". $a1 ."','". $a2 ."','". $a3 ."','". $a4 ."','". $a5 ."','". $a6 ."','". $a7 ."','". $a8 ."','". $a9 ."','".$a10."')";
					$obj1=$cnc->query($sql1);
				}
		}

	 	$sql2=" select * from weekly ";
		$obj2=$cnc->query($sql2);
		while ($value=mysqli_fetch_object($obj2)) 
		{
			$we_dt=$value->date1; 
			
			if($dy==$we_dt)
			{
				$a1=$value->gr_id;
				$a2=$value->gr_name;
				$a3=$value->gr_price;
				$a4=$value->gr_quant;
				$a5=$value->quantity;
				$a6=$value->us_id;
				$a7=$value->us_name;
				$a8=$value->ven_id;
				$a9=$value->ven_name;
				$a10=$value->week_id;
				if(in_array($a10,$b))
				{
				}
				else
			 	{
			 		$sql3="INSERT INTO placed_order(gr_id,gr_name,gr_price,gr_quant,quantity,us_id,us_name,ven_id,ven_name,wmy_id) VALUES ('". $a1 ."','". $a2 ."','". $a3 ."','". $a4 ."','". $a5 ."','". $a6 ."','". $a7 ."','". $a8 ."','". $a9 ."','".$a10."')";
					$obj3=$cnc->query($sql3);
				}
			}
	 	}
		$sql4=" select * from monthly ";
		$obj4=$cnc->query($sql4);
		while ($value=mysqli_fetch_object($obj4)) 
		{
			$mn_dt=$value->date;
			$ar2=explode("/",$mn_dt);
			$mm=$ar2[1]+1;
			if($ar2[0]==$ar[0] && $mm==$ar[1])
			{
				$a1=$value->gr_id;
				$a2=$value->gr_name;
				$a3=$value->gr_price;
				$a4=$value->gr_quant;
				$a5=$value->quantity;
				$a6=$value->us_id;
				$a7=$value->us_name;
				$a8=$value->ven_id;
				$a9=$value->ven_name;
				$a10=$value->mn_id;
				if(in_array($a10,$b))
				{
				}
				else
			 	{
					$sql5="INSERT INTO placed_order(gr_id,gr_name,gr_price,gr_quant,quantity,us_id,us_name,ven_id,ven_name,wmy_id) VALUES ('". $a1 ."','". $a2 ."','". $a3 ."','". $a4 ."','". $a5 ."','". $a6 ."','". $a7 ."','". $a8 ."','". $a9 ."','".$a10."')";
					$obj5=$cnc->query($sql5);
				}
			}
	 	}
	 	$sql6=" select * from yearly ";
		$obj6=$cnc->query($sql6);
		while ($value=mysqli_fetch_object($obj6)) 
		{
			$ye_dt=$value->date2;
			$ar3=explode("/",$ye_dt);
			$yy=$ar3[2]+1;
			if($ar3[0]==$ar[0] && $ar3[1]==$ar[1] && $yy==$ar[2])
			{
				$a1=$value->gr_id;
				$a2=$value->gr_name;
				$a3=$value->gr_price;
				$a4=$value->gr_quant;
				$a5=$value->quantity;
				$a6=$value->us_id;
				$a7=$value->us_name;
				$a8=$value->ven_id;
				$a9=$value->ven_name;
				$a10=$value->yr_id;
				if(in_array($a10,$b))
				{
				}
				else
			 	{
					$sql7="INSERT INTO placed_order(gr_id,gr_name,gr_price,gr_quant,quantity,us_id,us_name,ven_id,ven_name,wmy_id) VALUES ('". $a1 ."','". $a2 ."','". $a3 ."','". $a4 ."','". $a5 ."','". $a6 ."','". $a7 ."','". $a8 ."','". $a9 ."','".$a10."')";
					$obj7=$cnc->query($sql7);
				}
			}
	 	}
	}
?>

</body>
</html>