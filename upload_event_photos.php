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
            <a class="nav-item nav-link active" id="hl" href="upload_event_photos.php" >Upload Events Photos</a>
            <a class="nav-item nav-link " id="hl" href="job_forum_admin.php">Job Forum</a>
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
<div class="card">
    <div class="card-body text-center">
        <h1><i><b>Welcome,<?php echo $_SESSION['department']; ?></b></i></h1><br>
   
<div class="d-flex justify-content-center" style="padding-top: 0%;padding-bottom: 5%">
  <div class="card bg-light" style="width: 400px;">
    <div class="card-body">
       <form action="event_photos.php" method="POST" enctype="multipart/form-data">
    <p>Upload Your Photo:</p>
    <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="photo">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
            <label for="comment">Description for Photo:</label>
             <textarea class="form-control" rows="3" name="desc"></textarea>
            </div>
           <div><center><b>Note:</b>Upload Only one Photo and it should be in .jpg Extension.</center></div><br>
            
            <div class="form-group" style="text-align: center">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
          </div>
    </form>
    </div>
  </div>
 </div>
  </div>

</div>

  </div>
  <?php include 'footer.php'; ?>
  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>
<?php
    }
    else
    {
      header("Location:index.php");
    }
  ?>