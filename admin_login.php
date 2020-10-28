<?php
error_reporting(E_ALL ^ E_NOTICE);?>
<?php

    $con = mysqli_connect("localhost","root","","ipldb");
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
    }
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $check_u = "select * from login where username ='$username'";
    $res_u = mysqli_query($con,$check_u);
    $check_p = "select * from login where username = '$username' and password = '$password'";
    $res_p = mysqli_query($con,$check_p);

    if(mysqli_num_rows($res_u)==0)
    {
      echo "<script type='text/javascript'>alert('Incorrect username!!');</script>";
      header("refresh: 0.01; url=admin.html");
    }

    if(mysqli_num_rows($res_p)==0)
    {
      echo "<script type='text/javascript'>alert('Incorrect password!!');</script>";
      header("refresh: 0.01; url=admin.html");
    }

    else
    {
     // echo "<script type='text/javascript'>alert('Logged in successfully!!');</script>";
      header("refresh: 0.01; url=hpadmin.html");
    }
?>

