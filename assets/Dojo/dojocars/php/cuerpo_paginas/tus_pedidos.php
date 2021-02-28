<center>
	<?php if ($idioma == "es") { ?><h1>Historial de Pedidos</h1><?php } else if ($idioma == "en"){ ?><h1>Purchase History</h1><?php } ?>
 


 
<?php 

if ($nivel_usuario==3)

{
	?>

	<br><br>
	<center> <a style="font-size:1.7rem" href="tu_perfil.php?op=Reservas_realizadas" ><input type="button" id="boton_generico" value="<?php if ($idioma == "es") { ?> Tus Ordenes <?php } else if ($idioma == "en"){ ?>Your Orders<?php } ?>"></a></center>

	<?php
}

else if ($nivel_usuario==2)

{

	?>
<br><br><br> 
	<a style="font-size:1.7rem" href="tu_perfil.php?op=Pedidos_por_procesar" ><input type="button" id="boton_generico" value="<?php if ($idioma == "es") { ?> Pedidos por procesar <?php } else if ($idioma == "en"){ ?>Requests for processing <?php } ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<a style="font-size:1.7rem" href="tu_perfil.php?op=pedidos_archivados" ><input type="button" id="boton_generico" value="<?php if ($idioma == "es") { ?>Pedidos Archivados<?php } else if ($idioma == "en"){ ?>Archived Orders<?php } ?>"></a>


<br><br>
	<?php
}
    

    ?>

    <BR><BR><br>


<hr><hr>





 