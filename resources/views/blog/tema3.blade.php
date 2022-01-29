@extends('blog.template.layout1')

@section('pestaña')
TEMA 3
@endsection

@section('tema')
DEFINIR LOS CONCEPTOS DE CLIENTE SERVIDOR
@endsection

@section('imagen')
<img src="images/aboutus/tema3.png" class="img-responsive" alt="">
@endsection

@section('contenido')
<h4>TCP es un protocolo orientado a conexión. No hay relaciones maestro/esclavo. Las aplicaciones, sin embargo, utilizan un modelo cliente/servidor en las comunicaciones.</h4>

<h4>Un servidor es una aplicación que ofrece un servicio a usuarios de Internet; un cliente es el que pide ese servicio. Una aplicación consta de una parte de servidor y una de cliente, que se pueden ejecutar en el mismo o en diferentes sistemas.</h4>
<h4>Los usuarios invocan la parte cliente de la aplicación, que construye una solicitud para ese servicio y se la envía al servidor de la aplicación que usa TCP/IP como transporte.</h4>
<h4>El servidor es un programa que recibe una solicitud, realiza el servicio requerido y devuelve los resultados en forma de una respuesta. Generalmente un servidor puede tratar múltiples peticiones (múltiples clientes) al mismo tiempo.</h4>
<h4></h4>

@endsection