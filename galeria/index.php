<?php
//incluir la libreria de cotrol de  SMF
require_once('../foro/SSI.php');

//redirecciones al loguearse o salir
$_SESSION['login_url'] = 'https://rescol-juandavidr.c9users.io/web/galeria/index.php';
$_SESSION['logout_url'] = 'https://rescol-juandavidr.c9users.io/web/galeria/index.php';


?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <!-- script type="text/javascript" src="js/agregarNuevaFila.js"></script-->
        <script type="text/javascript" src="js/modificarEstiloInputFile.js"></script>
        <script type="text/javascript" src="js/cambiarOpacidadImagenes.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>

        <!-- Lightbox -->
        <script type="text/javascript" src="lightbox/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="lightbox/js/jquery-ui-1.8.18.custom.min.js"></script>
        <script type="text/javascript" src="lightbox/js/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="lightbox/js/lightbox.js"></script>
        <link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" />
        <link rel="stylesheet" href="../files/css.css" type="text/css" />

        <title>Galería de imagenes</title>
    </head>
    <body>

        <div class="galeria">
            <h1>Galería de Imagenes</h1>
            <?php
            require 'config.php';
            require 'GestorArchivos.php'; 

            $conexion = new mysqli($servidor, $usuarioBD, $passwordBD, $baseDatos);

            $consulta = "SELECT archivo, directorio FROM galeriaimagenes ORDER BY id";
            $resultado = mysqli_query($conexion,$consulta);

            // Muestra las imagenes de la galeria.
            while($filas = $resultado->fetch_array(MYSQLI_ASSOC)) {
            // Se comprueba que existan las imagenes
            if (file_exists("imagenes/".$filas["directorio"]."/".$filas["archivo"])){
            echo'<a href="imagenes/'.$filas['directorio'].'/'.$filas['archivo'].'" rel="lightbox[galeria]" title="'.$filas['archivo'].'"><img src="imagenes/'.$filas['directorio'].'/'.$filas['archivo'].'"/></a>';
            }                   
            }
            ?>
        </div>

<?php
if ($context['user']['is_guest'])
{
	//si el usuario es invitado
	
}
else
{
    //si el usuario esta logueado
?>
        <div id="subirImagenes">

            <!-- Para poder subir archivos con PHP hay que poner enctype="multipart/form-data" para que no se encripte ningun caracter y el archivo no se modifique/estropee -->
            <form action="#" method="POST" enctype="multipart/form-data">
                <table id="formularioSubida" border="0">
                    <thead>
                    <th>Elige los archivos que quieras subir</th>
                    </thead>
                    <tr>
                        <td>

                            <input name="imagen1" type="file">

                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <!--input type="button" id="botonAnnadir" onClick="agregarFila('formularioSubida','botonAnnadir')" value="Añadir archivo" style="width:138px;" -->        
                            <input type="submit" name="botonSubir" value="Subir"> 
                        </td>
                    </tr>
                </table>
            </form>

            <?php
}
            
            // Subir todas las imagenes
            if(isset($_POST['botonSubir'])){
            subirImagenes('prueba',$conexion);
            }
            
            ?>


        <br />
        </div>  
<?php 
//muestra la opcion de desloquearse
ssi_logout(); 
?>
        <!-- Muestra el estilo modificado para el input file y cambia la opacidad de las imagenes de la galeria     -->
    <body onLoad="
                
                cambiarOpacidadImagenes(0.5);
          ">

    </body>
</html>