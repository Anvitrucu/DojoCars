<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>

<h1><?php if ($idioma == "es") { ?>Panel de Mensajes<?php } elseif ($idioma == "en") { ?><?php } ?> </h1><br> 


<?php

	 $id_cliente = $id_usuario;

 

	$consulta_2 ="SELECT * FROM documentos_enviados_cesta WHERE id_cliente='$id_cliente' ORDER BY id_documentos_enviados_cesta DESC ";

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

						<th style="width: 25%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Analista<?php } elseif ($idioma == "en") { ?>Analyst<?php } ?> </th>
						 
						<th style="width: 25%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Fecha de Envio<?php } elseif ($idioma == "en") { ?>Shipping date<?php } ?> </th>

						<th style="width: 25%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Detalles<?php } elseif ($idioma == "en") { ?>Details<?php } ?> </th>


					</tr>

			</thead>

			<tbody>

				<?php

				while ($registro2 = $ejecutar_consulta_2->fetch_assoc()) {

					
				$id_documentos_enviados = $registro2["id_documentos_enviados"];

				$consulta_3 ="SELECT * FROM documentos_enviados WHERE id_documentos_enviados='$id_documentos_enviados'";

				$ejecutar_consulta_3 = $conexion->query($consulta_3) or die ("No se ejecuto query");

				$registro3 = $ejecutar_consulta_3->fetch_assoc();

		  

				$fecha_envio = date("d / m / Y", strtotime($registro3["fecha_envio"])) ;

				$mensaje_adjunto = $registro3["mensaje_adjunto"];

				$documento = $registro3["documento"];

				$id_analista = $registro3["id_analista"];


				$consulta_4 ="SELECT * FROM usuario WHERE id_usuario='$id_analista'";

				$ejecutar_consulta_4 = $conexion->query($consulta_4) or die ("No se ejecuto query");

				$registro4 = $ejecutar_consulta_4->fetch_assoc();


				$usuario_nombre = utf8_encode($registro4["usuario_nombre"]);
				
				?>

				<tr>

				<td><?php echo "0000".$id_documentos_enviados ?> </td>

				<td><?php echo $usuario_nombre ?> </td>

				<td><?php echo $fecha_envio ?> </td>

				<td><center><a id="boton_generico" href="tu_perfil.php?op=det_mens_user&id_documentos_enviados=<?php echo $id_documentos_enviados ?>&id_usuario=<?php echo $id_cliente ?>&tipo_mensaje=2"><?php if ($idioma == "es") { ?>Ver Mensaje<?php } elseif ($idioma == "en") { ?>See Message<?php } ?></a></center> </td>
								 
				</tr>

				<?php

			}

			?>

			</tbody>

		</table>


<?php

}

?>
