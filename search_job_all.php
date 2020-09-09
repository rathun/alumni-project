<p align="center"><h3><i>JOB FORUM</i></h3></p>
<?php
        include 'db.php';
        $search=$_POST['search'];
        $sql="SELECT * FROM job_forum WHERE view='All' AND (last_date LIKE '%$search%'  OR company_name LIKE '%$search%' OR job_title LIKE '%$search%' OR salary LIKE '%$search%' OR location LIKE '%$search%') ORDER BY last_date";
        if($res=mysqli_query($con,$sql))
        {
            if(mysqli_num_rows($res)==0)
            {
                ?><p align="center">Sorry No Records Found.</p><?php
            }
            else
            {
            while($row=mysqli_fetch_array($res))
            {
                ?>
                
    <div class="d-flex justify-content-center" style="padding-top: 0%;padding-bottom: 5%">
  <div class="card bg-light" >
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr><td><b>Company Name:</b></td><td><?php echo $row['company_name']; ?></td>
                <td><b>Job Title:</b></td><td><?php echo $row['job_title']; ?></td></tr>
                <tr><td><b>Salary:</b></td><td><?php echo $row['salary']; ?></td>
                <td><b>Location:</b></td><td><?php echo $row['location']; ?></td></tr>
                <tr><td><b>Description:</b></td><td><?php echo $row['description']; ?></td>
                <td><b>Email Id:</b></td><td><?php echo $row['email']; ?></td></tr>
                <tr><td colspan="2"><b>Last Date to Apply:</b></td><td colspan="2" style="color:red"><?php echo $row['last_date']; ?></td></tr>
            </table>
            </div>
        </div>
        </div>
        </div><?php
            }
            }
        }
     
     
     ?>