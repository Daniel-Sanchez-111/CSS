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
    <!-- Grupo de tarjetas -->
    <div class="container">
        <div class="row row-cols-1">
            <h1>Tarjetas</h1>
            <!-- Boton -->
            <button class="btn btn-primary" data-bs-toggle="collapse" aria-expanded="false" aria-controls="contenido1" data-bs-target="#contenido1">
                Collapse button
            </button>

            <!-- Contenido -->
            <div class="collapse" id="contenido1">
                <div class="card card-body">
                    Contenido a mostrar
                </div>
            </div>
        </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>