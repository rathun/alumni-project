<?php
	include 'db.php';
	$name=$_POST['name'];
	$college=$_POST['college'];
	$user=$_POST['uname'];
	
	$pass=$_POST['pass'];
	$password=md5($pass);
	
	$sql="INSERT INTO admin (`name`, `college_name`, `username`, `password`) VALUES ('$name','$college','$user','$password')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
			alert("User Created Successfully");
			location.replace("new_user.php");
		</script>
		<?php
	}
	else
	{
		//echo mysqli_error($con);
		?>
		<script type="text/javascript">
			alert("Already this college Registered.");
			location.replace("new_user.php");
		</script>
		<?php
		
	}
	mysqli_close($con);


?>