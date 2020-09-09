<head>
  <title>Feedback</title>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
      th,td
      {
          text-align:center;
      }
  </style>
</head>
<div class="container">
<div style="text-align:center"><h1><i><b>Visiters Feedback</b></i></h1></div>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr><th>S.No</th><th>Name</th><th>Designation</th><th>Feedback</th></tr>
<?php
    include 'db.php';
    $sql="SELECT * FROM visiter_feedback";
    if($res=mysqli_query($con,$sql))
    {
        $i=0;
        while($row=mysqli_fetch_array($res))
        {
            ?><tr><td><?php echo $i; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['student_faculty']; ?></td><td><?php echo $row['feedback']; ?></td></tr><?php
            $i++;
        }
    }


?>
</table>
</div>
</div>
