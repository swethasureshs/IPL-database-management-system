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
	<title>POINTS TABLE</title>
</head>
<body style="background-color:#d9b3ff">
	<button style="background-color:"><a href="hpuser.html" style="color:">Back</a></button>
	 <div style="margin-top:110px; style : center" >
	<table align="center">
		<tr>
                        <th>TEAM NAME</th>
			<th>TOTAL MATCHES</th>
			<th>WON</th>
			<th>LOSE</th>
			<th>POINTS</th>
			<th>NRR</th>
				     
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","ipldb");
		$query="select Team.T_name,Points.M_tot,Points.M_win,Points.M_lose,Points.point,Points.NRR from Team,Points where Team.T_id=Points.T_id";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row["T_name"]."</td><td>".
			$row["M_tot"]."</td><td>".
                        $row["M_win"]."</td><td>".
                        $row["M_lose"]."</td><td>".
                        $row["point"]."</td><td>".
			$row["NRR"]."</td></tr>";
			}
		}
		mysqli_close($con);
		?>

</body>
</html>