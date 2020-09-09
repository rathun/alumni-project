<?php 
	include 'db.php';
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	if($res=mysqli_query($con,$sql))
	{
		if(mysqli_num_rows($res)==1)
		{
			$row=mysqli_fetch_array($res);
			$_SESSION['akey']=1;
			
			
			 $_SESSION['aname']=$row['name'];
			 $_SESSION['prior']=$row['role'];
			 $_SESSION['department']=$row['department'];
				
					
				
			
			
			header("location:registered_alumni.php");
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Invalid Login Credentials");
				location.replace("index.php");
			</script>
			<?php
		}
	}
	else
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);

 ?>