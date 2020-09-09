<?php
	session_start();
	if(isset($_SESSION['akey']) && $_SESSION['akey']==1)
    {
	include 'db.php';
	$id=$_POST['id'];
	$email=$_POST['email'];
	$sql="UPDATE user SET status='Approved' WHERE s_no='$id'";
	if(mysqli_query($con,$sql))
	{
	   $to = $email;
	   $subject = "Alumni Account Activated";
	    $headers = "Reply-To: <hypertexttechies2020@gmail.com>\r\n";
         $headers .= "Return-Path:<hypertexttechies2020@gmail.com>\r\n";
            $headers .= "From:<hypertexttechies2020@gmail.com>\r\n";
            $headers .= "Organization: Alumni SIH 2020\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
  $message="Your Alumni Account has been Activated.You can Login using Your Email id and Password.\r\nVisit:-http://hypertexttechies2020.000webhostapp.com/Alumni2020/login.php";
  $message.="\r\n";
  $message.="Thank You!";
	      mail($to,$subject,$message,$headers);
		?>
		<script>
		alert("Approved Succesfully.");
		location.replace("new_alumni.php");
		</script>
		<?php

	}
	else
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);
    }
    else
    {
        header("location:index.php");
    }
?>