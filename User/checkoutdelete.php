
<?php
$id=$_REQUEST['id'];

	include "Connection.php";	

	$q="DELETE FROM cart_info where Cart_id='$id'";
	$c=mysqli_query($con,$q);
	?>
<script>
	window.location="checkout.php";
</script>