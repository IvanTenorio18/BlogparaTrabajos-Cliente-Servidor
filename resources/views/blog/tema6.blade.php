@extends('blog.template.layout2')

@section('pestaña')
TEMA 6
@endsection

@section('tema')
DESCRIBIR LOS SISTEMAS DE ARQUITECTURA CLIENTE/SERVIDOR
@endsection

@section('imagen')
<img src="images/aboutus/tema6.png" class="margin-bottom" alt="">
@endsection

@section('contenido')
<h4>A fin de poder entender correctamente el comportamiento de la Arquitectura Web es importante describir el funcionamiento de la arquitectura de aplicaciones Cliente-Servidor.
En Dicha arquitectura disponemos de dos tipos de agentes:
</h4>

<ul>
    <li>1.- Cliente: Ordenador o programa informático que solicita información.</li>
    <li>2.- Servidor: Ordenador o programa informático que dispone de información.</li>
</ul>

<h4>Pasos de intercambio de información	</h4>
<ul>
    <li>1.	Lanzamiento de la petición desde el cliente en búsqueda de datos</li>
    <li>2.	Procesado de la petición por parte del servidor, para localizar la información</li>
    <li>3.	Envío de la respuesta por parte del Servidor al cliente, con los datos solicitados</li>
    <li>4.	Procesado en el cliente de los datos de la respuesta del servidor</li>
</ul>
<h4></h4>

@endsection