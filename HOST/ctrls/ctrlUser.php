<?php

class ctrlUser{
	private $username;
	private $tipo;
	private $modLogger;
	
	function __construct(){
		$this->username=$_POST['user'];
		$this->tipo=1;
		 
		require_once('mods/modLogger.php');
		$this->modLogger = new modLoggerSQL();
	}
	
	/**
	 * Funcion encargada de comenzar el trabajo de ejecucion de la clase.
	 * Dependiendo de la accion enviada, el caso al que entre
	 */
	function ejecutar(){
		if(isset($_POST['act'])){
			if(preg_match('/^[a-z]+$/', $_POST['act'])===0)
				die('Error: Act Invalido');
			else{
				switch($_POST['act']){
					case 'login':
						if(!$this->modLogger->login())
							die('bad Login');
					case 'inicial':
						//Aqui hace falta verificar si está loggeado o no
						$this->inicial();
				}
			}
		}
	}
	
	/**
	 * Funcion encargada de cargar la "vista inicial" del sitio.
	 */
	function inicial(){
		$plantilla = file_get_contents('views/main.html');
		echo str_replace('{user}', $this->username, $plantilla);
	}
}