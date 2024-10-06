function validateForm() {
  const fullName = document.getElementById("fullName").value;
  const phone = document.getElementById("phone").value;
  const email = document.getElementById("email").value;
  const available = document.getElementById("available").value;
  const vehicalNumber = document.getElementById("vehicalNumber").value;
  const orderId = document.getElementById("orderId").value;
  const orderDetails = document.getElementById("orderDetails").value;

  // Validate Full Name: Only letters and spaces
  const namePattern = /^[A-Za-z\s]+$/;
  if (!namePattern.test(fullName)) {
    alert("Full Name can only contain letters and spaces.");
    return false; // Prevent form submission
  }

  // Validate Phone Number: Must be exactly 10 digits
  const phonePattern = /^\d{10}$/;
  if (!phonePattern.test(phone)) {
    alert("Phone number must be exactly 10 digits.");
    return false; // Prevent form submission
  }

  // Validate Email: Must be in valid email format
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false; // Prevent form submission
  }

  // Validate Available Field: Ensure it's not empty
  if (available.trim() === "") {
    alert("Available field cannot be empty.");
    return false; // Prevent form submission
  }

  // Validate Vehicle Number: Example pattern (alphanumeric, length 7)
  const vehicleNumberPattern = /^[A-Za-z0-9]{7}$/; // Adjust this pattern as needed
  if (!vehicleNumberPattern.test(vehicalNumber)) {
    alert("Vehicle Number must be exactly 7 alphanumeric characters.");
    return false; // Prevent form submission
  }

  // Validate Order ID: Example pattern (alphanumeric, length 5-10)
  const orderIdPattern = /^[A-Za-z0-9]{5,10}$/; // Adjust this pattern as needed
  if (!orderIdPattern.test(orderId)) {
    alert("Order ID must be 5 to 10 alphanumeric characters.");
    return false; // Prevent form submission
  }

  // Validate Order Details: Minimum character length of 10
  if (orderDetails.length < 10) {
    alert("Order Details must be at least 10 characters long.");
    return false; // Prevent form submission
  }

  return true; // Allow form submission
}
