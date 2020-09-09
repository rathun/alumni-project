<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
            <a class="nav-item nav-link " id="hl" href="index.php" >Home</a>
            
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
            <a class="nav-item nav-link " id="hl" href="events.php">Events</a>
            <a class="nav-item nav-link " id="hl" href="gallery.php" >Galleries</a>
            <a class="nav-item nav-link active" id="hl" href="jobs_forum.php" >Jobs Forum</a>
            <a class="nav-item nav-link " id="hl" href="contact.php">Contact Us</a>
        </div>

        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link " id="hl" href="signup.php">Sign Up</a>
            <a class="nav-item nav-link " id="hl" href="#" data-toggle="modal" data-target="#myModal2">Login</a>
            <a class="nav-item nav-link " id="hl" href="#" data-toggle="modal" data-target="#myModal1">Admin Login</a>
        </div>

        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 btn1" type="submit">Search</button>
        </form> -->
    </div>
</nav>
</div>
<div class="container" >
	<?php include 'login.php'; ?>
<div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><i>Admin Login</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form name="login" method="POST" action="auth.php" autocomplete="off">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group" style="text-align: center">
            <input type="submit" value="Login" name="submit" class="btn btn-primary">
          </div>
        </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body text-center">
        
        <form class="form-inline" id="frm1" >
         
    <div class="input-group" style="width:100%">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <input type="text" class="form-control" id="search" name="search" placeholder="Search By Company Name,Job Title,Salary and Last Date to Apply" onkeyup="myFunction()">
    </div>
  </form>
    </div>
  </div>
  <div class="card">
    <div class="card-body text-center" id="data">

      
   <p align="center"><h3><i>To Post Message in Forum,Please Login.</i></h3></p>
<p align="center"><h3><i>JOB FORUM</i></h3></p>
     <?php
        include 'db.php';
        $date=date("Y-m-d");
        $sql="SELECT * FROM job_forum WHERE last_date>'$date' AND view='All' ORDER BY last_date";
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
<script type="text/javascript">
    function myFunction()
    {
         // alert("hi")  ;
    var id = $('#search').val();
    
    //alert(id);
  // var id=document.getElementById("id").value;
   // AJAX request
   $.ajax({
    url: 'search_job_all.php',
    type: 'POST',
    data: {search:id},
    success: function(response){ 
      // Add response in Modal body
      $('#data').html(response);

      
    }
  });
          
    }

  </script>
</body>
</html>