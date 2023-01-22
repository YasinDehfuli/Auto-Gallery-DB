<?php
require 'inc/config.php';
require 'inc/dbh.php';

$r = $dbh->query('SELECT * FROM autogallery ORDER BY `id` ASC ;')
    or die('ERROR TABLES');
 $gallery = $r->fetchAll();
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>Table-PHP</title>
    <style>

    </style>
</head>
<body>
<!--    <ul >-->
<!--        --><?php //foreach ($gallery as $cars): ?>
<!--        <li>-->
<!--            --><?php //echo $cars['brand_id'] ?>
<!--        </li>-->
<!--        --><?php //endforeach; ?>
<!--    </ul>-->
<table class="table table-bordered text-center bg-dark text-bg-light">
    <tr class="text-bg-dark">
        <th>ID</th>
        <th>BRAND</th>
        <th>MODEL</th>
        <th>COLOR</th>
        <th>YEAR</th>
        <th style="width: 140px ">#</th>
    </tr>
    <?php foreach ($gallery as $cars): ?>
    <tr class="bg-light">

        <td class="bg-secondary">
            <?php echo $cars['id'] ?>
        </td>
        <td>
                <?php echo $cars['brand_id'] ?>
        </td>
        <td>
                <?php echo $cars['model'] ?>
        </td>
        <td>
                <?php echo $cars['color_id'] ?>
        </td>
        <td>
                <?php echo $cars['date'] ?>
        </td>
        <td class="bg-light bg-gradient bg-dark rounded-3">
            <button class="bg-primary  rounded-pill">Edit</button>
            <button class="bg-danger border-5 rounded-3">X</button>
        </td>
        <?php endforeach; ?>
    </tr>
</table>
<br><br>
<hr>

<form action="GalleryStore.php" method="post" class="container">
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="brand">
                    Brand
                </label>
                <input type="text" id="brand" name="brand" value="" class="form-control">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="model">
                    Model
                </label>
                <input type="text" id="model" name="model" value="" placeholder="Model" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="color">
                    Color
                </label>
                <input type="text" id="color" name="color" value="" placeholder="Color" class="form-control">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="year">
                    Year
                </label>
                <input type="number" id="year" name="date" value="" placeholder="Year" class="form-control">
            </div>
        </div>
    </div>

    <div class="mt-2">
        <button class="btn btn-primary w-100">
            Save
        </button>
    </div>
</form>

</body>
</html>
