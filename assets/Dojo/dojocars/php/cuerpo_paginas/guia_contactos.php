
<h1 >
    <?php 
      if ($idioma == "es")         { ?> Especialistas agregados a tu guia  <?php  } // ESPAÑOL
      else if ($idioma == "en")    {     ?>  Specialists added to your guide     <?php    } // INGLES
     
    ?>
</h1>


            <?php


 
 

 $consulta_2="SELECT * FROM seguir_usuario WHERE id_seguidor = '$id_de_usuario' ";

  $ejecutar_consulta = $conexion->query($consulta_2) or die ("No se ejecuto query ");

  $num_regs =  $ejecutar_consulta->num_rows;

  $tot = 0;

  if ($num_regs==0) {

 
			if ($idioma == "es") 

			{
				?>  <BR><p class="titulo">NO POSEE TECNICOS EN SU AGENDA</p><?php
			}

			 else 

			{
				?>  <BR><p class="titulo">DOES NOT HAVE SPECIALISTS IN ITS AGENDA</p><?php
			}

 

 	

   
  }





else {
 		
 		while ($registro_buscador = $ejecutar_consulta->fetch_assoc())

    	{

      
				?>



				<div id="articulos">

				<?php





				$id_tecnico = $registro_buscador["id_tecnico"];


				$busqueda_espe="SELECT * FROM usuario WHERE id_usuario='$id_tecnico'";

				$ejecutar_busqueda_espe = $conexion->query($busqueda_espe);

				$arreglo_espe = $ejecutar_busqueda_espe->fetch_assoc();




				$usuario_nombre = $arreglo_espe["usuario_nombre"]."<br><p style='text-align:center; font-size:1rem; color: grey'> ";

				 

				if (is_null($arreglo_espe["foto_perfil"])) { $foto_1 = "perfil.png"; } else {$foto_1 = utf8_encode($arreglo_espe["foto_perfil"]); }

			    

				echo "<div id='img_desc'><br> <p class= 'nombre_autor' style='margin-top:20%; font-size1.5rem'>";


				?>


				</p>


 
				</div>

				<center>
				<br>
				<?php echo "<a href='index.php?menu=profile&id=".$id_tecnico."'>"."<H3>".$usuario_nombre."</H3> <br>"?><img width="80%" src="img/perfil/<?php echo $foto_1 ?>"> </a>

				<br><br>


				  

				<?php echo "<a href='index.php?menu=profile&id=".$id_tecnico."'>" ?>     
				<input type="button"  value="<?php  if ($idioma == "es")         { ?> Visitar <?php  }   else if ($idioma == "en")    {     ?> Continue <?php    }  else if ($idioma == "pt")    {   ?>  Continue <?php  }  else if ($idioma == "fr")     {   ?> Continue <?php   }  ?>" id="boton_generico"></a><br><br>
				</a>
				</div> 

      

      <?php    

     }

}

 
  
?>
</fieldset>
</div><BR>
 
   

 

<div style="clear:both;"> <br> </div>

</center></form></div>