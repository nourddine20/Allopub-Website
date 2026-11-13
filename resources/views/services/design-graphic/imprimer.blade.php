<!-- <!DOCTYPE HTML>
<html>
<head>
<title>Stand Maroc Aménagement et fabrication de Stands au Maroc </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="Allopub" >
<meta name="description" content="AlloPub Agence spécialisée dans l’aménagement de Stands au Maroc ,fabrication des stands, Location et vente des stands à Casablanca - Maroc" />
<meta name="keywords" content="Stand Maroc Aménagement de stand, Fabrication stand, Réalisation stand, Location stand,vente stand, Enseigne magasin, Stand en location, Achat stand, Mobilier stand, Exposition, Stand maroc, Booth Morocco," />
<meta property="og:locale" content="fr_FR" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Agence d'aménagement de stand à Casablanca Maroc" />
<meta property="og:description" content="AlloPub Agence spécialisée dans l’aménagement de Stands,fabrication des stands, Location et vente des stands à Casablanca - Maroc" />
<meta property="og:url" content="http://allopub.ma/" />
<meta property="og:site_name" content="Allopub" />
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'> -->
<!-- <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- Add fancyBox main JS and CSS files -->
<!-- <script src="../js/jquery.min.js"></script>
<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="../css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52666484-1', 'auto');
  ga('send', 'pageview');

</script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<a href="devis-en-ligne.php" alt="Stand Casablanca maroc"> 
<div id="switch"></div>
</a>


 -->

 @include('static.header')


 <!-- Page Header Start -->
<div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-3">
        <h1 class="display-2 mb-4 animated slideInDown text-white">{{__('messages.Print')}} </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0" >
                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{route('produits-et-services')}}">Services</a></li>
                <li class="breadcrumb-item"><a href="{{route('design-graphique')}}"> {{__('messages.GRAPHIC DESIGN')}} </a></li>
                <li class="breadcrumb-item " style="color: var(--primary)" aria-current="page">
                {{__('messages.Print')}} 
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
                

                <img style="width: 446px;"  src="{{asset('public/assets/img/graphic design/mur-image-personnalise-visuel-image-entreprise.jpg')}}" alt="Location Stand Casablanca maroc">
                <h3 class="my-4">{{__('messages.Print_Title')}}</h3>
                <p>{{__('messages.Print_Paragraph_A')}}
    
                </p>

                <br>
                <div class='pp'>
                {{__('messages.Print_Question')}} 
                </div>
                <p>{{__('messages.Print_Paragraph_B')}}
   </p>

<p>{{__('messages.Print_Paragraph_C')}}
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
		
<style>
    /* Target the figure container for scaling */
.snip1205 {
  position: relative;
  overflow: hidden; /* Ensure the image doesn't overflow the container */
  transition: transform 0.3s ease-in-out; /* Smooth scaling transition */
}

/* Scale the image inside the figure on hover */
.snip1205:hover {
  transform: scale(1.1); /* Adjust scale as per your requirement */
}

/* Ensure the image inside the figure also has smooth transition */
.snip1205 img {
  transition: transform 0.3s ease-in-out;
}

/* Optional: Prevent image from shifting too much outside container */
.snip1205:hover img {
  transform: scale(1.1); /* You can also apply the scale to the image directly */
}

</style>

<!-- Project Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
           
            <h1 class="mb-5">{{__('Recent achievements')}}</h1>
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

<style>
  .snip1205 {
    position: relative;
    overflow: hidden;
    height: 100%; /* Ensure the figure has height */
  }

  /* Ensure that the image fits the figure */
  .snip1205 img {
    width: 100%; /* Make the image take up the full width of the figure */
    height: 100%; /* Make the image take up the full height of the figure */
    object-fit: cover; /* Ensures the image fills the figure without distortion */
  }

  /* Optional: Add hover effect with scaling */
  .snip1205:hover {
    transform: scale(1.1); /* Slight scaling on hover */
  }

  .snip1205 img {
    transition: transform 0.3s ease-in-out;
  }

  .snip1205:hover img {
    transform: scale(1.1);
  }
</style>

                    </div>


                    @include('static.footer')

 