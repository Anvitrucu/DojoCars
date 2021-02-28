 
<center>
	<?php if ($idioma == "es") { ?><h1>Bienvenido a tu panel administrativo</h1><?php } else if ($idioma == "en"){ ?><h1>Welcome to your C- Panel</h1><?php } ?><br><br>

	<?php 

	if ($nivel_usuario!=4) {
		  if ($idioma == "es") { ?><h3>Seleccione del panel Lateral la opcion a consultar</h3><?php } else if ($idioma == "en"){ ?><h3>Select from the Side panel the option to consult</h3><?php }  
	}

	else {

		?>

		<a href="index.php?menu=profile&id=<?php echo $id_de_usuario ?>"><input type="button" id="boton_generico" value="Visita tu Ficha Técnica"></a> &nbsp;&nbsp;&nbsp;

		<a href="tu_perfil.php?op=datos_basicos"><input type="button" id="boton_generico" value="Actualiza tu Ficha Técnica"></a>

		<?php
	}


	?>


	<br><br>

	
</center>
 

