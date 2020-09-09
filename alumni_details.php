<?php
  session_start();
  if(isset($_SESSION['akey']) && $_SESSION['akey']==1)
  {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Alumni Details</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=yes" />
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <script>
    window.oncontextmenu = function () {
        console.log("Right Click Disabled");
        return false;
    }
    document.onkeydown = function(e) {
    if(e.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }      
 }
</script>
  <style type="text/css">
  	#hl:hover
  	{
  		
  	}
    /*.table-bordered*/
    /*{*/
    /*  text-align: center*/
    /*}*/
  </style>
</head>
<body>
	<?php include 'header.php'; ?>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark " >
    <!-- <div class="container">  -->
    <!-- you can turn this container off/on-->
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!-- collapse class will hide everything in the navbar once we hit mobile display -->
        <div class="navbar-nav">
            <a class="nav-item nav-link active" id="hl" href="registered_alumni.php" >Registered Alumni</a>
            <a class="nav-item nav-link " id="hl" href="new_alumni.php">New Alumni</a>
            <a class="nav-item nav-link " id="hl" href="admin_feedback.php">Feedbacks</a>
            <a class="nav-item nav-link " id="hl" href="admin_event_form.php">Events</a>
        </div>

        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link " style="color:white;text-decoration: none">Welcome,<?php echo $_SESSION['aname']; ?></a>
            <a class="nav-item nav-link " id="hl" href="logout.php">Logout</a>
            
        </div>


        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 btn1" type="submit">Search</button>
        </form> -->
    </div>
</nav>
</div>
<div class="container">
<?php
	
	include 'db.php';
	$id=$_POST['id'];
	$sql="SELECT * FROM user WHERE s_no='$id'";
	if($res=mysqli_query($con,$sql))
	{
	    
		while($row=mysqli_fetch_array($res))
		{
		    
			?>
			<!-- <div class="modal-header">
          <h4 class="modal-title">Details of Alumni</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body" > -->
        <div class="table-responsive">
         <table class="table table-bordered" width=70% align="center">
            <tr><th>S.No</th><td><?php echo $row['s_no']; ?></td></tr>
            <tr><th>Name</th><td><?php echo $row['name']; ?></td></tr>
            
            <tr><th>Department</th><td><?php echo $row['department']; ?></td></tr>
            <tr><th>Year Of Study</th><td><?php echo $row['year_of_study']; ?></td></tr>
            <tr><th>Street</th><td><?php echo $row['street']; ?></td></tr>
            <tr><th>City</th><td><?php echo $row['city']; ?></td></tr>
            <tr><th>State</th><td><?php echo $row['state']; ?></td></tr>
            <tr><th>Country</th><td><?php echo $row['country']; ?></td></tr>
            <tr><th>Mobile Number</th><td><?php echo $row['mobile_number']; ?></td></tr>
            <tr><th>Email</th><td><?php echo $row['email']; ?></td></tr>
            <tr><th>Date Of Birth</th><td><?php echo $row['dob']; ?></td></tr>
            <tr><th>Marital Status</th><td><?php echo $row['marital_status']; ?></td></tr>
            <tr><th>Linkedin URL</th><td><a href="<?php echo $row['linkedinurl']; ?>" target="_blank"><?php echo $row['linkedinurl']; ?></a></td></tr>
            <tr><th>Highest Qualification</th><td><?php echo $row['qualification']; ?></td></tr>
            <tr><th>Awards</th><td><?php echo $row['awards']; ?></td></tr>
            <tr><th>Hobbies</th><td><?php echo $row['hobbies']; ?></td></tr>
            <tr><th>Profession</th><td><?php echo $row['profession']; ?></td></tr>
            <?php
            if($row['profession']=='Job')
            {
            ?>
            <tr><th>Organisation</th><td><?php echo $row['organisation']; ?></td></tr>
            <tr><th>Designation</th><td><?php echo $row['designation']; ?></td></tr>
            <tr><th>Area of Interest/Specialization</th><td><?php echo $row['area_of_interest']; ?></td></tr>
            <tr><th>Location of Work</th><td><?php echo $row['location_of_work']; ?></td></tr>
            <tr><th>Company Website</th><td><?php echo $row['website']; ?></td></tr>
            <?php
            }
            ?>
           </table>
           </div><!-- 0
        </div> -->
        
        
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
        <?php
		}
	}
	else
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);
?>
</div></body></html>
<?php
    }
    else
    {
      header("location:index.php");
    }
  ?>