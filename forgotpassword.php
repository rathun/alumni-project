<?php
	include 'db.php';
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$sql="SELECT year_of_study,city,name FROM user WHERE email='$email' AND dob='$dob'";
	if($res=mysqli_query($con,$sql))
	{
		if(mysqli_num_rows($res)==1)
		{
			$row=mysqli_fetch_array($res);
			$year=$row['year_of_study'];
			$city=$row['city'];
			$name=$row['name'];
			$pass=$city."@".$year;
			
			$password=md5($pass);
			$sql1="UPDATE user SET password='$password' WHERE email='$email'";
			if(!mysqli_query($con,$sql1))
			{
				echo mysqli_error($con);
			}
			else
			{
				$to = $email;
$subject = "Alumni Account Password";
$headers = "Reply-To: <hypertexttechies2020@gmail.com>\r\n";
$headers .= "Return-Path:<hypertexttechies2020@gmail.com>\r\n";
$headers .= "From:<hypertexttechies2020@gmail.com>\r\n";
$headers .= "Organization: Alumni SIH 2020\r\n";
$headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
 $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$message="Hi ".$name.",\r\nYour Alumni Account Password is ".$pass."\r\nYou can Login using Your Email id and this Password.\r\nVisit:-http://projectsit2020.000webhostapp.com/Alumni/login.php";
 $message.="\r\n";
$message.="Thank You!";
mail($to,$subject,$message,$headers);
				?><script type="text/javascript">
					alert("Password Sended to Your Register Email Id.");
					location.replace("index.php");
				</script>
				<?php
			}

		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Invalid Email");
				location.replace("index.php");
			</script>
			<?php
		}
	}
	else
	{
		echo mysqli_error($con);
	}
?>