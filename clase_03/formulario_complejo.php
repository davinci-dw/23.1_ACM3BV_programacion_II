<?PHP

$xMen = [
    "wolverine" => "Wolverine",
    "jean_grey" => "Jean Grey",
    "cyclops" => "Cyclops",
    "iceman" => "Iceman",
    "storm" => "Storm",
    "emma_frost" => "Emma Frost",
    "gambit" => "Gambit",
    "rogue" => "Rogue",
    "angel" => "Angel",
    "beast" => "Beast",
    "psylocke" => "Psylocke",
    "shadowcat" => "Shadowcat"
]

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario mas complejo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="css/styles.css" rel="stylesheet">
</head>


<body>
    <div class="container border bg-light p-3">

        <div class="row">
            <div class="col-12 bg-light mb-3 text-center">
                <h1>Un formulario un poco mas involucrado</h1>
            </div>
        </div>


        <section class="row justify-content-center p-3">


            <div class="col-12 bg-light p-3">
                <form action="procesar_datos_post.php" method="POST">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3 ">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                                <label for="nombre" class="form-label">Ingrese su Nombre</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3 ">
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
                                <label for="apellido" class="form-label">Ingrese su apellido</label>
                            </div>
                        </div>

                    </div>

                    <div class="row g-2">


                        <div class="col-md-4 col-lg ">
                            <div class="form-floating  mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" required>
                                <label for="email" class="form-label">Ingrese su email</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg ">
                            <div class="form-floating  mb-3">
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese su password" required>
                                <label for="email" class="form-label">Ingrese su password</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg ">
                            <div class="form-floating  mb-3">
                                <input type="password" class="form-control" id="pass_bis" name="pass_bis" placeholder="Ingrese su password nuevamente" required>
                                <label for="email" class="form-label">Ingrese su password nuevamente</label>
                            </div>
                        </div>
                    </div>





                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-2 fw-bold">¿Cuál es la mejor Tortuga Ninja?</div>

                                <div class="d-flex flex-wrap justify-content-start">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="leo" name="tortuga_favorita" value="Leonardo">
                                        <label class="form-check-label" for="leo">Leonardo</label><br>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="donnie" name="tortuga_favorita" value="Donatello">
                                        <label class="form-check-label" for="donnie">Donatello</label><br>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="mike" name="tortuga_favorita" value="Michelangelo">
                                        <label class="form-check-label" for="mike">Michelangelo</label><br>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="raph" name="tortuga_favorita" value="Raphael">
                                        <label class="form-check-label" for="raph">Raphael</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="mb-3 ">
                                <div class="mb-2 fw-bold">¿Cuáles miembros de los X-Men aceptarías en tu grupo de superhéroes?</div>
                                <div class="d-flex flex-wrap justify-content-start">
                                    <?PHP foreach ($xMen as $indice => $nombre) { ?>

                                        <div class="form-check form-check-inline form-switch flex-fill">
                                            <input class="form-check-input" type="checkbox" id="check_<?= $indice ?>" name="miembros_grupo[]" value="<?= $indice ?>">
                                            <label class="form-check-label" for="check_<?= $indice ?>"><?= $nombre ?></label>
                                        </div>

                                    <?PHP } ?>



                                </div>
                            </div>
                        </div>




                        <div class="col-md">
                            <div class="mb-3">

                                <div class="form-floating mb-3">
                                    <select class="form-control" id="color_pr2" required>
                                        <option value="" selected disabled>Seleccione</option>
                                        <option>Rojo</option>
                                        <option>Azul</option>
                                        <option>Rosa</option>
                                        <option>Amarillo</option>
                                        <option>Verde</option>
                                        <option>Negro</option>
                                        <option>Blanco</option>
                                        <option>Violeta</option>
                                        <option>Naranja</option>
                                    </select>
                                    <label for="color_pr2" class="form-label">Si fueras un Power Ranger ¿De qué color serias?</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="fav_2" id="fav_2" required>
                                    <option value="" selected disabled>Seleccione</option>

                                    <?PHP 
                                    $contadorXmens = 0;
                                    foreach ($xMen as $nombre) { 
                                        $contadorXmens++;
                                        ?>

                                        <option value="<?= $contadorXmens ?>"><?= $nombre ?></option>
                                    <?PHP } ?>

                                </select>
                                <label for="fav_2" class="form-label">Seleccione su X-Men favorito</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="date" name="nacimiento" id="nacimiento" min="1980-01-01" max="2005-01-01" value="1987-09-10">
                                <label for="nacimiento">Fecha de nacimiento:</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="ano_sec" id="ano_sec" required>
                                    <option value="" selected disabled>Seleccione</option>

                                    <?PHP for ($i=1975; $i <= 2021; $i++) {?>
                                        <option><?= $i ?></option>
                                    <?PHP } ?>

                                </select>
                                <label for="ano_sec" class="form-label">¿En que año terminas el secundario?</label>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">

                        <label for="vacaciones" class="form-label">¿Qué hiciste en tus vacaciones de verano?</label>
                        <textarea id="vacaciones" class="form-control" name="vacaciones" placeholder="Contanos en 200 caracteres o menos" maxlength="200"></textarea>

                    </div>


                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </section>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>