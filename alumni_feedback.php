<?php
		session_start();
		if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {
		include 'db.php';
		$id=$_POST['id'];
		$feedback=$_POST['feedback'];
		$college=$_POST['college'];
		$name=$_SESSION['name'];
		$sql="INSERT INTO feedback (`name`,`department`,`feedback`) VALUES('$name','$college','$feedback')";
		if(mysqli_query($con,$sql))
		{
			?>
			<script type="text/javascript">
				alert("FeedBack Submitted SuccessFully");
				location.replace("alumni_feedback_form.php");
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