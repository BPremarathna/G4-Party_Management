<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9c1531a844.js" crossorigin="anonymous"></script>

    <title>DREAM | PARTY PLANNING</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand">
		 <img class="logo-img" src="images/logo.png"  width="60" height="60"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
                <a class="nav-link" href="{{route('welcome')}}">HOME</a>
              </li>
      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SERVICES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('birthday')}}">BIRTHDAY PARTIES</a>
                  <a class="dropdown-item" href="{{route('engage')}}">ENGAGEMENTS</a>
                </div>
      <li class="nav-item">
                <a class="nav-link" href="{{route('gallery')}}">GALLERY</a>
              </li>
      <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">CONTACT US</a>
              </li>
      <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">LOGIN</a>
              </li>
      </ul>
      <form class="search">
        @csrf
        <input type="text" placeholder="SEARCH" class="search_input">
        <button type="button" class="search_btn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
      </div>
      </div>
      </nav>
      <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
            <div class="overlay"></div>
            <div class="carousel-caption">
              <h6>WELCOME TO DREAM</h6>
              <p>Your Preferred Exquisite Party Planner In Sri Lanka</p>
            </div>
            </div>


      <div class="carousel-item">
            <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
            <div class="overlay"></div>
            <div class="carousel-caption">
              <h6>WELCOME TO DREAM</h6>
              <p>Your Preferred Exquisite Party Planner In Sri Lanka</p>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
        <div class="overlay"></div>
        <div class="carousel-caption">
          <h6>WELCOME TO DREAM</h6>
          <p>Your Preferred Exquisite Party Planner In Sri Lanka</p>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="images/slide4.jpg" alt="Fourth slide">
        <div class="overlay"></div>
        <div class="carousel-caption">
          <h6>WELCOME TO DREAM</h6>
          <p>Your Preferred Exquisite Party Planner In Sri Lanka</p>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="images/slide5.webp" alt="Fifth slide">
        <div class="overlay"></div>
          <div class="carousel-caption">
            <h6>WELCOME TO DREAM</h6>
            <p>Your Preferred Exquisite Party Planner In Sri Lanka</p>
          </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="images/slide6.jpg" alt="Sixth slide">
        <div class="overlay"></div>
          <div class="carousel-caption">
            <h6>WELCOME TO DREAM</h6>
            <p>Your Preferred Exquisite Party Planner In Sri Lanka</p>
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


    <div class="feature_section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>We Will Make You Forget The Days But Remember The Memories </p>
            <h5 class="services">SERVICES WE ARE OFFERING</h5>
          </div>
        </div>
      </div>
       <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <a href="{{route('birthday')}}">
              <img src="images/b1.jpg" class="img-fluid" width="400" height="300"></a>
              <div class="card-text">
                <h3>BIRTHDAY PARTIES</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <a href="{{route('engage')}}">
              <img src="images/e1.jpg" class="img-fluid" width="400" height="300"></a>
              <div class="card-text">
                <h3>ENGAGEMENTS</h3>
              </div>
            </div>
          </div>
        </div>
      </div>


    <div class="choose-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-md-6">
            <h2 class="sec-title"><b>WELCOME TO DREAM PARTY PLANNERS</b></h2>
            <h1 class="sec-detail">Why you should choose us?</h1>
            <ul>
              <li><a class="list-item">We pay meticulous attention to the minutest of detail.</a></li>
              <li><a class="list-item">We are reliable, flexible and customer-oriented.</a></li>
              <li><a class="list-item">Our unique approach transforms your imagination into reality by delivering a perfectly executed, flawless event.</a></li>
              <li><a class="list-item">Timeliness and exceptional quality of service is rest assured.</a></li>
              <li><a class="list-item">We create the maximum value out of an affordable budget.</a></li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-md-6">
            <img src="images/why.jpg" class="img-fluid">
          </div>
        </div>
      </div>
    </div>


    <div class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-9">
            <h1 class="con-details">Let's Get Your Event Started !</h1>
          </div>
          <div class="col-3">
           <a href="{{route('contact')}}"><button type="button" class="btn btn-dark">CONTACT US</button></a>
           <a href="{{route('booking')}}"><button type="button" class="btn btn-dark">BOOK NOW </button></a>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div id="footer-area">
        <div class="container">
          <div class="row">
            <div class="col-la-6 col-sm-6 col-md-6">
              <div class="single-footer">
                <h5><b>DREAM</b></h5>
                <h6><b>Party Planning</b></h6>
                <p><b>We aim to lift the burden off your shoulders by offering you the promise of professionalism, outstanding quality and dedication in delivering you an ultimate impeccable experience.
                </b></p>
              </div>
            </div>
            <div class="col-la-6 col-sm-6 col-md-6">
              <div class="single-footer2">
                <h5><b>Our Contact</b></h5>
                <ul class="link-area">
                  <li><a href=""></a><i class="fa-solid fa-phone"></i><b>+94 71 652 3090</b></li>
                  <li><a href=""></a><i class="fa-solid fa-phone"></i><b>+94 76 565 5647</b></li>
                  <li><a href=""></a><i class="fa-solid fa-location-dot"></i><b>No.273/1, Weligampitiya, Pokunuwita</b></li>
                  <li><a href=""></a><i class="fa-solid fa-envelope"></i><b>dreampartyplanning06@gmail.com</b></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="copyright-area text-center">
              <p><b>&copy</b>2022, All Right Reserved </p>
            </div>
          </div>
        </div>
      </div>
    </div>










</body>
</html>
