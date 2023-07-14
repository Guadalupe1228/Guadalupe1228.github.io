<?php
$conexion=new mysqli("localhost","root","12345678","formulario");
if(!$cn -> connect_errno){
    echo("conexion existosa");
}
else{
    echo("fallo");
}
?>