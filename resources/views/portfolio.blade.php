
@include('static.header')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-3">
            <h1 class="display-2 mb-4 animated slideInDown text-white">Portfolio</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('accueil')}}">{{__('messages.Home')}}</a></li>
                   
                    <li class="breadcrumb-item " style="color: var(--primary)" aria-current="page">Portfolio</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Project Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <!-- <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium" style="color:var(--primary)">Notre Portfolio</p>
            <h1 class="display-5 mb-5">Nous avons réalisé de nombreux projets géniaux</h1>
        </div> -->
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

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'1-Stand_KJPower'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_KJPower.jpg')}}" alt="">
                     </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_KJPower.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_KJPower'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'1-Stand_Safiplast'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/1-Stand_Safiplast.jpg')}}" alt="">
                     </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/1-Stand_Safiplast.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'1-Stand_Safiplast'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_a_photonics'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_a_photonics.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_a_photonics.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_a_photonics'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'STAND_A2i'])}}" >
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/STAND_A2i.png')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/STAND_A2i.png')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'STAND_A2i'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                   <a href="{{route('portfolio.view',['item'=>'STAND_AB'])}}">
                   <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/STAND_AB.jpg')}}" alt="">
                   </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/STAND_AB.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'STAND_AB'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                  <a href="{{route('portfolio.view',['item'=>'Stand_AE_PHOTONICS'])}}">
                  <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_AE_PHOTONICS.jpg')}}" alt="">
                  </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_AE_PHOTONICS.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_AE_PHOTONICS'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'STAND_ALAKHDAR_BANK'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/STAND_ALAKHDAR_BANK.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/STAND_ALAKHDAR_BANK.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'STAND_ALAKHDAR_BANK'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_ALF_AFRIQUIA'])}}">   <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_ALF_AFRIQUIA.jpg')}}" alt=""></a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_ALF_AFRIQUIA.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_ALF_AFRIQUIA'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                   <a  href="{{route('portfolio.view',['item'=>'Stand_ALFA-INTES'])}}">
                   <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_ALFA-INTES.jpg')}}" alt="">
                   </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_ALFA-INTES.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_ALFA-INTES'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_bureau_veritas'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_bureau_veritas.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_bureau_veritas.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_bureau_veritas'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_CLEANENERGY'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_CLEANENERGY.png')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_CLEANENERGY.png')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_CLEANENERGY'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_CLEANENERGY-v2'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_CLEANENERGY-v2.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_CLEANENERGY-v2.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_CLEANENERGY-v2'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_Consulat_D`ITALIE'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Consulat_D`ITALIE.jpg')}}" alt="">
                    </a>    
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Consulat_D`ITALIE.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Consulat_D`ITALIE'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_contabria_labs'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_contabria_labs.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_contabria_labs.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_contabria_labs'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_D_MCDOMAR_GROUPE_VERT'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_D_MCDOMAR_GROUPE_VERT.png')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_D_MCDOMAR_GROUPE_VERT.png')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_D_MCDOMAR_GROUPE_VERT'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_DELTATEC'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_DELTATEC.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_DELTATEC.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_DELTATEC'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_ECA'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_ECA.jpg')}}" alt="">
                    </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_ECA.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_ECA'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'Stand_Eco_Green_Energy'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Eco_Green_Energy.jpg')}}" alt="">
                      </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Eco_Green_Energy.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Eco_Green_Energy'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_ELEPHANT-VERT'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_ELEPHANT-VERT.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_ELEPHANT-VERT.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_ELEPHANT-VERT'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_fabrilec'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_fabrilec.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_fabrilec.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_fabrilec'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_faun'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_faun.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_faun.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_faun'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_fenip'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_fenip.png')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_fenip.png')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_fenip'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_FRIGO_MEKANIK'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_FRIGO_MEKANIK.jpg')}}" alt="">
                    </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_FRIGO_MEKANIK.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_FRIGO_MEKANIK'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_FRMF'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_FRMF.jpg')}}" alt="">
                 </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_FRMF.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_FRMF'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_grand_laboratoire'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_grand_laboratoire.jpg')}}" alt="">
                     </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_grand_laboratoire.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_grand_laboratoire'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_GSHK'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_GSHK.jpg')}}" alt="">
                     </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_GSHK.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_GSHK'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_HOLLAND'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_HOLLAND.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_HOLLAND.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_HOLLAND'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_Iturrl'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Iturrl.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Iturrl.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Iturrl'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'STAND_LADARSOLAR_ENERGY'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/STAND_LADARSOLAR_ENERGY.jpg')}}" alt="">
                     </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/STAND_LADARSOLAR_ENERGY.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'STAND_LADARSOLAR_ENERGY'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_LE_ROY'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_LE_ROY.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_LE_ROY.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_LE_ROY'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_MCDOMAR_GROUPE_VERT_v2'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_MCDOMAR_GROUPE_VERT_v2.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_MCDOMAR_GROUPE_VERT_v2.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_MCDOMAR_GROUPE_VERT_v2'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_MDBIOMEDICAL'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_MDBIOMEDICAL.jpg')}}" alt="">
                    </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_MDBIOMEDICAL.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_MDBIOMEDICAL'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_MIADENT'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_MIADENT.png')}}" alt="">
                    </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_MIADENT.png')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_MIADENT'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'Stand_Nations_Unies'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Nations_Unies.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Nations_Unies.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Nations_Unies'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_Omnia'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Omnia.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Omnia.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Omnia'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_PHONAK'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_PHONAK.png')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_PHONAK.png')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_PHONAK'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_SEDIS'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_SEDIS.jpg')}}" alt="">
                    </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_SEDIS.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_SEDIS'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'STAND_SINPEC'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/STAND_SINPEC.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/STAND_SINPEC.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'STAND_SINPEC'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'STAND_SKOV'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/STAND_SKOV.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/STAND_SKOV.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'STAND_SKOV'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                        <a href="{{route('portfolio.view',['item'=>'STAND_SUNDES'])}}">
                        <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/STAND_SUNDES.jpg')}}" alt="">
                        </a>
                      
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/STAND_SUNDES.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'STAND_SUNDES'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_United_industriel'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_United_industriel.jpg')}}" alt="">
                    </a>    
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_United_industriel.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_United_industriel'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_V2'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_V2.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_V2.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_V2'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_Y_HAGILES'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Y_HAGILES.jpg')}}" alt="">
                    </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Y_HAGILES.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Y_HAGILES'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_Z_AKRO'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_AKRO.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_AKRO.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_AKRO'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'Stand_Z_AMED'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_AMED.png')}}" alt="">
                      </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_AMED.png')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_AMED'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_Z_AMM'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_AMM.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_AMM.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_AMM'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_Z_DVD_VALVES'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_DVD_VALVES.png')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_DVD_VALVES.png')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_DVD_VALVES'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_Z_Eriser'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_Eriser.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_Eriser.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_Eriser'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_Z_Finie_brossette'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_Finie_brossette.jpg')}}" alt="">
                     </a>   
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_Finie_brossette.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_Finie_brossette'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_Z_Gholami'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_Gholami.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_Gholami.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_Gholami'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'Stand_Z_MCDOMAR_GROUPE_VERT_v3'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_MCDOMAR_GROUPE_VERT_v3.jpg')}}" alt="">
                      </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_MCDOMAR_GROUPE_VERT_v3.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_MCDOMAR_GROUPE_VERT_v3'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'Stand_Z_MH_Diffusion'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_MH_Diffusion.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_MH_Diffusion.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_MH_Diffusion'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_Z_Nactmaroc'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_Nactmaroc.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_Nactmaroc.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_Nactmaroc'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'Stand_Z_PLASTIFER'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_PLASTIFER.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_PLASTIFER.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_PLASTIFER'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'Stand_Z_SGS'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_SGS.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_SGS.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_SGS'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_Z_Sinpec'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_Sinpec.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_Sinpec.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_Sinpec'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_Z_SRM'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_SRM.jpg')}}" alt="">
                     </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_SRM.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_SRM'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                     <a href="{{route('portfolio.view',['item'=>'Stand_Z_SVD'])}}">
                     <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Z_SVD.jpg')}}" alt="">
                     </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Z_SVD.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Z_SVD'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_ZD_MCDOMAR'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_ZD_MCDOMAR.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_ZD_MCDOMAR.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_ZD_MCDOMAR'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                    <a href="{{route('portfolio.view',['item'=>'Stand_ZECCA'])}}">
                    <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_ZECCA.jpg')}}" alt="">
                    </a>  
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_ZECCA.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_ZECCA'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'Stand_Zecca_v2'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_Zecca_v2.png')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_Zecca_v2.png')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_Zecca_v2'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="project-item">
                    <div class="position-relative">
                      <a href="{{route('portfolio.view',['item'=>'Stand_zz_laticrete'])}}">
                      <img class="img-fluid" style="height: 300px;" src="{{asset('public/assets/img/project_stands/Stand_zz_laticrete.jpg')}}" alt="">
                      </a> 
                        <!-- <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('public/assets/img/project_stands/Stand_zz_laticrete.jpg')}}"
                               data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{route('portfolio.view',['item'=>'Stand_zz_laticrete'])}}"><i
                                    class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Project End -->


@include('static.footer')
