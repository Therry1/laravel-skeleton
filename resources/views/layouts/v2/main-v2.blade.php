<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
      data-theme="theme-default" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>@yield('title')</title>

    <meta name="description" content="Système de gestion de centre de santé"/>
    <meta name="keywords" content="centre hospitalier, centre de santé">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

    <link rel="stylesheet" href="{{ asset('v2/css/boxicons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('v2/css/fontawesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('v2/css/flag-icons.css') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('v2/css/core.css') }}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{ asset('v2/css/theme-default.css') }}" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{ asset('v2/css/demo.css') }}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('v2/css/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('v2/css/typeahead.css') }}"/>
{{--    <link rel="stylesheet" href="{{ asset('v2/css/datatables.bootstrap5.css') }}">--}}
    <link href="{{ asset('v2/css/datatables-exports.min.css') }}" rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('v2/css/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('v2/css/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('v2/css/select2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('v2/css/form-validation.css') }}"/>
    <link rel="stylesheet" href="{{ asset('v2/css/flatpickr.css') }}"/>
    <link rel="stylesheet" href="{{ asset('v2/css/toastr.css') }}"/>
    <link rel="stylesheet" href="{{ asset('v2/css/jquery.toast.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('v2/css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('v2/css/sweetalert2.css') }}"/>

    <style>
         label.required:after {
            content:" *";
            color: red;
        }
    </style>
    @yield('other-css')

    <!-- Page CSS -->

    <!-- Helpers -->

    <script src="{{ asset('v2/js/helpers.js') }}"></script>
    <script src="{{ asset('v2/js/template-customizer.js') }}"></script>
    <script src="{{ asset('v2/js/config.js') }}"></script>
    <script src="{{ asset('v2/js/alpine.cdn.min.js') }}" defer></script>

</head>

<body>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="py-2 text-center w-35 justify-content-between fa-mobile-android-alt " style="background-color: #1a91da">
            <div class="text-white fw-bolder display-5 mb-5">I-TECH FORMATION</div>
            <div class="mx-1">
                <div class="mb-2">
                    <a href="{{route('student.create')}}" class="text-white mx-1" style="font-size: 17px">Nouvelle etudiant <span class="fa fa-circle-plus"></span></a>
                </div>
                <div class="mb-2">
                    <a href="{{route('student.view_inscripted')}}" class="text-white mx-1" style="font-size: 17px">Liste des étudiants <span class="fa fa-list"></span></a>
                </div>
                <div class="mb-2">
                    <a href="{{route('system.statistic')}}" class="text-white mx-1" style="font-size: 17px">Statistiques du système <span class="fa fa-circle-info"></span></a>
                </div>
            </div>
        </div>


        <!-- Content wrapper -->
        <div class="content-wrapper">

                <div class="container-fluid container-p-y mt-3" style="max-width: 97% !important;">
                    <div class="text-center fst-italic display-5 py-2" style="text-transform: uppercase">
                        système de gestion des étudiants
                    </div>
                    <div class="mt-2">
                        @yield('content')
                    </div>
                </div>
                <!-- / Content -->


                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear())

                            </script>
                            , made with ❤️ by THE DEV TEAM
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->


                <div class="content-backdrop fade"></div>
            </div>

    </div>


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

</div>

<!-- Core JS -->

<script src="{{ asset('v2/js/jquery.js') }}"></script>
<script src="{{ asset('v2/js/popper.js') }}"></script>
<script src="{{ asset('v2/js/bootstrap.js') }}"></script>
<script src="{{ asset('v2/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('v2/js/hammer.js') }}"></script>
<script src="{{ asset('v2/js/i18n.js') }}"></script>
<script src="{{ asset('v2/js/typeahead.js') }}"></script>
<script src="{{ asset('v2/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('v2/js/moment.js') }}"></script>
{{--<script src="{{ asset('v2/js/datatables-bootstrap5.js') }}"></script>--}}
<script src="{{ asset('v2/js/printThis.js') }}"></script>
<script src="{{ asset('v2/js/datatables-exports.min.js') }}"></script>
<script src="{{ asset('v2/js/select2.js') }}"></script>
<script src="{{ asset('v2/js/popular.js') }}"></script>
<script src="{{ asset('v2/js/flatpickr.js') }}"></script>
<script src="{{ asset('v2/js/flatpickr-fr.js') }}"></script>
<script src="{{ asset('v2/js/typeahead.js') }}"></script>
<script src="{{ asset('v2/js/tagify.js') }}"></script>
<script src="{{ asset('v2/js/bootstrap5.js') }}"></script>
<script src="{{ asset('v2/js/auto-focus.js') }}"></script>
<script src="{{ asset('v2/js/cleave.js') }}"></script>
<script src="{{ asset('v2/js/cleave-phone.js') }}"></script>
<script src="{{ asset('v2/js/toastr.js') }}"></script>
<script src="{{ asset('v2/js/jquery.toast.min.js') }}"></script>
<script src="{{ asset('v2/js/sweetalert2.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('v2/js/main.js') }}"></script>
<script src="{{ asset('v2/js/utils.js') }}"></script>
<script src="{{ asset('v2/js/customtoast.js') }}"></script>
<script src="{{ asset('v2/js/custom-sweetalert2.js') }}"></script>

<script>
    const currentURL = window.location.href;
    console.log('CURRENT URL: ', currentURL);
    const menuLink = $('.menu-link[href="'+currentURL+'"]');
    menuLink.closest('.menu-item').addClass('active');
    menuLink.closest('.top-menu').addClass('active').addClass('open');
</script>

@yield('other-js')

<!-- Page JS -->

</body>

</html>

