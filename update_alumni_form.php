<?php
  session_start();
  if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {

?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Profile</title>
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
            <a class="nav-item nav-link active" id="hl" href="update_alumni_form.php" >Update Profile</a>
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
            <a class="nav-item nav-link " id="hl" href="alumni_feedback_form.php">Feedbacks</a>
            <a class="nav-item nav-link" id="hl" href="chats.php">Class Chats</a>
            <a class="nav-item nav-link " id="hl" href="depart_chat.php" >Department Chat</a>
            <a class="nav-item nav-link " id="hl" href="college_chat.php" >College Chat</a>
            <a class="nav-item nav-link " id="hl" href="jobs_forum_alumni.php" >Jobs Forum</a>
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
          <form name="login" method="POST" action="changepassword.php" autocomplete="off">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="old" class="form-control" placeholder="Old Password" required>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="new" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="New Password" required>
          </div>
          <div class="form-group" style="text-align: center">
            <input type="submit" value="Change Password" name="submit" class="btn btn-primary">
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
<script>
      document.getElementById('buttonid').addEventListener('click', openDialog);

function openDialog() {
  document.getElementById('fileid').click();
}
  </script>
<div class="card">
    
<div class="card-body">
<?php
  include 'db.php';
  $id=$_SESSION['sno'];
  $sql="SELECT * FROM user WHERE s_no='$id'";
  if($res=mysqli_query($con,$sql))
  {
    while($row=mysqli_fetch_array($res))
    {

    

  ?>
<div class="d-flex justify-content-center" >
  <div class="card bg-light" style="width: 500px;">
      <div class="card-header">
        <b><h2>Profile Photo</h2></b>
    </div>
      <div class="card-body">
          <form name="frm" method="POST" action="update_alumni.php" enctype="multipart/form-data" autocomplete="off">
          <img src="<?php echo $row['photo']; ?>" class="rounded-circle" alt="Profile Photo" width="200" height="200">
          <!--<input type="file" name="photo" value="<?php //echo $row['photo']; ?>">-->
          <input type="file" id="BtnBrowseHidden" name="photo" value="<?php echo $row['photo']; ?>" style="display: none;" />
        <label for="BtnBrowseHidden" id="LblBrowse" style="color:red;padding-left:5%;font-size:30px">
           Change 
        </label>
      </div>
    <div class="card-header">
        <b><h2>College Details</h2></b>
    </div>
    <div class="card-body">

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $row['name']; ?>" readonly>
           
          </div>
          <div class="form-group">
                <label for="sel1">Select Your College:</label>
                <select class="form-control" name="college">
                  <option><?php echo $row['college_name']; ?></option>
                
                </select>
            </div>
           <!-- Example:Ram S -->
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-building"></i></span>
            </div>
            <input type="text" name="department" class="form-control" value="<?php echo $row['department']; ?>"  placeholder="Department" readonly>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
            </div>
            <input type="text" name="year_of_study" class="form-control" value="<?php echo $row['year_of_study']; ?>"  placeholder="Year Of Study" readonly>
            
          </div>
        </div>
         <div class="card-header">
        <b><h2>Address</h2></b>
    </div>
    <div class="card-body">
      <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-street-view"></i></span>
            </div>
            <input type="text" name="street" class="form-control" value="<?php echo $row['street']; ?>" placeholder="Street" required>
          </div>
           <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
            </div>
            <input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>" placeholder="City" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
            </div>
            <input type="text" name="state" class="form-control" value="<?php echo $row['state']; ?>" placeholder="State" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-globe"></i></span>
            </div>
            <input type="text" name="country" class="form-control" value="<?php echo $row['country']; ?>" placeholder="Country" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-mobile"></i></span>
            </div>
            <input type="text" name="mobileno" class="form-control" value="<?php echo $row['mobile_number']; ?>" pattern="[0-9]{10,20}" title="Enter Valid Mobile No" placeholder="Mobile Number" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>"  placeholder="Email" readonly>
          </div>
          
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
            <input type="date" name="dob" class="form-control" value="<?php echo $row['dob']; ?>" placeholder="Date Of Birth" readonly>
          </div>
                    Marital Status:
                    <?php
                    if($row['marital_status']=="Single")
                    {
                        
                    ?>
        <div class="input-group form-group">
          <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio" name="ms" value="Single" checked>
              <label class="custom-control-label" for="customRadio">Single</label>
            </div>
              <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio1" name="ms" value="Married">
              <label class="custom-control-label" for="customRadio1">Married</label>
          </div>
          </div>
          <?php
                    }
                    else
                    {
                        ?>
                        <div class="input-group form-group">
          <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio" name="ms" value="Single">
              <label class="custom-control-label" for="customRadio">Single</label>
            </div>
              <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio1" name="ms" value="Married" checked>
              <label class="custom-control-label" for="customRadio1">Married</label>
          </div>
          </div>
                        
                        <?php
                    }
                    ?>
        <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
            </div>
            <input type="text" name="qualification" class="form-control" value="<?php echo $row['qualification']; ?>" placeholder="Highest Qualification" required>
          </div>
          
           <div class="form-group">
            <label for="comment">Awards(If Any):</label>
             <textarea class="form-control" rows="3"  name="awards"><?php echo $row['awards']; ?></textarea>
            </div>
            <div class="form-group">
            <label for="comment">Hobbies:</label>
             <textarea class="form-control" rows="3"  name="hobbies"><?php echo $row['hobbies']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="sel1">Select Your Prfession:</label>
                <select class="form-control" name="profession">
                <option><?php echo $row['profession']; ?></option>
                </select>
            </div>


          </div>

          <div class="card-header">
        <b><h2>Details regarding your job</h2></b>
        </div>
        <div class="card-body">
            <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-sitemap"></i></span>
            </div>
            <input type="text" name="organisation" class="form-control" value="<?php echo $row['organisation']; ?>" placeholder="Organisation" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-building"></i></span>
            </div>
            <input type="text" name="designation" class="form-control" value="<?php echo $row['designation']; ?>" placeholder="Designation" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" name="area_of_interest" class="form-control" value="<?php echo $row['area_of_interest']; ?>" placeholder="Area of Interest/Specialization" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
            </div>
            <input type="text" name="work" class="form-control" value="<?php echo $row['location_of_work']; ?>" placeholder="Location of Work" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-male"></i></span>
            </div>
            <input type="text" name="website" class="form-control" value="<?php echo $row['website']; ?>" placeholder="Company Website" required>
          </div>

        </div>
       
          <div class="card-body">
            <div class="form-group" style="text-align: center">
            <input type="submit" value="Update" id="submit" name="submit" class="btn btn-primary"/>
            <a href="" class="btn btn-danger" id="hl"  data-toggle="modal" data-target="#myModal1">Change Password</a>
          </div>
          </div>

        </form>
      
    </div>
  </div>
  </div>
  </div>
<?php
}
  }
  else
  {
    echo mysqli_error($con);
  }
  mysqli_close($con);
  ?>
  
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