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
  		background-color: white;
  		color:#3366cc;
  	}
  </style>
</head>
<body>
	<div class="container" >
		<!-- <div class="navbar" style="background-color:#3366cc">
		<div class="col-sm-2" style="float: left"><img title="Governement of Goa Logo" src="Image/logogoa.png" alt="Emblem of State Government" style="width: 8em;height:105px;"></div><div class="col-sm-8" style="text-align:center;color: white;float: left"><h1>Directorate of Education</h1><h3>Government of Goa, India</h3></div><div class="col-sm-2" style="text-align: right;float:right"><img title="Government of India Emblem" src="Image/logoind.png" alt="Government of India Emblem image" style="width: 5em;"></div>
		</div> -->
		<img src="Image/logo.jpg" width=100%>
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
            <a class="nav-item nav-link active" id="hl" href="colleges.php" style="background-color:#3366cc">Colleges</a>
            <a class="nav-item nav-link active" id="hl" href="events.php">Events</a>
            <a class="nav-item nav-link active" id="hl" href="gallery.php">Galleries</a>
            <a class="nav-item nav-link active" id="hl" href="jobs_forum.php">Jobs Forum</a>
            <a class="nav-item nav-link active" id="hl" href="contact.php" >Contact Us</a>
        </div>

        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" id="hl" href="signup.php">Sign Up</a>
            <a class="nav-item nav-link active" id="hl" href="#" data-toggle="modal" data-target="#myModal2">Login</a>
            <a class="nav-item nav-link active" id="hl" href="#" data-toggle="modal" data-target="#myModal1">Admin Login</a>
        </div>


        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 btn1" type="submit">Search</button>
        </form> -->
    </div>
</nav>
</div>

<div class="container">
<!--    <div id="demo" class="carousel slide" data-ride="carousel">-->
<!--  <ul class="carousel-indicators">-->
<!--    <li data-target="#demo" data-slide-to="0" class="active"></li>-->
<!--    <li data-target="#demo" data-slide-to="1"></li>-->
<!--    <li data-target="#demo" data-slide-to="2"></li>-->
<!--  </ul>-->
<!--  <div class="carousel-inner">-->
<!--    <div class="carousel-item active">-->
<!--      <center><img src="Image/college1.jpg" alt="Government College of Arts, Science and Commerce, Khandola, Marcela Goa." ></center>-->
<!--      <div class="carousel-caption">-->
<!--        <p>Government College of Arts, Science and Commerce, Khandola, Marcela Goa.</p>-->
        <!--<p>We had such a great time in LA!</p>-->
<!--      </div>   -->
<!--    </div>-->
<!--    <div class="carousel-item">-->
<!--      <center><img src="Image/college2.jpg" alt="Government College of Arts, Science & Commerce, Sanquelim-Goa." width="800" height="300"></center>-->
<!--      <div class="carousel-caption">-->
<!--        <p>Government College of Arts, Science & Commerce, Sanquelim-Goa.</p>-->
        <!--<p>Thank you, Chicago!</p>-->
<!--      </div>   -->
<!--    </div>-->
<!--    <div class="carousel-item">-->
<!--     <center> <img src="Image/college3.jpg" alt="College of Education, Ponda Goa."></center>-->
<!--      <div class="carousel-caption">-->
<!--        <p>College of Education, Ponda Goa.</p>-->
        <!--<p>We love the Big Apple!</p>-->
<!--      </div>   -->
<!--    </div>-->
<!--  </div>-->
<!--  <a class="carousel-control-prev" href="#demo" data-slide="prev">-->
<!--    <span class="carousel-control-prev-icon"></span>-->
<!--  </a>-->
<!--  <a class="carousel-control-next" href="#demo" data-slide="next">-->
<!--    <span class="carousel-control-next-icon"></span>-->
<!--  </a>-->
<!--</div>-->
</div>

<div class="container">
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
    <div class="card-body">
      <p style="text-align: center;font-size: 40px"><b>List of Institutions</b></p>
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