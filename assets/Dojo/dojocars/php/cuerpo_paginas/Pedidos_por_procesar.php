<center>	
	<?php if ($idioma == "es") { ?><h1>Historial de Pedidos</h1><?php } else if ($idioma == "en"){ ?><h1>Purchase History</h1><?php } ?>
</center>

    <BR><BR><br><BR><BR><br>
 <center>

	 <a style="font-size:1.7rem" href="tu_perfil.php?op=Pedidos_recibidos" ><input type="button" id="boton_generico" value="<?php if ($idioma == "es") { ?>Pedidos pagados por enviar<?php } else if ($idioma == "en"){ ?> Orders paid to ship <?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<a style="font-size:1.7rem" href="tu_perfil.php?op=Pedidos_no_pagados" ><input type="button" id="boton_generico" value="<?php if ($idioma == "es") { ?>Pedidos no pagados<?php } else if ($idioma == "en"){ ?>Unpaid Orders <?php } ?> "></a>

 </center>

    <BR><BR><br><BR><BR><br>


<hr><hr>
 

