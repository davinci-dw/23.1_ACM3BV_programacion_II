<?php
$miPrimerVariableEntera = 1; //entero
$miPrimerFloat = 1.0;
$miVariableBoolean = true; //boolean
$miPrimerResultado = $miPrimerFloat * $miPrimerVariableEntera;
$miPrimerString = "hola mundo"; //string
$miPrimerArray = [0, "1", 2, "hola", 4.5];
$miPrimerObjeto = [
    "ubicacion" => 0,
    "valorInicial" => "1",
    "mensaje" => "hola",
    "numero" => 4.5
];

?>

<!DOCTYPE html>
<html>
<head>
<script>
    let $miprimerVariableEntera = <?php echo $miPrimerVariableEntera ?>;
</script>
</head>
<body>
<p><?php echo $miPrimerVariableEntera?></p>
<p><?php echo "esta es una prueba de impresión:" . $miPrimerString . "y el valor es: . $miPrimerVariableEntera"?></p>
<p><?php print_r($miPrimerObjeto); ?></p>
</body>
</html>
