<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Hola mundo</h1>
        <p>Pagina dinamica</p>

        <?php
            /** Variables **/
            $nombre = "Omar Roselli";
            echo "<h2>".$nombre."</h2>";
            /** Constantes **/
            define("OMAR","Omar Roselli");
            echo OMAR;       
    
            /** Arreglos  **/
            $arregloNombres = ["Fernando", "Franco", "Carlos", "Martin"];
            echo"<ul>";
            for($i=0; $i<count($arregloNombres); $i++){
                echo "<li>". $arregloNombres[$i]."</li>";
            }
            echo"</ul>";
            /** clave valor **/
            $array2 = [
                "Omar"=>41,
                "Male"=>38
            ];
            echo "<ul>";
            foreach ($array2 as $key => $valor) {
                echo "<li>".$key." ".$valor."</li>";
            }
            echo "</ul>";

            $arregloEdades = [11,12,35,85];
            echo"<ul>";
            for($i=0; $i<count($arregloEdades); $i++){
                echo "<li>". $arregloEdades[$i]."</li>";
            }
            echo"</ul>";

            function imprimirArreglo($arr){
                echo"<ul>";
                for($i=0; $i<count($arr); $i++){
                    echo "<li>". $arr[$i]."</li>";
                }
                echo"</ul>";
            }
            echo "<h2> Arreglo impreso con la funcion </h2>";
            imprimirArreglo($arregloEdades);
            include 'funciones.php'; // Siempre utlizar require_once()

            suma(5,7);
        ?>


    </body>
</html>