/* document.getElementById("driverForm").addEventListener("submit", check);

function check(event) {
    event.preventDefault();

    var password = document.getElementById("Password").value.trim();
    var confirmPassword = document.getElementById("CPassword").value.trim();
    var age = parseInt(document.getElementById("age").value.trim());
    var licenceNo = document.getElementById("licenceNo").value.trim();
    var accountNo = document.getElementById("acc_no").value.trim();
    
    if (password !== confirmPassword) {
        alert("Passwords do not match. Please try again.");
        return false;
    }

    if (isNaN(age) || age < 18) { 
        alert("Sorry, you must be at least 18 years old to proceed. Please verify your age and try again.");
        return false;
    }

    if (!licenceNo || !accountNo) {
        alert("Please ensure all required fields are filled.");
        return false;
    }

    alert("Your information was submitted successfully");
    document.getElementById("driverForm").submit();  
}
 */