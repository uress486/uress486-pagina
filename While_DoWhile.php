    <?php 
        $title = "While y DoWhile";
        include 'includes/header.php' 
    ?>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        /*Bucle Infinito
        while($grade < 10){
            echo '<p> Tiene menos de 10 </p>';
        }
        */
        //Bucle de condicion previa
        while($grade < 10)
        {
            echo '<p> Tienes menos de 10 <p>';
            $grade++;
        }
        echo 'Salio del Bucle';
    ?>

    <h1>Do-While</h1>
    <?php
    //Buclde de condicon posterior
        $grade = 0;
        do{
            echo '<p> Estamos en el ciclo Do-While</p>';
            $grade++;
        }while($grade <10);

        echo 'Salimos del Bucle Do-While';
    ?>
<?php require 'includes/fooder.php' ?>