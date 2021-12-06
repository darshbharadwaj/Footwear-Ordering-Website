<!DOCTYPE HTML>
<html>
	<head>
	<script type="text/javascript" src="log-reg_validate.js"></script>
	<script type="text/javascript" src="log_validate.js"></script>
	<style>
	.center{
		text-align:center;
	}
	</style>
	<?php
	include("head.php");
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
        <body>
        <div class="container">
        <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Login</h5>
          <form name="log" method="POST" action="login.php">
               <div class="col s6">
            <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input type="text" class="form-control" name="email1" id="email1" placeholder="Enter EMAIL">
						<div class="row container" id="eerDivuname1" style="color: red"></div>
            </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password1" id="password1" placeholder="Password">
						<div class="row container" id="eerDivpassword1" style="color: red"></div>
                    </div>
            <div align="center">
                        <button type="submit" onclick="validate2(event)" class="btn btn-primary">LOGIN</button>
            </div>
        </div>
                </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Registration</h5>
							<form name="reg" method="POST" action="insert_reg.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">First Name</label>
											<input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
											<div class="row container" id="eerDivf" style="color: red"></div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="lname">Last Name</label>
											<input type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname">
											<div class="row container" id="eerDiv" style="color: red"></div>
										</div>
									</div>
								
                                    <div class="w-100"></div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
											<div class="row container" id="eerDivEmail" style="color: red"></div> 
										</div>
									</div>

									 <div class="col-md-6">
										<div class="form-group">
											<label for="Mobile">Mobile</label>
											<input type="text" name="mobile" id="mobile" minlength="10" maxlength="10" onkeypress="return restrictAlphabets(event)" class="form-control" placeholder="Your Mobile number">
											<div class="row container" id="eerDivmob" style="color: red"></div> 
										</div>
									</div> 

									<div class="w-100"></div>
                                    <div class="col-md-12">
										<div class="form-group">
											<label for="Uname">Username</label>
											<input type="text" name="Uname" id="Uname" class="form-control" placeholder="Your Username">
											<div class="row container" id="eerDivuname" style="color: red"></div>
										</div>
									</div> 

				
									<div class="col-md-6">
                                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        <div class="row container" id="eerDivpass" style="color: red"></div>
                    </div>
					</div>
                    
					<div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm password</label>
                        <input type="password" class="form-control" name="conpassword" id="conpassword" placeholder="Confirm password">
                        <div class="row container" id="eerDivcpass" style="color: red"></div>
                    </div>
					</div>
					<div class="row container" id="eerDivpassv" style="color: red"></div>
	    			<div  class="col-md-12 center">
                        <button type="submit" onclick="validate1(event)" class="btn btn-primary">Submit</button>
                    </div>
				</form>		
      </div>
    </div>
  </div>
</div>
</div>
</div>
        </body>
       <?php
		include("footer.php");
		?>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<?php
		include("footer_links.php");
	?>

	</body>
</html>