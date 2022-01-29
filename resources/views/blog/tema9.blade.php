@extends('blog.template.layout1')

@section('pestaña')
TEMA 9
@endsection

@section('tema')
EXPLICAR EL PROCESO DE DIAGRAMACION DE COMPONENTES DE LA ARQUITECTURA CLIENTE/SERVIDOR
@endsection

@section('imagen')
<img src="images/aboutus/tema9.png" class="img-responsive" alt="">
@endsection

@section('contenido')

<h4>Los diagramas de componentes UML representan las relaciones entre los componentes individuales del sistema mediante una vista de diseño estática. Pueden ilustrar aspectos de modelado lógico y físico.</h4>
<h4>En el contexto del UML, los componentes son partes modulares de un sistema independientes entre sí, que pueden reemplazarse con componentes equivalentes. Son autocontenidos y encapsulan estructuras de cualquier grado de complejidad.</h4>
<h4>Los elementos encapsulados solo se comunican con los otros a través de interfaces. Los componentes no solo pueden proporcionar sus propias interfaces, sino que también pueden utilizar las interfaces de otros componentes, por ejemplo, para acceder a sus funciones y servicios. A su vez, las interfaces de un diagrama de componentes documentan las relaciones y dependencias en una arquitectura de software.</h4>

@endsection