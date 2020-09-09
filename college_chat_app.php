<?php
	session_start();
	if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {
	include 'db.php';
	$sno=$_POST['id'];
	$name=$_POST['name'];
	
	$msg=$_POST['msg'];
	$year=$_POST['year'];
	$dept=$_POST['dept'];
	date_default_timezone_set("Asia/Kolkata");
	$d=date('d-m-Y h:i:s A');
	if($msg!='')
	{
	$sql="INSERT INTO chat (`sno`, `name`, `message`, `time`, `year_of_study`,`department`,`group_type`) VALUES('$sno','$name','$msg','$d','$year','$dept','C')";
	if(!mysqli_query($con,$sql))
	{
		echo mysqli_error($con);
	}
	else
	{
	    echo "posted";
	}
	}
	else
	{
	   echo "Enter";
	}
	mysqli_close($con);
  }
  else
  {
      header("location:index.php");
  }


?>