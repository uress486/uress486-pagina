    <?php 
        $title = "Ciclo For";
        include 'includes/header.php' 
    ?>
    <h1>For Loop<h1>

    <?php
    //For loop
        for($count = 0; $count<10; $count++)
        {
            echo '<p> Hola mundo </p>';
        }

        for($count = 0; $count<10; $count++)
        {
            echo "<p>El contador es : $count</p>"; // el <p> sirve tambien para hacer saltos de lineas
        }
    ?>
<?php require 'includes/fooder.php' ?>