<?php require_once "../models/Crud.php";
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 12/02/2017
 * Time: 17:15
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<section class="container">
    <div class="col-xs-6"></div>
    <div class="col-xs-6">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Sinodos</th>
                <th> </th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ( Crud::select(Select::sinodos()) as $gridGrupo ){
                echo '<tr>';
                echo '<th scope="row">'.$gridGrupo['id'].'</th>';
                echo '<td>'.$gridGrupo['nome'].'</td>';
                echo '<td>'.' '.'</td>';
                echo '<td align="right">
                        <button type="button" class="btn btn-outline-primary btn-sm" 
                        data-toggle="modal" data-target="#modalGrupos" 
                        data-idgrupo="'.$gridGrupo['id'].'" data-nome="'.$gridGrupo['nome'].'">Alterar</button>'.
                    ' '.
                    '<a href="#">
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button><a/>'.'</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>

</section>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>