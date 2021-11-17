<LINK href="style.css" rel="stylesheet" type="text/css">

<?php

include("con_db.php");

if (isset($_POST['registro'])) {
    if (strlen($_POST['Nombre']) >= 1 
	&& strlen($_POST['Apellido']) >= 1 
	&& strlen($_POST['Telefono']) >= 1
	&& strlen($_POST['Direccion']) >= 1
	&& strlen($_POST['FN']) >= 1) {

	    $Nombre = trim($_POST['Nombre']);
	    $Apellido = trim($_POST['Apellido']);
		$Telefono = trim($_POST['Telefono']);
		$Direccion = trim($_POST['Direccion']);
		$FechaNac = trim($_POST['FN']);

	    $consulta = "INSERT INTO usuario(Nombre, Apellido, Telefono, Direccion, FechaDeNacimiento) 
		VALUES ('$Nombre','$Apellido','$Telefono','$Direccion','$FechaNac')";
	    $resultado = mysqli_query($conex,$consulta);
		

		if ($resultado) {
	    	?> 
	    	<h3 class="ok"> Los datos se registraron correctamente. :) </h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="okcomputeroknotok"> OOPS! parece que ha ocurrido un error. Vuelva a ingresar los datos. </h3>
           <?php
	    }
    } 
}
    
?>