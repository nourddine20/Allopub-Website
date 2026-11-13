
@include('static.header')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-3">
            <h1 class="display-2 mb-4 animated slideInDown text-white">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('accueil')}}">{{__('messages.Home')}}</a></li>
                  
                    <li class="breadcrumb-item " style="color: var(--primary)" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


      <!-- Service Start -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
              
                <h1 class="display-5 mb-5"> {{__('messages.Our Services')}} </h1>
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
            <p class="mb-5" style="color: var(--secondary);">{{__('messages.AMENAGEMENT DE STANDS paragraph')}}</p>
        </div>
       </a> 
     
    </div>
</div>


            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item position-relative h-100">
        <a href="{{route('enseignes_publicitaire')}}">
        <div class="service-text rounded p-5">
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

@include('static.footer')
