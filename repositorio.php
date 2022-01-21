<?php
function transformar($dato)     # Paso de argumento por valor
{
    return $dato." transformado";
}
function calcularTotal($unidades, $precio, $iva)
{
    $subtotal=$unidades*$precio;
    $cuotaIva=$subtotal*$iva;
    $total=$subtotal+$cuotaIva;
    return $total;
}


function calcularTotal2($unidades, $precio, $tipoOperacion)
{
    $subtotal=$unidades*$precio;
    $cuotaIva=null;
    if($tipoOperacion=="normal")
    {
        $cuotaIva=$subtotal*0.21;
    }
    elseif($tipoOperacion=="reducido")
    {
        $cuotaIva=$subtotal*0.1;
    }
    else
    {
        $cuotaIva=$subtotal*0.04;
    }
    $total=$subtotal+$cuotaIva;
    return $total;
}

function manipularString($mensaje)
{
    return "Tu mensaje en mayúsculas: ".strtoupper($mensaje);
}

function primeraMayuscula($dato)
{
    #Retorna un dato con la primera letra en mayuscula
    return "<p>Tu dato en mayúsculas: ".ucfirst($dato)."</p>";
}

function reemplazar($valorBuscado,$valorReemplazar,$frase)
{
    // le das que buscas una a y que muestre una e
    return "<p>Tu valor cambiado ".str_replace($valorBuscado,$valorReemplazar,$frase)."</p>";
}

function mostrarMes($fecha)
{
    //envías la fecha y me retornas el mes en castellano
    return "<p>El mes es el: ".date("m",$fecha)."</p>";
    
}

function info()
{
    //muestra la versión de php y la versión del servidor apache
    return "<p>La versión de php es la: ".phpversion()."-- Y la de nuestro servidor apache es la:".apache_get_version()."</p>";
    
}

function numeroPrimo($numero)
{
    //retorna si el número introducido es primo o no
    gmp_prob_prime($numero);
    if($numero=="0")
    {
        return "<p>Su número no es primo</p>";
    }
    
    elseif($numero=="1")
    {
        return "<p>Su número es probablemente primo</p>";
    }
    else
    {
        return "<p>Su número es definitivamente primo</p>";
    }
}

function bisiesto($año)
{
    // Retorna si el año es bisiesto o no
    date("L",$año);
    if ($año==0)
    {
        return "<p>Su año no es bisiesto</p>";
    }
    else
    {
        return "<p>Su año es bisiesto</p>";
    }
    
}

