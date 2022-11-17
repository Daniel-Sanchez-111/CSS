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

        .btn-block {
            display: block;
            width: 100%;
        }
    </style>

</head>

<body>
    <!-- Forms -->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contenido-modal">
                    Abrir modal
                </button>

                <!-- Modal content -->
                <div class="modal fade" id="contenido-modal" tabindex="-1" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title">Titulo del modal</h2>
                                <button class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto voluptate unde cum magni ea officia ipsam explicabo, sequi quia excepturi placeat sapiente deserunt maiores blanditiis suscipit ab ducimus saepe vero similique repellat. Id laudantium repellat cum aliquid. Officia iste sequi in dolorum doloribus, cumque sapiente culpa distinctio accusantium, modi ratione explicabo minima praesentium sed eveniet fugit? Doloribus aspernatur doloremque exercitationem, suscipit asperiores eligendi quo deleniti inventore accusantium ipsum numquam, distinctio sequi repellat explicabo rem incidunt excepturi, animi nulla adipisci iusto quibusdam ipsam est? Neque modi tempora sed eveniet accusantium, aspernatur reiciendis ullam consectetur nisi quisquam dolore placeat est error expedita.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>