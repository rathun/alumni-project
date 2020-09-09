<html>
<head>
  <title>Feedback</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">User Feedback</h4>
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form name="login" method="POST" action="user_feedback.php" autocomplete="off">
          <div class="input-group form-group">
            
            <input type="text" name="name" class="form-control" placeholder="Name" required>
            
          </div>
          <div>Student/Faculty:</div>
          <div class="input-group form-group">
                
                
                <select class="form-control" name="stu" reqiured>
                  <option>Student</option>
                  <option>Faculty</option>
                  <option>HOD</option>
                  </select>
            </div>
          <div >FeedBack:</div>
          <div class="input-group form-group">
            
            <textarea name="feedback" class="form-control"  required></textarea>
          </div>
          <div class="form-group" style="text-align: center">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
          </div>
        </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
        </div>
        
      </div>
    </div>
  </div>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
</body>
</html>
