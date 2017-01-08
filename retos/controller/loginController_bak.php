<?php
conectar::crea_session();
if(isset($_SESSION['ses_user'])){
   // conectar::crea_session();
 header("Location: ". conectar::ruta() ."?accion=index");
}
else{
    //conectar::crea_session();
    require_once("view/login.phtml");
    //conectar::crea_session();
    }
?>