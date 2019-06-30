<?php
include("db.php");
include("front.php");



?>


<div class="panel panel-default">

	
	<div class="panel panel-heading">
		<h2>
			<a class="btn btn-success" href="submit.php">Add student</a>
			<a class="btn btn-info pull-right" href="index.php"> Back </a>
		</h2>
	
		<div class="panel panel-body">
			<form action="index.php" method="Post">
					<table class="table table-striped">
						<tr>
							<th>Serial Number</th>  <th>Dates</th>  <th>Show Attendence</th>
						</tr>
						</tr>
					
					
						<?php $result=mysqli_query($con,"select distinct date from attendence_rcrd");
						$serialnumber=0;
						while($row=mysqli_fetch_array($result))
						{
							$serialnumber++;
						?>
					
	
								<tr>
										<td> 
											<?php echo $serialnumber; ?> 
										</td>
										<td> 
											<?php echo $row['date']; ?>
										</td>
										<td>
										<form action="show_attendence.php">
										<input type "hidden"  value="<?php echo $row['date']  ?>" name="date">
										<input type="submit" name="submit" value="Show Attendence" class="btn btn-primary">
									    </td>
								</tr>
					
								<?php 
								
								}
								
								?>

	
					</table>
					
			</form>
		</div>
	</div>	
</div>	
	