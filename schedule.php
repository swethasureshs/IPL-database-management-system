<!DOCTYPE html>
<html>
<style >
	table{
		border: 2px solid black;
	}
	tr{
		border: 1px solid black;
                padding: 12px;
	}
	th,td{
		border: 1px solid black;
                padding: 12px;
	}
</style>
<head><p>
	<title>SCHEDULES</title>
</head>
<body style="background-color:#99ebff">
	<button style="background-color:"><a href="hpadmin.html" style="color:">Back</a></button>
	 <div style="margin-top:110px; style : center" >
	<table align="center">
		<tr>
                        <th>Match Number</th>
			<th>Date</th>
			<th>Team1</th>
			<th>Team2</th>
	     
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","ipldb");
		$query="select M_id,date_format(Matchdate,'%d/%m/%Y'),Team_A,Team_B from MatchSchedule";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row["M_id"]."</td><td>".
			$row["date_format(Matchdate,'%d/%m/%Y')"]."</td><td>".
			$row["Team_A"]."</td><td>".
			$row["Team_B"]."</td></td>";
			}
		}
		mysqli_close($con);
		?>

</body>
</html>