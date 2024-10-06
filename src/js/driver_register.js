var SubButton = document.getElementById("Sbutton");
SubButton.addEventListener("click", check); 
const currentDate = new Date();

function check(event) {
    event.preventDefault(); 

    const password = document.getElementById("Password").value;
    const confirmPassword = document.getElementById("CPassword").value;
    const Age = document.getElementById("age").value;

    if (password !== confirmPassword) {
        alert ("Password mismatched");
        return;
    }
    if (Age <= 18) {
        alert ("Sorry, you must be at least [required_age] years old to proceed. Please verify your age and try again");
        return;
    }

    else{
        alert("Your information was submitted successfully");
        window.location.href = "driver_account.php";
    }
}



