<head>
    <title>For</title>
</head>

<body>
    <?php
    //imprimir del numero 1 al 20
    for($i=1;$i<=10;$i++)
    {
        echo $i;
    }


    //ejem. 2: tabla de multiplicar
    $num1 = 2;
    for($i=1;$i<=10;$i++)
    {
        $total = $num1 * $i;
        echo "$num1 x $i = $total <br>";
    }

    //ejem.3  de factorial de numero 5

    $factorial = 1;
    for($numero = 5; $numero > 1; $numero = $numero - 1 ) {
        $factorial = $factorial * $numero;
    }
    echo ' El factorial de ' . $numero . ' es ' . $factorial;

   //ejem4
   echo "No.Lista de alumnos aprovados";
    for($i=1; $i<=26; $i=$i+3){                
        echo "<br>";
        echo $i;
    }

    //ejemp5
    if ($ok == "Aprobados") {
        for($b=1; $b<=10; $b=$b+1)
        { echo $b." Aprobaron el curso <br> " ; };
        };

    ?>
</body>

</html>