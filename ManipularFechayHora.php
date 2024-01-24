    <?php 
        $title = "Manipular Fecha y tiempo";
        include 'includes/header.php' 
    ?>
    <h1>Manipular Fecha y tiempo </h1>

    <?php
        //Obtener tiempo de la maquina si el tiempo de la maquina esta mal pues estará mal la hora

        $datenow = getdate();
        echo "El dia de hoy es: <br/>";
        echo $datenow['mday'] . '<br/>'; // dia del mes
        echo $datenow['mon'] . '<br/>'; // mes
        echo $datenow['year'] . '<br/>'; // año

        echo "Hoy es: ".$datenow['mon'].'/'.$datenow['mday'].'/'. $datenow['year']; 

        echo '<br/>'; 
        echo time();

        echo '<br/>';
        print date("m/d/y G.i:s <br/>", time()).'<br/>'; 
        print "Hoy es:";
        print date("j of F Y , \a\\t g.i a", time());

    ?>
<?php require 'includes/fooder.php' ?>