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
            <h1 class="text-center">Carousel</h1>
            <div class="carousel slide carousel-fade" id="carousel" data-bs-ride="false">
                
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./public/img/scooter-01.jpg" alt="" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Texto</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, eum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/scooter-02.jpg" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/scooter-03.jpg" alt="" class="d-block w-100">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>