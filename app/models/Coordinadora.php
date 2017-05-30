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
				->select(DB::Raw("MONTH(fecha) as Mes"))
				->distinct()
				->lists('Mes');
			
			return $meses;
		}

	}

?>