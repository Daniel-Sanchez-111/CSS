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
            <ul class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action">
                    <div class="d-flex justify-content-between">
                        <strong>Nombre</strong>
                        <span class="text-muted">Fecha</span>
                    </div>
                    <span>Lorem ipsum dolor sit amet.</span>
                    <br>
                    <span class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi rerum hic facere! Nihil, ea fugit! Alias officia amet suscipit quo.</span>
                </a>
                <a class="list-group-item list-group-item-action">
                    <div class="d-flex justify-content-between">
                        <strong>Nombre</strong>
                        <span class="text-muted">Fecha</span>
                    </div>
                    <span>Lorem ipsum dolor sit amet.</span>
                    <br>
                    <span class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi rerum hic facere! Nihil, ea fugit! Alias officia amet suscipit quo.</span>
                </a>
                <a class="list-group-item list-group-item-action">
                    <div class="d-flex justify-content-between">
                        <strong>Nombre</strong>
                        <span class="text-muted">Fecha</span>
                    </div>
                    <span>Lorem ipsum dolor sit amet.</span>
                    <br>
                    <span class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi rerum hic facere! Nihil, ea fugit! Alias officia amet suscipit quo.</span>
                </a>
                <a class="list-group-item list-group-item-action">
                    <div class="d-flex justify-content-between">
                        <strong>Nombre</strong>
                        <span class="text-muted">Fecha</span>
                    </div>
                    <span>Lorem ipsum dolor sit amet.</span>
                    <br>
                    <span class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi rerum hic facere! Nihil, ea fugit! Alias officia amet suscipit quo.</span>
                </a>

            </ul>

        </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>