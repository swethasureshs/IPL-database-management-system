<?php
    $con = mysqli_connect("localhost", "root","", "ipldb") or die(mysqli_error($con));

    $player=$_POST['playername'];
    $id=$_POST['playerid'];
if($player=='' || $id=='')
{
echo "<script language='javascript'>";
	echo "alert('ENTER DATA')";
	echo "</script>";
    header("refresh: 0.01; url=deleteplayer.html");
 }
elseif($player!='' || $id!=''){
    $sql="delete from Players where P_name='$player' and P_id='$id'";
    if(mysqli_query($con,$sql)==true)
{
    $sql1 = "SELECT * from Players where P_id='$id'";
 	$res=mysqli_query($con,$sql1);
	    if(mysqli_num_rows($res)==0)
		{  
    	 echo "<script type='text/javascript'>alert('player deleted successfully!!');</script>";
      header("refresh: 0.01; url=deleteplayer.html");
    
}
else{
	echo "<script language='javascript'>";
	echo "alert('ERROR IN DELETING')";
	echo "</script>";
    header("refresh: 0.01; url=deleteplayer.html");
    
}}}
mysqli_close($con);
?>    