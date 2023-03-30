<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include / Require / Once</title>
</head>

<body>
    <h1>Include / Require / Once</h1>

    <?PHP
    require_once "contenido/contenido_a.php";
    require_once "contenido/contenido_b.php";
    require_once "contenido/contenido_b.php";
    require_once "contenido/contenido_b.php";
    require_once "contenido/contenido_a-1.php";
    require_once "contenido/contenido_b.php";
    require_once "contenido/contenido_b.php";





    //include -  Incluye el contenido de otros archivos y si no los encuentra, dispara un warning y sigue ejecutando el código.

    //require -  Incluye el contenido de otros archivos y si no los encuentra, dispara un fatal error y deja de ejecutar el código.

    //_once - ambas tienen la variante once, que se asegura que únicamente se incluyan una sola vez, cualquier llamada más allá de eso, será ignorada.

    //require "contenido/contenido_a.php";

    //require_once "contenido/contenido_a.php";
    //include_once "contenido/contenido_a.php";

    ?>
</body>

</html>