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
<div class="showcontainer" style="margin-top: -40px;">

<div class="mySlides ">
  <img src="img/slideshow/slide1.jpg" style="width:100%; height:80vh;">
</div>

<div class="mySlides ">
  <img src="img/slideshow/slide2.jpg" style="width:100%; height:80vh;">
</div>

<div class="mySlides ">
  <img src="img/slideshow/slide3.jpg" style="width:100%; height:80vh;">
</div>
<div class="mySlides ">
  <img src="img/slideshow/slide4.jpg" style="width:100%; height:80vh;">
</div>
<div class="mySlides ">
  <img src="img/slideshow/slide5.jpg" style="width:100%; height:80vh;">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 7000); 
}
</script>

<button onclick="topFunction()" 
style="
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 25px;
  border: none;
  outline: none;
  background-color: #ee6002;
  color: white;
  cursor: pointer;
  padding: 7px 16px;
  border-radius: 25px;
  font-weight: 900;
    "

id="myBtn" title="Go to top">^</button>

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
    <div class="space"></div>
        <h1 class="topic">Shop by Catogory</h1>
        <p class="para" style="text-align: center; font-size:16px; margin-top:30px;">Bring an edge back into your wardrobe with cool looks you can't do without from FashionFix, the best place for online clothes shopping.</p>
    </div>

    <div class="section" >
        <div class="space">
        <h2 id="newarrivals" class="topic"><p></p>NEW ARRIVALS</h2>
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
                <a href="product2.php">
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
        <h2 id="newarrivals" class="topic"><p></p>PROMOTIONS</h2>
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
            
        <h2 id="newarrivals" class="topic"><p></p>Men's clothing</h2>
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
        <h2 h2 id="newarrivals" class="topic"><p></p>Women's clothing</h2>
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
        <h2 id="newarrivals" class="topic"><p></p>Kids's clothing</h2>
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




<?php

include("src/footer.html")

?>
    
    
</body>
</html>