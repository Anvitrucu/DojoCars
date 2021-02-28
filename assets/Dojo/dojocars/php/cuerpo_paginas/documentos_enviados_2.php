<br><a href="tu_perfil.php?op=documentos_enviados" style="font-size: 1rem" id="boton_generico">< &nbsp;&nbsp;<?php if ($idioma == "es") { ?>Volver<?php } elseif ($idioma == "en") { ?>Back<?php } ?></a><br><br>

<h1><?php if ($idioma == "es") { ?>Listado de Resultados<?php } elseif ($idioma == "en") { ?>Results List<?php } ?></h1>






				


						

<?php 

$tipo_mensaje = $_GET["tipo_mensaje"];

if ($tipo_mensaje==1) {
	

	$id_cliente = $_GET["id_usuario"];

	$consulta_2 ="SELECT * FROM documentos_enviados_cesta WHERE id_cliente='$id_cliente'";

	$ejecutar_consulta_2 = $conexion->query($consulta_2) or die ("No se ejecuto query");

	$total = $ejecutar_consulta_2->num_rows;

	if ($total==0) {
		
		?>
		<br> 

		<h3>- <?php if ($idioma == "es") { ?>No Hay Resultados Disponibles<?php } elseif ($idioma == "en") { ?>No Results Available<?php } ?> -</h3>

		<?php
	}

	else {

		?>

		<table style="width: 100%">

			<thead>
					<tr>

						
						
						<th style="width: 33%" class="titulos_perfil">  </th>
						 
						<th style="width: 33%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Fecha de Envio<?php } elseif ($idioma == "en") { ?>Shipping date<?php } ?> </th>

						<th style="width: 33%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Detalles<?php } elseif ($idioma == "en") { ?>Details<?php } ?> </th>


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

				$id_curso = $registro3["id_curso"];
				
				?>

				<tr>

				<td><?php echo "0000".$id_documentos_enviados ?> </td>

				<td><?php echo $fecha_envio ?> </td>

				<td><center><a id="boton_generico" href="tu_perfil.php?op=detalles_mensaje&id_documentos_enviados=<?php echo $id_documentos_enviados ?>&id_usuario=<?php echo $id_cliente ?>&tipo_mensaje=1"><?php if ($idioma == "es") { ?>Ver Mensaje<?php } elseif ($idioma == "en") { ?>See Message<?php } ?></a></center> </td>
								 
				</tr>

				<?php

			}

			?>

			</tbody>

		</table>

		
 

		<?php
	}

}












else if ($tipo_mensaje==2) {
		
	 $id_cliente = $_GET["id_usuario"];

	 $id_analista = $_GET["id_analista"];

	$consulta_2 ="SELECT * FROM documentos_enviados_cesta WHERE id_analista='$id_analista' ";

	$ejecutar_consulta_2 = $conexion->query($consulta_2) or die ("No se ejecuto query");

	$total = $ejecutar_consulta_2->num_rows;

	if ($total==0) {
		
		?>
		<br> 

		<h3>- No Hay Resultados Disponibles -</h3>

		<?php
	}

	else {

		?>

		<table style="width: 100%">

			<thead>
					<tr>

						
						
						<th style="width: 33%" class="titulos_perfil"> Codigo </th>
						 
						<th style="width: 33%" class="titulos_perfil"> Fecha de Envio </th>

						<th style="width: 33%" class="titulos_perfil"> Detalles </th>


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

				$id_curso = $registro3["id_curso"];
				
				?>

				<tr>

				<td><?php echo "0000".$id_documentos_enviados ?> </td>

				<td><?php echo $fecha_envio ?> </td>

				<td><center><a id="boton_generico" href="tu_perfil.php?op=detalles_mensaje&id_documentos_enviados=<?php echo $id_documentos_enviados ?>&id_usuario=<?php echo $id_cliente ?>&tipo_mensaje=2">Ver Mensaje</a></center> </td>
								 
				</tr>

				<?php

			}

			?>

			</tbody>

		</table>

		
 

		<?php
	}
}
















else if ($tipo_mensaje==3) {

	$id_productos = $_GET["id_productos"];
	

	$consulta_2 ="SELECT * FROM documentos_enviados WHERE id_curso ='$id_productos'  ";

	$ejecutar_consulta_2 = $conexion->query($consulta_2) or die ("No se ejecuto query");

	$total = $ejecutar_consulta_2->num_rows;

	if ($total==0) {
		
		?>
		<br> 

		<h3>- No Hay Resultados Disponibles -</h3>

		<?php
	}

	else {

		?>

		<table style="width: 100%">

			<thead>
					<tr>

						
						
						<th style="width: 33%" class="titulos_perfil"> Codigo </th>
						 
						<th style="width: 33%" class="titulos_perfil"> Fecha de Envio </th>

						<th style="width: 33%" class="titulos_perfil"> Detalles </th>


					</tr>

			</thead>

			<tbody>

				<?php

				while ($registro3 = $ejecutar_consulta_2->fetch_assoc()) {

		  

				$fecha_envio = date("d / m / Y", strtotime($registro3["fecha_envio"])) ;

				$mensaje_adjunto = $registro3["mensaje_adjunto"];

				$documento = $registro3["documento"];

				$id_analista = $registro3["id_analista"];

				$id_curso = $registro3["id_curso"];

				$id_documentos_enviados = $registro3["id_documentos_enviados"];
				
				?>

				<tr>

				<td><?php echo "0000".$id_documentos_enviados ?> </td>

				<td><?php echo $fecha_envio ?> </td>

				<td><center><a id="boton_generico" href="tu_perfil.php?op=detalles_mensaje&id_documentos_enviados=<?php echo $id_documentos_enviados ?>&id_productos=<?php echo $_GET["id_productos"] ?>&tipo_mensaje=3">Ver Mensaje</a></center> </td>
								 
				</tr>

				<?php

			}

			?>

			</tbody>

		</table>

		
 

		<?php
	}

}


?>




						




<form id="form_perfil" name="form_perfil" action="tu_perfil.php?op=documentos_enviados_2" method="POST" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">

</form>

