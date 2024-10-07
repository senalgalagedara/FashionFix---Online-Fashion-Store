function validatePhoneNum(pNumber) {
    const pnumPattern = /^\d{10}$/;
    return pnumPattern.test(pNumber);
}

function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

function validation(){
    const phoneNumber = document.getElementById("pnumber").value;
    const email = document.getElementById("mail").value;

    if(!validatePhoneNum(phoneNumber)){
        alert("invalid phone number. please enter only 10 digtis");
        return false;
    }

    if(!validateEmail(email)){
        alert("Invalid Email Address.");
        return false;
    }

    return true;
}
