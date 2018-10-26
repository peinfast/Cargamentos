<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo de interaccion con DB</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">

  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>

  <div id="contenido">
  	<table style="margin: auto; width: 1000px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>Folio</th>
  			<th>Cliente</th>
  			<th>Marca</th>
  			<th>Destino</th>
        <th>Servicio</th>
        <th>Estatus</th>
        <th>Observaciones</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM folios";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['Folio']; echo "</td>";
            echo "<td>"; echo $fila['Cliente']; echo "</td>";
            echo "<td>"; echo $fila['Marca']; echo "</td>";
            echo "<td>"; echo $fila['Destino']; echo "</td>";
            echo "<td>"; echo $fila['Servicio']; echo "</td>";
            echo "<td>"; echo $fila['Estatus']; echo "</td>";
            echo "<td>"; echo $fila['Observaciones']; echo "</td>";
            echo "<td><a href='modif_prod1.php?Folio=".$fila['Folio']."'> <button type='button' class='btn btn-success'>Modificar Estado</button> </a></td>";
            echo " <td><a href='eliminar_prod.php?Folio=".$fila['Folio']."'> <button type='button' class='btn btn-sucess'>Busqueda Avanzada</button> </a></td>";
          echo "</tr>";
        }
      ?>



  	</table>
  </div>

	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>
