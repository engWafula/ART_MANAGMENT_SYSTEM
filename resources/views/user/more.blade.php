<main class="main-content">
    <div class="container-fluid photos">

      <div class="row pt-4 mb-5 text-center">
        <div class="col-12">
          <h2 class="text-white mb-4">My  Similar Pieces</h2>
        </div>
      </div>
    @foreach ($data as $moreData)
        
    
      <div class="row align-items-stretch">
        
        
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="ArtPieces/{{$art->image}}"class="d-block photo-item" data-fancybox="gallery">
            <img src="ArtPieces/{{$art->image}}" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
    </div>
    @endforeach
</div>
    </main>
   
        

     






 
        

      </div>


   
    </div>
  </main>