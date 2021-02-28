<h2>GALERIA FOTOGRAFICA</h2><br><br>


	<?php 

$consulta_eve ="SELECT * FROM tatu_galeria_categoria   ORDER BY tatu_galeria_categoria DESC    " ;

$ejecutar_consulta_eve = $conexion->query($consulta_eve) or die ("No se ejecuto query");

 

while ($registro_eve = $ejecutar_consulta_eve->fetch_assoc())

{

	$id_tatu_galeria_categoria = $registro_eve["id_tatu_galeria_categoria"];

	$tatu_galeria_categoria = utf8_encode($registro_eve["tatu_galeria_categoria"]);

	  
	?>

	<div id="articulos">

		<a href="index.php?menu=galeria_2&id_tatu_galeria_categoria=<?php echo $id_tatu_galeria_categoria ?>&tatu_galeria_categoria=<?php echo $tatu_galeria_categoria ?>"><img src="img/Folder.png" width="100%"><br><br>


		  <center style="font-size: 1.5rem;"><?php echo strtoupper($tatu_galeria_categoria) ?> </center><br><br></a>
	</div>

	<?php
   
}


?>


	 