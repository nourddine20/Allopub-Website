@include('panel.partials.header')
<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

@include('panel.partials.nav-header')

@include('panel.partials.sidebar')

@include('panel.partials.navchat')

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

@include('panel.partials.navbarside')

<div class="pcoded-content">




@yield('content')



</div>

<div id="styleSelector">
</div>

</div>
</div>
</div>
</div>


@include('panel.partials.footer')