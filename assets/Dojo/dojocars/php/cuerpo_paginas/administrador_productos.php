
<center>
	<?php if ($idioma == "es") { ?><h1>Bienvenido al Administrador de tu Agenda Virtual</h1><?php } else if ($idioma == "en"){ ?><h1>Welcome to the Administrator of your Virtual Agenda</h1><?php } ?>
	
<br><br> 

<?php

if ($nivel_usuario==2) {
	?>

	<a style="font-size:1.7rem" href="tu_perfil.php?op=administrador_categorias" ><input type="button" id="boton_generico" value="<?php if ($idioma == "es") { ?>Categoria de Servicios<?php } else if ($idioma == "en"){ ?>Category of Services<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



	<?php
}

?>




<a style="font-size:1.7rem" href="tu_perfil.php?op=cargar_servicios" ><input type="button" id="boton_generico" value="<?php if ($idioma == "es") { ?>Agendar Servicios<?php } else if ($idioma == "en"){ ?>Load Service <?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<a style="font-size:1.7rem" href="tu_perfil.php?op=servicios_cargados" ><input type="button" id="boton_generico" value="<?php if ($idioma == "es") { ?>Servicios Cargados<?php } else if ($idioma == "en"){ ?>Charged Services<?php } ?>"></a>





</center>

<br><br><br><br>





