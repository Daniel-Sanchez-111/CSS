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
    <div class="container">
        <h2>Alerta</h2>
        <div class="alert alert-danger alert-dismissible fade show">
            Tiempo de espera agotado
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <p class="alert alert-success">Alerta success <a href="#" class="alert-link">Enlace</a></p>
    </div>


    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>