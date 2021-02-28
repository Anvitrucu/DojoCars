<?php 


$id_pedido = $_GET["id_pedido"];

echo "<p class='titulo'>SU RESERVA HA SIDO PROCESADA EXITOSAMENTE</p><br><br>";


echo "<p class='titulo' style='font-size:1.3rem'>Te invitamos a contactar a tu proveedor para afinar los detalles, igualmente podras imprimir tu comprobante cuando lo desees, buscando la opcion 'Tus Pedidos'</p><br><br>";

echo "<p class='titulo'><a target='_blanck' href='php/funciones/imprimir_comprobante.php?id_pedido=$id_pedido'>IMPRIMIR COMPROBANTE</a></p>"

?>