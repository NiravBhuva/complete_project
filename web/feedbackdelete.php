
<?php
$id=$_REQUEST['id'];

	include "Connection.php";

	$q="DELETE from Feedback_info where Feedback_id='$id'";
	$c=mysqli_query($con,$q);
	?>

				
			
		

	
<script>
	window.location="http://localhost/web/aFeedback.php";
</script>