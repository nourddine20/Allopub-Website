@include('panel.auth.partials.header')
    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{asset('public/assets/panel/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

 <!-- PAGE -->
 @yield('content')
        <!-- End PAGE -->
</div>
    <!-- BACKGROUND-IMAGE CLOSED -->

@include('panel.auth.partials.footer')