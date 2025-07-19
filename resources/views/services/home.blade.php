@extends('../layouts/template_customer')

@section('title')      @endsection


@section('css-content')

    <link rel="stylesheet" href="{{asset('/css/style1.css')}}">
    <style>
        .sub-nav{
            z-index: 0;
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
        .position-relative{
            flex-grow: 1;
            flex-shrink: 0;
            flex-basis: auto;
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

        .section-2{
            /*border: 10px orangered solid;*/
            position: absolute;
        }


        .section-2{
            padding: 7% 0 0 0;
        }


        .footer{

        }
    </style>
@endsection

@section('content')

    <section class="section-1">
        <div class="">

            <div class="our-formation-container">
                <div class="section-1-first-content">
                    <div class= "sub-nav float-none float-sm-end">
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

                        <div class="d-block d-sm-none float-end pt-3">
                            <a href="#" class="launch-menu-sm"><i class="fa fa-list-dots fa-3x mx-2" style="color: orangered"></i></a>
                        </div>
                    </div>
                    <div class="sm-menu d-none" data-status="0">
                        <div class="row">
                            <div class="col-6">
                                <div class="principal-menu-section">
                                    <h3 class="menu-sm-title">Menu principal</h3>
                                    <div class="first-menu-item-sm">
                                        <a href="" class="link-item-sm"><i class="fa fa-home-alt mx-1 text-warning"></i></a>
                                    </div>
                                    <div class="first-menu-item-sm">
                                        <a href="" class="link-item-sm">Contact </a>
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
                                        <a href="" class="link-item-sm"><span class="text-warning">Se conecter </span><i class="fa fa-user-circle mx-2 text-warning"></i></a>
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


                    <div class="image-slide mb-3">
                        <div class="itech-slid">I-TECH FORMATION</div>
                        <div class="welcom-within-center mt-4">
                            bienvenue sur le site de notre centre de formation
                        </div>
                        <div class="welcom-within-center mt-2 d-none d-md-block">L'excellence academique informatique</div>
                        <div class="mt-5">
                            <a href="#" class="btn-inscription">s'inscrire </a>
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
                                                    <a href="#" class="py-3 px-2 btn-inscription">Nous contacter <i class="fa fa-mobile-android mx1"></i> </a>
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

        </div>
    </section>

    <section class="section-2">
        <div>
            <h1 class="title-formation">Quelques Témoignages</h1>
            <div class="title-formation-bar"></div>
        </div>
        <div class="temoignage-container">
            <div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            div
                        </div>
                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
            </div>
        </div>
    </section>













@endsection

@section('js-content')
    <script>
        $(document).ready(function (){
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
        });
    </script>


@endsection
