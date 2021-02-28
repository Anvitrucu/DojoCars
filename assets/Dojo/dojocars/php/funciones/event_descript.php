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

$hora =  $_GET['hora'] ;

$titulo =  $_GET['titulo'] ;

$flyer =  $_GET['flyer'] ;

 
?>




 


<div id="foto_producto" >

	<img src="img/evento/<?php echo $flyer ?>" width="100%">
 
</div>















 


<div id="datos_producto" style="-moz-box-shadow: 10px 10px 32px #4d4d4d;
-webkit-box-shadow: 10px 10px 32px #4d4d4d;
box-shadow: 10px 10px 32px #4d4d4d; padding:2%">

		
 
		 <p class="titulo" >

		 <?php  

			   echo nl2br(utf8_encode($registro['nombre_1']))."<br><br>"; 

 

		 ?>
		 	


		 </p> <br><br>

		<input type="hidden" id="nombre_producto" name="nombre_producto"  value ="<?php echo utf8_encode ($registro['nombre_producto']) ?>" required/> 

		<input type="hidden" id="nombre_producto" name="vendedor"  value ="<?php echo utf8_encode ($registro['vendedor']) ?>" required/> 

 
		 

	 ddd

		



 


		</center>

		 
		  


</div>

<br><br><br>


















 
 








<div id="monto_pago">
 <br>

<br><img width="100%" src="img/barra.jpg"><br>


 
 
 

 </fieldset>