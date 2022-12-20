<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/engagestyle.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
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
        <input type="text" placeholder="SEARCH" class="search_input">
        <button type="button" class="search_btn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
      </div>
      </div>
    </nav>

    <div class="engage-image">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <img class="engageimage" src="images/bg4.jpg" alt="main-image" width="100%" height="50%">
            <div class="caption">
              <h1><b>ENGAGEMENTS</b></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="enagement-details1">
      <div class="container">
        <div class="row">
           <div class="col-lg-6 col-sm-6 col-md-6">
                <h2 class="heading-1"><b>Engagements</h2></b>
                <img src="images/e2.jpg" class="engage-image">
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
                <p class="sec-title-1">“Once In A While, Right In The Middle Of An Ordinary Life, Love Gives Us A Fairytale”</p>
                <p class="sec-details-1">That fascinating moment where your hearts got interlocked , future paths intertwined carves another milestone along your memory lane.<br>
                  That mystical split second engraved deep within your heart would be sculpted into a mesmerizing glorious celebration with our assistance provided. Irrespective of the scale, complexity of your engagement an unparalleled service would be delivered to the entire client base.<br>
                  'Dream' - the pinnacle of the party management industry undertakes a three part philosophy:</p>
            </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
              <div class="col-lg-12 col-sm-12 col-md-12">
                <p class="sec-details-2">
                   intricate planning, seamless execution and topnotch professionalism in rendering a superior quality customer centric service. So under the immediate constant supervision of 'Dream' your engagement would nevertheless be an enthralling experience executed without a hitch.<br>
                  Amalgamating the novel trends in the industry your engagement, the inception to a new chapter will be smoothly orchestrated to echo the very sentiments of the couple. Handover your overwhelming burden to us and enjoy to the fullest capacity on your big day!
                </p>
              </div>
        </div>
      </div>
    </div>

    <div class="engagement-details2">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-md-6">
            <img src="images/e3.jpg" class="image-fluid1" width="550px" height="350px">
            <img src="images/e4.jpg" class="image-fluid2" width="550px" height="350px">
          </div>
          <div class="col-lg-6 col-sm-6 col-md-6">
            <h2 class="heading-2"><b>What We Provide?</b></h2>
            <div>
              <ul class="item">
                <li class="item-list"><a class="item-link" href="{{route('venue')}}">Venue & Menu Selection</a></li>
                <li class="item-list"><a class="item-link" href="{{route('decoration')}}">Decoration</a></li>
                <li class="item-list"><a class="item-link" href="{{route('cake')}}">Cake</a></li>
                <li class="item-list"><a class="item-link" href="{{route('photo')}}">Photography</a></li>
                <li class="item-list"><a class="item-link" href="{{route('entertain')}}">Entertainment</a></li>
                <li class="item-list"><a class="item-link" href="{{route('icard')}}">Invitation Cards</a></li>
              </ul>
            </div>
            <div class="item-image">
              <img src="images/e5.jpg" class="image-fluid" width="550px" height="331px">
            </div>
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
