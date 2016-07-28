@extends('automotores.admin')

@section('subtitulo','Incertar Usuarios')
@section('content')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4>Nuevo Usuarios</h4></div>
    <div class="panel-body">

        @include('automotores.usuarios.forms.user')

    </div>
</div>

@stop