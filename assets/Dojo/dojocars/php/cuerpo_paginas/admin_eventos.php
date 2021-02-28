
<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>

<h1><?php if ($idioma == "es") { ?>Módulo de gestión de Eventos<?php } elseif ($idioma == "en") { ?>Event management module<?php } ?></h1>


<br><br><center>

<a href="tu_perfil.php?op=admin_categoria_eventos"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Categorias de Eventos<?php } elseif ($idioma == "en") { ?>Event management module<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="tu_perfil.php?op=admin_cargar_eventos"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Cargar Eventos<?php } elseif ($idioma == "en") { ?>Upload Events<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;           

</center>