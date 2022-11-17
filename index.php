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
    <!-- PAGINACION -->
    <div class="container">
        <div class="row row-cols-1">
            <h1>Paginacion</h1>
            <nav>
                <ul class="pagination pagination-lg justify-content-center">
                    <li class="page-item disabled" disabled><a href="" class="page-link" aria-disabled>
                            <span aria-hidden="true">&laquo</span>
                        </a>
                    </li>
                    <li class="page-item active"><a href="" class="page-link">
                            1
                        </a>
                    </li>
                    <li class="page-item"><a href="" class="page-link">
                            2
                        </a>
                    </li>
                    <li class="page-item"><a href="" class="page-link">
                            <span aria-hidden="true">&raquo</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>