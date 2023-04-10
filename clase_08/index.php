<?php
// (void) -> string

function generateContent(): string {
    $exite_funcion = false;

    if($exite_funcion) {
        function bar() {
            echo "bar";
        }
    } else {
        function bar() {
            echo "bar2";
        }
    }
    return "Hello World!";
}


?>

<html>
    <head>
        <title>Clase 08</title>
    </head>
    <body>
        <!--?= generateContent() ?-->
    </body>
</html>

<?php
generateContent();
bar(); //error
echo "hola";
//if($exite_funcion) bar();
//echo generateContent();
?>
