function validate1(e)
{
    let add = document.forms["check"]["address"];
    let errMsg = "";

    if (add.value.trim() === "") {
        errMsg = errMsg + "<br>Please enter your address.";
    }

    if (errMsg !== "") {
        document.getElementById("eerDiv").innerHTML = errMsg;
        e.preventDefault();
    }
}