<?php 

/* // Usando un if, crear una condición que compare si la variable numeroIf es positivo, negativo, o 0.


// Crea un bucle While, este bucle tendrá que tener como condición que la variable numeroWhile sea inferior a 3, el bloque de código que tendrá el bucle deberá:
%     Incrementar el valor de la variable en uno cada vez que se ejecute.
%     Mostrarlo por pantalla cada vez que se ejecute.

 //Para el bucle Do While, deberás crear la misma estructura que en el While, pero solo se debe ejecutar una vez.

%// Para el bucle For, crea una variable numeroFor, esta variable tendrá como valor 0 y su condición será que la variable sea igual o menor que 3, se irá incrementando en 1 su valor cada vez que se ejecute y deberá mostrarse por pantalla.

// Por último, para el Switch, deberás crear la variable estacion, y distintos case para las cuatro estaciones del año. Dependiendo del valor de la variable estacion se deberá mandar un mensaje por consola informando de la estación en la que está. También habrá que poner un default para cuando el valor de la variable no sea una estación.  */

$numeroIf = 2;

if ($numeroIf < 0) {
    echo ("Numero Negativo");
}elseif ($numeroIf ==0) {
    echo("Numero es 0");
}else {
    echo("Numero Positivo");
}

$contador=0;
$numeroWhile =0;

while ($numeroWhile <4) {
    echo $numeroWhile ." ";
    $contador++;
    $numeroWhile=$contador;

}
do {
    echo $numeroWhile ." ";
    $contador++;
    $numeroWhile=$contador;
} while ($numeroWhile <1);

for ($numeroFor=0; $numeroFor < 3; $numeroFor++) { 
    echo $numeroFor;
}

$estacion ="Invierno";
switch ($estacion) {
    case 'Invierno':
        echo "Invierno";
        break;
    case 'Verano':
        echo "Verano";
        break;
    case 'Otoño':
        echo "Otoño";
        break;
    case 'Primavera':
        echo "Primavera";
        break;
    default:
        echo "Sin estacion";
        break;
}