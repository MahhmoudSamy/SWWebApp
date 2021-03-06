<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/style.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/superfish.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/magnific-popup.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/icomoon.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/animate.css">
  <script src="http://localhost/mvc/public/js/modernizr-2.6.2.min.js"></script>
  
  <title>Ekdolosi Events</title>
</head>

<body>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>
  <!-- Automatic Slideshow Images -->
 <div class="mySlides w3-display-container w3-center">
    <img src="http://localhost/mvc/public/images/pic (53).jpg" height="600" width="1150">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

    </div> <h3>Set-up</h3>
    
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="http://localhost/mvc/public/images/pic (32).jpg" height="600" width="1150">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">


    </div> <h3>Wedding</h3>  
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="http://localhost/mvc/public/images/pic (66).jpg" height="600" width="1150">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

    </div> <h3>Engagements</h3>
    </div>

    <div class="mySlides w3-display-container w3-center">
    <img src="http://localhost/mvc/public/images/pic (61).jpg" height="600" width="1150">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

    </div> <h3>Decorations</h3>
    </div>
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 400);
}
</script>
</body></html>