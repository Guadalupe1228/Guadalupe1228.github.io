<?php
include "conexion.php";
if(isset($_POST['register'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['clave']) >= 1
    ){
        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);
        $correo=trim($_POST['correo']);
        $clave=trim($_POST['clave']);
        $consulta="INSERT INTO datos(nombre, apellido, correo, clave)
              VALUES('$nombre', '$apellido', '$correo', '$clave')";
              $resultado=mysqli_query($conexion, $consulta);
              if($resultado){
                ?>
                <h3 class="exito">TU REGISTRO SE HA COMPLETADO</H3>
                <?php
            }else{
                ?>
                <h3 class="error"> OCURRIO UN ERROR</H3>
                <?php
            }
    }else{
        ?>
             <h3 class="error"> LLENA TODOS LOS CAMPOS</H3>
        <?php
    }
}
?>