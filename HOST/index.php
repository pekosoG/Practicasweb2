<?php

date_default_timezone_set('America/Mexico_City');
if(isset($_POST)!==0){
	if(!isset($_POST['ctrl']))
		die('Error: Control Invalido');
	else{
		if(preg_match('/^[a-z]+$/', $_POST['ctrl'])!==0){
			require_once('ctrls/ctrlUser.php');
			$user = new ctrlUser();
			$user->ejecutar();	
			return;
		}
		else
			echo 'NOPE';
	}	
}
?>