<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones y estructuras</title>
</head>
<body>
    
    <h2>Ejemplo con funciones y estrcuturas de control</h2>
    <?php
    require_once("repositorio.php");
        echo "<h3>Ejercicio 1:</h3>";
        $resultado=transformar("Primer dato");
        echo $resultado;

        echo "<p>El total de la factura es: " .$totalFactura=calcularTotal(100,4.95,0.21)."€ (Iva incluido)</p>";
    
        echo "<p>El total de la factura es: " .$totalFactura=calcularTotal2(100,4.95,"sad")."€ (Iva en función del tipo)</p>";

        echo $mensajeResultado=manipularString("<p>En un lugar de la Mancha...</p>");

        echo $datoResultado=primeraMayuscula("primer dato");
        
        echo $reemplazarCaracter=reemplazar("a","e","Esta es la frase a reemplazar");
        
        echo $esBisiesto=bisiesto(2016);

        echo $mes=mostrarMes(21/01/2022);

        echo $información=info();
        
        echo $primo=numeroPrimo(5)
    ?>





</body>
</html>


