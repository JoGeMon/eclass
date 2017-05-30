@extends('layout')
@section('content')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#ranking').load('detalleRanking/'+1);
			$('#ddlMes').change(function(){
				var id = $("select option:selected").text();
				$('#ranking').load('detalleRanking/'+id, function(){
					$(this).hide().show('slow');
				});
			});
		});
	</script>
	{{Form::open(array('route' => 'ranking', 'id' => 'frmMes'))}}
		{{Form::label('meses', 'Seleccione un mes a consultar')}}
		{{Form::select('meses', array($meses), '', array('class' => 'form-control', 'id' => 'ddlMes'))}}
	{{Form::close()}}
	<div id="ranking"></div>
@stop