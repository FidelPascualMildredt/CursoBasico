<?php
//dias de la semana
    $semana = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

    foreach($semana as $dias){
       echo $dias."<br>";
    }
//Frutas
    $frutas = array("Melon","Sandia","Uva","Fresa","Kiwi");

    foreach($frutas as $mifruta){
       echo $mifruta."<br>";
    }

//capitales del pais
    $capitales = array("Mexico"=>"Ciudad de Mexico","Japon"=>"Tokyo","China"=>"china");
    foreach($capitales as $capital=>$valores){
           echo "La Capital de ".$capital." es: ".$valores;
           echo "<br />";
    }

?>