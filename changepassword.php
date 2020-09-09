<?php
	include 'db.php';
	if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {
	session_start();
	$email=$_SESSION['email'];
	$old=$_POST['old'];
	$old=md5($old);
	$new=$_POST['new'];
	$sql="SELECT password FROM user WHERE email='$email' AND password='$old'";
	if($res=mysqli_query($con,$sql))
	{
		if(mysqli_num_rows($res)==1)
		{
			$row=mysqli_fetch_array($res);
			
			
			$password=md5($new);
			$sql1="UPDATE user SET password='$password' WHERE email='$email'";
			if(!mysqli_query($con,$sql1))
			{
				echo mysqli_error($con);
			}
			else
			{
				
				?>
				<script type="text/javascript">
					alert("Password Changed Successfully.");
					location.replace("update_alumni_form.php");
				</script>
				<?php
			}

		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Invalid Old Password");
				location.replace("update_alumni_form.php");
			</script>
			<?php
		}
	}
	else
	{
		echo mysqli_error($con);
	}
  }
  else
  {
      header("location:index.php");
  }
?>