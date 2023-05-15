<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>Make a Reservation</title>
    <link rel="stylesheet" href="{{asset('css/order.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('img/iconyellow.png')}}">
        <link href="
https://cdn.jsdelivr.net/npm/swiper@9.2.4/modules/scrollbar/scrollbar.min.css
" rel="stylesheet">
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vina+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-l4RpFk4soJzRKZw/Xb/+TRzB+m+Q0dlC8Xy5x5k5f5cb0I5Qa/+IohdYllA8tGGkblLy1I/Znws5F5fWskX8/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <header>
      <a href = "{{ url('/') }}" class="logo"><img src="{{asset('img/logo0.jpg')}}"></a>
      <div class="bx bx-menu" id="menu-icon"></div>

      <div class="navbar"> 
          <div><a href="#home">Home</a></div>
          <div><a href="#about">About</a></div>
          <div><a href="#menu">Menu</a></div>
          <div><a href="#service">Service</a></div>
          <div><a href="#contact">Contact</a></div>
      </div>
  </header>
  
    <div class="all">
      <img src="{{asset('img/homer3.png')}}" class="imgHomer"/>
      <div class="container">
        <div class="form-container">
          <h1>Address Information</h1>
          <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Full name">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required  placeholder="email@example.com">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required placeholder="+970591234567">
            <label for="Address">Address</label>
            <input type="text" id="Address" name="Address" required>
            <div class="container2">
              <button type="button" onclick="openPopUp()">Submit</button>
              <div class="popup" id="popup">
                  <img src="{{asset('img/tick.png')}}" alt="">
                  <h2>Thank You!</h2>
                  <p>Your details has benn submitted successfully</p>
                  <a href="{{ url('/homepage') }}">OK</a>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <script src="{{asset('js/order.js')}}"></script>
  </body>
</html>
