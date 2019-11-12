<?php
include 'conexion.php';
//recibir datos y guradarlos en variables

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
$telefono = $_POST["telefono"];
$programa = $_POST["programa"];
$ficha = $_POST["ficha"];


//conssulta para registrar

$insertar = "INSERT INTO red_de_medios(nombre, correo, contrasena, telefono, programa, ficha) VALUES ('$nombre',  '$correo', '$contrasena', '$telefono', '$programa', '$ficha')";
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM red_de_medios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_usuario) > 0){
    echo '<script> alert("El correo ya está Registrada"); window.history.go(-1); </script>';
    exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM red_de_medios WHERE contrasena= '$contrasena'");
if (mysqli_num_rows($verificar_correo) > 0){
    echo  '<script> alert("Usuario y contraseña ya esta Registrado"); window.history.go(-1); </script>';
    exit;
}
//ejecutar registro

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo '<script> alert("Error al Registrar");  </script>';
    
}
else{
    echo'<script> alert("El Usuario se a Registrado Exitosamente"); window.history.go(-2); </script>';
    
}
//cerra registro de datos


mysqli_close($conexion);



