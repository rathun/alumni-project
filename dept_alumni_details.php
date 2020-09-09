<style type="text/css">
	.table th,td
	{
		text-align: center;
	}
	
</style>
<table class="table table-bordered" width="80%" align="center">
	<tr><th>S.No</th><th>Name</th><th>Linked In URL</th></tr>
<?php
	include 'db.php';
	$dept=$_POST['dept'];
	$batch=$_POST['batch'];

	$i=1;
	$sql="SELECT * FROM user WHERE department='$dept' AND year_of_study='$batch'";
	if($res=mysqli_query($con,$sql) )
	{
		if(mysqli_num_rows($res)!=0)
		{
		while($row=mysqli_fetch_array($res))
		{
			?><tr><td><?php echo $i; ?></td><td><?php echo $row['department']; ?></td><td><a href="<?php echo $row['linkedinurl']; ?>"><?php echo $row['linkedinurl']; ?></a></td></tr><?php
			$i++;
		}
		}
		else
		{
			?><tr><td colspan="3">Sorry No Records Found</td></tr><?php 
		}
	}
	else
	{
		echo mysqli_error($con);
	}
	?>
</table>