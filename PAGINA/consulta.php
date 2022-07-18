
<?php
/*  Mandamos a llamar  nuestra conexion de php  con require */
require ('./DB/conexion.php');
/* Declaramos una variable y dentro de ella asignamos una consulta */
  $sql = "SELECT * FROM `productos`;";

  $result = mysqli_query($conexion, $sql);
  
  $productos = array();
  while ($fila = mysqli_fetch_array($result)) {
    array_push($productos, $fila);
  }
  
  echo json_encode($productos);

  mysqli_free_result($result);
  mysqli_close($conexion);
  

?>