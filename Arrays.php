    <?php 
        $title = "Arrays";
        include 'includes/header.php' 
    ?>
    <h1> Arreglos </h1>
    <?php
        //a variable
        $num = 3;

        //an arrays
        // solo un tipo de variable
        //en php nos permite almacenar diferentes valores en un arreglo 
        $numeros = array(1,2,3,4,5,6,7,8,9,10);// matriz homogenea cuando solo tiene un tipo de variable

        echo $numeros[5]; 
        echo "<p>$numeros[9]<p>";

        $tamano = count($numeros);
        echo "<p> Tamaño del arreglo: $tamano</p>";


        //Interar dentro del arreglo por medio de un for para ver lo que esta dentro del arreglo
        for($count = 0; $count <= $tamano-1; $count++)
        {
            echo "<p>El Numero $count dentro del arreglo es: $numeros[$count]</p>";
        }
    ?>
<?php require 'includes/fooder.php' ?>