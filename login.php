<!-- <!DOCTYPE html>
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
	<div class="container " >
		<!-- <div class="navbar" style="background-color:#3366cc">
		<div class="col-sm-2" style="float: left"><img title="Governement of Goa Logo" src="Image/logogoa.png" alt="Emblem of State Government" style="width: 8em;height:105px;"></div><div class="col-sm-8" style="text-align:center;color: white;float: left"><h1>Directorate of Education</h1><h3>Government of Goa, India</h3></div><div class="col-sm-2" style="text-align: right;float:right"><img title="Government of India Emblem" src="Image/logoind.png" alt="Government of India Emblem image" style="width: 5em;"></div>
		</div> -->
		<!-- <img src="Image/logo.jpg" width=100%>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark "> -->
    <!-- <div class="container">  -->
    <!-- you can turn this container off/on-->
   
   <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
 -->
<!--     <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
        <!-- collapse class will hide everything in the navbar once we hit mobile display -->
        <!-- <div class="navbar-nav">
            <a class="nav-item nav-link active" id="hl" href="index.php">Home</a>
            <a class="nav-item nav-link active" id="hl" href="colleges.php">Colleges</a>
            <a class="nav-item nav-link active" id="hl" href="events.php">Events</a>
            <a class="nav-item nav-link active" id="hl" href="gallery.php" >Galleries</a>
            <a class="nav-item nav-link active" id="hl" href="contact.php" >Contact Us</a>
        </div>

        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" id="hl" href="signup.php">Sign Up</a>
            <a class="nav-item nav-link active" id="hl" href="login.php" style="background-color:#3366cc">Login</a>
            <a class="nav-item nav-link active" id="hl" href="#" data-toggle="modal" data-target="#myModal1">Admin Login</a>
        </div> -->


        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 btn1" type="submit">Search</button>
        </form> -->
    <!-- </div>
</nav>
</div>
<div class="container" > -->
<div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><i>Login</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form name="login" method="POST" action="auth_alumni.php" autocomplete="off">
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
        <p align="center"><b>Note:</b>Username is your Email Id.</p>
        <p align="center"><a href="forgotpassword_form.php" style="text-decoration: none">Forgot Password?</a></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
<!-- <div class="col-sm-12 bg-light">
  <div  style="display:none;padding-top: 5%;text-align: center" id="load">
    <img src="Image/load.gif" width=20% height=20%>
  </div>
  <h1><i><p style="text-align: center" id="del">Login</i></h1></p>
  <div class="d-flex justify-content-center" style="padding-top: 0%;padding-bottom: 5%" >
  <div class="card bg-light" style="height: 250px;width: 400px;" id="del2">
    <div class="card-body" id="del1">
    <form  method="POST" action="auth_alumni.php" autocomplete="off" >
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" id="#un" class="form-control" placeholder="Username" required>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group" style="text-align: center">
            <input type="submit" value="Login" name="submit" id="submit" class="btn btn-primary">
          </div>
        </form>
        <p align="center"><b>Note:</b>Username is your Email Id.</p>
        <p align="center"><a href="forgotpassword_form.php" style="text-decoration: none">Forgot Password?</a></p>
    </div>
  </div>
</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#submit').click( function () {
              var un=$('#un').val();
              var pass=$('#pass').val();
              // if(un!='' && pass!='')
              // {
                $('#del').hide();
                $('#del1').hide();
                $('#del2').hide();
                $('#load').show();
              // }
            });
        });
    </script>
<?php// include 'footer.php'; ?>
</div>
</body>
</html> -->