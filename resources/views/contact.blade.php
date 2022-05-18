@extends('layouts.app3')
@section('content')
<section class="inner_page_banner_2 banner_color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Contact</h2>
                            <p><a href="{{ url('/')}}">Accueil</a> <span>/</span> Contact</p>
                        </div>
                    </div>
                </div>
            </section>
</div><!--div de la page headerp -->

        

        <section class="contact_section">
        	
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-4">
                        <div class="drox_map grayscale" id="map">
                            

                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyClMGRHf1DrsAXw8HyfpybXDdiJ0YaNLNM
    &q=Space+Needle,Seattle+WA"  scrolling="no"></iframe>
                        </div>
                        <div >
                        	
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-8">
                        
                        <div class="contact_form mt_70">
                            <form action="{{ url('/EnvoyerMessage')}}" method="post" id="contact_form">
                            	{{ csrf_field() }}
                                <input type="text" name="nom" placeholder="Votre nom et prénom" class="required"/>
                                <input type="email" name="email" placeholder="Votre Email" class="required"/>
                                
                                
                                <textarea name="msg" class="required" placeholder="Votre message ..*"></textarea>
                                <a href="javascript:{}" onclick="document.getElementById('contact_form').submit(); return false;">
                                <input type="submit" value="Envoyer"></a>
                                <img src="vitrine/images/ajax.gif" alt="" class="ast_loader"/>
                                <div class="ast_con_message"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact_box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="address_box text-center">
                            <h5>Adresse</h5>
                            <p>
                                8050 ,Tunisie,Nabeul,Hammamet<br>
                                Rue abu dhabi
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="address_box text-center">
                            <h5>Téléphone</h5>
                            <p>
                                +(216)55 478 236 - Mobile<br>
                                +(216)70 521 326 - Fixe
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="address_box text-center">
                            <h5>Email</h5>
                            <p>
                                Disco@contact.tn<br>
                                Info@disco.com 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        		<style>
#map{
	height:100%;
	width:100%;
}
</style>

<div >
</div>
@endsection