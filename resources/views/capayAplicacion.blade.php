@extends('template.master')
@section('contenido_vista')

<p align="center">
    <h2 align="center">Capas</h2><br>
    <ul>
<li>Vista, se utiliza una vista para mostrar la aplicacion, realizada con bootstrap.</li>
<li>Aplicacion, procesamos la informacion con funciones Javascript.</li>
<li>No se crearon clases puntuales para la app de hackerrank.</li>
</ul>

<h2 align="center">Funciones</h2><br>
    <ul>
<li>openModal: Esta como funcion publica en caso de crear un modal toggle().</li>
<li>error: Muestra un modal estandar y recibe parametros para dar un mensaje al usuario.</li>
<li>fnc_comenzar: procesay valida la primera informacion suministrada por el usuario, (t,n,m).</li>
<li>mostrar_matriz: imprime la matriz que se esta utilizando con cada cambio que se le realice en tiempo real.</li>
<li>fnc_inputsDinamicos: muestra campos dinamicos dependiendo de la operacion que requiera utilizar el usuario.</li>
<li>fnc_procesar: procesa el QUERY o el UDDATE dependiendo de lo que solicite el usuario, tambien realiza validaciones.</li>
<li>mostrar_query: realiza la concatenacion de los resultados de la variable query y los muestra en un div.</li>
</ul>
</p>
@stop