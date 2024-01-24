    <?php 
        $title = "Declaracion If";
        include 'includes/header.php' 
    ?>
    <h3 style = "color:red "></h3>

    <?php
        echo '<h1>if Statament <h1>';

        $grade = 50;
        if($grade <= 50)
        {
            echo '<h3 style = "color:red" > Has Reprobado</h3>';
        }
        else{
            echo '<h3 style = "color:green"> Aprobaste </h3>';
        }
        $grade ='C';
        if($grade == 'A')
        {
            echo '<h2 style = "color:blue"> Eres una super estrella <h2>';
        }
        elseif($grade == 'B')
        {
            echo '<h2 style = "color:orange">Algo es algo<h2>';
        }
        else
        {
            echo '<h2 style = "color:pink" >Tas menso<h2>';
        }
    ?>
    <?php require 'includes/fooder.php' ?>