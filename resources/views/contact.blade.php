
@include('static.header')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-3">
            <h1 class="display-2 mb-4 animated slideInDown text-white">{{__('messages.contact-us')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('accueil')}}">{{__('messages.Home')}}</a></li>
                   
                    <li class="breadcrumb-item " style="color:var(--primary);" aria-current="page">{{__('messages.contact-us')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 fw-medium " style="color: var(--primary)">{{__('messages.contact-us')}}</p>
                <h1 class="display-5 mb-5">{{__('messages.If you have any questions, please do not hesitate to contact us')}}</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <form id="quoteForm" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">{{__('messages.your name')}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">{{__('messages.your email')}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your mobile">
                                    <label for="mobile">{{__('messages.your mobile')}}</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">{{__('messages.subject')}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                    <label for="message">{{__('messages.Message')}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn  rounded-pill py-3 px-5" style="background-color: var(--primary)" type="submit">{{__('messages.Send Message')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">{{__('messages.Contact Details')}}</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square rounded-circle" style="background-color: var(--primary)">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>{{__('messages.Our Office')}}</h6>
                            <span>3, Avenue 2 Mars Résidence Marwa 5 ème étage Casablanca, Maroc</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square rounded-circle" style="background-color: var(--primary)">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>{{__('messages.call-us')}}</h6>
                            <span>+212 5 22 48 44 25</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square rounded-circle" style="background-color: var(--primary)">
                        <i
                        class="fab fa-whatsapp text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Whatsapp</h6>
                            <span>+212 6 68 74 63 86</span>
                        </div>
                    </div>

                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square rounded-circle" style="background-color: var(--primary)">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>{{__('messages.Send us an email')}}</h6>
                            <span>contact@allopub.ma</span>
                        </div>
                    </div>

                   
                    <iframe  style="width:90vw;border-radius:10px;margin:auto;" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3194.042411373561!2d-7.6149260000000005!3d33.582425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzPCsDM0JzU2LjciTiA3wrAzNic1My43Ilc!5e1!3m2!1sen!2sma!4v1730277228647!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    
                       </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

      <!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- jQuery (Required for Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
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


@include('static.footer')
