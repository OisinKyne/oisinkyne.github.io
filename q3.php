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
	$result = mysqli_query($con,"SELECT * FROM coffees");
	$earnings = 0;

	while($row = mysqli_fetch_array($result))
	{
		echo "Coffee name: $row[COF_NAME] <br/>";
		echo "Price: $row[PRICE]<br/>";
		echo "Total Sold: $row[SALES]<br/>";
		$earnings = $row[PRICE] * $row[SALES];
		echo "Total earnings: $earnings <br/><br/>";
		
	}



	mysql_close($con); 

?>
