<HTML>
<HEAD>
	<TITLE> FORMULARIO DE REGISTRO - EGEM </TITLE>
</HEAD>

 <meta charset="UTF-8" />
 <LINK href="style.css" rel="stylesheet" type="text/css">

<BODY>

<center>
<DIV>
<FORM method="post" action="usuario.php"> <BR>

<B style="font-size: 30px; color: #E6AF8E;"> Regístrate en MI TELMEX </B> <BR>
<B style="font-size: 26px; color: gainsboro;"> y disfruta de muchos beneficios. </B> <BR> <BR>

	<input type="text" class="cajas" name="Nombre" placeholder="Nombre" required=""> <BR> <BR>
    <input type="text" class="cajas" name="Apellido" placeholder="Apellido" required=""> <BR> <BR>
	<input type="text" class="cajas" name="Telefono" placeholder="Tel&eacute;fono" required=""> <BR> <BR>
	<input type="text" class="cajas" name="Direccion" placeholder="Direcci&oacute;n" required=""> <BR> <BR>
	<input type="date" class="cajas" name="FN" placeholder="Fecha de Nacimiento" required=""> <BR> <BR>


<BUTTON class="btn" type="submit" name="registro" onclic="require">  Crear cuenta </BUTTON>

</FORM> 
<P style="color: gainsboro; font-size: 20px"> ESTRADA GALLEGOS EVELYN MARISOL | 5J | CBTIS 128. </P>

</DIV>
</center>
<?php
    include("usuario.php");
?>

</BODY>

</HTML>