    <?php 
        $title = "Manupular Texto";
        include 'includes/header.php' 
    ?>
    <h1>Manupular Texto</h1>
    <?php
        $frase1 = "Esta es la frase 1";
        $frase2 = " Esta es la frase 2";
        

        /*/ Concatenacion: es juntar bloques de valores
        echo $frase1;
        echo $frase2; 
        */

        $name = "josue uresti";
        echo $frase1 . " ,se unio esta parte con esta,". $frase2; 
        echo '<br/>';
        echo '<hr/>'; // Separar areas con linea
        //Manipulacion de string

        echo 'Primera letra mayuscula:'. ucfirst($name).'<br/>'; // solo la primera palabra en mayuscula
        echo 'Primeras letras mayuscula:'. ucwords($name).'<br/>'; // cada incio de palabra mayusucala
        echo 'Todas las letra mayuscula:'. strtoupper($name).'<br/>'; // todo en mayuscula
        echo 'Todas las letra mayuscula:'. strtolower("ANTES ESTABA EN MAYUSCULA").'<br/>'; // todo en minuscual
    
        echo '<hr/>';

        echo 'Repetir cadena:'. str_repeat('a',10). '<br/>';
        echo 'Repetir cadena:'.strtoupper(str_repeat('a',10)). '<br/>'; // repetir varias veces la cadena primero la cadena y despues el tiempo

        echo '<hr/>';

        echo 'Obtener cierta cantidad de letras: '. substr($name, 2,10). '<br/>';

        echo 'Obtener posicion de letras: '. strpos($name, "u").'<br/>'; // saber en que parte se tiene esa letra

        echo 'Obtener cierta cantidad de letras: '. strchr($name, "e"). '<br/>'; // recorre la palabra desde donde empeza la letra
        echo 'Obtener cierta cantidad de letras: '. strchr($name, "o"). '<br/>';
        echo 'Obtener cierta cantidad de letras: '. strchr($name, "u"). '<br/>';
        echo 'Obtener cierta cantidad de letras: '. strchr($name, "j"). '<br/>'; // busca de la palabra original

        echo 'Longitud de cadena: '. strlen($name). '<br/>'; // saber longitud de cadena

        echo '<hr/>';

        echo 'Sin recorte: '. "A". "B C D". "E". '<br/>';
        echo 'Sin recorte: '. "A". trim("B C D"). "E". '<br/>';
        echo 'Sin recorte: '. "A". ltrim("B C D"). "E". '<br/>';
        echo 'Sin recorte: '. "A". rtrim("B C D"). "E". '<br/>';
        
        
    ?>
<?php require 'includes/fooder.php' ?>