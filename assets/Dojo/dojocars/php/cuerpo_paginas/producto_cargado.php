<?php 

$id = $_GET["id"];

?>
<center>
	
	<?php if ($idioma == "es") { ?><h1>Su Servicio ha Sido Agendado con Éxito</h1><?php } else if ($idioma == "en"){ ?><h1>Your Service Has Been Loaded Successfully</h1><?php } ?>

 

<br><br><br> 
<a style="margin-left:8%;  " href="tu_perfil.php?op=modificar_servicio&id=<?php echo $id ?>" id="boton_generico">
<?php if ($idioma == "es") { ?>Modificar Servicio<?php } else if ($idioma == "en"){ ?> 
Modify Product <?php } ?>

</a>   

   <a style="margin-left:6%; " href="tu_perfil.php?op=servicios_cargados" id="boton_generico">

				<?php if ($idioma == "es") { ?>Servicio Cargados<?php } else if ($idioma == "en"){ ?> Loaded Services  <?php } ?>
  
   </a>


<a style="margin-left:6%;  " href="tu_perfil.php?op=cargar_servicios" id="boton_generico">

				<?php if ($idioma == "es") { ?> Agendar Nuevo Servicio <?php } else if ($idioma == "en"){ ?>Load New Service<?php } ?>

</a>

<br><br><br><br>