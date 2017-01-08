<?php

require_once("config.php");
require_once('../foro/SSI.php');
//$_SESSION['login_url'] = 'web/retos/index.php';
$_SESSION['login_url'] = 'https://rescol-juandavidr.c9users.io/web/retos/index.php';
//$_SESSION['logout_url'] = 'web/retos/index2.php' . $_SERVER['https://rescol-juandavidr.c9users.io/'] . '?' . $_SERVER['?accion=login'];
$_SESSION['logout_url'] = 'https://rescol-juandavidr.c9users.io/web/retos/index.php';

// . $_SERVER['PHP_SELF']

if ($context['user']['is_guest'])
{
	//ssi_login();
	require_once("controller/loginController.php");
}
else
{
	//You can show other stuff here.  Like ssi_welcome().  That will show a welcome message like.
	//Hey, username, you have 552 messages, 0 are new.
	//ssi_logout();

?>
<html>
<head>
 	<meta http-equiv='content-type' content='text/html;charset=utf-8' />
 	<link rel='stylesheet' type='text/css' href='<?php echo conectar::ruta(); ?>script/css/style.css'/>
 	<link rel='stylesheet' type='text/css' href='<?php echo conectar::ruta(); ?>script/css/lytebox.css' media='screen' />
 	<script language='javascript' type='text/javascript' src='<?php echo conectar::ruta(); ?>script/js/funciones.js'></script>
 	<script language='javascript' type='text/javascript' src='<?php echo conectar::ruta(); ?>script/js/lytebox.js'></script>
<?php
if(!empty($_GET['accion'])){
		$accion=$_GET['accion'];
	}
	else{
		$accion="index";
	}
	if(is_file("controller/".$accion."Controller.php")){
		require_once("controller/".$accion."Controller.php");
	}
	else{
		require_once("controller/errorController.php");
	}

	//	require_once("controller/indexController.php");
?>

	</body>
 </html>
<?php
}
?>