<?php
    $con = mysqli_connect("localhost", "root", "", "ipldb") or die(mysqli_error($con));

    $match_no=$_POST['match_no'];
    $sql1 = "SELECT * from MatchSchedule where M_id='$match_no'";
 	$res=mysqli_query($con,$sql1);
	    if(mysqli_num_rows($res)==0)
		{
	echo "<script type='text/javascript'>alert('ERROR');</script>";
	header("refresh: 0.01; url=deleteschedule.html");
    
}
else
{
$sql="delete from MatchSchedule where M_id='$match_no'";
    if(mysqli_query($con,$sql)==true)
    { 
    	echo "<script type='text/javascript'>alert('SCHEDULE DELETED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=deleteschedule.html");
    
}
else{
	echo "<script type='text/javascript'>alert('ERROR');</script>";
	header("refresh: 0.01; url=deleteschedule.html");
    
}}
?>    