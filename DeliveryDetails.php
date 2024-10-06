<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Details</title>
    <link rel="stylesheet" href="src/css/delivery.css">
</head>

<body>
    <div>
        <div class="fuldisplage">
            <div class="discolum">
                <img src="./Img/womenpng.webp" alt="" class="womenusrr">
                <p class="name">yashodhi kaushallya</p>
                <p class="email">yashkaush@gmail.com</p>
                <p class="posisan">delivery manager</p>

                <div>
                    <div class="action_sidee">
                        <img src="./Img/home.png" alt="" class="side_icon"> dashboard
                    </div>
                    <div class="action_sidee">
                        <img src="./Img/order.png" alt="" class="side_icon"> orders
                    </div>
                    <div class="action_sidee">
                        <img src="./Img/orderlist.png" alt="" class="side_icon"> order list
                    </div>
                    <div class="action_sidee">
                        <img src="./Img/return.png" alt="" class="side_icon"> return
                    </div>
                    <div class="action_sidee action_sidee_active">
                        <a href="./DeliveryDetails.php" class="a_side"> <img src="./Img/driver.png" alt="" class="side_icon  ">Assign drivers</a>
                    </div>
                    <div class="action_sidee">
                        <img src="./Img/meating.png" alt="" class="side_icon"> meetings
                    </div>
                </div>
            </div>
            <div class="main_left">
                <button class="btn_dash"> <a href="./AddDelivery.php"> Assign new driver</a> </button>
                <div class="discolunew">
                    <?php
                    // Include the backend PHP file
                    include 'display.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>