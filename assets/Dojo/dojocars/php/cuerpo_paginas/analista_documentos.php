<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>

<h1><?php if ($idioma == "es") { ?>Panel de Gestion de Documentos y Mensajeria Interna<?php } elseif ($idioma == "en") { ?>Document Management and Internal Messaging Panel<?php } ?></h1>


<br><br><center>

<a href="tu_perfil.php?op=documentos_enviar_1"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Enviar Documentos y Mensajes<?php } elseif ($idioma == "en") { ?>Send Documents and Messages<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="tu_perfil.php?op=documentos_enviados"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Historico de Documentos y Mensajes<?php } elseif ($idioma == "en") { ?>Documents and Messages History<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;

</center>