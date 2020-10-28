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
                padding: 14px;
	}
</style>
<head><p>
	<title>TEAMS</title>
</head>
<body style="background-color:#d9b3ff">
	<button style="background-color:"><a href="hpuser.html" style="color:">Back</a></button>
	 <div style="margin-top:70px; style : center" >
	<table align="center">
		<tr>
                        <th>TEAM NAME</th>
                        <th>CUPS</th>
			<th>CAPTAIN</th>
                        <th>NO OF YEARS</th>
	     
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","ipldb");
		$query="select T_name,Cups,Captain,no_of_yrs from Team";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row["T_name"]."</td><td>".
                        $row["Cups"]."</td><td>".
                        $row["Captain"]."</td><td>".
			$row["no_of_yrs"]."</td></tr>";
			}
		}
		mysqli_close($con);
		?>

</body>
</html>