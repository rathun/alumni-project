<?php
  session_start();
  if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Classmates</title>
  <!-- <meta http-equiv="refresh" content="15" /> -->
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
    .table
    {
      text-align: center
    }
    .scrollable{
  overflow-y: auto;
  max-height: 240px;
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
            
            <a class="nav-item nav-link active" style="color:white;text-decoration: none">Welcome,<?php echo $_SESSION['name']; ?></a>
        </div>

        <div class="navbar-nav ml-auto">
          
          <a class="nav-item nav-link active" id="hl" href="alumni_events.php" >Events</a>
            <a class="nav-item nav-link active" id="hl" href="update_alumni_form.php">Update Profile</a>
            <a class="nav-item nav-link active" id="hl" href="alumni_feedback_form.php" >Feedbacks</a>
            <a class="nav-item nav-link active" id="hl" href="chats.php" >Chats</a>
            <a class="nav-item nav-link active" id="hl" href="depart_chat.php">Department Chats</a>
            <a class="nav-item nav-link active" id="hl" href="college_chat.php">college Chats</a>
            <a class="nav-item nav-link active" id="hl" href="jobs_forum_alumni.php">Jobs Forum</a>
            <!--<a class="nav-item nav-link active" id="hl" href="classmates.php" style="background-color:#3366cc">Classmates</a>-->
            <a class="nav-item nav-link active" id="hl" href="logout.php">Logout</a>
            
        </div>


        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 btn1" type="submit">Search</button>
        </form> -->
    </div>
</nav>
<!--<div class="d-flex justify-content-center" >-->
<!--  <div class="card bg-light">-->
<!--    <div class="card-body" id="load">-->
      <div class="table-responsive">
              <table class="table table-bordered">
                 <tr><th>Name</th><th>Department</th><th>Year Of Study</th><th>Linkedin URL</th></tr>

           <?php
              include 'db.php';
              //session_start();
            
              $cn=$_SESSION['acollege'];
              $year=$_SESSION['year'];
              $dept=$_SESSION['dept'];
              $sql="SELECT * FROM user WHERE  department='$dept'";
              if($res=mysqli_query($con,$sql))
              {
                while($row=mysqli_fetch_array($res))
                {
                  ?>
                    <tr><td><?php echo $row['name']; ?></td><td><?php echo $row['department']; ?></td><td><?php echo $row['year_of_study']; ?></td><td><?php echo $row['linkedinurl']; ?></td>
                    <!-- <td><form id="frm" action="alumni_details.php" method="POST"><input type="hidden" value="<?php //echo $row['s_no']; ?>" id="id" name="id"><input type="submit" class="btn btn-success" id="submit" value="View" ></form></td>
                  -->
          </tr>
                  <?php
                }
              }
              else
              {
                echo mysqli_error($con);
              }

           ?>
           </table>
           </div>
   <!--        </div>-->
   <!--  </div>-->
   <!--</div>-->
   
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