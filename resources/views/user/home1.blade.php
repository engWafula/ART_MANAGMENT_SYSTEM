<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.css')
  </head>
  <body data-spy="scroll" data-target=".fixed-top">
    <!-- <div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
  </div> -->
  <div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="header-bar d-flex d-lg-block align-items-center" data-aos="fade-left">
    <div class="site-logo">
      <img  class="img-fluid navbar-brand" src="../assets/images/logo.png" id="deno" alt="" width='50%' height="50%"/>
      {{-- <a class="navbar-brand" href="index.html" >DENO ARTS <sup><i>UG</i></s></a> --}}
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
 
    <div class="main-menu">
      <ul class="js-clone-nav">
        <li class="active"><a href="index.html">Home</a></li>
        {{-- <li><a href="single.html">Exhibition</a></li> --}}
        <li><a href="bio.html">Bio</a></li>
        <!-- <li><a href="blog.html">Blog</a></li> -->
        <li><a  href="{{url("makeOrder")}}">Order Art Piece</a></li>
     
        @if(Route::has('login'))
        @auth
        <li>
          <a  href="{{url("MyOrders")}}">My Orders</a>
          
        </li>
      
       <x-app-layout>
      </x-app-layout> 
          @else
        <li >
          
          <a  class="btn btn-primary" href="{{route('login')}}">Login</a>
        </li>
     
        <li>
         
            <a  class="btn btn-success mt-2"  href="{{route('register')}}">Register</a>
          </li>
          @endauth
          @endif
      </ul>
      <p id="yg">Follow us on social media</p>
      <ul class="social js-clone-nav">
        <li><a href="https://www.facebook.com/DENO-ARTS-UG-100940981672436/"><span class="icon-facebook"></span></a></li>
        <li><a href="https://www.instagram.com/deno_artist_ug/"><span class="icon-instagram"></span></a></li>
        
        <li><a href="https://api.whatsapp.com/send?phone=+256775224808"><span class="icon-whatsapp"></span></a></li>
        

      </ul>
    </div>
  </header> 
  <div class><h2 class="text-white mb-4">WELCOME TO UG ARTS ONLINE ART EXHIBITION </h2>
  <p class="mb-5"> This an online art piece <a href="single.html">exhibition platform <a> that focuses on drawings for all colors
    that can also be sold to you in  <a href="">a frame</a> or only the piece of paper<br> that can be sent to you through our social media pages  so take your time and view the beauty of ART and also order for yours <a href="contact.html">NOW<a>
  </a></p>
  
  </div>
  @include('user.art')

</div> <!-- .site-wrap -->

@include('user.scripts')

  </body>
</html>