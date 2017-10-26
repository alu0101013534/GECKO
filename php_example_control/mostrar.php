<h2>Insertar datos:</h2>

<form action="insertar.php" method="post">
  Nombre:<input type="text" name="Nombre"><br>
  NIF: <input type="text" name="NIF"><br>
  Nacido: <input type="date" name="Nacido"><br>
  Altura: <input type="number" step="0.01" name="Altura"><br>
  <input type="submit" value="Insertar">
</form>


<br>
<h2>Resultados:</h2>

<?php
$conexion=mysqli_connect("localhost","root","","prueba") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select *
                        from datos_personales") or
  die("Problemas en el select:".mysqli_error($conexion));



while ($reg=mysqli_fetch_array($registros))
{
  echo "<hr>";
  echo "<br>";
  echo "<form action='borrar.php' method='post'>";
  echo "<input type='hidden' name='ID' value='".$reg['id']."'>";

  echo "ID:<input type='number' value='".$reg['id']."'><br>";
  echo "Nombre:<input type='text' value='".$reg['Nombre']."'><br>";
  echo "NIF:<input type='text' value='".$reg['NIF']."'><br>";
  echo "Nacido:<input type='date' value='".$reg['Nacido']."'><br>";
  echo "Altura:<input type='number' step='0.01' value='".$reg['Altura']."'><br>";

  echo "<input type='submit' value='Borrar'>";
  echo "</form>";
  echo "<br>";
}
  echo "<hr>";

mysqli_close($conexion);
?>