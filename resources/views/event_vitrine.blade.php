@extends('layouts.app3')
@section('content')

<main class="main-root">
        <div class="filters-content">
            <div class="close-wind" data-cursor="close"></div>
            <div class="filtering">
                <button type="button" data-filter='*' class="active">
                    <span class="text" data-hover="All">All</span>
                    <span class="counter">(5)</span>
                </button>
                <button type="button" data-filter='.architecture'>
                    <span class="text">architecture</span>
                    <span class="counter">(1)</span>
                </button>
                <button type="button" data-filter='.Product'>
                    <span class="text" data-hover="Design">Product</span>
                    <span class="counter">(1)</span>
                </button>

                <button type="button" data-filter='.Digital'>
                    <span class="text">Digital Art</span>
                    <span class="counter">(1)</span>
                </button>

                <button type="button" data-filter='.Photography'>
                    <span class="text">Photography</span>
                    <span class="counter">(4)</span>
                </button>

                <button type="button" data-filter='.Video'>
                    <span class="text">video</span>
                    <span class="counter">(1)</span>
                </button>
            </div>
        </div>
        <div id="dsn-scrollbar">
         
            <div class="wrapper">
                <section class="work-inner work-inner-space work-4-col section-margin p-relative zoom-gallery">
                    
                    <div class="container container-custom">
                        <div class="projects-list">
                            @foreach($event as $row)
                            <div class="work-item-box p-relative Photography  architecture">
                                <div class="work-item p-relative over-hidden">
                                    <a href="img/{{ $row->photo}}">
                                        <div class="img-next-box " data-overlay="6" data-dsn-grid="move-up">
                                            <img class="cover-bg-img has-top-bottom" data-dsn-y="20%"
                                                src="img/{{ $row->photo}}" alt="">
                                        </div>
                                    </a>

                                    <div class="item-border p-absolute"></div>
                                    <div class="item-info p-absolute">
                                        <a href="{{ url('/reservation_vitrine',$row->date)}}" class="effect-ajax" data-dsn-ajax="work">

                                            <h5 class="cat">{{$row->date }}</h5>
                                            <h4>{{$row->nom}}</h4>
                                            <span><span>Réservez maintenant</span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </section>

                
            </div>

           
        </div>
    </main>
@endsection