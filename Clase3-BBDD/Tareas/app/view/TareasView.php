<?php
class TareasView { //Es recomendado que el nombre de la clase sea el mismo del archivo
    function __construct(){
        //En este caso el constructor no hace nada
    }
    function mostrar($titulo,$tareas){//Se pone solo mostrar porque es obvio que es mostrar tareas.
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title><?php echo $titulo ?></title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <base href="<?php BASE_URL ?>">
            </head>
            <body>
                <h1 class="p-5"><?php echo $titulo ?></h1>
                <div class="container">
                    <ul class="list-group">
                        <?php 
                        foreach ($tareas as $tarea) {
                            echo '<li class="list-group-item">'.$tarea->title.' | '.$tarea->description.'<a href="erase/'.$tarea->id.'" class="btn btn-danger ms-5">Borrar</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="container">
                    <form action="add" method="POST">
                        <div class="mb-3">
                            <label for="titulo" class="form-label p-3">Titulo: </label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="tituloForm">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label p-3">Descripción:</label>
                            <input type="text" class="form-control" name="descripcionForm">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="checkForm">
                            <label class="form-check-label" for="exampleCheck1">Completada</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Crear Tarea</button>
                    </form>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            </body>
        </html>
        <?php
    }
}