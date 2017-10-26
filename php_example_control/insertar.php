<?php
$conexion=mysqli_connect("localhost","root","","prueba") or
    die("Problemas con la conexión");

// Variable pasarela.
$nombre = $_POST['Nombre'];
$nif = $_POST['NIF'];
$nacido = $_POST['Nacido'];
$altura = $_POST['Altura'];


mysqli_query($conexion,"insert into datos_personales(Nombre,NIF,Nacido,Altura) values 
                       ('$nombre','$nif','$nacido','$altura')")
  or die("Problemas en el select".mysqli_error($conexion));

echo "Se efectuó el insertado correctamente.";

mysqli_close($conexion);

echo "<form action='mostrar.php'>";
echo "<input type='submit' value='Volver'>";
echo "</form>";
?>