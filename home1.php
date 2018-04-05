<html>
<head>
	<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
<link rel="stylesheet" href="bootstrap-4.0.0-beta.2/css/bootstrap.min.css">
<script src="bootstrap-4.0.0-beta.2/jquery/jquery-3.2.1.slim.min.js"></script>
<script src="bootstrap-4.0.0-beta.2/jquery/popper.min.js"></script>
<script src="bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Just an image -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">
    <img src="schoollogo.png" width="45" height="45" alt="">
  </a>
  <div class="collapse navbar-collapse" style="background-color: #e3f2fd;" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav my-2 my-lg-0">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admin.php">Admin</a>
      </li>
  </ul>
  </div>
</nav>

<ul class="nav sticky-top nav-tabs justify-content-center navbar-dark ">
  <li class="nav-item">
    <a class="nav-link active" href="#aboutus">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#academics">Academics</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#admissions">Admissions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#contactus">Contact Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#ourstrength">Our Strength</a>
  </li>
</ul>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-50" src="download.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="download2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="download3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div id="aboutus" class="jumbotron" style="height: 700px;">
  <h1 class="display-4">Freedom Concept School</h1>
  <p class="lead">Freedom concept school is a non-residential, private, and co-education school to be affiliated to central board of secondary education (CBSE), new delhi. For the academic year 2005-2006, the school will provide education to students from LKG toVI standard. The facilities and the infrastructure will expand in future to accommodate classes up to XII standard. The CBSE curriculum was chosen due to the flexibility if provides to import concepts and standards oriented education to kids. This matches wll with our mission and goals.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

<div id="academics" class="jumbotron" style="height: 700px;">
  <h1 class="display-4">Academics</h1>
  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

<div id="admissions" class="jumbotron" style="height: 700px;">
  <h1 class="display-4">Admissions</h1>
  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

<div id="ourstrength" class="jumbotron" style="height: 700px;">
  <h1 class="display-4">Our Strength</h1>
  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

<div id="contactus" class="jumbotron" style="height: 700px;">
  <h3>Locate Us</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 12.9721672, lng: 79.1598938};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG4aq5Th2K3HpceC-4gJ2Cax9M7WqNsPs&callback=initMap">
    </script>
</div>
</body>