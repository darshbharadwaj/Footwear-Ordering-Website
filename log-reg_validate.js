function validate1(e)
{
    let fname = document.forms["reg"]["fname"];
	let lname = document.forms["reg"]["lname"];
    let uname = document.forms["reg"]["Uname"];
    let email = document.forms["reg"]["email"];
    let pass = document.forms["reg"]["password"];
    let cpass = document.forms["reg"]["conpassword"];
    let phone = document.forms["reg"]["mobile"];
    //let sub = document.forms["contact-form"]["subject"];
    // let add = document.forms["contact-form"]["address"];
	//let mess = document.forms["contact-form"]["message"];
	let errMsg = "";
	let errMsgf = "";
	let errMsguname = "";
	let errMsgemail = "";
    let errMsgphone = "";
    let errMsgpass="";
    let errMsgcpass="";
	//let errMsgsub = "";
	// let errMsgadd = "";
    //let errMsgmess = "";
    let errMsgpassv =""; 
    
    if (fname.value.trim() === "") {
        errMsgf = errMsgf +"<br>Please enter your first name.";
    }
	if (lname.value.trim() === "") {
        errMsg = errMsg +"<br>Please enter your last name.";
    }
	if (uname.value.trim() === "") {
        errMsguname = errMsguname +"<br>Please enter your user name.";
    }
    if (email.value.trim() === "" && email.value.trim().indexOf("@", 0) < 0 && email.value.trim().indexOf(".", 0) < 0) {
        errMsgemail = errMsgemail +"<br>Please enter a valid e-mail address.";
    }
    if (phone.value.trim() === "") {
        errMsgphone = errMsgphone +"<br>Please enter your mobile number.";
    }
    if (pass.value.trim() === "") {
        errMsgpass = errMsgpass + "<br>Please enter your password.";
    }
    if (cpass.value.trim() === "") {
        errMsgcpass = errMsgcpass + "<br>Please enter your confirmation password.";
    }
    if(cpass.value != pass.value){
        errMsgpassv = errMsgpassv +"<br>password does not match";
    }
    // if(sub.value.trim() === ""){
    //     errMsgsub = errMsgsub +"<br>Please enter subject";
    // }
    // if(add.value.trim() === ""){
    //     errMsgadd = errMsgadd +"<br>Please enter address";
    // }
	// if(mess.value.trim() === ""){
    //     errMsgmess = errMsgmess +"<br>Please enter a message";
    // }
    
    if(errMsgf !== ""){
        document.getElementById("eerDivf").innerHTML = errMsgf;
        e.preventDefault();
	}
	 if(errMsg !== ""){
        document.getElementById("eerDiv").innerHTML = errMsg;
        e.preventDefault();
	}
	if(errMsguname != ""){
        document.getElementById("eerDivuname").innerHTML = errMsguname;
        e.preventDefault();
	}
	if(errMsgemail !== ""){
        document.getElementById("eerDivEmail").innerHTML = errMsgemail;
        e.preventDefault();
	}
	if(errMsgphone !== ""){
        document.getElementById("eerDivmob").innerHTML = errMsgphone;
        e.preventDefault();
    }
    if (errMsgpass !== ""){
        document.getElementById("eerDivpass").innerHTML = errMsgpass;
    }
    if (errMsgcpass !== "") {
        document.getElementById("eerDivcpass").innerHTML = errMsgcpass;
    }
    if(errMsgpassv != ""){
        document.getElementById("eerDivpassv").innerHTML = errMsgpassv;
    }
	//  if(errMsgsub !== ""){
    //     document.getElementById("eerDivsub").innerHTML = errMsgsub;
    //     e.preventDefault();
	// }
	//  if(errMsgadd !== ""){
    //     document.getElementById("eerDivadd").innerHTML = errMsgadd;
    //     e.preventDefault();
	// }
	//  if(errMsgmess !== ""){
    //     document.getElementById("eerDivmess").innerHTML = errMsgmess;
    //     e.preventDefault();
    // }
}
function restrictAlphabets(e) {
    var x = e.which || e.keycode;
    if ((x >= 48 && x <= 57) || x == 8 || (x >= 35 && x <= 40) || x == 46)
        return true;
    else
        return false;
}

