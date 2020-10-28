<?php

    $con = mysqli_connect("localhost", "root", "", "ipldb") or die(mysqli_error($con));

    $stadium_name=$_POST['stadium_name'];
    $capacity=$_POST['capacity'];
    $location=$_POST['location'];

 if($stadium_name=='' || $capacity=='' || $location=='')
{
echo "<script language='javascript'>";
	echo "alert('ENTER DATA')";
	echo "</script>";
    header("refresh: 0.01; url=addstadium.html");
 }
elseif($stadium_name!='' || $capacity!='' || $location!=''){

    $query="insert into Stadium(St_id,St_name,capacity,location) values(DEFAULT,'$stadium_name','$capacity','$location')";
    if(mysqli_query($con,$query))
    {
    	
      echo "<script type='text/javascript'>alert('STADIUM ADDED, NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=addstadium.html");
    }
}
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addstadium.html");
        mysqli_error($con);
    }
    ?>