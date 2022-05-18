@extends('layouts.app1')

@section('content')
<div class="row">
<div class="col-md-3"></div>
        
<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Modifier événement</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="{{ url('/event/'.$event->id)}}" method="post" enctype="multipart/form-data">
                                        {{method_field('PUT')}}
                                        {{ csrf_field()}}
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Photo</label>
                        <div class="col-sm-9">
                            <input type="file" name="photo" class="file-upload-default">
                            <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled value="{{ $event->photo }}" name="photo">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Choisir</button>
                            </span>
                            </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nom</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="{{$event->nom}}" name="nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" name="date" value="{{$event->date}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Heure</label>
                        <div class="col-sm-9">
                          <input type="time" class="form-control" name="heure" value="{{$event->heure}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="exampleTextarea1" rows="4" name="description">{{$event->description}}</textarea>
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-primary mr-2">Modifier</button>
                      <button type="reset" class="btn btn-light">Annuler</button>
                    </form>
                  </div>
                </div>
              </div>


              </div>
@endsection