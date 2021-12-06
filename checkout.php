<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript" src="validate_checkout.js"></script>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
</head>
	<?php
	include("head.php")
	?>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php
		include("nav.php");
		?>
			<?php
		include("breadcrumbs.php");
		?>

			<div class="colorlib-product">
				</div>
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<form method="POST" name="check" action="TxnTest.php" class="colorlib-form">
				<div class="row">
					<div class="col-lg-8">
							<!-- <h2>Billing Details</h2> -->
		              	<div class="row">
			               <!-- <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="country">Select Country</label>
			                     <div class="form-field">
			                     	<i class="icon icon-arrow-down3"></i>
			                        <select name="people" id="people" class="form-control">
				                      	<option value="#">Select country</option>
				                        <option value="#">Alaska</option>
				                        <option value="#">China</option>
				                        <option value="#">Japan</option>
				                        <option value="#">Korea</option>
				                        <option value="#">Philippines</option>
			                        </select>
			                     </div>
			                  </div>
			               </div> -->

								<!-- <div class="col-md-6">
									<div class="form-group">
										<label for="fname">First Name</label>
										<input type="text" id="fname" class="form-control" placeholder="Your firstname">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lname">Last Name</label>
										<input type="text" id="lname" class="form-control" placeholder="Your lastname">
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Company Name</label>
			                    	<input type="text" id="companyname" class="form-control" placeholder="Company Name">
			                  </div>
			               </div> -->
							<div>
							<h3>Registered address's</h3>
							<?php
							 require("utils/conn.php");
							  $result=$conn->query("SELECT address from address where username ='" .  $_SESSION['username']. "'");
							if($result->num_rows > 0){
								while ($row= $result->fetch_assoc()){
									echo '<div class="row">';
									echo '<div class="col-md-12">';
									echo '<div class="form-group">';
									echo ' <input type="radio" name="address1" id="address1" value="' .$row["address"]. '"> ' . $row["address"] .'  <br>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
								}
							}
							?>
						<div class="row">
						<div class="col-md-12">
									<div class="form-group">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add address
</button>
						  </div>
						</div>
						<div class="collapse" id="collapseExample">
			               <div class="col-md-12">
									<div class="form-group">
										<label for="fname">Address</label>
										<textarea rows="4" cols="93" name="address" id="address" placeholder="Enter your address"></textarea>
									<div class="row container" id="eerDiv" style="color: red"></div>
			                    	</div>
			            </div>
						</div>
						</div>
						
			            </div>
			               <!-- <div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Town/City</label>
			                    	<input type="text" id="towncity" class="form-control" placeholder="Town or City">
			                  </div>
			               </div> -->
			            
								<!-- <div class="col-md-6">
									<div class="form-group">
										<label for="stateprovince">State/Province</label>
										<input type="text" id="fname" class="form-control" placeholder="State Province">
									</div>
								</div> -->
								<!-- <div class="col-md-6">
									<div class="form-group">
										<label for="lname">Zip/Postal Code</label>
										<input type="text" id="zippostalcode" class="form-control" placeholder="Zip / Postal">
									</div>
								</div> -->
							
								<!-- <div class="col-md-6">
									<div class="form-group">
										<label for="email">E-mail Address</label>
										<input type="text" id="email" class="form-control" placeholder="State Province">
									</div>
								</div> -->
								<!-- <div class="col-md-6">
									<div class="form-group">
										<label for="Phone">Phone Number</label>
										<input type="text" id="zippostalcode" class="form-control" placeholder="">
									</div>
								</div> -->

								<!-- <div class="col-md-12">
									<div class="form-group">
										<div class="radio">
										  <label><input type="radio" name="optradio"> Create an Account? </label>
										  <label><input type="radio" name="optradio"> Ship to different address</label>
										</div>
									</div>
								</div> -->
		               </div>
					</div>
				
					<div class="col-lg-4">
						<div class="row">
							<div class="col-md-12">
								<div class="cart-detail">
									<h2>Cart Total</h2>
									<ul>
										<li>
											<p><span>Subtotal:</span> <span><?php echo "RS." . $_SESSION["sum"];?></span></p>
											</li>
										<li><p><span>Delivery:</span> <span>Rs. 120</span></p></li>
										<li>
										<p> <span><strong>Total:</strong></span> <span><?php echo "Rs. " .$_SESSION["fulltotal"];?></span></p>
										</li>
									</ul>
								</div>
						   </div>

						   <div class="w-100"></div>

						   <div class="col-md-12">
								<div class="cart-detail">
									<h2>Payment Method</h2>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio"> Cash on delivery</label>
											</div>
										</div>
									</div>
									<!-- <div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value=""> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<p> <button type="submit"  onclick="location.href = 'www.youtube.com';" class="btn btn-primary" >>Place an order</button></p>
							</div>
						</div>
				</form>
						<form action="TxnTest.php" method="POST" name="valid1" class="colorlib-form">

						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<textarea rows="4" cols="62" name="address" id="address" placeholder="Enter your address" require></textarea>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Add address</button>
								</div>
								</div>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php
		include("footer.php");
		?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<?php
	include("footer_links.php");
	?>
	</body>
</html>

