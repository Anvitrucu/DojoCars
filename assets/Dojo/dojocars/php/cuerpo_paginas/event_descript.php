<fieldset><?php

session_start();

include ("php/funciones/conexion.php");
 
$id_tatu_eventos = $_GET['id_tatu_eventos'];

 

$consulta="SELECT * FROM tatu_eventos WHERE id_tatu_eventos = '$id_tatu_eventos';";
 
$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");
 
$registro = $ejecutar_consulta ->fetch_assoc();

$id_tatu_eventos_categoria = $registro["id_tatu_eventos_categoria"];

$fecha = $registro["fecha"];

$descripcion = utf8_encode($registro["descripcion"]);

$hora =  $registro['hora'] ;

$titulo =  $registro['titulo'] ;

$flyer =  $registro['flyer'] ;

 
?>




 


<div id="foto_producto" >

	<img src="img/evento/<?php echo $flyer ?>" width="90%">
 
</div>















 


<div id="datos_producto" style="-moz-box-shadow: 10px 10px 32px #4d4d4d;
-webkit-box-shadow: 10px 10px 32px #4d4d4d;
box-shadow: 10px 10px 32px #4d4d4d; padding:2%">

		
 
		 <p class="titulo" >  <?php    echo nl2br(utf8_encode($titulo))."<br><br>";   ?>  </p> 

		 


		 <b><?php if ($idioma == "es") { ?>Fecha:<?php } elseif ($idioma == "en") { ?>Date:<?php } ?> </b><?php echo "".nl2br(utf8_encode($fecha))."<br><br>";?> 

		 <b><?php if ($idioma == "es") { ?>Hora:<?php } elseif ($idioma == "en") { ?>Hour:<?php } ?> </b><?php echo "".nl2br(utf8_encode($hora))."<br><br>"; ?> 

		 <b><?php if ($idioma == "es") { ?>Detalles:<?php } elseif ($idioma == "en") { ?>Details:<?php } ?> </b><?php echo "".nl2br(utf8_encode($descripcion))."<br><br>"; ?> 




		  



		 <br><br>

		<input type="hidden" id="nombre_producto" name="nombre_producto"  value ="<?php echo utf8_encode ($titulo) ?>" required/> 

		<input type="hidden" id="nombre_producto" name="vendedor"  value ="<?php echo utf8_encode ($registro['vendedor']) ?>" required/> 

 
 



 


		</center>

		 
		  


</div>

<br><br><br>


















 
 








<div id="monto_pago">
 <br>

<br><img width="100%" src="img/barra.jpg"><br>


 
 
 

 </fieldset>