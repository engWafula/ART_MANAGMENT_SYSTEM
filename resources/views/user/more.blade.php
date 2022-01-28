


    <!DOCTYPE html>
<html lang="en">
  <head>
   <base href="/public">
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
      {{-- <img  class="img-fluid navbar-brand" src="../assets/images/logo.png" id="deno" alt="" width={50px} height={50px}/> --}}
      <a class="navbar-brand" href="/" >UG ARTS</a>
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
 
    <div class="main-menu">
      <ul class="js-clone-nav">
        <li class="active"><a href="/">Home</a></li>
        {{-- <li><a href="single.html">Exhibition</a></li> --}}
        <li><a href="bio.html">Bio</a></li>
        <!-- <li><a href="blog.html">Blog</a></li> -->
       
     
        @if(Route::has('login'))
        @auth
        <li><a  href="{{url("makeOrder")}}">Order Art Piece</a></li>
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
  <div class="items-center"><h2 class="text-white mb-4 text-center"> EXHIBITION PLATFORM</h2>
  <p class="mb-5"> This an online art piece <a href="single.html">exhibition platform <a> that focuses on drawings for all colors
    that can also be sold to you in  <a href="">a frame</a> or only the piece of paper<br> that can be sent to you through our social media pages  so take your time and view the beauty of ART and also order for yours <a href="contact.html">NOW<a>
  </a></p>
  

 <main class="main-content"> 
              <div class="container-fluid photos">
                <div class="row align-items-stretch">
                  
                  @foreach ($data as $arts )
                  <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{url("details",$arts->id)}}" class="d-block photo-item">
                      <img src="ArtPieces/{{$arts->image}}" alt="Image" class="img-fluid">
                      <div class="photo-text-more">
                        <div class="photo-text-more">
                        <h3 class="heading">{{$arts->name}} collections</h3>
                        <span class="meta">Continue to exhibition</span>
                      </div>

                      </div>

                    </a>
                  </div>
                  @endforeach
          
                <div class="row justify-content-center">
                  <div class="col-md-12 text-center py-5">
                    <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by DENO ARTS UG 
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                  </div>
                </div>
              </div>
            </main>


</div> <!-- .site-wrap -->

@include('user.scripts')

  </body>
</html>
   
        

     






 
        

      </div>


   
    </div>
  </main>