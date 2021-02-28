<?php 

include ("php/Zebra_Pagination.php");

			 $resultados=5; // Cuantos se mostraran por pagina

			

			$paginacion = new Zebra_Pagination();

			// Bucle para determinar donde va a iniciar la busqueda

			if ( isset($_GET["page"]))

			{
				
				$inicio=($_GET["page"]-1)*$resultados;
			}

			else{
				$inicio=0;
			}
 

?>
<section id="Cuerpo_perfil">

 <p class='titulo'> Calificaciones Pendientes </p> <br>
<!--
<?php 

		include ("php/funciones/comprobar_usuario.php");

	  
 		 
		$consulta="SELECT * FROM factura WHERE id_comprador= '$id_usuario' AND calificacion_vendedor = NULL LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM factura WHERE id_comprador= '$id_usuario' AND calificacion_vendedor = NULL  "; 

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto querys");

		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto querys");


		$num_regs =  $ejecutar_consulta2->num_rows;


 
			if ($num_regs==0)

			{
				echo "<p class='subtitulo_central'>Usted aun no tiene pedidos por calificar</p>";
			}


				else

					{


								?>


								<table>

										<thead>
												<tr>

													
													
													<th>DATOS BÁSICOS</th>

													<th>DATOS DEL PROVEEDOR</th>

													<th>ACCION</th>
													 


												</tr>

										</thead>


										<tbody>


												<?php


												

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{

													 



													$id_productos = $registro["id_productos"];


													$con ="SELECT * FROM productos WHERE id_productos = '$id_productos';";
 
													$ejecutar_con = $conexion->query($con) or die ("No se ejecuto query");
													 
													$dato = $ejecutar_con ->fetch_assoc();

													$nombre_producto = $dato["nombre_producto"];



													$fecha_inicio_evento =  $registro["fecha_inicio_evento"];

													$fecha_fin_evento =  $registro["fecha_fin_evento"];

													$fecha_facturacion =  $registro["fecha_facturacion"];

													$direccion =  $registro["direccion"];




													$fecha_inicio_evento = date("d/m/Y", strtotime($fecha_inicio_evento));
													$fecha_fin_evento = date("d/m/Y", strtotime($fecha_fin_evento));
													$fecha_facturacion = date("d/m/Y", strtotime($fecha_facturacion));




													$consulta_user ="SELECT * FROM usuario WHERE id_usuario ='$id_vendedor'";

													$ejecutar_consulta_user = $conexion->query($consulta_user) or die ("No se ejecuto query");

													$arreglo = $ejecutar_consulta_user->fetch_assoc();



													$nombre_vendedor = $arreglo["usuario_nombre"];

													$correo_vendedor = $arreglo["correo"];

													$telefono_vendedor = $arreglo["telefono"];





													
													$cliente_telefono =  $registro["cliente_telefono"];

													$cliente_correo =  $registro["cliente_correo"];

													$cliente_nombre =  $registro["cliente_nombre"];

													?>
														 

													<tr>
														<td> 
														
														Servicio:<a href="index.php?menu=servicios&id=<?php echo $id_productos ?>"><b><?php echo $nombre_producto ?></a></b><br><br>
														Fecha de Inicio del Evento: <b><?php echo $fecha_inicio_evento ?></b><br><br>
														Fecha de Cierre del Evento: <b><?php echo $fecha_fin_evento ?></b><br><br>
														Fecha de Pedido: <b><?php echo $fecha_facturacion ?></b><br><br>
														
														 </td>

														<td>
														
														Nombre: <b><?php echo $nombre_vendedor  ?></b><br><br>
														Correo: <b><?php echo $correo_vendedor ?></b><br><br>
														teléfono: <b><?php echo $telefono_vendedor ?></b><br><br>
														 
														
														
														  </td>

														<td> <center><a  target="_blank" href="php/funciones/imprimir_comprobante.php?id_pedido=<?php echo $registro['id_factura'] ?>"> IMPRIMIR ORDEN </a> </a></td>

														 


 
														 
														
													



													</tr>


													<?php

												}




												?>



										</tbody>



								</table>


						 <?php



				$total_articulos = $num_regs;

	$paginacion -> records($total_articulos);

	$paginacion-> records_per_page($resultados);

	echo "<br><br>";

	$paginacion->render();

	echo "<br><br><br>";

							}

// Sigue funcion de paginacion que viene del archivo articulos.php



 

		
						?>
-->

<p class="titulo" style="font-size:1.1rem">El panel de calificación, estará disponible a partir del próximo 20 de Abril</p>
</section>