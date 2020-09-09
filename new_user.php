<?php
  session_start();
  if(isset($_SESSION['akey']) && $_SESSION['akey']==1)
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
  		background-color: white;
  		color:#3366cc;
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
            <a class="nav-item nav-link " id="hl" href="new_alumni.php">New Alumni</a>
            <a class="nav-item nav-link " id="hl" href="admin_feedback.php" >Feedbacks</a>
            <a class="nav-item nav-link " id="hl" href="admin_event_form.php" >Create Events</a>
            <a class="nav-item nav-link " id="hl" href="upload_event_photos.php">Upload Events Photos</a>
            <a class="nav-item nav-link " id="hl" href="job_forum_admin.php">Job Forum</a>
            <?php
            if(isset($_SESSION['prior']) && $_SESSION['prior']=='D')
            {
                ?>
            
            <a class="nav-item nav-link active" id="hl" href="new_user.php" >New User</a>
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
<div class="container">
    <div class="d-flex justify-content-center" >
<div class="card bg-light" style="width:50%" >
    <div class="card-header">
        <b><h2 style="text-align:center">Add New User</h2></b>
    </div>
    <div class="card-body">
    <form name="frm" method="POST" action="newcollege.php" >
          
          <label for="sel1">Select Your College:</label>
          <div class="input-group form-group">
                
                <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-university"></i></span>
            </div>
                <select class="form-control" name="college" reqiured>
                  <option>Kongu Engineering College,Erode.</option>
                
                </select>
            </div>
            <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" id="name" name="name"  class="form-control" placeholder="Name of Incharge/Co-ordinator" required>
           
          </div>
            <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" id="uname" name="uname"  class="form-control" placeholder="Username" required>
           
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" id="pass" name="pass"  class="form-control" placeholder="Password" required>
           
          </div>
          <div class="card-body">
            <div class="form-group" style="text-align: center">
            <input type="submit" value="Create User" id="submit" name="submit" class="btn btn-primary">
          </div>
          </div>
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

