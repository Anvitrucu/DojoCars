


 

<!-- Funcion para comparar coordenadas -->



<?php 

function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit, $decimals) {
  // Cálculo de la distancia en grados
  $degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
 
  // Conversión de la distancia en grados a la unidad escogida (kilómetros, millas o millas naúticas)
  switch($unit) {
    case 'km':
      $distance = $degrees * 111.13384; // 1 grado = 111.13384 km, basándose en el diametro promedio de la Tierra (12.735 km)
      break;
    case 'mi':
      $distance = $degrees * 69.05482; // 1 grado = 69.05482 millas, basándose en el diametro promedio de la Tierra (7.913,1 millas)
      break;
    case 'nmi':
      $distance =  $degrees * 59.97662; // 1 grado = 59.97662 millas naúticas, basándose en el diametro promedio de la Tierra (6,876.3 millas naúticas)
  }
  return round($distance, $decimals);
}



 

?>








<section id="contenedor_locacion"  ></section> 













<?php 

include ("php/Zebra_Pagination.php");

			 $resultados=16; // Cuantos se mostraran por pagina

			

			$paginacion = new Zebra_Pagination();

			// Bucle para determinar donde va a iniciar la busqueda

			if ( isset($_GET["page"]))

			{
				
				$inicio=($_GET["page"]-1)*$resultados;
			}

			else{
				$inicio=0;
			}
 

?>

 

			<?php include ("php/funciones/mensaje.php"); ?><br> 
 


		</form>









 
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
                  if ($idioma == "es")         { ?> Catálogo de Servicios  <?php  } // ESPAÑOL
                  else if ($idioma == "en")    {     ?>  Services Catalog     <?php    } // INGLES
                  else if ($idioma == "pt")    {   ?>   Catálogo de Serviços    <?php  } // PORTUGUES
                  else if ($idioma == "fr")     {   ?>  Catalogue des services   <?php   } // FRANCES
                ?>
            </h1>

        <?php include("php/cuerpo_paginas/shop2.php"); ?>
    </div>
    
</center>

</div></div>













</div>

 <?php

 
 
 

 

             if (isset($_GET["id_categoria_producto"]))

             {

                 
                   

                    $id_categoria_producto = $_GET["id_categoria_producto"];
 

                    if ($id_categoria_producto!=0) 
                    {

                          if (isset($_GET["id_categorias_especificas"])) 

                                {
                            
                                 $id_categorias_especificas = $_GET["id_categorias_especificas"];

                                if ($id_categorias_especificas!=0) 

                                    {
                                          $consulta_2="SELECT * FROM productos WHERE   id_categoria_producto='$id_categoria_producto' AND id_categorias_especificas='$id_categorias_especificas'  "; 
                                    }

                                    else

                                    {
                                      $consulta_2="SELECT * FROM productos WHERE   id_categoria_producto='$id_categoria_producto'";
                                    }
                          }

                          else {

                               $consulta_2="SELECT * FROM productos WHERE   id_categoria_producto='$id_categoria_producto' "; 

                      }

                    

                    } 
 
                    else
                    {
                    
                 

                    $consulta_2="SELECT * FROM productos   "; 

                    }

             

            

 

echo "<div style='width:93%;margin-left:5%'> <br><br>";

 

 

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

  while ($registro_buscador = $ejecutar_consulta->fetch_assoc())
    {

      
      ?>



      <div id="articulos">

        <?php




 

        $latitud_especifica = floatval($registro_buscador["latitud"]);

        $longitud_especifica = floatval($registro_buscador["longitud"]);


 


        $latitud_global = floatval($_SESSION["latitud"]);

        $longitud_global = floatval($_SESSION["longitud"]);


        $rango = $registro_buscador["rango"];

        $medida = 'mi';

        $decimales = 2;

 

        $distancia_en_millas = distanceCalculation($latitud_global, $longitud_global, $latitud_especifica, $longitud_especifica, $medida, $decimales) ;


       

         


        $rango =  $_GET["dist"];

        if ($distancia_en_millas>$rango) { $tot = $tot+1; continue;}

        $distancia_buscador = $_GET["dist"];

        if ($distancia_en_millas>$distancia_buscador) {$tot = $tot+1; continue;}
 
         
       

        $id_productos = $registro_buscador["id_productos"];

        $nombre_producto = $registro_buscador["nombre_0"]."<br><p style='text-align:center; font-size:1rem; color: grey'> ";

         

        if (is_null($registro_buscador["foto_1"]) ) { $foto_1 = "articulo.jpg"; } else {$foto_1 = $registro_buscador["foto_1"]; }


        $cita_representante = $registro_buscador["cita_representante"];

        $consulta_us ="SELECT * FROM usuario WHERE id_usuario = '$cita_representante' ";

        $ejecutar_consulta_us = $conexion->query($consulta_us) or die ("No se ejecuto query ");

        $registro_us = $ejecutar_consulta_us->fetch_assoc();


 



        $precio_producto = $registro_buscador["precio_producto"];

        if (!is_null($registro_buscador["cita_fecha_inicio"]) AND ($registro_buscador["cita_fecha_inicio"]!="0000-00-00")) {
        	
        	$cita_fecha_inicio = $registro_buscador["cita_fecha_inicio"];

        	$cita_fecha_cierre = $registro_buscador["cita_fecha_cierre"];

        	$nombre_producto = $nombre_producto."Desde el ".$cita_fecha_inicio." Hasta el ".$cita_fecha_cierre;
        }

        else {

        	 if (!is_null($registro_buscador["cita_hora_inicio_L"])) {
        		$nombre_producto = $nombre_producto." L -";
        	}

        	if (!is_null($registro_buscador["cita_hora_inicio_M"])) {
        		$nombre_producto = $nombre_producto." M -";
        	}

        	if (!is_null($registro_buscador["cita_hora_inicio_Mi"])) {
        		$nombre_producto = $nombre_producto." Mi -";
        	}


        	if (!is_null($registro_buscador["cita_hora_inicio_J"])) {
        		$nombre_producto = $nombre_producto." J -";
        	}

        	if (!is_null($registro_buscador["cita_hora_inicio_V"])) {
        		$nombre_producto = $nombre_producto." V -";
        	}

        	if (!is_null($registro_buscador["cita_hora_inicio_S"])) {
        		$nombre_producto = $nombre_producto." S -";
        	}

        	if (!is_null($registro_buscador["cita_hora_inicio_S"])) {
        		$nombre_producto = $nombre_producto." D ";
        	}
        }

   



 

 
 
  
                    
                    echo "<div id='img_desc'><br> <p class= 'nombre_autor' style='margin-top:20%; font-size1.5rem'>";

                   
                    ?>


                    </p>
          


                    </div>
                    <br>
                    <center><?php echo "<a href='index.php?menu=servicios&id=".$id_productos."'>"."<H3>".$nombre_producto."</H3> <br>"?><img width="80%" src="img/foto_producto/<?php echo $foto_1 ?>"> </a>

        <br><br>
 

         <?php echo "<p style='font-size:0.8rem; text-align:center'>".utf8_encode($registro_us["usuario_nombre"])."</p><br>" ; ?>

  <?php echo "<a href='index.php?menu=pide_cita_2&id=".$id_productos."'>" ?> <center>    
 <input type="button"  value="<?php  if ($idioma == "es")         { ?> Reservar <?php  }   else if ($idioma == "en")    {     ?> Reserve <?php    }  else if ($idioma == "pt")    {   ?>  Livro <?php  }  else if ($idioma == "fr")     {   ?> Livre <?php   }  ?>" id="boton_generico"></a><br><br>
</a>
      </div> 

      

      <?php    

     }

     ?>

</div><BR>
 
   



<?php 


 

  if ($tot!=0) {

 
      if ($idioma == "es") 

          {
            ?>   <p class="titulo">NO SE ENCONTRARON RESULTADOS A SU BÚSQUEDA</p><?php
          }

           else 

          {
            ?>   <p class="titulo">NO RESULTS FOUND TO YOUR SEARCH</p><?php
          }
  }



?>

<div style="clear:both;"> <br> </div>

</BR></center></form></div>

<?php

}

?>