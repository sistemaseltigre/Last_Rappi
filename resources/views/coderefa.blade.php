@extends('template.master')
@section('contenido_vista')

<p align="center">
    <h2 align="center">Code Refactoring</h2><br>
<p>Realizare el codigo como lo haria en laravel utilizando mvc.<p/>
			<div class="panel panel-default">
			<div class="panel-body">
				<p><code>Public function post_confirm(Request $request){<br><br>
					
					//Recibimos las variables<br>
					$id_servicio = $request->id_user;<br>
					$id_conductor = $request->id_conductor;<br>

					//Buscamos y cambiamos el estado del servicio<br>
					$Servicio = Servicio::find($id_servicio);<br>
					$Servicio->estado = 'realizado';<br>
					$Servicio->save();<br>

					//Buscamos el conductor y le sumamos un punto a favor<br>
					$Conductor = Conductor::find($id_conductor);<br>
					$Conductor->exp = id_conductor->exp + 1;<br>
					$Conductor->save();

					//Notificar por mail<br>
					mail("conductor@rappi.com","rappi notifica","Excelente trabajo");<br>

					return response()->json($loquequieroretornar);<br>


				<br><br>}</code></p>
			</div>
			</div>
			<ul><li>1 - La mala práctica se da por comentarios innecesarios, reescribir código y no utilizar los modelos de manera apropiada, tal vez la estructura de la base de datos fue creada sin pensar en un futuro, o simplemente es una base vieja y aún se mantiene. </li>
				<li>2 - Hago un código limpio gracias a la versatilidad del framework, lo cual mejora el trabajo en equipo, tiempos de entrega y seguridad de la aplicación. </li>
			</ul>
			<ul>
				<li>1. ¿En qué consiste el principio de responsabilidad única? ¿Cuál es su propósito?<br>
					Cada clase debe estar encapsulada y cumplir una funcion en especifico.
				</li>
				<li>2. ¿Qué características tiene según tu opinión “buen” código o código limpio?<br>
					Cada cosa en su lugar, todo organizado y lo mas documentado posible para agilizar el tiempo de desarrollo en equipo.
				</li>
			</ul>
</p>
@stop