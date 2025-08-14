@extends('../layouts/template_customer')

@section('title') I-Tech accueil    @endsection


@section('css-content')

    <link rel="stylesheet" href="{{asset('/css/style1.css')}}">
    <style>
        .sub-nav{
            z-index: 0;
        }

        .image-slide{
            width: 100%;
            height: 150vh;
            background-image: url("{{asset('/images/sl3.jpg')}}");
            background-size: cover;     /* Couvre tout le conteneur */
            background-position: center center;  /* Centré */
            background-repeat: no-repeat;
            justify-content: center;
            align-items: center;
            padding-top: 30%;
        }

        .itech-slid{
            font-size: 80px;
            font-family: Algerian;
            margin-bottom: 5%;
            color: white;
        }
        .btn-inscription{
            color: white;
            border: 1px solid white;
            border-radius: 25px;
            padding: 1% 2% 1% 2% ;
            font-weight: bolder;
            font-size: 30px;
            font-family: Cambria;
        }

        .btn-inscription:hover {
            color: white;
            background-color: orangered;
        }

        #carossel{
            background-image: url("{{asset('/images/sl2.jpg')}}");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .img-item-comment{
            color: white;
            font-weight: bolder;
            font-size: 15px;
            font-family: Cambria;
        }

        .radio-btn-sub-container{
            border-radius: 5px;
            text-align: center;
            background-color:#080d28 ;
            padding-left: 1px;
            padding-top: 1px;
        }


        .modern-computeur-science{
            margin-top: 10%;
        }

        .detail-link-container{
            padding-left: 60%;
            color: #071142;
            /*border: 1px solid;*/
        }

        .title-network-image{
            padding: 8% 0 8% 0;
            margin-bottom: 8%;
            font-size: 20px;
        }

        .description-network-icon{
            border-radius: 50px;
            padding: 15%;
            margin: 15% 20% 10% 20%;
            background-color: black;
        }

        .description-network-icon-2{
            border-radius: 50px;
            padding: 15%;
            margin: 15% 20% 10% 20%;
            background-color: orangered;
        }

        .description-network-icon-3{
            border-radius: 50px;
            padding: 15%;
            margin: 15% 20% 10% 20%;
            background-color: black;
        }

        .description-network-icon-4{
            border-radius: 50px;
            padding: 15%;
            margin: 15% 20% 10% 20%;
            background-color: orangered;
        }

        .description-devellopment-icon{
            border-radius: 50px;
            padding: 15%;
            margin: 15% 20% 10% 20%;
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
            max-width: 700px;
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
@endsection

@section('content')

    <div class="modal fade" id="FormationInscriptionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFullTitle">INSCRIPTION A UN COURS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-container">
                        <h3 class="form-title">Formulaire d'inscription</h3>
                        <form action="" method="POST" id="formation_inscription_form">
                            @csrf
                            @method('post')

                            <div class="row g-3 formationInscription-1">
                                <!-- Inputs -->
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <label class="form-label"> Matricule: <span class="text-danger fw-bolder">*</span>:</label>
                                    <input type="text" class="form-control" placeholder="MAT24F001I-TECH" id="identifier" name="identifier">
                                    <div class="text-danger small d-none" id="identifier_error">Ce champ est requis</div>
                                    @error('identifier')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <label class="form-label"> email <span class="text-danger fw-bolder">*</span>:</label>
                                    <input type="email" class="form-control" placeholder="i-techformation@gmail.com" id="email" name="email" data-state="0">
                                    <div class="text-danger small d-none" id="email_error">Ce champ est requis</div>
                                    @error('email')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <label class="form-label"> Mode passe: <span class="text-danger fw-bolder">*</span>:</label>
                                    <input type="password" class="form-control" id="password" name="password" data-state="0">
                                    <div class="text-danger small d-none" id="password_error">Ce champ est requis</div>
                                    @error('password')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-3 d-none" id="formationInscription-2" data-state="0">
                                <div class="col-md-6 col-sm-12 mt-3">
                                    <label class="form-label"> Mode de formation :<span class="text-danger fw-bolder">*</span>:</label>
                                    <select name="formation_mode" id="formation_mode" class="form-control select2">
                                        <option value="">Choisissez votre ville de formation</option>
                                    </select>
                                    <div class="text-danger small d-none" id="formation_mode_error">Ce champ est requis</div>
                                    @error('formation_mode')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12 mt-3">
                                    <label class="form-label"> Ville de formation <span class="text-danger fw-bolder">*</span>:</label>
                                    <select name="formation_city" id="formation_city" class="form-control select2">
                                        <option value="">Choisissez votre ville de formation</option>
                                    </select>
                                    <div class="text-danger small d-none" id="formation_city_error">Ce champ est requis</div>
                                    @error('formation_city')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <label class="form-label"> option choisie <span class="text-danger fw-bolder">*</span>:</label>
                                    <select name="formation_option" id="formation_option" class="form-control select2">
                                        <option value="" selected>Choisir l'option</option>
                                    </select>
                                    <div class="text-danger small d-none" id="formation_option_error">Ce champ est requis</div>
                                    @error('formation_option')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <label class="form-label"> Niveau de formation choisi <span class="text-danger fw-bolder">*</span>:</label>
                                    <select name="formation_level" id="formation_level" class="form-control select2">
                                        <option value="" selected>Niveau de formation</option>
                                    </select>
                                    <div class="text-danger small d-none" id="formation_level_error">Ce champ est requis</div>
                                    @error('formation_level')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <label class="form-label"> Round de formation <span class="text-danger fw-bolder">*</span>:</label>
                                    <input type="text" class="form-control" id="round_input" name="round_input" readonly>
                                    <div class="text-danger small d-none" id="round_input_error">Ce champ est requis</div>
                                    @error('round_input')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <label class="form-label"> Moyen de paiement <span class="text-danger fw-bolder">*</span>:</label>
                                    <select name="payment_mode" id="payment_mode" class="form-control select2">

                                    </select>
                                    <div class="text-danger small d-none" id="payment_mode_error">Ce champ est requis</div>
                                    @error('payment_mode')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <label class="form-label"> Numéro de paiement <span class="text-danger fw-bolder">*</span>:</label>
                                    <input type="number" class="form-control" id="output_account" name="output_account" placeholder="entrez le compte débiteur" value="{{old('output_account')}}">
                                    <div class="text-danger small d-none" id="output_account_error">Ce champ est requis</div>
                                    @error('output_account')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-sm-12 mt-3">
                                    <label class="form-label"> Montant versé <span class="text-danger fw-bolder">*</span>:</label>
                                    <input type="number" class="form-control" id="amount_paid" name="amount_paid" placeholder="entrez le montant versé" value="{{old('amount_paid')}}">
                                    <div class="text-danger small d-none" id="amount_paid_error">Ce champ est requis</div>
                                    @error('amount_paid')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4 text-center">
                                <button type="submit" class="btn btn-custom px-5" id="btn-formationInscription">Envoyer</button>
                            </div>
                        </form>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{route('student.inscription.view')}}" class="btn btn-primary">page de pré-incription</a>
                </div>
            </div>
        </div>
    </div>

    <section class="section-1">
        <div class="">

            <div class="our-formation-container">
                <div class="section-1-first-content">


                    <div class= "sub-nav  d-md-block d-none float-none float-sm-end">
                        <div class="row d-block d-sm-none">
                            <div class="col-4"></div>
                            <div class="col-4 design"></div>
                            <div class="col-4"></div>
                        </div>
                        <div class="d-none d-md-block">
                            <div class="row">
                                <div class="col-3 higher-computer-science">
                                    Higher Computer science
                                </div>
                                <div class="col-6 menu-home-container">
                                    <ul class="menu-home">
                                        <li class="item-menu-home"><a href="#"><i class="fa fa-phone text-warning mx-1"></i>Nos Partenaires </a></li>
                                        <li class="item-menu-home"><a href="#"><i class="fa fa-home-user text-warning mx-1"></i>Nos Centres de formation</a></li>
                                        <li class="item-menu-home"><a href="#"><i class="fa fa-list-check text-warning mx-1"></i>Nos Références</a></li>
                                    </ul>
                                </div>
                                <div class="col-3 research-sub-nav-parent-2">
                                    <div class="text-white">Rechercher ...
                                        <input type="text" placeholder="Rechercher..." class="research-sub-nav form-control"> <i class="fa fa-search fa-2x iconee"></i>
                                    </div>
                                    {{--                <div class="research-sub-nav-parent">--}}
                                    {{--                </div>--}}

                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="image-slide mb-3">
                        <div class="itech-slid">I-TECH FORMATION</div>
                        <div class="welcom-within-center mt-4">
                            bienvenue sur le site de notre centre de formation
                        </div>
                        <div class="welcom-within-center mt-2 d-none d-md-block">L'excellence academique informatique</div>
                        <div class="mt-5">
                            <a href="{{route('student.inscription.view')}}" class="btn-inscription">s'inscrire </a>
                        </div>
                    </div>

                    <h1 class="title-formation">Nos Formations</h1>
                    <div class="title-formation-bar"></div>


                    <div>
                        <div>
                            <h3 class="text-center my-4 sub-title-foramtion">INFORMATIQUE CLASSIQUE <i class="fa fa-square-plus  mx-2" style="color: orangered"></i></h3>
                            <div class="" style="padding: 3% 20%; overflow: hidden; text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum hic in qui repellat similique! Aut delectus incidunt ipsam laborum nesciunt, nulla possimus. Aliquid deserunt, et nam possimus velit veritatis!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, atque debitis delectus dicta dolore dolores eum eveniet, exercitationem facere impedit neque quae quas recusandae repellendus suscipit, tempore tenetur vel voluptates?
                            </div>
                        </div>
                        <div style="">
                            <div class="classic-diaporama-container" style="">
                                <div class="display-5 mx-1 my-1 text-center" style="">
                                    <i class="fa fa-store-alt mx-1" style="color: orangered"></i> <span style="color: orangered">Nos Technologies</span>
                                </div>
                                <div class="row pt-3">
                                    <div class="row col-sm-12"  id="carossel" style="margin-bottom: 5%">
                                        <div class="row pt-5" style="margin-bottom: 10%">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="">
                                                    <a href="{{route('system.contact.view')}}" class="py-3 px-2 btn-inscription">Nous contacter <i class="fa fa-mobile-android mx1"></i> </a>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 ">
                                                <div class="pt-5 pt-md-3 border-bottom">

                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="pt-5 pt-md-1" style="padding-left: 30%">
                                                    <a href="#" class="py-3 px-2 btn-inscription">A propos de nous <i class="fa fa-user mx1"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row px-2 py-2 images">
                                            <div class="col-md-2 col-sm-6 mb-2 text-center">
                                                <img src="{{asset('/images/classic_part_imgs/office4.png')}}" class="img-item" alt="word">
                                                <span class="py-1 text-center d-block img-item-comment">PACK OFFICE</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 mb-2 text-center">
                                                <img src="{{asset('/images/classic_part_imgs/word4.png')}}" alt="word" >
                                                <span class="py-1 text-center d-block img-item-comment">MS OFFICE WORD</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 mb-2 text-center">
                                                <img src="{{asset('/images/classic_part_imgs/publisher.png')}}" alt="word">
                                                <span class="py-1 text-center d-block img-item-comment">MS OFFICE PUBLISHER</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 mb-2 text-center">
                                                <img src="{{asset('/images/classic_part_imgs/ppt.png')}}" alt="word" >
                                                <span class="py-1 text-center d-block img-item-comment">MS OFFICE POWERPOINT</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 mb-2 text-center">
                                                <img src="{{asset('/images/classic_part_imgs/pack-office2.jpg')}}" alt="word" width="50px" height="50px">
                                                <span class="py-1 text-center d-block img-item-comment">LOGOS</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 mb-2 text-center">
                                                <img src="{{asset('/images/classic_part_imgs/excel4.png')}}" alt="word">
                                                <span class="py-1 text-center d-block img-item-comment">MS OFFICE EXCEL</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding: 0 5% 0 5%">
                                        <div class="col-md-3 col-sm-6 px-4 py-2  text-center">
                                            <div class="detail-item">
                                                <div>
                                                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>word:: </a>
                                                </div>
                                                <div class="description-classic">Apprendre à manipuler un logiciel pour gerer la mise en forme des documents. L'experience est ici</div>
                                                <div class="detail-item-separator">
                                                    <div>
                                                        <i class="fa fa-square-plus text-info"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 px-4 py-2 text-center">
                                            <div class="detail-item">
                                                <div>
                                                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>excel:: </a>
                                                </div>
                                                <div class="description-classic">Apprendre à manipuler un logiciel de calcule automatique. Nous some la pour vous</div>
                                                <div class="detail-item-separator">
                                                    <div>
                                                        <i class="fa fa-square-plus text-info"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 px-4 py-2 text-center">
                                            <div class="detail-item">
                                                <div>
                                                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>power point:: </a>
                                                </div>
                                                <div class="description-classic">Apprendre à manipuler un logiciel pour gerer des présentations assistées par ordinateur</div>
                                                <div class="detail-item-separator">
                                                    <div>
                                                        <i class="fa fa-square-plus text-info"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3 col-sm-6 px-4 py-2 text-center">
                                            <div class="detail-item">
                                                <div>
                                                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>publisher:: </a>
                                                </div>
                                                <div class="description-classic">Apprendre à manipuler un logiciel pour créer des designs et symbole publicitaires</div>
                                                <div class="detail-item-separator">
                                                    <div>
                                                        <i class="fa fa-square-plus text-info"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modern-computeur-science">
                <h3 class="text-center sub-title-foramtion" style="margin-bottom: 4%">INFORMATIQUE MODERNE <i class="fa fa-square-plus  mx-2" style="color: orangered"></i></h3>
                <div class="radio-btn-container my-2">
                    <div class="row">
                        <div class="col-md-4 col-sm-12"></div>
                        <div class="col-md-4 col-sm-12 text-center border" style="padding:0 5% 0 5%">
                            <div class="radio-btn-sub-container">
                                <label for="" class="form-label text-white">Réseau</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input toolbar-position-top" id="toolbar-position-top" name="toolbar-position" type="radio"
                                           value="network" checked>
                                </div>
                                <label class="form-label text-white">Développement</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input toolbar-position-top" id="toolbar-position-top" name="toolbar-position" type="radio"
                                           value="development">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12"></div>

                    </div>


                </div>
                <div class="sub-modern-part-container border-top">
                    <div class="sub-modern-part-1">
                        <div class="row text-center sub-modern-part-title-container">
                            <h3 class="text-white sub-modern-part-title">
                                réseau informatique
                            </h3>
                        </div>

                        <div class="row bg-info py-2" style="padding: 0 2% 0 2%">
                            <div class="col-md-3 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/network_img/dev1.png')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        Administration réseau
                                    </div>
                                    <div class="description-network-image">
                                        <div class="px-2">
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text">
                                                possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span><a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div class="description-network-icon">
                                            <i class="fa fa-network-wired text-white" style="font-size: 80px"></i>
                                        </div>
                                        <div class="detail-link-container mx-2 my-5">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/network_img/cyber-security-article.jpg')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        cyber-sécurité
                                    </div>
                                    <div class="description-network-image">
                                        <div class="px-2">
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div class="description-network-icon-2">
                                            <i class="fa fa-key text-white" style="font-size: 80px"></i>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/network_img/AS2.jpg')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        système
                                    </div>
                                    <div class="description-network-image">
                                        <div class="px-2">
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span>. <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div class="description-network-icon-3">
                                            <i class="fa fa-network-wired text-white" style="font-size: 80px"></i>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/network_img/network_img1.jpeg')}}" alt="" class="net-work-img" width="100%" height="20%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        hacking-éthique
                                    </div>
                                    <div class="description-network-image">
                                        <div class="px-2">
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span>. <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div class="description-network-icon-4">
                                            <i class="fa fa-mask-face text-white" style="font-size: 80px"></i>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="sub-modern-part-2 d-none">
                        <div class="row text-center sub-modern-part-title-container">
                            <h3 class="text-white sub-modern-part-title">
                                développement informatique
                            </h3>
                        </div>
                        <div class="row bg-primary py-2" style="padding: 0 2% 0 2%">
                            <div class="col-md-3 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/developpement_img/AS.jpg')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        développement web
                                    </div>
                                    <div class="description-network-image-2">
                                        <div class="px-2">
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div class="description-devellopment-icon">
                                            <i class="fa fa-sitemap fa-3x" style="color: orangered"></i>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/developpement_img/slideimg.jpg')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        développement mobile
                                    </div>
                                    <div class="description-network-image2">
                                        <div class="px-2">
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div class="description-devellopment-icon">
                                            <i class="fa fa-computer fa-3x" style="color: orangered"></i>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/developpement_img/dev4.png')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        management de projet
                                    </div>
                                    <div class="description-network-image2">
                                        <div class="px-2">
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div class="description-devellopment-icon">
                                            <i class="fa fa-assistive-listening-systems fa-3x" style="color: orangered"></i>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/developpement_img/dev3.png')}}" alt="" class="net-work-img" width="100%" height="20%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        base de données
                                    </div>
                                    <div class="description-network-image2">
                                        <div class="px-2">
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div class="description-devellopment-icon">
                                            <i class="fa fa-database fa-3x" style="color: orangered"></i>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>


            <div class="pt-5 pb-2">
                <div class="">
                    <h1 class="title-formation">Autres</h1>
                    <div class="title-formation-bar"></div>
                </div>
                <div class="text-center py-3" style="font-size: 12px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cum eveniet ut! Accusamus cum dolorum ea explicabo facilis laboriosam rem rerum vel.
                </div>
                <div class="flyer-container" style="background-color: #eac8be;padding: 5% 10%;">
                    <div class="flyer-container-1">
                        <a target="_blank" href="{{asset('/images/flyers/flyer6.png')}}">
                            <img src="{{asset('/images/flyers/flyer6.png')}}" alt="flyer" width="400vw" height="auto">
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

@section('js-content')
    <script>
        $(document).ready(function (){

            $('.select2').select2({
                width: '100%',
                allowClear: true,
                dropdownParent: $('#FormationInscriptionModal'),
            });

            $('.toolbar-position-top').on('change', function (){

                const network_content  = $('.sub-modern-part-1');
                const development_content  = $('.sub-modern-part-2');
                console.log('je suis 1', development_content);

                if ($(this).is(':checked') && $(this).val() === 'network'){
                    console.log('je suis 2');


                    network_content.removeClass('d-none');
                    development_content.addClass('d-none');
                }

                if ($(this).is(':checked') && $(this).val() === 'development'){
                    network_content.addClass('d-none');
                    development_content.removeClass('d-none');
                }
            })

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

                                 window.location.replace(`/student/set-badge/${response.data.student.id}/${response.data.round.id}`);
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
        });
    </script>


@endsection
