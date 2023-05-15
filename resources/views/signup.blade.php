<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="{{asset('css/Signup.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/iconyellow.png')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vina+Sans&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <div class="trans">
        <div class="container">
            <div class="drop">
                <div class="content">
                    <h2>Sign Up</h2>
                    <form action="/signup" method="post">
                        @csrf
                        <div class="inputBox">
                            <input name="fname" type="text" placeholder="First Name">
                        </div>
                        <div class="inputBox">
                            <input name="lname" type="text" placeholder="Last Name">
                        </div>
                        <div class="inputBox">
                            <input name="email" type="email" placeholder="example@gmail.com">
                        </div>
                        <div class="inputBox">
                            <input name="password" type="password" placeholder="password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="SIGN UP">
                        </div>
                        
                    </form>
                </div>
            </div>
            <a href="{{ url('/login') }}"  class="btns">LOGIN</a>
        </div>
    </div>
    <script src="{{asset('js/SignUp.js')}}"></script>
    </body>
</html>