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
          <form name="log" method="POST" action="login_admin.php">
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
	</body>
    <?php
        include("footer.php");
        include("footer_links.php");
		?>
	<?php
		
	?>

</html>