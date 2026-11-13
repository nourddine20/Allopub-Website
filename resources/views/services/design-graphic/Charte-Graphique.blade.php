@include('static.header')



     <!-- Page Header Start -->
<div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-3">
        <h1 class="display-2 mb-4 animated slideInDown text-white">{{__('messages.Graphic Charter')}} </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0" >
                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{route('produits-et-services')}}">Services</a></li>
                <li class="breadcrumb-item"><a href="{{route('design-graphique')}}"> {{__('messages.GRAPHIC DESIGN')}} </a></li>
                <li class="breadcrumb-item " style="color: var(--primary)" aria-current="page">
                {{__('messages.Graphic Charter')}} 
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
 
  
     <div class="main">	
	 <div class="project-wrapper">
		<div class="container">
			<?php if (isset($message)) : ?>
		<div class="alert alert-success mb-5">
			<?= $message ?>
		</div>
		<?php endif ?>
		<?php if (isset($errorss)) : ?>

		<?= $errorss ?>

		<?php endif ?>

		</div>
        
	 	  	<div class="dashlineallopub text-center m-5">
                

                <img style="width: 446px;"  src="{{asset('public/assets/img/graphic design/Creation-de-stand-d-expostion-Action-Desgin.jpg')}}" alt="Location Stand Casablanca maroc">
                <h3 class="my-4">{{__('messages.Charte-Graphique Title')}}</h3>
                <p>
                {{__('messages.Charte-Graphique Paragraph A')}}

</p>

                <br>
                <div class='pp'>
                {{__('messages.Charte-Graphique Question')}}
               
                </div>
                <p>
                {{__('messages.Charte-Graphique Paragraph B')}}
   
</p>
<p>
{{__('messages.Charte-Graphique Paragraph C')}}
    
</p>


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
           
            <h1 class="mb-5"> {{__('Recent achievements')}} </h1>
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
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'1-Stand_EasySolution'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_EasySolution.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_EasySolution.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_EasySolution'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'1-Stand_Freshworks'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_Freshworks.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_Freshworks.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_Freshworks'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'1-Stand_Labomag'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_Labomag.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_Labomag.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_Labomag'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'1-Stand_Luxalight'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_Luxalight.jpg')}}" alt="">
                     </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_Luxalight.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_Luxalight'])}}"><i
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

 
 