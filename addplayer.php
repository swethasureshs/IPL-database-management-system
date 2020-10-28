<?php
    $con = mysqli_connect("localhost", "root", "", "ipldb") or die(mysqli_error($con));

    $playername=$_POST['playername'];
    $age=$_POST['age'];
    $skill=$_POST['skill'];
    $jerseynumber=$_POST['jerseynumber'];
    $Nationality=$_POST['Nationality'];
    $no_of_matches=$_POST['no_of_matches'];
    $team=$_POST['team'];

    $query="insert into Players(P_id,P_name,Age,Skill,Jersey_num,Nationality,Matches_played,T_id) values(DEFAULT,'$playername','$age','$skill','$jerseynumber','$Nationality','$no_of_matches','$team')";
    if(mysqli_query($con,$query))
    {
        echo "<script type='text/javascript'>alert('NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=addplayer.html");
    }
    else
    {
    	echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addplayer.html");
    	mysqli_error($con);
    }
    ?>

