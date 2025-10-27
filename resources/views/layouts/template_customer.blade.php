<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            width: 75%;
            justify-content: center;
        }
        .nav-bar{
            padding-top: 15px;
        }

        .menu{
            display: flex;
            justify-content: space-between;

        }

        .link-item{
            color: white;
        }

        .link-item:hover {
            border-bottom: 2px solid yellow;
            position: relative;
            top: -7px;
            color: yellow;
            font-size: 20px;
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
            text-align: center;
        }
        .sub-menu-item-1:hover {
            border-bottom: 2px solid yellow;
            background-color: #080d28 ;
            padding: 2% 0
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





        .modal-body {
            background: linear-gradient(135deg, #6f42c1, #d63384);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            width: 100%;
        }
        .form-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            color: #6f42c1;
        }
        .btn-custom {
            background-color: #6f42c1;
            color: white;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #5a359e;
        }

    </style>

    <!-- Helpers -->

    <script src="{{ asset('v2/js/helpers.js') }}"></script>
    <script src="{{ asset('v2/js/template-customizer.js') }}"></script>
    <script src="{{ asset('v2/js/config.js') }}"></script>
    <script src="{{ asset('v2/js/alpine.cdn.min.js') }}" defer></script>
</head>
<body>

{{--    <div class="modal fade" id="FormationInscriptionModal" tabindex="-1" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-fullscreen" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="modalFullTitle">INSCRIPTION A UN COURS</h5>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}

{{--                    <div class="form-container">--}}
{{--                        <h3 class="form-title">Formulaire d'inscription</h3>--}}
{{--                        <form action="" method="POST" id="formation_inscription_form">--}}
{{--                            @csrf--}}
{{--                            @method('post')--}}

{{--                            <div class="row g-3 formationInscription-1">--}}

{{--                                <div class="col-md-4 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Matricule: <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="text" class="form-control" placeholder="MAT24F001I-TECH" id="identifier" name="identifier">--}}
{{--                                    <div class="text-danger small d-none" id="identifier_error">Ce champ est requis</div>--}}
{{--                                    @error('identifier')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> email <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="email" class="form-control" placeholder="i-techformation@gmail.com" id="email" name="email" data-state="0">--}}
{{--                                    <div class="text-danger small d-none" id="email_error">Ce champ est requis</div>--}}
{{--                                    @error('email')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Mode passe: <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="password" class="form-control" id="password" name="password" data-state="0">--}}
{{--                                    <div class="text-danger small d-none" id="password_error">Ce champ est requis</div>--}}
{{--                                    @error('password')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row g-3 d-none" id="formationInscription-2" data-state="0">--}}
{{--                                <div class="col-md-6 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Mode de formation :<span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <select name="formation_mode" id="formation_mode" class="form-control select2-for-template">--}}
{{--                                        <option value="">Choisissez votre mode de formation</option>--}}
{{--                                    </select>--}}
{{--                                    <div class="text-danger small d-none" id="formation_mode_error">Ce champ est requis</div>--}}
{{--                                    @error('formation_mode')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Ville de formation <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <select name="formation_city" id="formation_city" class="form-control select2-for-template">--}}
{{--                                        <option value="">Choisissez votre ville de formation</option>--}}
{{--                                    </select>--}}
{{--                                    <div class="text-danger small d-none" id="formation_city_error">Ce champ est requis</div>--}}
{{--                                    @error('formation_city')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> option choisie <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <select name="formation_option" id="formation_option" class="form-control select2-for-template">--}}
{{--                                        <option value="" selected>Choisir l'option</option>--}}
{{--                                    </select>--}}
{{--                                    <div class="text-danger small d-none" id="formation_option_error">Ce champ est requis</div>--}}
{{--                                    @error('formation_option')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Niveau de formation choisi <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <select name="formation_level" id="formation_level" class="form-control select2-for-template">--}}
{{--                                        <option value="" selected>Niveau de formation</option>--}}
{{--                                    </select>--}}
{{--                                    <div class="text-danger small d-none" id="formation_level_error">Ce champ est requis</div>--}}
{{--                                    @error('formation_level')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Round de formation <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="text" class="form-control" id="round_input" name="round_input" readonly>--}}
{{--                                    <div class="text-danger small d-none" id="round_input_error">Ce champ est requis</div>--}}
{{--                                    @error('round_input')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Moyen de paiement <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <select name="payment_mode" id="payment_mode" class="form-control select2-for-template">--}}

{{--                                    </select>--}}
{{--                                    <div class="text-danger small d-none" id="payment_mode_error">Ce champ est requis</div>--}}
{{--                                    @error('payment_mode')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Numéro de paiement <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="number" class="form-control" id="output_account" name="output_account" placeholder="entrez le compte débiteur" value="{{old('output_account')}}">--}}
{{--                                    <div class="text-danger small d-none" id="output_account_error">Ce champ est requis</div>--}}
{{--                                    @error('output_account')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Montant versé <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="number" class="form-control" id="amount_paid" name="amount_paid" placeholder="entrez le montant versé" value="{{old('amount_paid')}}">--}}
{{--                                    <div class="text-danger small d-none" id="amount_paid_error">Ce champ est requis</div>--}}
{{--                                    @error('amount_paid')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="mt-4 text-center">--}}
{{--                                <button type="submit" class="btn btn-custom px-5" id="btn-formationInscription">Envoyer</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}



{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                    <a href="{{route('student.inscription.view')}}" class="btn btn-primary">page de pré-incription</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="modal fade" id="form-payment-1" tabindex="-1" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-xl" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="modalFullTitle">Effectuer un paiement</h5>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}

{{--                    <div class="form-container">--}}
{{--                        <h3 class="form-title">Identification</h3>--}}
{{--                        <form action="" method="POST" id="formation_payment_form">--}}
{{--                            @csrf--}}
{{--                            @method('post')--}}
{{--                            <div class="row g-3 form-payment-part-1" data-state="1">--}}

{{--                                <div class="col-md-6 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Matricule: <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="text" class="form-control" placeholder="MAT24F001I-TECH" id="identifier_payment_modal" name="identifier_payment_modal">--}}
{{--                                    <div class="text-danger small d-none" id="identifier_payment_modal_error">Ce champ est requis</div>--}}
{{--                                    @error('identifier_payment_modal')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> email <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="email" class="form-control" placeholder="i-techformation@gmail.com" id="email_payment_modal" name="email_payment_modal" data-state="0">--}}
{{--                                    <div class="text-danger small d-none" id="email_payment_modal_error">Ce champ est requis</div>--}}
{{--                                    @error('email_payment_modal')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Mode passe: <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="password" class="form-control" id="password_payment_modal" name="password_payment_modal" data-state="0">--}}
{{--                                    <div class="text-danger small d-none" id="password_payment_modal_error">Ce champ est requis</div>--}}
{{--                                    @error('password_payment_modal')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Niveau de formation à payer <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <select name="formation_level_payment_modal" id="formation_level_payment_modal" class="form-control select2-for-template">--}}
{{--                                        <option value="" selected>Niveau de formation</option>--}}
{{--                                        @foreach($formation_levels as $level)--}}
{{--                                            <option value="{{$level->id}}">{{$level->level_number.' ('.$level->level_label.')'}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                    <div class="text-danger small d-none" id="formation_level_payment_modal_error">Ce champ est requis</div>--}}
{{--                                    @error('formation_level_payment_modal')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row g-3 d-none form-payment-part-2" data-state="0">--}}

{{--                                <div style="justify-content: space-between">--}}
{{--                                    <a href="#" id="previous-btn"><i class="fa fa-arrow-left text-primary"></i></a>--}}
{{--                                    <a href="#" id="next-btn"><i class="fa fa-arrow-right text-primary"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Round: <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="text" class="form-control" placeholder="MAT24F001I-TECH" id="round_input_payment_modal" name="round_input_payment_modal">--}}
{{--                                    <div class="text-danger small d-none" id="round_input_payment_modal_error">Ce champ est requis</div>--}}
{{--                                    @error('round_input_payment_modal')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12 col-sm-12 mt-3">--}}
{{--                                    <label class="form-label"> Montant: <span class="text-danger fw-bolder">*</span>:</label>--}}
{{--                                    <input type="number" class="form-control" placeholder="" id="amount_payment_modal" name="amount_payment_modal">--}}
{{--                                    <div class="text-danger small d-none" id="amount_payment_modal_error">Ce champ est requis</div>--}}
{{--                                    @error('amount_payment_modal')--}}
{{--                                    <span class="text-danger small">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="mt-4 text-center">--}}
{{--                                <button type="submit" class="btn btn-custom px-5" data-state="0" id="btn-paid-course">Envoyer</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}



{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                    <a href="{{route('student.inscription.view')}}" class="btn btn-primary">page de pré-incription</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


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
                                <li class="sub-menu-item-1"><a href="https://homepages.laas.fr/adoncesc/STAPS/Informatique/Introductionreseaux1-2.pdf" class="sub-link-item-1">Réseau informatique</a></li>
                                <li class="sub-menu-item-1"><a href="http://the.file.free.fr/1er-ann%C3%A9e%20BTS%20IG/Developpement_applications_informatiques%20_genie_logiciel_3932/Cours%202%20(Access)/83932TGPA0209.pdf" class="sub-link-item-1">Développement informatique</a></li>
                                <li class="sub-menu-item-1"><a href="http://daryane1.free.fr/cours/pdf/general.pdf" class="sub-link-item-1">Sécrétariat bureautique</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#" class="link-item" data-bs-toggle="modal" data-bs-target="#FormationInscriptionModal">S'incrire à une formation</a></li>
                        <li class="position-relative menu-item" id="formation-menu-item"><a href="#" class="link-item">Paiement<i class="fa fa-chevron-down mx-1 text-warning"></i></a>
                            <ul class="sub-menu-1">
                                <li class="sub-menu-item-1"><a href="#" class="sub-link-item-1" data-bs-toggle="modal" data-bs-target="#form-payment-1">Payer</a></li>
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
                            <a href="{{route('student.inscription.view')}}" class="link-item-sm">Se préinscrire</a>
                        </div>
                        <div class="first-menu-item-sm">
                            <a href="#" class="link-item-sm" data-bs-toggle="modal" data-bs-target="#FormationInscriptionModal">S'incrire à une formation</a>
                        </div>
                        <div class="first-menu-item-sm">
                            <li class="position-relative menu-item" id="formation-menu-item"><a href="#" class="link-item-sm">Paiement<i class="fa fa-chevron-down mx-1 text-warning"></i></a>
                                <ul class="sub-menu-1">
                                    <li class="sub-menu-item-1"><a href="#" class="link-item-sm" data-bs-toggle="modal" data-bs-target="#form-payment-1">Payer</a></li>
                                    <li class="sub-menu-item-1"><a href="{{route('student.inscription.view')}}" class="link-item-sm">Se pré-inscrire</a></li>
                                    <li class="sub-menu-item-1"><a href="#" class="link-item-sm">Completer la pré-inscription</a></li>
                                </ul>
                            </li>
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
                        <img src="{{asset('/images/classic_part_imgs/network_social_link/whatsapp.png')}}" class="img-item" alt="word" width="45px" height="45px">
                        <img src="{{asset('/images/classic_part_imgs/network_social_link/facebook.png')}}" alt="word" width="45px" height="45px" >
                        <img src="{{asset('/images/classic_part_imgs/network_social_link/sociale.png')}}" alt="word" width="45px" height="45px">
                        <img src="{{asset('/images/classic_part_imgs/network_social_link/twitter.png')}}" alt="word" width="45px" height="45px" >
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

            $('#FormationInscriptionModal').on('shown.bs.modal', function () {
                const $modal = $(this);

                // Si tu veux initialiser tous les selects internes
                $modal.find('.select2-for-template').each(function () {
                    const $select = $(this);

                    // Si déjà initialisé, détruire pour éviter doublons
                    if ($select.hasClass('select2-hidden-accessible')) {
                        $select.select2('destroy');
                    }

                    // Initialisation : dropdownParent -> modal-body (ou .modal-content si besoin)
                    $select.select2({
                        width: '100%',
                        allowClear: true,
                        dropdownParent: $modal.find('.modal-body') // <- important
                    });
                });
            });

            $('#form-payment-1').on('shown.bs.modal', function () {
                const $modal = $(this);

                // Si tu veux initialiser tous les selects internes
                $modal.find('.select2-for-template').each(function () {
                    const $select = $(this);

                    // Si déjà initialisé, détruire pour éviter doublons
                    if ($select.hasClass('select2-hidden-accessible')) {
                        $select.select2('destroy');
                    }

                    // Initialisation : dropdownParent -> modal-body (ou .modal-content si besoin)
                    $select.select2({
                        width: '100%',
                        allowClear: true,
                        dropdownParent: $modal.find('.modal-body') // <- important
                    });
                });
            });

            $('.select2-for-template').select2({
                width: '100%',
                allowClear: true,
                dropdownParent: $('#form-payment-1'),
            });

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

            // fonction permettant à un étudiant de participer à une formation
            $('#btn-formationInscription').on('click', function (e){
                e.preventDefault();

                const formation_inscription = $('#formationInscription-2');

                if ( parseInt(formation_inscription.attr('data-state')) === 0){

                    const identifier = $('#identifier');
                    const password = $('#password');
                    const email = $('#email');

                    let cpt_error = 0;

                    if (identifier.val().toString() === ""){
                        cpt_error++;
                        $('#identifier_error').removeClass('d-none');
                    }else{
                        $('#identifier_error').addClass('d-none');
                    }

                    if (password.val().toString() === ""){
                        cpt_error++;
                        $('#password_error').removeClass('d-none');
                    }else{
                        $('#password_error').addClass('d-none');
                    }

                    if (email.val().toString() === ""){
                        cpt_error++;
                        $('#email_error').removeClass('d-none');
                    }else{
                        $('#email_error').addClass('d-none');
                    }

                    if (cpt_error !== 0){
                        console.log('nombre d erreur',cpt_error);
                        return;
                    }

                    $.ajax({
                        url : '{{route('student.inscription.check.exist')}}',
                        type : 'POST',
                        headers: {
                            'X-CSRF-TOKEN': `{{csrf_token()}}`,
                            'Content-Type': 'application/json'
                        },
                        data: JSON.stringify({
                            'identifier' : identifier.val(),
                            'email'      : email.val(),
                            'password'   : password.val()
                        }),
                        success: function (response){
                            if (response.status_code === 200){

                                formation_inscription.removeClass('d-none');
                                formation_inscription.attr('data-state', '1');

                                email.attr('readonly',true);
                                password.attr('readonly',true);

                                email.attr('data-state',1);
                                password.attr('data-state',1);

                                Swal.fire({
                                    text: response.message,
                                    icon: 'success'
                                });

                                const payment_mode_select      =  $('#payment_mode');
                                const formation_level_select   =  $('#formation_level');
                                const formation_option_select  =  $('#formation_option');
                                const formation_city_select    =  $('#formation_city');
                                const formation_mode_select    =  $('#formation_mode');

                                payment_mode_select.empty().append('<option value="" selected>Selectionner le moyen de paiement</option>');
                                formation_level_select.empty().append('<option value="" selected>Niveau de formation choisit</option>');
                                formation_option_select.empty().append('<option value="" selected>Option choisit</option>');
                                formation_city_select.empty().append('<option value="" selected>ville de formation choisit</option>');
                                formation_mode_select.empty().append('<option value="" selected>Mode de formation désiré</option>');

                                $.each(response.payment_modes , function (key , element){

                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.mean_payment_name + '(' + element.code + ')'
                                    });

                                    payment_mode_select.append(nouvelleOption);
                                });
                                $.each(response.formation_levels , function (key , element){
                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.level_label
                                    });

                                    formation_level_select.append(nouvelleOption);
                                });
                                $.each(response.formation_options , function (key , element){
                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.option_label
                                    });

                                    formation_option_select.append(nouvelleOption);
                                });
                                $.each(response.formation_cities , function (key , element){
                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.city_name
                                    });

                                    formation_city_select.append(nouvelleOption);
                                });
                                $.each(response.formation_modes , function (key , element){
                                    let nouvelleOption = $('<option>', {
                                        value: element.id,
                                        text: element.mode_name
                                    });

                                    formation_mode_select.append(nouvelleOption);
                                });
                            }else{

                                console.log('je suis la');
                                formation_inscription.addClass('d-none');
                                formation_inscription.attr('data-state', '0');

                                Swal.fire({
                                    text: response.message,
                                    icon: 'success'
                                });

                            }
                        },
                        error: function (response){
                            Swal.fire({
                                text: 'etudiant non existant. Veillez vous pré-inscrire ou contacter le service client',
                                icon: 'error'
                            });
                        }
                    })
                }else{

                    const subscription_form = $('#formation_inscription_form');
                    const form_data = subscription_form.serializeArray();

                    let cpt_error = 0;

                    $.each(form_data, function(key , element) {

                        console.log('la clé :', key , ' la valeur :', element);

                        if (element.value.toString() === ""){
                            cpt_error++;
                            $('#'+element.name+'_error').text('ce champ est requis');
                            $('#'+element.name+'_error').removeClass('d-none');
                        }else {
                            $('#'+element.name+'_error').addClass('d-none');
                        }

                    });

                    if(cpt_error !== 0)
                        return;

                    const amount_table = @json(config('constants.amount'));
                    const amount_paid_error = $('#amount_paid_error');
                    const formation_level = $('#formation_level').val();
                    const required_amount = amount_table['inscription_level-' + formation_level];
                    const paid_amount = $('#amount_paid').val();

                    if (parseInt(paid_amount) !== parseInt(required_amount)) {
                        amount_paid_error.text('La somme requise est de ' + required_amount + ' FCFA');
                        amount_paid_error.removeClass('d-none');
                        return;
                    }

                    amount_paid_error.addClass('d-none');

                    const form_data_request = {};

                    $.each(form_data, function(key , element) {

                        form_data_request[element.name] = element.value;

                    });

                    console.log(form_data_request);

                    $.ajax({
                        url : '{{route('formation.student.registration')}}',
                        type : 'POST',
                        headers: {
                            'X-CSRF-TOKEN' : `{{csrf_token()}}`,
                            'Content-Type' : 'application/json'
                        },
                        data: JSON.stringify(form_data_request),
                        success: function (response){

                            if (response.status_code === 200){

                                window.location.replace(`/student/set-badge/${response.data.student.id}/${response.data.round.id}/${response.data.participation.id}`);
                            }
                        },
                        error: function(response){
                            console.log(response);
                            Swal.fire({
                                text : 'le service souhaité est indisponible',
                                icon : 'error'
                            });
                        }
                    })

                    //subscription_form.submit();
                }
            })

            // fonction permettant des controlles lorsque sur le formulaire d inscription à un cours l on decide de modifier le atricule
            $('#identifier').on('input' , function (){

                const formation_inscription = $('#formationInscription-2');
                const password = $('#password');
                const email = $('#email');

                console.log($(this).val().length);

                if ($(this).val().length !== 15){
                    const payment_mode_select      =  $('#payment_mode');
                    const formation_level_select   =  $('#formation_level');
                    const formation_option_select  =  $('#formation_option');
                    const formation_city_select    =  $('#formation_city');
                    const formation_mode_select    =  $('#formation_mode');

                    payment_mode_select.empty().append('<option value="" selected>Selectionner le moyen de paiement</option>');
                    formation_level_select.empty().append('<option value="" selected>Niveau de formation choisit</option>');
                    formation_option_select.empty().append('<option value="" selected>Option choisit</option>');
                    formation_city_select.empty().append('<option value="" selected>ville de formation choisit</option>');
                    formation_mode_select.empty().append('<option value="" selected>Mode de formation désiré</option>');
                }

                if ($(this).val().length !== 15 && parseInt(email.attr('data-state')) === 1){

                    console.log(' lorsque c est pas 15',email.attr('data-state') ,password.attr('data-state'))

                    email.attr('readonly',false);
                    password.attr('readonly',false);
                    formation_inscription.addClass('d-none');
                    formation_inscription.attr('data-state', '0');

                    email.attr('data-state','0');
                    password.attr('data-state','0');

                }else if ($(this).val().length !== 15 && parseInt(email.attr('data-state')) === 0){

                    console.log(' lorsque c est 15',email.attr('data-state') ,password.attr('data-state'));

                    email.attr('readonly',false);
                    password.attr('readonly',false);

                }else if ($(this).val().length === 15 && parseInt(email.attr('data-state')) === 0){

                    console.log(' lorsque c est 15',email.attr('data-state') ,password.attr('data-state'));

                    email.attr('readonly',false);
                    password.attr('readonly',false);

                }else{
                    console.log(' lorsque c est 15',email.attr('data-state') ,password.attr('data-state'));

                    email.attr('readonly',true);
                    password.attr('readonly',true);
                }
            })

            // fonction permettant de verifier si un round de formation est en cours pour le niveau de formation choisis par l etudiant à l inscription au cours
            $('#formation_level').on('change', function (){

                const level_formation_id = $(this).val();
                const empty_level = $('#formation_level_error');
                const round_input = $('#round_input');
                const subscription_btn_container = $('#subscription_btn_container');

                if (level_formation_id.toString() === ""){
                    round_input.val('');
                    subscription_btn_container.addClass('d-none');
                    empty_level.text('Choisisez un niveau de formation');
                    empty_level.removeClass('d-none');
                    return;
                }
                empty_level.addClass('d-none');

                $.ajax({
                    url: '{{route('student.inscription.check.round',':level_id')}}'.replace(':level_id',level_formation_id),
                    type : 'GET',
                    success: function (response){
                        if (response.status_code === 200){
                            Swal.fire({
                                text: response.message,
                                icon: 'success'
                            });

                            round_input.val(response.data.round_code);
                            subscription_btn_container.removeClass('d-none');

                        }else{
                            Swal.fire({
                                text: response.message,
                                icon: 'error'
                            });

                            round_input.val('');
                            subscription_btn_container.addClass('d-none');
                        }
                    },
                    error: function (response){
                        Swal.fire({
                            text: 'Service indisponible. veillez consulter les logs',
                            icon: 'error'
                        });
                        round_input.val('');
                        subscription_btn_container.addClass('d-none');
                        console.log('data_error :', response.json());
                    }
                })
            });

            //fonction permettant de checker si un etudiant existe dans le systeme losqu'il veut payer et recharge les informations relatives à son paiement
            $('#btn-paid-course').on('click', function (e){
                e.preventDefault();

                const formation_payment_part_1 = $('.form-payment-part-1');
                const formation_payment_part_2 = $('.form-payment-part-2');


                if ( parseInt(formation_payment_part_2.attr('data-state')) === 0){

                    const identifier = $('#identifier_payment_modal');
                    const password = $('#password_payment_modal');
                    const email = $('#email_payment_modal');
                    const formation_level = $('#formation_level_payment_modal');

                    let cpt_error = 0;

                    if (identifier.val().toString() === ""){
                        cpt_error++;
                        $('#identifier_payment_modal_error').removeClass('d-none');
                    }else{
                        $('#identifier_payment_modal_error').addClass('d-none');
                    }

                    if (password.val().toString() === ""){
                        cpt_error++;
                        $('#password_payment_modal_error').removeClass('d-none');
                    }else{
                        $('#password_payment_modal_error').addClass('d-none');
                    }

                    if (email.val().toString() === ""){
                        cpt_error++;
                        $('#email_payment_modal_error').removeClass('d-none');
                    }else{
                        $('#email_payment_modal_error').addClass('d-none');
                    }

                    if (formation_level.val().toString() === ""){
                        cpt_error++;
                        $('#formation_level_payment_modal_error').removeClass('d-none');
                    }else{
                        $('#formation_level_payment_modal_error').addClass('d-none');
                    }

                    if (cpt_error !== 0){
                        console.log('nombre d erreur',cpt_error);
                        return;
                    }

                    $.ajax({
                        url : '{{route('payment.student.check.exist')}}',
                        type : 'POST',
                        headers: {
                            'X-CSRF-TOKEN': `{{csrf_token()}}`,
                            'Content-Type': 'application/json'
                        },
                        data: JSON.stringify({
                            'identifier' : identifier.val(),
                            'email'      : email.val(),
                            'password'   : password.val(),
                            'formation_level' : formation_level.val()
                        }),
                        success: function (response){
                            if (response.status_code === 200){

                                console.log(response);


                                formation_payment_part_1.addClass('d-none');
                                formation_payment_part_2.removeClass('d-none');

                                formation_payment_part_1.attr('data-state', '0');
                                formation_payment_part_2.attr('data-state', '1');


                                //
                                // email.attr('readonly',true);
                                // password.attr('readonly',true);
                                //
                                // email.attr('data-state',1);
                                // password.attr('data-state',1);
                                //
                                // Swal.fire({
                                //     text: response.message,
                                //     icon: 'success'
                                // });
                                //
                                // const payment_mode_select      =  $('#payment_mode');
                                // const formation_level_select   =  $('#formation_level');
                                // const formation_option_select  =  $('#formation_option');
                                // const formation_city_select    =  $('#formation_city');
                                // const formation_mode_select    =  $('#formation_mode');
                                //
                                // payment_mode_select.empty().append('<option value="" selected>Selectionner le moyen de paiement</option>');
                                // formation_level_select.empty().append('<option value="" selected>Niveau de formation choisit</option>');
                                // formation_option_select.empty().append('<option value="" selected>Option choisit</option>');
                                // formation_city_select.empty().append('<option value="" selected>ville de formation choisit</option>');
                                // formation_mode_select.empty().append('<option value="" selected>Mode de formation désiré</option>');
                                //
                                // $.each(response.payment_modes , function (key , element){
                                //
                                //     let nouvelleOption = $('<option>', {
                                //         value: element.id,
                                //         text: element.mean_payment_name + '(' + element.code + ')'
                                //     });
                                //
                                //     payment_mode_select.append(nouvelleOption);
                                // });
                                // $.each(response.formation_levels , function (key , element){
                                //     let nouvelleOption = $('<option>', {
                                //         value: element.id,
                                //         text: element.level_label
                                //     });
                                //
                                //     formation_level_select.append(nouvelleOption);
                                // });
                                // $.each(response.formation_options , function (key , element){
                                //     let nouvelleOption = $('<option>', {
                                //         value: element.id,
                                //         text: element.option_label
                                //     });
                                //
                                //     formation_option_select.append(nouvelleOption);
                                // });
                                // $.each(response.formation_cities , function (key , element){
                                //     let nouvelleOption = $('<option>', {
                                //         value: element.id,
                                //         text: element.city_name
                                //     });
                                //
                                //     formation_city_select.append(nouvelleOption);
                                // });
                                // $.each(response.formation_modes , function (key , element){
                                //     let nouvelleOption = $('<option>', {
                                //         value: element.id,
                                //         text: element.mode_name
                                //     });
                                //
                                //     formation_mode_select.append(nouvelleOption);
                                // });
                            }
                            if (response.status_code === 500){

                                console.log('je suis la');
                                formation_payment_part_2.addClass('d-none');
                                formation_payment_part_2.attr('data-state', '0');

                                Swal.fire({
                                    text: response.message,
                                    icon: 'error'
                                });

                            }
                        },
                        error: function (response){
                            // Swal.fire({
                            //     text: 'etudiant non existant. Veillez vous pré-inscrire ou contacter le service client',
                            //     icon: 'error'
                            // });

                            console.log('une erreur s\'est produite :', response)

                            formation_payment_part_2.addClass('d-none');
                            formation_payment_part_2.attr('data-state', '0');

                            Swal.fire({
                                text: 'une erreur s\'est produite. Veuillez consulter les logs',
                                icon: 'error'
                            });
                        }
                    })
                }else{

                    {{--const subscription_form = $('#formation_inscription_form');--}}
                    {{--const form_data = subscription_form.serializeArray();--}}

                    {{--let cpt_error = 0;--}}

                    {{--$.each(form_data, function(key , element) {--}}

                    {{--    console.log('la clé :', key , ' la valeur :', element);--}}

                    {{--    if (element.value.toString() === ""){--}}
                    {{--        cpt_error++;--}}
                    {{--        $('#'+element.name+'_error').text('ce champ est requis');--}}
                    {{--        $('#'+element.name+'_error').removeClass('d-none');--}}
                    {{--    }else {--}}
                    {{--        $('#'+element.name+'_error').addClass('d-none');--}}
                    {{--    }--}}

                    {{--});--}}

                    {{--if(cpt_error !== 0)--}}
                    {{--    return;--}}

                    {{--const amount_table = @json(config('constants.amount'));--}}
                    {{--const amount_paid_error = $('#amount_paid_error');--}}
                    {{--const formation_level = $('#formation_level').val();--}}
                    {{--const required_amount = amount_table['inscription_level-' + formation_level];--}}
                    {{--const paid_amount = $('#amount_paid').val();--}}

                    {{--if (parseInt(paid_amount) !== parseInt(required_amount)) {--}}
                    {{--    amount_paid_error.text('La somme requise est de ' + required_amount + ' FCFA');--}}
                    {{--    amount_paid_error.removeClass('d-none');--}}
                    {{--    return;--}}
                    {{--}--}}

                    {{--amount_paid_error.addClass('d-none');--}}

                    {{--const form_data_request = {};--}}

                    {{--$.each(form_data, function(key , element) {--}}

                    {{--    form_data_request[element.name] = element.value;--}}

                    {{--});--}}

                    {{--console.log(form_data_request);--}}

                    {{--$.ajax({--}}
                    {{--    url : '{{route('formation.student.registration')}}',--}}
                    {{--    type : 'POST',--}}
                    {{--    headers: {--}}
                    {{--        'X-CSRF-TOKEN' : `{{csrf_token()}}`,--}}
                    {{--        'Content-Type' : 'application/json'--}}
                    {{--    },--}}
                    {{--    data: JSON.stringify(form_data_request),--}}
                    {{--    success: function (response){--}}

                    {{--        if (response.status_code === 200){--}}

                    {{--            window.location.replace(`/student/set-badge/${response.data.student.id}/${response.data.round.id}/${response.data.participation.id}`);--}}
                    {{--        }--}}
                    {{--    },--}}
                    {{--    error: function(response){--}}
                    {{--        console.log(response);--}}
                    {{--        Swal.fire({--}}
                    {{--            text : 'le service souhaité est indisponible',--}}
                    {{--            icon : 'error'--}}
                    {{--        });--}}
                    {{--    }--}}
                    {{--})--}}

                    //subscription_form.submit();
                }
            })
        })
    </script>
</body>
</html>
