@extends('template.master')
@section('contenido_vista')
<div class="panel panel-default">
	<div class="panel-heading">Cube-summation</div>
	<div class="panel-body">
		<p class="text-justify">
			En la siguiente aplicacion tendremos la posibilidad de crear una matriz 3D, con valor cero (0) en su bloque inicial, el primer bloque siempre estara definido por las coordenadas (1,1,1) y el ultimo bloque estara definido por las coordenadas (n,n,n). Con esta matriz podras realizar dos tipos de consultas.<br>			
			<div class="panel panel-default">
				<div class="panel-body">
				<p>UPDATE x y z W</p>
			</div>
			</div>			
			Esto actualizara el valor de x,y,z a W, de tal manera que si decimos que nuestra coordenada comienzan en cero, ejemplo (2,2,2)=0, y utilizamos la consulta anterior el sistema nos cambiara el valor de la coordenada, supongamos que (<var>W</var> = 4), al realizar la consulta "UPDATE 2 2 2 4" el resultado seria (2,2,2) = 4. Mostrando como salida <b>4</b>.</br>

			<div class="panel panel-default">
				<div class="panel-body">
				<p>QUERY x1 y1 z1 x2 y2 z2</p>
			</div>
			</div>
			Con esta consulta lo que hacemos es realizar una suma entre las coordenadas x1 y x2 incluyendolas asi mismo para las coordenadas y1 y2 y z1 z2. Ejemplo si tenemos las coordenadas despues de actualizar y sumamos desde (1,1,1) hasta (2,2,2) el valor seria 4, ya que todas las coordenadas inician con el valor en cero hasta que le modifiquemos el valor.	
		</p>
		<div class="panel panel-default">
			<div class="panel-heading">App</div>
			<div class="panel-body">
				  <div class="row">
            <div class="col-md-4"><form role="form">
				  <div class="form-group">
				    <label for="id_t">Ingrese el valor de T</label>
				    <input type="number" class="form-control" id="id_t" placeholder="T es el numero de veces que se repetira todo el proceso, cualquier numero entero.">
				  </div>
				  <div class="form-group">
				    <label for="id_n">Ingrese el valor de N</label>
				    <input type="number" class="form-control" id="id_n" placeholder="N es el ultimo rango de coordenadas del bloque ejemplo 9,9,9.">
				  </div>
				  <div class="form-group">
				    <label for="id_m">Ingrese el valor de M</label>
				    <input type="number" class="form-control" id="id_m" placeholder="M es el numero de operaciones que vas a realizar por cada T.">
				  </div>
				  <button type="button" class="btn btn-default" onclick="fnc_comenzar()">Comenzar</button>
				</form>
			</div>
			<div class="col-md-6">
				<label>Formaste una matriz</label>
				<div id="resultado_matriz"></div>
				<div id="mensaje_m"></div>
				<div class="form-group">
				    <label for="id_t">Seleccione Update o Query</label>
				    <select onchange="fnc_inputsDinamicos()" class="form-control" id="selec_proceso">
				    	<option value="0">...</option>
				    	<option value="1">UPDATE</option>
				    	<option value="2">QUERY</option>				    	
				    </select>
				    <div id="id_input_dinamico"></div>
				</div>
				<div class="form-group">
				<br>
				<button type="button" class="btn btn-default" onclick="fnc_procesar()">Procesar</button>
				</div>
			</div>
			<div class="col-md-2">
				<label>Resultado Query: </label>
				<div id="resultado_proceso"></div>
			</div>

        </div> 
				
			</div>
			</div>
	</div>
</div>
@stop