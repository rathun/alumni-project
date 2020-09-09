<!DOCTYPE html>
<html>
<head>
	<title>Colleges</title>
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
  		
  		color:#ccffcc;
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
            <a class="nav-link" id="hl" href="index.php">Home</a>
           <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Departments
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            			<li><a class="dropdown-item" href="departments/civil.php">Civil Engineering</a></li>
                                        <li><a class="dropdown-item" href="departments/mech.php">Mechanical Engineering</a></li>
                                        <li><a class="dropdown-item" href="departments/mts.php">Mechatronics Engineering</a></li>
                                        <li><a class="dropdown-item" href="departments/automobile.php">Automobile Engineering </a></li>
                                        <li><a class="dropdown-item" href="departments/chemical.php">Chemical Engineering</a></li>
                                        <li><a class="dropdown-item" href="departments/foodtech.php">Food Technology</a></li>
                                        <li><a class="dropdown-item" href="departments/eee.php">Electrical and Electronics Engineering</a></li>
                                        <li><a class="dropdown-item" href="departments/eie.php">Electronics and Instrumentation Engineering</a></li>      
                                         <li><a class="dropdown-item" href="departments/ece.php">Electronics and Communication Engineering</a></li>
                                        <li><a class="dropdown-item" href="departments/cse.php">Computer Science and Engineering</a></li>
                                        <li><a class="dropdown-item" href="departments/it.php">Information Technology</a></li>
                                        <li><a class="dropdown-item" href="departments/mba.php">Management Studies</a></li>
                                        <li><a class="dropdown-item" href="departments/mca.php">Computer Applications</a></li>
                                        <li><a class="dropdown-item" href="departments/ctug.php">Computer Technology - UG</a></li>
                                        <li><a class="dropdown-item" href="departments/ctpg.php">Computer Technology - PG</a></li>
                            </ul>
                        </li>
                          
                                
            <a class=" nav-link" id="hl" href="events.php">Events</a>
            <a class="nav-item nav-link" id="hl" href="gallery.php">Galleries</a>
            <a class="nav-item nav-link " id="hl" href="contact.php" >Contact Us</a>
        </div>

        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" id="hl" href="signup.php">Sign Up</a>
            <a class="nav-item nav-link active" id="hl" href="login.php">Login</a>
            <a class="nav-item nav-link active" id="hl" href="#" data-toggle="modal" data-target="#myModal1">Admin Login</a>
        </div>


        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 btn1" type="submit">Search</button>
        </form> -->
    </div>
</nav>




<div class="container">
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
    <div class="card-body">
      <p style="text-align: center;font-size: 40px"><b>List of Departments</b></p>
      <p style="font-size:25px"><b>I. Government Colleges</b></p>
      <ol>
        <li>Government College of Arts, Science and Commerce, Khandola, Marcela Goa.</li>
        <li>Government College of Arts, Science & Commerce, Sanquelim-Goa.</li>
        <li>Government College of Arts, Science & Commerce, Quepem-Goa.</li>
        <li>Sant Sohirobanath Ambiye Government College of Arts & Commerce, VIrnoda-Pernem, Goa.</li>
        <li>Government College of Commerce & Economics, Borda-Margao, Goa.</li>
        <li>Goa College of Music, Kala Academys Complex, Campal, Panaji-Goa.</li>
        <li>Goa College of Home Science, Campal, Panaji, Goa.</li>
      </ol>
      <p style="font-size:25px"><b>II. Non-Government Aided Colleges</b></p>
      <ol>
        <li>Shree Mallikarjun College of Arts & Commerce, Canacona Goa.</li>
        <li>Nirmala Institute of Education, Altinho Panaji, Goa.</li>
        <li>Dhempe College of Arts & Science, Panaji, Goa.</li>
        <li>V.M. Salgaocar College of law, Miramar, Panaji Goa.</li>
        <li>S.S. Dempo College of Commerce & Economics, Altinho, Panaji, Goa.</li>
        <li>College of Commerce and Economics, Ponda Goa.</li>
        <li>Carmel College of Arts, Science & Commerce for Women, Nuvem Goa.</li>
        <li>Rosary College of Commerce & Art, Navelim Salcete Goa.</li>
        <li>Fr. Agnel College of Arts & Commerce, Pilar Goa.</li>
        <li>Narayan Zantye College of Commerce, Bicholim Goa.</li>
        <li>Smt. Parvatibi Chowgule Cultural Foundation's College of Arts & Science, Margao Goa.</li>
        <li>College of Education, Ponda Goa.</li>
        <li>College of Arts, Sou. Sheela Premandand Vaidya College of Science & V.N.S. Bandekar College of Commerce, Assagao, Mapusa Goa.</li>
        <li>St. Xavier's College of Arts, Science & Commerce, Mapusa Goa.</li>
        <li>S.V. College of Commerce & Management Studies, Telang Nagar, Khorlim, Mapusa Goa.</li>
        <li>MES College of Arts & Commerce, Zuarinagar Goa.</li>
        <li>Vidya Vikas Mandal's Shree Damodar College of Commerce & Economics, Margao Goa.</li>
        <li>Vidya Vikas Mandal's Govind Ramnath Kare College of Law Margao, Goa.</li>
        <li>Cuncolim Educational Society's College of Arts & Commerce, Cuncolim Salcete Goa.</li>
        <li>PES's College of Arts & Science, Ponda Goa.</li>
      </ol>
    </div>
  </div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>