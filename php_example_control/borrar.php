<?php
$conexion=mysqli_connect("localhost","root","","prueba") or
    die("Problemas con la conexión");

$id = $_POST['ID']; // Variable pasarela.

$registros=mysqli_query($conexion,"select *
                        from datos_personales where ID=$id") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  mysqli_query($conexion,"delete from datos_personales where ID=$id") or
    die("Problemas en el select:".mysqli_error($conexion));
  echo "Se efectuó el borrado correctamente.";
}
else
{
  echo "No existe un registro con ese id.";
}

echo "<form action='mostrar.php'>";
echo "<input type='submit' value='Volver'>";
echo "</form>";

mysqli_close($conexion);
?>