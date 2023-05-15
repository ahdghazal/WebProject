<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="{{asset('css/submit.css')}}" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{asset('img/iconyellow.png')}}">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>90's Burger | Sign Up</title>
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
        <div class="container2">
            <div class="popup" id="popup">
                <img src="{{asset('img/tick.png')}}"alt="">
                <h2>Thank You!</h2>
                <p>Your details has been submitted successfully!</p>
                <a href="{{ url('/') }}">Ok</a>
            </div>
        </div>
    </body>
</html>