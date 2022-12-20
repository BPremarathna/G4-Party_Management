<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&family=Pacifico&family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
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
            <img class="d-block w-100" src="images/photo4.jpg" alt="first photo" height="600">
            <div class="overlay"></div>
            <div class="hero-text">
            <h1><b>VENUE & MENU SELECTION</b></h1></div>
        </div>
    </div>
    <br>
    <br>
    <div class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="hotel1">Cinnamon Lakeside Colombo</h5>
                    <ul class="contact-area">
                      <li>
                        <a href=""></a><i class="fa-solid fa-phone"></i>0112491000</li>
                      <li><a href=""></a><i class="fa-solid fa-envelope"></i>115, Sir Chittampalam A Gardiner Mawatha,00200</li>
                    </ul>
                    </div>
            </div>
        </div>

    </div>
    <div class="container1">
      <div class="row">
        <div class="column">
          <div class="images">
           <img src="images/image_9be8b09c61.jpg" alt="cinnamon2" width="400px" height="300px">
          </div>
        </div>
        <div class="column">
          <div class="cinnamonpara">
            <p>Cinnamon Lakeside Colombo is your five-star resort in the city, offering breath-taking views of the Beira lake, and spaces and experiences that are inspired by guest passions, coupled with our warm and intuitive hospitality. We celebrate our guests’ endless appetite for what’s new/next, from parties by the lake to new F&B concepts that cater to diverse guest preferences, to personalizing every moment of your stay. Cinnamon Lakeside Colombo is the ideal place for you to kick back and relax with your family and friends and escape the chaos of the city life, while being in the city.
            </p>
          </div>
  </div>
  </div>


  <section class="home"  id="home">
       <div class="slider">
        <div class="display-container">
          <span><h5>Kings Court</h5></span>
          <div class="himage">
            <img src="images/regular-large-2e9-7274_cinnamon_lakeside_4.jpg" alt=""  width="500px" height="300px">
          </div>
          <div class="box1">
            <div><input type="radio" id="B1" name="b1">Setup – Boardroom,Capacity – 100 - Rs.100,000.00(for one day)</div>
            <div><input type="radio" id="B2" name="b2">Setup – Theater, Capacity – 600  -  Rs.250,000.00(for one day)</div>
            <div><input type="radio" id="B3" name="b3">Setup – Cocktail, Capacity – 600  -  Rs.300,000.00(for one day)</div>
            <div><input type="radio" id="B4" name="b4">Setup – Banquet, Capacity – 400  -  Rs.200,000.00(for one day)</div>
            <a href="#" class="btn">Book Now</a>
            </div>
            </div></div>

            <div class="display-container">
              <span><h5>Earls Court</h5></span>
              <div class="himage">
                <img src="images/344b7b57979099b6ee8669e5b503ab0c.jpg" alt="" width="500px" height="300px">
              </div>
              <div class="box1">
                <div><input type="radio" id="B6" name="b6">Setup – Theater , Capacity – 60   -  Rs.75,000.00(for one day)</div>
                <div><input type="radio" id="B7" name="b7">Setup – Cocktail, Capacity – 100  -  Rs.100,000.00(for one day)</div>
                <div><input type="radio" id="B8" name="b8">Setup – Banquet , Capacity – 100  -  Rs.100,000.00(for one day)</div>
                <a href="#" class="btn">Book Now</a>
              </div>
            </div></div>



          </div>
</section>

     <section class="menu" id="menu">
          <h4 class="sub-heading">OUR MENU</h4>

          <div class="box-container">

            <div class="box">
              <img src="images/thai6.jpg" width="500px" height="300px">
              <h5>Cinnamon Lake Side Special Menu 1</h5>
              <p>Welcome drink <br>
                 Egg Mayonnaise<br>
                 Potato Salad<br>
                 Russian Salad<br>
                 Egg Fried Rice or Chicken Fried Rice<br>
                 Egg Noodles<br>
                 Chilli Chicken<br>
                Fish Stew<br>
                Cashew Nuts and Green Peas Curry<br>
                Potato Tempered / Devilled Mushroom<br>
                Dhal Tempered<br>
                Brinjal Moju<br>
                Cutlet<br>
                Papadam/Mango chutney/Dry Chili/Lime Pickle/Sprats<br>
                 Desserts 04<br>
                               <li>Jelly and Custard</li>
                               <li>Fresh Cut fruits on Mirror</li>
                              <li>Watalappan</li>
                              <li>Ice cream</li>
                              <span><b>Rs. 2,400.00 (PER PERSON)</b></span><br>
                              <div> <label for="nguest">No. of Guests:</label>
                              <input type="text" id="nguest" name="nguest"></div><br>
                              <a href="#" class="btn">Add to Cart</a>
                           </div>

                           <div class="box">
                            <img src="images/menu1.jpg" width="500px" height="300px">
                            <h5>Cinnamon Lake Side Special Menu 2</h5>
                            <p>Welcome drink <br>
                              Vegetable Soup<br>
                              Fresh Cut Vegetable Salad<br>
                              Tomato Onion Cucumber Salad/Egg <br>
                              Mayonnaise<br>
                              Plain Steamed Rice or Red Rice<br>
                              Vegetable Fried Rice<br>
                              Vegetable and Egg Noodles<br>
                              Chinese Chilli Chicken/Chicken Kurma<br>
                               Devilled Fish<br>
                              Devilled Prawns<br>
                              Cashew with mixed Vegetable Curry<br>
                              Potato Tempered<br>
                              Brinjal Pineapple pahi<br>
                              Dhal Tempered<br>
                              Papadam/Mango chutney/Dry Chili/Lime Pickle/Sprats/Culet<br>
                              Desserts 04<br>
                                             <li>Jelly and Custard</li>
                                             <li>Fresh Cut fruits on Mirror</li>
                                            <li>Watalappan</li>
                                            <li>Ice cream</li>
                                            <span><b>Rs. 2,650.00 (PER PERSON)</b></span><br>
                                            <div> <label for="nguest">No. of Guests:</label>
                                              <input type="text" id="nguest" name="nguest"></div><br>
                                            <a href="#" class="btn">Add to Cart</a>
                                         </div>
                                         </div>
                                         </section>

                                          <br>
                                          <br>
                                         <div class="feature-section">
                                          <div class="container">
                                              <div class="row">
                                                  <div class="col-12">
                                                      <h5 class="hotel1">Taj Bentota Resort & Spa </h5>
                                                      <ul class="contact-area">
                                                        <li>
                                                          <a href=""></a><i class="fa-solid fa-phone"></i>0345555555</li>
                                                        <li><a href=""></a><i class="fa-solid fa-envelope"></i>National Holiday Resort, Galle, Bentota 80500</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>

                                        </div>
                                        <div class="container1">
                                          <div class="row">
                                            <div class="column">
                                              <div class="images">
                                               <img src="images/17327413.jpg" alt="taj2" width="450px" height="300px">
                                              </div>
                                            </div>
                                            <div class="column">
                                              <div class="cinnamonpara">
                                                <p>Taj Bentota Resort & Spa, delightfully located along one of the finest beaches on the South West coast, is riding on a fresh new wave. But, it remains one of the best resorts in Sri Lanka, blending with the Indian Ocean. The fun never stops here! There's a new buzz too! Our renewed living spaces, fine restaurants, high energy bar and relaxing spa will make you go ‘Ah!’ The Chef remains eager to wow you with specially designed meals. Marvel at the high wood ceiling in the lobby of this 5 star hotels in Sri Lanka.
                                                </p>
                                              </div>
                                      </div>
                                      </div>

                                      <section class="home"  id="home">
                                        <div class="slider">
                                         <div class="display-container">
                                           <span><h5>The Grand Ball Room</h5></span>
                                           <div class="himage">
                                             <img src="images/cq5dam.web.756.756.jpeg" alt=""  width="500px" height="300px">
                                           </div>
                                           <div class="box1">
                                             <div><input type="radio" id="B9" name="b9">Setup - Theatre : 550 - Rs.250,000.00(for one day)</div>
                                             <div><input type="radio" id="B10" name="b10">Setup – Circular:250- Rs.250,000.00(for one day)</div>
                                             <div><input type="radio" id="B11" name="b11">Setup – Boardroom:80- Rs.250,000.00(for one day)</div>
                                             <div><input type="radio" id="B12" name="b12">Setup – Classroom :240-Rs.250,000.00(for one day)</div>
                                             <a href="#" class="btn">Book Now</a>
                                             </div>
                                             </div></div>

                                             <div class="display-container">
                                              <span><h5>Grand Hall</h5></span>
                                              <div class="himage">
                                                <img src="images/cq5dam.web.323.323.jpeg" alt="" width="500px" height="300px">
                                              </div>
                                              <div class="box1">
                                                <div><input type="radio" id="B13" name="b13">Setup - Theatre : 200 - Rs.175,000.00(for one day)</div>
                                             <div><input type="radio" id="B14" name="b14">Setup – Circular:120- Rs.175,000.00(for one day)</div>
                                             <div><input type="radio" id="B15" name="b15">Setup – Boardroom:75- Rs.175,000.00(for one day)</div>
                                             <div><input type="radio" id="B16" name="b16">Setup – Classroom :100-Rs.175,000.00(for one day)</div>

                                                <a href="#" class="btn">Book Now</a>
                                              </div>
                                            </div></div>



                                          </div>
                                </section>

                                <section class="menu" id="menu">
                                  <h4 class="sub-heading">OUR MENU</h4>

                                  <div class="box-container">

                                    <div class="box">
                                      <img src="images/shutterstock_437677426.jpg" width="500px" height="300px">
                                      <h5>Taj Function Special Menu 1</h5>
                                      <p>Welcome drink<br>
                                         Salads & Starter
                                                  <div><input type="radio" id="m1">Green Salad</div>
                                                  <div><input type="radio" id="m2">Potato Salad with Spring Onion</div>
                                                  <div><input type="radio" id="m3">Salad with diced Tomato & Onion</div><br>
                                         Vegetable
                                                  <div><input type="radio" id="m4">Cashew & Green Pea Curry</div>
                                                  <div><input type="radio" id="m5">Devilled Mushroom</div>
                                                  <div><input type="radio" id="m6">Spinch & Dhal Curry</div><br>
                                         Rice
                                                 <div><input type="radio" id="m7">Vegetable Fried Rice</div>
                                                 <div><input type="radio" id="m8">Chicken Fried Rice</div>
                                                 <div><input type="radio" id="m9">Vegetable Biriyani</div><br>
                                        Chicken<br>
                                                <div><input type="radio" id="m10">Roasted Chicken with Spicy Sauce</div>
                                                <div><input type="radio" id="m11">Chicken Khorma</div>
                                                <div><input type="radio" id="m12">Chicken masala</div><br>
                                        Papadam<br>
                                        Mango Chutney<br>
                                        Fried Sprats & Dry Chili<br>
                                        Lime Pickle<br>
                                        Cuttlets<br><br>
                                        Desserts 03<br>

                                                    <li>Watalappan</li>
                                                    <li>Fresh Fruits on Mirror</li>
                                                    <li>Jelly & Custard</li><br>

                                                    <span><b>Rs. 2,400.00 (PER PERSON)</b></span><br>
                                                    <div> <label for="nguest">No. of Guests:</label>
                                                    <input type="text" id="nguest" name="nguest"></div><br>
                                                      <a href="#" class="btn">Add to Cart</a>
                                                   </div>

                                                   <div class="box">
                                                    <img src="images/celiac-disease-diet-1296x728-feature.jpg" width="500px" height="300px">
                                                    <h5>Taj Function Special Menu 2</h5>
                                                    <p>Welcome drink <br>
                                                       Salads & Starter<br>
                                                       <div><input type="radio" id="m10">Green Salad</div>
                                                       <div><input type="radio" id="m11">Carrot & Curd salad</div>
                                                       <div><input type="radio" id="m12">Potato Salad with diced Tomato & Onion</div><br>
                                                       Rice
                                                       <div><input type="radio" id="m13">Vegetable Fried Rice</div>
                                                       <div><input type="radio" id="m14">Chicken Fried Rice</div>
                                                       <div><input type="radio" id="m15">Seafood Nasi Goreng</div><br>
                                                       Sea Food
                                                       <div><input type="radio" id="m16">Devilled Seafood</div>
                                                       <div><input type="radio" id="m17">Sweet & Sour Prawns</div><br>
                                                       Vegetable
                                                       <div><input type="radio" id="m18">Cashew & Green Pea Curry</div>
                                                       <div><input type="radio" id="m19">Devilled Mushroom</div>
                                                       <div><input type="radio" id="m20">Spinch & Dhal Curry</div>
                                                       <div><input type="radio" id="m20">Battered Mushroom</div><br>

                                                       Papadam<br>
                                                       Mango Chutney<br>
                                                       Fried Sprats & Dry Chili<br>
                                                       Lime Pickle<br>
                                                       Cuttlets<br><br>
                                                       Desserts 03<br>

                                                             <li>Watalappan</li>
                                                             <li>Fresh Fruits on Mirror</li>
                                                             <li>Jelly & Custard</li>
                                                             <li>Chocolate Biscuit Pudding & Icecream</li>
                                                             <li>Sponge Mouse</li><br>

                                                             <span><b>Rs.3,750.00 (PER PERSON)</b></span><br>
                                                             <div> <label for="nguest">No. of Guests:</label>
                                                              <input type="text" id="nguest" name="nguest"></div><br>
                                                                    <a href="#" class="btn">Add to Cart</a>
                                                                 </div>
                                                                 </div>
                                                                 </section>

                                                                 <br>
                                                                 <br>
                                         <div class="feature-section">
                                          <div class="container">
                                              <div class="row">
                                                  <div class="col-12">
                                                      <h5 class="hotel1">The Barnhouse Studio,Panadura </h5>
                                                      <ul class="contact-area">
                                                        <li>
                                                          <a href=""></a><i class="fa-solid fa-phone"></i>0345555555</li>
                                                        <li><a href=""></a><i class="fa-solid fa-envelope"></i>No 155/9, 2nd Lane, Galpoththa Rd, Panadura 12500</li>
                                                      </ul>

                                                  </div>
                                              </div>
                                          </div>

                                        </div>
                                        <div class="container1">
                                          <div class="row">
                                            <div class="column">
                                              <div class="images">
                                               <img src="images/Image-2-660x400.jpg" alt="barn2" width="450px" height="300px">
                                              </div>
                                            </div>
                                            <div class="column">
                                              <div class="cinnamonpara">
                                                <p>The architecture  of The Barnhouse has been constructed to harmoniously blend in with its environment rather than impede the beauty of its natural surrounding, giving the picturesque location  a unique personality that fascinates each and every one of its guests. The architecture is designed with rustic flair and adorned the upcycled décor, making the venue a photographer’s dream and an exceptional place for creating unforgettable memories.
                                                </p>
                                              </div>
                                      </div>
                                      </div>

                                      <section class="home"  id="home">
                                        <div class="slider">
                                         <div class="display-container">
                                           <span><h5>The Main Barn Hall</h5></span>
                                           <div class="himage">
                                             <img src="images/download (10).jpg" alt=""  width="500px" height="300px">
                                           </div>
                                           <div class="box1">
                                             <div><input type="radio" id="B17" name="b9">Rs. 300,000.00(per one day)</div>

                                             <a href="#" class="btn">Book Now</a>
                                             </div>
                                             </div></div>

                                             <div class="display-container">
                                              <span><h5>The Garden Venue</h5></span>
                                              <div class="himage">
                                                <img src="images/DSC01724-1.jpg" alt=""  width="500px" height="300px">
                                              </div>
                                              <div class="box1">
                                                <div><input type="radio" id="B17" name="b9">Rs. 250,000.00(per one day)</div>

                                                <a href="#" class="btn">Book Now</a>
                                                </div>
                                                </div></div>
                                              </div>
                                            </section>


                                            <section class="menu" id="menu">
                                              <h4 class="sub-heading">OUR MENU</h4>

                                              <div class="box-container">

                                                <div class="box">
                                                  <img src="images/indian-food-feast-1e0586b.jpg" width="600px" height="300px">
                                                  <h5>The Bronze Menu</h5>
                                                  <p>Welcome drink –fresh juice / mojito <br>
                                                     One soup<br>
                                                     One appetizer<br>
                                                     Four salads<br>
                                                    Two rice dishes (rice - noodles - pasta)<br>
                                                    Two meat dishes (chicken - beef - pork)<br>
                                                    One fish dish<br>
                                                    Two vegetable dishes<br>
                                                    Four desserts<br>

                                                          <span><b>Rs. 5,700.00 (PER PERSON)</b></span><br>
                                                          <div> <label for="nguest">No. of Guests:</label>
                                                            <input type="text" id="nguest" name="nguest"></div><br>
                                                                  <a href="#" class="btn">Add to Cart</a>
                                                               </div>

                                                               <div class="box">
                                                                <img src="images/images (4).jpg" width="600px" height="300px">
                                                                <h5>The Silver Menu</h5>
                                                                <p>Welcome drink –fresh juice or mojito<br>
                                                                  Two soups<br>
                                                                  Two appetizers<br>
                                                                  Five salads<br>
                                                                  Three rice dishes (rice - noodles - pasta)<br>
                                                                  Two meat dishes (chicken - beef – pork)<br>
                                                                   Two fish dishes (fish –Mixed seafood)<br>
                                                                  Three vegetable dishes<br>
                                                                  Five desserts<br>


                                                                        <span><b>Rs. 6,200.00 (PER PERSON)</b></span><br>
                                                                        <div> <label for="nguest">No. of Guests:</label>
                                                                          <input type="text" id="nguest" name="nguest"></div><br>
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
                                                                                        <li><h href=""></a><i class="fa-solid fa-envelope"></i><b>dreampartyplanning06@gmail.com</b></li>
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


































