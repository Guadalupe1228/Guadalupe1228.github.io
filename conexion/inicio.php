<?php
session_start();
if(!empty($_POST["btn_inicia"])){
    if(!empty($_POST["correo"]) and !empty($_POST["clave"])){
        $usuario=$_POST["correo"];
        $clave=$_POST["clave"];
        $sql=$conexion->query("select * from datos where correo='$usuario' and clave='$clave'");
        if($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["apellido"]=$datos->apellido;
            header("location: ../conexion/novedades.php");
        }else{
            echo "<div class='alerta'>EL USUARIO O CONTRASEÑA NO EXISTEN</div>";

        }

    }else{
        echo "campos vacios";
    }
}
?>
