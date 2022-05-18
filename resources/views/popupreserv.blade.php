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

<!--classic-menu-->

<body class="dsn-effect-scroll dsn-cursor-effect dsn-ajax">

    

   

    <main class="main-root">
        <div id="dsn-scrollbar">
            <!--==================== Header ====================-->
            <header data-dsn-header="parallax">
                
            </header>
            <!--==================== End Header ====================-->

            <div class="wrapper">

                <!--==================== About ====================-->
                <section class="about-me dsn-under-header p-relative mb-section">
                    <div class="content p-relative">
                        <div class="container">
                            
                        </div>
                    </div>
                    <div class="p-absolute">
                        <div class="after-bg p-absolute w-100 h-100 cover-bg" data-image-src="assets/img/pattern.png">
                        </div>
                    </div>
                </section>
                <!--==================== End About ====================-->

                <!--==================== Service ====================-->
                <section class="service section-margin">
                    


                    <div class="container" style="margin-top: 12%;">
                        <div class="row">

                            <div class="col-sm-3 service-content dsn-up">
                                
                            </div>

                            <div class="col-sm-6 service-content dsn-up">
                                <div class="services-item d-flex p-relative background-section">
                                    <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                        data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                                    <div class="icon">
                                        <img src="{{URL::asset('vitrine/assets/img/services/layout.svg')}}" alt="">
                                    </div>

                                    <div class="content">
                                        <span class="theme-color">{{$ligne->code_réservation}}</span>
                                        <h4 class="title-block">OPIUM-{{$ligne->code_réservation}}</h4>
                                        <p>Merci, nous avons bien reçu votre réservation. Vous recevrez un SMS de confirmation contenant toutes les informations. Au plaisir de se rencontrer!</p><br>
                                        <div class="footer-block col-menu">
                                    

                                    <div class="footer-social p-relative">
                                        <ul>
                                            <li class="over-hidden">
                                                <a href="{{ url('/opium')}}" data-dsn="parallax"><b>Retour à la page d'accueil</b></a>
                                            </li>
                                            

                                        </ul>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 service-content dsn-up">
                                
                            </div>

                            

                            
                        </div>
                    </div>

                </section>
                

                

                
            </div>

            <footer class="footer-1 p-relative background-section">
               

                

                
            </footer>

        </div>

    </main>



    

    <!-- Optional JavaScript -->
    <script src="{{URL::asset('vitrine/assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL::asset('vitrine/assets/js/plugins.js')}}"></script>
    <script src="{{URL::asset('vitrine/assets/js/dsn-grid.js')}}"></script>
    <script src="{{URL::asset('vitrine/assets/js/custom.js')}}"></script>

</body>

</html>