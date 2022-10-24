/*005dinero.php: A partir de una cantidad de dinero, mostrar su 
descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1), 
para que el número de elementos sea mínimo. No se utilizar ninguna 
instrucción condicional. Por ejemplo, al introducir 138 debe mostrar:1 billete de 100
0 billete de 50
1 billete de 20
1 billete de 10
1 billete de 5
1 moneda de 2
2 monedas de 1
Tip: Puedes forzar a realizar la división entera mediante la función 
intdiv($dividendo, $divisor) o pasar un número flotante a entero puedes 
usar la función intval(). */

<?php 

$dinero =138;

while($dinero !=0){
    
    $cantidad = intdiv( $dinero, 500);
    echo"la cantidad de billetes de 500 es:".$cantidad;
    $dinero= $dinero % 500;

    $cantidad = intdiv( $dinero, 200);
    echo"la cantidad de billetes de 200 es:".$cantidad;
    $dinero= $dinero % 200;

    $cantidad = intdiv( $dinero, 100);
    echo"la cantidad de billetes de 100 es:".$cantidad;
    $dinero= $dinero % 100;

    $cantidad = intdiv( $dinero, 50);
    echo"la cantidad de billetes de 50 es:".$cantidad;
    $dinero= $dinero % 50;

    $cantidad = intdiv( $dinero, 20);
    echo"la cantidad de billetes de 20 es:".$cantidad;
    $dinero= $dinero % 20;

    $cantidad = intdiv( $dinero, 10);
    echo"la cantidad de billetes de 10 es:".$cantidad;
    $dinero= $dinero % 10;


break;
}







?>
