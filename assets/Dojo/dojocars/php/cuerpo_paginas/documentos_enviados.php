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
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("div_tipo_boletin").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/funciones/carga_tipo_boletin_enviados.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("boletin="+str);
}

</script>


<h1><?php if ($idioma == "es") { ?>Datos del Mensaje Enviado<?php } elseif ($idioma == "en") { ?>Message Data Sent<?php } ?></h1>


<form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">

	 
	<input type="hidden" name="id_analista" value="<?php echo $id_usuario ?>">

	<input type="hidden" name="op" value="documentos_enviados_2"> 
	 



<center>


<select onchange="carga_tipo_boletin(this.value)" name="tipo_mensaje" style="width: 60%; padding: 2%" required="">
	<option value=""><?php if ($idioma == "es") { ?>Tipo de Mensaje Enviado<?php } elseif ($idioma == "en") { ?>Type of Message Sent<?php } ?></option>

	<option value="1"><?php if ($idioma == "es") { ?>Enviado a un suscriptor o grupo de suscriptores<?php } elseif ($idioma == "en") { ?>Sent to a subscriber or group of subscribers<?php } ?></option>
	<option value="2"><?php if ($idioma == "es") { ?>Enviado a todos los suscriptores<?php } elseif ($idioma == "en") { ?>Sent to all subscribers<?php } ?></option>
	<option value="3"><?php if ($idioma == "es") { ?>Enviado a suscriptores por servicios<?php } elseif ($idioma == "en") { ?>Sent to subscribers for services<?php } ?></option>

</select>
	
 
		 <br><br><br>

		<div id="div_tipo_boletin" style="width: 100%"></div>


              
			<center>  <?php include("php/funciones/mensaje.php") ?> </center>
	 </form>  
