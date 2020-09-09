<?php
  session_start();
  if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs Forum</title>
  <!--<meta http-equiv="refresh" content="15" />-->
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
    .table
    {
      text-align: center
    }
    .scrollable{
  
   height:10000px;
   overflow:scroll;
   
}
.container1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.container1 img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container1 img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
  </style>
</head>
<body>
	
		<?php include 'header.php'; ?>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
    <!-- <div class="container">  -->
    <!-- you can turn this container off/on-->
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!-- collapse class will hide everything in the navbar once we hit mobile display -->
        <div class="navbar-nav">
             <a class="nav-item nav-link " style="color:white;text-decoration: none">Welcome,<?php echo $_SESSION['name']; ?></a>
            
            
        </div>

        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link " id="hl" href="alumni_events.php" >Events</a>
            <a class="nav-item nav-link " id="hl" href="update_alumni_form.php">Update Profile</a>
            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Alumni List
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="civil.php">Civil Engineering</a></li>
                                        <li><a class="dropdown-item" href="mech.php">Mechanical Engineering</a></li>
                                        <li><a class="dropdown-item" href="mts.php">Mechatronics Engineering</a></li>
                                        <li><a class="dropdown-item" href="automobile.php">Automobile Engineering </a></li>
                                        <li><a class="dropdown-item" href="chemical.php">Chemical Engineering</a></li>
                                        <li><a class="dropdown-item" href="foodtech.php">Food Technology</a></li>
                                        <li><a class="dropdown-item" href="eee.php">Electrical and Electronics Engineering</a></li>
                                        <li><a class="dropdown-item" href="eie.php">Electronics and Instrumentation Engineering</a></li>      
                                         <li><a class="dropdown-item" href="ece.php">Electronics and Communication Engineering</a></li>
                                        <li><a class="dropdown-item" href="cse.php">Computer Science and Engineering</a></li>
                                        <li><a class="dropdown-item" href="it.php">Information Technology</a></li>
                                        <li><a class="dropdown-item" href="mba.php">Management Studies</a></li>
                                        <li><a class="dropdown-item" href="mca.php">Computer Applications</a></li>
                                        <li><a class="dropdown-item" href="ctug.php">Computer Technology - UG</a></li>
                                        <li><a class="dropdown-item" href="ctpg.php">Computer Technology - PG</a></li>
                            </ul>
                        </li>
            <a class="nav-item nav-link " id="hl" href="alumni_feedback_form.php" >Feedbacks</a>
            <a class="nav-item nav-link " id="hl" href="chats.php" >Class Chats</a>
            <a class="nav-item nav-link " id="hl" href="depart_chat.php" >Department Chat</a>
            <a class="nav-item nav-link " id="hl" href="college_chat.php" >College Chat</a>
            <a class="nav-item nav-link  active" id="hl" href="jobs_forum_alumni.php" >Jobs Forum</a>
            <a class="nav-item nav-link " id="hl" href="logout.php">Logout</a>
            
        </div>


        
    </div>
</nav>
<div class="card">
    <div class="card-body text-center">

      <p align="center"><a href="jobs_forum_form.php" style="text-decoration:none"><h2>Click here to post your message in Forum.</h2></a></p>
   
<p align="center"><h3><i>JOB FORUM</i></h3></p>
     <?php
        include 'db.php';
        $cn=$_SESSION['acollege'];
        $date=date("Y-m-d");
        $sql="SELECT * FROM job_forum WHERE college_name='$cn' AND last_date>'$date' ORDER BY last_date";
        if($res=mysqli_query($con,$sql))
        {
            if(mysqli_num_rows($res)==0)
          {
            ?><center>Sorry!No Records Found.</center> <?php
          }
          else
          {
            while($row=mysqli_fetch_array($res))
            {
                ?>
                
    <div class="d-flex justify-content-center" style="padding-top: 0%;padding-bottom: 5%">
  <div class="card bg-light" >
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr><td><b>Company Name:</b></td><td><?php echo $row['company_name']; ?></td>
                <td><b>Job Title:</b></td><td><?php echo $row['job_title']; ?></td></tr>
                <tr><td><b>Salary:</b></td><td><?php echo $row['salary']; ?></td>
                <td><b>Location:</b></td><td><?php echo $row['location']; ?></td></tr>
                <tr><td><b>Description:</b></td><td><?php echo $row['description']; ?></td>
                <td><b>Email Id:</b></td><td><?php echo $row['email']; ?></td></tr>
                <tr><td colspan="2"><b>Last Date to Apply(YYYY-MM-DD):</b></td><td colspan="2" style="color:red"><?php echo $row['last_date']; ?></td></tr>
            </table>
            </div>
        </div>
        </div>
        </div><?php
            }
        }
        }
     
     
     ?>
    
  



</div></div>

</div>
<?php include 'footer.php'; ?>
</body>
</html>
<?php
    }
    else
    {
      header("Location:index.php");
    }
  ?>