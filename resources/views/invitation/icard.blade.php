<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cardstyle.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button1.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
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
                  <a class="dropdown-item" href="{{route('birthday')}}">BIRTHDAY PARTIES </a>
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

    <div class="container-fluid">
        <div class="hero-image">
            <img class="d-block w-100" src="images/cards1.jpg" alt="main-image"  height="600">
            <div class="hero-text">
              <h1><b>INVITATION CARDS SELECTION</b></h1>
            </div>
      </div>
    </div>

    <div class="supplier-section1">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="supplier-1">Creative Media</h3>
              <ul class="contact-area">
                <li><a href=""></a><i class="fa-solid fa-phone"></i>+94 76 803 2535</li>
              </ul>
            </div>
          </div>
        </div>
    </div>

    <section class="cakes1" id="cakes1">
        <div class="box-container1">
            <div class="box1">
                <img src="images/cards2.jpg" class="cake-image" alt="" width="400px" height="350px">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <div>
                  <label for="quantity">Quantity:</label>
                  <input type="text" id="quantity" name="quantity">
                </div>
                <br>
                <a href="#" class="btn"><b>Add to Cart</b></a>
            </div>

              <div class="box1">
                  <img src="images/cards3.jpg" class="cake-image" alt="" width="400px" height="350px">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div>
                    <label for="quantity">Quantity:</label>
                    <input type="text" id="quantity" name="quantity">
                  </div>
                  <br>
                  <a href="#" class="btn"><b>Add to Cart</b></a>
              </div>

              <div class="box1">
                <img src="images/cards4.jpg" class="cake-image" alt="" width="400px" height="350px">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <div>
                  <label for="quantity">Quantity:</label>
                  <input type="text" id="quantity" name="quantity">
                </div>
                <br>
                <a href="#" class="btn"><b>Add to Cart</b></a>
            </div>

            <div class="box1">
              <img src="images/cards5.jpg" class="cake-image" alt="" width="400px" height="350px">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div>
                <label for="quantity">Quantity:</label>
                <input type="text" id="quantity" name="quantity">
              </div>
              <br>
              <a href="#" class="btn"><b>Add to Cart</b></a>
          </div>

          <div class="box1">
            <img src="images/cards6.jpg" class="cake-image" alt="" width="400px" height="350px">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <div>
              <label for="quantity">Quantity:</label>
              <input type="text" id="quantity" name="quantity">
            </div>
            <br>
            <a href="#" class="btn"><b>Add to Cart</b></a>
        </div>

        <div class="box1">
          <img src="images/cards7.jpg" class="cake-image" alt="" width="400px" height="350px">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div>
            <label for="quantity">Quantity:</label>
            <input type="text" id="quantity" name="quantity">
          </div>
          <br>
          <a href="#" class="btn"><b>Add to Cart</b></a>
      </div>

      <div class="box1">
        <img src="images/cards8.jpg" class="cake-image" alt="" width="400px" height="350px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity">
        </div>
        <br>
        <a href="#" class="btn"><b>Add to Cart</b></a>
    </div>

    <div class="box1">
      <img src="images/cards9.jpg" class="cake-image" alt="" width="400px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <div>
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity">
      </div>
      <br>
      <a href="#" class="btn"><b>Add to Cart</b></a>
    </div>

    <button  onclick="myOnclickFn()"  class="button" >
        <span class="button-text">Custom</span>
        <span class="button-icon"><br>
        <ion-icon name="add-outline"></ion-icon></span>
    </button>
    <script>
        function myOnclickFn(){
          document.location.href="{{route('custom')}}";
        }
    </script>

    </div>
    </section>

    <div class="supplier-section1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="supplier-1">Suriya Ads</h3>
            <ul class="contact-area">
              <li><a href=""></a><i class="fa-solid fa-phone"></i>+94 76 803 2535</li>
            </ul>
          </div>
        </div>
      </div>
  </div>

  <section class="cakes1" id="cakes1">
    <div class="box-container1">
      <div class="box1">
        <img src="images/cards10.jpg" class="cake-image" alt="" width="400px" height="350px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity">
        </div>
        <br>
        <a href="#" class="btn"><b>Add to Cart</b></a>
      </div>

      <div class="box1">
        <img src="images/cards11.jpg" class="cake-image" alt="" width="400px" height="350px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity">
        </div>
        <br>
        <a href="#" class="btn"><b>Add to Cart</b></a>
      </div>

      <div class="box1">
        <img src="images/cards12.jpg" class="cake-image" alt="" width="400px" height="350px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity">
        </div>
        <br>
        <a href="#" class="btn"><b>Add to Cart</b></a>
      </div>

      <div class="box1">
        <img src="images/cards13.jpg" class="cake-image" alt="" width="400px" height="350px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity">
        </div>
        <br>
        <a href="#" class="btn"><b>Add to Cart</b></a>
      </div>

      <div class="box1">
        <img src="images/cards14.jpg" class="cake-image" alt="" width="400px" height="350px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity">
        </div>
        <br>
        <a href="#" class="btn"><b>Add to Cart</b></a>
      </div>

      <div class="box1">
        <img src="images/cards15.jpg" class="cake-image" alt="" width="400px" height="350px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity">
        </div>
        <br>
        <a href="#" class="btn"><b>Add to Cart</b></a>
      </div>

      <div class="box1">
        <img src="images/cards16.jpg" class="cake-image" alt="" width="400px" height="350px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity">
        </div>
        <br>
        <a href="#" class="btn"><b>Add to Cart</b></a>
      </div>

      <div class="box1">
        <img src="images/cards17.jpg" class="cake-image" alt="" width="400px" height="350px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity">
        </div>
        <br>
        <a href="#" class="btn"><b>Add to Cart</b></a>
      </div>

      <button  onclick="myOnclickFn()"  class="button" >
        <span class="button-text">Custom</span>
        <span class="button-icon"><br>
        <ion-icon name="add-outline"></ion-icon></span>
    </button>
    <script>
        function myOnclickFn(){
          document.location.href="{{route('custom')}}";
        }
      </script>
    </div>
  </section>

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
