<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

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
        body{
            display: flex;
            flex-direction: column;
        }

        .content{
            flex: 1 0 auto;
        }

        .footer{
            background-color: #45494f;
            color: white;
        }
    </style>

    @yield('other-css')

    <!-- Helpers -->

    <script src="{{ asset('v2/js/helpers.js') }}"></script>
    <script src="{{ asset('v2/js/template-customizer.js') }}"></script>
    <script src="{{ asset('v2/js/config.js') }}"></script>
    <script src="{{ asset('v2/js/alpine.cdn.min.js') }}" defer></script>
</head>
<body>



    <div class="content">
        @yield('content')
    </div>



    <footer class="footer">
        <div class="text-center">
            &copy; - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis ea et excepturi, exercitationem id illo minus nobis perspiciatis placeat quisquam sunt totam ullam? Consequatur facilis ipsam mollitia praesentium reiciendis?
        </div>
    </footer>
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


    @yield('other-js')

</body>
</html>
