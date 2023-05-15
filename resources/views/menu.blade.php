<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Restaurant Name | Menu</title>
        <link rel="icon" type="image/x-icon"  href="{{asset('img/iconyellow.png')}}">
        <link href="
https://cdn.jsdelivr.net/npm/swiper@9.2.4/modules/scrollbar/scrollbar.min.css
" rel="stylesheet">
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/
css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/menu.css')}}"/>
    </head>
    <body>
        <header>
            <a href = "{{ url('/') }}" class="logo"><img src="{{asset('img/logo0.jpg')}}"></a>
            <div class="bx bx-menu" id="menu-icon"></div>

            <div class="navbar"> 
                <div><a href="{{ url('/') }}">Home</a></div>
                <div><a href="{{ url('/') }}">About</a></div>
                <div><a href="{{ url('/') }}">Menu</a></div>
                <div><a href="{{ url('/') }}">Service</a></div>
                <div><a href="{{ url('/') }}">Contact</a></div>
                <div class="cartLI"><a href="{{ url('/cart') }}"><i class='bx cart bx-cart-alt'><span class="cart-badge">0</span></i></a></div>
            </div>
        </header>
            <div class="title">
                <h4>Our Menu</h4>
            </div>
            <div class="title1">
            <p class="p"></p>
        </div>
        <section class="menu " id="menu">
            <h1> Beef Burger</h1>
            <div class="outer_div">
            <div class="menu-container">
                @foreach ($beefProducts as $beefProduct)
                <div class="box ">
                    <div class="box-img">
                        <img src="{{asset('img//products/' . $beefProduct->picture)}}">
                    </div>
                    <h2>{{$beefProduct->name}}</h2>
                    <h3>{{$beefProduct->description}}</h3>
                    <span>₪{{$beefProduct->price}}</span>
                    <div class="input-group">
                        <button type="button" class="minus-btn" onclick="decreaseNumber()">-</button>
                        <input class="quantity-input-{{$beefProduct->id}}" type="number" productId="{{$beefProduct->id }}" id="quantity-input" value="1">
                        <button type="button" class="plus-btn" onclick="increaseNumber()">+</button>
                    </div>
                    <div class="size">
                        <label>120</label>
                        <input type="radio" value="120" name="size"/>
                        <label>180</label>
                        <input type="radio" value="180" name="size"/>
                        <label>320</label>
                        <input type="radio" value="320" name="size"/>
                    </div>
                    <button type="button" class="add-to-cart-btn" onclick="addToCart({{$beefProduct->id}})">Add to Cart</button>
                </div>
            @endforeach
                
            </div>
            </div>
        </section>
        <p class="for_section"></p>
        <section class="menu " id="menu">
            <h1 class="h1"> Chicken Burger</h1>
            <div class="outer_div">
            <div class="menu-container">
                @foreach ($chickenProducts as $chickenProduct)
                <div class="box ">
                    <div class="box-img">
                        <img src="{{asset('img//products/' . $chickenProduct->picture)}}">
                    </div>
                    <h2>{{$chickenProduct->name}}</h2>
                    <h3>{{$chickenProduct->description}}</h3>
                    <span>₪{{$chickenProduct->price}}</span>
                    <div class="input-group">
                        <button type="button" class="minus-btn" onclick="decreaseNumber()">-</button>
                        <input class="quantity-input-{{$chickenProduct->id}}" type="number" id="quantity-input" value="1">
                        <button type="button" class="plus-btn" onclick="increaseNumber()">+</button>
                    </div>
                    <div class="size">
                        <label>120</label>
                        <input type="radio" value="120" name="size"/>
                        <label>180</label>
                        <input type="radio" value="180" name="size"/>
                        <label>320</label>
                        <input type="radio" value="320" name="size"/>
                    </div>
                    <button type="button" class="add-to-cart-btn" onclick="addToCart({{$chickenProduct->id}})">Add to Cart</button>
                </div>
            @endforeach
            </div>
            </div>
        </section>
        <p class="for_section"></p>
        <section class="menu " id="menu">
            <h1 class="h1">Appetizers</h1>
            <div class="outer_div">
            <div class="menu-container">
                
                @foreach ($appetizerProducts as $appetizerProduct)
                <div class="box ">
                    <div class="box-img">
                        <img src="{{asset('img//products/' . $appetizerProduct->picture)}}">
                    </div>
                    <h2>{{$appetizerProduct->name}}</h2>
                    <h3>{{$appetizerProduct->description}}</h3>
                    <span>₪{{$appetizerProduct->price}}</span>
                    <div class="input-group">
                        <button type="button" class="minus-btn" onclick="decreaseNumber()">-</button>
                        <input class="quantity-input-{{$appetizerProduct->id}}" type="number" id="quantity-input" value="1">
                        <button type="button" class="plus-btn" onclick="increaseNumber()">+</button>
                    </div>
                    <div class="size">
                        <label>Cheese</label>
                        <input type="checkbox" value="Cheese" />
                        <label>Jalapeno</label>
                        <input type="checkbox" value="Jalapeno" />
                    </div>
                    <div class="size">
                        <span>+ ₪5.00 for each</span>
                    </div>
                    <button type="button" class="add-to-cart-btn" onclick="addToCart({{$appetizerProduct->id}})">Add to Cart</button>
                </div>
            @endforeach
              
            </div>
            </div>
        </section>

  <script src="{{asset('js/menu.js')}}"></script>
    
    </body>
</html>
