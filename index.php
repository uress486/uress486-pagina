    <?php
        $title = "Index";
        include 'includes/header.php' 
    
    ?>
    <h1> INDEX<h1>
    <?php
        echo 'Hola Mundo';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

        $name = 'Josue';
        $age = 31;
        // Esta es la forma de comentar
        echo $name;
        echo '<h1> My name is: '.$name.' <h1>';
        echo '<h1> Mi edad es : '.$age .' <h1>';
        echo "<h1> My name is: $name con comillas dobles <h1>";

    ?>
    <button type="button" class="btn btn-outline-primary">CLIK ME</button>
    <?php
    require 'includes/fooder.php' 
    
    ?>