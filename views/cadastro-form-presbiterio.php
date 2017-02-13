<?php require_once "../models/Crud.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>iStatic - webMinster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="tudo container">
    <?php include("menu.php") ?>
    <h2>Cadastrar Presbitério</h2>
    <form class="form-horizontal" method="post" action="../controllers/presbiterio.php">
        <div class="form-group">
            <label for="sinodo" class="col-xs-1">Sínodo</label>
            <div class="col-xs-3">
                <select name="sinodo" id="sinodo" class="col-xs-3 form-control">
                    <?php
                    foreach (Crud::select(Select::sinodos()) as $key) {
                        echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                    }
                    ?>
                </select>
            </div>
            <label for="nome" class="col-xs-1">Nome</label>
            <div class="col-xs-5">
                <input type="text" name="nome" id="nome" class="col-xs-5 form-control">
            </div>
            <label for="sigla" class="col-xs-1">Sigla</label>
            <div class="col-xs-1">
                <input type="text" name="sigla" id="sigla" class="col-xs-1 form-control" maxlength="4">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-5 col-xs-10">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
<section class="container">
    <div class="col-xs-6"></div>
    <div class="col-xs-6 tb-cadastrados">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Sinodos</th>
                <th>Presbitérios</th>
                <th>Sigla</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach (Crud::select(Select::presbiteriosGrid()) as $grid) {
                echo '<tr>';
                echo '<th scope="row">' . $grid['id'] . '</th>';
                echo '<td>' . $grid['sinodos'] . '</td>';
                echo '<td>' . $grid['presbiterios'] . '</td>';
                echo '<td>' . $grid['sigla'] . '</td>';
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>

