@extends('layout')
@section('content')
	<?php $menu = 'vista2'; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#ddlMes').change(function(){
				var id = $(this).val();
				window.location.href = id;
			});
		});
	</script>
	<div class="row">
		<div class="col-md-12">
			<p class="alert alert-info"><span class="glyphicon glyphicon-info-sign"></span> Se sugiere calcular el promedio de atenciones por coordinadora que hay por cada producto, según un mes en particular. Conociendo en detalle el negocio, se podría establecer cual es un promedio mensual óptimo para cada coordinadora.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			{{Form::open(array('route' => 'ranking', 'id' => 'frmMes'))}}
				{{Form::label('meses', 'Seleccione uno de los meses disponibles para consultar')}}
				{{Form::select('meses', $meses, '', array('class' => 'form-control', 'id' => 'ddlMes'))}}
			{{Form::close()}}
		</div>
	</div>
	<br/>
	<div class="row">
		@foreach($productos as $producto)
			<?php 
				$cuentaCoordinadora = 0; 
			 	$sumaAtenciones = 0; 
			 ?>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">{{'Producto: '.$producto->id_producto_agrupador}}</h4>
					</div>
					<div class="panel-body">
						@foreach($coordinadoras as $coordinadora)
							@if($coordinadora->id_producto_agrupador == $producto->id_producto_agrupador)
							<?php 
								$cuentaCoordinadora++;
								$sumaAtenciones = $sumaAtenciones + $coordinadora->cantidad;
							?>
							@endif
						@endforeach
						<div class="col-md-6">
							<p>Atenciones: {{$sumaAtenciones}}<br/>
							Coordinadoras: {{$cuentaCoordinadora}}</p>
						</div>
						<div class="col-md-6">
							<h4>Promedio:<br/> {{round($sumaAtenciones/$cuentaCoordinadora,1)}}</h4>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@stop