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
    <!-- BOTONES -->
    <div class="container">
        <a href="" class="btn btn-primary btn-lg active" aria-pressed="true">Boton de enlace grande</a>
        <button class="btn btn-dark btn-sm" data-bs-toggle="button" aria-pressed="false">Boton con borde pequeño</button>
        <a href="" class="btn btn-primary disabled" aria-disabled="true">Boton de enlace desactivado</a>
        
        <div class="d-grid gap-2">
            <input type="submit" class="btn btn-success">
        </div>

    </div>


    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>