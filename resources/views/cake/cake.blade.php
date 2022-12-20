<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/cakestyle.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
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

    <div class="main-image">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <img class="image" src="images/bg2.jpg" alt="main-image" width="100%" height="50%">
            <div class="caption">
              <h1><b>CAKE-ITEM SELECTION</b></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

   <div class="supplier-section1">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="supplier-1">Fammy Cakes</h3>
          <ul class="contact-area">
            <li><a href=""></a><i class="fa-solid fa-phone"></i>+94 71 706 9085</li>
            <li><a href=""></a><i class="fa-solid fa-envelope"></i>fammycakes@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>
   </div>

   <section class="cakes1" id="cakes1">
    <div class="box-container1">
      <div class="box1">
        <img src="images/cake1.jpg" class="cake-image" alt="" width="350px" height="250px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h2  class="cake-name">Chocolate Marble Cake</h2>
        <h6 class="description">Decorate with chocolate ganache,white chocolate ganache and icing flowers</h6>

        <ul>
          <li>500g  = Rs.1800</li>
          <li>1kg   = Rs.2500</li>
          <li>1.5kg = Rs.3700</li>
          <li>2kg   = Rs.4500</li>
        </ul>
        <lable for="cakes">Quantity:</lable>
        <select name="cakes" id="cakes" value="choose quantity">
          <option value="500g">500g</option>
          <option value="1kg">1kg</option>
          <option value="1.5kg">1.5kg</option>
          <option value="2kg">2kg</option>
        </select>
        <a href="#" class="btn">Add to Cart</a>
      </div>

      <div class="box1">
        <img src="images/cake2.jpg" alt="" width="350px" height="250px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h2  class="cake-name">Chocolate Marble Cake</h2>
        <h6 class="description">Decorate with chocolate ganache & grate dark chocolate, white choco chips & dark choco chips</h6>

        <ul>
          <li>500g  = Rs.1900</li>
          <li>1kg   = Rs.2600</li>
          <li>1.5kg = Rs.3800</li>
          <li>2kg   = Rs.4600</li>
        </ul>
        <lable for="cakes">Quantity:</lable>
        <select name="cakes" id="cakes" value="choose quantity">
          <option value="500g">500g</option>
          <option value="1kg">1kg</option>
          <option value="1.5kg">1.5kg</option>
          <option value="2kg">2kg</option>
        </select>
        <a href="#" class="btn">Add to Cart</a>
      </div>

      <div class="box1">
        <img src="images/cake3.jpg" alt="" width="350px" height="250px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h2  class="cake-name">Chocolate Marble Cake</h2>
        <h6 class="description">Decorate with chocolate ganache & grate dark chocolate</h6>

        <ul>
          <li>500g  = Rs.2000</li>
          <li>1kg   = Rs.2900</li>
          <li>1.5kg = Rs.3500</li>
          <li>2kg   = Rs.4400</li>
        </ul>
        <lable for="cakes">Quantity:</lable>
        <select name="cakes" id="cakes" value="choose quantity">
          <option value="500g">500g</option>
          <option value="1kg">1kg</option>
          <option value="1.5kg">1.5kg</option>
          <option value="2kg">2kg</option>
        </select>
        <a href="#" class="btn">Add to Cart</a>
      </div>

      <div class="box1">
        <img src="images/cake4.jpg" alt="" width="350px" height="250px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h2  class="cake-name">Chocolate Marble Cake</h2>
        <h6 class="description">Decorate with chocolate ganache, white choco chips</h6>

        <ul>
          <li>500g  = Rs.2900</li>
          <li>1kg   = Rs.4000</li>
          <li>1.5kg = Rs.5000</li>
          <li>2kg   = Rs.7000</li>
        </ul>
        <lable for="cakes">Quantity:</lable>
        <select name="cakes" id="cakes" value="choose quantity">
          <option value="500g">500g</option>
          <option value="1kg">1kg</option>
          <option value="1.5kg">1.5kg</option>
          <option value="2kg">2kg</option>
        </select>
        <a href="#" class="btn">Add to Cart</a>
      </div>

      <div class="box1">
        <img src="images/cake5.jpg" alt="" width="350px" height="250px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h2  class="cake-name">Coffee Cake</h2>
        <h6 class="description">Covered with butter cream frosting</h6>
        <ul>
          <li>500g  = Rs.1500</li>
          <li>1kg   = Rs.2300</li>
          <li>1.5kg = Rs.3100</li>
          <li>2kg   = Rs.4000</li>
        </ul>
        <lable for="cakes">Quantity:</lable>
        <select name="cakes" id="cakes" value="choose quantity">
          <option value="500g">500g</option>
          <option value="1kg">1kg</option>
          <option value="1.5kg">1.5kg</option>
          <option value="2kg">2kg</option>
        </select>
        <a href="#" class="btn">Add to Cart</a>
      </div>

      <div class="box1">
        <img src="images/cake6.jpg" alt="" width="350px" height="250px">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h2 class="cake-name">Chocolate Cake</h2>
        <h6 class="description">Covered with colored butter cream frosting,Decorate with chocolate ganache & edible silver balls,Sandwich with butter cream frosting</h6>
        <ul>
          <li>500g  = Rs.1500</li>
          <li>1kg   = Rs.2300</li>
          <li>1.5kg = Rs.3100</li>
          <li>2kg   = Rs.4000</li>
        </ul>
        <lable for="cakes">Quantity:</lable>
        <select name="cakes" id="cakes" value="choose quantity">
          <option value="500g">500g</option>
          <option value="1kg">1kg</option>
          <option value="1.5kg">1.5kg</option>
          <option value="2kg">2kg</option>
        </select>
        <a href="#" class="btn">Add to Cart</a>
      </div>
    </div>
  </section>

  <div class="supplier-section2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="supplier-2">The Choco Pub</h3>
          <ul class="contact-area">
            <li><a href=""></a><i class="fa-solid fa-phone"></i>+94 77 406 4734</li>
            <li><a href=""></a><i class="fa-solid fa-envelope"></i>Info.thechocopub@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>
   </div>

<section class="cakes2" id="cakes2">
  <div class="box-container2">
    <div class="box2">
      <img src="images/cake7.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h2  class="cake-name">Dinazore Theme</h2>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Ribbon cake</li>
      </ul>
      <span>Rs.14,500</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box2">
      <img src="images/cake8.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h2  class="cake-name">Plane Theme</h2>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Vanilla cake</li>
      </ul>
      <span>Rs.13,000</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box2">
      <img src="images/cake9.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h2  class="cake-name">Butterfly Theme</h2>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Vanilla cake</li>
      </ul>
      <span>Rs.16,000</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box2">
      <img src="images/cake10.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h2  class="cake-name">Elephant Theme</h2>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Ribbon cake</li>
      </ul>
      <span>Rs.14,500</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box2">
      <img src="images/cake11.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h2  class="cake-name">Lion Theme</h2>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Ribbon cake</li>
      </ul>
      <span>Rs.13,000</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box2">
      <img src="images/cake12.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h2  class="cake-name">Planda Theme</h2>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Ribbon cake</li>
      </ul>
      <span>Rs.15,000</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box2">
      <img src="images/cake13.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h2  class="cake-name">Harry Potter Theme</h2>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Ribbon cake</li>
      </ul>
      <span>Rs.18,000</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box2">
      <img src="images/cake14.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <h2  class="cake-name">Animal Theme</h2>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Ribbon cake</li>
      </ul>
      <span>Rs.16,500</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>
  </div>
</section>

<div class="supplier-section3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="supplier-3">Bake_Well Cakes</h3>
        <ul class="contact-area">
          <li><a href=""></a><i class="fa-solid fa-phone"></i>+94 70 149 2156 </li>
          <li><a href=""></a><i class="fa-solid fa-envelope"></i>bakewellcakes06@gmail.com</li>
        </ul>
      </div>
    </div>
  </div>
 </div>


<section class="cakes3" id="cakes3">
  <div class="box-container3">
    <div class="box3">
      <img src="images/cake17.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Vanilla cake</li>
        <li>Fresh flowers</li>
      </ul>
      <span>Rs.14,500</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box3">
      <img src="images/cake18.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Fresh flowers</li>
        <li>Wooden base & customized topper</li>
      </ul>
      <span>Rs.20,500</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box3">
      <img src="images/cake19.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <ul>
        <li>Fondant covering</li>
        <li>Fondant flowers and decos</li>
      </ul>
      <span>Rs.26,500</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box3">
      <img src="images/cake20.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Fresh flowers </li>
      </ul>
      <span>Rs.23,500</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box3">
      <img src="images/cake21.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <ul>
        <li>Decorated with butter cream frosting</li>
        <li>Fondant flowers </li>
      </ul>
      <span>Rs.22,500</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>

    <div class="box3">
      <img src="images/cake22.jpg" alt="" width="350px" height="350px">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <ul>
        <li>Covered with butter cream frosting</li>
        <li>Fondant flowers </li>
      </ul>
      <span>Rs.20,000</span>
      <a href="#" class="btn">Add to Cart</a>
    </div>
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
