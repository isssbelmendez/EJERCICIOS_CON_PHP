<?php
/*Declaramos las variables */
$precioPorJuego = 1;
$depositoInicial =5;
$balance = $depositoInicial;

/*Establecemos una condicion para determinar si puede seguir jugando o no segun su saldo actual */
while ($balance >= $precioPorJuego){
    echo "Saldo actual: $" .$balance. "Sigue jugando <br>";
    $balance -= $precioPorJuego;
}

echo "Se agotaron los fondos. ¡Hasta la proxima!<br>";

?>
