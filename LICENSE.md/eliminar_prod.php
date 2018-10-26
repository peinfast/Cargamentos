<?php
	Avanzada($_GET['Folio']);

	function Avanzada($Folio)
	{
		include 'conexion.php';
		$sentencia="SELECT * FROM folios WHERE Folio='".$Folio."' ";
		$result = mysqli_query($sentecia) or die(mysqli_error());
		echo '<script type="text/javascript">';

		while($row = mysqli_fetch_array($result)){

   		echo 'alert(\'' + $row[2] + '\');';
   		echo 'console.log(\'' + $row[2] + '\');';

		}
		echo '</script>';
?>
