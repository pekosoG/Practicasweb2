<?php
	
class modLoggerSQL{
	function __construct(){
		//echo 'Constructor del Modelo!!';
	}
	
	/**
	 * Funcion encargada de verificar si se loggea el usuario o no, usando los parametros enviados por POST
	 * @return boolean
	 */
	function login(){
		$ok=false;
		if(isset($_POST['user']) && isset($_POST['pass']))
			$ok=true;
		return $ok;
	}
	
}