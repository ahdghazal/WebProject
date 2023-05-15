<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>90's Burger | Home</title>
        <link rel="icon" type="image/x-icon" href="{{asset('img/iconyellow.png')}}">
        <link href="{{asset('css/cart.css')}}" rel="stylesheet">
        <link href="
https://cdn.jsdelivr.net/npm/swiper@9.2.4/modules/scrollbar/scrollbar.min.css
" rel="stylesheet">
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vina+Sans&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <header>
            <a href = "{{ url('/') }}" class="logo"><img src="{{asset('img/logo0.jpg')}}" style="background: transparent;"></a>
            <div class="bx bx-menu" id="menu-icon"></div>

            <div class="navbar"> 
                <div><a href="{{ url('/') }}" >Home</a></div>
                <div><a href="{{ url('/') }}" >About</a></div>
                <div><a href="{{ url('/') }}" >Menu</a></div>
                <div><a href="{{ url('/') }}" >Service</a></div>
                <div><a href="{{ url('/') }}" >Contact</a></div>
            </div>
        </header>
        <div>
            <h1>Cart Page <i class='bx bx-cart-alt'></i></h1>
        </div>
        <section>
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>product</th>
                    <th style="padding-left: 25px;">quantity</th>
                    <th>subtotal</th>
                    <th>Total</th>
                </tr>
                <tr class="tr">
                    <td><div class="cart-info">
                        <img src="{{asset('img/chicken.png')}}"alt="">
                        <div class="burger-info-cart">
                            <p>Chicken Burger</p>
                            <small>Price: $50.00</small>
                            <a href="#">Remove</a>
                        </div>
                    </div></td>
                    <td><div class="input-group">
                        <button type="button" class="minus-btn" onclick="decreaseNumber()">-</button>
                        <input type="number" id="quantity-input" value="1">
                        <button type="button" class="plus-btn" onclick="increaseNumber()">+</button>
                    </div></td>
                    <td class="subTotal">$50.00</td>
                    <td class="Total">$50.00</td>
                </tr>
            </table>
        </div>
        <button onclick="window.location='{{ url('/order') }}'" type="submit" class="submitB">Submit</button>
    </section>

  
    
        <script src="{{asset('js/cart.js')}}"></script>
    </body>
</html>