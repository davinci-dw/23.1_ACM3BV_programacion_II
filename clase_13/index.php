<?php
// (void) -> string
require_once "classes/Connection.php";
require_once "classes/Product.php";

function getContent() {
    $ObjProduct = new Product();
    return $ObjProduct->getAll();
}

function generateContent($list): string {
    //return json_encode($list);
    $html = "";
    foreach($list as $item) {
        $html .= "<div class='card'>";
        $html .= "<img src='{$item->getImagen()}' alt='Nombre'>";
        $html .= "<h2>{$item->getName()}</h2>";
        $html .= "<p>{$item->getDescripcion()}</p>";
        $html .= "<p>{$item->getPrecio()}</p>";
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