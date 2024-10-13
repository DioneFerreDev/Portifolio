<?php 
	namespace controllers;

	/**
	 * 
	 */
	class mainController
	{
		
		public static function index($par){
			\views\mainView::setPar($par);
			\views\mainView::render('main','../painel/');
		}
		public static function quit($link){
			session_destroy();

			header('Location:'.$link);
			die();
		}
		public static function metaData(){
			$result = \Painel::select("tb_viewrs");
			$arr['total'] = $result['range']->rowCount();
			$result2 = \Painel::select("tb_viewrs"," data >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)");
			$arr["week"] = $result2['range']->rowCount();			
			return $arr;
		}
	}
?>