<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios y PHP</title>
</head>
<body>
    <h1>Formularios y PHP</h1>

     <form action="procesar_datos_post.php" method="POST">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
