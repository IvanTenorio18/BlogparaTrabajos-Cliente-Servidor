
@extends('blog.template.layout2')

@section('contenido')
@foreach($unidades as $unidad)
{!!$unidad['titulo']!!}
{!!$unidad['contenido']!!}
{!!$unidad['imagen']!!}

@endforeach
@endsection