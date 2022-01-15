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
      <a class="navbar-brand" href="index.html" >DENO ARTS <sup><i>UG</i></s></a>
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
 
    <div class="main-menu">
      <ul class="js-clone-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="single.html">Exhibition</a></li>
        <li><a href="bio.html">Bio</a></li>
        <!-- <li><a href="blog.html">Blog</a></li> -->
        <li><a href="contact.html">Order Art Piece</a></li>
     
        @if(Route::has('login'))
        @auth
        <li>
          <a  href="{{url("myappointment")}}" style='background-color:greenyellow; color:white;'>myAppointments</a>
          
        </li>
        <li >
    
       </li>

       <x-app-layout>
      </x-app-layout> 
          @else
        <li >
          {{-- <a class="btn btn-primary ml-lg-2" href="{{route('login')}}">Login</a> --}}
          <a type="button" class="btn btn-primary" href="{{route('login')}}">Login</a>
        </li>
     
        <li>
            {{-- <a class="btn btn-success ml-lg-2 mt-2"  href="{{route('register')}}">Register</a> --}}
            <a type="button" class="btn btn-success mt-2"  href="{{route('register')}}">Register</a>
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
                               <option value="allan">Allan</option>
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
                 
            {{-- <form id="form" action="https://formspree.io/f/xyybqgdo" method="POST">
                    
                    

                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-white" for="fname">First Name</label>
                        <input type="text" id="fname" class="form-control" name="Fname" required>
                      </div>
                      <div class="col-md-6">
                        <label class="text-white" for="lname">Last Name</label>
                        <input type="text" id="lname" class="form-control" name="Lname"required >
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="email">Email</label> 
                        <input type="email" id="email" class="form-control" name="_replyto"required >
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="subject">Phone Number</label> 
                        <input type="number" id="subject" class="form-control" name="subject" required>
                      </div>
                    </div>

                    <div class="row form-group mb-5">
                        <div class="col-md-12">
                            <label class="text-white" for="subject">Select Artist</label> 
                            <select type="date" id="subject" class="form-control" name="date" required>
                                <option value="general">---Select Artist---</option>
                                <option value="denis">Denis</option>
                                <option value="wafula">Wafula</option>
                          </div>
                        </div>
                        <div class="row form-group mb-5">
                        <div class=" col-md-12 mb-3">
                            <label for="formFile" class="form-label">Sample Picture</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>
                        </div>

                    <div class="row form-group">
                      
                        <div class="col-md-12">
                          <label class="text-white" for="subject">Date needed</label> 
                          <input type="date" id="subject" class="form-control" name="date" required>
                        </div>
                      </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12">
                        <label class="text-white" for="message">Description</label> 
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write additional information here..."></textarea>
                      </div>
                    </div>

               

                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                      </div>
                    </div>
                    <div id="status"></div>
        
                  </form> --}}
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