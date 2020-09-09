<?php
  session_start();
  if( isset($_SESSION['akey']) && $_SESSION['akey']==1)
  {

?>
<!DOCTYPE html>
<html>
<head>
	<title>New Alumni</title>
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
            <a class="nav-item nav-link " id="hl" href="registered_alumni.php" >Registered Alumni</a>
            <a class="nav-item nav-link active" id="hl" href="new_alumni.php" >New Alumni</a>
            <a class="nav-item nav-link " id="hl" href="admin_feedback.php">Feedbacks</a>
            <a class="nav-item nav-link " id="hl" href="admin_event_form.php">Create Events</a>
            <a class="nav-item nav-link " id="hl" href="upload_event_photos.php">Upload Events Photos</a>
            <a class="nav-item nav-link " id="hl" href="job_forum_admin.php">Job Forum</a>
            <?php
            if(isset($_SESSION['prior']) && $_SESSION['prior']=='D')
            {
                ?>
            
            <a class="nav-item nav-link " id="hl" href="new_user.php">New User</a>
            <?php
            }
            ?>
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
<div class="container" >
<div class="card">
    <div class="card-body text-center">
        <h1><i><b>Welcome,<?php echo $_SESSION['department']; ?></b></i></h1>
    </div>
  </div>
<div class="card">
    <div class="card-body">
      <div class="table-responsive">
              <table class="table">
                 <tr> <th>S.No</th><th>Name</th><th>College Name</th><th>Department</th><th>Year Of Study</th><th>Status</th></tr>
      <?php
        include 'db.php';
        $id=$_SESSION['department'];

        $sql="SELECT * FROM user WHERE status='0' AND department='$id'";
        if($res=mysqli_query($con,$sql))
        {
          if(mysqli_num_rows($res)==0)
          {
            ?><tr><td colspan="6">Sorry!No Records Found. </td></tr><?php
          }
          else
          {
          while($row=mysqli_fetch_array($res))
          {
            ?>
            
                 <tr><td><?php echo $row['s_no']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['college_name']; ?></td><td><?php echo $row['department']; ?></td><td><?php echo $row['year_of_study']; ?></td>
                 <td><table><tr><td><form action="alumni_approve.php" method="POST"><input type="hidden" value="<?php echo $row['s_no']; ?>" name="id"><input type="hidden" value="<?php echo $row['email']; ?>" name="email"><input type="submit" class="btn btn-success" value="✓"></form></td><td>
                  <form action="alumni_delete.php" method="POST"><input type="hidden" value="<?php echo $row['s_no']; ?>" name="id">
              <input type="submit" class="btn btn-danger" value="X"></form></td></tr></table>
          </td></tr>
             
            <?php
          }
          }
          } 
        
        else
        {
          echo mysqli_error($con);
        }
        ?>
         </table>
            </div>
    </div>
</div>

</div>
<?php include 'footer.php'; ?>
</body>
</html>
<?php
    }
    else
    {
      header("location:index.php");
    }
  ?>