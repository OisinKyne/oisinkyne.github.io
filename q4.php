<?php 
	
	$con = mysqli_connect("direct.netsoc.com", "student", "comp20030", "practical7"); 
	//echo " Have we crashed yet? I guess we have. ";
	if (mysqli_connect_errno()) 
	{ 
		echo " Connect failed"; 
		 exit(); 
	} 
	else
	{
		echo "Connection to the database successful. <br/><br/>";
	}
	$result = mysqli_query($con,"SELECT coffees.COF_NAME, coffees.SUP_ID, coffees.TOTAL, suppliers.SUP_NAME FROM coffees INNER JOIN suppliers ON coffees.SUP_ID = suppliers.SUP_ID");
	echo 	"<!DOCTYPE html><html><head><style type='text/css'>td { padding:4px; border: 1px solid black;} table { border: 1px solid black ;} </style><title>Learning to PHP</title></head><body>";

	echo "<table><thead><th>Coffee</th><th>Supplier</th><th>Total Sales</th></thead>";

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr><td>Coffee name: $row[COF_NAME]</td>";
		echo "<td>Supplier: $row[SUP_NAME]</td>";
		echo "<td>Total earnings: $row[TOTAL]</td></tr>";
		
	}
	echo "</table></body></html>";


	mysql_close($con); 
	//Oikyne snkfykr5
?>
