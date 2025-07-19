<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

    @yield('css-content')

    <style>
        *{
            color: black;
            margin: 0;
            padding:0;
            font-family: "Times New Roman";

        }
        .header-container{
            width: 100%;
            height: 20vh;
            margin: 0;
            outline: 0;
            padding: 20px 10px 0px 40px;
            background-color: #080d28;
            display: flex;
            justify-content: space-between;

        }
        .logo-container{
            width: 25px;
            background-color: orangered;

        }

        .nav-bar-container{
            width: 60%;
            justify-content: center;
        }
        .nav-bar{
            padding-top: 15px;
        }

        .menu{
            display: flex;
            justify-content: space-between;

        }

        .link-item:hover {
            border-bottom: 2px solid yellow;
        }

        .link-item{
            color: white;
        }

        .sub-menu-1{
            display: none;
            background-color: orangered;
            padding: 2% 1% 2% 2%;
            position: absolute;
            z-index: 2;
            width: 15vw;
        }

        .sub-link-item-1{
            color: white;
            margin-bottom: 2%;
        }
        .sub-link-item-1:hover{
            color: white;
            margin-bottom: 2%;
        }

        .sub-menu-item-1{
            list-style: none;
            margin-bottom: 3%;
        }
        .sub-menu-item-1:hover {
            border-bottom: 2px solid yellow;
        }

        #formation-menu-item:hover ul{
            display: block;
        }

    </style>

    <!-- Helpers -->

    <script src="{{ asset('v2/js/helpers.js') }}"></script>
    <script src="{{ asset('v2/js/template-customizer.js') }}"></script>
    <script src="{{ asset('v2/js/config.js') }}"></script>
    <script src="{{ asset('v2/js/alpine.cdn.min.js') }}" defer></script>
</head>
<body>
    <div class="header-container">
        <div class="logo-container">
{{--            <img src="{{asset('/images/logo_i_tech_formation.png')}}" alt="" width="20px">--}}
        </div>
        <div class="d-block d-md-none text-center text-white" style="font-family: Algerian; font-size: 110%">I-TECH FORMATION</div>
        <div class="d-block d-md-none text-center"></div>
        <div class="d-none d-md-block nav-bar-container">
            <nav class="nav-bar">
                <ul class="menu">
                    <li class="menu-item"><a href="#" class="link-item"><i class="fa fa-home-alt mx-1 text-warning"></i>Accueil</a></li>
                    <li class="menu-item"><a href="#" class="link-item">Contact <i class="fa fa-mobile-android-alt mx-1 text-warning"></i></a></li>
                    <li class="position-relative menu-item" id="formation-menu-item"><a href="#" class="link-item">Formation<i class="fa fa-chevron-down mx-1 text-warning"></i></a>
                        <ul class="sub-menu-1">
                            <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1">Réseau informatique</a></li>
                            <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1">Développement informatique</a></li>
                            <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1">Sécrétariat bureautique</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"></li>
                    <li class="menu-item"><a href="#" class="link-item">A propos<i class="fa fa-circle-info mx-1 text-warning"></i></a></li>
                    <li class="menu-item"><a href="#" class="link-item "><span class="display-5 text-warning">Se conecter </span><i class="fa fa-user-circle fa-2x mx-2 text-warning"></i></a></li>
                </ul>
            </nav>
            <div></div>
        </div>
    </div>

    <div>
        @yield('content')
    </div>




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


    @yield('js-content')

</body>
</html>
