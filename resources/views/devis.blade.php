
@include('static.header')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-3">
            <h1 class="display-2 mb-4 animated slideInDown text-white">{{__('messages.Quote')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('accueil')}}">{{__('messages.Home')}}</a></li>
                 
                    <li class="breadcrumb-item " style="color: var(--primary)" aria-current="page">{{__('messages.Quote')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Devis Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-medium " style="color: var(--primary);">{{__('messages.quote_request')}}</p>
                <h1 class="display-5 mb-4">{{__('messages.Need help from our experts? We are here')}}</h1>
                <p>{{__('messages.Would you like a quote? Contact us')}}</p>

                <a class="d-inline-flex align-items-center rounded overflow-hidden border " style="border-color: var(--primary);" href="">
                        <span class="btn-lg-square "  style="background-color:var(--primary); width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                    <span class="fs-5 fw-medium mx-4" style="color:var(--primary)">+212 5 22 48 44 25</span>
                </a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">{{__('messages.quote_request_gratuit')}}</h2>
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
                      <label for="validationDefault04" class="form-label">{{ __('messages.budget') }} (en HT)</label>
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
