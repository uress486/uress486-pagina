    <?php 
        $title = "Switch";
        include 'includes/header.php' 
    ?>
    <h1>Switch Statement<h1>
        <?php

        $grade = 'A';
        switch($grade)
        {
            case 'A':
                echo 'ERES UNA ESTRELLA'; 
                break;
            case 'B':
                echo 'ALGO ES ALGO';
                break;
            default:
                echo 'TAS MENSO';
                break;
        }
        ?> 
<?php require 'includes/fooder.php' ?>