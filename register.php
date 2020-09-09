<?php
	include 'db.php';
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
	$pass=$_POST['password'];
	$password=md5($pass);
	$dob=$_POST['dob'];
	$ms=$_POST['ms'];
	$linkedinurl=$_POST['linkedinurl'];
	$qualification=$_POST['qualification'];
	$awards=$_POST['awards'];
	$hobbies=$_POST['hobbies'];
	$profession=$_POST['profession'];
	$organisation=$_POST['organisation'];
	$designation=$_POST['designation'];
	$area_of_interest=$_POST['area_of_interest'];
	$work=$_POST['work'];
	$website=$_POST['website'];
	$sql="INSERT INTO user (`name`, `college_name`, `department`, `year_of_study`, `street`, `city`, `state`, `country`, `mobile_number`, `email`, `password`, `dob`, `marital_status`,`linkedinurl`, `qualification`, `awards`, `hobbies`, `profession`, `organisation`, `designation`, `area_of_interest`, `location_of_work`, `website`,`photo`,`status`) VALUES ('$name','$college','$department','$year_of_study','$street','$city','$state','$country','$mobile','$email','$password','$dob','$ms','$linkedinurl','$qualification','$awards','$hobbies','$profession','$organisation','$designation','$area_of_interest','$work','$website','Profile/profile.jpg','0')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
			alert("User Registered Successfully");
			location.replace("signup.php");
		</script>
		<?php
	}
	else
	{
		//echo mysqli_error($con);
		?>
		<script type="text/javascript">
			alert("Given Email Id is already Registered.Please Enter new Email.");
			location.replace("signup.php");
		</script>
		<?php
		
	}
	mysqli_close($con);


?>