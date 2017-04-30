<?php 
	namespace Shop\Database;

	class AttributesUpdate{
		
		//combine the filds and keys of array to make the update
		private function combineUpdateFields($attributes){
			$keys = array_keys($attributes);
			$separadoPorDoisPontos = ':'.implode('=:', $keys);

			$combine = array_combine($keys, explode('=',$separadoPorDoisPontos));
			return $combine;
		}

		//return the array with the values of fields
		public function updateFields($attributes){
			// ['name' => :name, 'email' => ':email']
			
			$combine = $this->combineUpdateFields($attributes);
			$query = null;

			//name=:name,email=:email,

			foreach($combine as $key => $value){

				$query.=$key.'='.$value.',';

			}
			//name=:name,email=:email

			$novaQuery = rtrim($query, ',');

			return $novaQuery;
		}

		//return the final combine of arrays with the right value
		public function bindUpdateParameters($attributes){
			$keys = array_keys($attributes);
			$separadoPorDoisPontos = ':'.implode(',:',$keys);

			$combineUpdate = array_combine(explode(',',$separadoPorDoisPontos), array_values($attributes));

			return $combineUpdate;
		}


	}
?>