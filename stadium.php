<!DOCTYPE html>
<html>
<style >
	table{
		border: 2px solid black;
	}
	tr{
		border: 1px solid black;
                padding: 10px;
	}
	th,td{
		border: 1px solid black;
                padding: 10px;
	}
</style>
<head><p>
	<title>STADIUM</title>
</head>
<body style="background-color:#99ebff">
	<button style="background-color:"><a href="hpadmin.html" style="color:">Back</a></button>
	 <div style="margin-top:110px; style : center" >
	<table align="center">
		<tr>
                        <th>STADIUM NAME</th>
			<th>CAPACITY</th>
			<th>LOCATION</th>
				     
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","ipldb");
		$query="select St_name,capacity,location from Stadium";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row["St_name"]."</td><td>".
			$row["capacity"]."</td><td>".
			$row["location"]."</td></tr>";
			}
		}
		mysqli_close($con);
		?>

</body>
</html>