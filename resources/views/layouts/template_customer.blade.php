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

        .sm-menu{
            background-color: #071142;
            padding: 2% 2%;
        }

        .link-item-sm{
            font-size: 10px;
            padding-bottom: 2%;
            color: white;
        }

        .principal-menu-section{
            padding-left: 2%;
            border-left: 1px groove yellow;
        }

        body{
            display: flex;
            flex-direction: column;
        }

        .content{
            flex: 1 0 auto;
        }
        .footer{
            flex-shrink: 0;
            background-color: black;
            width: 100%;
            color: white;
        }

        .menu-footer{
            color: #696565;
            display: block;
        }

        .menu-footer:hover{
            color: orangered;
        }

    </style>

    <!-- Helpers -->

    <script src="{{ asset('v2/js/helpers.js') }}"></script>
    <script src="{{ asset('v2/js/template-customizer.js') }}"></script>
    <script src="{{ asset('v2/js/config.js') }}"></script>
    <script src="{{ asset('v2/js/alpine.cdn.min.js') }}" defer></script>
</head>
<body>
    <div class="content">
        <div class="header-container">
            <div class="logo-container">
                {{--            <img src="{{asset('/images/logo_i_tech_formation.png')}}" alt="" width="20px">--}}
            </div>
            <div class="d-block d-md-none text-center text-white" style="font-family: Algerian; font-size: 210%">I-TECH FORMATION</div>
            <div class="d-block d-md-none text-center"></div>
            <div class="d-none d-md-block nav-bar-container">
                <nav class="nav-bar">
                    <ul class="menu">
                        <li class="menu-item"><a href="{{route('system.home.page.view')}}" class="link-item"><i class="fa fa-home-alt mx-1 text-warning"></i>Accueil</a></li>
                        <li class="menu-item"><a href="{{route('system.contact.view')}}" class="link-item">Contact <i class="fa fa-mobile-android-alt mx-1 text-warning"></i></a></li>
                        <li class="position-relative menu-item" id="formation-menu-item"><a href="#" class="link-item">Nos Formation<i class="fa fa-chevron-down mx-1 text-warning"></i></a>
                            <ul class="sub-menu-1">
                                <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1">Réseau informatique</a></li>
                                <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1">Développement informatique</a></li>
                                <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1">Sécrétariat bureautique</a></li>
                                <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1" data-bs-toggle="modal" data-bs-target="#FormationInscriptionModal">S'incrire à une formation</a></li>
                            </ul>
                        </li>
                        <li class="position-relative menu-item" id="formation-menu-item"><a href="#" class="link-item">Participer<i class="fa fa-chevron-down mx-1 text-warning"></i></a>
                            <ul class="sub-menu-1">
                                <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1">Payer</a></li>
                                <li class="sub-menu-item-1"><a href="{{route('student.inscription.view')}}" class="sub-link-item-1">Se pré-inscrire</a></li>
                                <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1">Completer la pré-inscription</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#" class="link-item">A propos<i class="fa fa-circle-info mx-1 text-warning"></i></a></li>
                        <li class="menu-item"><a href="{{route('login')}}" class="link-item "><span class="display-5 text-warning">Se conecter </span><i class="fa fa-user-circle fa-2x mx-2 text-warning"></i></a></li>
                    </ul>

                </nav>
                <div></div>
            </div>
            <div class="d-block d-md-none float-end pt-3">
                <a href="#" class="launch-menu-sm" style="font-size: 40px">☰</a>
            </div>
        </div>
        <div class="sm-menu d-none" data-status="0">
            <div class="row">
                <div class="col-6">
                    <div class="principal-menu-section">
                        <h3 class="menu-sm-title">Menu principal</h3>
                        <div class="first-menu-item-sm">
                            <a href="{{route('system.home.page.view')}}" class="link-item-sm"><i class="fa fa-home-alt mx-1 text-warning"></i></a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="{{route('system.contact.view')}}" class="link-item-sm">Contact </a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="" class="link-item-sm">Formation<i class="fa fa-chevron-down mx-1 text-warning"></i></a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="" class="link-item-sm">S'incrire</a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="" class="link-item-sm">A propos</a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="{{route('login')}}" class="link-item-sm"><span class="text-warning">Se conecter </span><i class="fa fa-user-circle mx-2 text-warning"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="principal-menu-section">
                        <h3 class="menu-sm-title">Menu secondaire</h3>
                        <div class="first-menu-item-sm">
                            <a href="" class="link-item-sm"><i class="fa fa-home-alt mx-1 text-warning"></i></a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="" class="link-item-sm">statistique </a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="" class="link-item-sm">Formateurs</a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="" class="link-item-sm">Nos Partenaires <i class="fa fa-chevron-down mx-1 text-warning"></i></a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="" class="link-item-sm">Nos Références </a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="" class="link-item-sm"><span class="text-warning">Nos Centres de formation</span><i class="fa fa-location-pin-lock mx-2 text-warning"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>

        <div>
            @yield('content')
        </div>
    </div>

    <footer class="footer px-3 mt-3">
        <div class="text-white text-center" style=" padding-top: 5% ">
            <h1 style="font-family: Algerian;color: orangered" >I-TECH FORMATION</h1>
        </div>
        <div class="row pt-2" >
            <div class="row" style="border-bottom: 3px orangered solid">
                <div class="col-md-3 col-sm-12 p-1 text-center">
                    <div>
                        <h3>CONTACT</h3>
                    </div>
                    <div>
                        <div class="text-sm-center">
                            <label for="" class="form-label">Telephone <i class="fa fa-phone" style="color: #8f9baa"></i>:</label>
                            <label for="" class="form-label">+237  692 502 488</label>
                        </div>
                        <div>
                            <label for="" class="form-label">WHATSAPP <i class="fa fa-whatsapp-square" style="color: #8f9baa"></i>:</label>
                            <label for="" class="form-label">+237  692 502 488 / +237  690 226 447</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 p-1 text-center">
                    <div>
                        <h3>LOCALISATION</h3>
                    </div>
                    <div>
                        <i class="fa fa-map-location-dot text-info fa-2x"></i> <span class="text-white">Garoua</span>
                    </div>
                    <div>
                        <i class="fa fa-map-location-dot fa-2x" style="color: orangered"></i> <span class="text-white">Ngaoundéré</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 p-1 text-center">
                    <div>
                        <h3>MENU</h3>
                    </div>
                    <a href="{{route('system.home.page.view')}}" class="menu-footer">Acceuil</a>
                    <a href="{{route('system.contact.view')}}" class="menu-footer">Contact</a>
                    <a href="#" class="menu-footer">Réreau</a>
                    <a href="#" class="menu-footer">Developpement</a>
                    <a href="{{route('login')}}" class="menu-footer text-white"><i class="fa fa-user-circle" style="color: orangered"></i>Se connecter</a>
                </div>
                <div class="col-md-3 col-sm-12 p-1 text-center">
                    <div>
                        <h3>ADRESSE</h3>
                    </div>
                    <div>
                        <div>
                            <label for="" class="form-label">Adresse E-mail <i class="" style="color: #8f9baa"></i>:</label>
                            <div class="text-white">itechformation@gmail.com</div>
                        </div>
                        <div>
                            <label for="" class="form-label">Addresse:</label>
                            <div class="text-white">univ.ndéré PACKEM-rue 47 / univ garoua SADJO-ru22</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="">
                <div>
                    <div class="text-center text-white pt-3">
                        <h2>Réseau sociaux</h2>
                    </div>
                    <div class="text-center pt-3 pb-5">
                        <img src="{{asset('/images/classic_part_imgs/office4.png')}}" class="img-item" alt="word">
                        <img src="{{asset('/images/classic_part_imgs/word4.png')}}" alt="word" >
                        <img src="{{asset('/images/classic_part_imgs/publisher.png')}}" alt="word">
                        <img src="{{asset('/images/classic_part_imgs/ppt.png')}}" alt="word" >
                    </div>
                </div>

            </div>

        </div>
        <div class="text-center mt-5 mb-2" style="color: #8f9baa">
            &copy; - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
            architecto commodi cum cupiditate dolor, doloremque, ea earum eius esse ex harum neque
            quasi rem sint voluptas? Assumenda dolor eligendi nemo.
            architecto commodi cum cupiditate dolor, doloremque, ea earum eius esse ex harum neque
            quasi rem sint voluptas? Assumenda dolor eligendi nemo.
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


    @yield('js-content')

    <script>
        $(document).ready(function (){
            $('.launch-menu-sm').on('click' ,function (e){
                e.preventDefault();

                const sm_menu = $('.sm-menu');

                if (parseInt(sm_menu.attr('data-status')) === 0){
                    console.log('je suis la', sm_menu.attr('data-status'));

                    sm_menu.removeClass('d-none');
                    sm_menu.attr('data-status', 1);
                }else{
                    sm_menu.addClass('d-none');
                    sm_menu.attr('data-status', 0);
                }
            })
        })
    </script>
</body>
</html>
