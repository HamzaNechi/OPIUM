@extends('layouts.app1')
@section('content')



<!----------->
<div class="row">
  <div class="col-lg-4">
  </div>
  <div class="col-lg-4">
    
  </div>
  <div class="col-lg-4">
    @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>{!! session('flash_message_success') !!}</strong>
                      
                    </div>
                    @endif
      <form method="get" action="{{ url('/Rechercher/Evénnement') }}">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control form-control-sm" placeholder="Chercher un événnement" aria-label="Recipient's username" aria-describedby="basic-addon2" name="recherche">
            <div class="input-group-append">
              <button class="btn btn-sm btn-gradient-primary" type="button"><i class="mdi mdi-magnify"></i></button>
            </div>
          </div>
        </div>
      </form>
  </div>
</div>
<!----------->
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"></h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                          <tr>
                            
                            <th> Photo </th>
                            <th> Nom </th>
                            <th> Date </th>
                            <th> Heure </th>
                            <th> Description </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($event as $row)
                          
                          <tr>
                            <td>
                                <img src='{{URL::asset("img/$row->photo")}}'>
                            </td>
                            <td>
                                {{ $row->nom}}
                            </td>
                            <td>
                                {{ $row->date }}
                            </td>
                            <td>{{ $row->heure }}  </td>
                            <td>{{ $row->description }}</td>
                          <td>


                          <a href="{{ url('viewreservation',[$row->id, $row->date])}}">
                            <button type="button" class="btn btn-warning btn-rounded btn-icon" title="Voir réservation aujourd'hui"><i class="mdi mdi-eye"></i>
                              </button>
                          </a>

                          
                          <a href="{{ url('/event/'.$row->id.'/edit')}}">
                            <button type="button" class="btn btn-dark btn-rounded btn-icon" title="Modifier"><i class="mdi mdi-pencil"></i>
                              </button>
                            </a>
                              <button type="button" id="ForDelete" class="btn btn-danger btn-rounded btn-icon" data-toggle="modal" data-target="#Delete" data-fourni="{{ $row->id }}" title="Supprimer"><i class="mdi mdi-delete"></i>
                              </button>


                              
                            
                          </td>
                          </tr>
                          
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sur de supprimer cette événnement ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="{{ url('/Supprimer/Evénnement')}}">
          <div class="form-group">
            
            <input type="hidden" class="form-control" id="recipient-name" name="id_event" value="">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Supprimer</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--fin model-->
<script>
$(document).on("click", "#ForDelete", function () {
     var id = $(this).data('fourni');
     $(".modal-body #recipient-name").val( id );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>
@endsection