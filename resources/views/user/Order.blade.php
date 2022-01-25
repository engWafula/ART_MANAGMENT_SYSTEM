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
        <li class="active"><a href="/">Home</a></li>
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
  <main class="main-content">
    <div class="container-fluid photos">
      <div class="row justify-content-center">
        
        <div class="col-md-6 pt-4"  data-aos="fade-up">
          <h2 class="text-white mb-4">ORDER FOR AN ART PIECE</h2>

          <div class="row">
            <div class="col-md-12">
              <p class="mb-5">For anyone who  wishes to have an artpiece at<a href=""> UG ART</a> make order now from your favourite Artist</p>
              

              <div class="row">
                <div class="col-md-12">

                  
                    <form id="form" action="{{url('Order')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                          <div class="row mt-5 ">
                            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                              <input type="text" class="form-control" placeholder="Full name" name="name" required>
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                              <input type="text" class="form-control" placeholder="Email address.." name="email" required>
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                              <input type="date" class="form-control" name="date" required>
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                          <select  id="departement" class="custom-select" name="selectedArtist">
                            <option value="general">---Select Artist---</option>
                               {{-- @foreach ($doctor as $doctors ) --}}
                                   @foreach ($artist as $artists )
                                 
                               <option value="{{$artists->name}}">{{$artists->name}}</option>
                               @endforeach
                               {{-- @endforeach --}}
                              </select>
                            </div>
                            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                              <input type="text" class="form-control" placeholder="Number.." name="phone" required>
                            </div>
                            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                <label for="formFile" class="form-label">Sample Picture</label>
                                <input class="form-control" type="file" id="formFile" name="file">
                              </div>
                            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                              <textarea name="description" id="message" class="form-control" rows="6" placeholder="Enter a description of what you want.." required></textarea>
                            </div>
                          </div>
                  
                          <input type="submit" class="btn btn-success"/>
                        </form>
                 
         
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row justify-content-center">
        <div class="col-md-12 text-center py-5">
          <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | DENO ARTS UG</a>
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