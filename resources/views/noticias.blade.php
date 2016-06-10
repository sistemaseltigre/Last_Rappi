@extends('template.master')
@section('contenido_vista')
<?php
$url='assets/json/news_mock.json';
$data = file_get_contents($url);
$data_array = json_decode($data,true);
$count = count($data_array);

//dd($data_array[0]['title']);
?>





<!--//echo '<form> <input type="hidden" name="id" value="'.$id.'" /></form-->
<div class="panel panel-default">
	<div class="panel-heading">Noticias de Rappi</div>
<div class="panel-body">
@for ($i=0; $i < $count; $i++)

<button type="button" class="btn btn-info btn-block regular-link responsive-width " data-toggle="collapse" data-target="#news_{{$i}}"><div class="numberCircle"></div>{{$data_array[$i]['title']}}</button>

<div id="news_{{$i}}" class="collapse">
<div class="row">
            <div class="col-md-4"><img src="{{$data_array[$i]['image']}}" class="img-responsive"/></div>
            <div class="col-md-8">{{$data_array[$i]['content']}}</div>
</div>
</div>


	<!--//echo  $data_array[$i]['title'];
	//echo  $data_array[$i]['content'];
	//echo  $data_array[$i]['image'];-->

@endfor
</div>
</div>
@stop