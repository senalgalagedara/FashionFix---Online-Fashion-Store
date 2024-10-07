<?php
    include ("src/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.google.com/specimen/Poppins?query=poppins" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="./src/css/faq.css">
</head>
<body>
    <div class="div1">
        <h1>Frequently Asked Questions</h1>
        <hr />
        <br>

        <div class="btn">
            <h3>Q: How to check the availability of an item?</h3>
            <button onclick="toggleContent('paragraph', this)"><i class='bx bxs-chevron-down'></i></button>
        </div>             
        <div id="paragraph" class="para">
            <hr>
            <p>All available items are displayed on our website and available sizes are displayed below the item as in the image above. 
                If you are looking for a product but that is not available in our website, then that item is probably sold out</p>
        </div>

        <div class="btn">
            <h3>Q: How to purchase a product from our website?</h3>
            <button onclick="toggleContent('paragraph1', this)"><i class='bx bxs-chevron-down'></i></button>
        </div>      
        <div id="paragraph1" class="para">
            <hr>
            <ul>
                <li>Browse through our products and add to cart.</li>
                <li>Navigate to Check out page.</li>
                <li>Enter your personal details, delivery address, contact number etc.</li>
                <li>Select the Payment method. (Cash, Credit/Debit card)</li>
                <li>Double check accuracy of the submitted information. Finally place the order</li>
            </ul>
            <p>Or else you can also place an order through our FB page or simply WhatsApp us on 0706560560 (9AM - 6PM)</p>
            
        </div>
        
        <div class="btn">
            <h3>Q: What payment methods do Thilakawardhana accept?</h3>
            <button onclick="toggleContent('paragraph2', this)"><i class='bx bxs-chevron-down'></i></button>
        </div>
        <div id="paragraph2" class="para">
            <hr>
            <p>Use overlay text to give Cash On Delivery (COD) is available Island-wide.</p>
            <p>Or you can visit our website and use any payment method mentioned below</p>
            <ul>
                <li>Debit or Credit card</li>
                <li>KOKO</li>
                <li>Mint pay</li>
            </ul>
            <p>Bank deposits are not accepted</p>
        </div>

        <div class="btn">
            <h3>Q: What is your return policy?</h3>
            <button onclick="toggleContent('paragraph3', this)"><i class='bx bxs-chevron-down'></i></button>
        </div>
        <div id="paragraph3" class="para">
            <hr>
            <p> We offer a 30-day return policy from the date of delivery. Items must be in their original condition, unworn, and with all tags attached.</p>         
        </div>
        
        <div class="btn">
            <h3>Q: How do I return an item?</h3>
            <button onclick="toggleContent('paragraph4', this)"><i class='bx bxs-chevron-down'></i></button>
        </div>
        <div id="paragraph4" class="para">
            <hr>
            <p> Log in to your account, go to your order history, and initiate a return. You will receive a return label, and once we receive the item, we will process your refund or exchange.?</p>         
        </div>

        <div class="btn">
            <h3>Q: Do I need to create an account to place an order?</h3>
            <button onclick="toggleContent('paragraph5', this)"><i class='bx bxs-chevron-down'></i></button>
        </div>
        <div id="paragraph5" class="para">
            <hr>
            <p>  No, you can check out as a guest. However, creating an account allows you to track your orders, save your preferences, and speed up future purchases.</p>         
        </div>

        
        <div class="btn">
            <h3>Q: How do I reset my password?</h3>
            <button onclick="toggleContent('paragraph6', this)"><i class='bx bxs-chevron-down'></i></button>
        </div>
        <div id="paragraph6" class="para">
            <hr>
            <p>If you've forgotten your password, click on the “Forgot Password” link on the login page. We'll email you a link to reset your password.</p>         
        </div>

        <div class="btn">
            <h3>Q: Do you offer any discounts or promotions?</h3>
            <button onclick="toggleContent('paragraph7', this)"><i class='bx bxs-chevron-down'></i></button>
        </div>
        <div id="paragraph7" class="para">
            <hr>
            <p>Yes, we regularly offer promotions and discounts. Subscribe to our newsletter to stay updated on upcoming sales and exclusive offers.</p>         
        </div>

        <div class="btn">
            <h3>Q: Why isn't my promo code working?</h3>
            <button onclick="toggleContent('paragraph8', this)"><i class='bx bxs-chevron-down'></i></button>
        </div>
        <div id="paragraph8" class="para" style="display: none;">
            <hr>
            <p> Ensure that your promo code is still valid and meets the minimum purchase requirements. If it still doesn't work, contact customer support.</p>         
        </div>
        
    </div>
    <script>
        function toggleContent(id, button) {
            var content = document.getElementById(id);
        
            if (content.style.maxHeight) {
                content.style.maxHeight = null; 
                button.classList.remove('open'); 
            } else {
                content.style.maxHeight = content.scrollHeight + "px"; 
                button.classList.add('open'); 
            }
        }

    </script>
    
    <?php

            include("src/footer.html")

    ?>
</body>
</html>