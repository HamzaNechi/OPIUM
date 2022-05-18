@extends('layouts.app1')

@section('content')
<div class="row">
<div class="col-md-2"></div>
        
<div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-description"></p>
                    <form class="forms-sample" action="{{ url('/reservationm/'.$booking->id)}}" method="post" enctype="multipart/form-data">
                            {{method_field('PUT')}}
                            {{ csrf_field()}} 
                     
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nom et Prénom</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" placeholder="Votre Nom et prénom" value="{{ $booking->nom_prenom}}" name="nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Téléphone</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" placeholder="Votre téléphone" value="{{$booking->tel}}" name="tel">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" name="dateevent" placeholder="Date" value="{{$booking->dateevent}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Heure</label>
                        <div class="col-sm-9">
                            <input type="time" name="heure" class="form-control" placeholder="Heure" value="{{$booking->heure}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nombre Garçon</label>
                        <div class="col-sm-9">
                            <input type="text" name="nb_garçon" class="form-control" placeholder="Heure" value="{{$booking->nb_garçon}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nombre fille</label>
                        <div class="col-sm-9">
                            <input type="text" name="nb_fille" class="form-control" placeholder="Heure" value="{{$booking->nb_fille}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Code</label>
                        <div class="col-sm-9">
                        <input type="text" name="code_réservation" class="form-control" value="{{$booking->code_réservation }}">
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-primary mr-2">Ajouter</button>
                      <button type="reset" class="btn btn-light">Annuler</button>
                    </form>
                  </div>
                </div>
              </div>


              </div>
@endsection