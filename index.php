<?php include './bd.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header" id="header">
            <h1>ADOPTAME</h1>
        </div>
        
        <?php
        echo '<div class="adoptame">';
        foreach ($lista as $value) {
            $numero_aux=rand(1,3);
            $template = '
            <div class="componente" id="componente">
                <img src="%s" alt="gatito" width="300px">
                <h2>%s</h2>
                <h3>%s</h3>
                <h3 class="active element" id="active ">Nacimiento: %s</h3>
                <h3 class="active element" id="active ">Raza: %s</h3>
                <h3 class="active element" id="active ">Sexo: %s</h3>
                <h3 class="active element" id="active ">Caracter: %s</h3>
                <form method="post">
                    <input type="submit" name="id_gato" value="Adoptar" class="button c-%s">
                </form>
            </div>';
            printf($template,
                    $value['plot'],
                    $value['nombre'],
                    $value['edad'],
                    $value['nacimiento'],
                    $value['raza'],
                    $value['sexo'],
                    $value['caracter'],
                    $numero_aux
                );
        }   
        echo '</div>';
        ?>
    </div>
    <script src="./index.js"></script>
</body>

</html>