<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>90's Burger | Home</title>
        <link rel="icon" type="image/x-icon" href="{{asset('img/iconyellow.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/swiper@9.2.4/modules/scrollbar/scrollbar.min.css
" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}" />
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/
css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  </head>
    <body>
        <header>
            <a href ="{{ url('/') }}" class="logo"><img src="{{asset('img/logo0.jpg')}}"></a>
            <div class="bx bx-menu" id="menu-icon"></div>

            <ul class="navbar"> 
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                @guest
                    <li><a href="{{ url('/login') }}">LogIn</a></li>
                @endguest
                @auth
                    <li><a id="logout" href="#">LogOut</a></li>    
                @endauth
                
                <li class="cartLI"><a href="{{ url('/cart') }}"><i class='bx cart bx-cart-alt'><span class="cart-badge">0</span></i></a></li>
            </ul>
        </header>
    <!--home starts from here ^-^ -->
            <section class="home" id="home">
                <div class="home-text">
                    <h1>WELCOME TO 90s</h1>
                    <h2>Food Is The <br> Most Precious Thing</h2>
                    <a href="{{ url('/menu') }}" class="btn">Today's Menu</a>
                </div>
                <div class="home-img">
                    <img src="{{asset('img/burger2.jpg')}}">
                </div>
            </section>
    <!--About Us starts from here ^-^ -->
        <section class="about" id="about">
            <div class="about-img">
                <img src="{{asset('img/aboutus.jpg')}}" >
            </div>

            <div class="about-text">
                <span>About Us</span>
                <h2>We speak the good <br> food language </h2>
                <p>
                    Here at 90s Burger, we know what goes into our food. From our house mayo and special dipping sauces, to our hand-cut, twice fried french fries,
                    we’re all about quality ingredients. Our patties are no exception. Freshly ground Angus beef, made from a proprietary blend of cuts. We tested numerous 
                    versions to bring you flavorful, juicy meat that is sure to satisfy.
                </p>
                <a href="{{ url('/') }}" class="btn">Learn More</a>
            </div>
        </section>
     <!--Menu starts from here ^-^ -->
     <section class="menu " id="menu">
        <div class="heading"> 
            <span>Food Menu</span>
            <h2>Fresh taste and great price</h2>
        </div>
            <div class="">
            <div class="menu-container">
                @foreach ($products as $product)
                    <div class="box ">
                        <div class="box-img">
                            <img src="{{asset('img//products/' . $product->picture)}}">
                        </div>
                        <h2>{{$product->name}}</h2>
                        <h3>{{$product->description}}</h3>
                        <span>₪{{$product->price}}</span>
                        <i class='bx bx-cart-alt'></i>
                    </div>
                @endforeach
                
            </div>
            </div>
            <button type="submit" class="buttonMenu"><a class="Menu" href="{{ url('/menu') }}">Our Menu</a></button>
    </section>
    
     <!--service starts from here ^-^ -->
     <section class="service" id="service">
        <div class="s-box-img">
            <img src="{{asset('img/service.jpg')}}">
        </div>

        <div class="service-container">

            <div class="s-box">
                <span>Services</span>
                <h2>We provide the best quality food</h2>
                <p>We have lots of resources for you, including great recipes, supplier information and success stories from other Chefs. 
                    Our employees will make sure you get the best service.<br>
                    you can also use our application for faster ordering, it's available on both Android & IOS.
                    <a href="https://linktr.ee/90sBurger" target="_blank">Click here to install 90's Burger App</a>
                </p>
            </div>
        </div>
     </section>
 <!--cta starts from here ^-^ -->
 <section class="cta">
    <h2>We make high quality food <br> Everyday </h2>
    <a href="#" class="btn">Let's Talk!</a>
 </section>
  <!--footer starts from here ^-^ -->
  <section id="contact">
    <div class="footer">
        <div class="main">
            <div class="col">
                <h4>Menu Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">service</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

            </div>
            <div class="col">
                <h4>Our service</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>information</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Contact Us</h4>
                <div class="social">
                    <a href="https://www.facebook.com/90sBurger" target="_blank"><i class='bx bxl-facebook'></i></a> 
                    <a href="https://www.instagram.com/ninetiesburger90s/?hl=en" target="_blank"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                </div>

            </div>
        </div>

    </div>

  </section> 
  
  <script src="{{asset('js/script.js')}}">
  </script>
    </body>
</html>