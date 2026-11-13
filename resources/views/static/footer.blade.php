<!-- Footer Start -->


<style>

    /* Ensures the width is 100% and no horizontal overflow on mobile screens */
html, body {
    width: 100%;
    overflow-x: hidden;
}

/* Prevent footer or other elements from exceeding the screen width */
.footer {
    width: 100%;
    box-sizing: border-box; /* Ensures padding and borders don't cause overflow */
}

/* Optional: Adjust padding/margin for mobile view */

/* Default background for larger screens */
.footer {
    background: url("{{asset('/public/assets/img/footer-banner.png')}}") no-repeat center center;
    background-size: cover;
    width: 100%;
}

/* Background for screens 425px or smaller */
@media screen and (max-width: 650px) {
    .footer {
        background: url("{{asset('/public/assets/img/footer-banner-mobile.png')}}") no-repeat;
        background-size: cover;
        padding-left: 0;  /* Adjust if needed */
        padding-right: 0; /* Adjust if needed */
    }
}
</style>

<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" 
    data-wow-delay="0.1s" 
  >
    <div class="container py-5">
        <div class="row g-5">
            <!-- <a href="{{route('accueil')}}">
                <h2 class="text-white fw-bold m-0">
                    <img class="img-fluid" style="width:150px;" src="{{asset('public/assets/img/logo-white.png')}}" alt="" />
                </h2>
            </a> -->
            <div class="col-lg-4 col-md-6">
                <h4 class=" mb-4" style="color:#F2C71C;">{{__('messages.Our Office')}}</h4>
                <p class="mb-2" style="color:white;"><i class="fa fa-map-marker-alt me-3"></i>3, Avenue 2 Mars Résidence Marwa 5 ème étage Casablanca, Maroc</p>
                <p class="mb-2" style="color:white;"><i class="fa fa-phone-alt me-3"></i>+212 5 22 48 44 25</p>
                <p class="mb-2" style="color:white;"><i class="fab fa-whatsapp me-3"></i> +212 6 68 74 63 86</p>
                <p class="mb-2" style="color:white;"><i class="fa fa-envelope me-3"></i>contact@allopub.ma</p>
                <div class="d-flex pt-3">
                    <!-- WhatsApp link -->
                    <a target="_blank" class="btn btn-square btn-light rounded-circle me-2" href="https://wa.me/212668746386">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <!-- Facebook link -->
                    <a target="_blank" class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/allopub/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <!-- Instagram link -->
                    <a target="_blank" class="btn btn-square btn-light rounded-circle me-2" href="https://www.instagram.com/stand_maroc_allopub/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <!-- LinkedIn link -->
                    <a target="_blank" class="btn btn-square btn-light rounded-circle me-2" href="https://www.linkedin.com/company/allopub/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4" style="color:#F2C71C !important;">{{__('messages.Quick Links')}}</h4>
                <a class="btn btn-link" style="color:white;" href="{{route('agence')}}">{{__('messages.Agency')}}</a>
                <a class="btn btn-link" style="color:white;" href="{{route('contact')}}">{{__('messages.contact-us')}}</a>
                <a class="btn btn-link" style="color:white;" href="{{route('produits-et-services')}}">{{__('messages.services')}}</a>
                <a class="btn btn-link" style="color:white;" href="{{route('portfolio')}}">Portfolio</a>
                <a class="btn btn-link" style="color:white;" href="{{route('devis-en-ligne')}}">{{__('messages.Quote')}}</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4" style="color:#F2C71C !important;">{{__('messages.Business Hours')}}</h4>
                <p class="mb-1" style="color:white;">{{__('messages.Monday')}} - {{__('messages.Friday')}}</p>
                <h6 style="color:#F2C71C;">08:30 - 18:30 </h6>
                <p class="mb-1" style="color:white;">{{__('messages.Saturday')}}</p>
                <h6 style="color:#F2C71C;">{{__('messages.Closed')}}</h6>
                <p class="mb-1" style="color:white;">{{__('messages.Sunday')}}</p>
                <h6 style="color:#F2C71C;">{{__('messages.Closed')}}</h6>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="fw-medium text-light" href="#">AlloPub</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                Designed By <a class="fw-medium text-light" href="https://htmlcodex.com">AlloPub </a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top" style="background-color: var(--primary);"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('public/assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('public/assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('public/assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('public/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/assets/lib/lightbox/js/lightbox.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('public/assets/js/main.js')}}"></script>

<script>
    // Function to detect the selected language from the URL
    function getLanguageFromURL() {
        // Fetch the current app locale from Laravel's config
        var applocale = '{{ config("app.locale") }}';  // Use Laravel's config value

        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get('lang') || applocale; // Default to the app's default locale if no language is specified in URL
    }

    // Update the flag and language text based on the selected language
    function updateLanguage() {
        const language = getLanguageFromURL();
        const flagIcon = document.getElementById('flag-icon');
        const languageText = document.getElementById('language-text');
        const languageButton = document.getElementById('language-button');
        const dropdownMenu = document.getElementById('language-options');

        const flagIconMobile = document.getElementById('flag-icon-mobile');
        const languageTextMobile = document.getElementById('language-text-mobile');
        const languageButtonMobile = document.getElementById('language-button-mobile');
        const dropdownMenuMobile = document.getElementById('language-options-mobile');

        if (language === 'fr') {
            flagIcon.src = 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/320px-Flag_of_France.svg.png';
            languageText.textContent = 'Français';

            flagIconMobile.src = 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/320px-Flag_of_France.svg.png';
            languageTextMobile.textContent = 'Fr';
        } else {
            flagIcon.src = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/320px-Flag_of_the_United_States.svg.png';
            languageText.textContent = 'English';

            flagIconMobile.src = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/320px-Flag_of_the_United_States.svg.png';
            languageTextMobile.textContent = 'En';
        }

        // Toggle the dropdown visibility on click for desktop
        languageButton.addEventListener('click', function() {
            const isVisible = dropdownMenu.style.display === 'block';
            dropdownMenu.style.display = isVisible ? 'none' : 'block';
        });

        // Toggle the dropdown visibility on click for mobile
        languageButtonMobile.addEventListener('click', function() {
            const isVisibleMobile = dropdownMenuMobile.style.display === 'block';
            dropdownMenuMobile.style.display = isVisibleMobile ? 'none' : 'block';
        });

        // Close the dropdown when clicking outside
        window.addEventListener('click', function(event) {
            if (!languageButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.style.display = 'none';
            }
        });

        // Close the dropdown when clicking outside on mobile
        window.addEventListener('click', function(event) {
            if (!languageButtonMobile.contains(event.target) && !dropdownMenuMobile.contains(event.target)) {
                dropdownMenuMobile.style.display = 'none';
            }
        });
    }

    // Initialize language selection when the page is ready
    document.addEventListener('DOMContentLoaded', function () {
        updateLanguage();
    });
</script>
</body>
</html>
