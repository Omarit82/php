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

            /** Arreglos  **/
            $arregloNombres = ["Fernando", "Franco", "Carlos", "Martin"];
            echo"<ul>";
            for($i=0; $i<count($arregloNombres); $i++){
                echo "<li>". $arregloNombres[$i]."</li>";
            }
            echo"</ul>";
            /** clave valor **/
            $array2 = [
                "omar"=>41,
                "male"=>38
            ];
            echo "<ul>";
            foreach ($array2 as $key => $valor) {
                echo "<li>".$key." ".$valor."</li>";
            }
            echo "</ul>";

            /** Constantes **/
            define("OMAR","Omar Roselli");
            echo OMAR;            
        ?>


    </body>
</html>