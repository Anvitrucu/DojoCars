<p class="titulo">Tu calificacion en #Led_Move es de <?php echo $calificacion." Puntos" ?></p><br><br><br>



<?php

if ($calificacion <= 5 )
{
	echo "<p class='titulo'>Tu tienda tiene el Rango de 'Principiante' <br><br>Invita a tus clientes a usar tu sistema para incrementar tu calificación</p>";
}


if ($calificacion > 5 &&  $calificacion <= 15 )
{
	echo "<p class='titulo'>Tu tienda tiene el Rango de 'Plata'<br> <br><br><br>Excelente Trabajo!!! Llega a 15 Puntos y aumentará automaticamente tu presencia en #Led_Move</p>";
}


if ($calificacion > 15)
{
	echo "<p class='titulo'>Tu tienda tiene el Rango de 'Profesionl' <br><br><br><br><br>Haz demostrado ser un emprendedor de primera!! Si ya certificaste tu tienda, tus productos empezaran a aparecer entre los primeros resultados de búsqueda</p>";
}



 ?>


 