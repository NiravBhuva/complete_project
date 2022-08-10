	
<?php
session_start();
if(!isset($_SESSION['user']))
	{
	
		header("location:login.php");
	}
	include "Header.php";
	include "Connection.php";
	if (isset($_POST['btnok']))
	{
		$Name=$_POST['name'];
		$Quantity=$_POST['Quantity'];
		$address=$_POST['addtxt'];
		$NetAmount=$_POST['oamount'];
		$username='Yash';
		
		$dt=date("d-m-Y");
		
		$qq="Insert into order_master values('','$username','$Name','$Quantity','$NetAmount','$dt','$address')";
		$c=mysqli_query($con,$qq);
		if($c)
		{
			$order_master_id = $con->insert_id;
			$un=$_SESSION['Name'];
		
			$q="SELECT * FROM cart_info where Username='$un'";
			$cc=mysqli_query($con,$q);
			while($r=mysqli_fetch_array($cc))
			{		 
						
						$card_id=$r['Card_id'];
						$logo=$r['Logo'];
						$name=$r['Name']; 
						$contact=$r['Contact'];
						$email=$r['Email'];
						$company=$r['Company'];
						$address=$r['Address'];
						$Quantity=$r['Quantity'];
						$price=$r['Price'];
						$total=$Quantity * $price;
						$q1="INSERT into order_item_detail values ('','$card_id','$order_master_id','$name','$company','$logo','$email','$contact','$Quantity','$price','$total','$address')";
						mysqli_query($con,$q1);
								
			}
			$q2="delete from cart_info where Name='$name'";
			mysqli_query($con,$q2);
		?>
		<script>1		
			alert('Your order had been placed successfully');
			window.location="index.php";
		</script>
		<?php
			
		}
		else
		{
			?>
		<script>
			alert('Something Goes Wrong');
			
		</script>
		<?php
			
		}
		
		
	}
?>		
<!-- about -->
		<div class="privacy about">
			<h3>My<span>Shopping</span></h3>
			
	      <div class="checkout-right">
					
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Cart id</th>
							<th>Card id</th>
							
							<th>Logo</th>
							<th>Name</th>
							<th>Contact</th>
							<th>Email</th>
							<th>Company Name</th>
							<th>Address</th>
							<th>Quantity</th>		
							<th>Price</th>
							<th>Total</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody>
							
<?php
	$sum=0;
	$quantity=0;
	$counter=0;
	
	$un='Yash Butani';
	$query="SELECT * FROM cart_info  where Name='$un'" ;
$c=mysqli_query($con,$query);
while($r=mysqli_fetch_array($c))
{

	$quantity=$quantity+$r['Quantity'];

$counter=$r['Price'];
	 $Total=$r['Price']*$r['Quantity'];

	
	?>	
					<tr class="rem1">
						<td class="invert"><?php echo $r['Cart_id'];?></td>
						<td class="invert"><?php echo $r['Card_id'];?></td>
						
						<td class="invert-image"><img src="upload/<?php echo $r['Logo'];?>" class="img-responsive" height="100px" width="100px"/></td>
						<td class="invert"><?php echo $r['Name'];?></td>	 
						<td class="invert"><?php echo $r['Contact'];?></td>
						<td class="invert"><?php echo $r['Email'];?></td>
						<td class="invert"><?php echo $r['Company'];?></td>
						<td class="invert"><?php echo $r['Address'];?></td>
						<td class="invert"><?php echo $r['Quantity'];?></td>
						<td class="invert"><?php echo $r['Price'];?></td>
						<td class="invert"><?php echo $Total;?></td>
						<?php $counter=$counter;?>
						<?php $sum=$sum+$Total;?>
						<td class="invert"><a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this record'); 
			"href="checkoutdelete.php?id=<?php echo $r['Cart_id'];?>" onclick="return checkdelete()"><i style="font-size:20px; color:red" class="fa fa-trash-o" aria-hidden="true"></i></a>
					
					</tr>
					
					<?php 	

}

?>					
</tbody></table>
			</div>
			
			
			<div style="margin-left:900px">
					<a href="index.php">
					
					<h4 style="border-style:ridge;background-color:#437C17;color:#FFFFFF;text-align:center;margin-top:50px;padding-top:5px;padding-bottom:5px;">Continue to basket</h4></a>
					
					<div style="border-style:inset;background-color:#E3E4FA;color:#000080;text-align:center;margin-top:30px;padding-top:5px;padding-bottom:5px;margin-left:0px;">
						
						<strong>NetAmount: <?php echo $sum;?></strong>
					
					</div>
				</div>
				
<div class="checkout-left">	
	<br><br>
		<div class="col-md-9 address_form_agile">
					  <h4>Add a new Details</h4>
				<form action="#" method="post" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Full name: </label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
												</div>
												
												<div class="controls">
													<label class="control-label">Address: </label>
												 <input class="form-control" name="addtxt" type="text" placeholder="Address">
												</div>
												
												<div class="controls">
													<label class="control-label"> </label>
												 <input class="hidden" name="Quantity" type="hidden" value="<?php echo $quantity;?>">
												</div>
												
												<div class="controls">
													<label class="control-label"> </label>
												 <input class="hidden" name="oamount" type="hidden" value="<?php echo $sum;?>">
												</div>
													
											</div>
											<button class="submit check_out" name="btnok">Place Order</button>
										</div>
									</section>
								</form>
					</div>
					

			
				<div class="clearfix"> </div>
				
			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->


<?php
include "Footer.php";
?>
