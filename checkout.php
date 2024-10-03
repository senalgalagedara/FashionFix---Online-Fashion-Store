<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/stylen.css">
    <link rel="stylesheet" href="src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <?php
    include("src/header.html");

?>

    <div class="box1">
        <div class="box2">
            <div class="boxsm">
                <h3>Contact Information</h3>
                <p>Enter valid email which we can use to contact you</p>
                <input type="text" class="textbox1" name="Email Address" id="" placeholder="Enter e-mail">
            </div>
            <div class="boxlg">
                <h3>Shipping Address</h3>
                <p>Fill the following fileds according to where the order to be delivered</p>
                <div style="width: 100%; display: flex; width: auto;">
                    <div style="display: block; width: auto;">
                        <input type="text" class="textbox2" id="" placeholder="First Name">
                        <input type="text" class="textbox2" name="" id="" placeholder="Last Name">
                        <input type="text" class="textbox2" name="" id="" placeholder="Country">
                    </div>
                    <div style="display: block;">
                        <input type="text" class="textbox2" name="" id="" placeholder="District">
                        <input type="text" class="textbox2" name="" id="" placeholder="City"> 
                    </div>
                    
                </div>
                <div style="padding: 5px; width: 100%;">
                    <input type="text" name="" id="" style="width: 70%; height: 25px; margin-bottom: 10px;" placeholder="Address"><br>
                    <input type="text" name="" id="" style="width: 40%; height: 25px; margin-bottom: 10px;" placeholder="Contact Number"><br>
                    
                </div>
                

    
            </div>
        </div>
        <div class="box3">
            <div class="box3sm">
                <img src="src/img/test1.jpeg" class="testimg" alt="">
                <div class="box3smdetails">
                    <h5 style="font-size: 18px; margin-bottom: 0px; cursor: pointer;">Smocked Mini Dress-M*1</h5>
                    <p style="margin:5px 0px;">Rs 1900.00</p>
                </div>
            </div>
            <div class="box3sm">
                <img src="src/img/test1.jpeg" class="testimg" alt="">
                <div class="box3smdetails">
                    <h5 style="font-size: 18px; margin-bottom: 0px; cursor: pointer;">Huf & Dee Women's Jeans-32*2</h5>
                    <p style="margin:5px 0px;">Rs 7500.00</p>
                
                </div>
            </div>
            <div class="box3sm">
                <img src="src/img/test1.jpeg" class="testimg"alt="">
                <div class="box3smdetails">
                    <h5 style="font-size: 18px; margin-bottom: 0px; cursor: pointer;">Men's Semi Winter Hooded Jacket-L*1</h5>
                    <p style="margin:5px 0px;">Rs 4200.00</p>
                </div>
            </div>
            <button style="width: 100%; height: 40px;">
                TOTAL :
            </button>
            
        </div>
        
    </div>
    <div class="box4">
        <button class="retcart">
            Return To Cart
        </button>
        <button class="retcart2">
            Continue To Shipping and Payment
        </button>

    </div>
    


    <?php
    include("src/footer.html");

?>
</body>
</html>