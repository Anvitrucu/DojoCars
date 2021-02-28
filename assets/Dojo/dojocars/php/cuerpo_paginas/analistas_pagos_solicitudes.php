<h1><?php if ($idioma == "es") { ?>Panel de Pagos Enviados<?php } elseif ($idioma == "en") { ?>Paid Payments Panel<?php } ?> </h1><br> 

<form action="tu_perfil.php" method="GET"><center>

	<input type="hidden" name="op" value="analistas_pagos_solicitudes">

	<select name="tipo_busqueda" style="width: 50%; padding: 1%">
		<option value="1"><?php if ($idioma == "es") { ?>Buscar Todos Los Resultados<?php } elseif ($idioma == "en") { ?>Search All Results<?php } ?></option>
		<option value="2"><?php if ($idioma == "es") { ?>Pagos Pendientes<?php } elseif ($idioma == "en") { ?>Pending payments<?php } ?></option>
		<option value="3"><?php if ($idioma == "es") { ?>Pagos Verificados<?php } elseif ($idioma == "en") { ?>Verified Payments<?php } ?></option>
	</select>

	<br><br>

	<input type="text" name="codigo" style="width: 50%" placeholder="<?php if ($idioma == "es") { ?>Codigo del Pago<?php } elseif ($idioma == "en") { ?>Payment Code<?php } ?>"><br><br>
	<input type="submit" id="boton_generico" value="<?php if ($idioma == "es") { ?>Filtrar Resultados<?php } elseif ($idioma == "en") { ?>Filter results<?php } ?>"><br><br>
</form>


<?php

if (isset($_GET["tipo_busqueda"])) {
 


	$id_analista = $id_usuario;



	
	 
 	if ($_GET["tipo_busqueda"]=="1") {

 		if ($_GET["codigo"]=="") {


 			
 			$consulta_2 ="SELECT * FROM pagos_enviados_cestas WHERE id_analista='$id_analista'  ";
 		}

 		else {

 			$codigo = $_GET["codigo"];

 			$consulta_2 ="SELECT * FROM pagos_enviados_cestas WHERE id_analista='$id_analista' AND codigo = '$codigo' ";

 		}

 		

 	}

 	else if ($_GET["tipo_busqueda"]=="2") {

 		if ($_GET["codigo"]=="") {


 			
 			$consulta_2 ="SELECT * FROM pagos_enviados_cestas WHERE id_analista='$id_analista' AND ( status='Pendiente' OR  status='Verificando_pago' ) ";
 		}

 		else {

 			$codigo = $_GET["codigo"];

 			$consulta_2 ="SELECT * FROM pagos_enviados_cestas WHERE id_analista='$id_analista' AND ( status='Pendiente' OR  status='Verificando_pago' ) AND codigo = '$codigo'";

 		}


 		

 	}

 	else if ($_GET["tipo_busqueda"]=="3") {

 		if ($_GET["codigo"]=="") {


 			
 		$consulta_2 ="SELECT * FROM pagos_enviados_cestas WHERE id_analista='$id_analista' AND  status='Aprobado'   ";
 		}

 		else {

 			$codigo = $_GET["codigo"];

 			$consulta_2 ="SELECT * FROM pagos_enviados_cestas WHERE id_analista='$id_analista' AND  status='Aprobado' AND codigo = '$codigo'   ";

 		}
 
 	}

 

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

						
						
						<th style="width: 15%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Codigo<?php } elseif ($idioma == "en") { ?>Code<?php } ?> </th> 
						 
						<th style="width: 55%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Cliente<?php } elseif ($idioma == "en") { ?>Client<?php } ?> </th>

						 

						<th style="width: 35%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Accion<?php } elseif ($idioma == "en") { ?>Action<?php } ?> </th>


					</tr>

			</thead>

			<tbody>

				<?php

				while ($registro2 = $ejecutar_consulta_2->fetch_assoc()) {

					
				$codigo = $registro2["codigo"];

				$id_pagos_enviados_cestas = $registro2["id_pagos_enviados_cestas"];

				$id_analista = $registro2["id_analista"];

				$negado_motivo = $registro2["negado_motivo"];

				$pago_adjunto = $registro2["pago_adjunto"];

				$fecha_pago = $registro2["fecha_pago"];

				$status = $registro2["status"];

				$id_cliente = $registro2["id_cliente"];

				$id_pagos_enviados = $registro2["id_pagos_enviados"];


				$consulta_3 ="SELECT * FROM pagos_enviados WHERE id_pagos_enviados='$id_pagos_enviados'";

				$ejecutar_consulta_3 = $conexion->query($consulta_3) or die ("No se ejecuto query");

				$registro3 = $ejecutar_consulta_3->fetch_assoc();
 

				$monto = $registro3["monto"];

				$id_analista = $registro3["id_analista"];

				$concepto = $registro3["concepto"];

				$fecha_envio = date("d / m / Y", strtotime($registro3["fecha_envio"])) ;


				$consulta_4 ="SELECT * FROM usuario WHERE id_usuario='$id_cliente'";

				$ejecutar_consulta_4 = $conexion->query($consulta_4) or die ("No se ejecuto query");

				$registro4 = $ejecutar_consulta_4->fetch_assoc();


				$cliente = utf8_encode($registro4["usuario_nombre"]);
				
				?>

				<tr>

				<td><?php echo  $codigo ?> </td>

				<td>

					<?php if ($idioma == "es") { ?>Monto<?php } elseif ($idioma == "en") { ?>Rode<?php } ?>: <?php echo $monto ?> <br><br>

					<?php if ($idioma == "es") { ?>Cliente<?php } elseif ($idioma == "en") { ?>Client<?php } ?>: <?php echo $cliente ?> <br><br>

					<?php if ($idioma == "es") { ?>Concepto<?php } elseif ($idioma == "en") { ?>Concept<?php } ?>: <?php echo $concepto ?> <br><br>


					<?php if ($idioma == "es") { ?>Fecha emision<?php } elseif ($idioma == "en") { ?>Broadcast date<?php } ?>: <?php echo $fecha_envio ?> <br><br>
				</td>
 

				<td><center>

					<?php 

					 



					if ($status=="Pendiente" OR $status=="Verificando_pago") {
						
						?>

						<?php 

							if ($pago_adjunto!="" AND !is_null($pago_adjunto)) {

								?>

								<a href="img/pago_adjunto/<?php echo $pago_adjunto ?>"><?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?>Imprimir comprobante<?php } ?><?php if ($idioma == "es") { ?>Print voucher<?php } elseif ($idioma == "en") { ?><?php } ?></a>

								<?php
								
							}

							

						?>

						<script type="text/javascript">
							
							function condicional(valor){

								if (valor=="Negado") {
									document.getElementById('motivo_negado').innerHTML="<input type='text' placeholder='Motivo de Rechazo' name='negado_motivo'><br><br>";
								}

							}
						</script>

						<form action="php/funciones/actualizar_pago.php" method="GET"><center>
						<select name="tipo_busqueda" style="width: 50%" onchange="condicional(this.value)">
							<option value=""><?php if ($idioma == "es") { ?>Seleccione<?php } elseif ($idioma == "en") { ?>Select<?php } ?></option>
							<option value="Aprobado"><?php if ($idioma == "es") { ?>Aprobar Pago<?php } elseif ($idioma == "en") { ?>Approve Payment<?php } ?></option>
							<option value="Negado"><?php if ($idioma == "es") { ?>Negar Pago<?php } elseif ($idioma == "en") { ?>Deny Payment<?php } ?></option>
							<option value="3"><?php if ($idioma == "es") { ?>Eliminar Cobro<?php } elseif ($idioma == "en") { ?>Remove Collection<?php } ?></option>
						</select><br><br>

						<input type="hidden" name="id_pagos_enviados_cestas" value="<?php echo $id_pagos_enviados_cestas ?>">

						<div id="motivo_negado" style="width: 100%"></div>

						 
						<input type="submit" id="boton_generico" value="<?php if ($idioma == "es") { ?>Procesar Pago<?php } elseif ($idioma == "en") { ?>Process Payment<?php } ?>"><br><br>
						</form>

						<?php
					}

					else if ($status=="Negado" ) {
						
						?>

						<center>- <?php if ($idioma == "es") { ?>Pago Negado<?php } elseif ($idioma == "en") { ?>Payment denied<?php } ?> -</center>

						<?php
					}

					else if ($status=="Aprobado" ) {
						
						?>

						<center>- <?php if ($idioma == "es") { ?>Pago Aprobado<?php } elseif ($idioma == "en") { ?>Approved Payment<?php } ?> -</center>

						<?php
					}

					?>

					 


				</center> </td>
								 
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
