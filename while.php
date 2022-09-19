<head>
    <title>While</title>
</head>

<body>
    <?php
    //imprimir del numero 1 al 20
    $i=10;
    while($i <= 50)
    {
        echo $i;
        $i++;
    }

//ejem.2 imprimir numero que aumente de dos en dos hasta al 20
$m=2; 
    while($m <=20){ 
         echo $m;
         echo "<br>";
         $m+=2; //incrementamos en 2 la variable id por cada ciclo.
    }


// ejem.3 mostraremos números menores a 20
$numero = 0; 
while($numero < 20) {
$numero++; 
echo "El valor de numero es = <b> ".$numero."</b></br> ";
}

echo "<br>El ciclo while acabó en ".$numero."";
    
    ?>
</body>

</html>