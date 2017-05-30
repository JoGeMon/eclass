<?php

class CoordinadoraController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($mes = 1)
	{
		$meses = Coordinadora::getMesesDisponibles();
		return View::make('vista1', array(
			'meses' => $meses
		));
	}

	public function ranking($mes = 1)
	{
		$mejor = Coordinadora::getRanking($mes, "mejor");
		$peor = Coordinadora::getRanking($mes, "peor");
		return View::make('detalleRanking', array(
			'mejor' => $mejor,
			'peor' => $peor,
		));

	}

	public function eficiencia($mes = 1)
	{
		$meses = Coordinadora::getMesesDisponibles();
		$productos = Coordinadora::getProductos($mes);
		$coordinadoras = Coordinadora::getCoordinadorasxProducto($mes);
		return View::make('vista2', array(
			'productos' => $productos,
			'coordinadoras' => $coordinadoras,
			'meses' => $meses,
		));
	}
}