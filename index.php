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

        .btn-block{
            display: block;
            width: 100%;
        }
    </style>

</head>

<body>
    <!-- Collapse -->
    <div class="container">
        <div class="row row-cols-1">
            <div class="accordion col-4" id="accordion1">
                <div class="card">
                    <div class="card-header" id="id1">
                        <button class="btn btn-block collapsed text-start" data-bs-toggle="collapse" data-bs-target="#contenido1" aria-expanded="true" aria-controls="contenido1">
                            Boton 1
                        </button>
                    </div>

                    <div class="collapse" id="contenido1" data-bs-parent="#accordion1" aria-labelledby="id1">
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quas.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="id2">
                        <button class="btn btn-block collapsed text-start" data-bs-toggle="collapse" data-bs-target="#contenido2" aria-expanded="false" aria-controls="contenido1">
                            Boton 1
                        </button>
                    </div>

                    <div class="collapse" id="contenido2" data-bs-parent="#accordion1" aria-labelledby="id2">
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quas.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="id3">
                        <button class="btn btn-block collapsed text-start" data-bs-toggle="collapse" data-bs-target="#contenido3" aria-expanded="false" aria-controls="contenido3">
                            Boton 1
                        </button>
                    </div>

                    <div class="collapse" id="contenido3" data-bs-parent="#accordion1" aria-labelledby="id3">
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quas.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>