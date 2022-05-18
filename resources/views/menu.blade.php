@extends('layouts.app3')
@section('content')
<!--
<div class="wrapper">
                <div class="container">
                    <div class="news-content mt-section">
                        

                        <div class="comments-post m-section">
                            <div class="comments-area section-margin">
                                <div class="comments-title">
                                    <h4 class="title-block ">EAT</h4>
                                </div>

                                <ol class="comment-list">
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="" src="{{URL::asset('vitrine/assets/img/avatar/2.jpg')}}">
                                            </div>
                                            <div class="comment-text">
                                                <div class="comment-date">24 TND</div>
                                                <div class="comment-info">
                                                    <h6 class="comment-name">
                                                        Grillade Mixte </h6>
                                                </div>
                                                <div class="text-holder">
                                                    <p>Ailerons de poulet,Mini saucisses de toulouse,Mini chorizo a griller,Tranches de lard (frais ou fumé) une tète d ail,Une tomate, Huile d olive,Paprika,Cumin en poudre,Sel,Poivre</p>
                                                </div>
                                               
                                            </div>
                                        </div>

                                        
                                    </li>



                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="" src="{{URL::asset('vitrine/assets/img/avatar/2.jpg')}}">
                                            </div>
                                            <div class="comment-text">
                                                <div class="comment-date">24 TND</div>
                                                <div class="comment-info">
                                                    <h6 class="comment-name">
                                                        Cote à l'os </h6>
                                                </div>
                                                <div class="text-holder">
                                                    <p>1 côte à l'os de 900g,50g d'huile d'olive, 50g de beurre , gousse d'ail ,branche de thym,Sel et poivre du moulin.</p>
                                                </div>
                                               
                                            </div>
                                        </div>

                                        
                                    </li>


                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="" src="{{URL::asset('vitrine/assets/img/avatar/2.jpg')}}">
                                            </div>
                                            <div class="comment-text">
                                                <div class="comment-date">22 TND</div>
                                                <div class="comment-info">
                                                    <h6 class="comment-name">
                                                        Spaghettis aux fruits de mer</h6>
                                                </div>
                                                <div class="text-holder">
                                                    <p>spaghettis , soupe de concentré de tomate,poulpes,crevettes,moules,gousse d'ail,tasse d'huile,soupe d'harissa.</p>
                                                </div>
                                               
                                            </div>
                                        </div>

                                        
                                    </li>


                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="" src="{{URL::asset('vitrine/assets/img/avatar/2.jpg')}}">
                                            </div>
                                            <div class="comment-text">
                                                <div class="comment-date">18 TND</div>
                                                <div class="comment-info">
                                                    <h6 class="comment-name">
                                                        Chevrette sauté</h6>
                                                </div>
                                                <div class="text-holder">
                                                    <p>feuille,basilic,sel,poivre,soupe. cognac,cuillère à café paprika,soupe ,huile d'olive,gousses ,ail,crevette rose décortiquées..</p>
                                                </div>
                                               
                                            </div>
                                        </div>

                                        
                                    </li>



                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="" src="{{URL::asset('vitrine/assets/img/avatar/2.jpg')}}">
                                            </div>
                                            <div class="comment-text">
                                                <div class="comment-date">18 TND</div>
                                                <div class="comment-info">
                                                    <h6 class="comment-name">
                                                        Calamar dorée</h6>
                                                </div>
                                                <div class="text-holder">
                                                    <p>anneaux de calamars,oeufs,farine,lait,levure chimique,Sel et poivre,huile de friture.</p>
                                                </div>
                                               
                                            </div>
                                        </div>

                                        
                                    </li>



                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="" src="{{URL::asset('vitrine/assets/img/avatar/2.jpg')}}">
                                            </div>
                                            <div class="comment-text">
                                                <div class="comment-date">18 TND</div>
                                                <div class="comment-info">
                                                    <h6 class="comment-name">
                                                        Pizza neptune</h6>
                                                </div>
                                                <div class="text-holder">
                                                    <p>Pâte à Pizza Fine et Rectangulaire HERTA,soupe de crème fraîche bombée,de thon,câpres,mozzarella,tomates cerises,oignon  rouge,soupe concentré de tomates.</p>
                                                </div>
                                               
                                            </div>
                                        </div>

                                        
                                    </li>



                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="" src="{{URL::asset('vitrine/assets/img/avatar/2.jpg')}}">
                                            </div>
                                            <div class="comment-text">
                                                <div class="comment-date">18 TND</div>
                                                <div class="comment-info">
                                                    <h6 class="comment-name">
                                                        Plats fruits</h6>
                                                </div>
                                                <div class="text-holder">
                                                    <p>Arrangement, Attachant Voie Accès, Banane, Blanc, Citrus, Clair, Coupure, Doux, Encas.</p>
                                                </div>
                                               
                                            </div>
                                        </div>

                                        
                                    </li>




                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="" src="{{URL::asset('vitrine/assets/img/avatar/2.jpg')}}">
                                            </div>
                                            <div class="comment-text">
                                                <div class="comment-date">22 TND</div>
                                                <div class="comment-info">
                                                    <h6 class="comment-name">
                                                        Plat fromage et charcuterie</h6>
                                                </div>
                                                <div class="text-holder">
                                                    <p>Refuge de Maire Louise,saucisson, charcuterie ,fromage & terroir,
                                                    Planche charcuterie & fromage , Kamika,Pizza épaisse charcuterie et fromages,Pain aux fromages et charcuterie </p>
                                                </div>
                                               
                                            </div>
                                        </div>

                                        
                                    </li>

                                    

                                </ol>
                            </div>

                            


                        </div>


                    </div>
                </div>

            </div> 
        -->

     <div class="wrapper">
                <!--==================== Our Work ====================-->
                <section class="work-inner work-masonry p-relative section-margin has-story-popup" data-dsn="rStories">
                    <div class="container">
                        <div class="filterings-t text-center">
                            <div class="filtering-wrap">
                                <div class="filtering">
                                    <div class="container section-title-2">
                        <h2>EAT</h2>
                        <p>opium</p>
                    </div>
                               
                                </div>
                            </div>
                        </div>

                        <div class="projects-list p-relative w-100 gallery-portfolio ">
                            <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-3.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-3.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Grillade Mixte</h4>
                                        <p class="r-s-date">24 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-31.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-31.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Cote à l'os</h4>
                                        <p class="r-s-date">24 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-32.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-32.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title"> Spaghettis aux fruits de mer</h4>
                                        <p class="r-s-date">22 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-33.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-33.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Chevrette sauté</h4>
                                        <p class="r-s-date">18 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-35.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-35.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Calamar dorée</h4>
                                        <p class="r-s-date">18 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-36.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-36.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Pizza neptune</h4>
                                        <p class="r-s-date">18 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-37.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-37.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Plats fruits </h4>
                                        <p class="r-s-date">18 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-38.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-38.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Plat fromage et charcuterie</h4>
                                        <p class="r-s-date">22 TND</p>
                                    </div>
                                </a>

                            </div>
                    

                        </div>
                    </div><br><br>
                         <div class="container">
                        <div class="filterings-t text-center">
                            <div class="filtering-wrap">
                                <div class="filtering">
                                    <div class="container section-title-2">
                        <h2>DRINK</h2>
                        <p>opium</p>
                    </div>
                               
                                </div>
                            </div>
                        </div>

                        <div class="projects-list p-relative w-100 gallery-portfolio ">
                            <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-41.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-41.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Seau Celtia</h4>
                                        <p class="r-s-date">35 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-42.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-42.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Seau Bekc's</h4>
                                        <p class="r-s-date">40 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-43.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-43.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title"> Magon / Muscat </h4>
                                        <p class="r-s-date">29 TND</p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-44.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-44.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Smirnoff</h4>
                                        <p class="r-s-date">1/2L  80TND / 1L 140TND </p>
                                    </div>
                                </a>

                            </div>
                                 <div class="story-item photography">
                                <a href="{{URL::asset('vitrine/assets/img/stories/storie-1-45.jpg')}}" >
                                    <img src="{{URL::asset('vitrine/assets/img/stories/storie-1-45.jpg')}}" alt=""
                                        class="img-responsive img-story-item cover-bg-img">

                                    <div class="rs-content">
                                        <h4 class="r-s-title">Red Label </h4>
                                        <p class="r-s-date">1/2L  100TND / 1L 180TND </p>
                                    </div>
                                </a>

                            </div>
                                
                              
                         
                    

                        </div>
                    </div>
                </section>
                <!--==================== End Our Work ====================-->
            </div>


@endsection