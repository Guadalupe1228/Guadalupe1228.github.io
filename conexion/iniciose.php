<!DOCTYPE html>
<html>
    <head>
        <title>INICIO SESION</title>
        <link rel="stylesheet" href="../estilos/stylesre.css">
    </head>
    <body>
      <form method="POST" action="">
      <h1>INICIAR SESION</h1>
      <?php
        include "../conexion/conexion.php";
        include "../conexion/inicio.php";
        ?>  
        <input type="email" name="correo" placeholder="CORREO ELECTRONICO">
        <input type="password" name="clave"  placeholder="CONTRASEÑA">
         <button type="submit" name="btn_inicia" class="btn" value="inicio">Iniciar</button>
        <p class="link"><a href="registro.php">¿AUN NO TIENES CUENTA?</a></p>
      </form>
    </body>
</html>