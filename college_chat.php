<?php
  session_start();
  if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Chats</title>
  <!--<meta http-equiv="refresh" content="15" />-->
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
    .scrollable{
  
   height:10000px;
   overflow:scroll;
   
}
.container1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.container1 img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container1 img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
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
            <a class="nav-item nav-link " id="hl" href="alumni_feedback_form.php" >Feedbacks</a>
            <a class="nav-item nav-link " id="hl" href="chats.php" >Class Chats</a>
            <a class="nav-item nav-link " id="hl" href="depart_chat.php" >Department Chat</a>
            <a class="nav-item nav-link active" id="hl" href="college_chat.php" >College Chat</a>
            <a class="nav-item nav-link " id="hl" href="jobs_forum_alumni.php">Jobs Forum</a>
            <a class="nav-item nav-link " id="hl" href="logout.php">Logout</a>
            
        </div>


       
    </div>
</nav>
</div>
<div class="container">
<div class="card">
    <div class="card-body">
<div class="d-flex justify-content-center" style="padding-top: 0%;padding-bottom: 5%">
  <div class="card bg-light" >
    <div class="card-body" >
      <div class="scrollable" id="chat">
           
     </div>
   </div>
    <div class="card-body">
      <form  method="POST" id="frm" name="frm" autocomplete="off">
        <input type="hidden" name="id" value="<?php echo $_SESSION['sno']; ?>">
        <input type="hidden" name="college" value="<?php echo $_SESSION['acollege']; ?>">
        <input type="hidden" name="name" value="<?php echo $_SESSION['name']; ?>">
        <input type="hidden" name="year" value="<?php echo $_SESSION['year']; ?>">
        <input type="hidden" name="dept" value="<?php echo $_SESSION['dept']; ?>">
         <div class="form-group">
            <label for="comment">Enter Your Message:</label>
             <textarea class="form-control" rows="3" name="msg" id="msg"  required></textarea>
            </div>
            <div align="center"><b>Note:</b>No Emoji's are allowed.Only letters,numbers and special symbols are allowed.</div><br>
            <div class="form-group" style="text-align: center">
            <input type="submit" value="Submit" id="submit" name="submit" class="btn btn-primary">
          </div>
        </form>
    </div>
    <p align="center"><a href="college_classmates.php" style="text-decoration:none">Click here to view Your Group Members</a></p>
</div></div>
</div></div>
<form  method="POST" id="frm1" name="frm1" autocomplete="off">
        <input type="hidden" name="id" value="<?php echo $_SESSION['sno']; ?>">
        <input type="hidden" name="college" value="<?php echo $_SESSION['acollege']; ?>">
        <input type="hidden" name="name" value="<?php echo $_SESSION['name']; ?>">
        <input type="hidden" name="year" value="<?php echo $_SESSION['year']; ?>">
        <input type="hidden" name="dept" value="<?php echo $_SESSION['dept']; ?>">
        </form>

</div>
<?php include 'footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function() {
  //$(".scrollable").stop().animate({ scrollTop: $(".scrollable")[0].scrollHeight}, 1000);

       $("#chat").animate({ scrollTop: $('#chat').prop("scrollHeight")}, 1000);
      
});
    </script> 

<script type="text/javascript">
  $(document).ready(function(){

 $('#submit').click(function(){

   
   //var userid = $(this).data('id');
   //var id=document.getElementById("id").value;
   // AJAX request
   $.ajax({
    url: 'college_chat_app.php',
    type: 'POST',
    data: $('#frm').serialize(),
    success: function(response){ 
      // Add response in Modal body
    //   alert(response);

      // Display Modal
      
    }
  });
 });
});
</script>

<script>
    $(document).ready(function(){
        function getData(){
            
            $.ajax({
                type: 'POST',
                url: 'college_chat_hide.php',
                data: $('#frm1').serialize(),
                success: function(data){
                    $('#chat').html(data);
                }
            });
        }
        getData();
        setInterval(function () {
            getData(); 
        }, 1000);
        setInterval(function () {
             $("#chat").animate({ scrollTop: $('#chat').prop("scrollHeight")}, 1000); 
        }, 9500);// it will refresh your data every 1 sec
   
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