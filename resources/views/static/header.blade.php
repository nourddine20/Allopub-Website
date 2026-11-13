<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AlloPub - Digital Marketing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <meta name="keywords" content="Digital Marketing, Advertising, SEO, AlloPub">
    <meta name="description" content="AlloPub provides innovative digital marketing solutions to grow your brand.">
    <meta name="robots" content="index, follow">
    
    <link rel="canonical" href="https://www.allopub.ma/">
  
    <!-- Favicon -->
    <link href="{{asset('public/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('public/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <style>
        /* Custom language switcher styles */
        .language-switcher {
            position: relative;
            display: inline-block;
            font-size: 14px;
            z-index: 9999; /* Ensure the dropdown is above other items */
        }

        #language-button {
            display: flex;
            align-items: center;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            cursor: pointer;
            /* min-width: 100px; */
            justify-content: center;
        }

        #language-button-mobile {
            display: flex;
            align-items: center;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            cursor: pointer;
            min-width: 120px;
            justify-content: center;
        }

        #language-button .flag-icon {
            width: 20px;
            height: 14px;
            margin-right: 10px;
        }

        #language-button-mobile .flag-icon {
            width: 20px;
            height: 14px;
            margin-right: 10px;
        }

        #language-button .fa-caret-down {
            margin-left: 10px;
        }

        #language-button-mobile .fa-caret-down {
            margin-left: 10px;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%; /* Position below the button */
            left: 0;
            right: 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            z-index: 10000; /* Ensure the dropdown appears above other elements */
            display: none;
            width: 100%;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            padding: 10px;
            FONT-SIZE: 14px;
            color: black;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .dropdown-item:hover {
            background-color: #f8f8f8;
        }

        .dropdown-item .flag-icon {
            width: 20px;
            height: 14px;
            margin-right: 10px;
        }

        .dropdown-item .flag-icon {
            width: 20px;
            height: 14px;
            margin-right: 10px;
        }

        .navbar-toggler{
            background-color: transparent;
        }

        #language-select-desctop{
                display: inline-block;

            }

            #language-select-mobile{
                display:none !important ;
                
            }

     /* Optional: Add custom styles for mobile responsiveness */
     @media (max-width: 1400px) {

     }

        /* Optional: Add custom styles for mobile responsiveness */
        @media (max-width: 992px) {

            #navbar-header{
                background-color: white !important;
            }

            .navbar .navbar-nav .nav-link{
                color: #1C2035 !important;
            }
            #language-select-desctop{
                display: none;

            }

            #language-select-mobile{
                display: inline-block !important;
                
            }

            #language-button {
                
                font-size: 12px;
                min-width: 100px;
            }
            #language-button-mobile {
                
                font-size: 12px;
                min-width: 90px;
            }
        }
    </style>

    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border " style="color:var(--primary);" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid text-white d-none d-lg-flex" style="background-color: white;">
        <div class="px-2 py-3 m-auto">
            <div class="d-flex align-items-center">
            <div class="d-flex align-items-center" style="width:30vw;">
    <a href="mailto:contact@allopub.ma" style="text-decoration: none;">
        <small class="" style="color: #1C2035;font-size:1vw;">
            <i class="fa fa-envelope me-3"></i>contact@allopub.ma
        </small>
    </a>
    <a href="tel:+212522484425" style="text-decoration: none;">
        <small class="ms-4" style="color: #1C2035;font-size:1vw;">
            <i class="fa fa-phone-alt me-3"></i>+212 5 22 48 44 25
        </small>
    </a>
</div>

                <!-- <a href="{{route('accueil')}}">
                    <h2 class="text-white fw-bold m-0">
                        <img class="img-fluid w-50" src="{{asset('public/assets/img/logo.png')}}" alt="" />
                    </h2>
                </a> -->

                <a href="{{route('accueil')}}" style="text-align:center;width:30vw;margin-left:-5vw;">
                <img class="w-50" src="{{asset('public/assets/img/logo.png')}}" alt="" />
                </a>
                <div class="ms-auto d-flex align-items-center" >
                  <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light rounded-circle ms-2" target="_blank" style="background-color:#f8f8f8 ;color:var(--secondary) !important;" href="https://wa.me/212668746386"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-sm-square btn-light rounded-circle ms-2" target="_blank" style="background-color:#f8f8f8 ;color:var(--secondary) !important;" href="https://www.facebook.com/allopub/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light rounded-circle ms-2" target="_blank" style="background-color:#f8f8f8 ;color:var(--secondary) !important;" href="https://www.instagram.com/stand_maroc_allopub/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-sm-square btn-light rounded-circle ms-2" target="_blank" style="background-color:#f8f8f8 ;color:var(--secondary) !important;" href="https://www.linkedin.com/company/allopub/"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                    <!-- Custom Language Switcher Dropdown -->
                    <div class="ms-3 d-flex language-switcher" id="language-select-desctop">
                        <button id="language-button" class="btn btn-sm btn-light" style="background-color:#f8f8f8 ;color:var(--secondary) !important;">
                            <img id="flag-icon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/320px-Flag_of_France.svg.png" alt="Flag" class="flag-icon">
                            <span id="language-text">Français</span> <i class="fa fa-caret-down"></i>
                        </button>
                        <div id="language-options" class="dropdown-menu">
                            <a href="?lang=fr" class="dropdown-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/320px-Flag_of_France.svg.png" alt="Français" class="flag-icon"> Français
                            </a>
                            <a href="?lang=en" class="dropdown-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/320px-Flag_of_the_United_States.svg.png" alt="English" class="flag-icon"> English
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top" id="navbar-header" style="background-color: var(--secondary);">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-lg-0">

            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
                <a href="{{route('accueil')}}" class="navbar-brand d-lg-none" style="width:125px;">
                    <h1 class="fw-bold m-0"><img class="img-fluid me-3" style="width:100%;" src="{{asset('public/assets/img/logo.png')}}" alt="" /></h1>
                    
                </a>

               
                   <!-- Custom Language Switcher Dropdown -->
                   <div class="ms-3 d-flex language-switcher" id="language-select-mobile">
                        <button id="language-button-mobile" class="btn btn-sm btn-light">
                            <img id="flag-icon-mobile" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/320px-Flag_of_France.svg.png" alt="Flag" class="flag-icon">
                            <span id="language-text-mobile">Fr</span> <i class="fa fa-caret-down"></i>
                        </button>
                        <div id="language-options-mobile" class="dropdown-menu">
                            <a href="?lang=fr" class="dropdown-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/320px-Flag_of_France.svg.png" alt="Français" class="flag-icon"> Fr
                            </a>
                            <a href="?lang=en" class="dropdown-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/320px-Flag_of_the_United_States.svg.png" alt="English" class="flag-icon"> En
                            </a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a id="home" href="{{route('accueil')}}" class="nav-item nav-link">{{__('messages.Home')}}</a>
                        <a id="agence" href="{{route('agence')}}" class="nav-item nav-link">{{__('messages.Agency')}}</a>
                        <a id="services" href="{{route('produits-et-services')}}" class="nav-item nav-link">{{__('messages.Services')}}</a>
                        <a id="portfolio" href="{{route('portfolio')}}" class="nav-item nav-link">Portfolio</a>
                        <a id="devis" href="{{route('devis-en-ligne')}}" class="nav-item nav-link">{{__('messages.Quote')}}</a>
                        <a id="contact" href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="{{route('devis-en-ligne')}}" class="btn rounded-pill py-2 px-3" style="color:var(--secondary);background-color: var(--primary);">{{ __('messages.quote_request') }}</a>
                    </div>
                </div>
                
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <script>

const navItems = document.querySelectorAll('.nav-item');

     
            navItems.forEach(function(item) {
                    item.classList.remove('active');
                });

               
        if(window.location.href == 'http://localhost/allo_pub_serveur/'){
            
            document.getElementById('home').classList.add('active');

        }else if(window.location.href == 'http://localhost/allo_pub_serveur/stand-qui-somme-nous'){
            console.log(window.location);
            document.getElementById('agence').classList.add('active');
        }else if(window.location.href == 'http://localhost/allo_pub_serveur/produits-et-services'){
            document.getElementById('services').classList.add('active');
        }else if(window.location.href == 'http://localhost/allo_pub_serveur/portfolio'){

            document.getElementById('portfolio').classList.add('active');
        }else if(window.location.href == 'http://localhost/allo_pub_serveur/devis-en-ligne'){ 
            document.getElementById('devis').classList.add('active');
        }else if(window.location.href == 'http://localhost/allo_pub_serveur/contact'){ 
            document.getElementById('contact').classList.add('active');
        }

</script>
