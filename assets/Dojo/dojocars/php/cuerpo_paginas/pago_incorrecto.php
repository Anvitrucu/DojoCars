<?php 

if (isset($_SESSION["id_pedido"]))

{
	$id_pedido = $_SESSION["id_pedido"] ;

 

	unset($_SESSION["id_pedido"]);
}

?>


<?php 

if ($idioma == "es") { ?> <p class="titulo" style="font-size:2rem;">Su pago no pudo ser Procesado</p><BR><br><hr><hr> <?php  }

if ($idioma == "en") { ?> <p class="titulo" style="font-size:2rem;">Your payment could not be processed</p><BR><br><hr><hr> <?php  }


?>






<form action="tu_perfil.php?op=tus_pedidos"  method="post">
 

<?php 

if ($idioma == "es") { ?> <center> <input type="submit" name="Submit" id="boton_generico" value="Verifica tus Órdenes"></center> <?php  }

if ($idioma == "en") { ?> <center> <input type="submit" name="Submit" id="boton_generico" value="Check your orders"></center> <?php  }


?>        
               
            
        </form>











        <?php


       

