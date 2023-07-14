<?php
 session_start();
 if(empty($_SESSION["id"])){
  
 }
  ?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome Link for Icons -->
    <script src="../script.js" defer></script>
  </head>
  <body style="background-color:#D7CFCA;">
  <div class="container-fluid cuerpo" >
    <div class="titulo">
      <div class="nombre">
        <?php
       echo ("<br>".$_SESSION["nombre"]." ".$_SESSION["apellido"]);
        ?>
         <a href="cerrar.php"><button class="cerrar">cerrar sesion</button></a>
        </div>
    <br><br><center><font face="hatton"  color="black"  size="10">NOVEDADES</font></center>
    </div><br><br>
    <label style="color: #736F6C;"> <h2 >#Temas En Tendencia</h2></label><br><br>
    <center>
    <div class="wrapper">
    <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carousel">
        <li class="card">
          <div class="img">
            <img src="../img/yat.jpg" alt="img" draggable="false"></div>
          <h2>Yo Antes de Ti</h2>
        <a href="../pdf/Yo antes de ti - Jojo Moyes.pdf"><input type="submit" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/TRA.jpeg" alt="img" draggable="false"></div>
          <h2>El Traidor</h2>
          <a href="../pdf/El Traidor - Anabel Hernández ( PDFDrive ).pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/AL.jpg" alt="img" draggable="false"></div>
          <h2>Al Final Mueren Los Dos</h2>
          <a href="../pdf/Al_final_mueren_los_dos._.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/bl.jpeg" alt="img" draggable="false"></div>
          <h2>Un Beso Bajo La Lluvia</h2>
         <a href="../pdf/Un beso bajo la lluvia.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/OR.jpeg" alt="img" draggable="false"></div>
          <h2>Orgullo y Prejuicio</h2>
         <a href="../pdf/10. Orgullo y Prejuicio autor Jane Austen.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/an.jpeg" alt="img" draggable="false"></div>
          <h2>Antes De Diciembre</h2>
         <a href="../pdf/Antes de diciembre (Joana Marcus) (z-lib.org) (1).pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width: 150px; height:50px;'></a>
        </li>
      </ul>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div><br>
</center>
 <div class="titulo">
    <br><br><center><font face="hatton"  color="black"  size="10">GENERALES</font></center>
    </div><br><br>
<br><label style="color: #736F6C;"> <h2>#Titulos Destacados</h2></label><br><br>
 <center>
    <div class="wrapper1">
      <ul class="carousel1">
        <li class="card">
          <div class="img">
            <img src="../img/MI.jpg" alt="img" draggable="false"></div>
          <h2>Mi ex y otras maldiciones </h2>
          <a href="../pdf/01. Mi ex y otras maldiciones - Erin Sterling.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width: 150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/in.jpg" alt="img" draggable="false"></div>
          <h2>Indomable  Doyle</h2>
          <a href="../pdf/Indomable  Doyle, Glennon.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/QU.jpeg" alt="img" draggable="false"></div>
          <h2>Queen</h2>
          <a href="../pdf/QUEEN  (Bilogía Dominio - Eva Muñoz) completa.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/vt.jpeg" alt="img" draggable="false"></div>
          <h2>La Ventajas De Ser Invisible</h2>
          <a href="../pdf/Las ventajas de ser invisible - Stephen Chbosky.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/cu.jpg" alt="img" draggable="false"></div>
          <h2>El Cuervo </h2>
          <a href="../pdf/El Cuervo (Edgar Allan Poe).pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/LA.jpg" alt="img" draggable="false"></div>
          <h2>Latidos que no dije</h2>
          <a href="../pdf/Latidos que no dije - Roos.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO"  style='width:150px; height:50px;'></a>
        </li>
      </ul>
    </div>
    </center>
    <br><br><img src="../img/ju.png" style='width:100%; height:20%;'><br><br>
    <center>
    <div class="wrapper1">
      <ul class="carousel1">
      <li class="card">
  <div class="img">
    <img src="../img/et.jpeg" alt="img" draggable="false">
  </div>
  <h2>Et&eacute;reo</h2>
  <a href="../pdf/1. Etéreo (Extraños I) - Joana Marcús.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style="width: 150px; height: 50px;"></a>
  </a>
</li>
        <li class="card">
          <div class="img"><img src="../img/pe.jpg" alt="img" draggable="false"></div>
          <h2>Perfectos mentirosos </h2>
          <a href="../pdf/Perfectos mentirosos 2 Peligros y verdades - Alex Mirez.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/ta.jpeg" alt="img" draggable="false"></div>
          <h2>Tardes de otoño</h2>
          <a href="../pdf/Tardes de Otoño (Joana Marcús) (z-lib.org) (1).pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
      </ul>
    </div>
    </center>
    <br><br>
    <center>
      <div>
    <div class="wrapper1">
      <ul class="carousel1">
        <li class="card">
          <div class="img"><img src="../img/tre.jpeg" alt="img" draggable="false"></div>
           <h2>Tres veces t&uacute;</h2>
           <a href="../pdf/Tres veces tú-Federico Moccia.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/ba.jpeg" alt="img" draggable="false"></div>
          <h2>Baile de ladrones </h2>
          <a href="../pdf/Baile de ladrones (Mary Pearson) (z-lib.org).pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO" style='width:150px; height:50px;'></a>
        </li>
        <li class="card">
          <div class="img"><img src="../img/ug.jpg" alt="img" draggable="false"></div>
          <h2>Ugly Love</h2>
          <a href="../pdf/Copia de Ugly love - Colleen Hoover.pdf"><input type="button" id="añadir_carr" value="DESCARGAR LIBRO"  style='width:150px; height:50px;'></a>
        </li>
      </ul>
    </div>
    </center>
    <footer>
        <p>Copyright © 2023 - 2023 GEFKEV.com -Todos los derechos reservados<br>
         Nicolas Romero-Mexico</p>
    </footer>
  </body>
</html>