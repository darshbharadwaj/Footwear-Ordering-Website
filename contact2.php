<!DOCTYPE HTML>
<html>
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

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
							</div>
						</div>
					</div>
				</div>
				<?php
                        
                // $to = $_POST["email"];
                // $subject = $_POST["subject"];
                // $txt = $_POST["message"];
            	// mail($to,$subject,$txt);
                
                // if(isset($_POST["sendmail"])){
				// 	if(mail($to, $subject,$txt)){
				// 		echo "MAIL send";
				// 	}else{
				// 			echo "Failed";
				// 		 }
				// 	}
				?>
				<div class="row">
					<div class="col-md-6">
						<div class="contact-wrap">
							<h3>Get In Touch</h3>
							<form name="contact-form" method="POST">
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
								
									<!-- <div class="col-md-12">
										<div class="form-group">
											<label for="Uname">Username</label>
											<input type="text" name="Uname" id="Uname" class="form-control" placeholder="Your Username">
											<div class="row container" id="eerDivuname" style="color: red"></div>
										</div>
									</div> -->

									<!-- <div class="col-md-12">
										<div class="form-group">
											<label for="Mobile">Mobile</label>
											<input type="text" name="mobile" id="mobile" minlength="10" maxlength="10" onkeypress="return restrictAlphabets(event)" class="form-control" placeholder="Your Mobile number">
											<div class="row container" id="eerDivmob" style="color: red"></div> 
										</div>
									</div> -->

									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
											<div class="row container" id="eerDivEmail" style="color: red"></div> 
										</div>
									</div>

									<!-- <div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="Address">Address</label>
											<textarea name="address" id="address" cols="20" rows="5" class="form-control" placeholder="Your address"></textarea>
											<div class="row container" id="eerDivadd" style="color: red"></div> 
										</div>
									</div> -->

									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject">
											<div class="row container" id="eerDivsub" style="color: red"></div> 
										</div>
									</div>

									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="message">Message</label>
											<textarea name="message" name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
											<div class="row container" id="eerDivmess" style="color: red"></div> 
										</div>
									</div>

									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" name="sendmail" onclick="validate1(event)" value="Send Message" class="btn btn-primary">
										</div>
									</div>
								</div>
							</form>		
						</div>
					</div>
					<div class="col-md-6">
						<div id="map" class="colorlib-map"></div>		
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
	include("footer_links.php")	;
	?>

	<script>
function validate1(e)
{
    let fname = document.forms["contact-form"]["fname"];
	let lname = document.forms["contact-form"]["lname"];
	// let uname = document.forms["contact-form"]["Uname"];
    let email = document.forms["contact-form"]["email"];
    // let phone = document.forms["contact-form"]["mobile"];
    let sub = document.forms["contact-form"]["subject"];
    // let add = document.forms["contact-form"]["address"];
	let mess = document.forms["contact-form"]["message"];
	let errMsg = "";
	let errMsgf = "";
	// let errMsguname = "";
	let errMsgemail = "";
	// let errMsgphone = "";
	let errMsgsub = "";
	// let errMsgadd = "";
	let errMsgmess = "";
    
    if (fname.value.trim() === "") {
        errMsgf = errMsgf +"<br>Please enter your first name.";
    }
	if (lname.value.trim() === "") {
        errMsg = errMsg +"<br>Please enter your last name.";
    }
	// if (uname.value.trim() === "") {
    //     errMsguname = errMsguname +"<br>Please enter your user name.";
    // }
    if (email.value.trim() === "" && email.value.trim().indexOf("@", 0) < 0 && email.value.trim().indexOf(".", 0) < 0) {
        errMsgemail = errMsgemail +"<br>Please enter a valid e-mail address.";
    }
    // if (phone.value.trim() === "") {
    //     errMsgphone = errMsgphone +"<br>Please enter your mobile number.";
    // }

    if(sub.value.trim() === ""){
        errMsgsub = errMsgsub +"<br>Please enter subject";
    }
    // if(add.value.trim() === ""){
    //     errMsgadd = errMsgadd +"<br>Please enter address";
    // }
	if(mess.value.trim() === ""){
        errMsgmess = errMsgmess +"<br>Please enter a message";
    }
    
    if(errMsgf !== ""){
        document.getElementById("eerDivf").innerHTML = errMsgf;
        e.preventDefault();
	}
	 if(errMsg !== ""){
        document.getElementById("eerDiv").innerHTML = errMsg;
        e.preventDefault();
	}
	// if(errMsguname !== ""){
    //     document.getElementById("eerDivuname").innerHTML = errMsguname;
    //     e.preventDefault();
	// }
	 if(errMsgemail !== ""){
        document.getElementById("eerDivEmail").innerHTML = errMsgemail;
        e.preventDefault();
	}
	//  if(errMsgphone !== ""){
    //     document.getElementById("eerDivmob").innerHTML = errMsgphone;
    //     e.preventDefault();
	// }
	 if(errMsgsub !== ""){
        document.getElementById("eerDivsub").innerHTML = errMsgsub;
        e.preventDefault();
	}
	//  if(errMsgadd !== ""){
    //     document.getElementById("eerDivadd").innerHTML = errMsgadd;
    //     e.preventDefault();
	// }
	 if(errMsgmess !== ""){
        document.getElementById("eerDivmess").innerHTML = errMsgmess;
        e.preventDefault();
    }
}
function restrictAlphabets(e) {
    var x = e.which || e.keycode;
    if ((x >= 48 && x <= 57) || x == 8 || (x >= 35 && x <= 40) || x == 46)
        return true;
    else
        return false;
}
</script>

	</body>

</html>

