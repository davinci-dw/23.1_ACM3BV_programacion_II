<?PHP
    // LOS VALORES ENVIADOS POR GET VAN A FIGURAR EN LA VARIABLE SUPERGLOBAL $_GET


    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];

    if(!$nombre) echo "El campo.....";

    echo "<p>El dato del campo nombre es: ".$_GET['nombre']." </p>";
    echo "<p>El dato del campo apellido es: $apellido </p>";

?>

<p>El dato del campo nombre es: <?= $nombre ?></p>
<p>El dato del campo apellido es: <?= $apellido ?></p>