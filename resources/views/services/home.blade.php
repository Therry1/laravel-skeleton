@extends('../layouts/template_customer')

@section('title') I-Tech accueil    @endsection


@section('css-content')

    <link rel="stylesheet" href="{{asset('/css/style1.css')}}">
    <style>
        .sub-nav{
            z-index: 0;
        }

        .image-slide{
            position: relative;
            width: 100%;
            height: 150vh;           /* ajuste la hauteur à ton besoin */
            overflow: hidden;

            {{--background-image: url("{{asset('/images/p3.jpg')}}");--}}
            {{--background-size: cover;     /* Couvre tout le conteneur */--}}
            {{--background-position: center center;  /* Centré */--}}
            {{--background-repeat: no-repeat;--}}
            {{--justify-content: center;--}}
            {{--align-items: center;--}}
            {{--padding-top: 30%;--}}
        }

        /* Chaque "slide" est une couche absolue avec une image de fond */
        .image-slide .slide {
            position: absolute;
            inset: 0;               /* top/right/bottom/left = 0 */

            background-size: cover; /* couvre toute la zone */
            background-position: center;
            opacity: 0;
            animation: fade 100s infinite;
            z-index: 0;
        }

        /* 4 images, chacune décale son animation pour se relayer */
        .image-slide .slide:nth-child(1) {
            background-image: url("{{asset('/images/p1.jpg')}}");
            animation-delay: 0s;
        }
        .image-slide .slide:nth-child(2) {
            background-image: url("{{asset('/images/p2.jpg')}}");
            animation-delay: 25s;
        }
        .image-slide .slide:nth-child(3) {
            background-image: url("{{asset('/images/p3.jpg')}}");
            animation-delay: 50s;
        }
        .image-slide .slide:nth-child(4) {
            background-image: url("{{asset('/images/p4.jpg')}}");
            animation-delay: 75s;
        }

        /* Animation: chaque slide apparaît 20% du temps, puis disparaît */
        @keyframes fade {
            0%   { opacity: 0; }
            5%   { opacity: 1; }
            25%  { opacity: 1; }  /* reste visible un moment */
            30%  { opacity: 0; }
            100% { opacity: 0; }
        }

        .image-slide .content {
            position: relative;
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
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
            padding: 3% 6% 3% 6%;
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
            text-align: center;
            color: #071142;
            padding-top: 10%;
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


                    <div class="sub-nav  d-md-block d-none float-none float-sm-end">

                        <div class="d-none d-md-block">
                            <div class="row">
                                <div class="col d-sm-block d-none">
                                    <ul class="menu-home">
                                        <li class="item-menu-home"><a href="#" style=""><i class="fa fa-phone text-warning mx-1"></i>Nos Partenaires </a></li>
                                        <li class="item-menu-home"><a href="#"><i class="fa fa-home-user text-warning mx-1"></i>Nos Centres de formation</a></li>
                                        <li class="item-menu-home"><a href="#"><i class="fa fa-list-check text-warning mx-1"></i>Nos Références</a></li>
                                    </ul>
                                </div>
                                <div class="col research-sub-nav-parent-2 py-2">
                                    <div class="research-input-container px-5">
                                        <div class="" style="border-radius: 50px; display: flex; justify-content: center">
                                            <div  style="border-radius:50px 0 0 50px; background-color:white; width: 12%">

                                            </div>
                                            <input type="text" placeholder="Rechercher ... " class="research-input">
                                            <div style="border-radius: 0 50px 50px 0; border: 1px solid orangered">
                                                <i class="fa fa-search fa-2x mx-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="image-slide mb-3">

                        <div class="slide"></div>
                        <div class="slide"></div>
                        <div class="slide"></div>
                        <div class="slide"></div>

                        <div class="content">
                            <div class="itech-slid" style="z-index: 100">I-TECH FORMATION</div>
                            <div class="welcom-within-center mt-4">
                                bienvenue sur le site de notre centre de formation
                            </div>
                            <div class="welcom-within-center mt-2 d-none d-md-block">L'excellence academique informatique</div>
                            <div class="mt-5">
                                <a href="{{route('student.inscription.view')}}" class="btn-inscription">s'inscrire </a>
                            </div>
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
                                    <div class="text-justify description-network-image">
                                        <div class="px-2">
                                            L'administration réseau consiste à gérer et maintenir les systèmes de communication d'une organisation, en assurant leur bon fonctionnement, leur sécurité et leur performance. Cela implique la configuration, le dépannage, la surveillance et l'optimisation des réseaux. L'administrateur réseau, quant
                                            <span class="down-lightnes-of-text">
                                                à lui, est la personne
                                            </span> <span class="down-lightnes-of-text2"> chargée de ces tâches.</span><a target="_blank" href="https://openclassrooms.com/fr/paths/1048-administrateur-systemes-reseaux-et-cybersecurite" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div style="padding-top: 11%">
                                            <h3 style="color:#071142; text-decoration: underline">DESCRIPTION <i class="fa fa-network-wired mx-1" style="color: orangered"></i></h3>
                                            <div>
                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Surveillance et maintenance:</h4>
                                                Il surveille en permanence l'état du réseau, identifie les problèmes potentiels et effectue les opérations de maintenance pour garantir sa performance et sa fiabilité

                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Gestion des utilisateurs:</h4>
                                                Il gère les comptes utilisateurs, les droits d'accès et les politiques de sécurité pour s'assurer que seuls les utilisateurs autorisés peuvent accéder aux ressources du réseau.

                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Dépannage:</h4>
                                                En cas de problème, l'administrateur réseau doit être capable d'identifier rapidement la cause de la panne et de la résoudre efficacement.
                                            </div>
                                        </div>

                                        <div class="detail-link-container mx-2 my-5">
                                            <a target="_blank" href="https://openclassrooms.com/fr/paths/1048-administrateur-systemes-reseaux-et-cybersecurite" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
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
                                    <div class="text-justify description-network-image">
                                        <div class="px-2">
                                            Une cyberattaque désigne un effort intentionnel visant à voler, exposer, modifier, désactiver ou détruire des données, des applications ou d'autres actifs par le biais d'un accès non autorisé à un réseau,

                                            <span class="down-lightnes-of-text">
                                                un système informatique ou un
                                            </span> <span class="down-lightnes-of-text2">
                                                appareil numérique
                                            </span> <a href="https://www.fortinet.com/fr/resources/cyberglossary/types-of-cyber-attacks" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div style="padding-top: 11%">
                                            <h3 style="color:#071142; text-decoration: underline">DESCRIPTION <i class="fa fa-shield-alt mx-1" style="color: orangered"></i></h3>
                                            <div>
                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Protection des systèmes et des réseaux:</h4>
                                                Cela implique l'utilisation de pare-feu, de systèmes de détection d'intrusion, de logiciels antivirus et de mesures de sécurité pour protéger les infrastructures informatiques contre les accès non autorisés et les logiciels malveillants.

                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Protection des données:</h4>
                                                La cybersécurité vise à garantir la confidentialité, l'intégrité et la disponibilité des données, en utilisant des techniques de cryptage, de sauvegarde et de contrôle d'accès
                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Gestion des risques:</h4>
                                                Les organisations doivent évaluer les risques liés aux cybermenaces, mettre en place des mesures de sécurité appropriées et élaborer des plans de réponse aux incidents pour faire face aux attaques.                                             </div>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a target="_blank" href="https://www.fortinet.com/fr/resources/cyberglossary/types-of-cyber-attacks" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
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
                                    <div class="text-justify description-network-image">
                                        <div class="px-2">
                                            Un système informatique est un ensemble de composants matériels (ordinateurs, serveurs, etc.) et logiciels (système d'exploitation, applications) qui travaillent ensemble pour
                                            <span class="down-lightnes-of-text"> exécuter des programmes</span>
                                            <span class="down-lightnes-of-text2"> et traiter des données.</span>. <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div style="padding-top: 11%">
                                            <h3 style="color:#071142; text-decoration: underline">DESCRIPTION <i class="fa fa-shield-alt mx-1" style="color: orangered"></i></h3>
                                            <div>
                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Conception et déploiement:</h4>
                                                Un plan de déploiement informatique est un ensemble d'opérations coordonnées visant à introduire une application logicielle ou un système dans son environnement prévu. Cela inclut l'installation, la configuration, les tests et les modifications nécessaires pour garantir un déploiement réussi.

                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Maintenance et surveillance:</h4>
                                                La maintenance et la surveillance des systèmes informatiques regroupent les actions de suivi, de mise à jour et de réparation proactives pour assurer le fonctionnement optimal, la performance et la sécurité du matériel, des logiciels et des réseaux. Le monitoring, ou supervision, permet d'alerter les techniciens en cas d'anomalies détectées 24h/24 et 7j/7, tandis que la maintenance
                                                préventive inclut des mises à jour, des sauvegardes et des contrôles réguliers pour anticiper et éviter les pannes
                                            </div>
                                        </div>
                                        <div class="detail-link-container  mx-2 my-5">
                                            <a target="_blank" href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
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
                                    <div class="text-justify description-network-image">
                                        <div class="px-2">
                                            Le hacking éthique, ou piratage éthique, en sécurité informatique, décrit l'activité de hacking lorsqu'elle n'est pas malveillante.

                                            Les mêmes pratiques (tel que le piratage, l'exploitation de faille, le contournement des limitations) peuvent être utilisées par des white hats (français : chapeaux blancs) avec un objectif bienveillant (analyse, information, protection…) ou des black hats (français : chapeaux noirs)
                                            <span class="down-lightnes-of-text"> avec un objectif malveillant (destruc</span>
                                            <span class="down-lightnes-of-text2"> tion, prise de contrôle, vol...).</span>. <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div style="padding-top: 11%">
                                            <h3 style="color:#071142; text-decoration: underline">DESCRIPTION <i class="fa fa-shield-alt mx-1" style="color: orangered"></i></h3>
                                            <div>
                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Missions du hacker éthique:</h4>
                                                Le hacking ou piratage éthique décrit l’activité de hacking lorsqu’elle n’est pas malveillante. Ainsi, le piratage éthique désigne le processus par lequel un hacker bienveillant également baptisé “white hat” accède à un réseau ou un système informatique avec les mêmes outils et ressources que son confrère malveillant, “black hat” , à la différence qu’il y est autorisé.

                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Responsabilités du hacker éthique:</h4>
                                                S’introduire légalement dans les systèmes et les réseaux d’une entreprise nécessite pour tout hacker éthique qui se respecte de se conformer à un code de conduite et à une discipline stricte. C’est aussi le cas pour pour les Media Exploitation Analysts, qui aident les entreprises et institutions à trouver des preuves dans les nombreux fichiers et logs fournis par les machines.

                                                Avant d’évaluer la sécurité du réseau d’une entreprise, le hacker éthique sera soumis à une procédure d’accréditation scrupuleuse.

                                            </div>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a target="_blank" href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
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
                                    <div class="text-justify description-network-image-2">
                                        <div class="px-2">
                                            Le développement web englobe la conception, la création et la gestion de sites web et d'applications en ligne. Il comprend à la fois le développement front-end (ce que l'utilisateur voit) et le développement back-end (la logique et les bases de données). En d'autres termes, c'est le <span class="down-lightnes-of-text">  processus de transformation d'idées en </span> <span class="down-lightnes-of-text2"> sites web fonctionnels et attrayants.</span> <a href="https://www.digitalschool.paris/guide/developpement-web/definition/" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div style="padding-top: 11%">
                                            <h3 style="color:#071142; text-decoration: underline">DESCRIPTION</h3>
                                            <div>
                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Développement Front-end:</h4>

                                                Se concentre sur l'interface utilisateur (UI) et l'expérience utilisateur (UX). Les développeurs front-end utilisent des langages tels que HTML, CSS et JavaScript pour créer des pages web visuellement attrayantes et interactives.
                                                <h4 style="font-family: 'Comic Sans MS' ; color: orangered">Développement Back-end:</h4>

                                                S'occupe de la partie invisible du site web, comme les serveurs, les bases de données et la logique applicative. Les développeurs back-end utilisent des langages comme PHP, Python, ou Ruby pour gérer les interactions entre la base de données et l'interface utilisateur.

                                            </div>
                                        </div>


                                        <div class="detail-link-container  mx-2 my-5">
                                            <a target="_blank" href="https://www.digitalschool.paris/guide/developpement-web/definition/" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
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
                                    <div class="text-justify description-network-image2">
                                        <div class="text-justify px-2">
                                            Le développement mobile est l'ensemble des activités liées à la création et à la publication d'applications pour appareils mobiles, tels que les smartphones et les tablettes. Ces applications peuvent être natives, c'est-à-dire conçues pour un système d'exploitation spéc  <span class="down-lightnes-of-text"> ifique (Android ou iOS), ou hybrides</span> <span class="down-lightnes-of-text2"> , fonctionnant sur plusieurs plateformes.</span> <a target="_blank" href="https://www.aquilapp.fr/ressources/projet-mobile/quest-ce-que-le-developpement-mobile" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div style="padding-top: 11%">
                                            <h3 style="color:#071142; text-decoration: underline">DESCRIPTION</h3>
                                            <div>
                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Applications natives:</h4>

                                                Développées spécifiquement pour un système d'exploitation (Android ou iOS), elles offrent une performance et une intégration optimales avec l'apparei
                                                <h4 style="font-family: 'Comic Sans MS' ; color: orangered">Applications hybrides:</h4>

                                                Créées avec des technologies web (HTML, CSS, JavaScript) et encapsulées dans une native app, elles peuvent être utilisées sur plusieurs plateformes.
                                                <h4 style="font-family: 'Comic Sans MS' ; color: orangered">outils:</h4>
                                                Java (Android), Swift (iOS), React Native
                                            </div>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a target="_blank" href="https://www.aquilapp.fr/ressources/projet-mobile/quest-ce-que-le-developpement-mobile" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
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
                                    <div class="text-justify description-network-image2">
                                        <div class="px-2">
                                            La gestion de projet informatique désigne le processus de gestion, planification et développement des projets informatiques. Les chefs de projet peuvent s’accompagner d’un logiciel de gestion de projet informatique pour les cinq phases du cycle de vie de la gestion de <span class="down-lightnes-of-text"> projet et ainsi accomplir des tâches </span> <span class="down-lightnes-of-text2"> complexes plus efficacement.</span> <a href="https://asana.com/fr/resources/it-project-management" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div style="padding-top: 11%">
                                            <h3 style="color:#071142; text-decoration: underline">DESCRIPTION</h3>
                                            <div>
                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Le rôle du chef de projet informatique:</h4>

                                                En tant que chef de projet informatique, vous devez savoir comment communiquer avec tous les membres de votre entreprise. Vous travaillerez en étroite collaboration avec les membres du service informatique, mais vous pourrez également avoir à échanger avec d’autres services au sujet du travail de votre équipe.
                                                L’objectif de tout projet informatique est de livrer un produit fonctionnel qui répond aux besoins du client Les chefs de projet informatique sont les premiers points de contact en cas de problème.
                                            </div>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a target="_blank" href="https://asana.com/fr/resources/it-project-management" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
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
                                            Une base de données est un ensemble structuré de données organisées de manière à être facilement consultées, gérées et mises à jour. Elle sert de référentiel centralisé pour stocker et accéder à l'information, que ce soit pour une entreprise, <span class="down-lightnes-of-text"> une organisation ou une</span> <span class="down-lightnes-of-text2"> application spécifique. </span> <a href="https://webusers.i3s.unice.fr/~nlt/cours/licence/sgbd1/sgbd1_cours.pdf" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>

                                        <div style="padding-top: 11%">
                                            <h3 style="color:#071142; text-decoration: underline">DESCRIPTION <i class="fa fa-database mx-1" style="color: orangered"></i></h3>
                                            <div>
                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Système de gestion de base de données (SGBD):</h4>
                                                Un logiciel (comme MySQL, Oracle, PostgreSQL) permet d'interagir avec la base de données, d'effectuer des requêtes et de gérer les données.

                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Langage de requête structuré (SQL):</h4>
                                                Le langage standard pour interagir avec les bases de données relationnelles, permettant d'effectuer des recherches, des mises à jour, etc

                                                <h4 style="font-family: 'Comic Sans MS' ;color: orangered">Types de bases de données:</h4>
                                                Il existe différents types de bases de données, tels que les bases de données relationnelles (SQL), les bases de données NoSQL (clé-valeur, document, etc.), les bases de données spatiales, etc.
                                            </div>
                                        </div>

                                        <div class="detail-link-container  mx-2 my-5">
                                            <a target="_blank" href="https://webusers.i3s.unice.fr/~nlt/cours/licence/sgbd1/sgbd1_cours.pdf" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
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
