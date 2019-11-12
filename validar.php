<?php

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
//-----*conectar ala base de datos````-----//
$conexion = mysqli_connect('localhost', 'glfjyjdulose', '4fp:Ne=dC$i@', 'red_de_medios');

if (!$conexion) {
    echo ' Error al conectar a la base de datos';
}
else{
    echo 'Conectado a la basa de batos';
}  

$consulta="SELECT * FROM red_de_medios WHERE correo = '$correo' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if ($filas>0) {
    header("location:login.html");}
  else {
    echo '<script> alert("Su Correo o contrasena son incorrectos"); window.history.go(-1); </script>';
    exit;
} mysqli_free_result($resultado);
    mysqli_close($conexion);
   