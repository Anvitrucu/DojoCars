

<div style="margin-left:5%">

<?php

	include ("php/funciones/conexion.php");

	?>
	<br><br>

	<a href="index.php?menu=mercadeo_artistas"><span class="logo"><img width="95.5%" style="margin-left:-10%%;  overflow: visible;" src="img/titulo_expositores.jpg"/></a></span><br><br>

	<?php

	$consulta_ultimos="SELECT * FROM clientes_destacados  ORDER BY id_clientes_destacados DESC LIMIT 4"; 

	$ejecutar_consulta_ultimos = $conexion->query($consulta_ultimos) or die ("No se ejecuto query");

	$num_regs =  $ejecutar_consulta_ultimos->num_rows;

	while ($registro = $ejecutar_consulta_ultimos->fetch_assoc())

			{
											
		?>
			
			<a href="index.php?menu=clientes&id=<?php echo $registro['id_clientes_destacados']?>">  <div id="articulos">
				<img width="90%"  src="img/cliente_destacado/<?php echo utf8_encode($registro['foto']) ?>" >	
				<p class="nombre_autor"><?php echo utf8_encode($registro['titulo']) ?> </p>

				<br><br></a>

			</div>

			</a>



<?php

			}			

?>


</div>
