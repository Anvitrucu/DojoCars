<?php 

$tatu_galeria_categoria = $_GET["tatu_galeria_categoria"];

$id_tatu_galeria_categoria = $_GET["id_tatu_galeria_categoria"];

?>

<h2 style="text-decoration: none">- <?php echo strtoupper( $tatu_galeria_categoria)  ?>- </h2> 


	<?php 

$consulta_eve ="SELECT * FROM tatu_galeria  WHERE  id_tatu_galeria_categoria='$id_tatu_galeria_categoria'  ORDER BY id_tatu_galeria DESC    " ;

$ejecutar_consulta_eve = $conexion->query($consulta_eve) or die ("No se ejecuto query");

$arreglo_total = $ejecutar_consulta_eve->num_rows;

if ($arreglo_total==0) {
	echo "<center>- NO HAY RESULTADOS DISPONIBLES -</center>";
}

else {


			while ($registro_eve = $ejecutar_consulta_eve->fetch_assoc())

			{

			$id_tatu_galeria = $registro_eve["id_tatu_galeria"];

			 $foto = $registro_eve["foto"];


			?>

			<div id="articulos">

			<a   href="img/galeria/<?php echo $foto  ?>"><img src="img/galeria/<?php echo $foto  ?>" width="100%"></a>
			</div>

			<?php

}

}


?>
 

 




	 












