@include('static.header')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-3">
            <h1 class="display-2 mb-4 animated slideInDown text-white">{{__('messages.About Us')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('accueil')}}">{{__('messages.Home')}}</a></li>
                  
                    <li class="breadcrumb-item " style="color: var(--primary)" aria-current="page">{{__('messages.Agency')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12  col-lg-6 col-xl-5">
      <!-- <video style="width:100%; " class="img-fluid" src="{{asset('assets/video/animation allopub.mp4')}}"></video> -->
           <!-- Video Placeholder -->
         <div
          class="position-relative overflow-hidden rounded pt-5 h-100"
          style="min-height: 400px"
        >
          <div id="video-placeholder" class="position-relative" style="width: 100%; height: 100%;">
            <img
              src="{{ asset('assets/img/about.jpg') }}"
              alt="Video Placeholder"
              style="width: 100%; height: 100%; object-fit: cover;"
            />
            <div
              class="position-absolute top-50 start-50 translate-middle"
              style="cursor: pointer;"
              onclick="loadAndPlayVideo()"
              id="play-button"
            >
              <img src="{{ asset('assets/img/play-button.png') }}" alt="Play Button" style="width: 80px;" />
            </div>
            
          </div>
          
        </div>
        
   <script>
 function loadAndPlayVideo() {
  const placeholder = document.getElementById('video-placeholder');
  const playButton = document.getElementById('play-button');

  // Hide the play button
  playButton.style.display = 'none';

  console.log(window.location);
  // Use jQuery AJAX request to load the video URL
  $.ajax({
    url: window.location.origin+'/get-video-url',  // Adjust the URL if needed
    method: 'GET',
    success: function(data) {
      // Create the video element dynamically
      const video = document.createElement('video');
      video.controls = true;
      video.style.width = '100%';
      video.style.height = '100%';
      video.style.objectFit = 'cover';

      // Add the video source
      const source = document.createElement('source');
      source.src = data.videoUrl;  // The video URL from the AJAX response
      source.type = 'video/mp4';
      video.appendChild(source);

      // Replace the placeholder with the video
      placeholder.style.display = 'none';  // Hide the placeholder
      placeholder.parentNode.appendChild(video);

      // Play the video
      video.play();
    },
    error: function(xhr, status, error) {
      console.error('Error loading video:', error);
      alert('Failed to load video. Please try again.');
    }
  });
}

</script>

   
    </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
        
            <p class="mb-4">
              {{__('messages.about_us_p1')}}
                    </p>

                        <p class="mb-4">
                          {{__('messages.about_us_p2')}} 
                         </p>

                        <p class="mb-4">
                          {{__('messages.about_us_p3')}}
                            
                        </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@include('static.footer')
