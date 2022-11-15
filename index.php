<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <?php include_once('layout/head.template.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        .caja {
            width: 300px;
            height: 300px
        }

        .flex-content {
            width: 500px;
            height: 500px;
        }

        .flex-item {
            width: 100px;
            height: 100px;
        }
    </style>

</head>

<body>

    <blockquote class="blockquote">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat eius obcaecati esse, nihil officia nesciunt?</p>
        <footer class="blockquote-footer">
            <cite>Miguel luis perez</cite>
        </footer>
    </blockquote> 

    <div class="d-flex flex-row d-lg-flex flex-wrap bg-black text-white text-center flex-content">
    <div class="flex-item p2 bg-info">1</div>
    <div class="flex-item p2 bg-warning">2</div>
    <div class="flex-item p2 flex-grow-1 bg-success">3</div>
    </v>

    <em>Texto EM</em>
    <abbr title="texto abbr">Texto abbr</abbr>
    <kbd>Texto kbd</kbd>
    <var>Texto var</var>
    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
    <p><del>This line of text is meant to be treated as deleted text.</del></p>
    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
    <p><u>This line of text will render as underlined.</u></p>
    <p><small>This line of text is meant to be treated as fine print.</small></p>
    <p><strong>This line rendered as bold text.</strong></p>
    <p><em>This line rendered as italicized text.</em></p>
    <div class="row row-cols-6 bg-success bg-opacity-75"">

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
    </div>
    <h2>height</h2>
    <div class="bg-black mb-4 d-flex caja">
        <div class="bg-danger mb-2 h-25">Caja 1</div>
        <div class="bg-primary mb-2 h-50">Caja 2</div>
        <div class="bg-secondary mb-2 h-75">Caja 3</div>
        <div class="bg-success mb-2 h-100">Caja 4</div>
        <div class="bg-warning mb-2 h-100">Caja 5</div>
        <div class="bg-info mb-2 h-100">Caja 6</div>
    </div>

    <div class="container bg-info">
        <div class="row row-cols-1">
            <p class="text-start">Texto a la izquierda</p>
            <p class="text-end">Texto a la derecha</p>
            <p class="text-center">Texto centrado</p>
            <p class="text-justify">Texto justificado.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta fuga eligendi in qui earum, id tenetur,
                voluptates obcaecati vel ullam alias placeat officia illum suscipit
                saepe laudantium aut commodi minima atque,
                ut adipisci? Accusamus odit voluptatum natus quas quis?
                Consectetur quasi consequatur distinctio laudantium eveniet accusantium earum error mollitia nobis?
            </p>
            <p class="text-uppercase fw-bold">texto en mayusculas y negritas</p>
            <p class="text-lowercase fw-bolder">Texto en minusculas y con mas peso de negritas</p>
            <p class="text-capitalize fst-italic">transformacion capital</p>
        </div>
    </div>

    <div class="container">
        <div class="row text-white text-center justify-content-center">
            <div class="col-3 bg-danger visible">Visible</div>
            <div class="col-3 bg-info invisible">Invisible</div>
            <div class="col-3 bg-success">Normal</div>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1">
            <p class="bg-secondary">alineacion <span class="align-top bg-info">top</span></p>
            <p class="bg-secondary">alineacion <span class="align-baseline bg-info">baseline</span></p>
            <p class="bg-secondary">alineacion <span class="align-bottom bg-info">bottom</span></p>
            <p class="bg-secondary">alineacion <span class="align-text-top bg-info">texto top</span></p>
            <p class="bg-secondary">alineacion <span class="align-text-bottom bg-info">texto bottom</span></p>
            <p class="bg-secondary">alineacion <span class="align-middle bg-info">middle</span></p>
        </div>
        <div class="row row-cols-1">
            <h2>Celdas</h2>
            <table border class="mb5" style="height: 100px;">
                <tbody>
                    <tr>
                        <td class="align-baseline">baseline</td>
                        <td class="align-top">top</td>
                        <td class="align-middle">middle</td>
                        <td class="align-bottom">bottom</td>
                        <td class="align-text-top">text-top</td>
                        <td class="align-text-bottom">text-bottom</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>  




    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>