   <!-- Country-selector modal-->
   <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                    <span class="country-selector"><img alt="" src="{{asset('public/assets/panel/images/flags-img/us_flag.jpg')}}"
                                            class="me-3 language"></span>USA
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('public/assets/panel/images/flags-img/italy_flag.jpg')}}"
                                        class="me-3 language"></span>Italy
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('public/assets/panel/images/flags-img/spain_flag.jpg')}}"
                                        class="me-3 language"></span>Spain
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('public/assets/panel/images/flags-img/india_flag.jpg')}}"
                                        class="me-3 language"></span>India
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('public/assets/panel/images/flags-img/french_flag.jpg')}}"
                                        class="me-3 language"></span>French
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('public/assets/panel/images/flags-img/russia_flag.jpg')}}"
                                        class="me-3 language"></span>Russia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('public/assets/panel/images/flags-img/germany_flag.jpg')}}"
                                        class="me-3 language"></span>Germany
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('public/assets/panel/images/flags-img/argentina.jpg')}}"
                                        class="me-3 language"></span>Argentina
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{asset('public/assets/panel/images/flags-img/malaysia.jpg')}}"
                                        class="me-3 language"></span>Malaysia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{asset('public/assets/panel/images/flags-img/turkey.jpg')}}"
                                        class="me-3 language"></span>Turkey
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span
                            class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{asset('public/assets/panel/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('public/assets/panel/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{asset('public/assets/panel/js/jquery.sparkline.min.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{asset('public/assets/panel/js/sticky.js')}}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('public/assets/panel/js/circle-progress.min.js')}}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('public/assets/panel/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset('public/assets/panel/plugins/sidebar/sidebar.js')}}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('public/assets/panel/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/p-scroll/pscroll.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/p-scroll/pscroll-1.js')}}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset('public/assets/panel/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/chart/utils.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('public/assets/panel/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('public/assets/panel/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/datatable/dataTables.responsive.min.js')}}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset('public/assets/panel/js/apexcharts.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/apexchart/irregular-data-series.js')}}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{asset('public/assets/panel/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/flot/chart.flot.sampledata.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/flot/dashboard.sampledata.js')}}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{asset('public/assets/panel/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('public/assets/panel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{asset('public/assets/panel/plugins/sidemenu/sidemenu.js')}}"></script>

	<!-- TypeHead js -->
	<script src="{{asset('public/assets/panel/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
    <script src="{{asset('public/assets/panel/js/typehead.js')}}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('public/assets/panel/js/index1.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('public/assets/panel/js/themeColors.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('public/assets/panel/js/custom.js')}}"></script>

    <!-- Custom-switcher -->
    <script src="{{asset('public/assets/panel/js/custom-swicher.js')}}"></script>

    <!-- Switcher js -->
    <script src="{{asset('public/assets/panel/switcher/js/switcher.js')}}"></script>

</body>

</html>