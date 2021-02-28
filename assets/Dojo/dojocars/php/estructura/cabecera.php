<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

session_start();

include("php/funciones/verificar_idioma.php");

include("php/funciones/cod_1.php");

 

?>
<!DOCTYPE HTML>


<html lang="es">

	<head>
			

			<meta charset="UTF-8">
			
			 

				<title>Dojo Cars</title>


				<meta NAME="keywords" content="Tatuajes, Vigo, Galicia, España, Europa, Tienda de Tatuajes, Tienda de Tatuajes en Galicia, Tienda en Linea, Ophyra Marketing Group, Led Culture, Ledculture.com, Ophyra Marketing Group, Productos">

 
				<meta NAME="description" CONTENT="Dojocars Official">

				 
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<meta NAME="robots" content="index">
			<link rel="shortcut icon" href="img/DOJO_CARS_LOGO.png">
 
	<!-- Hoja de Estilos -->

			<link rel="stylesheet" type="text/css" href="css/estilos.css">
			<link rel="stylesheet" type="text/css" href="css/responsive.css">




	<!-- Fuentes de Google-->
			<link href="https://fonts.googleapis.com/css?family=Comfortaa|Poiret+One" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
			<link href='https://fonts.googleapis.com/css?family=Italiana' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,600,700' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,500,700,300' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>  
			<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">



 

	<!-- J Query -->
			<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			
			<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

			

	<!-- ajax -->
			<script src="js/ajax.js"></script>

	<!-- Facebook 		
			  <script src="js/facebook.js"></script>-->

			  

  


	<!-- Parallax -->
			<script type="text/javascript">


			$(document).ready(function(){

				    $(window).scroll(function(){
				        var barra = $(window).scrollTop();
				        var posicion =  (barra * 0.10); /*Para cambiar la velocidad en que se movera el fondo lo haces cambiando el 0.10*/

				        $('fondo_texto_parallax').css({
				            'background-position': '0 -' + posicion + 'px'
				        });

				    });

				});

			</script>



  <!-- FUNCION PARA VENTANA MODAL -->

<script type="text/javascript">
  function openVentana1(){
    $(".ventana1").slideDown("slow");
  }

  function closeVentana1(){
    $(".ventana1").slideUp("slow");
  }



  function openVentana2(){
    $(".ventana2").slideDown("slow");
  }

  function closeVentana2(){
    $(".ventana2").slideUp("slow");
  }


 


</script>




 
<!-- formatear número -->

<script type="text/javascript">
	

/*****************************************************************************
Código para colocar los indicadores de miles  y decimales mientras se escribe
Script creado por Tunait!
Si quieres usar este script en tu sitio eres libre de hacerlo con la condición de que permanezcan intactas estas líneas, osea, los créditos.

http://javascript.tunait.com
tunait@yahoo.com  27/Julio/03
******************************************************************************/
function puntitos(donde,caracter,campo)
{
var decimales = false
campo = eval("donde.form." + campo)
	for (d =0; d < campo.length; d++)
		{
		if(campo[d].checked == true)
			{
			dec = new Number(campo[d].value)
			break;
			}
		}
	if (dec != 0)
		{decimales = true}




pat = /[\*,\+,\(,\),\?,\\,\$,\[,\],\^]/
valor = donde.value
largo = valor.length
crtr = true
if(isNaN(caracter) || pat.test(caracter) == true)
	{
	if (pat.test(caracter)==true) 
		{caracter = "\\" + caracter}
	carcter = new RegExp(caracter,"g")
	valor = valor.replace(carcter,"")
	donde.value = valor
	crtr = false
	}
else
	{
	var nums = new Array()
	cont = 0
	for(m=0;m<largo;m++)
		{
		if(valor.charAt(m) == "." || valor.charAt(m) == " " || valor.charAt(m) == ",")
			{continue;}
		else{
			nums[cont] = valor.charAt(m)
			cont++
			}
		
		}
	}

if(decimales == true) {
	ctdd = eval(1 + dec);
	nmrs = 1
	}
else {
	ctdd = 1; nmrs = 3
	}
var cad1="",cad2="",cad3="",tres=0
if(largo > nmrs && crtr == true)
	{
	for (k=nums.length-ctdd;k>=0;k--){
		cad1 = nums[k]
		cad2 = cad1 + cad2
		tres++
		if((tres%3) == 0){
			if(k!=0){
				cad2 = "." + cad2
				}
			}
		}
		
	for (dd = dec; dd > 0; dd--)	
	{cad3 += nums[nums.length-dd] }
	if(decimales == true)
	{cad2 += "," + cad3}
	 donde.value = cad2
	}
donde.focus()
}	

</script>


<!-- El texto a usar en el input seria: 

<form>
<input type="text" onkeyup="format(this)" onchange="format(this)">
</form>

 -->



  <!-- DatePicker -->
 <script>
  $(document).ready(function() {

  	   $('#datepicker').datepicker({
    dateFormat: "dd-mm-yy",
        firstDay: 1,
        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
        monthNames: 
            ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
            "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthNamesShort: 
            ["Ene", "Feb", "Mar", "Abr", "May", "Jun",
            "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
});
   
 


 $('#datepicker2').datepicker({
    dateFormat: "dd-mm-yy",
        firstDay: 1,
        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
        monthNames: 
            ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
            "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthNamesShort: 
            ["Ene", "Feb", "Mar", "Abr", "May", "Jun",
            "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
});


$('#datepicker3').datepicker({
    dateFormat: "dd-mm-yy",
        firstDay: 1,
        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        dayNamesShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
        monthNames: 
            ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
            "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthNamesShort: 
            ["Ene", "Feb", "Mar", "Abr", "May", "Jun",
            "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
});


  });
  </script>



<!--SIDEBAR PERFIL -->



			<script type="text/javascript">

						( function( $ ) {
			$( document ).ready(function() {
			$('#cssmenu li.has-sub>a').on('click', function(){
					$(this).removeAttr('href');
					var element = $(this).parent('li');
					if (element.hasClass('open')) {
						element.removeClass('open');
						element.find('li').removeClass('open');
						element.find('ul').slideUp();
					}
					else {
						element.addClass('open');
						element.children('ul').slideDown();
						element.siblings('li').children('ul').slideUp();
						element.siblings('li').removeClass('open');
						element.siblings('li').find('li').removeClass('open');
						element.siblings('li').find('ul').slideUp();
					}
				});
			});
			} )( jQuery );

			</script>

<!-- Funcion para preguntar si esta seguro de eliminar  -->


			<script type="text/javascript">
				 
				function confirmation(a) {
					if(confirm("¿Seguro de Continuar? - Are you sure to continue? "))
						{window.location = a;
					}
				}
				//-->
			</script>


 




<!-- Carrousel  -->


			  <link rel="stylesheet" type="text/css" href="./slick/slick.css">

  			  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

				  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 90%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
  </style>


  <script type="text/javascript">



function cargar_citas(str)
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
document.getElementById("div_cargar_citas").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/funciones/cargar_citas.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("fecha_cita="+str);
}  





  	
  	
function cargar_dia(str)
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
document.getElementById("div_cargar_dia").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/funciones/cargar_dia.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("mes="+str);
}  





function cargar_ano(str)
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
document.getElementById("div_cargar_ano").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/funciones/cargar_ano.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("ano="+str);
} 

  

  function cargar_dia_2(str)
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
document.getElementById("div_cargar_dia_2").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/funciones/cargar_dia_2.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("mes_2="+str);
}  








  </script>

<!-- Api de Google Map-->

       

<script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        


<script>
		function geoloc() {
		d=document.getElementById("demo");
		if (navigator.geolocation){
		 
		navigator.geolocation.getCurrentPosition(showPosition);
		}
		else {
		d.innerHTML="<p>Lo sentimos, tu dispositivo no admite la geolocaización.</p>";
		}
		}
		function showPosition(position){
		latitud=position.coords.latitude;
		longitud=position.coords.longitude;

		 
	 

		document.cookie = "latitud="+latitud;

		document.cookie = "longitud="+longitud;


		


	 

		 
		}




 
    </script>



 



 <!--/////////////////////////////////  LOADER/////////////////////////////////  --> 
 
<script>
 
     
    function detectarCarga(){
    document.getElementById("inicio_ophyra").style.display="inline-block";
    document.getElementById("loader").style.display="none";
  }
 
</script>

	</head>

	<!-- - - - - - - - - - - - - -  INICIO DEL BODY - - - - - - - - - - - - -  -->

























































<?php 

if (isset($_GET["menu"])) {
	
	?>

	<body onLoad="geoloc()">

	<?php
}

else {

	?>

	<body onLoad="detectarCarga()">

	<?php

}

?>






<!--     Extraer variable de Geolocalizacion      -->

<script type="text/javascript">
  
function get_cookie (cookie_name)
{

  var cookie_string = document.cookie ;
  if (cookie_string.length != 0) 

  {
    var cookie_array = cookie_string.split( '; ' );

    for (i = 0 ; i < cookie_array.length ; i++) 
    {
      cookie_value = cookie_array[i].match ( cookie_name + '=(.*)' );

      if (cookie_value != null) 
      {
        return decodeURIComponent ( cookie_value[1] ) ;
      }
    }
  }
  return '' ;
}






// ----- INICIO Convertimos las variables de javascript en variables de PHP 

    $( document ).ready(function() { 

// Definimos las variables de javascrpt 

    latitud_g = get_cookie( "latitud" );

	longitud_g = get_cookie( "longitud" );
     
// Ejecutamos AJAX 

    $("#contenedor_locacion").load("php/funciones/accion_locacion.php",{latitud_g, longitud_g}); 
     
    }); 
// ----- FIN Convertimos las variables de javascript en variables de PHP  



</script>


 
<?php 



$latitud_global = "<script>document.write(latitud)</script>";

$longitud_global = "<script>document.write(longitud)</script>";

echo $latitud_global;

if (isset($_SESSION["id_posicion_temporal"])) {


	include("php/funciones/conexion.php");

	$insertar_localizacion= "INSERT INTO `posicion_temporal` (`id_posicion_temporal`, `latitud`, `longitud`) VALUES (NULL, '$latitud_global', '$longitud_global');";

	$ejecutar_insertar_localizacion = $conexion->query($insertar_localizacion) or die ("no se subio");


	$id_posicion_temporal = $conexion->insert_id;

	$_SESSION["id_posicion_temporal"] = $id_posicion_temporal;
}




 

?>
 
 

<?php 


 /*

$coordenadas_actuales = "<script> document.write(coordenadas) </script>";

echo  $coordenadas_actuales;

$latitud = "<script>latitud</script>";

$longitud = "<script>longitud</script>";

$precision = "<script>coor_precision</script>";

echo $latitud;
echo $longitud;
echo $precision;*/

?>
	

 
<div id="cabecera_tamano_normal"> <!-- - - - - - - - - - - - - -  CABECERA NORMAL - - - - - - - - - - - - -  -->
		
 	<!-- Meta data-->

 

	<div id="BarraSuperior"  >

		 <?php if ($idioma == "es")         { ?><a href="index.php?idioma=en"><img style="width: 8%;   margin-left: 5%; padding: 1% " src="http://www.ophyra.com/img/OphyraIn1.png"></a> <?php  } // ESPAÑOL
	    else if ($idioma == "en")    {     ?> <a href="index.php?idioma=es"><img style="width:  8%;     margin-left: 5% ; padding: 1%" src="http://www.ophyra.com/img/OphyraEs1.png"></a> <?php    } ?>

	    
	    <div id="Cabecera"  >
		<nav>


			<ul >

				<?php 

						if (isset($_SESSION["usuario"])) {

							?>

							<li style="margin-top: 3%;"> <a style="color: #ffffff;  	font-size: 1.2rem;" href="tu_perfil.php?op=inicio"><?php if ($idioma=="es") { echo "Mi Perfil"; } else { echo "My profile"; } ?>&nbsp;</a> </li>

						
							<li> <a style="color: #ffffff;  	font-size: 1.2rem;" href="">|</a> </li>


							<li> <a style="color: #ffffff;  font-size: 1.2rem;" href="php/funciones/cerrar_sesion.php"><?php if ($idioma=="es") { echo "Cerrar Sesion"; } else { echo "Sign off"; } ?></a></li>

							<?php

						}

						else {

							?>

							<li style="margin-top: 15px;"> <a style="color: #ffffff;   font-size: 1.2rem;" href="index.php?menu=inscribete_iniciar"><?php if ($idioma=="es") { echo "Iniciar Sesion"; } else { echo "Login"; } ?>&nbsp;</a> </li>
						

							<li> <a style="color: #ffffff;  font-size: 1.2rem;" href="">|</a> </li>


							<li style="margin-top: 0;"> <a style="color: #ffffff; margin-left: 5%; font-size: 1.2rem;" href="index.php?menu=inscribete_iniciar"><?php if ($idioma=="es") { echo "Registrate"; } else { echo "Signup"; } ?></a> </li>

							<?php

						}

				?>
 

			</ul>

		</nav></div>
 

	</div>

 










  
<div id="nav_2"  >
 <center>
		 
				<a href="index.php"><img src="img/DOJO_CARS_LOGO.png" style="display:inline-block;float:left; margin-left: 5%;  width: 10%;margin-right: 5% " ></a>
			 
				 <a id="elementos_menu" href="index.php"><?php if ($idioma=="es") { echo "Inicio"; } else { echo "Home"; } ?></a> 

				 <a id="elementos_menu">|</a> 


				 <a id="elementos_menu" href="index.php?menu=about"><?php if ($idioma=="es") { echo "Términos y condiciones"; } else { echo "Terms and Conditions"; } ?></a> 
				 <a id="elementos_menu">|</a> 

				 <a id="elementos_menu" href="index.php?menu=pide_cita_general"><?php if ($idioma=="es") { echo "Solicita tu Cita"; } else { echo "Request your Appointment"; } ?></a> 

				 <a id="elementos_menu">|</a> 

				 <a id="elementos_menu" href="index.php?menu=contact"><?php if ($idioma=="es") { echo "Contacto"; } else { echo "Contact"; } ?> </a> 
	 
		 
 		 
	</div>

</div> <!-- FIN DE CABECERA TAMAÑO NORMAL  -->






















<div id="cabecera_tamano_pequeno">  <!-- - - - - - - - - - - - - -  CABECERA PEQUEÑA  - - - - - - - - - - - - -  -->


	<div id="logo_pequeno" style="width: 100%; margin-top: 5%">

		<center><a href="index.php"><img src="img/DOJO_CARS_LOGO.png"  width="45%"></a></center>
		
	</div>



	<div id="logo_pequeno" style="width: 100%; margin-top: 5%; text-align: center">

<center> 
		 
								 <a   style="font-size: 1rem; font-family: 'Raleway' ; color: #000; text-decoration: none " href="index.php"><?php if ($idioma=='es'){echo "Inicio";} else {echo "Home";} ?></a>&nbsp;&nbsp; 

								<a   style="font-size: 1rem" href="">|</a>&nbsp;&nbsp; 

							   

								<a   style="font-size: 1rem; font-family: 'Raleway' ; color: #000; text-decoration: none " href="index.php?menu=about"><?php if ($idioma=='es'){echo "Sobre Mi";} else {echo "About";} ?></a>&nbsp;&nbsp;

								<a   style="font-size: 1rem" href="">|</a>&nbsp;&nbsp;  


								<a   style="font-size: 1rem; font-family: 'Raleway' ; color: #000; text-decoration: none " href="index.php?menu=pide_cita_general"><?php if ($idioma=='es'){echo "Solicita tu Cita";} else {echo "Request your Appointment";} ?></a>&nbsp;&nbsp; 

								<a   style="font-size: 1rem" href="">|</a>&nbsp;&nbsp; 


							 

								<a  style="font-size: 1rem; font-family: 'Raleway' ; color: #000; text-decoration: none " href="index.php?menu=contact"><?php if ($idioma=='es'){echo "Contacto";} else {echo "Contact us";} ?></a>&nbsp;&nbsp; 


							 
									 
		
	</div>

	<br><hr>
	<hr>
 








	<div  style="width: 100%; margin-top: 5%">

		
					

 							<!-- BOTONES DE IDIOMAS -->
 									

<center>
									 <?php if ($idioma == "es")         { ?><a href="index.php?idioma=en"><img style="width: 70px;   margin-left: 5% " src="https://www.ophyra.com/img/OphyraIn1.png"></a> <?php  } // ESPAÑOL
        else if ($idioma == "en")    {     ?> <a href="index.php?idioma=es"><img style="width: 70px;     margin-left: 5% " src="https://www.ophyra.com/img/OphyraEs1.png"></a> <?php    } ?>

									 

									 

				 	

		<nav>
			<ul>
						<?php 

							if (isset($_SESSION["usuario"]))

								{
 
												?>
												<li>
												<a style="	font-size: 1rem;" href="tu_perfil.php?op=inicio"><?php if ($idioma=='es'){echo "Mi Perfil";} else {echo "My profile";} ?>&nbsp;</a>
												</li>
												<li>
												<a style="	font-size: 1rem;" href="php/funciones/cerrar_sesion.php"><?php if ($idioma=='es'){echo "Cerrar Sesion";} else {echo "Exit";} ?></a>
												</li>
										<?php		 
												 
								}

								else

								{
						?> 
						<li>
						<a style="	font-size: 1rem;" href="index.php?menu=inscribete_iniciar"><?php if ($idioma=='es'){echo "Iniciar";} else {echo "Login";} ?> &nbsp;</a>
						</li>
						<li>
						<a style="	font-size: 1rem;" href="index.php?menu=inscribete_iniciar"><?php if ($idioma=='es'){echo "Registrate";} else {echo "Sign up";} ?></a>
						</li>
						 
						<?php

								}

						if (!isset($_SESSION["contador_cesta_mostrar"]))

						{

							$_SESSION["contador_cesta_mostrar"] = 0;

						}

						?>
 
 

 
		
	</div>  




</div>








				

















 			 

