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
    <!-- BREADCRUMBS -->
    <div class="container">
        <div class="row row-cols-1">
            <h1 class="text-center">BREADCRUMBS</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="" class=" text-decoration-none">Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="" class=" text-decoration-none">Libreria</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Informacion
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>