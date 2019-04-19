<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {margin:0;height:2000px;}

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}


.nav { 
 
  list-style-type: none;
  text-align: center;
  margin: 0;
  padding: 0;
}

.nav li {
 
  display: inline-block;
  font-size: 20px;
  padding: 3px;
}


/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: left;
  margin: auto;
}
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}



/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s white;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body style="background: url(Background.jpg);background-size: 100%;">
<div class="icon-bar">
  <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="www.google.com" class="google"><i class="fa fa-google"></i></a> 
  <a href="www.linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>


<h2 style="text-align:center;font-size:50px;color:whitesmoke";>Red Drop Blood Bank</h2>
<p style="text-align:center;font-size:20px;color:whitesmoke";>...There is no great joy than saving a soul...</p>
<ul class="nav" style="color:whitesmoke">
  <li><a href="index.php" style="color:whitesmoke">Home</a></li>
  <li><a href="page" style="color:whitesmoke">About</a></li>  
  <li><a href="/become-donar" style="color:whitesmoke">Become a donor</a></li>
  <li><a href="/contact" style="color:whitesmoke">Contact Us</a></li>
</ul>

<div class="container">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Slider1.jpg" alt="Donation1" style="width:1400px;height:750px;">
      </div>

      <div class="item">
        <img src="Slider2.png" alt="Donation2" style="width:1400px;height:750px;">
      </div>
    
      <div class="item">
        <img src="Slider3.jpg" alt="Donation3" style="width:1400px;height:750px;">
      </div>
	  <div class="item">
        <img src="Slider4.jpg" alt="Donation4" style="width:1400px;height:750px;">
      </div>
	  <div class="item">
        <img src="Slider5.jpg" alt="Donation5" style="width:1400px;height:750px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<div class="main" align="center">

<h1 style ="color:white">your choice</h1>
<hr>

<h2 style="color:white"></h2>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
	<a href="wedding.html">
      <img src="how-to-donate.jpg" alt="how-to-donate" style="width:200px;height:200px;">
	  </a>
      <h3 style="color:white">HOW TO DONATE BLOOD</h3>

      <p style="color:white">'Thank you for your humanitarian gesture to donate blood.
You may please visit a Clinical Laboratory center and identify your blood group. The clinical test will cost you just ` 50-60. The result shall be provided within 2 hours time. In case you wish to donate blood now, please visit your nearest Blood Collection Center. Alternatively you may use the Registration Form given here in the website and submit for registration. Recipient, relatives or Hospital authorities will contact you directly.'</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
	<a href="maternity.html">
    <img src="health-tip.jpg" alt="health-tip" style="width:200px;height:200px;">
	 </a>
      <h3 style="color:white">Donar Guidelines</h3>
      <p style="color:white">
Eligibilities

Any donor, who is healthy, fit and not suffering from any transmittable diseases can donate blood.
Donor must be 18 -60 years age and having a minimum weight of 50Kg can donate blood.
Donor’s Hemoglobin level is 12.5% minimum.
A donor can again donate blood after 3 months of your last donation of blood.
Pulse rate must be between 50 to 100mm without any irregularities.
BP Diastolic 50 to 100 mm Hg and Systolic 100 to 180 mm Hg.
Body temperature should be normal and oral temperature should not exceed 37.5 degree Celsius.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
	<a href="vaction.html">
    <img src="drop.jpg" alt="drop" style="width:200px;height:200px;">
	 </a>
      <h3 style="color:white">Beat the myth</h3>
      <p style="color:white">Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:

You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.
A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.
Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.</p>
    </div>
  </div>
</div>
  
  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</body>
</html> 
