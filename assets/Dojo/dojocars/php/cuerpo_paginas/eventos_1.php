


 <BR><BR><BR><BR><BR>

 <center> <img width="40%"  src="img/titulo_eventos.png" > 
<BR><BR>
 
 



<?php 

$consulta_eve ="SELECT * FROM tatu_eventos ORDER BY fecha DESC    " ;

$ejecutar_consulta_eve = $conexion->query($consulta_eve) or die ("No se ejecuto query");

 

while ($registro_eve = $ejecutar_consulta_eve->fetch_assoc())

{

	$id_tatu_eventos_categoria = $registro_eve["id_tatu_eventos_categoria"];

	$id_tatu_eventos = $registro_eve["id_tatu_eventos"];

	$fecha = $registro_eve["fecha"];

	$descripcion = utf8_encode($registro_eve["descripcion"]);

	$hora =  $registro_eve['hora'] ;

	$titulo =  utf8_encode($registro_eve['titulo']) ;

	$flyer =  $registro_eve['flyer'] ;

	?>

	<div id="articulos">

		<a href="index.php?menu=event_descript&id_tatu_eventos=<?php echo $id_tatu_eventos ?>"><img src="img/evento/<?php echo $flyer ?>" width="100%"><br><br>


		  <center style="font-size: 2rem;"><?php echo strtoupper($titulo) ?> </center><br><br></a>
	</div>

	<?php
   
}


?>




</center>