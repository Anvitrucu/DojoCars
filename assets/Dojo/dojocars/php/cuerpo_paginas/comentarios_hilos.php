
<?php

include 'menu_superior_foro.php';  

  $id_foro = $_GET["id_foro"];

  $id_hilo = $_GET["id_hilo"];

  $status = $_GET["status"];




  $consulta_hilo="SELECT * FROM `hilos_conversacion` WHERE id_hilos = '$id_hilo'";

  $ejecutar_consulta_hilo = $conexion->query($consulta_hilo);

  $arreglo_hilo = $ejecutar_consulta_hilo->fetch_assoc();

#////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 ?>
     

       <br> <a id="boton_generico" href="tu_perfil.php?op=foro&id_foro=<?php echo utf8_encode($id_foro) ?>&id_hilo=<?php echo utf8_encode($id_hilo) ?>&status=<?php echo utf8_encode($status)?>" style="text-decoration: none;float: left;" >< Volver</a> 

</form>
 <div  class="form-style-10">

	<h3>  <?php echo utf8_encode($arreglo_hilo["titulo_hilo"]); ?> <span> </span></h1>
     <center>
			<h2 style="font-size: 0.9rem">   <?php  echo utf8_encode($arreglo_hilo["descripcion_hilo"]);  ?> </h2>
	</center>

		<center>

		<div class="section"> 

          <h3>Conversacion</h3><br>




          <?php 

#////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            $consulta_comentario="SELECT * FROM `comentario_hilo` WHERE id_hilo = '$id_hilo' AND mencion_activa = 'no'";

            $ejecutar_consulta_comentario = $conexion->query($consulta_comentario);

            while ($arreglo_comentario = $ejecutar_consulta_comentario->fetch_assoc()) 

            {

                  $id_usuario = $arreglo_comentario["id_usuario"];

               	  $consulta_usuario="SELECT * FROM `usuario` WHERE id_usuario = '$id_usuario'";

                  $ejecutar_consulta_usuario = $conexion->query($consulta_usuario);

                  $arreglo_usuario = $ejecutar_consulta_usuario->fetch_assoc();
          

                   ?>



                  <ul >
                    <li style="float: left; border:solid 2px #000000;
                  -moz-border-radius-topleft: 9px;
                  -moz-border-radius-topright:9px;
                  -moz-border-radius-bottomleft:9px;
                  -moz-border-radius-bottomright:10px;
                  -webkit-border-top-left-radius:9px;
                  -webkit-border-top-right-radius:9px;
                  -webkit-border-bottom-left-radius:9px;
                  -webkit-border-bottom-right-radius:10px;
                  border-top-left-radius:9px;
                  border-top-right-radius:9px;
                  border-bottom-left-radius:9px;
                  border-bottom-right-radius:10px; width: 90%; padding: 2%; margin: 2%">





                  <b><?php echo utf8_encode($arreglo_usuario["usuario_nombre"])."</b>:&nbsp;".utf8_encode($arreglo_comentario["comentario"])."."; ?>
                  
                            <?php if ($id_usuario == $id_de_usuario) { ?>

                            <a href="php/funciones/eliminar_comentarios.php?id_comentario_hilo=<?php echo $arreglo_comentario['id_comentario_hilo'] ?>&id_foro=<?php echo $id_foro ?>&id_hilo=<?php echo $id_hilo ?>">Eliminar</a>

                            <?php } ?>

                  <br><br>


                  <a id="boton_generico" style="text-decoration: none;" href="tu_perfil.php?op=comentarios_hilos&id_hilo=<?php echo utf8_encode($arreglo_comentario['id_hilo']) ?>&id_foro=<?php echo utf8_encode($arreglo_hilo['id_foro']) ?>&status=<?php echo utf8_encode($status) ?>&mencion_activa=<?php echo $mencion_activa = 'si' ?>&id_usuario=<?php echo utf8_encode($id_usuario) ?>&id_comentario_mencionado=<?php echo $arreglo_comentario['id_comentario_hilo'] ?>">Mencionar</a>
<br><br><hr><br>

 


                <?php 
                /////////////////////////////////////////Inicio de mencion///////////////////////////////

                $id_comentario_mencionado = $arreglo_comentario['id_comentario_hilo'];

                $consulta_mencion="SELECT * FROM `comentario_hilo` WHERE id_comentario_mencionado = '$id_comentario_mencionado' AND mencion_activa = 'si' ";

                $ejecutar_consulta_mencion = $conexion->query($consulta_mencion);

                while ($arreglo_mencion = $ejecutar_consulta_mencion->fetch_assoc()) {

                  $id_usuario = $arreglo_mencion["id_usuario"];

                  $consulta_usuario_2="SELECT * FROM `usuario` WHERE id_usuario = '$id_usuario'";

                  $ejecutar_consulta_usuario_2 = $conexion->query($consulta_usuario_2);

                  $arreglo_usuario_2 = $ejecutar_consulta_usuario_2->fetch_assoc(); 


                   ?>

 
                  <b><?php echo utf8_encode($arreglo_usuario_2["usuario_nombre"])."</b>:&nbsp;".utf8_encode($arreglo_mencion["mencion"])."."; ?>&nbsp;&nbsp;&nbsp;

                            <?php  

                            if ($id_usuario == $id_de_usuario) { 

                              ?>

                            <a href="php/funciones/eliminar_comentarios.php?id_comentario_hilo=<?php echo $arreglo_mencion['id_comentario_hilo'] ?>&id_foro=<?php echo $id_foro ?>&id_hilo=<?php echo $id_hilo ?>"   >Eliminar</a>

                            <?php } ?><br><br>

   

                  <?php } 


                  ?>

                  </li>
            
            <br>
          </ul>

                  <?php


            } ?>





















<form action="php/funciones/subir_comentario_hilo.php" method="POST" enctype="multipart/form-data" id="form_perfil">
                  
                  <input type="hidden" name="status" value="<?php echo $status ?>">

                  <input type="hidden" name="id_hilo" value="<?php echo $id_hilo ?>">

                  <input type="hidden" name="id_foro" value="<?php echo $id_foro ?>">

                  <input type="hidden" name="id_usuario" value="<?php echo $id_de_usuario ?>">

                  
 
                  <input type="hidden" name="comentario" value="<?php echo $_GET["comentario"]; ?>">

                 
 

                  <?php 

           

                  if ($_GET["mencion_activa"] != "si") { ?>



                  <input type="hidden" name="mencion_activa" value="no">

                  <label style="float: left;">Escriba su comentario: </label>

                   <textarea name="comentario" maxlength="255" style="background-color: #BBC8DE; width: 71%; height: 100px" ></textarea><br>

                  <?php } else { ?>


                  <input type="hidden" name="mencion_activa" value="si">

                   <input type="hidden" name="id_comentario_mencionado" value="<?php echo $_GET['id_comentario_mencionado'] ?>">


                   <label style="float: left;">Escriba su mencion: </label>
                    
                  <textarea name="mencion" maxlength="255" style="background-color: #BBC8DE; width: 71%; height: 100px" ></textarea><br>

                   <?php } ?>

                  <input type="submit" name="Enviar" style="background-color: #2F72E7; float: right;margin-right: 50px">
                </form>
          


         







