<?php
	session_start();
	if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {
	include 'db.php';
	$id=$_SESSION['sno'];
	$name=$_POST['name'];
	$college=$_POST['college'];
	$department=$_POST['department'];
	$year_of_study=$_POST['year_of_study'];
	$street=$_POST['street'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$mobile=$_POST['mobileno'];
	$email=$_POST['email'];
	
	$filetmp=$_FILES["photo"]["tmp_name"];
    $filepath="Profile/".$id.".jpg";
	move_uploaded_file($filetmp,$filepath);
	$dob=$_POST['dob'];
	$ms=$_POST['ms'];
	$qualification=$_POST['qualification'];
	$awards=$_POST['awards'];
	$hobbies=$_POST['hobbies'];
	$profession=$_POST['profession'];
	$organisation=$_POST['organisation'];
	$designation=$_POST['designation'];
	$area_of_interest=$_POST['area_of_interest'];
	$work=$_POST['work'];
	$website=$_POST['website'];
	$pass=$_POST['password'];
	$password=md5($pass);
	$sql="UPDATE `user` SET `name`='$name',`college_name`='$college',`department`='$department',`year_of_study`='$year_of_study',`street`='$street',`city`='$city',`state`='$state',`country`='$country',`mobile_number`='$mobile',`email`='$email',`password`='$password',`dob`='$dob',`marital_status`='$ms',`qualification`='$qualification',`awards`='$awards',`hobbies`='$hobbies',`profession`='$profession',`organisation`='$organisation',`designation`='$designation',`area_of_interest`='$area_of_interest',`location_of_work`='$work',`website`='$website',`photo`='$filepath'  WHERE `s_no`='$id'";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
			alert("Details Updated Successfully");
			location.replace("update_alumni_form.php");
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