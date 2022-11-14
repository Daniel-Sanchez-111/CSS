<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <?php include_once('layout/head.template.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        
        .caja{
            width: 300px;
            height: 300px
        }
    </style>

</head>

<body>

        <!-- <div class="row row-cols-6 bg-success bg-opacity-75"">

        <div class=" col order-2 text-white-50 border border-5 rounded-3 border-dark">Columa</div>
        <div class="col order-3" style="color:white">Columna</div>
        <div class="col order-4" style="color:white">Columna</div>
        <div class="col order-1" style="color:white">Columna5</div>
        <div class="col order-lg-5 order-xs-1" style="color:white">Columna6</div>

        </div> 
        <div class="container-fluid">

        
        
            <div class=" clearfix">
                <p class=" bg-primary d-inline">Lorem ipsum dolor</p>
                <p class="bg-primary d-inline">Lorem ipsum dolor sit.</p>
            </div>
 
            <div class="ratio ratio-16x9">
                <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/u9TpV0IzjEQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div> -->
        <h2>height</h2>
         <div class="bg-black mb-4 d-flex caja">
                <div class="bg-danger mb-2 h-25">Caja 1</div>
                <div class="bg-primary mb-2 h-50">Caja 2</div>
                <div class="bg-secondary mb-2 h-75">Caja 3</div>
                <div class="bg-success mb-2 h-100">Caja 4</div>
                <div class="bg-warning mb-2 h-100">Caja 5</div>
                <div class="bg-info mb-2 h-100">Caja 6</div>
         </div>



    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>