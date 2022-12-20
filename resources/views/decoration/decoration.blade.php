<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/decostyle.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9c1531a844.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@300&display=swap" rel="stylesheet">

    <title>DREAM | PARTY PLANNING</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand">
		 <img class="logo-img" src="images/logo.png" width="60" height="60"></a>
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
    <div class="container-fluid">
      <div class="hero-image">
        <img class="d-block w-100" src="images/deco.jpg" alt="first photo" height="600px">
        <div class="hero-text">
        <h1><b>DECORATION SELECTION</b></h1></div>
      </div>
    </div>

   <section class="dishes" id="dishes">

        <h1 class="heading">BIRTHDAY</h1>
        <h3 class="sub-heading">Party City</h3>
        <ul class="contact-area">
          <li><a href=""></a><i class="fa-solid fa-phone"></i> +94 70 145 5800</li>
          <li><a href=""></a><i class="fa-solid fa-envelope"></i> partycity@gmail.com</li>
        </ul>


        <div class="box-container">

            <div class="box">

                  <img src="images/1.jpg" alt="" width="350px" height="350px">
                  <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
              </div>
                  <h3>~Dark Blue Deco~</h3>

                  <span>Rs.5800</span><br>
                  <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/2.jpg" alt="" width="350px" height="30px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Pastal Mix Deco~</h3>

            <span>Rs.5650</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

           <div class="box">

            <img src="images/3.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Pastal Pinky Deco~</h3>

            <span>Rs.5100</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/4.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Light Blue Deco~</h3>

            <span>Rs.4150</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/5.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Silver & Comfetti Deco~</h3>

            <span>Rs.3950</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/6.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Love Heart Deco~</h3>

            <span>Rs.3650</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/7.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~White & Shine Deco~</h3>

            <span>Rs.3400</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/8.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Grey & Yellow Deco~</h3>

            <span>Rs.3350</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/9.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Gold Mini Deco~</h3>

            <span>Rs.3200</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/10.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Pink & Gold Deco~</h3>

            <span>Rs.3100</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/11.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Blue & Silver Deco~</h3>

            <span>Rs.2950</span><br>
            <a href="#" class="btn">add to cart</a>
          </div>

          <div class="box">

            <img src="images/12.jpg" alt="" width="350px" height="350px">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Balloon Flowers Deco~</h3>

            <span>Rs.2850</span><br>
            <a href="#" class="btn">add to cart</a>
    </div>
</div>
   </section>

  <section class="dishes-1" id="dishes-1">


        <h3 class="sub-heading-1">Party Looks by Savi</h3>
        <ul class="contact-area">
          <li><a href=""></a><i class="fa-solid fa-phone"></i> +94 71 439 9888</li>
          <li><a href=""></a><i class="fa-solid fa-envelope"></i> partylooksbysavi@gmail.com</li>
        </ul>

        <div class="box-container-1">

          <div class="box-1">

            <img src="images/i.jpeg" alt="">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Dorable Bear Deco~</h3>

            <ul>
              <li>light up marquee letters</li>
              <li>White & Blue Balloon Arch</li>
              <li>Big Dot Teddy Bear 2</li>
              <li>Shine Gold Letter Banner</li>
            </ul>


            <span>Rs.4500</span><br>
            <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-1">

      <img src="images/ii.jpeg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Jungle Theme Deco~</h3>

      <ul>
        <li>light up marquee Numbers</li>
        <li>Yellow & Green Balloon Arch</li>
        <li>Jungle Safari Animal Balloons</li>
        <li>Shine Gold Letter Banner</li>
      </ul>


      <span>Rs.5000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

     <div class="box-1">

      <img src="images/iii.jpg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Hello Kitty Deco~</h3>

      <ul>
        <li>light up marquee letters</li>
        <li>Pink, White & Blue Balloon Arch</li>
        <li>2 Hello Kitty Foils Ballons</li>
        <li>Shine Gold Letter Banner</li>
      </ul>


      <span>Rs.7000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-1">

      <img src="images/iv.jpg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Mixed Yellow & Black Deco~</h3>

      <ul>
        <li>Yellow and Black Balloon Arch</li>
        <li>Black & Yellow Curtain Backdrop</li>
        <li>Table Deco</li>
      </ul>


      <span>Rs.12,000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-1">

      <img src="images/v.jpg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~White & Gold Deco~</h3>

      <ul>
        <li>light up marquee Numbers</li>
        <li>White and Gold Balloon Arch</li>
      </ul>


      <span>Rs.18,000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-1">

      <img src="images/vi.jpg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Wood Pallet with Bear Deco~</h3>

      <ul>
        <li>White & Blue Balloon Arch</li>
        <li>White Letter Banner</li>
        <li>Blue & Light Blue Bunting Banner</li>
      </ul>


      <span>Rs.20,000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-1">

      <img src="images/vii.jpg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Mermaid Theme Deco~</h3>

      <ul>
        <li>Gold,Red,White & Pink Mermaid Balloon Arch</li>
        <li>light up marquee Numbers</li>
        <li>Gold Letter Banner</li>
      </ul>


      <span>Rs.22000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-1">

      <img src="images/viii.jpg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Mickey Mouse Deco~</h3>

      <ul>
        <li>Mickey Mouse Blue Balloons Arch</li>
        <li>Blue Letter Banner</li>
        <li>3 Small Size mickey Foil Balloon</li>
      </ul>


      <span>Rs.9000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

  </div>

</section>

<section class="dishes-2" id="dishes">

  <h1 class="heading-2">ENGAGEMENTS</h1>
  <h3 class="sub-heading-2">PARTY TIMES by IMASHI</h3>
  <ul class="contact-area">
    <li><a href=""></a><i class="fa-solid fa-phone"></i> +94 77 870 7896</li>
    <li><a href=""></a><i class="fa-solid fa-envelope"></i> partytimes.imashi@gmail.com</li>
  </ul>

  <div class="box-container-2">

      <div class="box-2">

            <img src="images/E-1.jpeg" alt="">
            <img src="images/E-1i.jpeg" alt="">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Green Backdrop with Flowers~</h3>

            <ul>
              <li>Table Deco</li>
              <li>Entrance</li>
              <li>artificial or natural Flowers</li>
              <li>Chairs tiffany</li>
              <li>Settee back</li>
              <li>Candle holder Stand</li>
              <li>Engage Banner - gold</li>
            </ul>


            <span>Rs.30,000</span><br>
            <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-2">

      <img src="images/E-3.jpg" alt="">
      <img src="images/E-3i.jpg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Baloon Deco~</h3>

      <ul>
        <li>Red, White, and Gold Balloon Arch</li>
        <li>Red Love Letter Balloons</li>
        <li>Table Deco</li>
        <li>Entrance</li>
        <li>Chairs tiffany</li>
        <li>Settee back</li>
        <li>Paper Heart Deco</li>
      </ul>


      <span>Rs.19,000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

     <div class="box-2">

      <img src="images/E-2.jpeg" alt="">

      <img src="images/E-2ii.jpeg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Green Backdrop Deco~</h3>

      <ul>
        <li>Table Deco</li>
        <li>Entrance</li>
        <li>Artificial or Natural Flower Arch</li>
        <li>Chairs tiffany</li>
        <li>Settee back</li>
        <li>Candle holder Stand</li>
        <li>Engage Banner - gold</li>
        <li>Silver Curtain Backdrop</li>
      </ul>


      <span>Rs.25,000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-2">

      <img src="images/E-4.jpg" alt="">
      <img src="images/E-4i.jpg" alt="">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Fairy Lights Deco~</h3>

      <ul>
        <li>96 LED Snowflake Fairy Lights</li>
        <li>Solar Hanging Glass Bottle</li>
        <li>Table Deco</li>
        <li>Entrance</li>
        <li>Chairs tiffany</li>
        <li>Settee back</li>
        <li>Blush Backdrop with Curtain Lights</li>
      </ul>


      <span>Rs.40,000</span><br>
      <a href="#" class="btn">add to cart</a>
    </div>

  </div>
  </section>

</section>

<section class="dishes-3" id="dishes">


  <h3 class="sub-heading-3">Designer Blooms</h3>
  <ul class="contact-area">
    <li><a href=""></a><i class="fa-solid fa-phone"></i> +94 70 375 0250</li>
    <li><a href=""></a><i class="fa-solid fa-envelope"></i> designerbloomslk@gmail.com</li>
  </ul>

  <div class="box-container-3">

      <div class="box-3">

            <img src="images/a.jpg" alt="">
            <img src="images/b.jpg" alt="">
            <img src="images/c.jpg" alt=""><br>
            <img src="images/d.jpg" alt="">
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Indoor~</h3>

            <ul>
              <li>Table Deco</li>
              <li>Entrance</li>
              <li>artificial or natural Flowers</li>
              <li>Chairs tiffany</li>
              <li>Settee back</li>
            </ul>


            <span>Rs.60,000</span><br>
            <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-3">

      <img src="images/ai.jpg" alt="" width="350px" height="350px">
      <img src="images/di.jpg" alt="" width="350px" height="350px">
      <img src="images/ci.jpg" alt="" width="350px" height="350px"><br>
      <img src="images/bi.jpg" alt="" width="350px" height="350px">
      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Outdoor~</h3>

      <ul>
        <li>Table Deco</li>
        <li>Entrance</li>
        <li>artificial or natural Flowers</li>
        <li>Chairs tiffany</li>
        <li>Tent</li>
      </ul>


      <span>Rs.60,500</span><br>
      <a href="#" class="btn">add to cart</a>
</div>

</div>
</section>

<section class="dishes-4" id="dishes">


  <h3 class="sub-heading-4">Deco & Design</h3>
  <ul class="contact-area">
    <li><a href=""></a><i class="fa-solid fa-phone"></i> +94 77 205 0061</li>
    <li><a href=""></a><i class="fa-solid fa-envelope"></i> decodesignsl@yahoo.com</li>
  </ul>

  <div class="box-container-4">

      <div class="box-4">

            <img src="images/AA.jpg" alt="" width="350px" height="350px">
            <img src="images/AA-i.jpg" alt="" width="350px" height="350px">
            <img src="images/AA-ii.jpg" alt="" width="350px" height="350px">
            <img src="images/100.jpg" alt="" >
            <div class="starts">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
        </div>
            <h3>~Flowers(Indoor or outdoor)~</h3>

            <ul>
              <li>Artificial or Natural Flowers</li>
              <li>Table Deco</li>
              <li>Sette back</li>
              <li>Entrance</li>
              <li>Lighting</li>
              <li>Chairs tiffany</li>
              <li>Engagement Sign</li>
            </ul>


            <span>Rs.50,000</span><br>
            <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box-4">

      <img src="images/5-ii.jpg" alt="">
      <img src="images/5-iii.jpg" alt="" >
      <img src="images/99.jpg" alt="" >
      <img src="images/98.jpg" alt="" >

      <div class="starts">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
  </div>
      <h3>~Lanterns(Indoor or Outdoor)~</h3>

      <ul>
        <li>Hanging glass/Gilded Lanterns</li>
        <li>Table Deco</li>
        <li>sette back</li>
        <li>Entrance</li>
        <li>Chairs tiffany</li>
        <li>Engagement Sign</li>
        <li>Artificial or Natural Flower Arch</li>
      </ul>


      <span>Rs.30,900</span><br>
      <a href="#" class="btn">add to cart</a>
</div>

<div class="box-4">

  <img src="images/5-i.jpg" alt="" width="350px" height="350px">
  <img src="images/5-vii.jpg" alt="" width="350px" height="350px">
  <img src="images/5-vi" alt="">
  <img src="images/97" alt="" >
  <div class="starts">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star-half-alt"></i>
</div>
  <h3>~Candles(Indoor or Outdoor)~</h3>

  <ul>
    <li>Orchids & candles(cocktail table)</li>
    <li>Table Deco</li>
    <li>sette back</li>
    <li>Entrance</li>
    <li>Chairs tiffany</li>
    <li>Engagement Sign</li>
    <li>Shine Gold Letter Banner
  </ul>


  <span>Rs.60,900</span><br>
  <a href="#" class="btn">add to cart</a>
</div>

<div class="box-4">

  <img src="images/5-x.jpg" alt="" width="350px" height="350px">
  <img src="images/5-viii.jpg" alt="" width="350px" height="350px">
  <img src="images/5-ix.jpg" alt="" width="350px" height="350px">
  <img src="images/5-xi.jpg" alt="" width="350px" height="350px">

  <div class="starts">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star-half-alt"></i>
</div>
  <h3>~Baloons(Indoor or Outdoor)~</h3>

  <ul>
    <li>Bridal shower Balloon</li>
    <li>Gold Confetti Balloons</li>
    <li>Table Deco</li>
    <li>sette back</li>
    <li>Entrance</li>
    <li>Chairs tiffany</li>
  </ul>


  <span>Rs.40,900</span><br>
  <a href="#" class="btn">add to cart</a>
</div>

  </div>

  </section>


  <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ahdzLs70DiPwGCCSG7hRV9nMKHx3Xxo&ehbc=2E312F" width="1530" height="480"></iframe>


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
