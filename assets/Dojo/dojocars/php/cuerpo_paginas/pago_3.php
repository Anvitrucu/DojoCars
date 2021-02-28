<?php 

$id_pedido = $_GET["id_pedido"];

$pago_total = $_GET["pago_total"];

 

$pago_total =  decoded($pago_total) ;

$id_pedido =   decoded($id_pedido) ;

 

$_SESSION["id_pedido"] = $id_pedido;
 

?>
<?php
        if ($idioma == "es")

        {

            ?>

           <p class="titulo" style="font-size:2rem;">Realice su pago con tarjeta de Crédito o Paypal</p><BR><br><hr><hr>


            <?php

        }


        else if ($idioma == "en")

         {

            ?>

            <p class="titulo" style="font-size:2rem;">Make your payment by credit card or Paypal</p><BR><br><hr><hr>


            <?php

        }

        ?>


 


<form action="https://www.paypal.com/cgi-bin/webscr"  method="post">
            <fieldset>
                 
<!--Es el costo de envío.-->
                <input type="hidden" name="shipping" value="0">
<!--Es el mensaje que verá en Paypal el usuario al finalizar el proceso de pago.-->
                <input type="hidden" name="cbt" value="Your payment has been processed successfully - Thank you for shopping">
                <input type="hidden" name="cmd" value="_xclick">
<!--Es el método con que Paypal devolverá las variables a la página ipn_success.php (1 es get 2 es post).-->
                <input type="hidden" name="rm" value="2">
                <input type="hidden" name="bn" value="<?php echo $nombre; ?>">
<!--Cantidad de productos-->
				<input type="hidden" name="quantity" value="1">

<!--Es el mail que el vendedor registró en su cuenta de Paypal-->
                <input type="hidden" name="business" value="iserns@gmail.com">
<!--Es el detalle de lo que estamos vendiendo-->
    
                <input type="hidden" name="item_name" value="Your Order // Tu Orden">

                <input type="hidden" name="item_number" value="<?php echo $id_pedido ?>">
<!--Es el importe total de la operación.-->
                <input type="hidden" name="amount" value="<?php echo $pago_total ?>">
<!--Aquí podemos colocar cualquier variable que luego necesitemos para realizar nuestros procesos cuando Paypal redireccione al usuario a nuestra página de éxito. -->
                <input type="hidden" name="custom" value="<?php echo $pago_total ?>">
<!--La moneda en que expresamos los valores:USD,GBP,JPY,CAD,EUR.-->
                <input type="hidden" name="currency_code" value="USD">
 

<!--Es la ruta absoluta de la imagen que aparecerá en la cabecera de la página de Paypal cuando el comprador esté pagando. Se utiliza para que no perdamos del todo la identidad de nuestro site durante el proceso de pago, pero a menos que la imagen esté guardada en un servidor con protocolo HTTPS, es mejor dejar este campo en blanco ya que, si no lo hacemos de esa manera, cuando el comprador ingrese a Paypal le aparecerá un mensaje diciéndole que la página contiene elementos seguros y no seguros, cosa que puede asustar a algunos compradores. -->
                <input type="hidden" name="image_url" value="http://www.iseweb.com/images2/logo.jpg">
<!--Aquí colocaremos la ruta absoluta a la página ipn_success.php. Es la página a la que Paypal redirecciona al comprador si el pago se realiza correctamente, y a la que envía las variables que utilizaremos para los procesos ligados a la compra: generar un envío de productos, enviar un mail, descontar del stock, cambiar un nivel de acceso, etc. -->

                <input type="hidden" name="return" value="http://cops.iseweb.com/tu_perfil.php?op=pago_correcto">

<!--En ella deberemos colocar un mensaje del tipo "Ocurrió un error y la operación no puedo realizarse..." para notificar el fallo al comprador. -->
                <input type="hidden" name="cancel_return" value="http://cops.iseweb.com/tu_perfil.php?op=pago_incorrecto">
<!--0=> Hacer que la dirección de envio sea “opcional“;  1=>Hacer que la dirección de envio “no se requiera“; 2=> Hacer que la dirección de envio sea “obligatoria“;-->
                <input type="hidden" name="no_shipping" value="0">
                <input type="hidden" name="no_note" value="0">
                <!-- Mostramos el detalle de la compra -->



<!-- 

Retorno automatico:

Perfil > Perfil y configuracion > Mis herramientas de ventas > Preferencias del sitio Web> Retroseso automatico -->

 


 <?php
        if ($idioma == "es")

        {

            ?>

            <center> <input type="submit" name="Submit" id="boton_generico" value="Click para procesar su pago"></center>


            <?php

        }


        else if ($idioma == "en")

         {

            ?>

             <center> <input type="submit" name="Submit" id="boton_generico" value="Click to process your payment"></center>


            <?php

        }

        ?>

                 
              
            </fieldset>
        </form>