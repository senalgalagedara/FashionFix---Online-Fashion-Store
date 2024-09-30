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
 include("src/header.html")
?>
    <hr>

    <header>
        <container class="slide">
            <img src="src/img/slide2.jpg" alt="">
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

    <div class="boxes">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>

    <hr>

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