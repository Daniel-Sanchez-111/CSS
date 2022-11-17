<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <?php include_once('layout/head.template.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100vh;
        }

        .flex-item {
            width: 300px;
        }
    </style>

</head>

<body>
    <!-- Carousel -->
    <div class="container">
        <div class="row row-cols-1">
            <h1 class="text-center">List Group</h1>

            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between"> Titulo <span class="badge rounded-pill bg-dark">10</span></li>
                <li class="list-group-item d-flex justify-content-between"> Titulo <span class="badge rounded-pill bg-dark">10</span></li>
                <li class="list-group-item d-flex justify-content-between"> Titulo <span class="badge rounded-pill bg-dark">10</span></li>
                <li class="list-group-item d-flex justify-content-between"> Titulo <span class="badge rounded-pill bg-dark">10</span></li>
                <li class="list-group-item d-flex justify-content-between"> Titulo <span class="badge rounded-pill bg-dark">10</span></li>
                <li class="list-group-item d-flex justify-content-between"> Titulo <span class="badge rounded-pill bg-dark">10</span></li>
            </ul>

            <h1 class="text-center">Flexbox</h1>

            <div class="list-group list-group-flush col-4" id="grupolista" role="tablist">
                <a href="#contenido1" data-bs-toggle="list" role="tab" aria-controls="elemento1" id="elemento1" class="list-group-item list-group-item-action active">
                    Grupo de lista
                </a>
                <a href="#contenido2" data-bs-toggle="list" role="tab" aria-controls="elemento2" id="elemento2" class="list-group-item list-group-item-action">
                    Grupo de lista
                </a>
                <a href="#contenido3" data-bs-toggle="list" role="tab" aria-controls="elemento3" id="elemento3" class="list-group-item list-group-item-action">
                    Grupo de lista
                </a>

            </div>

            <div class="tab-content col-8" id="contenidoLista">
                <div class="tab-pane fade active show" role="tabpanel" id="contenido1" aria-labelledby="elemento1">
                    Contenido 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, itaque.
                </div>
                <div class="tab-pane fade" role="tabpanel" id="contenido2" aria-labelledby="elemento2">
                    Contenido 2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, sapiente!
                </div>
                <div class="tab-pane fade" role="tabpanel" id="contenido3" aria-labelledby="elemento3">
                    Contenido 3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, accusantium.
                </div>
            </div>
        </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>