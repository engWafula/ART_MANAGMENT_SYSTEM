<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure</title>
</head>
<body>
  

<!-- Navbar -->
<nav class="navbar">
    <h1 class="logo">ADVENTURE</h1>
    <ul class="nav-links">
        <li class="active"><a href="#"></a>Home</li>
        <li><a href="#"></a>Tours</li>
        <li><a href="#"></a>Explore</li>
        <li><a href="#"></a>About</li>
        <li><a href="#"></a>Contact</li>
        @if(Route::has('login'))
        @auth
        <li>
          <a class="ctn" href="{{url("My Art Bookings")}}">My Art Bookings</a>
    
        </li>
        <li class="nav-item">
          
        
       </li>
        <x-app-layout>
   
       </x-app-layout> 
          @else
        <li>
          <a class="ctn" href="{{route('login')}}">Login</a>
        </li>
     
        <li class="nav-item">
            <a class="ctn" href="{{route('register')}}">Register</a>
          </li>
          @endauth
          @endif
    </ul>
    <img src="../assets/images/menu2.svg" width="40px" height="40px" alt="" class="menu-btn">
</nav>
    <header>
        <div class="header-content">
            <h2>Explore The Colorful World</h2>
            <div class="line"></div>
            <h1>A WONDERFUL GIFT</h1>
            <a href="#" class="ctn">Learn More</a>
        </div>
    </header>

    <!-- == Events == -->

    <section class="events">
        <div class="title">
                <h1>Upcoming Events</h1>
                <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img class="field" src="../assets/images/field.jpeg" alt="" width="500px" height="355px">
                <h4>Moutain Camp Trek</h4>
                <p>You can enjoy your time on this kind of mountain <br> 
                Where they are no disturbences you can camp here <br>
                for as long as you can.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
            <div class="col">
                <img class="r1" src="../assets/images/r1.jpg" alt="" width="500px" height="355px">
                <h4>Amazing Hunt For Retals</h4>
                <p>We are sure some people are out there looking for a <br> place to stay,
                well, here you go what a nice place <br> to stay isn't it?</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
        </div>
    </section>
    <section class="explore">
       <div class="explore-content">
        <h1>EXPLORE THE WORLD</h1>
        <div class="line"></div>
        <p>Explore the amazing world of moutains, lakes, rivers and more <br>
        there are very many things in the world to explore for example <br>
        there animals, birds and the most important thing, houses for rent.</p>
        <a href="#" class="ctn">Learn More</a>
       </div>
    </section>

    <section class="tours">
        <div class="row">
            <div class="col content-col">
                <h1>UPCOMING TOURS & DESTINATION</h1>
                <div class="line"></div>
                <p>Looking for the most beautiflul houses for rent, well here are the coming upcoming houses for rent in Uganda this houses are the best, you will never be disappointed we can't wait for your money.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
            <div class="col image-col">
                <div class="image-gallery">
                      <img src="../assets/images/r3.jpg" alt="" width="350px">
                      <img src="../assets/images/r5.jpg" alt="" width="350px">
                      <img src="../assets/images/r6.jpg" alt="" width="350px">
                      <img src="../assets/images/r2.jpg" alt="" width="350px">
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <p>123 Fifth Avenue, Bunamwaya, Kampala, Uganda | Phone: 0788 751 100 | Email: wafulareactdev@gmail.com</p>
        <p>Copyright &copy; 2021 Outdoor Adventure</p>
    </section>

    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
        navlinks.classList.toggle('mobile-menu')
        })
    </script>
    </body>
</html>