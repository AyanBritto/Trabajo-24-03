

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Formulario</title>

</head>
<body>
  <h3>Registro</h3>
<form action="" method="post" >


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Nombre</label>
    <input type="text" class="form-control"name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Apellido</label>
    <input type="text" name="apellido" class="form-control">
  </div>
   <!-- Checkbox -->
  <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3" >Fecha de Nacimiento</label>
    <input type="date" id="fenac" name="fecha" class="form-control" data-date-format="DD/MMM/YYY"/>
  </div>

  <button type="submit" name="btnenviar" class="btn btn-primary">enviar</button>
 
</form>

</body>
</html>
<?php 
session_start();

 //if(isset($_POST["btnenviar"])){
  
  
  

  $_SESSION['personas']=[];
   if (!$_POST){
        $_POST['nombre']= '';
        $_POST['apellido']= '';
        $_POST['fecha']= '';
    }
     $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $fecha=$_POST['fecha'];

   if (!empty($_POST['array'])){
       $datos= explode(",".$_POST['array']);
   }else{
       $datos=array();
   }
    array_push($datos, $nombre);
    array_push($datos, $apellido);
    array_push($datos, $fecha);
    $_SESSION['personas']= $datos;  
      function tabla(){
        echo "<table> <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nacimiento reloco</th>
        </tr>";
        
            for ($i=0; $i<count($_SESSION['personas']);$i=$i+3){
                echo "<tr>";
                echo "<th>".$_SESSION['personas'][$i]."</th>";
                echo "<th>".$_SESSION['personas'][$i+1]."</th>";
                echo "<th>".$_SESSION['personas'][$i+2]."</th>";
                echo "</tr>";
            } 
        echo "</table>";
    }
    function borrar(){
        session_destroy();
    }
  /*$personas=array($fila);
  echo "<table border ='1'>";
  echo "<tr><th> Nombre </th> <th> apellido </th> <th> Fecha de nacimiento </th></tr>";
  
  foreach ($personas as $fila) {
    echo "<tr>";
    foreach ($fila as $columna => $valor) {
      echo "<td>" . $valor . "</td> ";
    }
    echo "<tr>";
  }
  echo "</table>";
}
*/





 ?>