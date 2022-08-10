
<?php
$id=$_REQUEST['id'];

	$con=mysqli_connect("localhost","root","","project_db");

	$q="DELETE from cat_info where Cat_id='$id'";
	$c=mysqli_query($con,$q);
	?>
<script>
	window.location="category.php";
</script>