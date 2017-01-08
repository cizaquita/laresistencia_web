<?php
require_once("config.php");
if (!isset($_SESSION['ses_user'])) {
	header("location: ".conectar::ruta()."?accion=login");
} else {
	require_once("view/reto.phtml");
}

?>