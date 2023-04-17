<?php
// (void) -> string

$misProductos = [
    [
        "nombre" => "Producto 1",
        "precio" => 100,
        "imagen" => "https://picsum.photos/200/200",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies ultricies, nunc nisl aliquet nisl, eget aliquet nisl ni"
    ],
    [
        "nombre" => "Producto 2",
        "precio" => 200,
        "imagen" => "https://picsum.photos/200/200",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies ultricies, nunc nisl aliquet nisl, eget aliquet nisl ni"
    ],
    [
        "nombre" => "Producto 3",
        "precio" => 300,
        "imagen" => "https://picsum.photos/200/200",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies ultricies, nunc nisl aliquet nisl, eget aliquet nisl ni"
    ],
    [
        "nombre" => "Producto 4",
        "precio" => 400,
        "imagen" => "https://picsum.photos/200/200",
        "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, nisl eget ultricies ultricies, nunc nisl aliquet nisl, eget aliquet nisl ni"
    ]
];

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
        <?= generateContent($misProductos) ?>
    </body>
</html>