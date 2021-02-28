 
<h1><?php if ($idioma == "es") { ?>Reembolsos Pendiente<?php } elseif ($idioma == "en") { ?>Pending refunds<?php } ?> </h1><br> 


<?php

 
	$consulta_2 ="SELECT * FROM reembolso WHERE id_usuario='$id_usuario'   ";

	$ejecutar_consulta_2 = $conexion->query($consulta_2) or die ("No se ejecuto query");

	$total = $ejecutar_consulta_2->num_rows;

	if ($total==0) {
		
		?>
		<br> 

		<h3>- <?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>No Hay Resultados Disponibles -</h3>

		<?php
	}

	else {

		?>

		<table style="width: 100%">

			<thead>
					<tr>

						
						
						<th style="width: 25%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Codigo<?php } elseif ($idioma == "en") { ?>Code<?php } ?> </th>

						<th style="width: 25%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Monto<?php } elseif ($idioma == "en") { ?>Amount<?php } ?> </th>
						 
						<th style="width: 25%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Estatus<?php } elseif ($idioma == "en") { ?>Status<?php } ?> </th>
 


					</tr>

			</thead>

			<tbody>

				<?php

				while ($registro2 = $ejecutar_consulta_2->fetch_assoc()) {

		 
 
				$id_reembolso = $registro2["id_reembolso"];

				$monto = $registro2["monto"];

				$status = $registro2["status"];

 
				
				?>

				<tr>

				<td><?php echo "0000".$id_reembolso ?> </td>

				<td><?php echo $monto ?> USD</td>

				<td><?php echo $status ?> </td>
 
				</tr>

				<?php

			}

			?>

			</tbody>

		</table>


<?php

}

?>
