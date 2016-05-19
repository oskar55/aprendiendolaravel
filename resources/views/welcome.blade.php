@extends('admin.template.main')

@section('title')
    PAGINA DE INICIO
@endsection


@section('content')
<div class="panel panel-default">
  <div class="panel-body">
    	<h1>GESTOR DE CONTENIDO WEB</h1>
    	<a href=" {{ route('admin.auth.login')}} " class="btn btn-success">Ingresar</a>
    </div>
</div>
@endsection