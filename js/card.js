function checkForm(form) {
    var shouldReturn = false;

    if (form.cardNumber.value[0] == 5) { // name entered
        document.getElementById("MasterCard").style.display = "block";
    } else {
        document.getElementById("MasterCard").style.display = "none";
    }
    if (form.cardNumber.value[0] == 3) { // name entered
        document.getElementById("AmericanExpress").style.display = "block";
    }
    else {
        document.getElementById("AmericanExpress").style.display = "none";
    }
    if (form.cardNumber.value[0] == 4) { // name entered
        document.getElementById("Visa").style.display = "block";
    } else {
        document.getElementById("Visa").style.display = "none";
    }
    return shouldReturn; // passed all the checks: OK to submit... FOR NOW YOU HEATHEAN!
}