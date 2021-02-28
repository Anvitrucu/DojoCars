<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>
<h1><?php if ($idioma == "es") { ?>Módulo de gestión de citas<?php } elseif ($idioma == "en") { ?>Appointment management module<?php } ?></h1>


<br><br><center>

<a href="tu_perfil.php?op=admin_proximas_citas"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Próximas Citas<?php } elseif ($idioma == "en") { ?>Upcoming Appointments<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="tu_perfil.php?op=admin_historico_citas"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Histórico de Citas<?php } elseif ($idioma == "en") { ?>Dating History<?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;

</center>