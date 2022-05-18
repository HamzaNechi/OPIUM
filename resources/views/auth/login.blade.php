<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="discrption" content="parallax one page"/>
    <meta name="keyword"
          content="agency, business, corporate, creative, freelancer, interior, joomla template, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple"/>

    <!--  Title -->
    <title>Opium - disco , lounge , open air</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{URL::asset('vitrine/assets/img/favicon.ico')}}" type="image/x-icon"/>
    <link rel="icon" href="{{URL::asset('vitrine/assets/img/favicon.ico')}}" type="image/x-icon"/>

    <!-- custom styles (optional) -->
    <link href="{{URL::asset('vitrine/assets/css/plugins.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('vitrine/assets/css/style.css')}}" rel="stylesheet"/>
</head>

<body class="dsn-effect-scroll dsn-cursor-effect dsn-ajax">

    <div class="preloader">
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>

        <h1 class="title v-middle">
            <span class="percent ">0</span>
            <span class="text-strok">OPIUM</span>
            <span class="text-fill">OPIUM</span>
        </h1>
    </div>

    
    
    <main class="main-root">
        <div id="dsn-scrollbar">

           <div class="contact-up p-relative" style="margin-top: 0px;">
                <div class="container">
                    <div class="">
                        <div class="c-wapp p-relative section-padding text-center">
                            <div class="section-bg p-absolute w-100 h-100"></div>
                            <a href="#" class="effect-ajax">
                                <span class="title hiring" data-dsn-content="Espace admin .">Espace admin</span>
                                <a href="{{ url('/opium')}}">
                                <span class="career theme-color">Je ne suis pas un administrateur</span></a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper root-contact">
                <div class="container" style="margin-top: 4%">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-box">
                                
                                <form id="contact-form" class="form"data-toggle="validator" action="{{ url('/login') }}" name="f" method="post">
                                    {{csrf_field()}}
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">
                                        <div class="row">
                                            <div class="col-lg-3">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Email *</label>
                                                        <input type="email" id="email" name="email" placeholder="Votre Email" required="required"
                                                            data-error="name is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Mot de passe *</label>
                                                        <input id="form_email" type="password" name="password" placeholder="Mot de passe" required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                            </div>
                                        </div>
                                            
                                        <div class="row">
                                            <div class="col-lg-3">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="text-center">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <br><br>
                                                        <a href="javascript:{}" onclick="document.getElementById('contact-form').submit(); return false;">
                                                        <button class="btn-form" type="submit">
                                                            <span class="label">Connexion</span>
                                                            <span class="icon-c"></span>
                                                        </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

    
        </div>
    </main>


    <div class="scroll-to-top">
        <img src="assets/img/scroll_top.svg" alt="">
        <div class="box-numper">
            <span>10%</span>
        </div>
    </div>

    <div class="cursor">

        <div class="cursor-helper">
            <span class="cursor-drag">Drag</span>
            <span class="cursor-view">View</span>
            <span class="cursor-open"><i class="fas fa-plus"></i></span>
            <span class="cursor-close">Close</span>
            <span class="cursor-play">play</span>
            <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>
            <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>
        </div>

    </div>

    <div class="day-night">
        <div class="night active" data-dsn-theme="dark">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <rect x="12.3" y="23.5" width="2.6" height="1"></rect>
                <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1"
                    height="2.6"></rect>
                <rect x="23.5" y="12.3" width="1" height="2.6"></rect>
                <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6"
                    height="1"></rect>
                <rect x="33.1" y="23.5" width="2.6" height="1"></rect>
                <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1"
                    height="2.6"></rect>
                <rect x="23.5" y="33.1" width="1" height="2.6"></rect>
                <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6"
                    height="1"></rect>
                <path
                    d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">
                </path>
            </svg>
        </div>
        <div class="moon" data-dsn-theme="night">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <path
                    d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">
                </path>
            </svg>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <script src="{{URL::asset('vitrine/assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL::asset('vitrine/assets/js/plugins.js')}}"></script>
    <script src="{{URL::asset('vitrine/assets/js/dsn-grid.js')}}"></script>
    <script src="{{URL::asset('vitrine/assets/js/custom.js')}}"></script>

</body>

</html>