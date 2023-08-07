<?php
/*Declaramos nuestra variable */
$cantidad = 100;
/*Usamos una condicional que permite la ejecucion de la cantidad */
if($cantidad ==100){
    echo "¡Ganaste $40.00!";
    /* Usamos el elseif para ir estableciendo las condicones*/
}elseif ($cantidad ==200){
    echo "¡Ganaste $60.00!";
}elseif ($cantidad ==400){
    echo "¡Ganaste $80.00!";
}elseif ($cantidad ==500){
    echo "¡Ganaste $100.00";
    /*Usamos el else para para determinar si se cumple o no la condicion */
}else{
    echo "Lo siento, no ganaste ningun premio";
}



?>