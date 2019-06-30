<?php
$con=mysqli_connect("localhost","root","","toursandtravels");
include("registerhtml.html");
$flag=0;

	if(isset($_POST['submit']))
	{
		
		foreach($_POST['Email'] as $id=>$Email)
		{
		  $Username = $_POST['Username'][$id];
		  $Password = $_POST['Password'][$id];
		  $result=mysqli_query($con,"insert into registrationdb(Username,Contact,Email,City,Password,date)values('$Username,'$Contact','$Email','$City','$Password','$date')");
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
			<a class="btn btn-success" href="submit.php">Edit</a>
			<a class="btn btn-info pull-right" href="view_all.php"> view All </a>
		</h2>
		<?php if($flag) { ?>
		<div class="alert alert-success">
		 Insert Successfully
		</div>
		<?php  }  ?>
		
		<H3><div class="well text-center">Date:<?php echo date("d/m/y");  ?>  </div></H3>
	
		<div class="panel panel-body">
			<form action="index.php" method="Post">
					<table class="table table-striped">
						<tr>
							<th>#serial_number</th><th>Username</th><th>Contact</th><th>Email</th><th>Address</th><th>City</th><th>Password</th>
						</tr>
					
						
						<?php $result=mysqli_query($con,"select * from registrationdb");
						$serialnumber=0;
						while($row=mysqli_fetch_array($result))
						{	$counter=0;
							$serialnumber++;
						?>
					
	
								<tr>
									<td> <?php echo $serialnumber; ?> </td>
									<td> <?php echo $row['Username']; ?>
									<input type="hidden" value="<?php echo $row['Username']; ?>" name="Username[]">	
									</td>
									<td> <?php echo $row['Contact']; ?> 
									<input type="hidden" value="<?php echo $row['Contact']; ?>" name="Contact[]">	
									</td>
									<td> <?php echo $row['Email']; ?>
									<input type="hidden" value="<?php echo $row['Email']; ?>" name="Email[]">	
									</td>
									<td> <?php echo $row['Address']; ?>
									<input type="hidden" value="<?php echo $row['Address']; ?>" name="Address[]">	
									</td>
									<td> <?php echo $row['City']; ?>
									<input type="hidden" value="<?php echo $row['City']; ?>" name="City[]">	
									</td>
									<td> <?php echo $row['Password']; ?>
									<input type="hidden" value="<?php echo $row['Password']; ?>" name="Password[]">	
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
	