@include('layouts.menu')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-12 text-right">
                  <a id="alta" href="/clientes/create" type="button" class="btn btn-sm btn-primary btn-create"><i class="fa fa-plus" aria-hidden="true"></i> Ingresar Cliente</a>
                   <div class="col col-xs-3" align="center">
                     {{Form::label('Buscar personal')}}
                   <input class="form-control" id="searchTerm" type="text" onkeyup="doSearch()" />
                  </div>
                </div>
                
            </div>
          </div>
             <div class="table-responsive">
                <table  id="datos" class="table table-striped table-bordered table-list ">
                  <thead> 
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Email</th>
                      <th>Teléfono</th>
                      <th>Acciones</th>
                    </tr> 
                  </thead>
                  <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                      <td> {{$cliente->cli_name}} </td>
                      <td> {{$cliente->cli_apellido}} </td>
                      <td> {{$cliente->cli_email}} </td>
                      <td> {{$cliente->cli_telefono}} </td>
                      <td align="center">
                      <a id="edit{{$cliente->cli_id}}" href="/clientes/{{$cliente->cli_id}}/edit" class="btn btn-default"><em class="fa fa-pencil"></em>
                      </a>
                      {{ Form::open(['url' =>[ 'clientes/' . $cliente->cli_id],'method' => 'delete']) }}
                      <button id="delete{{$cliente->cli_id}}" class="btn btn-danger fa fa-trash"></button>
                      {{ Form::close() }}
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
        </div>
      </div>
  </div>
</div>   
