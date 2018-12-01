<!DOCTYPE html>
<html>

<script src="webproject/js/popper.min.js"></script>
<script src="webproject/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style3.css" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="webproject/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title> Accueil </title>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body background="img\reunion.jpg">

    <div class="topnav">

        <a href="#about">A propos</a>
        <a href="#contact">Contact</a>
        <a class="active" href="#home">Accueil</a>
        <a><i href="search" class="material-icons">search</i></a>
        <input class="form-control" type="search" placeholder="Recherche" aria-label="Search">

    </div>
 <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" id="reused_form" >
                        <p class="name">
                            <i href="search" class="material-icons">search</i>
                            <input name="text" type="text" class="feedback-input" required placeholder="Quoi" id="name" />
                        </p>
                        <p class="email">
                            <i class="material-icons">location_on</i>
                            <input name="text" type="text" required class="feedback-input" id="email" placeholder="Où" />
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue">Rechercher</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                </div>
            </div>
</div>


<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<script>
    
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length} ;
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

</script>

<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img\entreprise2.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img\reunion.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img\entreprise.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


</body>



</html>
