<div class="table-responsive">
              <table class="table">
                 <tr> <th>S.No</th><th>Name</th><th>Department</th><th>Year Of Study</th><th>View</th></tr>
      <?php
        include 'db.php';
        //session_start();
        $id=$_POST['college'];
        $search=$_POST['search'];
        if($id!='D' && $search=='')
        {
          ?><script type="text/javascript">
             // alert("hi");
          </script>
          <?php
        $sql="SELECT * FROM user WHERE status='Approved' AND department='$id'";
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
            
                 <tr><td><?php echo $row['s_no']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $id; ?></td><td><?php echo $row['year_of_study']; ?></td><td><form id="frm" action="alumni_details.php" method="POST"><input type="hidden" value="<?php echo $row['s_no']; ?>" id="id" name="id"><input type="submit" class="btn btn-success" id="submit" value="View" ></form></td>
                 
          </td></tr>
             
            <?php
          }
          }
        }
        else
        {
          echo mysqli_error($con);
        }
      }
      
    
    else if($search=='' && $id=='D')
      {
          ?><script type="text/javascript">
             //alert("hi 2");
          </script>
          <?php
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
            
                 <tr><td><?php echo $row['s_no']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $id; ?></td><td><?php echo $row['year_of_study']; ?></td><td><form id="frm" action="alumni_details.php" method="POST"><input type="hidden" value="<?php echo $row['s_no']; ?>" id="id" name="id"><input type="submit" class="btn btn-success" id="submit" value="View" ></form></td>
                 
          </td></tr>
             
            <?php
          }
          }
      }
    }
    else if($search=='')
      {
          ?><script type="text/javascript">
            // alert("hi 3");
          </script>
          <?php
          $sql="SELECT * FROM user WHERE status='Approved' AND department='$id'";
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
            
                 <tr><td><?php echo $row['s_no']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $id; ?></td><td><?php echo $row['year_of_study']; ?></td><td><form id="frm" action="alumni_details.php" method="POST"><input type="hidden" value="<?php echo $row['s_no']; ?>" id="id" name="id"><input type="submit" class="btn btn-success" id="submit" value="View" ></form></td>
                 
          </td></tr>
             
            <?php
          }
          }
      }
    }
      else if($id!='D' && $search!='')
      {
          ?><script type="text/javascript">
             // alert("hi 1");
          </script> <?php
          
          $sql="SELECT * FROM user WHERE status='Approved' AND department='$id' AND (name LIKE '%$search%'   OR year_of_study LIKE '%$search%')";
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
      }
      
      else
      {
        ?><script type="text/javascript">
             // alert("hi else");
          </script>
          <?php
          $sql="SELECT * FROM user WHERE status='Approved' AND  department LIKE '%$search%' OR year_of_study LIKE '%$search%' OR name LIKE '%$search%'";
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
      }

        ?>
         </table>
      </div>      