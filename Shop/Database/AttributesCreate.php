<?php 
	namespace Shop\Database;

	class AttributesCreate{

		//create
		public function createFields($attributes){
			//take the array keys
			return implode(',',array_keys($attributes));
		}

		public function createValues($attributes){
			//take the array values
			return ':'.implode(',:', array_keys($attributes));
		}

		public function bindCreateParameters($attributes){

			//joins the values with the keys to insert
			$values = $this->createValues($attributes);
			$bindParameters = array_combine(explode(',', $values), array_values($attributes));
			
			return $bindParameters;
		}
	}
?>