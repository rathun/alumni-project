<?php session_start(); ?>

<html>
<head>
	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=yes" />
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style type="text/css">
  	#hl:hover
  	{
  		background-color: white;
  		color:#3366cc;
  	}

  </style>
</head>
<body>
	<div class="container" >
		<!-- <div class="navbar" style="background-color:#3366cc">
		<div class="col-sm-2" style="float: left"><img title="Governement of Goa Logo" src="Image/logogoa.png" alt="Emblem of State Government" style="width: 8em;height:105px;"></div><div class="col-sm-8" style="text-align:center;color: white;float: left"><h1>Directorate of Education</h1><h3>Government of Goa, India</h3></div><div class="col-sm-2" style="text-align: right;float:right"><img title="Government of India Emblem" src="Image/logoind.png" alt="Government of India Emblem image" style="width: 5em;"></div>
		</div> -->
		<img src="Image/logo.jpg" width=100%>
		 <div  style="padding-top: 5%;text-align: center" id="load">
    <img src="Image/load.gif" width=20% height=20%>
  </div>
  <?php include 'footer.php'; ?>
  </div>
<?php 
	include 'db.php';
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	$sql="SELECT * FROM user WHERE email='$username' AND password='$password' AND status='Approved'";
	if($res=mysqli_query($con,$sql))
	{
		if(mysqli_num_rows($res)==1)
		{
			$row=mysqli_fetch_array($res);
			$_SESSION['key']=1;
			$_SESSION['sno']=$row['s_no'];
// 			$_SESSION['acollege']=$row['college_name'];
			$_SESSION['year']=$row['year_of_study'];
			 $_SESSION['name']=$row['name'];
			$_SESSION['dept']=$row['department'];
			$_SESSION['email']=$username;
			 	?>
			<script type="text/javascript">
				//alert("Invalid Login Credentials or Account Not Activated.");
				location.replace("alumni_events.php");
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Invalid Login Credentials or Account Not Activated.");
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
 </body>
 </html>
 