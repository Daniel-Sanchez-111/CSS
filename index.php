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

    <div class="d-flex justify-content-around align-items-center h-100">

        <article class="mb-3 shadow-lg flex-item bg-primary">
            <img src="public/images/amogus.jpg" alt="" class="img-fluid">
        </article>

        <article class="mb-3 shadow-lg flex-item">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, sequi.</p>
            <figure class="figure">
                <img src="public/images/amogus.jpg" alt="" class="img-fluid img-thumbnail figure-img">
                <figcaption class="figure-caption">
                    <cite>
                        Nombre del autor
                    </cite>
                </figcaption>
            </figure>

        </article>

    </div>



    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>