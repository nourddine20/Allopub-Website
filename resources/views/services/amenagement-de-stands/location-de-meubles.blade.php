@include('static.header')



     <!-- Page Header Start -->
<div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-3">
        <h1 class="display-2 mb-4 animated slideInDown text-white">{{__('messages.location_de_meubles')}} </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0" >
                <li class="breadcrumb-item"><a href="{{route('accueil')}}">{{__('messages.Home')}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('produits-et-services')}}">{{__('messages.Services')}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('amenagement_de_stands')}}"> {{__('messages.amenagement de Stands')}} </a></li>
                <li class="breadcrumb-item " style="color: var(--primary)" aria-current="page">
                {{__('messages.location_de_meubles')}}
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
 
  
     <div class="main">	
	 <div class="project-wrapper">
	
        
	 	  	<div class="dashlineallopub m-5 row">
                

               <div class="col-lg-4 col-md-6">   <img style="width: 100%;border-radius:20px;height:400px;" src="{{asset('public/assets/img/amenagement-de-stands/United industriel-3.jpg')}}" alt="Location Stand Casablanca maroc">
               </div>
              <div class="col-md-6">
              <h3 class="my-4">{{__('messages.location_de_meubles')}}</h3>
                <p>
                {{__('messages.location_de_meubles_long_paragraph')}}   

</p>
              </div>  



                <style>
                    .pp{
                        color:#5d5d5d;
                        font-weight: bold;
                    }
                    strang {
                        color:#f2c71c;
                        font-weight: bold;
                    }
                </style>
            </div>
 
					<script type="text/javascript">
				      $(document).ready(function() {
				        $('.popup-gallery').magnificPopup({
				          delegate: 'a',
				          type: 'image',
				          tLoading: 'Téléchargement d\'image #%curr%...',
				          mainClass: 'mfp-img-mobile',
				          gallery: {
				            enabled: true,
				            navigateByImgClick: true,
				            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				          },
				          image: {
				            tError: '<a href="%url%">L\'image #%curr%</a> ne peut pas se télécharger.',
				            titleSrc: function(item) {
				              return item.el.attr('alt') + '<small>Par Allopub</small>';
				            }
				          }
				        });
				      });
				    </script>
					<script type="text/javascript">
							var  checkbox = document.getElementById("language-toggle") ;
							var a = document.querySelector(".us");
							a.classList.add("active");	
					</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
					
<!-- Project Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
           
            <h1 class="mb-5"> {{__('messages.Recent achievements')}} </h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'1-Stand_Arrawaj'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_Arrawaj.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_Arrawaj.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_Arrawaj'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'1-Stand_Bielenda'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_Bielenda.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_Bielenda.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_Bielenda'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'1-Stand_Cibex'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_Cibex.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_Cibex.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_Cibex'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'1-Stand_Dimatit'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_Dimatit.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_Dimatit.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_Dimatit'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
       

        </div>
    
    </div>
</div>

                    </div>


   @include('static.footer')

 
 