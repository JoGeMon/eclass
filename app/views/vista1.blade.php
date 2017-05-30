@extends('layout')
@section('content')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#ranking').load('detalleRanking/'+1);
			$('#ddlMes').change(function(){
				var id = $(this).val();
				$('#ranking').load('detalleRanking/'+id, function(){
					$(this).fadeOut('fast').fadeIn();
				});
			});
		});
	</script>
	<div class="row">
		<div class="col-md-12">
			{{Form::open(array('route' => 'ranking', 'id' => 'frmMes'))}}
				{{Form::label('meses', 'Seleccione uno de los meses disponibles para consultar')}}
				{{Form::select('meses', array($meses), '', array('class' => 'form-control', 'id' => 'ddlMes'))}}
			{{Form::close()}}
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-md-12">
			<div id="ranking"></div>
		</div>
	</div>
@stop