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
    <form method="get" action="{{ url('/Rechercher/Contact')}}">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control form-control-sm" placeholder="Chercher un message" aria-label="Recipient's username" aria-describedby="basic-addon2" name="recherche">
            <div class="input-group-append">
              <button class="btn btn-sm btn-gradient-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
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
                            
                           <th> Id</th>
                           <th> Nom </th>
                           <th> Email </th>
                           <th> Message</th>
                          
                           <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($message as $row)
                          
                          <tr>
                          <td>
                            {{ $row->id}}
                            </td>
                            <td>
                             {{ $row->nom }}
                            </td>
                            <td>{{ $row->email }}  </td>
                            <td>{{ $row->message }}</td>
                            
                            <td>

                         
                              <button type="button" id="ForDelete" class="btn btn-danger btn-rounded btn-icon" data-toggle="modal" data-target="#Delete" data-fourni="{{ $row->id }}" title="Supprimer"><i class="mdi mdi-delete"></i>
                              </button>


                              
                            
                          </td>
                          </tr>
                          
                          @endforeach
                          
                        </tbody>
                      </table>

                      {{ $message->links() }}
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
        <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sur de supprimer cette message ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="{{ url('/Contact/Supprimer')}}">
          <div class="form-group">
            
            <input type="hidden" class="form-control" id="id_contact" name="id_contact" value="">
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
     $(".modal-body #id_contact").val( id );
});
</script>
@endsection