 

	<h1><?php if ($idioma == "es")  { echo "Antes de finalizar su pago, lo invitamos a calificar a tu especialista"; } else if ($idioma == "en")  { echo "Antes de finalizar su pago, le invitamos a calificar a su especialista"; }   ?>.</h1>  <br> 

	 

	 

 <form id="form_perfil" name="form_perfil" action="php/funciones/subir_pago_final_1.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">


 	<h3><?php if ($idioma == "es")  { echo "Como describiria su experiencia?"; } else if ($idioma == "en")  { echo "How would you describe your experience?"; }   ?>.</h3> 

 	<select required  style="width: 60%" name="calificacion">
 		<option value=1>Good</option>
 		<option value=0>Regular</option>
 		<option value=-1>Bad</option>
 	</select><br><br>

 	<h3><?php if ($idioma == "es")  { echo "Comentarios acerca de su experiencia"; } else if ($idioma == "en")  { echo "Comments about your experience"; }   ?>.</h3> 

 	<textarea required name="review" style="width: 60%" rows="5"></textarea>


	 

	 <br><br>

	

	 	<input type="hidden" name="id_dat" value="<?php echo $_GET["id_dat"] ?>">

	 
	 	<input type="hidden" name="monto_pag" value="<?php echo $_GET["monto_pag"] ?>">

	 	<input type="submit" value="Continue" id="boton_generico" >

	 
  			
	 </form>  
		
		
</h3> 

 

 
 