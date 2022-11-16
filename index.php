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
    <!-- BADGES -->
    <div class="container">
        <div class="row row-cols-1">
            <h1 class="text-center">
                Badges
            </h1>
            <h2>Relleno</h2>
            <p>Texto <span class="badge rounded-pill bg-success">Secondary</span></p>

        </div>
        <button class="col col-auto btn btn-primary rounded-pill">
            Notificaciones <span class="badge  bg-light text-dark">4</span>
        </button>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>