@extends('../layouts/template_customer')

@section('title')      @endsection


@section('css-content')

    <link rel="stylesheet" href="{{asset('/css/style1.css')}}">
    <style>
        .image-slide{
            background-image: url("{{asset('/images/slideimg.jpg')}}");
        }
    </style>
@endsection

@section('content')

    <div class="position-relative">
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

            <div class="d-block d-md-none float-end pt-3">
                <a href="#" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="menu"><i class="fa fa-list-dots fa-3x mx-2" style="color: orangered"></i></a>
            </div>
        </div>
        <div class="image-slide mb-3">
            <div class="welcom-within-center">
                bienvenue sur le site de notre centre de formation
            </div>
        </div>
        <div class="our-formation-container">
            <h1 class="title-formation">Nos Formations</h1>
            <div class="title-formation-bar"></div>
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
                        <div class="row col-sm-12"  id="carossel">
                            <div class="row px-2 py-2 images">
                                <div class="col-md-2 col-sm-12 mb-2 text-center">
                                    <img src="{{asset('/images/classic_part_imgs/office.jpg')}}" class="img-item" alt="word" width="100px" height="100px">
                                    <span class="py-1 text-center d-block img-item-comment">PACK OFFICE</span>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-2 text-center">
                                    <img src="{{asset('/images/classic_part_imgs/word2.jpg')}}" alt="word" width="100px" height="100px">
                                    <span class="py-1 text-center d-block img-item-comment">OFFICE</span>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-2 text-center">
                                    <img src="{{asset('/images/classic_part_imgs/pack-office1.jpg')}}" alt="word" width="100px" height="100px">
                                    <span class="py-1 text-center d-block img-item-comment">BUREAUTIQUE</span>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-2 text-center">
                                    <img src="{{asset('/images/classic_part_imgs/powerpoint.jpg')}}" alt="word" width="100px" height="100px">
                                    <span class="py-1 text-center d-block img-item-comment">MS OFFICE POWERPOINT</span>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-2 text-center">
                                    <img src="{{asset('/images/classic_part_imgs/pack-office2.jpg')}}" alt="word" width="100px" height="100px">
                                    <span class="py-1 text-center d-block img-item-comment">LOGOS</span>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-2 text-center">
                                    <img src="{{asset('/images/classic_part_imgs/excel3.jpg')}}" alt="word" width="100px" height="100px">
                                    <span class="py-1 text-center d-block img-item-comment">MS OFFICE EXCEL</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 px-4 py-2  text-center">
                                <div class="detail-item">
                                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>word:: </a>
                                    <span>Apprendre à manipuler un logiciel pour gerer la mise en forma des documents</span>
                                    <div class="detail-item-separator">
                                        <div></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 px-4 py-2 text-center">
                                <div class="detail-item">
                                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>excel:: </a>
                                    <span>Apprendre à manipuler un logiciel de calcule automatique</span>
                                    <div class="detail-item-separator">
                                        <div></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 px-4 py-2 text-center">

                                <div class="detail-item">
                                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>power point:: </a>
                                    <span>Apprendre à manipuler un logiciel pour gerer des présentations assistées par ordinateur</span>
                                    <div class="detail-item-separator">
                                        <div></div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-sm-12 px-4 py-2 text-center">
                                <div class="detail-item">
                                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>publisher:: </a>
                                    <span>Apprendre à manipuler un logiciel pour créer des designs et symbole publicitaires</span>
                                    <div class="detail-item-separator">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modern-computeur-science">
                <h3 class="text-center my-4 sub-title-foramtion">INFORMATIQUE MODERNE <i class="fa fa-square-plus  mx-2" style="color: orangered"></i></h3>
                <div class="radio-btn-container my-2">
                    <div class="row">
                        <div class="col-md-4 col-sm-12"></div>
                        <div class="col-md-4 col-sm-12 px-2">
                            <div class="radio-btn-sub-container">
                                <label for="" class="form-label">Réseau</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input toolbar-position-top" id="toolbar-position-top" name="toolbar-position" type="radio"
                                           value="network" checked>
                                </div>
                                <label class="form-label">Développement</label>
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
                        <div class="row">
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/network_img/network_img2.jpeg')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        Administration réseau
                                    </div>
                                    <div class="description-network-image">
                                        <div class="px-2">
                                            Lorem ipsum dolor sit amet, Eum impedit labore libero rerum ullam,
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span><a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>
                                        <div class="px-2 text-network-continu1">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid aut beatae
                                            dolore eaque eius esse excepturi
                                            fugiat hic iusto laudantium, neque officiis quasi quia, quo reiciendis sequi suscipit.
                                        </div>
                                        <div class="detail-link-container mx-2">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/network_img/cyber-security-article.jpg')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        cyber-sécurité
                                    </div>
                                    <div class="description-network-image">
                                        <div class="px-2">
                                            Lorem ipsum dolor sit amet, Eum impedit labore libero rerum ullam,
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>
                                        <div class="px-2 text-network-continu1">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid aut beatae
                                            dolore eaque eius esse excepturi
                                            fugiat hic iusto laudantium, neque officiis quasi quia, quo reiciendis sequi suscipit.
                                        </div>
                                        <div class="detail-link-container mx-2">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card net-work-container">
                                <div class="container-img">
                                    <img src="{{asset('images/network_img/cyber-security-article.jpg')}}" alt="" class="net-work-img" width="100%" height="80%">
                                </div>
                                <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                    cyber-sécurité
                                </div>
                                <div class="description-network-image">
                                    <div class="px-2">
                                        Lorem ipsum dolor sit amet, Eum impedit labore libero rerum ullam,
                                        veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span>, perferendis. <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                    </div>
                                    <div class="px-2 text-network-continu1">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid aut beatae
                                        dolore eaque eius esse excepturi
                                        fugiat hic iusto laudantium, neque officiis quasi quia, quo reiciendis sequi suscipit.
                                    </div>
                                    <div class="detail-link-container">
                                        <a href="" class="detail-link-1 btn btn-primary">Détail <i class="fa fa-circle-chevron-right mx-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card net-work-container">
                                <div class="container-img">
                                    <img src="{{asset('images/network_img/network_img1.jpeg')}}" alt="" class="net-work-img" width="100%" height="20%">
                                </div>
                                <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                    hacking-éthique
                                </div>
                                <div class="description-network-image">
                                    <div class="px-2">
                                        Lorem ipsum dolor sit amet, Eum impedit labore libero rerum ullam,
                                        veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span>, perferendis. <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                    </div>
                                    <div class="px-2 text-network-continu1">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid aut beatae
                                        dolore eaque eius esse excepturi
                                        fugiat hic iusto laudantium, neque officiis quasi quia, quo reiciendis sequi suscipit.
                                    </div>
                                    <div class="detail-link-container mx-2">
                                        <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
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
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/developpement_img/dev2.png')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        développement web
                                    </div>
                                    <div class="description-network-image-2">
                                        <div class="px-2">
                                            Lorem ipsum dolor sit amet, Eum impedit labore libero rerum ullam,
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>
                                        <div class="px-2 text-network-continu2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid aut beatae
                                            dolore eaque eius esse excepturi
                                            fugiat hic iusto laudantium, neque officiis quasi quia, quo reiciendis sequi suscipit.
                                        </div>
                                        <div class="detail-link-container mx-2">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/developpement_img/dev1.png')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        développement mobile
                                    </div>
                                    <div class="description-network-image2">
                                        <div class="px-2">
                                            Lorem ipsum dolor sit amet, Eum impedit labore libero rerum ullam,
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>
                                        <div class="px-2 text-network-continu2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid aut beatae
                                            dolore eaque eius esse excepturi
                                            fugiat hic iusto laudantium, neque officiis quasi quia, quo reiciendis sequi suscipit.
                                        </div>
                                        <div class="detail-link-container mx-2">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/developpement_img/dev4.png')}}" alt="" class="net-work-img" width="100%" height="80%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        management de projet
                                    </div>
                                    <div class="description-network-image2">
                                        <div class="px-2">
                                            Lorem ipsum dolor sit amet, Eum impedit labore libero rerum ullam,
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>
                                        <div class="px-2 text-network-continu2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid aut beatae
                                            dolore eaque eius esse excepturi
                                            fugiat hic iusto laudantium, neque officiis quasi quia, quo reiciendis sequi suscipit.
                                        </div>
                                        <div class="detail-link-container mx-2">
                                            <a href="" class="detail-link-1">Détail <i class="fa fa-circle-chevron-right mx-1 text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="card net-work-container">
                                    <div class="container-img">
                                        <img src="{{asset('images/developpement_img/dev3.png')}}" alt="" class="net-work-img" width="100%" height="20%">
                                    </div>
                                    <div class="text-center fw-bolder text-capitalize px-2 title-network-image">
                                        base de donné
                                    </div>
                                    <div class="description-network-image2">
                                        <div class="px-2">
                                            Lorem ipsum dolor sit amet, Eum impedit labore libero rerum ullam,
                                            veniam? Ad dicta dolorem exercitationem inventore ipsa iure numquam <span class="down-lightnes-of-text"> possimus sapiente soluta</span> <span class="down-lightnes-of-text2"> totam! Magni mo
                                        llitia</span> <a href="#" class="fw-bolder see-more-link-1">voir plus <i class="fa fa-circle-plus"></i></a>
                                        </div>
                                        <div class="px-2 text-network-continu2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid aut beatae
                                            dolore eaque eius esse excepturi
                                            fugiat hic iusto laudantium, neque officiis quasi quia, quo reiciendis sequi suscipit.
                                        </div>
                                        <div class="detail-link-container mx-2">
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
    </div>












    <footer class="footer">

    </footer>

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
        });
    </script>


@endsection
