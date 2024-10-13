<?php
	namespace controllers;

	/**
	 * 
	 */
	class loginController
	{
		
		public static function index($par){
			\views\mainView::setPar($par);
			\views\mainView::render('login','../painel/');
		}
	}

?>