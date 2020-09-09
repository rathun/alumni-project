<?php
  session_start();
  if(isset($_SESSION['akey']) && $_SESSION['akey']==1)
    {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Alumni</title>
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
            <a class="nav-item nav-link active" id="hl" href="registered_alumni.php" >Registered Alumni</a>
            <a class="nav-item nav-link " id="hl" href="new_alumni.php">New Alumni</a>
            <a class="nav-item nav-link " id="hl" href="admin_feedback.php">Feedbacks</a>
            <a class="nav-item nav-link " id="hl" href="admin_event_form.php">Create Events</a>
            <a class="nav-item nav-link " id="hl" href="upload_event_photos.php">Upload Events Photos</a>
            <a class="nav-item nav-link " id="hl" href="job_forum_admin.php">Job Forum</a>
            <?php
            if(isset($_SESSION['prior']) && $_SESSION['prior']=='D')
            {
                ?>
            
            <a class="nav-item nav-link " id="hl" href="new_user.php">New User</a>
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
<div class="container" >
<?php
if($_SESSION['prior']!='D')
{

  ?>
<div class="card">
    <div class="card-body text-center">
        <h1><i><b>Welcome,<?php echo $_SESSION['department']; ?></b></i></h1>
        <form class="form-inline" id="frm1" >
          <input type="hidden" value="<?php echo $_SESSION['department']; ?>" id="college">
    <div class="input-group" style="width:100%">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <input type="text" class="form-control" id="search" name="search" placeholder="Search By Name,Department or Year Of Study" onkeyup="myFunction()">
    </div>
  </form>
    </div>
  </div>
  
<div class="card">
    <div class="card-body" id="data">
      <div class="table-responsive">
              <table class="table">
                 <tr> <th>S.No</th><th>Name</th><th>College Name</th><th>Year Of Study</th><th>View</th></tr>
      <?php
        include 'db.php';
        $id=$_SESSION['department'];

        $sql="SELECT * FROM user WHERE status='Approved' AND department='$id'";
        if($res=mysqli_query($con,$sql))
        {
          if(mysqli_num_rows($res)==0)
          {
            ?><tr><td colspan="6">Sorry!No Records Found. </td></tr><?php
          }
          else
          {
              $i=0;
          while($row=mysqli_fetch_array($res))
          {
              $i++;
            ?>
            
                 <tr><td><?php echo $i; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['department']; ?></td><td><?php echo $row['year_of_study']; ?></td><td><form id="frm" action="alumni_details.php" method="POST"><input type="hidden" value="<?php echo $row['s_no']; ?>" id="id" name="id"><input type="submit" class="btn btn-success" id="submit" value="View" ></form></td>
                 
          </td></tr>
             
            <?php
          }
          }
        }
        else
        {
          echo mysqli_error($con);
        }
        ?>
         </table>
            </div>
    </div>
</div>
<?php
  }
  else
  {
  ?>
  <div class="card">
    <div class="card-body text-center">
        <h1><i><b>Welcome,<?php echo $_SESSION['department']; ?></b></i></h1>
        <form class="form-inline" id="frm1" >
          <input type="hidden" value="<?php echo $_SESSION['department']; ?>" id="college">
    <div class="input-group" style="width:100%">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <input type="text" class="form-control" id="search" name="search" placeholder="Search By Name,College Name,Department or Year Of Study" onkeyup="myFunction()">
    </div>
  </form>
    </div>
  </div>
  
<div class="card">
    <div class="card-body" id="data">
      <div class="table-responsive">
              <table class="table">
                 <tr> <th>S.No</th><th>Name</th><th>Department</th><th>Year Of Study</th><th>View</th></tr>
      <?php
        include 'db.php';
        $id=$_SESSION['department'];

        $sql="SELECT * FROM user WHERE status='Approved'";
        if($res=mysqli_query($con,$sql))
        {
          if(mysqli_num_rows($res)==0)
          {
            ?><tr><td colspan="6">Sorry!No Records Found. </td></tr><?php
          }
          else
          {
          while($row=mysqli_fetch_array($res))
          {
            ?>
            
                 <tr><td><?php echo $row['s_no']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['department']; ?></td><td><?php echo $row['year_of_study']; ?></td><td><form id="frm" action="alumni_details.php" method="POST"><input type="hidden" value="<?php echo $row['s_no']; ?>" id="id" name="id"><input type="submit" class="btn btn-success" id="submit" value="View" ></form></td>
                 
          </td></tr>
             
            <?php
          }
          }
        }
        else
        {
          echo mysqli_error($con);
        }
        ?>
         </table>
            </div>
    </div>
</div>

<?php 
  }
include 'footer.php'; ?>
</div>
<div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content" id="data">
      
        
        
        
      </div>
    </div>

  </div>
  <script type="text/javascript">
    function myFunction()
    {
         // alert("hi")  ;
    var id = $('#search').val();
    var college = $('#college').val();
    //alert(id);
  // var id=document.getElementById("id").value;
   // AJAX request
   $.ajax({
    url: 'search.php',
    type: 'POST',
    data: {search:id,college:college},
    success: function(response){ 
      // Add response in Modal body
      $('#data').html(response);

      
    }
  });
          
    }

  </script>
<!-- <script type="text/javascript">
  $(document).ready(function(){

 $('#submit').click(function(){
   
   //var userid = $(this).data('id');
   var id=document.getElementById("id").value;
   // AJAX request
   $.ajax({
    url: 'alumni_details.php',
    type: 'POST',
    data: {id:id},
    success: function(response){ 
      // Add response in Modal body
      $('#data').html(response);

      // Display Modal
      $('#myModal1').modal("show");
    }
  });
 });
});
</script> -->
</body>
</html>
<?php
    }
    else
    {
      header("location:index.php");
    }
  ?>