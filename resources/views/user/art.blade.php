

            <main class="main-content"> 
              <div class="container-fluid photos">
                <div class="row align-items-stretch">
                  
                  @foreach ($art as $arts )
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