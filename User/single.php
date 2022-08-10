<?php
session_start();
if(!isset($_SESSION['user']))
	{
	
		?>
		<script>
			alert('You have to login first');
			window.location="login.php";
		</script><?php
	}	

	include "Header.php";
?>


			<div class="agileinfo_single">
			<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","project_db");
$query="SELECT * FROM card_info where Card_id='$id'";
$c=mysqli_query($con,$query);
while($r=mysqli_fetch_array($c))
{
	?>
				
<?php

	if(isset($_POST['submit']))
	{
		
		$id=$_REQUEST['id'];
		$Name=$_POST['name'];
		$Company=$_POST['company'];
		$filename=$_FILES['image']['name'];
		$Email=$_POST['email'];
		$Contact=$_POST['contact'];
		$Address=$_POST['address'];
		$quantity=$_POST['quantity'];
		$Price=$_POST['price'];
		$Total=$_POST['amount'];
		$NetAmount=$_POST['netamount'];
		$con= mysqli_connect("localhost","root","","project_db");
		$q= "INSERT INTO cart_info values('','$id','$Name','$Company','$filename','$Email','$Contact','$Address','$quantity','$Price','$Total','$NetAmount')";
		$qq= "INSERT INTO order_item_detail values('','$id','$Name','$Company','$filename','$Email','$Contact','$Address','$quantity','$Price','$Total',''$NetAmount')";
		$c=mysqli_query($con,$q);
		if ($c)
	 	{ 
	 		move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$filename);
	 	echo "<script> window.location ='checkout.php';</script>"; 
	 	} 
 	 	
	  	else
	    {	    	
			
				echo "<script>alert('Some Error Occured, Please try again...')</script>"; 
 		} 
	}
		
	
	
?>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="../web/upload/<?php echo $r['Image'];?>" data-imagezoom="true" height="300" width="500"  class="img-responsive"/> 
				</div>
				<div class="col-md-8 agileinfo_single_right">
					
					<div class="w3agile_description">
						<h1><?php echo $r['Name'];?></h1>
						<h4>RS.  <?php echo $r['Price'];?></h4>
					</div>
					
					<div class="snipcart-item block">
						  <div class="form-body">
							<form action="#" method="POST" enctype="multipart/form-data" >

						
							<div class="form-group"> <label for="exampleInputEmail1">Name</label>
							<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name"> </div>

							<div class="form-group"> <label for="exampleInputEmail1">Company</label>
							<input type="text" name="company" class="form-control" id="exampleInputEmail1" placeholder="Company name"> </div>

							<div class="form-group"> <label for="exampleInputFile">Logo</label>
							<input type="file" name="image" id="exampleInputFile">  </div>


							<div class="form-group"> <label for="exampleInputEmail1">Email</label>
							<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> </div>
							
							<div class="form-group"> <label for="exampleInputEmail1">Contact no.</label>
							<input type="number" name="contact" class="form-control" id="exampleInputEmail1" placeholder="Contact"> </div>
				
							<div class="form-group"> <label for="exampleInputEmail1">Address</label>
							<input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Address"> </div>
							
							<div class="form-group"> <label for="exampleInputEmail1">Quantity</label>
							<input type="number" name="quantity" class="form-control" id="exampleInputEmail1" placeholder="Quantity"> </div>
							
							
							<?php
							$id=$_REQUEST['id'];
								$con=mysqli_connect("localhost","root","","project_db");
								$query="SELECT * FROM card_info where Card_id='$id'";
								$c=mysqli_query($con,$query);
								while($r=mysqli_fetch_array($c))
								{
									?>
							 <input type="hidden" name="price" value="<?php echo $r['Price'];?>">
												<?php
											}
											
											?>
					
							<?php
							$id=$_REQUEST['id'];
								$con=mysqli_connect("localhost","root","","project_db");
								$query="SELECT * FROM card_info where Card_id='$id'";
								$c=mysqli_query($con,$query);
								while($r=mysqli_fetch_array($c))
								{
									?>
							 <input type="hidden" name="amount" value="<?php echo $r['Price'];?>">
												<?php
											}
											
											?>
											
							<?php
							$id=$_REQUEST['id'];
								$con=mysqli_connect("localhost","root","","project_db");
								$query="SELECT * FROM card_info where Card_id='$id'";
								$c=mysqli_query($con,$query);
								while($r=mysqli_fetch_array($c))
								{
									?>
							 <input type="hidden" name="discount" value="<?php echo $r['Price'];?>">
												<?php
											}
											
											?>
											
							<?php
							$id=$_REQUEST['id'];
								$con=mysqli_connect("localhost","root","","project_db");
								$query="SELECT * FROM card_info where Card_id='$id'";
								$c=mysqli_query($con,$query);
								while($r=mysqli_fetch_array($c))
								{
									?>
							 <input type="hidden" name="netamount" value="<?php echo $r['Price'];?>">
												<?php
											}
											
											?>
						<input type="submit" name="submit" value="Add to cart"  />
								
							</form>
						</div>
					</div>
				</div>
<?php
}
?>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	
	
	

<!-- //banner -->
<?php
	include "Footer.php";
?>
