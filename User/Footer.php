<div class="clearfix"></div>
</div>

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="events.php">Personal Information</a></li>
					<li><a href="Feedback.php">Contact Us</a></li>
					<li><a href="OrderHistory.php">Order History</a></li>
					<li><a href="index.php">Services</a></li>
					<li><a href="About.php">About Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Categories</h3>
				<?php
						include "Connection.php";	
						$query="SELECT * FROM cat_info";
						$c=mysqli_query($con,$query);
						while($r=mysqli_fetch_array($c))
						{
						  ?>		
				<ul class="w3_footer_grid_list">
					<li><a class="color4" href="Card.php?id=<?php echo $r['Cat_id'];?>"><?php echo $r['Cat_name'];?></a></li>
				</ul>
			<?php
				}
			?>	
			</div>
			
			<div class="col-md-3 w3_footer_grid">
				<h3>Shop By Industry</h3>
				<?php
				include "connection.php";
				$query="SELECT * FROM industry_info";
				$c=mysqli_query($con,$query);
				while($r=mysqli_fetch_array($c))
				{
				  ?>		
				
				<ul class="w3_footer_grid_list">
					<li><a class="color4" href="ViewIndustry.php?id=<?php echo $r['Industry_id'];?>"><?php echo $r['Industry_name'];?></a></li>
				</ul>
					
				<?php
				   }
				?>
				
			</div>
			
			
			<div class="col-md-3 w3_footer_grid">
				<h3>E-Card Features</h3>
				<ul class="w3_footer_grid_list">
					
						<li><a href="about.php">FAST & FREE DELIVERY</a></li>
						<li><a href="about.php">SAFE & SECURE PAYMENTS</a></li>
						<li><a href="about.php">100% MONEY BACK GUARANTEE</a></li>
						<li><a href="about.php">BEST VISITING CARD PRINTING</a></li>
							
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<div class="wthree_footer_copy">
				<p>&copy; 2021 E-Card Creation All Rights Reserved <br>
				Developed at <a href="/">Gec-Modasa </a> </p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>