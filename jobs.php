<?php
  session_start();
  if(isset($_SESSION['key']) && $_SESSION['key']==1)
  {
      include 'db.php';
      $cname=$_POST['cname'];
      $jtitle=$_POST['jtitle'];
      $salary=$_POST['salary'];
      $location=$_POST['location'];
      $desc=$_POST['desc'];
      $mail=$_POST['mail'];
      $name=$_SESSION['name'];
      $sno=$_SESSION['sno'];
      $date=$_POST['date'];
      $share=$_POST['share'];
      $college=$_SESSION['acollege'];
      $sql="INSERT INTO `job_forum`(`sno`, `name`, `college_name`,`company_name`, `job_title`, `salary`, `location`, `description`, `email`, `last_date`, `view`) VALUES ('$sno','$name','$college','$cname','$jtitle','$salary','$location','$desc','$mail','$date','$share')";
      if(mysqli_query($con,$sql))
      {
          $s="SELECT * FROM user ";
        $res=mysqli_query($con,$s);
	   while($row=mysqli_fetch_array($res))
	   {
	        
            // $id="Name:".$row['name']."/College Name:".$row['college_name']."/Event Date & Time:".$date." ".$time;
            // $tid=$row['s_no'];
            $email=$row['email'];
            //echo $email;
            //$file_name="Pass/".$tid.$date.".png";
            $name=$row['name'];
            //QRcode::png($id,$file_name);
	            $to = $email;
        $subject = "Alumni Meet";
         $message = "Hi $name,<br>Your Friend has posted a job on $jtitle,Apply before $date<br>Click here for Further Details:<a href=\"http://projectsit2020.000webhostapp.com/Alumni2020/jobs_forum.php\">Visit</a> ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <hypertexttechies2020@gmail.com>' . "\r\n";
         mail($to,$subject,$message,$headers);
         
	   }
          ?>
          <script>
                alert("Posted Successfully");
                location.replace("jobs_forum_alumni.php");
          </script>
          <?php
      }
      else
      {
          echo mysqli_error($con);
      }
      mysqli_close($con);
      
  }
  else
  {
      header("location:index.php");
  }

?>