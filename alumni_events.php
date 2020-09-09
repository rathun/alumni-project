<?php
  session_start();
  if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
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
            <a class="nav-item nav-link active" id="hl" href="alumni_events.php" >Events</a>
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
            <a class="nav-item nav-link " id="hl" href="alumni_feedback_form.php">Feedbacks</a>
            <a class="nav-item nav-link " id="hl" href="chats.php">Class Chats</a>
            <a class="nav-item nav-link " id="hl" href="depart_chat.php" >Department Chats</a>
            <a class="nav-item nav-link " id="hl" href="college_chat.php" >College Chat</a>
            <a class="nav-item nav-link " id="hl" href="jobs_forum_alumni.php">Jobs Forum</a>
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
<!--<div class="card">-->
<!--    <div class="card-body text-center">-->
<!--        <div class="table-responsive">-->
<!--              <table class="table table-bordered">-->
                 <!--<tr> <th>S.No</th><th>College Name</th><th>Date(YYYY-MM-DD)</th><th>Time(24 hrs)</th><th>Venue</th><th>Poster</th></tr>-->
     <?php
      include 'db.php';
      $college=$_SESSION['acollege'];
      $date=date("Y-m-d");
      $sql="SELECT * FROM event WHERE date>'$date'";
      if($res=mysqli_query($con,$sql))
      {
          if(mysqli_num_rows($res)==0)
          {
            ?><div class="card"><div class="card-body"><tr><td colspan="6"><center>Sorry!No Records Found.</center> </td></tr></div></div><?php
          }
          else
          {
        while($row=mysqli_fetch_array($res))
        {
         ?><div class="card-deck">
    <div class="card">
      <div class="card-body text-center"><img src="<?php echo $row['poster']; ?>" width=100%>
      </div>
      </div>
      <div class="card">
      <div class="card-body text-center">
          <div class="table-responsive">
      <table class="table table-bordered"><tr><td>Date(YYYY-MM-DD):</td><td><?php echo $row['date']; ?></td></tr><tr><td>Time(24 hrs):</td><td><?php echo $row['time']; ?></td></tr><tr><td>Venue:</td><td><?php echo $row['venue']; ?></td></tr></table>
      </div>
      </div>
      </div>
      </div>
      <?php
        }
          }
      }
      else
      {
        echo mysqli_error($con);
      }

      ?>
    </div>
      <?php include 'footer.php'; ?>
      
  <!--  </table>-->
  <!--</div>-->
  <!--  </div>-->
  <!--</div>-->




</body>
</html>
<?php
    }
    else
    {
      header("location:index.php");
    }
  ?>