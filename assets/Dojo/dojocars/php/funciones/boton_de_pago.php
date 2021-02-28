 <?php 

 

    // https://dojocars.com/index.php?id_producto=1&menu=pide_cita_4&id_dat=204&pr=10.00

  /* $pago_total = str_replace('.','', $pago_total);

   $pago_total = str_replace(',','.', $pago_total);*/

    $_SESSION["numero_pago"] = "Pago_1";

     
    

    ?>

    <form action="https://www.paypal.com/cgi-bin/webscr"  method="POST">
    <fieldset>

    <!--Es el costo de envío.-->
    <input type="hidden" name="shipping" value="0">
    <!--Es el mensaje que verá en Paypal el usuario al finalizar el proceso de pago.-->
    <input type="hidden" name="cbt" value="¨Pago Procesado con Exito - Recuerde volver a su panel administrativo para cargar su comprobante dde pago">
    <input type="hidden" name="cmd" value="_xclick">
    <!--Es el método con que Paypal devolverá las variables a la página ipn_success.php (1 es get 2 es post).-->
    <input type="hidden" name="rm" value="2">
    <input type="hidden" name="bn" value="<?php echo $usuario_nombre; ?>">
    <!--Cantidad de productos-->
    <input type="hidden" name="quantity" value="1">

    <!--Es el mail que el vendedor registró en su cuenta de Paypal-->
    <input type="hidden" name="business" value="dojocars@gmail.com">
    <!--Es el detalle de lo que estamos vendiendo-->



    <input type="hidden" name="item_name" value="Your Order">

    <input type="hidden" name="item_number" value="212553211">
    <!--Es el importe total de la operación.-->
    <input type="hidden" name="amount" value="<?php echo $pago_total ?>">
    <!--Aquí podemos colocar cualquier variable que luego necesitemos para realizar nuestros procesos cuando Paypal redireccione al usuario a nuestra página de éxito. -->
    <input type="hidden" name="custom" value="<?php echo $pago_total ?>">
    <!--La moneda en que expresamos los valores:USD,GBP,JPY,CAD,EUR.-->
    <input type="hidden" name="currency_code" value="USD">


    <!--Es la ruta absoluta de la imagen que aparecerá en la cabecera de la página de Paypal cuando el comprador esté pagando. Se utiliza para que no perdamos del todo la identidad de nuestro site durante el proceso de pago, pero a menos que la imagen esté guardada en un servidor con protocolo HTTPS, es mejor dejar este campo en blanco ya que, si no lo hacemos de esa manera, cuando el comprador ingrese a Paypal le aparecerá un mensaje diciéndole que la página contiene elementos seguros y no seguros, cosa que puede asustar a algunos compradores. -->
    <input type="hidden" name="image_url" value="https://dojocars.com/img/DOJO_CARS_LOGO.png">
    <!--Aquí colocaremos la ruta absoluta a la página ipn_success.php. Es la página a la que Paypal redirecciona al comprador si el pago se realiza correctamente, y a la que envía las variables que utilizaremos para los procesos ligados a la compra: generar un envío de productos, enviar un mail, descontar del stock, cambiar un nivel de acceso, etc. -->

    <input type="hidden" name="return" value="https://dojocars.com/index.php?id_producto=1&menu=pide_cita_5&value=on">

    <!--En ella deberemos colocar un mensaje del tipo "Ocurrió un error y la operación no puedo realizarse..." para notificar el fallo al comprador. -->
    <input type="hidden" name="cancel_return" value="https://dojocars.com/index.php?id_producto=1&menu=pide_cita_5&value=off">
    <!--0=> Hacer que la dirección de envio sea “opcional“;  1=>Hacer que la dirección de envio “no se requiera“; 2=> Hacer que la dirección de envio sea “obligatoria“;-->
    <input type="hidden" name="no_shipping" value="0">
    <input type="hidden" name="no_note" value="0">
    <!-- Mostramos el detalle de la compra -->



    <!-- 

    Retorno automatico:

    Perfil > Perfil y configuracion > Mis herramientas de ventas > Preferencias del sitio Web> Retroseso automatico -->






    <center> <input type="submit" name="Submit" id="boton_generico" style="padding: 2%" value="Pay Here (Paypal -  Debit or Credit Card)"></center>
    </fieldset>
    </form>


 