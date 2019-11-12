<?php

$conexion = mysqli_connect('localhost', 'glfjyjdulose', '4fp:Ne=dC$i@', 'red_de_medios');

if (!$conexion) {
    echo ' Error al conectar a la base de datos';
}
else{
    echo 'Conectado a la basa de batos';
}  
?>