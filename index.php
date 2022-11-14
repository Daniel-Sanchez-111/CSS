<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <?php include_once('layout/head.template.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



</head>

<body>


    <div class="container-fluid">

        <div class="row row-cols-6 bg-success bg-opacity-75"">
            <div class=" col order-2 text-white-50 border border-dark">Columa
                <div class="row">
                    <div class="col">Columna anidada</div>
                    <div class="col">Columna anidada 2</div>
                </div>
            </div>

            <div class="col order-3" style="color:white">Columna</div>
            <div class="col order-4" style="color:white">Columna</div>
            <div class="col order-1" style="color:white">Columna5</div>
            <div class="col order-lg-5 order-xs-1" style="color:white">Columna6</div>

        </div>
    </div>




    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>