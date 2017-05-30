<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading"><h4 class="panel-title">Mejor Coordinadora</h4></div>
		<div class="panel-body">
			<div class="col-md-6">
				{{$mejor->id_coordinadora_crm}}
			</div>
			<div class="col-md-6">
				<p>Cantidad de atenciones: {{$mejor->cuenta}}</p>
			</div>
	</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading"><h4 class="panel-title">Peor Coordinadora</h4></div>
		<div class="panel-body">
			<div class="col-md-6">
				{{$peor->id_coordinadora_crm}}
			</div>
			<div class="col-md-6">
				<p>Cantidad de atenciones: {{$peor->cuenta}}</p>
			</div>
		</div>
	</div>
</div>