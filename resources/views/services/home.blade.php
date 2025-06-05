@extends('../layouts/template_customer')

@section('title')      @endsection


@section('css-content')

    <style>
        *{
            color: black;
        }

        body{
            background-color: black;
        }

        .sub-nav{
            background-color: black;
            width: 100%;
            height: 21vh;
            position: sticky;
            top: 0;
            z-index: 11;
        }
        .design{
            background-color: orangered;
            height: 2vh;
        }

        .higher-computer-science{
            text-transform: capitalize;
            font-size: 40px;
            font-family: Cambria;
            color: white;
            padding-left: 5px;
        }
        .research-sub-nav-parent{
            background-color: white;
            border-radius: 50px;
            position: relative;
            top: 25px;
            border: 1px solid white;
            padding: 7px 7px 7px 10px;
            height: 8vh;
        }

        .research-sub-nav{
            background-color: white;
            border: none;
        }
        .fa-search  {
            color: orangered;
            opacity: 100%;
            position: relative;
            bottom: 33px;
            left: 260px ;
        }

        .image-slide{
            background-image: url("{{asset('/images/image2.jpeg')}}");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 60vh;
            padding: 10%;
            align-items: center ;
            justify-content: center;
            text-align: center;
        }
        .welcom-within-center{
            font-size: 40px;
            font-family: Tahoma;
            font-weight: bolder;
            color: white;
            text-transform: capitalize  ;
        }
        .center-name{
            font-size: 60px;
            font-family: Tahoma;
            font-weight: bolder;
            color: orangered;
        }

        .menu-home-container{
            position: relative;
        }
        .menu-home{
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: absolute;
            bottom: 0;
        }
        .item-menu-home{
            list-style: none;
            margin-left: 50px;
        }
        .item-menu-home > a:hover {
            color: white;
        }

        .title-formation{
            color: black;
            font-size: 400%;
            margin-bottom: 0;
        }
        .title-formation-bar{
            background-color: orangered;
            width: 10vw;
            height: 2vh;
        }

        .sub-title-foramtion{
            font-family: Algerian;
            color: #080d28
        }

        .classic-diaporama-container{
            margin-top: 5%;
        }

        #carossel{
            width: 300px;
            overflow: auto;
            border-radius: 20px;
            margin-left: 15%;
            margin-top: 5%;
        }

        .images{
            display: flex;
            animation-duration: 50s;
            animation-name: my-images ;
            animation-iteration-count: infinite;
        }

        @keyframes my-images {
            0%{
                transform: translateX(0) ;
            }
            8%{
                transform: translateX(-300px) ;
            }
            16%{
                transform: translateX(-600px) ;
            }
            24%{
                transform: translateX(-900px) ;
            }
            32%{
                transform: translateX(-1200px) ;
            }
            40%{
                transform: translateX(-1500px) ;
            }
            48%{
                transform: translateX(-1800px) ;
            }
            56%{
                transform: translateX(-2100px) ;
            }
            64%{
                transform: translateX(-2400px) ;
            }
            72%{
                transform: translateX(-2700px) ;
            }
            80%{
                transform: translateX(-3000px) ;
            }
            88%{
                transform: translateX(-3300px) ;
            }
            96%{
                transform: translateX(-3600px) ;
            }
            100%{
                transform: translateX(0) ;
            }
        }

        .detail-classeic-container{
            padding: 20px;
            width: 50%;
            margin-left:4%;
            border-radius: 20px
        }
        .detail-item{
            box-shadow: 3px 3px 10px grey;
            padding: 2%;
            border-radius: 20px;
            font-size: 20px;
            font-family: Tahoma;
        }
        .detail-item-item{
            font-size: 30px;
            font-weight: bolder;
            font-family: Algerian;
        }
        .detail-item-separator{
            text-align: center; padding-top: 4%; padding-bottom: 4%
        }

        .detail-item-separator > div {
            width: 5vw; height: 1vh; background-color: orangered;margin-left: 35%
        }
        .radio-btn-container{
            text-align: center;
            width: 100%;
            justify-content: center;
            padding: 2% 45%;
        }
        .radio-btn-sub-container{
            border-radius: 5px;
            text-align: center;
            width: 10vw;
            background-color:#080d28 ;
            padding-left: 2px;
            padding-top: 3px;
        }
        .sub-modern-part-title{
            text-align: center;
            padding-top: 2%;
            padding-bottom: 2%;
            font-size: 40px;
            font-weight: bolder;
            font-family: Tahoma;
            color: black;
            text-transform: capitalize;
        }
        .net-work-container{
            padding: 2%;
        }
        .net-work-img{
            border-radius: 7px 7px 0 0;
        }
        .title-network-image{
            font-family: Algerian;
            font-size: 15px;
        }
        .description-network-image{
            font-size: 20px;
            text-align: justify;
        }
        .title-network-image{
            border-bottom: 5px solid #080d28;
            color: orangered;
        }
        .down-lightnes-of-text{
            color: #676869;
        }
        .down-lightnes-of-text2{
            color: #c2c3c5;
        }
        .text-network-continu1{
            display: none;
        }
        .see-more-link-1{
            color: orangered;
        }
        .detail-link-container{
            float: right;
            color: #071142;
        }
    </style>

@endsection

@section('content')

    <div class="sub-nav">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 design"></div>
            <div class="col-4"></div>
        </div>
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
    <div class="image-slide mb-3">
        <div class="welcom-within-center">
            bienvenu sur le site de notre centre de formation
        </div>
        <div class="center-name">
            <a href="#"  class="center-name"> <i class="fa fa-chevron-left mx-1"></i> I-Tech Formation / <i class="fa fa-chevron-right mx-1"></i>.</a>
        </div>
    </div>
    <div class="our-formation-container">
        <h1 class="title-formation">Nos Formations</h1>
        <div class="title-formation-bar"></div>
        <div>
            <h3 class="text-center my-4 sub-title-foramtion">INFORMATIQUE CLASSIQUE</h3>
            <div style="padding: 3% 20%; overflow: hidden">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum hic in qui repellat similique! Aut delectus incidunt ipsam laborum nesciunt, nulla possimus. Aliquid deserunt, et nam possimus velit veritatis!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, atque debitis delectus dicta dolore dolores eum eveniet, exercitationem facere impedit neque quae quas recusandae repellendus suscipit, tempore tenetur vel voluptates?
            </div>
        </div>
        <div style="display: flex;">
            <div class="border classic-diaporama-container" style="background-color: #080d28 ;width: 45%; height: 80vh; justify-content: center; align-items: center; border-radius: 20px">
                <div class="display-5 mx-1 my-1" style="">
                    <i class="fa fa-store-alt text-warning mx-1"></i> <span class="text-warning">Nos Technologies</span>
                </div>
                <div class="border" id="carossel">
                    <div class="images">
                        <img src="{{asset('/images/classic_part_imgs/office.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/excel2.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/word2.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/publisher.png')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/pack-office1.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/word2.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/excel2.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/powerpoint.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/pack-office2.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/word3.png')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/excel3.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/powerpoint3.jpg')}}" alt="word" width="300px" height="300px">
                        <img src="{{asset('/images/classic_part_imgs/pack-office2.jpg')}}" alt="word" width="300px" height="100px">
                        <img src="{{asset('/images/classic_part_imgs/pack-office1.jpg')}}" alt="word" width="300px" height="300px">
                    </div>
                </div>
            </div>
            <div class="detail-classeic-container">
                <div class="detail-item">
                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>word:: </a>
                    <span>Apprendre à manipuler un logiciel pour gerer la mise en forma des documents</span>
                </div>
                <div class="detail-item-separator">
                    <div></div>
                </div>
                <div class="detail-item">
                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>excel:: </a>
                    <span>Apprendre à manipuler un logiciel de calcule automatique</span>
                </div>
                <div class="detail-item-separator">
                    <div></div>
                </div>
                <div class="detail-item">
                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>power point:: </a>
                    <span>Apprendre à manipuler un logiciel pour gerer des présentations assistées par ordinateur</span>
                </div>
                <div class="detail-item-separator">
                    <div></div>
                </div>
                <div class="detail-item">
                    <a href="#" class="detail-item-item"><i class="fa fa-check-double text-warning mx-1"></i>publisher:: </a>
                    <span>Apprendre à manipuler un logiciel pour créer des designs et symbole publicitaires</span>
                </div>
            </div>
        </div>

        <div class="modern-computeur-science">
            <h3 class="text-center my-4 sub-title-foramtion">INFORMATIQUE MODERNE</h3>
            <div class="radio-btn-container">
                <div class="radio-btn-sub-container">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="toolbar-position-top" name="toolbar-position" type="radio"
                               value="top" checked>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="toolbar-position-top" name="toolbar-position" type="radio"
                               value="top">
                    </div>
                </div>

            </div>
            <div class="sub-modern-part-container border-top">
                <div class="sub-modern-part-1">
                    <div class="row text-center">
                        <h3 class="sub-modern-part-title">
                            réseau informatique
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
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
                                    <div class="detail-link-container">
                                        <a href="" class="detail-link-1 btn btn-primary">Détail <i class="fa fa-circle-chevron-right mx-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-modern-part-2"></div>
            </div>
        </div>
    </div>
    <div class="text-black fw-bolder" style="padding: 3% 20%; overflow: hidden">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Accusamus consectetur cum cumque dolores esse, explicabo, facere fugit illo
        labore modi, molestiae nesciunt nihil numquam. Aut cumque, eligendi expedita necessitatibus
        nihil placeat velit. Ad, adipisci aliquid asperiores assumenda consectetur consequatur culpa
        dignissimos doloremque dolores ducimus eligendi, est expedita fugit illo itaque laboriosam laudantium
        maxime molestias possimus quaerat quisquam quos, repellendus tenetur ullam voluptas voluptate voluptates!
        Aliquid amet, architecto asperiores debitis delectus deleniti dolor dolores, eaque excepturi impedit itaque laudantium maiores
        mollitia nam neque nisi nobis odio officiis omnis perferendis placeat provident quidem quisquam quod
        recusandae sequi soluta ullam vel vero, voluptate. Accusantium architecto earum fuga molestiae mollitia
        necessitatibus perspiciatis placeat vel voluptatibus. Adipisci, asperiores consequatur dicta dolorum, error
        eveniet facilis fugiat id laborum maxime minus molestiae molestias necessitatibus obcaecati optio perspiciatis
        quae qui quibusdam quod reiciendis repudiandae sed sint soluta sunt ullam ut veritatis! Accusamus aliquid
        doloremque ducimus exercitationem impedit minus repellat, repudiandae rerum sunt. Accusamus architecto
        consectetur, culpa cumque dolores dolorum eaque eligendi harum incidunt iusto laboriosam magnam minus
        molestias necessitatibus nisi numquam pariatur perferendis provident quam quibusdam ratione repellendus
        saepe sapiente sit, sunt unde veniam! Ab aliquam assumenda at consectetur corporis eaque enim ex exercitationem
        illo iure libero quam quas reiciendis, repellendus reprehenderit rerum sapiente, sed sit temporibus voluptatum!
        Ab, cupiditate delectus et explicabo ipsum laboriosam non repudiandae similique sit temporibus! A accusamus
        aspernatur aut consequuntur dolor, dolore, doloribus et explicabo, fuga fugiat labore laborum necessitatibus nemo nostrum numquam quasi repellat saepe sapiente tenetur vero. Aperiam aut blanditiis corporis, cumque distinctio dolor excepturi facilis id illum ipsum iste iusto laborum nam neque nesciunt obcaecati perferendis placeat porro provident recusandae repellat, reprehenderit sit soluta sunt suscipit veritatis voluptate! Accusantium dolorum ea eveniet illum nam quia. Animi, asperiores assumenda consequatur culpa eaque fugit id inventore ipsa ipsum itaque maxime modi neque officia perferendis ratione repellat unde voluptates! Accusamus aliquam aperiam blanditiis commodi cum cupiditate deserunt, dolorem doloremque eaque earum explicabo fugit, iste iure labore neque nesciunt nostrum optio quae quasi quibusdam, sed suscipit tempora unde voluptatem voluptatum. Ab ad aliquam animi consequuntur corporis eius facilis, incidunt ipsa natus necessitatibus nemo nisi omnis perferendis placeat quaerat quibusdam, quod veniam voluptatum! Accusantium dolore, est eveniet expedita impedit magni molestias natus necessitatibus nemo nulla omnis, quo sint soluta tenetur velit. A aliquid amet at autem beatae, eligendi est maiores minima odit perspiciatis quae quia repellendus sit suscipit tempore, tenetur vero? Adipisci aliquid aspernatur atque autem corporis doloremque ea esse et exercitationem facere, harum, illo illum ipsa laborum molestiae molestias natus neque odit perspiciatis quaerat quas qui sequi similique sunt suscipit ullam unde, vero. Alias aperiam blanditiis cum debitis deleniti distinctio dolorum ipsam iure maiores nam, non optio quam quasi sit veniam? Ab accusantium atque commodi consectetur corporis cum deleniti esse fugit, hic iste mollitia natus nesciunt nulla omnis perspiciatis placeat possimus rem repudiandae soluta sunt tempore totam ullam ut velit veniam! Laboriosam libero perferendis quidem repudiandae sequi voluptates! A alias at aut consequuntur corporis culpa doloribus est explicabo facilis harum id inventore ipsum iure iusto laborum libero maiores minus molestiae nesciunt nostrum porro qui quia quidem quisquam quod rem reprehenderit saepe sequi similique sit suscipit tempora totam ullam ut, veniam voluptate voluptates? Ab eos perferendis quae quas quasi vero. Hic illo illum neque odio porro quae similique soluta. Alias amet asperiores atque consequuntur delectus dolor dolore dolorem eligendi eum fuga fugiat hic in inventore ipsa iste iusto laboriosam minus nam necessitatibus, nisi nulla odio odit perferendis provident quaerat quis quos repellat reprehenderit saepe sint tempore vel velit voluptate? Ab accusantium cupiditate eligendi enim excepturi fuga fugiat illo magni modi nam non nostrum, repellat, sunt! Architecto consequuntur corporis cum delectus dolorem ipsum itaque neque praesentium, quae quas quia quod reprehenderit ut veniam vero. Ab dolor ex expedita illo illum laudantium nesciunt nostrum omnis quasi vel? Adipisci aliquam, debitis earum est, ipsa iste iusto non obcaecati sint sunt temporibus voluptatem. Accusamus cum dolorem eum eveniet inventore modi, neque omnis ratione saepe sequi ullam unde veritatis. Consectetur laborum perferendis quaerat repellendus. Ab assumenda autem consequuntur, debitis ea ipsa laborum nihil, officia perferendis praesentium quas qui quidem, rerum totam veritatis. Explicabo impedit ipsum nemo nisi, praesentium totam voluptatibus. Aperiam blanditiis eveniet, illum odit quibusdam quod similique suscipit tempore unde voluptas? At aut dolores, doloribus fugiat itaque mollitia quasi voluptatem. Accusamus at blanditiis consequatur culpa cupiditate dignissimos distinctio dolorem dolorum eaque eius enim exercitationem harum hic inventore ipsum iusto libero maxime modi, nam natus nisi numquam odit optio, quae quaerat quas ratione repellat, repellendus sapiente soluta tempora tenetur voluptas voluptatum. Adipisci aliquid aperiam architecto assumenda aut beatae commodi, consequatur consequuntur deserunt dignissimos dolore enim eos esse eum explicabo facilis illo modi, nam nihil perferendis possimus quaerat ratione reprehenderit repudiandae sed similique sint veniam. Autem ea error, est magni molestias quia ratione sint voluptatibus. Commodi cumque doloremque ipsam iste, iusto necessitatibus nostrum numquam porro quaerat repudiandae sapiente ut. Ab deleniti, distinctio iure quasi repellendus sapiente sed! A ab ad adipisci at, blanditiis corporis culpa cupiditate debitis deleniti dolor dolore doloribus eius et eum expedita facilis fugiat in ipsum iste molestias mollitia nostrum obcaecati possimus praesentium quaerat qui quibusdam quis quod ratione repellat reprehenderit repudiandae sed suscipit unde ut veritatis vitae. Ad atque consequuntur eaque eligendi error eum eveniet facere fugiat harum hic id inventore itaque laborum maiores, minus natus, nemo placeat praesentium quas quasi quia quidem quis quo, sed tempore temporibus ullam vero? Ab autem cum cupiditate dolor dolores dolorum, enim eos eum eveniet exercitationem facere iste nobis officia perferendis possimus provident ut. Aliquid beatae consequatur dignissimos enim esse hic numquam quidem reprehenderit tempore temporibus! A accusamus, alias assumenda autem blanditiis cumque cupiditate distinctio dolor doloremque dolores eaque enim est exercitationem fuga fugiat harum hic incidunt minima neque nihil nisi perspiciatis placeat quaerat quas quasi sequi tempora tempore vel, voluptate voluptates! Consectetur culpa ea enim quae sapiente. Alias aspernatur aut beatae consequuntur, harum iusto labore non placeat porro, provident quam quibusdam quos ratione repudiandae rerum sit sunt! Accusamus deserunt facere facilis magni omnis praesentium rerum veniam voluptates! Aperiam nobis, suscipit?
    </div>



@endsection

@section('js-content')



@endsection
