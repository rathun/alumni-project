<?php
    session_start();
    if(isset($_SESSION['akey']) && $_SESSION['akey']==1)
    {
    include 'db.php';
   // $photo=$_POST['photo'];
   date_default_timezone_set("Asia/Kolkata");
    $date=date('d-m-Y');
   $college=$_SESSION['department'];
    $desc=$_POST['desc'];
    $filetmp=$_FILES["photo"]["tmp_name"];
    $filepath="Photo/".$college.$date.".jpg";
	move_uploaded_file($filetmp,$filepath);
	$sql="INSERT INTO photos ( `college_name`, `photo`, `description`) VALUES ('$college','$filepath','$desc')";
	if(mysqli_query($con,$sql))
	{
	    ?>
	    <script>
	        alert("Photo uploaded Successfully");
	        location.replace("upload_event_photos.php");
	        
	    </script>
	    <?php
	}
	else
	{
	    echo mysqli_error($con);
	}
	
    }
    else
    {
      header("location:index.php");
    }
  
    

?>