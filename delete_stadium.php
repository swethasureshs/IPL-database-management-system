<?php
    $con = mysqli_connect("localhost", "root", "", "ipldb") or die(mysqli_error($con));

    $stadium_name=$_POST['stadium_name'];
$sql1 = "SELECT * from Stadium where St_name='$stadium_name'";
 	$res=mysqli_query($con,$sql1);
	    if(mysqli_num_rows($res)==0)
		{
	echo "<script type='text/javascript'>alert('ERROR');</script>";
	header("refresh: 0.01; url=deletestadium.html");
}
else
{
    $sql="DELETE from Stadium where St_name='$stadium_name'";
    if(mysqli_query($con,$sql)==true)
    {
       
        echo "<script type='text/javascript'>alert('Stadium deleted successfully!!');</script>";
      header("refresh: 0.01; url=deletestadium.html");
    
}
else{
    echo "error";
    header("refresh: 0.01; url=deletestadium.html");
    
}}
?>    
