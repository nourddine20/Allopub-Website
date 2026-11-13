@include('static.header')
<style>

    .switch {
        position: relative;
        display: inline-block;
        margin: 0 5px;
    }

    .switch > span {
        position: absolute;
        top: 9px;
        pointer-events: none;
        font-family: 'Helvetica', Arial, sans-serif;
        font-weight: bold;
        font-size: 12px;
        text-transform: uppercase;
        text-shadow: 0 1px 0 rgba(0, 0, 0, .06);
        width: 50%;
        text-align: center;
    }

    input.check-toggle-round-flat:checked ~ .off {
        color: #000;
    }

    input.check-toggle-round-flat:checked ~ .on {
        color: #fff;
    }

    .switch > span.on {
        left: 0;
        padding-left: 2px;
        color: #000;
    }

    .switch > span.off {
        right: 0;
        padding-right: 4px;
        color: #fff;
    }

    .check-toggle {
        position: absolute;
        margin-left: -9999px;
        visibility: hidden;
    }
    .check-toggle + label {
        display: block;
        position: relative;
        cursor: pointer;
        outline: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    input.check-toggle-round-flat + label {
        padding: 2px;
        width: 97px;
        height: 35px;
        background-color: #fdc200;
        -webkit-border-radius: 60px;
        -moz-border-radius: 60px;
        -ms-border-radius: 60px;
        -o-border-radius: 60px;
        border-radius: 60px;
    }
    input.check-toggle-round-flat + label:before, input.check-toggle-round-flat + label:after {
        display: block;
        position: absolute;
        content: "";
    }

    input.check-toggle-round-flat + label:before {
        top: 2px;
        left: 2px;
        bottom: 2px;
        right: 2px;
        background-color: #fdc200;
        -webkit--moz-border-radius: 60px;
        -ms-border-radius: 60px;
        -o-border-radius: 60px;
        border-radius: 60px;
    }



    input.check-toggle-round-flat + label:after {
        top: 4px;
        left: 4px;
        bottom: 4px;
        width: 48px;
        background-color: #fff;
        -webkit-border-radius: 52px;
        -moz-border-radius: 52px;
        -ms-border-radius: 52px;
        -o-border-radius: 52px;
        border-radius: 52px;
        -webkit-transition: margin 0.2s;
        -moz-transition: margin 0.2s;
        -o-transition: margin 0.2s;
        transition: margin 0.2s;
    }

    input.check-toggle-round-flat:checked + label {
    }

    input.check-toggle-round-flat:checked + label:after {
        margin-left: 44px;
    }




</style>
<style>
    .navbar_cus {
        width: 100%;
        background-color: #555;
        overflow: auto;
    }

    .navbar_cus a {
        float: left;
        text-align: center;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
    }


    .carousel {
        background: #fafafa;
    }

    .carousel-main {
        margin-bottom: 8px;
    }

    .carousel-cell {
        width: 100%;
        height: 504px;
        margin-right: 8px;
        background: transparent;
        border-radius: 5px;
        /* counter-increment: carousel-cell; */
    }


    .carousel-nav .carousel-cell {
        height: 90px;
        width: 120px;
    }

    /* .carousel-nav .carousel-cell:before { */
    /*   font-size: 50px; */
    /*   line-height: 80px; */
    /* } */

    /* .carousel-nav .carousel-cell.is-nav-selected { */
    /*   background: #ED2; */
    /* } */

    /* Atelierbram edit */
    .carousel-main img {
        display: block;
        margin: 0 auto;
        width: 90%;
        height: 100%;
    }


    .flickity-enabled {
        position: relative;
    }

    .flickity-enabled:focus {
        outline: none;
    }

    .flickity-viewport {
        overflow: hidden;
        position: relative;
        height: 100%;
    }

    .flickity-slider {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    /* draggable */

    .flickity-enabled.is-draggable {
        -webkit-tap-highlight-color: transparent;
        tap-highlight-color: transparent;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .flickity-enabled.is-draggable .flickity-viewport {
        cursor: move;
        cursor: -webkit-grab;
        cursor: grab;
    }

    .flickity-enabled.is-draggable .flickity-viewport.is-pointer-down {
        cursor: -webkit-grabbing;
        cursor: grabbing;
    }

    /* ---- previous/next buttons ---- */

    .flickity-prev-next-button {
        position: absolute;
        top: 50%;
        width: 44px;
        height: 44px;
        border: none;
        border-radius: 50%;
        background: white;
        background: hsla(0, 0%, 100%, 0.75);
        cursor: pointer;
        /* vertically center */
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .flickity-prev-next-button:hover {
        background: white;
    }

    .flickity-prev-next-button:focus {
        outline: none;
        box-shadow: 0 0 0 5px #09f;
    }

    .flickity-prev-next-button:active {
        opacity: 0.6;
    }

    .flickity-prev-next-button.previous {
        left: 10px;
    }
    .flickity-prev-next-button.next {
        right: 10px;
    }
    /* right to left */

    /* .flickity-rtl .flickity-prev-next-button.previous { */
    /*   left: auto; */
    /*   right: 10px; */
    /* } */
    /* .flickity-rtl .flickity-prev-next-button.next { */
    /*   right: auto; */
    /*   left: 10px; */
    /* } */

    .flickity-prev-next-button:disabled {
        opacity: 0.3;
        cursor: auto;
    }

    .flickity-prev-next-button svg {
        position: absolute;
        left: 20%;
        top: 20%;
        width: 60%;
        height: 60%;
    }

    .flickity-prev-next-button .arrow {
        fill: #333;
    }
    .list_client_info {
        font-size: 18px;
        align-self: center;
        white-space: pre-line;
    }
    .regular-400 {
        font-weight: 400;
    }
    .semi-bold-600 {
        font-weight: 600;
    }
    /* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
    @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
        }
    }

    @media (max-width: 758px ) {
        .carousel-main.flickity-enabled.is-draggable .flickity-viewport {
            height: 200px !important;
        }
        .carousel-main img {
            height: 200px;
        }
    }
    @media screen and (min-width: 768px) {
        .switch {
            right: 0 !important;
            margin-top: 45px !important;
        }
    }

</style>




<!-- Page Header Start -->
<div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-3">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Stand Freshworks</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                <li class="breadcrumb-item " style="color: var(--primary)" aria-current="page"> Freshworks</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->




<!-- fin ajout contacter nous -->
<script type="text/javascript">
    var a = document.querySelector(".portfolio");
    a.classList.add("active");
</script>


<section class="mt-5 mb-5">
    <div class="container my-lg-5" data-aos="fade-up" data-aos-duration="2000">
        <div class="row gy-5 g-lg-5 mb-4" id=" ">
            <!-- Start Recent Work -->
            <div class="col-md-8 mb-3">
                <!-- Flickity HTML init -->
                <div class="carousel carousel-main" data-flickity='{"pageDots": false }'>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-1.jpg')}}" /></div>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-3.jpg')}}" /></div>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-4.jpg')}}" /></div>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-5.jpg')}}" /></div>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-6.jpg')}}" /></div>

                </div>
                <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-1.jpg')}}" class="h-100 w-100" /></div>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-3.jpg')}}" class="h-100 w-100" /></div>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-4.jpg')}}" class="h-100 w-100" /></div>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-5.jpg')}}" class="h-100 w-100" /></div>
                    <div class="carousel-cell"><img src="{{asset('public/assets/img/project_details/1-Stand_Freshworks-6.jpg')}}" class="h-100 w-100" /></div>
                </div>
            </div>
            <div class="col-md-4 mb-3 d-flex">
                <ul class="list-unstyled list_client_info  regular-400">
                    <li class="semi-bold-600">Client : <p class="text_portfolio" style="text-transform: uppercase;">Freshworks</p></li>
                    <li class="semi-bold-600">Type : <p class="text_portfolio">Stand personnalisé </p></li>
                    <li class="semi-bold-600">{{__('messages.Event')}} : <p class="text_portfolio" style="text-transform: uppercase;">Gitex africa

</p></li>
                </ul>
            </div>
              <!-- Start Recent Work -->
              <div><a href="1-Stand_KJPower"  class="bouton-lien">{{__('messages.Next')}} ></a>
             <a href="1-Stand_EasySolution"  class="bouton-devis"> < {{__('messages.Back')}} </a>
             </div>
        </div>

        <style>
            .bouton-lien {
                display: inline-block;
                background-color: #f2c71c;
                border-radius: 10px;

                font-weight: bold;
                color: black;
                text-align: center;
                font-size: 17px;
                padding: 12px 0px 12px 0px;
                width: 169px;
                -webkit-transition: all 0.5s;
                -moz-transition: all 0.5s;
                -o-transition: all 0.5s;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                float: right;
                margin-right: 10px;
            }
            .bouton-lien:hover {
                font-weight: bold;
                color: white; /* Changer la couleur au survol, ajustez-la selon vos préférences */
                background-color: #000; /* Changer la couleur de fond au survol, ajustez-la selon vos préférences */
            }


            .bouton-devis {
                display: inline-block;
                background-color: #77777769;
                border-radius: 10px;
                font-weight: bold;
                color: black;
                text-align: center;
                font-size: 17px;
                padding: 12px 0px 12px 0px;
                width: 169px;
                -webkit-transition: all 0.5s;
                -moz-transition: all 0.5s;
                -o-transition: all 0.5s;
                transition: all 0.5s;
                margin: 5px;
                margin-right: 10px;
                float: left;
            }

        </style>
        <!-- <div class="row row_other_works" style="height: 230px">
            <div class="carousel carousel-nav other_works" data-flickity='{  "contain": true, "pageDots": false }'>

            </div>
        </div> -->
    </div>

</section>
<!-- End Recent Work -->



<div class="footer">
    <?php if($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ) { ?><?php } ?>
    <div style="position:absolute; top: -9999px;">
        Online casinos in Canada have become increasingly popular, providing players with a convenient and enjoyable gambling experience. One such online casino is Playigo Casino Canada, known for its wide range of games and user-friendly interface. You can find a detailed review of Playigo Casino Canada at this link: <a href="https://afterthehouselights.com/review/playigo-casino/">playigo casino canada</a>.
        When it comes to online casinos in Canada, Supacasi Casino stands out as a top contender. For an in-depth review of Supacasi Casino in Canada, check out this comprehensive analysis: <a href="https://afterthehouselights.com/review/supacasi-casino/">supacasi casino review canada</a>. It provides valuable insights into the platform's features, games, and overall user experience.
    </div>
    <div style="position: absolute; top: -99999px;">

        <p>Les casinos en ligne au Canada sont de plus en plus populaires. Un exemple populaire est le casino de dépôt de 3 dollars, où vous pouvez profiter des jeux de casino en ligne en déposant un petit montant. Pour en savoir plus sur le dépôt minimum de 3 dollars, vous pouvez consulter <a href="https://ocmagazine.org/minimum-deposit/depot-minimum-3/">ce lien</a>.
        </p>
        <p>Les casinos en ligne au Canada offrent aux joueurs la possibilité de faire des dépôts de casino de 3 dollars, ce qui permet à ceux qui ont un budget limité de profiter des jeux de casino en ligne. Pour en savoir plus sur le dépôt de casino de 3 dollars, vous pouvez visiter ce lien <a href="https://ocmagazine.org/minimum-deposit/depot-minimum-3/">dépôt de casino de 3 dollars</a>. Il vous donnera davantage d'informations sur cette option abordable et vous aidera à choisir le casino en ligne qui convient le mieux à vos besoins.
        </p>
        <p>Les casinos en ligne au Canada offrent une variété d'options pour les joueurs, y compris des casinos en ligne avec un dépôt minimum de 3 dollars. Si vous souhaitez en savoir plus sur ces casinos, vous pouvez consulter cet article sur <a href="https://ocmagazine.org/minimum-deposit/depot-minimum-3/">casino en ligne avec dépôt minimum 3 dollars</a>. Ils offrent une opportunité aux joueurs de profiter de leurs jeux préférés avec un dépôt minimal, ce qui leur permet de tester différentes plateformes sans dépenser beaucoup d'argent.
        </p>
        <p>Les casinos en ligne au Canada sont de plus en plus populaires, offrant aux joueurs une expérience de jeu pratique et excitante. L'un des avantages attractifs de ces casinos en ligne est la possibilité de déposer simplement 3 dollars pour commencer à jouer. Pour plus d'informations sur les dépôts minimums de 3 dollars dans les casinos en ligne, veuillez suivre ce lien: <a href="https://ocmagazine.org/minimum-deposit/depot-minimum-3/">déposer 3 dollars casino</a>.
        </p>
        <p>Les casinos en ligne au Canada sont devenus une forme populaire de divertissement, offrant aux joueurs la possibilité de jouer à une grande variété de jeux depuis le confort de leur domicile. L'un des avantages de ces casinos en ligne est la possibilité de déposer un minimum de 3 dollars pour commencer à jouer. Pour en savoir plus sur les options de dépôt minimum de 3 dollars, vous pouvez consulter cet article : <a href="https://ocmagazine.org/minimum-deposit/depot-minimum-3/">déposer 3 dollars casino</a>.
        </p>
        <p>Les casinos en ligne au Canada offrent une variété d'options pour les joueurs, y compris le dépôt minimum de 3 dollars. Si vous souhaitez en savoir plus sur les casinos qui acceptent un dépôt minimum de 3 dollars, vous pouvez consulter cet article sur le site OCMagazine : <a href="https://ocmagazine.org/minimum-deposit/depot-minimum-3/">déposer 3 dollars casino</a>. Il fournit des informations détaillées sur les casinos en ligne au Canada qui proposent cette option abordable aux joueurs.
        </p>
        <p>Les casinos en ligne au Canada sont de plus en plus populaires, offrant aux joueurs une expérience de jeu pratique et excitante. Un exemple de site de casino en ligne au Canada est http://ocmagazine.org/minimum-deposit/depot-minimum-3/ où les joueurs peuvent profiter d'un dépôt minimum de seulement 3$. Ce casino en ligne offre une grande variété de jeux, ainsi que des bonus attractifs et des options de paiement sécurisées.
        </p>

        <p>Les casinos en ligne au Canada offrent diverses options aux joueurs, y compris les dépôts minimums. Ocmagazine.org propose un lien <a href="https://ocmagazine.org/minimum-deposit/depot-minimum-3/">ocmagazine.org/minimum-deposit/depot-minimum-3/</a> qui présente des informations sur les casinos en ligne avec un dépôt minimum de 3$. Ce site offre aux joueurs la possibilité de jouer à des jeux de casino en ligne en dépensant un montant minimum de dépôt.
        </p>
        <p>Les casinos en ligne sont populaires au Canada et offrent aux joueurs des opportunités de pari et de divertissement. Un site de casino en ligne auquel les joueurs canadiens peuvent accéder est http://ocmagazine.org/minimum-deposit/depot. Ce lien (<a href="https://ocmagazine.org/minimum-deposit/depot-minimum-3/">http://ocmagazine.org/minimum-deposit/depot</a>) propose également un dépôt minimum intéressant de 3$.
        </p>
        <p>Les casinos en ligne au Canada sont devenus extrêmement populaires, offrant aux joueurs une expérience de jeu pratique et accessible depuis chez eux. Un exemple de casino en ligne canadien populaire est https://ocmagazine.org/minimum-deposit/depot-minimum-3/, où les joueurs peuvent profiter de jeux passionnants et même effectuer un dépôt minimum de 3$. Avec ce lien <a href="https://ocmagazine.org/minimum-deposit/depot-minimum-3/">https://ocmagazine.org/minimum-deposit/depot-minimum-3/</a>, les joueurs peuvent explorer une variété d'options de divertissement et tenter leur chance pour gagner gros.
        </p>
    </div>
    <?php
    if(isset($ok_mail)){?>
        <script> window.location.href='thank.php'; </script>
    <?php } ?>



    <script>
        $('#language-toggle').click(function(){
            var span = document.getElementsByTagName("input");
            // for(var i = 0; i < span.length; i++) {
            //     if (this.checked === true) {
            window.location.href = './../en' ;
            // }   else {
            //     window.location.href = 'fr' ;
            // }
            // }

        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="./../js/isotope.pkgd.js"></script>

    @include('static.footer')
