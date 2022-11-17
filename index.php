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
        <div class="row justify-content-center">
            <form action="" method="POST" class="col-4">
                <div class="form-group">
                    <label for="" class=" form-label">Name</label>
                    <input type="text" name="name" value="" class="form-control form-control-sm">
                </div>
            </form>

        </div>
    </div>
    <?php include_once('layout/scripts.template.php'); ?>

</body>

</html>