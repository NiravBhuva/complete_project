<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		?>
		<script>
			alert('You have to login first');
			window.location="login.php";
		</script>
		<?php
	}
	unset($_SESSION['user']);
	unset($_SESSION['name']);
	unset($_SESSION['User_id']);
	?>
	<script>
			
			window.location="login.php";
		</script>