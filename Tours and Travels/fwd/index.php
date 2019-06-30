<?php
include("db.php");
include("front.php");
$flag=0;

	if(isset($_POST['submit']))
	{
		
		foreach($_POST['attendence_status'] as $id=>$attendence_status)
		{
		  $student_name = $_POST['student_name'][$id];
		  $roll_number = $_POST['roll_number'][$id];
		  $result=mysqli_query($con,"insert into attendence_rcrd(student_name,roll_number,attendence_status,date)values('$student_name','$roll_number','$attendence_status','$date')");
           if($result)
				{
				 $flag=1;
				}
	
		}
			
	}
		  
		  ?>


<div class="panel panel-default">			

	
	<div class="panel panel-heading">
		<h2>
			<a class="btn btn-success" href="submit.php">Add student</a>
			<a class="btn btn-info pull-right" href="view_all.php"> view All </a>
		</h2>
		<?php if($flag) { ?>
		<div class="alert alert-success">
		Attendence Date Insert Successfully
		</div>
		<?php  }  ?>
		
		<H3><div class="well text-center">Date:<?php echo date("d/m/y");  ?>  </div></H3>
	
		<div class="panel panel-body">
			<form action="index.php" method="Post">
					<table class="table table-striped">
						<tr>
							<th>#serial_number</th><th>student_name</th><th>roll_number</th><th>attendence_status</th>
						</tr>
					
						
						<?php $result=mysqli_query($con,"select * from attendence");
						$serialnumber=0;
						while($row=mysqli_fetch_array($result))
						{	$counter=0;
							$serialnumber++;
						?>
					
	
								<tr>
									<td> <?php echo $serialnumber; ?> </td>
									<td> <?php echo $row['student_name']; ?>
									<input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]">	
									</td>
									<td> <?php echo $row['roll_number']; ?> 
									<input type="hidden" value="<?php echo $row['roll_number']; ?>" name="roll_number[]">	
									</td>
									<td> 
									<input type="radio" name="button" value="Present" <?php if(isset($_POST['button']) == 'present')  echo ' checked="checked"';?> />present
									<input type="radio" name="button" value="Absent" <?php if(isset($_POST['button']) == 'absent')  echo ' checked="checked"';?> />absent
									</td>
								</tr>
					
								<?php 
								$counter++;
								}
								
								?>

	
					</table>
					
					<p align= "right">
						<input type="submit" name="submit" value="submit" class="btn btn-primary">
					</p>
			</form>
		</div>
	</div>	
</div>	
	