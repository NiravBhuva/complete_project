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
	include "connection.php";
?>


<div class="privacy about">
			<h3>Order<span>History</span></h3>
			
	      <div class="checkout-right">
				
		
<table class="timetable_sub">
<thead>
<th>Order_id</th>
<th>Username</th>
<th>Name</th>
<th>Quantity</th>
<th>Amount</th>
<th>Order Date</th>
<th>Delivery Address</th>

</thead>
<tbody>
<?php
$q="select * from order_master";
$c=mysqli_query($con,$q);
while($r=mysqli_fetch_array($c))
{
	?>
		
		<tr class="rem1">
		<td class="invert"><?php echo $r['Order_id']; ?></td>
		<td class="invert"><?php echo $r['Username']; ?></td>
		<td class="invert"><?php echo $r['Name']; ?></td>
		<td class="invert"><?php echo $r['Quantity']; ?></td>
		<td class="invert"><?php echo $r['Oamount']; ?></td>
		<td class="invert"><?php echo $r['Order_date']; ?></td>
		<td class="invert"><?php echo $r['Daddress']; ?></td>
		</tr>
<?php
}
?>
</tbody>
</table>
<div class="clearfix"></div>
</div>
</div>
</div>

<?php
	include"Footer.php";
?>