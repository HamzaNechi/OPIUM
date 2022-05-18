@extends('layouts.app2')
@section('content')

<!--header-->
<main class="main-root">
    <div id="dsn-scrollbar">
        <div class="main-slider demo-2 p-relative w-100 h-100-v over-hidden " data-dsn-header="parallax" id="acceuil">
            <div class="bg-container" id="dsn-hero-parallax-img">
                <div class="slide-inner h-100">
                    <div class="swiper-wrapper">
                        @foreach($event as $row)
                        <div class="slide-item swiper-slide">
                            <div class="image-bg cover-bg w-100 h-100 " data-image-src='{{URL::asset("img/$row->photo")}}' data-overlay="2">
                            </div>
                            <div class="slide-content p-absolute h-100 w-100 ">
                                <div class="row align-items-center h-100">
                                    <div class="content p-relative w-100">
                                        <div class="metas d-inline-block">
                                            <span id="EventDate">{{ $row->date }}</span>
                                        </div>
                                        <h1 class="title user-no-selection">
                                            <a href="project1.html" class="effect-ajax"
                                               data-dsn-ajax="slider" id="NomEvent">{{ $row->nom }}</a>
                                        </h1>
                                        

                                        <div class="dsn-button-link mt-30 user-no-selection">
                                            <a href="#ReservationDirect" data-id="{{ $row->id }}" data-nom="{{ $row->nom }}" data-date="{{ $row->date }}" id="BookDirectly" class="link-custom effect-ajax d-flex a-item-center p-relative"
                                               data-dsn-ajax="slider">
                                                <span class="link-text">Réservez maintenant</span>
                                                <span class="link-circle p-absolute">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="description p-absolute d-flex a-item-center background-section">
                                    <p>OPIUM vous offre une atmosphère chaleureuse et une ambiance détente des plus prisées…</p>
                                </div>
                            </div>

                        </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>


            <div class="box-next p-absolute nav-slider overflow-hidden header-no-scale-hero">
                <div class="swiper-wrapper" role="navigation"></div>
            </div>


            <div class="dsn-controls p-absolute d-flex a-item-center">
                <div class="dsn-numbers d-block text-center">
                    <span>01</span>
                </div>

                <div class="dsn-progress p-relative">
                    <div class="dsn-progress-indicator p-absolute w-100"></div>
                </div>

                <div class="dsn-numbers d-block text-center">
                    <span class="full-number fw-blod">05</span>
                </div>
            </div>

            <div class="social-network-box text-center w-100-v">
                <div class="social-network">
                    <ul>
                        <li><a class="link-hover" href="#" data-hover-text="facebook">facebook</a></li>
                        <li><a class="link-hover" href="#" data-hover-text="instagram">instagram</a></li>
                    </ul>
                </div>
            </div>

            <div class="dsn-slider-content p-absolute h-100 w-100">
                <div class="content-slider margin-lr-100 p-relative w-100 h-100"></div>
            </div>


        </div>

        <div class="wrapper">
            <section class="intro-about  section-margin have-dsn-animate-number" data-dsn-animate="section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="intro-about-info">
                                <div class="section-title-2">
                                    <h2>ON PARLE DE NOUS</h2>
                                    <p>opium</p>
                                </div>

                                <div class="intro-about-info-bottom">
                                    <h2 class="title-h2 dsn-up">EMBARQUER POUR UN MOMENT D’EXCEPTION</h2>

                                    <p class="dsn-text">L’opium vous accueille dans son cadre Chic et Cosy pour boire un verre avec élégance.
Pour une soirée unique, laissez vous séduire par une cuisine gourmande et raffinée ainsi qu’une large sélections de vins et cocktails.
                                    </p>

                                    <div class="accordion mt-30">
                                        <div class="accordion__wrapper">
                                            <div class="accordion__item dsn-up">
                                                <div
                                                        class="accordion__question expanded d-flex align-items-center p-relative">
                                                        <span class="icon">
                                                            <img src="{{URL::asset('vitrine/assets/img/vision.svg')}}" alt="">
                                                        </span>
                                                    <h4 class="sm-title-block"> Profitez d'un moment unique</h4>
                                                </div>
                                                <div class="accordion__answer active">
                                                    <p>Prendre sagement un verre entre amis, dîner en amoureux ou faire la fête toute la nuit, dans notre restaurant , tout est permis ! Dans notre restaurant , le stress et la mauvaise humeur sont bannis ! Chez nous, un seul mot d’ordre : se détendre et profiter de la vie ! 
</p>
                                                </div>
                                            </div>
                                            <div class="accordion__item dsn-up">
                                                <div
                                                        class="accordion__question d-flex align-items-center p-relative">
                                                        <span class="icon">
                                                            <img src="{{URL::asset('vitrine/assets/img/target.svg')}}" alt="">
                                                        </span>
                                                    <h4 class="sm-title-block"> Une adresse exeptionnelle </h4>
                                                </div>
                                                <div class="accordion__answer">
                                                    <p>Situé dans le coeur historique de Hammamet , vous accueille dans une ambiance cosy et décontractée pour siroter l’un de ses 40 cocktails qui ont fait la renommée de notre bar ou déguster un de nos plats. </p>
                                                </div>
                                            </div>

                                            <div class="accordion__item dsn-up">
                                                <div
                                                        class="accordion__question d-flex align-items-center p-relative">
                                                        <span class="icon">
                                                            <img src="{{URL::asset('vitrine/assets/img/mission.svg')}}" alt="">
                                                        </span>
                                                    <h4 class="sm-title-block"> Des moments privilégiés</h4>
                                                </div>
                                                <div class="accordion__answer">
                                                    <p>Sur réservation, notre bar restaurant organise vos soirées d’anniversaire, vos enterrements de vie de célibataire et vos soirées de comité d'entreprise.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="box-img p-relative  over-hidden">
                                <div class="bg-section p-absolute w-100 h-100">
                                    <div class="h-100" data-dsn-grid="move-up">
                                        <img class="cover-bg-img has-top-bottom" src="{{URL::asset('vitrine/assets/img/about-intro.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                                <img src="{{URL::asset('vitrine/assets/img/about-intro.jpg')}}" alt="">

                                <div class="exper background-theme p-absolute">
                                    <div class="numb-ex">
                                        <span class="word-text has-animate-number">5</span>
                                    </div>

                                    <h4 class="sm-title-block dsn-up">ANS <br> D'EXPÉRIENCE  <br>  DIGITAL </h4>
                                    <div class="shap-section">
                                        <img src="assets/img/arr.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            
            

            <section class="service section-margin" id="menu">
                    <div class="container section-title-2">
                        <h2>Menus</h2>
                        <p>opium</p>
                    </div>


                    <div class="container">
                        <div class="row">

                            <div class="col-sm-6 service-content dsn-up">
                                <a href="{{ url('/eat')}}">
                                <div class="services-item d-flex p-relative background-section">
                                    <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                        data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                                    <div class="icon">
                                        <img src="{{URL::asset('vitrine/assets/img/cocktail3.png')}}" alt="">
                                    </div>

                                    <div class="content">
                                        <span class="theme-color">01</span>
                                        <h4 class="title-block ">EAT</h4>
                                        <p>Opium vous propose une cuisine soignée mais généreuse, composée de produits frais et de saison.</p>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-sm-6 service-content dsn-up">
                                <a href="{{ url('/drink')}}">
                                <div class="services-item d-flex p-relative background-section">
                                    <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                        data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                                    <div class="icon">
                                          <img src="{{URL::asset('vitrine/assets/img/cocktail2.png')}}" alt="">
                                    </div>

                                    <div class="content">
                                        <span class="theme-color">02</span>
                                        <h4 class="title-block">DRINK</h4>
                                        <p>Toute l'équipe partage également sa passion pour le vin à travers une carte complète et évolutive au gré des rencontres et des coups de coeur..</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>

            </section>
        
            <div class="p-relative video-section section-margin">
                    <div class="bg-section p-absolute w-100 h-100 over-hidden">
                        <div class="h-100 before-z-index" data-dsn-grid="move-up" data-overlay="5">
                            <img class="cover-bg-img has-top-bottom" src="{{URL::asset('vitrine/assets/img/agency.jpg')}}" alt="">
                        </div>
                    </div>

                    <a href="https://vimeo.com/175353205" class="vid c-hidden v-middle dsn-z-index-2">
                        <div class="play-btn image-zoom" data-dsn="parallax">
                            PLAY
                        </div>
                    </a>
            </div>
            <section class="our-work pt-section background-section section-margin dsn-arrow" data-dsn-col="3" id="soiré">
                <div class="container section-title-2">
                    <h2>SOIRÉES</h2>
                    <p>opium</p>
                </div>

                <div class="container-fluid">
                    <div class="work-container over-hidden">
                        <div class="slick-slider">
                            @foreach($event as $row)
                            <div class="work-item slick-slide p-relative over-hidden">
                                <div class="img-next-box p-absolute w-100 h-100" data-overlay="6">
                                    <img class="cover-bg-img" src='{{URL::asset("img/$row->photo")}}' alt="">
                                </div>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="#ReservationDirect" data-id="{{ $row->id }}" data-nom="{{ $row->nom }}" data-date="{{ $row->date }}" id="BookDirectly" class="effect-ajax" data-dsn-ajax="work">

                                        <h5 class="cat">{{ $row->date }}</h5>
                                        <h4>{{ $row->nom }}</h4>
                                        <p>
                                            {{ $row->description }}.
                                        </p>
                                        <span><span>Réservez</span></span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>

                    </div>
                </div>
            </section>

            

        </div>

        <section class="next-up next-project p-relative section-padding" id="ReservationDirect">
            <div class="bg-section p-absolute w-100 h-100 over-hidden">
                <div class="h-100 before-z-index" data-dsn-grid="move-up" data-overlay="5">
                    <img class="cover-bg-img has-top-bottom" src="{{URL::asset('vitrine/assets/img/bg-2.jpg')}}" alt="">
                </div>
            </div>
            <div class="container-fluid p-relative dsn-z-index-2">
                <div class="row margin-lr-100">
                    <div class="col-lg-6 col-md-7 offset-lg-6 offset-md-5">
                        <div class="next-up-inner p-relative background-section">
                            <h5 class="title"> PRENEZ  <br> VOS<br>   TABLES  !</h5>
                            <button class="btn background-theme p-relative effect-ajax"
                               data-dsn="parallax" id="booking"><span>Réservez votre table</span></button>
                               <br><br><br>
                               <form action="{{ url('reservation') }}" name="f" method="post">
                                {{csrf_field()}}
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">

                                        <div class="row" id="Input1" style="display: none;">
                                            

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Date *</label>
                                                        <input id="date" type="date" name="dateevent" placeholder="jj/mm/aaaa" required="required" data-error="name is required." value="">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Événement *</label>
                                                        <input id="event" type="text" name="event" placeholder="Événement" required="required" data-error="Valid email is required." value="" disabled>
                                                        
                                                    </div>

                                                    <input type="hidden" name="id_event" id="id_event" value="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row" id="Input2" style="display: none;">
                                        
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Nombre de garçon *</label>
                                                        <input id="form_name" type="text" name="nb_garçon"
                                                            placeholder="Nombre de garçon" required="required"
                                                            data-error="name is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Nombre de fille *</label>
                                                        <input id="form_email" type="text" name="nb_fille"
                                                            placeholder="Nombre de fille" required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        


                                        <div class="row" id="Input3" style="display: none;">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Nom et prénom *</label>
                                                        <input id="form_email" type="text" name="nom_prenom"
                                                            placeholder="Nom et prénom" required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Téléphone *</label>
                                                        <input id="form_email" type="text" name="tel"
                                                            placeholder="Ex :xxxxxxxx" required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        
                                        
                                            
                                        </div>

                                        <div class="row" id="suivant" style="display: none;">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <button class="btn-form">
                                                            <span class="label">Suivant</span>
                                                            <span class="icon-c"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row" id="NewSuivant" style="display: none;">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <button class="btn-form">
                                                            <span class="label" id="span">Suivant</span>
                                                            <span class="icon-c"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--footer-->
        

<!-- Optional JavaScript -->
<!--Script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<script>
$(document).on("click", "#booking", function () {
    $("#booking").hide();
    $("#Input1").show();
    $("#suivant").show();
});

$(document).on("click", "#suivant", function () {
    $("#Input2").show();
    $("#suivant").hide();
    $('#NewSuivant').show();
});

$(document).on("click", "#NewSuivant", function () {
    $("#Input3").show();
    $("#span").html("Confirmer");
});

$(document).on("click" ,"#BookDirectly" , function(){
    var id = $(this).data('id');
    var nom = $(this).data('nom');
    var date = $(this).data('date');
    $("#booking").hide();
    $("#Input1").show();
    $("#Input2").show();
    $('#NewSuivant').show();
    $("#id_event").val(id);
    $("#date").val(date);
    $("#event").val(nom);
});
</script>
@endsection