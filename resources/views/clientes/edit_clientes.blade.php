@include('layouts.menu')

<div class="container">
    <div class="row">
        <a href="/clientes"type="button" class="btn btn-sm btn-primary btn-create">Lista Clientes</a>
        <h1>Editar Cliente</h1>
        
        {!!Form::open(['action'=>['ClientesController@update',$cliente->cli_id],'method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('Nombre')}}
            {{Form::text('cli_name',$cliente->cli_name,['class'=>'form-control','placeholder'=>'Nombre'])}}
        </div>
        <div class="form-group">
            {{Form::label('Apellido')}}
            {{Form::text('cli_apellido',$cliente->cli_apellido,['class'=>'form-control','placeholder'=>'Apellido'])}}
        </div>
        <div class="form-group"> 
            {{Form::label('Email')}}
            {{Form::email('cli_email',$cliente->cli_email,['class'=>'form-control','placeholder'=>'Email'])}}
        </div>
        <div class="form-group"> 
            {{Form::label('Telefono')}}
            {{Form::text('cli_telefono',$cliente->cli_telefono,['class'=>'form-control','placeholder'=>'Telefono'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
        {!!Form::close()!!}
        
    </div>
</div>
    
    
    
