
<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>

<h1><?php if ($idioma == "es") { ?>Panel de Gestion de Documentos y Mensajeria Interna<?php } elseif ($idioma == "en") { ?>Document Management and Internal Messaging Panel<?php } ?></h1>


<br><br><center>

<a href="tu_perfil.php?op=analistas_pagos_1"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Solicitar Pagos<?php } elseif ($idioma == "en") { ?>Request Payments<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="tu_perfil.php?op=analistas_pagos_solicitudes"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Estado de Solicitudes<?php } elseif ($idioma == "en") { ?>Status of Requests<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;

</center>


