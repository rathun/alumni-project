<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
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
            <a class="nav-item nav-link active" id="hl" href="index.php">Home</a>
            
        </div>

        


        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 btn1" type="submit">Search</button>
        </form> -->
    </div>
</nav>
<div class="col-sm-12 bg-light">
    <?php include 'login.php'; ?>
  <h1><i><p style="text-align: center">Forgot Password</i></h1></p>
  <div class="d-flex justify-content-center" style="padding-top: 0%;padding-bottom: 5%">
  <div class="card bg-light" style="height: 230px;width: 400px;">
    <div class="card-body">
    <form  method="POST" action="forgotpassword.php" autocomplete="off">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" title="Enter Valid Email Id" placeholder="Enter Your Registered Email Id" required>
            
          </div>
          Date of Birth:
      <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
            </div>
            <input type="date" name="dob" class="form-control" placeholder="Date Of Birth" required>
          </div>
          <!-- <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div> -->
          <div class="form-group" style="text-align: center">
            <input type="submit" value="Get Password" name="submit" class="btn btn-primary">
          </div>
        </form>
        
    </div>
  </div>
</div>
</div>

</div>
<?php include 'footer.php'; ?>
</body>
</html>