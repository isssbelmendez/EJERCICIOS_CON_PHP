<?php
/*Definimos el costo del producto y el monto depositado por el usuario */
$precioProducto = 0.75;
$montoDepositado = 5.00;

/*Calcular el cambio a devolver */
$cambio = $montoDepositado-$precioProducto;

/*Mostrar el cambio en pantalla */
//echo "Compra con exito. Cambio a devolver es de: $" .number_format($cambio,2);

/*OTRA FORMA DE MOSTRAR EL RESULTADO SOLO SI EL CAMBIO ES POSITIVO*/
if ($cambio >=0){
    echo "Compra realizada. Cambio a devolver es:$" .number_format($cambio,2);
}else{
    echo "El monto depositado es insuficiente para comprar una soda";
}

?>