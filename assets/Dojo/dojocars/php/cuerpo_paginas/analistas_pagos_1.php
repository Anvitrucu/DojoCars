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
xmlhttp.open("POST","php/funciones/carga_tipo_boletin.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("boletin="+str);
}

</script>


<h1><?php if ($idioma == "es") { ?>Solicitar Cobros<?php } elseif ($idioma == "en") { ?>Request Collections<?php } ?></h1>


<form id="form_perfil" name="form_perfil" action="php/funciones/enviar_pagos_a_asociados.php" method="POST" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">

	<input type="text" name="concepto" placeholder="<?php if ($idioma == "es") { ?>Concepto de Pago<?php } elseif ($idioma == "en") { ?>Payment concept<?php } ?>" style="width: 60%; padding: 2%"><br><br> 

	<input style="padding:1%; background-color: #fff; width: 60%" type="text"   onkeyup="puntitos(this,this.value.charAt(this.value.length-1),'decimales')"  placeholder="<?php if ($idioma == "es") { ?>Monto en Bs.<?php } elseif ($idioma == "en") { ?>Amount in Bs.<?php } ?>" name="monto"  required>     <br><br>



	<input style="display:none" name="decimales" disabled type="radio" onclick="puntitos(this.form.textfield,this.form.textfield.value.charAt(this.form.textfield.value.length-1),this.name)" value="0"  > </font> 


	<input style="display:none"  type="radio" disabled name="decimales" value="2" checked onclick="puntitos(this.form.textfield,this.form.textfield.value.charAt(this.form.textfield.value.length-1),this.name)"> 

	<input type="hidden" name="id_analista" value="<?php echo $id_usuario ?>"> 
	 



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
