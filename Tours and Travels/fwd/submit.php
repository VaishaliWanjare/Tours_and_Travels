<?php

include("front.php");
$con=mysqli_connect("localhost","root","","ams");
	$flag=0;
	
	if(isset($_POST['submit']))

	{
		
	$result=mysqli_query($con,"insert into attendence(student_name,roll_number)values('$_POST[name]','$_POST[roll]')");
	if($result)
	{
		$flag=1;
	}
	
	
	}
?>

<div class="panel panel-default">
			<?php if($flag) 
			{
			?>

			<div class="alert alert-success">
				<strong>!success</strong>attendence data successfully inserted;
			</div>
			<?php 
			}
			?>
	
			<div class="panel-heading">
				<h2>
					<a class="btn btn-success" href="submit.php"> Add student</a>	
					<a class="btn btn-info pull-right" href="index.php"> Back </a>
				</h2>

			</div>


			<div class="panel-body">
				<form action="submit.php" method="post">

						<div class="form-group">
							<label for="name">Student_Name </label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter Student Name" required>
						</div>
 
						<div class="form-group">
							<label for="roll">ROll_Number </label>
							<input type="text" name="roll" id="roll" class="form-control" placeholder="Enter Roll Number" required>
						</div>


						<div class="form-group">
							<input type="submit"  name="submit" value="submit" class="btn btn-primary" required>
						</div>
	
				</form>
			</div>
</div>