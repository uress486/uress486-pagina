    <?php 
        $title = "Funciones";
        include 'includes/header.php' 
    ?>
    <h1>Funciones</h1>

    <?php
        function escribirMensaje() //definir funcion 
        {
            echo "Eres una persona chida <br/>";
        }
        // Es bueno poner las funciones al incio no al final
        //Llamar Funcion
        escribirMensaje();
        echo "<hr/>";
        escribirMensaje();
        
        function addFuncion($num1, $num2) // crear parametros para la funcion
        {
            $resultado = $num1+ $num2;
            echo "La suma de $num1 + $num2 es: $resultado ";
        }
        //utilizar una funcion con parametro
        $num = 500;
        addFuncion(2, $num);
    ?>
<?php require 'includes/fooder.php' ?>