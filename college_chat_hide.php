<html>
    
<head>
    <!--<meta http-equiv="refresh" content="15" />-->
    <style>
    .scrollable{
  overflow-y: auto;
  max-height: 240px;
}

  </style>
</head>
</body>
<?php
              include 'db.php';
              //session_start();
//             $sno=$_POST['id'];
// 	$name=$_POST['name'];
	
	//$msg=$_POST['msg'];
	$year=$_POST['year'];
	$dept=$_POST['dept'];
              $sql="SELECT * FROM chat WHERE  group_type='C' ORDER BY order_no";
              if($res=mysqli_query($con,$sql))
              {
                  if(mysqli_num_rows($res)==0)
                  {
                      ?>
                      
                      <div class="container1" style="text-align:center">
                      No Chat History Found.<br>Start Your Conversation.
                      </div>
                      
                      <?php
                  }
                  else
                  {
                while($row=mysqli_fetch_array($res))
                {
                  ?>
                  
                  <div class="container1">
                  <p ><b><?php echo $row['name']."(".$row['department']."),(".$row['year_of_study'].")"; ?></b></p>
                  <p><?php echo $row['message']; ?></p>
                  <span class="time-right"><?php echo $row['time']; ?></span>
                  </div>
                 
                  <?php
                }
                  }
              }
              else
              {
                echo mysqli_error($con);
              }
           ?>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<!--<script>-->

<!--$(document).ready(function(){-->
<!--var $container = $("#content");-->
<!--        $container.load("rss-feed-data.php");-->
<!--        var refreshId = setInterval(function()-->
<!--        {-->
<!--            $container.load('rss-feed-data.php');-->
<!--        }, 9000);-->

<!--});-->

<!--</script>-->
</body>
</html>
       