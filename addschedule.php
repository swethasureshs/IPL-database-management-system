<?php

    $con = mysqli_connect("localhost", "root", "", "ipldb") or die(mysqli_error($con));
    $team1=$_POST['team1'];
    $team2=$_POST['team2'];
    $date=$_POST['date'];
    $match_no=$_POST['match_no'];
  
  if($team1=='' || $team2=='' || $date=='' || $match_no=='')
{
echo "<script language='javascript'>";
	echo "alert('ENTER DATA')";
	echo "</script>";
    header("refresh: 0.01; url=addschedule.html");
 }
elseif($team1!='' || $team2!='' || $date!='' || $match_no!=''){

    if($team1==$team2)
     {
      echo "<script type='text/javascript'>alert('ENTER DIFFERENT TEAMS');</script>";
      header("refresh: 0.01; url=addschedule.html");
      }
    else{
    $query="insert into MatchSchedule(M_id,Matchdate,Team_A,Team_B) values('$match_no','$date','$team1','$team2')";
    if(mysqli_query($con,$query))
    {
    	echo "";
      echo "<script type='text/javascript'>alert('SCHEDULE ADDED, NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=addschedule.html");
    }
   }}
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
header("refresh: 0.01; url=addschedule.html");
}

mysqli_error($con);
    
    ?>