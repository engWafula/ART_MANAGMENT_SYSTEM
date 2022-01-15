    {{-- <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our ArtPieces</h1>

   
            <div class="owl-carousel fadeInUp" id="doctorSlideshow">
              
                {{-- <img class="field" src="ArtPieces/{{$arts->image}}" alt="" width="500px" height="355px">
                <h4>{{$arts->name}}</h4>
                <p>{{$arts->description}}</p>
                  <h4>{{$arts->city}}</h4>
                <a href="#" class="ctn">Call</a> 

                 <div class="item">
            <div class="card-doctor">
              <div class="header">
                <img src="ArtPieces/{{$arts->image}}" alt="" width="500px" height="355px>
                <div class="meta">
                  <a href="{{$arts->phone}}"><span class="mai-call"></span></a>
                  <a href="#"><span class="mai-logo-whatsapp"></span></a>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0">{{$arts->name}}</p>
                <span class="text-sm text-grey">{{$arts->city}}</span>
              </div>
            </div>
          </div> 
                @endforeach
                </div>
            </div>
            </div>
            </div> --}}

            <main class="main-content"> 
              <div class="container-fluid photos">
                <div class="row align-items-stretch">
                  
                  @foreach ($art as $arts )
                  <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="single.html" class="d-block photo-item">
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