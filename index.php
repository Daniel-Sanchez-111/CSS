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
    <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover">
            <caption>Descripcion de la tabla</caption>
            <thead class="table-dark">
                <tr>
                    <th>Encabezado 1</th>
                    <th>Encabezado 2</th>
                    <th>Encabezado 3</th>
                    <th>Encabezado 4</th>
                    <th>Encabezado 5</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                <tr>
                    <td>Contenido 1</td>
                    <td>Contenido 2</td>
                    <td>Contenido 3</td>
                    <td>Contenido 4</td>
                    <td>Contenido 5</td>
                </tr>
                <tr>
                    <td>Contenido 1</td>
                    <td>Contenido 2</td>
                    <td>Contenido 3</td>
                    <td>Contenido 4</td>
                    <td>Contenido 5</td>
                </tr>
                <tr>
                    <td>Contenido 1</td>
                    <td>Contenido 2</td>
                    <td>Contenido 3</td>
                    <td>Contenido 4</td>
                    <td>Contenido 5</td>
                </tr>
            </tbody>
            <tfoot class="table-secondary">
                <tr>
                    <td>Footer 1</td>
                    <td>Footer 2</td>
                    <td>Footer 3</td>
                    <td>Footer 4</td>
                    <td>Footer 5</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quo ipsam ullam. Ullam, doloremque molestiae soluta libero non aliquam assumenda placeat voluptatum obcaecati accusamus? Perspiciatis enim quos minus provident fugiat.</p>



    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>