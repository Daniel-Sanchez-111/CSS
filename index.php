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

        .btn-block {
            display: block;
            width: 100%;
        }
    </style>

</head>

<body>
    <!-- Navegacion -->
    <div class="container">
        <div class="row">

            <!-- Navegacion con UL -->
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Link 1
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Link 2
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Link 3
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Link 4
                    </a>
                </li>
            </ul>
            <!-- Navegacion con NAV -->
            <nav class="nav nav-tabs" id="nav1" role="tablist">

                <a href="#contenido1" class="nav-link active" id="link1" data-bs-toggle="tab" role="tab" aria-controls="contenido1" aria-selected="true">Link 1</a>

                <a href="#contenido2" class="nav-link" id="link2" data-bs-toggle="tab" role="tab" aria-controls="contenido2" aria-selected="false">Link 2</a>

                <a href="#contenido3" class="nav-link" id="link3" data-bs-toggle="tab" role="tab" aria-controls="contenido3" aria-selected="false">Link 3</a>

                <a href="#contenido4" class="nav-link" id="link4" data-bs-toggle="tab" role="tab" aria-controls="contenido4" aria-selected="false">Link 4</a>

            </nav>

        </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>