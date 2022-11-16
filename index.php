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
        <div class="btn-group btn-group-vertical">
            <a href="" class="btn btn-primary btn-lg">Boton</a>
            <a href="" class="btn btn-secondary btn-lg">Boton</a>
            <a href="" class="btn btn-dark btn-lg">Boton</a>
        </div>

        <div class="btn-group btn-group-toggle" role="group" data-bs-toggle="buttons">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
        </div>
        <!-- <div class="d-grid gap-2">
            <input type="submit" class="btn btn-success">
        </div> -->

    </div>


    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>