<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>

<h1><?php if ($idioma == "es") { ?>Panel de Gestion de Suscriptores<?php } elseif ($idioma == "en") { ?>Subscriber Management Panel<?php } ?></h1>


<br><br><center>

<a href="tu_perfil.php?op=analista_cargar_suscriptores"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Cargar Suscriptores<?php } elseif ($idioma == "en") { ?>Upload Subscribers<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="tu_perfil.php?op=analista_suscritores_suscriptores"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Gestionar Suscriptores<?php } elseif ($idioma == "en") { ?>Manage Subscribers<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;

</center>