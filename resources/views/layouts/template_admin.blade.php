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
            background-color: white;

        }
        #sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            transition: all 0.3s ease;
            z-index: 1;
            display: flex;
            flex-direction: column;
        }

        .sidebar-content{
            flex: 1 0 auto;
        }

        #sidebar.hide {
            margin-left: -250px;
        }

        #main-content {
            transition: all 0.3s ease;
            margin-left: 250px;
            background-color: white;
            height: 100vh;
        }

        #main-content.full {
            margin-left: 0;
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
            <div id="sidebar" class="hide p-3">
                <div class="sidebar-content">
                    <h4>I-Tech Formation</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="{{route('system.admin.start')}}" class="nav-link text-white"><i class="fa fa-home-alt mx-1"></i>Accueil</a></li>
                        <li class="nav-item"><a href="{{route('user.profile.view')}}" class="nav-link text-white"><i class="fa fa-user-circle mx-1"></i>Profil</a></li>
                        <li class="nav-item"><a href="{{route('user.register.view')}}" class="nav-link text-white"><i class="fa fa-user-plus mx-1"></i>Ajouter un utilisateur</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fa fa-circle-right mx-1"></i>Permissions</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fa fa-subscript mx-1"></i>Faire une inscription</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fa fa-money-bill mx-1"></i>Effectuer un paiement</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fa fa-user-group mx-1"></i>Liste des étudiants</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fa fa-search mx-1"></i>Rechercher</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fa fa-notes-medical mx-1"></i>Saisir les notes</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fa fa-money-bill-transfer mx-1"></i>Retrait d'argent</a></li>
                        <li class="nav-item"><a href="{{route('system.home.page.view')}}" class="nav-link text-white"><i class="fa fa-rotate-back mx-1"></i>Retour au site</a></li>
                    </ul>
                </div>
                <div class="">
                    <div class="bg-danger text-white text-center fw-bolder">
                        <a href="#" style="color: white;"> <i class="fa fa-sign-out"></i> Se déconnecter</a>
                    </div>
                </div>

            </div>

            <!-- Contenu principal -->
            <div id="main-content" class="full p-4">
                <button id="toggleBtn" class="fw-bolder text-white border-white" style="border-radius: 50px; background-color: #1a91da"><i class="fa fa-chevron-right"></i></button>
                <span style="position: fixed; top: 2% ; right: 2%"><i class="fa fa-user-circle fa-3x mx-1"></i> <span class="text-black fw-bolder border-bottom">Therry</span></span>
                <div>
                    @yield('content')
                </div>
            </div>
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

    <script>
        const toggleBtn = document.getElementById('toggleBtn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        toggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('hide');
            mainContent.classList.toggle('full');
        });
    </script>

    @yield('other-js')

</body>
</html>
