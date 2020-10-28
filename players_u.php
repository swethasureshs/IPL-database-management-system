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
	<title>PLAYERS</title>
</head>
<body style="background-color:#d9b3ff">
	<button style="background-color:"><a href="hpuser.html" style="color:">Back</a></button>
	 <div style="margin-top:60px; style : center" >
	<table align="center">
		<tr>
                        <th>PLAYER NAME</th>
			<th>AGE</th>
			<th>SKILL</th>
			<th>JERSEY NUMBER</th>
                        <th>NATIONALITY</th>
                        <th>MATCHES PLAYED</th>
                        <th>TEAM</th>
	     
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","ipldb");
	         $query="select Players.P_name,Players.Age,Players.Skill,Players.Jersey_num,Players.Nationality,Players.Matches_played,Team.T_name from Players,Team where Players.T_id=Team.T_id";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row["P_name"]."</td><td>".
			$row["Age"]."</td><td>".
			$row["Skill"]."</td><td>".
			$row["Jersey_num"]."</td><td>".
                        $row["Nationality"]."</td><td>".
                        $row["Matches_played"]."</td><td>".
                        $row["T_name"]."</td></tr>";

			}
		}
		mysqli_close($con);
		?>

</body>
</html>