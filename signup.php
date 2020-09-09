<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
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
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <!-- <div class="container">  -->
    <!-- you can turn this container off/on-->
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!-- collapse class will hide everything in the navbar once we hit mobile display -->
        <div class="navbar-nav">
            <a class="nav-item nav-link " id="hl" href="index.php">Home</a>
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
            <a class="nav-item nav-link " id="hl" href="jobs_forum.php" >Jobs Forum</a>
            <a class="nav-item nav-link " id="hl" href="contact.php" >Contact Us</a>
            
        </div>

        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" id="hl" href="signup.php" >Sign Up</a>
            <a class="nav-item nav-link " id="hl" href="#" data-toggle="modal" data-target="#myModal2">Login</a>
            <a class="nav-item nav-link " id="hl" href="#" data-toggle="modal" data-target="#myModal1">Admin Login</a>
        </div>


        
    </div>
</nav>
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
<div class="col-sm-12 bg-light">
   
  <h1><i><p style="text-align: center">Sign Up</i></h1></p>
<div class="d-flex justify-content-center" >
  <div class="card bg-light" style="width: 500px;">
    <div class="card-header">
        <b><h2>College Details</h2></b>
    </div>
    <div class="card-body">
<form name="frm" method="POST" action="register.php" autocomplete="off">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" id="name" name="name" pattern="[a-zA-Z ]{2,30}" title="Invalid Name" class="form-control" placeholder="Name" required>
           
          </div>
          <label for="sel1">Select Your College:</label>
          <div class="input-group form-group">
                
                <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-university"></i></span>
            </div>
                <select class="form-control" name="college" reqiured>
                  <option>Kongu Engineering College,Erode.</option>
                
                </select>
            </div>
           <!-- Example:Ram S -->
           <label for="sel1">Select Your Department:</label>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-building"></i></span>
            </div>
            <?php
            include 'db.php';
            $sql="SELECT * FROM department";
            if($res=mysqli_query($con,$sql))
            {
                ?><select name="department" class="form-control"  required ><?php
                while($row=mysqli_fetch_array($res))
                {
                    ?><option><?php echo $row['department']; ?></option><?php
                }
            }
            ?>
            
							
							
							</select>
            
          </div>
          
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
            </div>
            <input type="text" id="year" name="year_of_study" class="form-control" pattern="[0-9]{4}[-]{1}[0-9]{4}" title="Year of Study should be like 1984-1988" placeholder="Year Of Study" required>
            
          </div>
          <div style="text-align:center">Eg:1984-1988,2010-2014</div>
        </div>
        
         <div class="card-header">
        <b><h2>Address</h2></b>
    </div>
    <div class="card-body">
      <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-street-view"></i></span>
            </div>
            <input type="text" name="street" id="street" class="form-control" placeholder="Street" required>
          </div>
           <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
            </div>
            <input type="text" name="city" id="city" class="form-control" placeholder="City" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
            </div>
            <input type="text" name="state" id="state" class="form-control" placeholder="State" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-globe"></i></span>
            </div>
            <select name="country" class="form-control"  required>
								
								<option>Afghanistan<br><option>Albania<br><option>Algeria<br><option>American Samoa<br><option>Andorra<br><option>Angola<br><option>Anguilla<br><option>Antigua and Barbuda<br><option>Argentina<br><option>Armenia<br><option>Aruba<br><option>Australia<br><option>Austria<br><option>Azerbaijan<br><option>Bahamas<br><option>Bahrain<br><option>Bangladesh<br><option>Barbados<br><option>Belarus<br><option>Belgium<br><option>Belize<br><option>Benin<br><option>Bermuda<br><option>Bhutan<br><option>Bolivia<br><option>Bosnia and Herzegovina<br><option>Botswana<br><option>Brazil<br><option>British Virgin Islands<br><option>Brunei Darussalam<br><option>Bulgaria<br><option>Burkina Faso<br><option>Burundi<br><option>Cambodia<br><option>Cameroon<br><option>Canada<br><option>Cape Verde<br><option>Cayman Islands<br><option>Central African Republic<br><option>Chad<br><option>Chile<br><option>China<br><option>Colombia<br><option>Comoros<br><option>Congo<br><option>Cook Islands<br><option>Costa Rica<br><option>Cote d'Ivoire<br><option>Croatia<br><option>Cuba<br><option>Cyprus<br><option>Czech Republic<br><option>Democratic People's Republic of Korea<br><option>Democratic Republic of the Congo<br><option>Denmark<br><option>Djibouti<br><option>Dominica<br><option>Dominican Republic<br><option>East Timor<br><option>Ecuador<br><option>Egypt<br><option>El Salvador<br><option>Equatorial Guinea<br><option>Eritrea<br><option>Estonia<br><option>Ethiopia<br><option>Europe<br><option>Faeroe Islands<br><option>Falkland Islands (Malvinas)<br><option>Fiji<br><option>Finland<br><option>France<br><option>French Guiana<br><option>French Polynesia<br><option>Gabon<br><option>Gambia<br><option>Georgia<br><option>Germany<br><option>Ghana<br><option>Gibraltar<br><option>Greece<br><option>Greenland<br><option>Grenada<br><option>Guadeloupe<br><option>Guam<br><option>Guatemala<br><option>Guinea<br><option>Guinea-Bissau<br><option>Guyana<br><option>Haiti<br><option>Holy See<br><option>Honduras<br><option>Hong Kong<br><option>Hungary<br><option>Iceland<br><option>India<br><option>Indonesia<br><option>Iran<br><option>Iraq<br><option>Ireland<br><option>Israel<br><option>Italy<br><option>Jamaica<br><option>Japan<br><option>Jordan<br><option>Kazakhstan<br><option>Kenya<br><option>Kiribati<br><option>Kuwait<br><option>Kyrgyzstan<br><option>Lao People's Democratic Republic<br><option>Latvia<br><option>Lebanon<br><option>Lesotho<br><option>Liberia<br><option>Libyan Arab Jamahiriya<br><option>Liechtenstein<br><option>Lithuania<br><option>Luxembourg<br><option>Macao Special Administrative Region of China<br><option>Madagascar<br><option>Malawi<br><option>Malaysia<br><option>Maldives<br><option>Mali<br><option>Malta<br><option>Marshall Islands<br><option>Martinique<br><option>Mauritania<br><option>Mauritius<br><option>Mexico<br><option>Micronesia Federated States of,<br><option>Monaco<br><option>Mongolia<br><option>Montserrat<br><option>Morocco<br><option>Mozambique<br><option>Myanmar<br><option>Namibia<br><option>Nauru<br><option>Nepal<br><option>Netherlands<br><option>Netherlands Antilles<br><option>New Caledonia<br><option>New Zealand<br><option>Nicaragua<br><option>Niger<br><option>Nigeria<br><option>Niue<br><option>Norfolk Island<br><option>Northern Mariana Islands<br><option>Norway<br><option>Occupied Palestinian Territory<br><option>Oman<br><option>Pakistan<br><option>Palau<br><option>Panama<br><option>Papua New Guinea<br><option>Paraguay<br><option>Peru<br><option>Philippines<br><option>Pitcairn<br><option>Poland<br><option>Portugal<br><option>Puerto Rico<br><option>Qatar<br><option>Republic of Korea<br><option>Republic of Moldova<br><option>Réunion<br><option>Romania<br><option>Russian Federation<br><option>Rwanda<br><option>Saint Helena<br><option>Saint Kitts and Nevis<br><option>Saint Lucia<br><option>Saint Pierre and Miquelon<br><option>Saint Vincent and the Grenadines<br><option>Samoa<br><option>San Marino<br><option>Sao Tome and Principe<br><option>Saudi Arabia<br><option>Senegal<br><option>Seychelles<br><option>Sierra Leone<br><option>Singapore<br><option>Slovakia<br><option>Slovenia<br><option>Solomon Islands<br><option>Somalia<br><option>South Africa<br><option>Spain<br><option>Sri Lanka<br><option>Sudan<br><option>Suriname<br><option>Svalbard and Jan Mayen Islands<br><option>Swaziland<br><option>Sweden<br><option>Switzerland<br><option>Syrian Arab Republic<br><option>Taiwan<br><option>Tajikistan<br><option>Thailand<br><option>The former Yugoslav Republic of Macedonia<br><option>Togo<br><option>Tokelau<br><option>Tonga<br><option>Trinidad and Tobago<br><option>Tunisia<br><option>Turkey<br><option>Turkmenistan<br><option>Turks and Caicos Islands<br><option>Tuvalu<br><option>Uganda<br><option>Ukraine<br><option>United Arab Emirates<br><option>United Kingdom<br><option>United Republic of Tanzania<br><option>United States<br><option>United States Virgin Islands<br><option>Unknown<br><option>Uruguay<br><option>Uzbekistan<br><option>Vanuatu<br><option>Venezuela<br><option>Viet Nam<br><option>Wallis and Futuna Islands<br><option>Western Sahara<br><option>Yemen<br><option>Yugoslavia<br><option>Zambia<br><option>Zimbabwe<br>							</select>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-mobile"></i></span>
            </div>
            <input type="text" name="mobileno" id="mob" class="form-control" pattern="[0-9]{10,20}" title="Enter Valid Mobile No" placeholder="Mobile Number" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" name="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" title="Enter Valid Email Id" placeholder="Email" required>
          </div>
          <div style="text-align:center">Eg:name@gmail.com,name@domain.in</div><br>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" id="pass" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>
          <div style="text-align:center">Password Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</div>
         <!--  <div class="form-group" style="text-align: center">
            <input type="submit" value="Login" name="submit" class="btn btn-primary">
          </div> -->
          </div>
           <div class="card-header">
        <b><h2>Personal Details</h2></b>
        </div>
        <div class="card-body">
          Date of Birth:
      <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
            </div>
            <input type="date" name="dob" id="dob" class="form-control" placeholder="Date Of Birth" required>
          </div>
          Marital Status :
          <div class="input-group form-group">
          <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio" name="ms" value="Single" checked>
              <label class="custom-control-label" for="customRadio" >Single</label>
            </div>
              <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio1" name="ms" value="Married">
              <label class="custom-control-label" for="customRadio1">Married</label>
          </div>
          </div>
          <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
            </div>
            <input type="text" name="linkedinurl" id="linkedinurl" class="form-control" placeholder="Your Linkedin URL" required>
          </div>
        <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
            </div>
            <input type="text" name="qualification" id="quali" class="form-control" placeholder="Highest Qualification" required>
          </div>
          
           <div class="form-group">
            <label for="comment">Awards(If Any):</label>
             <textarea class="form-control" rows="3" name="awards"></textarea>
            </div>
            <div class="form-group">
            <label for="comment">Hobbies:</label>
             <textarea class="form-control" rows="3" id="hob" name="hobbies" required></textarea>
            </div>
            
                <label for="sel1">Select Your Profession:</label>
                <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
            </div>
                <select class="form-control" id="c" name="profession">
                    <option>Higher Education</option>
                <option>Job</option>
                
                <option>Business</option>
                <option>Entrepreneur</option>
                <option>Home Maker</option>
                <option>Others</option>
                </select>
            </div>


          </div>
          <div class="card-header" style="display:none" id="del">
        <b><h2>Details regarding your job</h2></b>
        </div>
        <div class="card-body" style="display:none" id="del1">
            <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-sitemap"></i></span>
            </div>
            <input type="text" name="organisation" id="org" class="form-control" placeholder="Organisation">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-building"></i></span>
            </div>
            <input type="text" name="designation" id="desig" class="form-control" placeholder="Designation">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" name="area_of_interest" id="area" class="form-control" placeholder="Area of Interest/Specialization">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
            </div>
            <input type="text" name="work" id="work" class="form-control" placeholder="Location of Work">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-male"></i></span>
            </div>
            <input type="text" name="website" id="web" class="form-control"   placeholder="Company Website" >
          </div>
            <div style="text-align:center">Eg:www.companyname.in,www.companyname.com</div><br>
        </div>
        <div class="card-footer" style="color:red">
            <b>Note:</b>Your Email id is Username.Your Login will be Approved in few days.<br>
          </div>
          <div class="card-body">
            <div class="form-group" style="text-align: center">
            <input type="submit" value="Sign Up" id="submit" name="submit" class="btn btn-primary">
          </div>
          </div>
             <div  style="display:none;text-align: center" id="load">
    <img src="Image/load.gif" width=20% height=20%>
  </div>
        </form>
      
    </div>
  </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
  $("#c").change(function(){
      var pro=$('#c').val();
      if(pro!="Home Maker" && pro!="Higher Education" && pro!="Others")
      {
            $('#del').show();
            $('#del1').show();
      }
      else
      {
          $('#del').hide();
            $('#del1').hide();
      }
  });
});
        $(document).ready(function(){
            $('form').submit( function () {
              var email=$('#email').val();
              var pass=$('#pass').val();
              var name=$('#name').val();
              var dept=$('#depart').val();
              var year=$('#year').val();
              var street=$('#street').val();
              var city=$('#city').val();
              var state=$('#state').val();
              var c=$('#country').val();
              var mob=$('#mob').val();
              var dob=$('#dob').val();
              var quali=$('#quali').val();
              var hob=$('#hob').val();
              var org=$('#org').val();
              var desig=$('#desig').val();
              var area=$('#area').val();
              var work=$('#work').val();
              var web=$('#web').val();
              if(email!='' && pass!='' && name!='' && dept!='' && year!='' && state!='' && city!='' && state!='' && c!='' && mob!='' && dob!='' && quali!='' && hob!='' )
              {
                // $('#del').hide();
                // $('#del1').hide();
                // $('#del2').hide();
                $('#load').show();
              }
            });
        });
    </script>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    
 $('#submit').click(function(){
   
   
   $.ajax({
    alert("hi");
    url: 'register.php',
    type: 'POST',
    data: $('#frm').serialize(),
    success: function(response){ 
      alert(response);
    }
  });
 });
});
</script> -->


</div>
<?php include 'footer.php'; ?>
</body>
</html>