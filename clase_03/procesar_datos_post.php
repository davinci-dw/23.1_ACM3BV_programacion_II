<?PHP
// LOS VALORES ENVIADOS POR POST VAN A FIGURAR EN LA VARIABLE SUPERGLOBAL $_POST
echo "<pre>";
print_r($_POST);
echo "</pre>";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$equipo = $_POST['miembros_grupo'];

echo "<p>El dato del campo nombre es: " . $nombre . "<br>";
echo "<p>El dato del campo apellido es: " . $apellido . "<br>";

$cantidadMiembros = 1;//count($equipo);

$textoMiembros = "";

foreach ($equipo as $valor) {
    $textoMiembros .= "<p>Bienvenido $valor</p>";
}

echo "<p>El grupo tiene ".$cantidadMiembros." miembros</p>";

echo $textoMiembros;
