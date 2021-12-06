function validate2(e) 
{
    let uname1 = document.forms["log"]["email1"];
    let pass1 = document.forms["log"]["password1"];

    let errMsguName1 = "";
    let errMsgpass1 = "";

    if (uname1.value.trim() == "") {
        errMsguName1 = errMsguName1 + "<br>Please enter your username.";
    }

    if (pass1.value.trim() == "") {
        errMsgpass1 = errMsgpass1 + "<br>Please enter your password.";
    }

    if (errMsguName1 != "") {
        document.getElementById("eerDivuname1").innerHTML = errMsguName1;
        e.preventDefault();
    }

    if (errMsgpass1 != "") {
        document.getElementById("eerDivpassword1").innerHTML = errMsgpass1;
        e.preventDefault();
    }
}