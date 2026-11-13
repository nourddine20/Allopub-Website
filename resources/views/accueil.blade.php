
    @include('static.header')

   <!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('public/assets/img/allo_pub_bannier1.jpg')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <!-- Your content here -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('public/assets/img/allo_pub_bannier2.jpg')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <!-- Your content here -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="w-100" src="{{asset('public/assets/img/allo_pub_bannier3.png')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <!-- Your content here -->
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="carousel-item">
                <img class="w-100" src="{{asset('public/assets/img/allo_pub_bannier4.png')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <!-- Your content here -->
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="carousel-item">
                <img class="w-100" src="{{asset('public/assets/img/allo_pub_bannier5.png')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <!-- Your content here -->
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="carousel-item">
                <img class="w-100" src="{{asset('public/assets/img/allo_pub_bannier6.png')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <!-- Your content here -->
                        </div>
                    </div>
                </div>
            </div>
           
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->



    <!-- Features Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{asset('public/assets/img/icon/icon-1.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Award Winning</h5>
                        <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{asset('public/assets/img/icon/icon-2.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Professional Staff</h5>
                        <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{asset('public/assets/img/icon/icon-3.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Fair Prices</h5>
                        <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{asset('public/assets/img/icon/icon-4.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features End -->


    <!-- About Start -->
    <!-- <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="{{asset('public/assets/video/animation allopub.mp4')}}" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-primary">About Us</p>
                        <h1 class="display-6 mb-4">The Best Marketing Agency to Improve Your Business</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="{{asset('public/assets/img/icon/icon-5.png')}}" alt="">
                                <h5 class="mb-3">Managed Services</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="{{asset('public/assets/img/icon/icon-2.png')}}" alt="">
                                <h5 class="mb-3">Dedicated Experts</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->



    <style>
    
         #head-video{
                  
                    height: 175px !important;
             }
             
       @media (max-width: 768px) {
            #head-video{
                    width: 175px !important;
                    height: 160px !important;
             }
             
              #callnow{
                   display:flex;flex-direction:column;
              }
              
              #btn_callnow{
                  font-size:16px !important;
                  margin:0px !important;
                 
              }
        }
      
    </style>

    <!-- About Start -->
<div class="container-xxl pb-3">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div
          class="position-relative overflow-hidden rounded pt-5 h-100"
          style="min-height: 400px"
        >
              <div
                class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3" style="z-index:22;"  id="head-video"
                
              >
                <div
                  class="d-flex flex-column justify-content-center text-center bg-dark rounded h-100 p-3"
                >
                  <h1 class="text-white mb-0">20 {{ __('messages.Years') }}</h1>
                
                  <h3 class="text-white mb-0">{{ __('messages.of experience') }}</h5>
                </div>
              </div>
          <!-- Video Placeholder -->
          <div id="video-placeholder" class="position-relative" style="width: 100%; height: 100%;">
            <img
              src="{{ asset('public/assets/img/about.jpg') }}"
              alt="Video Placeholder"
              style="width: 100%; height: 100%; object-fit: cover;"
            />
            <div
              class="position-absolute top-50 start-50 translate-middle"
              style="cursor: pointer;"
              onclick="loadAndPlayVideo()"
              id="play-button"
            >
              <img src="{{ asset('public/assets/img/play-button.png') }}" alt="Play Button" style="width: 80px;" />
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100">
          <h1 class="display-5 mb-5" style="font-size:45px;">
            {{ __('messages.agence_h1') }}
          </h1>
          <p class="fs-5 text-dark mb-4">
            {{ __('messages.agence_h2') }}
          </p>
          <p class="mb-4">
            {{ __('messages.agence_paragraph') }}
          </p>
          <div class="border-top mt-4 pt-4">
            <div class="d-flex align-items-center">
             
             <h5 class="mb-0" id="callnow">
    <span class="m-2">  {{ __('messages.call-us') }} : </span>
    <a class="m-2" href="tel:+212522484425" style="text-decoration: none; color: inherit;">
         +212 5 22 48 44 25
    </a>
</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<script>
 function loadAndPlayVideo() {
  const placeholder = document.getElementById('video-placeholder');
  const playButton = document.getElementById('play-button');

  // Hide the play button
  playButton.style.display = 'none';

  console.log(window.location);
  // Use jQuery AJAX request to load the video URL
  $.ajax({
    url: window.location.href+'get-video-url',  // Adjust the URL if needed
    method: 'GET',
    success: function(data) {
      // Create the video element dynamically
      const video = document.createElement('video');
      video.controls = true;
      video.style.width = '100%';
      video.style.height = '100%';
      video.style.objectFit = 'cover';

      // Add the video source
      const source = document.createElement('source');
      source.src = data.videoUrl;  // The video URL from the AJAX response
      source.type = 'video/mp4';
      video.appendChild(source);

      // Replace the placeholder with the video
      placeholder.style.display = 'none';  // Hide the placeholder
      placeholder.parentNode.appendChild(video);

      // Play the video
      video.play();
    },
    error: function(xhr, status, error) {
      console.error('Error loading video:', error);
      alert('Failed to load video. Please try again.');
    }
  });
}

</script>

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!--<p class="fs-5 fw-medium " style="color:var(--primary)">{{__('messages.Our Services')}} </p>-->
                <h1 class="display-5 mb-5" > {{__('messages.Our Services')}} </h1>
            </div>
            <div class="row g-4">

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item position-relative h-100">
        <a href="{{route('amenagement_de_stands')}}">
        <div class="service-text rounded p-5">
            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                <div class="img-container">
                    <img class="img-fluid default-img" src="{{asset('public/assets/img/services/amenagement_stand-grey.png')}}" alt="Default Icon">
                    <img class="img-fluid hover-img" src="{{asset('public/assets/img/services/amenagement_stand-geld.png')}}" alt="Hover Icon">
                </div>
            </div>
            <h5 class="mb-5">{{__('messages.AMENAGEMENT DE STANDS')}}</h5>
            <p class="mb-5" style="color:var(--secondary)">{{__('messages.AMENAGEMENT DE STANDS paragraph')}}</p>
        </div>
        </a>
       
       
    </div>
</div>


            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item position-relative h-100">
        <a href="{{route('enseignes_publicitaire')}}">
        <div class="service-text rounded p-5 ">
            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                <div class="img-container">
                    <img class="img-fluid default-img" src="{{asset('public/assets/img/services/enseigne_publicitaire_caract-grey.png')}}" alt="Default Icon">
                   
                    <img class="img-fluid hover-img" src="{{asset('public/assets/img/services/enseigne_publicitaire_caract-geld.png')}}" alt="Hover Icon">
                </div>
            </div>
            <h5 class="mb-5">{{__('messages.ADVERTISING_SIGNS')}}</h5>
            <p class="mb-5" style="color:var(--secondary)">{{__('messages.ADVERTISING_SIGNS_PARAGRAPH')}}</p>
        </div>
        </a>
        
        <!-- <div class="service-btn rounded-0 rounded-bottom">
            <a style="color: var(--primary);" class="fw-medium" href="{{route('enseignes_publicitaire')}}">Lire Plus<i class="bi bi-chevron-double-right"></i></a>
        </div> -->
    </div>
</div>




            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item position-relative h-100">
        <a href="{{route('agencement_magasins')}}">
        <div class="service-text rounded p-5">
            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                <div class="img-container">
                    <img class="img-fluid default-img" src="{{asset('public/assets/img/services/agencement-magasins-grey.png')}}" alt="Default Icon">
                    <img class="img-fluid hover-img" src="{{asset('public/assets/img/services/agencement-magasins-geld.png')}}" alt="Hover Icon">
                </div>
            </div>
            <h5 class="mb-4">{{__('messages.STORE_LAYOUT')}}</h5>
            <p class="mb-5" style="color: var(--secondary);">{{__('messages.STORE_LAYOUT_PARAGRAPH')}}</p>
        </div>
        </a>
       
      
    </div>
</div>


<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item position-relative h-100">
        <a href="{{route('plv')}}">
        <div class="service-text rounded p-5">
            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                <div class="img-container">
                    <img class="img-fluid default-img" src="{{asset('public/assets/img/services/plv-grey.png')}}" alt="Default Icon">
                    <img class="img-fluid hover-img" src="{{asset('public/assets/img/services/plv-geld.png')}}" alt="Hover Icon">
                </div>
            </div>
            <h5 class="mb-5">{{__('messages.PLV')}}</h5>
            <p class="mb-5" style="color: var(--secondary);">{{__('messages.PLV_PARAGRAPH')}}</p>
        </div>
        </a>
       
      
    </div>
</div>



<style>
 .img-container {
    position: relative;
    width: 64px; /* Set a specific width to match the button size */
    height: 64px; /* Set a specific height to match the button size */
}

.default-img {
    display: block; /* Show default image */
    position: absolute; /* Position it within the container */
    top: 0;
    left: 0;
    width: 100%; /* Make it fill the container */
    height: 100%; /* Make it fill the container */
}

.hover-img {
    display: none; /* Hide hover image */
    position: absolute; /* Position it within the container */
    top: 0;
    left: 0;
    width: 100%; /* Make it fill the container */
    height: 100%; /* Make it fill the container */
}

.btn-square:hover .default-img {
    display: none; /* Hide default image on hover */
}

.btn-square:hover .hover-img {
    display: block; /* Show hover image on hover */
}

/* Optional: Make the entire service item respond to hover */
.service-item:hover .default-img {
    display: none; /* Hide default image when hovering over the service item */
}

.service-item:hover .hover-img {
    display: block; /* Show hover image when hovering over the service item */
}

</style>


<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item position-relative h-100">
        <a href="{{route('impression_grand_format')}}">
        <div class="service-text rounded p-5">
            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                <div class="img-container">
                    <img class="img-fluid default-img" src="{{asset('public/assets/img/services/impression-grand-format-grey.png')}}" alt="Default Icon">
                    <img class="img-fluid hover-img" src="{{asset('public/assets/img/services/impression-grand-format-geld.png')}}" alt="Hover Icon">
                </div>
            </div>
            <h5 class="mb-5">{{__('messages.LARGE_FORMAT_PRINTING')}}</h5>
            <p class="mb-5" style="color: var(--secondary);">{{__('messages.LARGE_FORMAT_PRINTING_PARAGRAPH')}}</p>
        </div>
        </a>
        
       
    </div>
</div>   


<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item position-relative h-100">
      <a href="{{route('palissades_de_chantier')}}">
      <div class="service-text rounded p-5">
            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                <div class="img-container">
                    <img class="img-fluid default-img" src="{{asset('public/assets/img/services/palissades-de-chantier-grey.png')}}" alt="Default Icon">
                    <img class="img-fluid hover-img" src="{{asset('public/assets/img/services/palissades-de-chantier-geld.png')}}" alt="Hover Icon">
                </div>
            </div>
            <h5 class="mb-4">{{__('messages.CONSTRUCTION_FENCES')}}</h5>
            <p class="mb-4" style="color: var(--secondary);">{{__('messages.CONSTRUCTION_FENCES_PARAGRAPH')}}</p>
        </div>
      </a>  
       
    </div>
</div>







            </div>
        </div>
    </div>
    <!-- Service End -->


  

    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="mx-auto text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 800px;">
            
                <h1 class="display-5 mb-5 text-center" style="font-size:40px;">{!! __('messages.We have completed many awesome projects') !!} </h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                
              
                
                <div class="project-item mb-5">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'1-Stand_Arrawaj'])}}">
                    <img class="img-fluid" style="height: 400px;" src="{{asset('public/assets/img/project_stands/1-Stand_Arrawaj.jpg')}}" alt="">
                     </a> 
                       
                    </div>

                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                       <a href="{{route('portfolio.view',['item'=>'1-Stand_Bielenda'])}}">
                       <img class="img-fluid" style="height: 400px;" src="{{asset('public/assets/img/project_stands/1-Stand_Bielenda.jpg')}}" alt="">
                       </a>
                    
                    </div>

                </div>
                
                   <div class="project-item mb-5">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'stand_inadis_luxalight'])}}">
                    <img class="img-fluid" style="height: 400px;" src="{{asset('public/assets/img/project_stands/stand_inadis_luxalight.jpeg')}}" alt="">
                     </a> 
                       
                    </div>

                </div>
                
                <div class="project-item mb-5">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'1-Stand_Cibex'])}}">
                     <img class="img-fluid" style="height: 400px;" src="{{asset('public/assets/img/project_stands/1-Stand_Cibex.jpg')}}" alt="">
                     </a>   
                      
                    </div>

                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                      <a  href="{{route('portfolio.view',['item'=>'1-Stand_Dimatit'])}}">
                      <img class="img-fluid" style="height: 400px;" src="{{asset('public/assets/img/project_stands/1-Stand_Dimatit.jpg')}}" alt="">
                      </a> 
                      
                    </div>

                </div>

                <div class="project-item mb-5">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'1-Stand_EasySolution'])}}">
                     <img class="img-fluid" style="height: 400px;" src="{{asset('public/assets/img/project_stands/1-Stand_EasySolution.jpg')}}" alt="">
                     </a>  
                       
                    </div>

                </div>

                <div class="project-item mb-5">
                    <div class="position-relative">
                      <a  href="{{route('portfolio.view',['item'=>'1-Stand_Freshworks'])}}">
                      <img class="img-fluid" style="height: 400px;" src="{{asset('public/assets/img/project_stands/1-Stand_Freshworks.jpg')}}" alt="">
                      </a> 
                      
                    </div>

                </div>

                <div class="project-item mb-5">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'1-Stand_Labomag'])}}">
                      <img class="img-fluid" style="height: 400px;" src="{{asset('public/assets/img/project_stands/1-Stand_Labomag.jpg')}}" alt="">
                      </a>  
                      
                    </div>

                </div>

                <div class="project-item mb-5">
                    <div class="position-relative">
                       <a href="{{route('portfolio.view',['item'=>'1-Stand_Luxalight'])}}">
                       <img class="img-fluid" style="height: 400px;" src="{{asset('public/assets/img/project_stands/1-Stand_Luxalight.jpg')}}" alt="">
                       </a>
                      
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->



        
        <style>
           .content-bottom .owl-item ,.cloned{
                width: 250px !important;
            }
        </style>

		<script type="text/javascript">
		var a = document.querySelector(".homes");
		a.classList.add("active");	
		</script>	



    <!-- Devis Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
               <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!--<p class="fs-5 fw-medium " style="color: var(--primary);">{{__('messages.quote_request')}}</p>-->
                    <h1 class="display-5 mb-4">{{__('messages.Need help from our experts? We are here')}}</h1>
                    <p>{{__('messages.Would you like a quote? Contact us')}}</p>
                
               <a class="d-inline-flex align-items-center rounded overflow-hidden border" 
                   style="border-color: var(--primary);" 
                   href="tel:+212522484425">
                    <span class="btn-lg-square" 
                          style="background-color: var(--primary); width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </span>
                    <span id="btn_callnow" class="fs-5 fw-medium px-4" style="color:var(--primary)">+212 5 22 48 44 25</span>
                </a>


                </div>


                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4">{{ __('messages.Request Free Quote') }}</h2>
    <form  id="quoteForm" action="{{ route('devis.submit') }}" method="POST">
    @csrf
        <div class="row g-3">
            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                    <label for="name">{{ __('messages.full name') }}</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
                    <label for="company_name">{{ __('messages.company name') }}</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile">
                    <label for="mobile">{{ __('messages.myphone') }}</label>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                    <label for="email">{{ __('messages.gmail') }}</label>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="name_event" id="name_event" placeholder="Name of the event">
                    <label for="name_event">{{ __('messages.Name_event') }}</label>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="text" name="event_date" class="form-control datepicker" id="event_date" placeholder="Select event date" required>
                    <label for="event_date">{{ __('messages.Date_event') }}</label>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="number" class="form-control" name="surface" id="surface" placeholder="Surface (in m²)">
                    <label for="surface">{{ __('messages.mysurface') }} ({{__('messages.in_m2')}})</label>
                </div>
            </div>

           
            <div class="col-md-12">
                      <label for="validationDefault04" class="form-label">{{ __('messages.Benefit') }}</label>
                      <select name="prestation" class="form-select" id="validationDefault04" value="" required="" >
                        <option selected="" disabled="" value="">Choice...</option>
                        <option value="Location Stand">Location Stand</option>
                        <option value="Achat Stand">Achat Stand</option>
                        <option value="Stand Modulaire">Stand Modulaire</option>
                        <option value="Stand Portable">Stand Portable</option>
                        <option value="Autre">Autre</option>
                      </select>
           </div>

           <div class="col-md-12">
                      <label for="validationDefault04" class="form-label">{{ __('messages.Budget') }} (en HT)</label>
                      <select name="budget" class="form-select" id="validationDefault04" value="" required="">
                        <option selected="" disabled="" value="">Choice...</option>
                        <option>Moins 50 000 Dhs</option>
                        <option>Entre 50 000 Dhs et 100 000 Dhs</option>
                        <option>Entre 100 000 Dhs et 200 000 Dhs</option>
                        <option>Entre 200 000 Dhs et 300 000 Dhs</option>
                        <option>Plus que 300 000 Dhs</option>
                      </select>
             </div>
            
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" name="messageContent" placeholder="Leave a message here" id="messageContent" style="height: 130px"></textarea>
                    <label for="messageContent">{{ __('messages.Message') }}</label>
                </div>
            </div>

            <div class="col-12 text-center">
                <button class="btn w-100 py-3" style="background-color: var(--primary);" type="submit">{{ __('messages.Send') }}</button>
            </div>
        </div>
    </form>
</div>

            </div>
        </div>
    </div>
    <!-- Devis Start -->
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- jQuery (Required for Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {

        flatpickr('.datepicker', {
        dateFormat: "Y-m-d", // Customize date format if needed
        allowInput: true
    });
    
        // Handle form submission
        $('#quoteForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            // Get the form data
            var formData = new FormData(this);

            // AJAX request
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                processData: false, // Don't process the data
                contentType: false, // Don't set content type
                success: function(response) {
                    // Check if the response was successful
                    if (response.success) {
                        toastr.success(response.message); // Show success message
                        $('#quoteForm')[0].reset(); // Reset the form
                    } else {
                        toastr.error(response.message); // Show error message
                    }
                },
                error: function(xhr, status, error) {
                    // Handle validation errors or other failures
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        // Display validation errors
                        var errorMessage = 'Please fix the following errors:';
                        for (var field in xhr.responseJSON.errors) {
                            errorMessage += '\n' + xhr.responseJSON.errors[field].join(', ');
                        }
                        toastr.error(errorMessage); // Show validation error messages
                    } else {
                        toastr.error('There was an error processing your request. Please try again.'); // Generic error message
                    }
                }
            });
        });
    });
</script>
   
<?php
$directory = 'public/assets/img/clients';
$images = array_diff(scandir($directory), array('..', '.')); // Get all files excluding "." and ".."
?>





<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<div class="container my-5">
<div class="text-center mx-auto text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
        style="max-width: 600px;">
        
        <h1 class="display-5 mb-5 text-center">{{__('messages.References')}}</h1>
    </div>
   <section class="owl-carousel project-carousel wow fadeInUp customer-logos slider">
   <?php foreach ($images as $image): ?>
        <div class="slide" style="width: 160px; height: 80px;">
            <img style="width: 160px; height: 80px;" alt="conceptions de vos supports" src="<?= $directory . '/' . $image ?>">
        </div>
    <?php endforeach; ?>  
   </section>
   

</div>

<style>
    .customer-logos .owl-item{
        margin-right: -63px !important;
        width: 400px !important;
    }
    
   
    
   .customer-logos .owl-nav{
        display:none;
    }
</style>

<script>
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<div class="bbb_viewed">
    <div class="container">
        <div class="row">
            <div class="col">
               <div class="bbb_main_container">
                <div class="bbb_viewed_title_container">
                    <h3 class="bbb_viewed_title">Best selling products</h3>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                        <div class="owl-item">
                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹12225<span>₹13300</span></div>
                                    <div class="bbb_viewed_name"><a href="#">Alkatel Phone</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924221/51_be7qfhil.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹30079</div>
                                    <div class="bbb_viewed_name"><a href="#">Samsung LED</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹22250</div>
                                    <div class="bbb_viewed_name"><a href="#">Samsung Mobile</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924275/images.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹1379</div>
                                    <div class="bbb_viewed_name"><a href="#">Huawei Power</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924361/21HmjI5eVcL.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹225<span>₹300</span></div>
                                    <div class="bbb_viewed_name"><a href="#">Sony Power</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹13275</div>
                                    <div class="bbb_viewed_name"><a href="#">Speedlink Mobile</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               </div> 
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function()
{

   
        if($('.bbb_viewed_slider').length)
        {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel(
            {
                loop:true,
                margin:30,
                autoplay:true,
                autoplayTimeout:6000,
                nav:false,
                dots:false,
                responsive:
                {
                    0:{items:1},
                    575:{items:2},
                    768:{items:3},
                    991:{items:4},
                    1199:{items:6}
                }
            });

            if($('.bbb_viewed_prev').length)
            {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function()
                {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.bbb_viewed_next').length)
            {
                var next = $('.bbb_viewed_next');
                next.on('click', function()
                {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });
</script> -->

    <!--- end second reference -->
    <style>
        .site_color{
            background-color: #F2C71C;
            margin-bottom: -50px;
        }
    </style>

 <!-- Start View Work -->
 <section class="section-devis site_color" data-aos="fade-up" data-aos-duration="1000">
    <div class="container py-5">
        <div class="row d-flex py-4 justify-content-center text-center" >
            {{-- <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div> --}}
            <div class="col-lg-8 col-12 text-light column-devis pt-2" style="border-right: 1px solid black;">
                <h3 class="h2 text-dark semi-bold-600">{{__('messages.devis_title')}}</h3>
                <p class="text-dark h6">{{__('messages.devis_text')}}</p>
            </div>
           
            <div class="col-lg-4 col-12" style="align-self: center;margin-top:10px;">
                <a href="{{ route('download.pdf') }}" class="btn btn-outline-dark rounded-pill btn-block shadow regular-400  px-5 py-2">{{__('messages.devis_button')}}</a>
            </div>
        </div>
    </div>
</section>
<!-- End View Work -->


    @include('static.footer')

