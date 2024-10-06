<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Delivery</title>
    <link rel="stylesheet" href="src/css/delivery.css">
</head>

<body>
    <div class="from_fulll_main">
        <div class="from_fulll">
            <p class="order_topic">Assign a driver order </p>
            <form method="post" action="insert.php" id="orderForm" onsubmit="return validateForm()">
                <div class="from_deliver">
                    <div class="coulmadd">
                        <p class="subtopic">driver details</p>
                        <div>
                            <label for="fullName">Full Name:</label><br />
                            <input class="input" type="text" id="fullName" name="fullName" required />
                        </div>
                        <div>
                            <label for="phone">Phone:</label><br />
                            <input class="input" maxlength="10" type="text" id="phone" name="phone" required />
                        </div>
                        <div>
                            <label for="email">Email:</label><br />
                            <input class="input" type="email" id="email" name="email" required />
                        </div>
                        <div>
                            <label for="available">Status:</label><br />
                            <select class="input" id="available" name="available" required>
                                <option value="">Select Availability</option>
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                            </select>
                        </div>
                        <div>
                            <label for="vehicalType">Vehicle Type:</label><br />
                            <input class="input" type="text" id="vehicalType" name="vehicalType" required />
                        </div>
                        <div>
                            <label for="vehicalNumber">Vehicle Number:</label><br />
                            <input class="input" type="text" id="vehicalNumber" name="vehicalNumber" required />
                        </div>
                        <div>
                            <label for="hireDate">Hire Date:</label><br />
                            <input class="input" type="date" id="hireDate" name="hireDate" required />
                        </div>

                    </div>
                    <div class="coulmadd">
                        <p class="subtopic">order details</p>
                        <div>
                            <label for="orderId">Order ID:</label><br />
                            <input class="input" type="text" id="orderId" name="orderId" required />
                        </div>
                        <div>
                            <label for="ordeName">Order Name:</label><br />
                            <input class="input" type="text" id="ordeName" name="ordeName" required />
                        </div>
                        <div>
                            <label for="orderDetails">Order Details:</label><br />
                            <textarea class="input" id="orderDetails" name="orderDetails" rows="4" required></textarea>
                        </div>
                        <img src="src/img/adgif.gif" class="dligi" />
                    </div>
                </div>
                <div>
                    <button class="formbt" type="submit">Assign</button>
                </div>
            </form>
        </div>
    </div>


    <script src="src/js/delivery.js"></script>
</body>

</html>