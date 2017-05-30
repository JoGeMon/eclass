<?php 

	class Coordinadora extends Eloquent{
		protected $table = 'coordinadora';
		protected $primaryKey = 'id';

		public static function getRanking($mes = null, $orden){
			if($orden == 'mejor')
			{
				$orden = "DESC";
			}else{
				$orden = "ASC";
			}
			$datos = DB::table('coordinadora')
				->select(DB::raw('COUNT(id) AS cuenta, id_coordinadora_crm'))
				->whereRaw("MONTH(fecha) = ".$mes)
				->where('deleted', 0)
				->groupBy('id_coordinadora_crm')
				->orderBy('cuenta', $orden)
				->first();
			return $datos;
		}

		public static function getMesesDisponibles(){
			$meses = DB::table('coordinadora')
				->select(DB::Raw("MONTH(fecha) as 'mes', ELT(DATE_FORMAT(fecha, '%m'), 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre') as 'nomMes'"))
				->distinct()
				->where('deleted', 0)
				->lists('nomMes','mes');
			return $meses;
		}

		public static function getProductos($mes){
			$productos = DB::table('coordinadora')
				->select('id_producto_agrupador')
				->distinct()
				->where('deleted', 0)
				->whereRaw('Month(fecha)='.$mes)
				->orderBy('id_producto_agrupador', 'asc')
				->get();
			return $productos;
		}
		
		public static function getCoordinadorasxProducto($mes){
			$coordinadoras = DB::table('coordinadora')
				->select(DB::Raw('DISTINCT id_producto_agrupador, id_coordinadora_crm, count(id) as cantidad'))
				->where('deleted', 0)
				->whereRaw('Month(fecha) ='.$mes)
				->groupBy('id_producto_agrupador')
				->groupBy('id_coordinadora_crm')
				->get();
			return $coordinadoras;
		}

	}

?>