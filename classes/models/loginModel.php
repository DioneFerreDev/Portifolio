<?php
	namespace models;

	/**
	 * 
	 */
	class loginModel
	{
		
		public static function logIn($arr){
			$ok = \Painel::select('tb_admin',' user = ? AND password = ?',$arr);
            			
			return $ok;
		}
	}



 ?>