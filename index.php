
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionFix</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/script.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  </head>
<body>
<?php 
 include("src/header.php")
?>
    <hr>
    


    <header>
        <container class="slide">
            <img src="src/img/slide2.jpg" height="100px" alt="">
        </container>
        <container class="slide"></container>
        <container class="slide"></container>
        <container class="slide"></container>
        <container class="slide"></container>
    </header>

    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

    <script>
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

    </div>

    <div class="title">
        <h1>Shop by Catogory</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque odit assumenda maxime neque tempora et quo unde cumque ratione hic aperiam, dignissimos ab doloremque veniam modi, qui impedit alias ipsam?</p>
    </div>

    <div class="section" >
        <div class="space">
        <h2 id="newarrivals">NEW ARRIVALS</h2>
        </div>
        <div class="subsection">
            
            <div class="box active">
                <a href="product1.php">
                <div class="minibox">
                <img src="img/men/men1.jpg" alt="Hustle Men's Short Sleeve Over Size Casual Tee" class="subimg"> 
                <div>
                    <p class="price">Rs 2350.00</p>
                    <p class="description">Hustle Men's Short Sleeve Over Size Casual Tee</p>
                    <p class="ava"><li class="avay">In Stock</li></p>
                </div>
                </div></a>
            </div>

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                <img src="img/women/women1.jpg" alt="Andina Women's Offlice Dress" class="subimg">

                <div>
                    <p class="price">Rs 4290.00</p>
                    <p class="description">Andina Women's Offlice Dress</p>
                    <p class="ava"><li class="avay">In Stock</li></p>
                </div>
                </div></a>
            </div>

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                <img src="img/men/men3.jpg" alt="Hustle Men's Long Sleeve Over Size Casual Tee" class="subimg">
                
                <div>
                    <p class="price">Rs 2350.00</p>
                    <p class="description">Hustle Men's Long Sleeve Over Size Casual Tee</p>
                    <p class="ava"><li class="avay">In Stock</li></p>
                </div>
                </div></a>
            </div>
        </div>

    </div>

    <div class="section">
        <div class="space">
        <h2 id="promotions">PROMOTIONS</h2>
        </div>
        <div class="subsection">

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                    <img src="img/women/women5.jpg" alt="Hustle Monochromatic Short Sleeve Oversized Hoodie" class="subimg">
    
                    <div>
                        <p class="price"><span class="promo">Rs 4290.00</span><br>Rs 3900.00 </p>
                        <p class="description">Hustle Monochromatic Short Sleeve Oversized Hoodie</p>
                        <p class="ava"><li class="avay">In Stock</li></p>
                    </div>
                    </div></a>
            </div>

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                    <img src="img/women/women6.jpg" alt="Modano Women's Sleeve Less Party Dress" class="subimg">
    
                    <div>
                        <p class="price"><span class="promo">Rs 4150.00</span><br>Rs 3800.00 </p>
                        <p class="description">Modano Women's Sleeve Less Party Dress</p>
                        <p class="ava"><li class="avay">In Stock</li></p>
                    </div>
                    </div></a>
            </div>

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                    <img src="img/men/men5.jpg" alt="Andina Women's Offlice Dress" class="subimg">
    
                    <div>
                        <p class="price"><span class="promo">Rs 2190.00</span><br>Rs 1900.00 </p>
                        <p class="description">King Street Men's Short Sleeve Casual</p>
                        <p class="ava"><li class="avay">In Stock</li></p>
                    </div>
                    </div></a>
            </div>
        </div>

    </div>

    <div class="section">
        <div class="space">
        <h2 id="men">Men's clothing</h2>
        </div>
        <div class="subsection">

            <div class="box active">
                <a href="product1.html">
                <div class="minibox">
                <img src="img/men/men1.jpg" alt="Hustle Men's Short Sleeve Over Size Casual Tee" class="subimg">
                
                <div>
                <p class="price">Rs 2350.00</p>
                <p class="description">Hustle Men's Short Sleeve Over Size Casual Tee</p>
                <p class="ava"><li class="avay">In Stock</li></p>
                </div>
                </div></a>
            </div>

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                <img src="img/men/men3.jpg" alt="Hustle Men's Long Sleeve Over Size Casual Tee" class="subimg">
                
                <div>
                    <p class="price">Rs 2350.00</p>
                    <p class="description">Hustle Men's Long Sleeve Over Size Casual Tee</p>
                    <p class="ava"><li class="avay">In Stock</li></p>
                </div>
                </div></a>
            </div>

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                <img src="img/men/men4.jpg" alt="King Street Men's Long Sleeve Casual Shirt" class="subimg">
                
                <div>
                    <p class="price">Rs 2350.00</p>
                    <p class="description">King Street Men's Long Sleeve Casual Shirt</p>
                    <p class="ava"><li class="avan">Sold Out</li></p>
                </div>
                </div></a>
            </div>
        </div>

    </div>
    
    <div class="section">
        <div class="space">
        <h2 id="women">Women's clothing</h2>
        </div>
        <div class="subsection">

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                <img src="img/women/women1.jpg" alt="Andina Women's Offlice Dress" class="subimg">

                <div>
                    <p class="price">Rs 4290.00</p>
                    <p class="description">Andina Women's Offlice Dress</p>
                    <p class="ava"><li class="avay">In Stock</li></p>
                </div>
                </div></a>
            </div>

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                <img src="img/women/women2.jpg" alt="Envogue Women's Sleeve Less Office Top" class="subimg">

                <div>
                    <p class="price">Rs 2290.00</p>
                    <p class="description">Envogue Women's Sleeve Less Office Top</p>
                    <p class="ava"><li class="avay">In Stock</li></p>
                </div>
                </div></a>
            </div>

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                <img src="img/women/women4.jpg" alt="Envogue Women's Office Skirt" class="subimg">

                <div>
                    <p class="price">Rs 2990.00</p>
                    <p class="description">Envogue Women's Office Skirt</p>
                    <p class="ava"><li class="avan">Sold Out</li></p>
                </div>
                </div></a>
            </div>
        </div>
        
    </div>

    <div class="section">
        <div class="space">
        <h2 id="kids">Kids's clothing</h2>
        </div>
        <div class="subsection">
            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                    <img src="img/kids/kids1.jpg" alt="Ozone Kids Girls Casual Frock" class="subimg">
                
                <div>
                    <p class="price">Rs 2150.00</p>
                    <p class="description">Ozone Kids Girls Casual Frock</p>
                    <p class="ava"><li class="avan">Sold Out</li></p>
                </div>
                </div></a>
            </div>

            <div class="box">
                <a href="#">
                <div class="minibox disabled">
                    <img src="img/kids/kids2.jpg" alt="Core Basics Kids Boys Casual T-Shirt" class="subimg">
                
                <div>
                <p class="price">Rs 850.00</p>
                <p class="description">Core Basics Kids Boys Casual T-Shirt</p>
                <p class="ava"><li class="avay">In Stock</li></p>
                </div>
                </div></a>

            </div>

            <div class="box ">
                <a href="#">
                <div class="minibox disabled">
                    <img src="img/kids/kids3.jpg" alt="" class="subimg">
                
                <div>
                    <p class="price">Rs 850.00</p>
                    <p class="description">Core Kids Boys Casual T-Shirt</p>
                    <p class="ava"><li class="avay">In Stock</li></p>
                </div>
                </div></a>

            </div>
        </div>

    </div>
    <div class="space">
    </div>
    <div class="title">
        <h1>Brands</h1>
    </div>

    <div class="headerekeclassnameek">
        <div class="slide2">,asm dasdnaskdna;ls</div>
        <div class="slide2"></div>
        <div class="slide2"></div>
        <div class="slide2"></div>
        <div class="slide2"></div>
    </div>

    <hr>


<?php

include("src/footer.html")

?>
    
    
</body>
</html>