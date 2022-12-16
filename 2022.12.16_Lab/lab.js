function enableButton(e) {
   document.getElementById("submitBTN").disabled = false;
}

function disableButton() {
    document.getElementById("submitBTN").disabled = true;
 }

function validateForm() {
    let userId = document.getElementById("in1").value.trim();
    let pass1 = document.getElementById("in2").value.trim();
    let pass2 = document.getElementById("in3").value.trim();

    if(userId === "" || pass1 === "" || pass2 === "") {
        disableButton();
    }
    else {
        enableButton();
    }
}






function checkPassword(event) {
    event.preventDefault();
    let pass1 = document.getElementById("in2").value.trim();
    let pass2 = document.getElementById("in3").value.trim(); 
    let form1 = document.getElementById("form1");

    if(pass1 !== pass2) {
        alert("Passwords do not match!");
    }
    else {
        form1.submit();
    }
}