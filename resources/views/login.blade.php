<!DOCTYPE html>

<html>
    <head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="{{asset('css/Login.css')}}"  rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/iconyellow.png')}}">
        <title>90's Burger | Login</title>
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
        <div class="trans">
        <div class="container">
            <div class="drop">
                <div class="content">
                    <h2>WELCOME!</h2>
                    <form  action="/login" method="POST">
                        @csrf
                        <span style= "color: red">{{$errorMsg}}</span>
                        <div class="inputBox">
                            <input name="email" type="text" placeholder="Email">
                        </div>
                        <div class="inputBox">
                            <input name="password" type="password" placeholder="Password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="login">
                        </div>
                        
                    </form>
                    <div class="social">
                        <a href="https://www.facebook.com/90sBurger" target="_blank"><i class='bx bxl-facebook'></i></a> 
                        <a href="https://www.instagram.com/ninetiesburger90s/?hl=en" target="_blank"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                    </div>
                </div>
            </div>
            
            <a href="#" class="btns">FORGET<br> PASSWORD</a>
            <a href="{{ url('/signup') }}" class="btns signup">SIGN UP</a>
        </div>
    </div>
    <script src="{{asset('js/Login.js')}}"></script>

    </body>
</html>