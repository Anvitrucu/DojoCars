 
<!--<!DOCTYPE html>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<title>Google Maps Geoposicionamiento</title> 


<script type="text/javascript">
	
		if(navigator.geolocation)
		{
			navigator.geolocation.getCurrentPosition(mapa);
		}

		else
		{
			alert("No acepta");
		}


		function mapa(pos)
		{
			/************************ Aqui están las variables que te interesan***********************************/
			var latitud = pos.coords.latitude;
			var longitud = pos.coords.longitude;
			var precision = pos.coords.accuracy;

			alert(latitud);

		}


</script>

<body onload="localize()">
	
</body>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<style> #map { width: 100%; height: 300px; border: 1px solid #d0d0d0; } </style> 
<script> 
function localize() { 
if (navigator.geolocation) { 
navigator.geolocation.getCurrentPosition(mapa,error); 
} else { 
alert('Tu navegador no soporta geolocalizacion.'); 
} 
} 
function mapa(pos) { /************************ Aqui están las variables que te interesan***********************************/ 
var latitud = pos.coords.latitude; 
var longitud = pos.coords.longitude; 
var precision = pos.coords.accuracy; 
var contenedor = document.getElementById("map") 

document.getElementById("lti").innerHTML=latitud;
document.getElementById("lgi").innerHTML=longitud;	
document.getElementById("psc").innerHTML=precision;	

var centro = new google.maps.LatLng(latitud,longitud); 
var propiedades = { zoom: 15, center: centro, mapTypeId: google.maps.MapTypeId.ROADMAP }; 
var map = new google.maps.Map(contenedor, propiedades); 
var marcador = new google.maps.Marker({ position: centro, map: map, title: "Tu posicion actual" }); 
} 


function error(errorCode) { 
if(errorCode.code == 1) 
	alert("No has permitido buscar tu localizacion") 
else if (errorCode.code==2) 
	alert("Posicion no disponible") 
else 
	alert("Ha ocurrido un error") 
} 
</script> 

</head> 
<body onLoad="localize()"> 

<h1>Google Maps Geoposicionamiento</h1>
<p>Latitud: <span id="lti"></span></p>
<p>Longitud: <span id="lgi"></span></p>
<p>Precisi&oacute;n: <span id="psc"></span></p>	
<div id="map" ></div> 
</body> 
</html>


-->

<?php

 

	session_start();


	 include ("php/estructura/cabecera.php");

	include("php/funciones/comprobar_usuario.php");

	


	?>

<br>

	<div id="br_grande" >
	 <br><br><br>

	  </div>

	<section id="cuerpo_index">

				<?php

				$menu = $_GET['menu'];


					switch ($menu) 

							{
								case 'inscribete_iniciar':


 

								 include ("php/cuerpo_paginas/inscribete_iniciar.php");
								
								break;



								case 'suscribirse_previo':

								include ("php/cuerpo_paginas/suscribirse_previo.php");
								
								break;



								case 'pide_cita_general':

								include ("php/cuerpo_paginas/pide_cita_general.php");
								
								break;


								case 'guia_especialistas':

								include ("php/cuerpo_paginas/guia_especialistas.php");
								
								break;




								case 'producto':

								include ("php/cuerpo_paginas/producto.php");
								
								break;



								case 'profile':

								include ("php/cuerpo_paginas/profile.php");
								
								break;





								case 'about':

								include ("php/cuerpo_paginas/about.php");
								
								break;


								case 'shop':

								include ("php/cuerpo_paginas/shop.php");
								
								break;


								case 'contact':

								include ("php/cuerpo_paginas/contact.php");
								
								break;


								

 
								case '':

								include ("php/cuerpo_paginas/inicio.php");
								
								break;



								case "tabla_foros_index":
							    include ("php/cuerpo_paginas/tabla_foros_index.php");
							    break;

							    case "foro_index":
							    include ("php/cuerpo_paginas/foro_index.php");
							    break;

							    case "comentarios_hilos_index":
							    include ("php/cuerpo_paginas/comentarios_hilos_index.php");
							    break;



								case 'suscribirse':

								include ("php/cuerpo_paginas/suscribirse.php");
								
								break;

								case 'subir_inscribirse':

								include ("php/funciones/subir_inscribirse.php");
								
								break;





								case 'intro_1':

								include ("php/cuerpo_paginas/intro_1.php");
								
								break;



								case 'intro_2':

								include ("php/cuerpo_paginas/intro_2.php");
								
								break;



								case 'rental_car':

								include ("php/cuerpo_paginas/rental_car.php");
								
								break;




								case 'validar_cambio_usuario':

								include ("php/cuerpo_paginas/validar_cambio_usuario.php");
								
								break;



								case 'pago_exitoso':

								include ("php/cuerpo_paginas/pago_exitoso.php");
								
								break;



								case 'pago_cancelado':

								include ("php/cuerpo_paginas/pago_cancelado.php");
								
								break;


								 
 
								case "servicios":
								include ("php/cuerpo_paginas/servicios.php");
								break;




								case "portafolio":
								include ("php/cuerpo_paginas/portafolio.php");
								break;




								case "buscador":
								include ("php/cuerpo_paginas/buscador.php");
								break;




								case "intro_1_5":
								include ("php/cuerpo_paginas/intro_1_5.php");
								break;




								case "intro_precio":
								include ("php/cuerpo_paginas/intro_precio.php");
								break;




								case "contratar_paso_1":
								include ("php/cuerpo_paginas/contratar_paso_1.php");
								break;




								case "agencias_certificadas":
								include ("php/cuerpo_paginas/agencias_certificadas.php");
								break;




								case "certificaciones":
								include ("php/cuerpo_paginas/certificaciones.php");
								break;





								case "proximas_actualizaciones":
								include ("php/cuerpo_paginas/proximas_actualizaciones.php");
								break;



								case "politicas_de_uso":
								include ("php/cuerpo_paginas/politicas_de_uso.php");
								break;


								case "validar":
								include ("php/cuerpo_paginas/validar.php");
								break;


								



								case "reclamos_y_denuncias":
								include ("php/cuerpo_paginas/reclamos_y_denuncias.php");
								break;



								case "prensa_y_publicidad":
								include ("php/cuerpo_paginas/prensa_y_publicidad.php");
								break;



								case "bienvenido_1":
								include ("php/cuerpo_paginas/bienvenido_1.php");
								break;



								case "bienvenido_2":
								include ("php/cuerpo_paginas/bienvenido_2.php");
								break;



								case "bienvenido_3":
								include ("php/cuerpo_paginas/bienvenido_3.php");
								break;



								case "intro_ciudad":
								include ("php/cuerpo_paginas/intro_ciudad.php");
								break;




								case "olvido_contrasena":
								include ("php/cuerpo_paginas/olvido_contrasena.php");
								break;


								case "pide_cita_1":
								include ("php/cuerpo_paginas/pide_cita_1.php");
								break;

								case "pide_cita_5":
								include ("php/cuerpo_paginas/pide_cita_5.php");
								break;


								case "galeria_1":
								include ("php/cuerpo_paginas/galeria_1.php");
								break;

								case "eventos_1":
								include ("php/cuerpo_paginas/eventos_1.php");
								break;


								case "event_descript":
								include ("php/cuerpo_paginas/event_descript.php");
								break;


								case "pide_cita_2":
								include ("php/cuerpo_paginas/pide_cita_2.php");
								break;

								
	 							case "pide_cita_3":
								include ("php/cuerpo_paginas/pide_cita_3.php");
								break;


								case "pide_cita_4":
								include ("php/cuerpo_paginas/pide_cita_4.php");
								break;


								case "galeria_2":
								include ("php/cuerpo_paginas/galeria_2.php");
								break;

								case "correo_enviado_exitosamente":
								include ("php/cuerpo_paginas/correo_enviado_exitosamente.php");
								break;


								case "pide_cita_0":
								include ("php/cuerpo_paginas/pide_cita_0.php");
								break;



								case "admin_categorias_generales":
								include ("php/cuerpo_paginas/admin_categorias_generales.php");
								break;
  

 								case "solicitar_ingreso":
								include ("php/cuerpo_paginas/solicitar_ingreso.php");
								break;
 
 
								case "mensaje_enviado":
								include ("php/cuerpo_paginas/mensaje_enviado.php");
								break;

 
							}
					
					
					
					
							

				?>

    </body>













 

<?php






include ("php/estructura/footer.php");



?>