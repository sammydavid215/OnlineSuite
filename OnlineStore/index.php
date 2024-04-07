<?php
?>
<div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Online Store</title>
</head>

<header>
<div class="nav" >
<img src="img/logo.png" class="photo" /><a class="online">Ladies and Gentlemen Exclusive Boutique</a><img src="img/homee - Copy (4).png" class="img6" />
<!-- <div><img src="" class="photo" /></div> -->
</div>
<div class="body">

<nav class="navbar">
  
<div class="container">  

<div class="search_b">
<input type="text" class="search" Placeholder="Search Product"/>
<button class="home1">Search Product</button><div class="img2"> 
    <img src="img/homee - Copy (3).png" />

</div>
</div> 

</div>
<div class="containa">
  <button class="home" onClick="window.location.href='./index.php'" >Home</button> 
<button onClick="window.location.href='./Sign_Up.php'" class="home">Sign Up</button> 
<button onClick="window.location.href='./Sign_in.php'" class="home">Sign In</button>
                        <div class="dropdown">
                            <button class="home" onclick="myFunction()">View Suit<i class="fa fa-caret-down"></i></button> 
                                                    <!-- <div class="dropdown-content" id="myDropdown">
                                                      <a href="">EXECUTIVE SUITS</a>
                                                      <a href="">SUGGESTED WEDDING SUITS</a>
                                                      <a href="">THREE PIECE</a>
                                                      <a href="">DOUBLE BREASTED</a>
                                                      <a href="">BLAZERS</a>
                                                      <a href="">TUXEDOS</a>
                                                      <a href="">PANTS</a>
                                                      <a href="">BESPOKE</a>
                                                      <a href="">NATIVE SUITS</a> 
                                                      </div> -->
                        </div>
<button class="home">View Price</button> <button class="home">check out</button>
</div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.home')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

</script>

<div class="container2">
<div class="container2">
    
                                    <div class="slideshow-container">

                                    <div class="mySlides fade">
                                    <div class="numbertext">1 / 3</div>
                                    <img src="img/suit4.jpg" style="width:280px">
                                    <!-- <div class="text">Caption Text</div> -->
                                    </div>

                                    <div class="mySlides fade">
                                    <div class="numbertext">2 / 3</div>
                                    <img src="img/esuit1.png" style="width:280px">
                                    <!-- <div class="text">Caption Two</div> -->
                                    </div>

                                    <div class="mySlides fade">
                                    <div class="numbertext">3 / 3</div>
                                    <img src="img/esuit2.png" style="width:280px">
                                    <!-- <div class="text">Caption Three</div> -->
                                    </div>

                                    <div style="text-align:center">
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
                                                setTimeout(showSlides, 2000); // Change image every 2 seconds
                                                }
                                                 </script>
                                    </div>

                <div>
                <div class="Welcome">
                    <h1 class="Welcome2">

                Welcome to Uduh's Clothing and fabrics! 
                </h1>
                </div> 
                    <a class="best">Best Quality Suit You Can get!</a>
                    <p class="Disc">10% Discount for every Purchase above 50,000</p>
                        
                        <p class="Disc"> </p>


                    <input type="button" value="Shop Here"
                    class="shop_b"
                    />
                </div>
</div>




</nav>

<div class="img3">
    <img src="img/suit1.png" class="img3" />
</div>
</header>

<body>
    

    </div>
    <div>
        
    </div>
    </div>
</body>

</div>


<footer class="foot">


</footer>


</div>
