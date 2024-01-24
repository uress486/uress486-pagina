<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title> Primer - <?php echo $title ?></title>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <div class="container">
        <h2> Menu </h2>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Condiciones</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Arrays.php">Arreglos</a></li>
                <li><a class="dropdown-item" href="CicloFor.php">Ciclo For</a></li>
                <li><a class="dropdown-item" href="declaracionif.php">Condicion If</a></li>
                <li><a class="dropdown-item" href="Switch.php">Switch</a></li>
                <li><a class="dropdown-item" href="While_DoWhile.php">While_DoWhile</a></li>
                <li><a class="dropdown-item" href="funciones.php">Funciones</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="stringmanip.php">CadenaTexto</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ManipularFechayHora.php">Manipular_FechaHora</a>
            </li>
        </ul>
        <?php
            echo "<hr/>";
        ?>

