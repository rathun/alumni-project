<?php
	include 'db.php';
	$name=$_POST['name'];
	$stu=$_POST['stu'];
	$feedback=$_POST['feedback'];
	
	$sql="INSERT INTO visiter_feedback VALUES ('$name','$stu','$feedback')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
			alert("Feedback Submitted Successfully");
			location.replace("user_feedback_form.php");
		</script>
		<?php
	}
	else
	{
		//echo mysqli_error($con);
		?>
		<script type="text/javascript">
			alert("Feedback Not Submitted.");
			location.replace("user_feedback_form.php");
		</script>
		<?php
		
	}
	mysqli_close($con);


?>