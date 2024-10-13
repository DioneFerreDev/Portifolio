<?php
	
	/**
	 * 
	 */
	class Painel
	{
		
		public static function logIn(){
			$ok = (isset($_SESSION['login']) ? true : false);		
			
			return $ok;
		}
		
		public static function alert($type,$message){
			if($type == 'error'){
				echo '<div class="alert error"><h2><i class="fas fa-times"></i> '.$message.'</h2></div>';
			}else if($type == 'success'){
				echo '<div class="alert success"><h2><i class="fas fa-check"></i> '.$message.'</h2></div>';
			}
		}		
		public static function select($table,$query = null,$arr = null,$order = null,$limitInitial = null,$limitRange = null){
			$ok = array();
			if($query == null){
				if($limitInitial == null || $limitRange == null){
						$sql = MySql::conectar()->prepare("SELECT * FROM `$table` $order");
					if($sql->execute()){
						$ok['verificar'] = true;
						$ok['range'] = $sql;
					}else{
						$ok['verificar'] = false;
					}
				}else{
					$sql = MySql::conectar()->prepare("SELECT * FROM `$table` $order LIMIT $limitInitial,$limitRange");
					if($sql->execute()){
						$ok['verificar'] = true;
						$ok['range'] = $sql;
					}else{
						$ok['verificar'] = false;
					}
				}
				
				
			}else{
				if($limitInitial == null || $limitRange == null){
					$sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE $query $order");
					if($sql->execute($arr)){
						$ok['verificar'] = true;
						$ok['range'] = $sql;
					}else{
						$ok['verificar'] = false;
						$ok['range'] = $sql;
					}
				}else{
					$sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE $query $order LIMIT $limitInitial,$limitRange");
					if($sql->execute($arr)){
						$ok['verificar'] = true;
						$ok['range'] = $sql;
					}else{
						$ok['verificar'] = false;
						$ok['range'] = $sql;
					}
				}
				
			}
			return $ok;
		}
		public static function insert($arr){
			$query = " VALUES (null";
			$table = $arr['nome_tabela'];
			$ok = true;
			foreach ($arr as $key => $value) {
				$valor = $value;
				$campo = $key;
				if($campo == 'nome_tabela' || $campo == 'acao'){
					continue;
				}
				if($valor == ''){
					$ok = false;
					break;
				}
				$range[] = $valor;
				$query.=",?";
			}
			if($ok){
				$query.=")";
			}
			$sql = MySql::conectar()->prepare("INSERT INTO `$table` $query ");
			if($sql->execute($range)){
				$ok = true;
			}else{
				$ok = false;
			}
			return $ok;
		}
		public static function update($arr){
			$ok = true;
			$range = array();
			$table = $arr['nome_tabela'];
			$query = " SET ";

			foreach ($arr as $key => $value) {
				$campo = $key;
				$valor = $value;
				if($campo == 'id'){
					$id = $valor;
					continue;
				}
				if($campo == 'nome_tabela' || $campo == 'acao' || $campo == 'imagem_original'){
					continue;
				}
				if($valor == ''){
					$ok = false;
					break;
				}
				if($campo == 'id'){
					$id = $valor;
				}
				if($query[strlen($query) -1] == '?'){
					$query.= ",".$campo."= ?";
				}else{
					$query.= $campo."= ?";
				}
					$range[] = $valor;
			}
			
			//echo $query;
			if($ok){
				$range[] = $id;
				$sql = MySql::conectar()->prepare("UPDATE `$table` $query WHERE id = ?");
				if($sql->execute($range)){
					$ok = true;
				}else{
					$ok = false;
				}
			}
			return $ok;
		}
		public static function delete($table,$query,$arr){
			$sql = MySql::conectar()->prepare("DELETE FROM `$table` WHERE $query");
			if($sql->execute($arr))
				return true;
			else
				return false;
			
		}		
	}

?>
