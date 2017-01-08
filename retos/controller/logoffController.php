<?php
require_once("config.php");
conectar::borra_session();
header("location: ".conectar::ruta()."?action=login");
?>