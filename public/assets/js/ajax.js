function ObjetoAjax()
{ 
	/* Crea el objeto AJAX. Esta funcion es generica para cualquier utilidad de este tipo, por
	lo que se puede copiar tal como esta aqui */
	var xmlhttp=false;
	try
	{
		// Creacion del objeto AJAX para navegadores no IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch(e)
	{
		try
		{
			// Creacion del objet AJAX para IE
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(E)
		{
			if (!xmlhttp && typeof XMLHttpRequest!='undefined') xmlhttp=new XMLHttpRequest();
		}
	}
	return xmlhttp; 
}
//variables globales
var matriz = [];
var str =[];
var t = 0;
var n = 0;
var m = 0;
var select_p=0;
var res_query=[];
var str2 = [];
var r_temp = '';


function openModal(r){
	$('#'+r).modal('toggle');
}

function error(r){
	$('#modal_error').modal('show');
	$('#mensaje_error').text('Algo esta mal, '+r);
}

function fnc_comenzar(){
	r_temp = '';
	matriz = [];
	str = [];
	t = $('#id_t').val();
	n = $('#id_n').val();
	m = $('#id_m').val();

	//Validamos el valor de T
	if (!(1 <= t) || !(t<= 50) ) {
		return error('T debe ser entre 1 y 50');
	}
	//Validamos el valor de N
	if(!(1 <= n) || !(n <= 100)){
		return error('N debe ser entre 1 y 100');
	} 
	//validamos el valor de M
	if (!(1 <= m) || !(m<= 1000))  {
		return error('M debe ser entre 1 y 1000');
	}

	//Generamos la matriz
	for (var i = 0; i < n; i++) {
	matriz[i]= [(i+1),(i+1),(i+1),0];
	}
	mostrar_matriz();
	//console.log(matriz);

}
function mostrar_matriz(){
	//imprimimos la matriz creada
	for(var i=0; i < matriz.length; i++){
		test = matriz[i].toString();
        str[i] = test.split(',').join(' ');
        str[i] +=' <input type="checkbox" id="check_'+i+'" value="'+matriz[i]+'"><br>';
    }
	
	$('#resultado_matriz').html(str);
	$('#mensaje_m').html('Puede realizar un maximo de '+m+' operaciones con esta matriz.');
}

function fnc_inputsDinamicos(){
	select_p = $('#selec_proceso').val();
	//alert(select_p);

	if (select_p==1) {
		$('#id_input_dinamico').html('<label>Ingrese el valor de W: </label><input type="number" class="form-control" id="id_w"/> <p> Seleccione el valor de las coordenadas a modificar.</p>');
	}
	if (select_p==2) {
		$('#id_input_dinamico').html('<p> Seleccione el rango a sumar.</p>');
	}
}

function fnc_procesar(){
	var count = 0;
	var pos = 0;
	var pos_q = [];
	var query = 0;
	console.log(t,n,m);

	if ((t!=0) && (n!=0) && (m!=0)) {
		if (select_p==1) {//EN CASO DE QUERER HACER UPDATE
			for(var i=0; i < matriz.length;i++){
				if($('#check_'+i+'').is(':checked')) {  
		            count++;
		            pos = i;  
		        }
		    }
		        if (count==1) {
		        	//SI SOLO TENEMOS UN CHECK PODEMOS ACTUALIZAR ESAS COORDENADAS
		        	var w = $('#id_w').val();
		        	if ((w!=null) && (w!=0) && (count==1)) {
		        		console.log(matriz[pos]);
		        		matriz[pos].pop();
		        		matriz[pos].push(parseInt(w));
		        		console.log(matriz[pos]);
		        		mostrar_matriz();
		        	}else{
		        		return error('Debes colocar un valor a W o seleccionar una cordenada');
		        	}
		        }else{
		        	return error('Solo puedes actualizar una coordenada a la vez');
		        }
			
		}
		if (select_p==2) {//EN CASO DE QUERER HACER QUERY
			for(var i=0; i < matriz.length;i++){
				if($('#check_'+i+'').is(':checked')) {  
		            count++;
		            pos_q[i] = i;  
		        }
		    }
		    //console.log(i,count,pos_q);
		    if (count==2) {
		    	for (var i = 0; i < pos_q.length; i++) {
		    		//console.log(i);
		    		query += matriz[i].slice(-1).pop();
		    		//console.log(query);
		    	}
		    	console.log(query);
		    	//res_query[m] = query;
		    	mostrar_query(query);
		    }else{
		    	return error('Debe elegir solo dos coordenadas como rango de suma.');
		    }
		}


	}else{
		return error('Verificar los valores de T,N o M');
	}
	m--;
	if (m==0) {
		return error('Ya se terminaron las operaciones');
	}
}

function mostrar_query(r){
	
	r_temp+=r+'<br>';
	$('#resultado_proceso').html(r_temp);
}

