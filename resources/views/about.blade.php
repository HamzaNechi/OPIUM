@extends('layouts.app3')
@section('content')
<section class="inner_page_banner_2 banner_color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>À propos</h2>
                            <p><a href="{{ url('/')}}">Accueil</a> <span>/</span> à propos</p>
                        </div>
                    </div>
                </div>
            </section>
</div><!--div de la page headerp -->
	<section class="info_sections">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info_img">
                            <img src="vitrine/images/home1/1.png" alt=""/>
                            <div class="yearsXP">
                                <h2><span data-counter="11" class="timer">11</span>h</h2>
                                <h3>Heure d'ouverture</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pdt90">
                        <h2 class="info_head">LOUNGE-RESTAURANT</h2>
                        <p class="p_lead">
                            Le disco vous accueille dans son cadre Chic et Cosy pour boire un verre avec élégance.
Pour une soirée unique, laissez vous séduire par une cuisine gourmande et raffinée ainsi qu’une large sélections de vins et cocktails.
                        </p>
                        <div class="dr_tab_01">
                            <ul class="nav nav-tabs" id="dr_tab_01" role="tablist">
                                <li class="nav-item">
                                    <a id="dr_t_01-tab" data-toggle="tab" href="#dr_t_01" role="tab" aria-controls="dr_t_01" aria-selected="false">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="active" id="dr_t_02-tab" data-toggle="tab" href="#dr_t_02" role="tab" aria-controls="dr_t_02" aria-selected="true">L'atmosphère</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content dr_bat_01_con">
                                <div class="tab-pane fade" id="dr_t_01" role="tabpanel" aria-labelledby="dr_t_01-tab">
                                    <p> 
                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                        It was popularised in the 1960s.When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </div>
                                <div class="tab-pane active show fade" id="dr_t_02" role="tabpanel" aria-labelledby="dr_t_02-tab">
                                    <p>
                                        Le disco est un établissement de loisirs musical et dansant privé, généralement nocturne et réservé aux personnes majeures.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="member_section_1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 noPadding">
                        <div class="team_slider owl-carousel">
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/1.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/2.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/3.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/4.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/1.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/2.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/3.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/4.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/1.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/2.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/3.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>
                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/4.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>

                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/5.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>

                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/6.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>

                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/7.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                </div>
                            </div>

                            <div class="team_01">
                                <img src="{{URL::asset('vitrine/images/team/8.jpg')}}" alt=""/>
                                <div class="t01_content">
                                    <h3><a href="{{url('/reservation_vitrine/NULL')}}">Réserver maintenant</a></h3>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection