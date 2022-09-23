<?php
  session_start();
  if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	//demo
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
          <a class="nav-item nav-link " id="hl" href="alumni_events.php" >Events</a>
            <a class="nav-item nav-link " id="hl" href="update_alumni_form.php">Update Profile</a>
            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Alumni List
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="civil.php">Civil Engineering department</a></li>
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
            <a class="nav-item nav-link active" id="hl" href="alumni_feedback_form.php" >Feedbacks</a>
            <a class="nav-item nav-link " id="hl" href="chats.php">Class Chats</a>
            <a class="nav-item nav-link " id="hl" href="depart_chat.php">Department Chats</a>
            <a class="nav-item nav-link " id="hl" href="college_chat.php">College Chats</a>
            <a class="nav-item nav-link " id="hl" href="jobs_forum_alumni.php" >Jobs Forum</a>
            <a class="nav-item nav-link " id="hl" href="logout.php">Logout</a>
            
        </div>


       
    </div>
</nav>
</div>
<div class="container">
<div class="card">
    <div class="card-body text-center">
<div class="d-flex justify-content-center" style="padding-top: 0%;padding-bottom: 5%">
  <div class="card bg-light" style="width: 400px;">
    <div class="card-body">
      <form  method="POST" action="alumni_feedback.php" autocomplete="off">
        <input type="hidden" name="id" value="<?php echo $_SESSION['sno']; ?>">
        <input type="hidden" name="college" value="<?php echo $_SESSION['dept']; ?>">
         <div class="form-group">
            <label for="comment">Enter Your FeedBack:</label>
             <textarea class="form-control" rows="3" name="feedback"></textarea>
            </div>
            <div align="center"><b>Note:</b>No Emoji's are allowed.Only letters,numbers and special symbols are allowed.</div><br>
            <div class="form-group" style="text-align: center">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
          </div>
        </form>
    </div>
  


</div>
</div>
</div></div>

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