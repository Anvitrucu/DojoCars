<?php
$_SESSION["id_producto"] = $_GET["id_productos"];

 ?>

 <script type="text/javascript">

 	function fijar_hora(hora){

 		if (document.getElementById('hora_disponible')) {

 			var tabla_cambiar =document.getElementById('hora_disponible').value;

 			document.getElementById("tabla_calendario_"+tabla_cambiar).style.background = "#FFFFFF";

 		}




 		document.getElementById("hora_disponible_change").innerHTML = "<input type='hidden' id='hora_disponible' name='hora_disponible' value="+hora+">";

 		document.getElementById("tabla_calendario_"+hora).style.background = "#FFCACA";

 		
 	}
 	
 </script>

 <form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">
	<h2><?php if ($idioma == "es")  { echo "SELECCIONE LA FECHA Y LA HORA DE SU CITA"; } else if ($idioma == "en")  { echo "SELECT THE DATE AND TIME OF YOUR APPOINTMENT"; } else if ($idioma == "fr")   { echo "SÉLECTIONNEZ LA DATE ET L'HEURE DE VOTRE RENDEZ-VOUS"; }  else if ($idioma == "pt")  { echo "SELECIONE A DATA E HORA DA SUA NOMEAÇÃO"; } ?>.</h2>  


	 

	 <br><br>

	


		<input type="hidden" name="ficha_telefono" value="<?php echo $_GET["ficha_telefono"] ?>">
		
		<input type="hidden" name="id_cliente" value="<?php echo $_GET["id_cliente"] ?>">

	 	<input type="hidden" name="id_producto" value="<?php echo $_GET["id_productos"] ?>">

	 	<input type="hidden" name="op" value="crear_cita_2">

	 	<input type="hidden" name="medida" value="<?php echo $_GET["med"] ?>">

	 	<input type="hidden" name="tiempo" value="<?php echo $tiempo ?>">
 
             

		<center>  <input name="fecha" style="padding: 1%" onchange="cargar_citas(this.value)" type="text" id="datepicker"> </center><br><br>

		<div id="div_cargar_citas" style="width: 100%"></div>


              
			<center>  <?php include("php/funciones/mensaje.php") ?> </center>
	 </form>  
		
		
</h3> 

<?php