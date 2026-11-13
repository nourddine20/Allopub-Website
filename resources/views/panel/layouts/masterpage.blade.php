
@include('panel.partials.header')

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
           
            @include('panel.partials.appheader')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
           
            @include('panel.partials.sidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
          
            @yield('content')
            <!--app-content close-->

        </div>

        <!-- Sidebar-right -->
        @include('panel.partials.sidebar-right')
        <!--/Sidebar-right-->

 
@include('panel.partials.footer')