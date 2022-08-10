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
include "Header.php";
?>
	<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Feedback</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Reply Feedback :</h4>
						</div>
						<div class="form-body">
							<form> <div class="form-group"> <label for="exampleInputEmail1">Email address</label> 
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> </div> 
							<div class="form-group"> <label for="exampleInputPassword1">Message</label> <input type="text" class="form-control" placeholder="Message"> </div> 
							 
							 
							
							<button type="submit" class="btn btn-default">Send</button> </form> 
						</div>
					</div>
				
								
							</div>
						</div>
					</div>
			
	
<?php
include"Footer.php";
?>