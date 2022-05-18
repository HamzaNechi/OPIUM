@extends('layouts.app3')
@section('content')  

<div class="wrapper root-contact" style="margin-top: 12%">
                <div class="container section-margin">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-box">
                                <div class="section-title text-center">
                                    <p class="d-inline-block">OPIUM</p>
                                    <h2>Réservation</h2>
                                </div>
                                <form id="reserv" class="form" action="{{ url('reservation') }}" name="f" method="post"
                                    data-toggle="validator">

                                    {{csrf_field()}}
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">
                                        <div class="row">
                                            <?php
                                                if($eventDate != NULL){
                                                    foreach($eventDate as $ev){
                                                    $date=$ev->date;
                                                    $id=$ev->id;
                                                    $nom=$ev->nom;
                                                    }
                                                }else{
                                                    $date=date('Y/m/m');
                                                    $id=0;
                                                    $nom="";
                                                }
                                            ?>

                                            <input type="hidden" name="id_event" id="id_event" value="{{ $id }}">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Date *</label>
                                                        <input id="date" type="date" name="dateevent" placeholder="jj/mm/aaaa" required="required" data-error="name is required." value="{{ $date }}">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Événement *</label>
                                                        <input id="event" type="text" name="event" placeholder="Événement" required="required" data-error="Valid email is required." value="{{ $nom }}" disabled>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>


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

                                           

                                            <div class="col-12">
                                                <div class="text-center">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <a href="javascript:{}" onclick="document.getElementById('reserv').submit(); return false;">
                                                        <button class="btn-form">
                                                            <span class="label">Réservez</span>
                                                            <span class="icon-c"></span>
                                                        </button></a>
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
            </div>

@endsection