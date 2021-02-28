<div style="
 background:url('img/2.png'); 
 background-repeat:no-repeat; 
 background-size:cover; 
 background-attachment: fixed; ">
 
<center>

    <div id="Titulo_Parallax_Idioma">
    <br> 
            <h1 >
                <?php 
                  if ($idioma == "es")         { ?> Guia de especialistas  <?php  } // ESPAÑOL
                  else if ($idioma == "en")    {     ?>  Guia de especialistas      <?php    } // INGLES
                 
                ?>
            </h1>


			<form style="margin-top: 0px; padding-top: 0px; margin-bottom: 0px; " name="form_perfil" action="index.php" method="GET" enctype="multipart/form-data">

					<input type="hidden" name="menu" value="guia_especialistas">

					<input type="text" style="width: 80%" name="nt" placeholder="Nombre del Técnico o establecimiento">
					<br><br>

									
						 

					<input value="<?php if ($idioma=="es") {echo "Buscar . . ."; } else { echo "Search . . ."; } ?>" type="submit" src="img/lupa.jpg" id="boton_generico" > 

					</center>

			</form>

			<div style="clear:both;">  </div>
    </div>
    
</center>

</div></div>



<center>




















<?php


if (isset($_GET["nt"])) {
	 

$usuario_nombre = $_GET["nt"];

 $consulta_2="SELECT * FROM usuario WHERE   usuario_nombre LIKE '%$usuario_nombre%' AND tipousuario_tipousuarioid = '4' ";

  $ejecutar_consulta = $conexion->query($consulta_2) or die ("No se ejecuto query ");

  $num_regs =  $ejecutar_consulta->num_rows;

  $tot = 0;

  if ($num_regs==0) {

 
			if ($idioma == "es") 

			{
				?>  <BR><p class="titulo">NO SE ENCONTRARON RESULTADOS A SU BÚSQUEDA</p><?php
			}

			 else 

			{
				?>  <BR><p class="titulo">NO RESULTS FOUND TO YOUR SEARCH</p><?php
			}

 

 	

   
  }





else {
 		
 		while ($registro_buscador = $ejecutar_consulta->fetch_assoc())

    	{

      
				?>



				<div id="articulos">

				<?php





				$id_usuario = $registro_buscador["id_usuario"];

				$usuario_nombre = $registro_buscador["usuario_nombre"]."<br><p style='text-align:center; font-size:1rem; color: grey'> ";

				 

				if (is_null($registro_buscador["foto_perfil"])) { $foto_1 = "perfil.png"; } else {$foto_1 = utf8_encode($registro_buscador["foto_perfil"]); }

			    

				echo "<div id='img_desc'><br> <p class= 'nombre_autor' style='margin-top:20%; font-size1.5rem'>";


				?>


				</p>



				</div>
				<br>
				<?php echo "<a href='index.php?menu=profile&id=".$id_usuario."'>"."<H3>".$usuario_nombre."</H3> <br>"?><img width="80%" src="img/perfil/<?php echo $foto_1 ?>"> </a>

				<br><br>
				  

				<?php echo "<a href='index.php?menu=profile&id=".$id_usuario."'>" ?>     
				<input type="button"  value="<?php  if ($idioma == "es")         { ?> Visitar  . . . <?php  }   else if ($idioma == "en")    {     ?> Continue  . . .<?php    }  else if ($idioma == "pt")    {   ?>  Continue  . . .<?php  }  else if ($idioma == "fr")     {   ?> Continue . . .<?php   }  ?>" id="boton_generico"></a><br><br>
				</a>
				</div> 

      

      <?php    

     }

}

}

  
?>
</fieldset>
</div><BR>
 
   

 

<div style="clear:both;"> <br> </div>

</center></form></div>


