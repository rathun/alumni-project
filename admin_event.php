<?php
	session_start();
	if(isset($_SESSION['akey']) && $_SESSION['akey']==1)
    {
	include 'db.php';
	include 'phpqrcode/phpqrcode/qrlib.php';
	$college=$_SESSION['college'];
	//$year=$_SESSION['year'];
	
	
	$venue=$_POST['venue'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$oname=$_POST['oname'];
	$omobile=$_POST['omobile'];
	$oemail=$_POST['oemail'];
	$filetmp=$_FILES["poster"]["tmp_name"];
    $filepath="Poster/".$college.$date.".jpg";
	move_uploaded_file($filetmp,$filepath);
	$sql="INSERT INTO `event`( `poster`, `date`,`time`,`venue`,`organiser_name`,`organiser_mobile`,`organiser_email`) VALUES ('$filepath','$date','$time','$venue','$oname','$omobile','$oemail')";
	if(mysqli_query($con,$sql))
	{
	    $s="SELECT * FROM user WHERE college_name='$college' ";
        $res=mysqli_query($con,$s);
	   while($row=mysqli_fetch_array($res))
	   {
	        
            $id="Name:".$row['name']."/College Name:".$row['college_name']."/Event Date & Time:".$date." ".$time;
            $tid=$row['s_no'];
            $email=$row['email'];
            //echo $email;
            $file_name="Pass/".$tid.$date.".png";
            $name=$row['name'];
            QRcode::png($id,$file_name);
	            $to = $email;
        $subject = "Alumni Meet";
         $message = "Hi $name,<br>Your College has arranged for Alumni Meet on $date $time<br>Click here to download your Entry Pass:<a href=\"http://projectsit2020.000webhostapp.com/Alumni2020/$file_name\" download>Entry Pass</a> ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <hypertexttechies2020@gmail.com>' . "\r\n";
         mail($to,$subject,$message,$headers);
         
	   }
	   
		?><script type="text/javascript">
			alert("Event Published Successfully.");
			location.replace("admin_event_form.php");

		</script><?php
	}
	else
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);
    }
    else
    {
        header("location:login.php");
    }
?>