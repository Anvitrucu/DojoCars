<?php 

$_SESSION["id_representante"]=$id_usuario;

?>


<script type="text/javascript">

function carga_tipo_boletin(str)
{
var xmlhttp;

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.redyStatae==4 && xmlhttp.status==200)
{
document.getElementById("div_tipo_boletin").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/funciones/carga_tipo_boletin.php?idioma=<?php echo $idioma ?>",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("boletin="+str);
}

</script>


<h1><?php if ($idioma == "es") { ?>Datos del Mensaje a Enviar<?php } elseif ($idioma == "en") { ?>Data of the Message to Send<?php } ?></h1>


<form id="form_perfil" name="form_perfil" action="php/funciones/enviar_documentos_a_asociados.php" method="POST" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">

	<textarea required="" rows="5" style="width: 60%; padding: 1%" name="mensaje_adjunto" placeholder="<?php if ($idioma == "es") { ?>Mensaje Adjunto<?php } elseif ($idioma == "en") { ?>Attached message<?php } ?>"></textarea><br><br> <br>

	 <?php if ($idioma == "es") { ?>Documento Adjunto(Solo PDF, JPG, PNG aceptados - No debe pesar mas de 2MB)<?php } elseif ($idioma == "en") { ?>Attached Document (Only PDF, JPG, PNG accepted - Must not weigh more than 2MB)<?php } ?><br><br><input type="file" name="documento"><br> 

	<input type="hidden" name="id_analista" value="<?php echo $id_usuario ?>"><br><br> 
	 



<center>


<select onchange="carga_tipo_boletin(this.value)" name="tipo_mensaje" style="width: 60%; padding: 2%" required="">
	<option value=""><?php if ($idioma == "es") { ?>Tipo de Mensaje a Enviar<?php } elseif ($idioma == "en") { ?>Type of Message to Send<?php } ?></option>

	<option value="1"><?php if ($idioma == "es") { ?>Enviar a un suscriptor o grupo de suscriptores<?php } elseif ($idioma == "en") { ?>Send to a subscriber or group of subscribers<?php } ?></option>
	<option value="2"><?php if ($idioma == "es") { ?>Enviar a todos los suscriptores<?php } elseif ($idioma == "en") { ?>Send to all subscribers<?php } ?></option>
	<option value="3"><?php if ($idioma == "es") { ?>Enviar a suscriptores por servicios<?php } elseif ($idioma == "en") { ?>Send subscribers for services<?php } ?></option>

</select>
	
 
		 <br><br><br>

		<div id="div_tipo_boletin" style="width: 100%"></div>


              
			<center>  <?php include("php/funciones/mensaje.php") ?> </center>
	 </form>  
