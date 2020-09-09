<!--<div class="table-responsive">-->
<!--              <table class="table table-bordered" id="t">-->
                 <!--<tr> <th>S.No</th><th>College Name</th><th>Date(YYYY-MM-DD)</th><th>Time(24 hrs)</th><th>Venue</th><th>Poster</th></tr>-->
     <?php
     include 'db.php';
     $id=$_POST['search'];
     $sql="SELECT * FROM event WHERE college_name LIKE '%$id%'";
      if($res=mysqli_query($con,$sql))
      {
          if(mysqli_num_rows($res)==0)
          {
            ?><tr><td colspan="6" ><center>Sorry!No Records Found.</center> </td></tr><?php
          }
          else
          {
        while($row=mysqli_fetch_array($res))
        {
          ?><div class="card-deck">
    <div class="card ">
      <div class="card-body text-center">
      <a href="<?php echo $row['poster']; ?>" download><img src="<?php echo $row['poster']; ?>" width=100%></a>
      </div>
      </div>
      
    <div class="card ">
      <div class="card-body text-center">
      <div class="table-responsive"><table class="table table-bordered"><tr><td width=30% >College Name:</td><td width=70%><?php echo $row['college_name']; ?></td></tr><tr><td>Date(YYYY-MM-DD):</td><td><?php echo $row['date']; ?></td></tr><tr><td>Time(24 hrs):</td><td><?php echo $row['time']; ?></td></tr><tr><td>Venue:</td><td><?php echo $row['venue']; ?></td></tr><tr><td>Organiser Name:</td><td><?php echo $row['organiser_name']; ?></td></tr><tr><td>Organiser Mobile:</td><td><?php echo $row['organiser_mobile']; ?></td></tr><tr><td>Organiser  Email:</td><td><?php echo $row['organiser_email']; ?></td></tr></table>
      </div>
      </div>
      </div>
      </div><?php
        }
          }
      }
       else
      {
        echo mysqli_error($con);
      }
      

      ?>
  <!--  </table>-->
  <!--</div>-->