<?php
// (void) -> string
require_once "classes/Conection.php";

$ObjConection = new Conection();
$conection = $ObjConection->getConection();

function getContent() {
    $content = file_get_contents("products.json"); //string
    $contentConversion = json_decode($content, true); //object
    return $contentConversion["products"];
}

function generateContent($list): string {
    //return json_encode($list);
    $html = "";
    foreach($list as $item) {
        $html .= "<div class='card'>";
        $html .= "<img src='{$item['imagen']}' alt='Nombre'>";
        $html .= "<h2>{$item['nombre']}</h2>";
        $html .= "<p>{$item['descripcion']}</p>";
        $html .= "<p>{$item['precio']}</p>";
        $html .= "</div>";
    }
    return $html;
}


?>

<html>
    <head>
        <title>Clase 09</title>
    </head>
    <body>
        <?= generateContent(getContent()) ?>
    </body>
</html>