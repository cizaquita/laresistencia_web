<?php
//session_start();
//conectar::crea_session();
class conectar
{
	public function conectar()
	{
	//Connect to the database
    
   		$host_bd	  = "localhost";
        $user_bd      = "retos";
        $pass_bd      = "!ret0s_";	
        $name_bd      = "rescolretos_db";
		$port		  = 3306;
		
		$link = mysql_connect($host_bd, $user_bd, $pass_bd, $name_bd);
		if(!$link){
			$link = null;
			die("No se pudo conectar :( " . mysql_error());
		}
		
		return $link;
	}
	
	public function desconectar($link){
		if(!mysql_close($link)){
			die("No se pudo desconectar el interruptor de corriente alterna... " . mysql_error());
		}
	}

	public static function ruta(){
		return "https://rescol-juandavidr.c9users.io/web/retos/";
	}

	public function crea_session(){
		$_SESSION['ses_user']=$_POST['user'];
	}

	public function borra_session(){
		session_destroy();
	}	
}
?>