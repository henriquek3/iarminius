<?php
require_once "../models/Crud.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>iStatic - webMinster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://iarminius.ipcacoal.org/views/vendor/bootstrap/4.0.0-alpha.5-dist/css/bootstrap.css"
          rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        .carregando {
            color: #ff0000;
            display: none;
        }

        .carregandoPresbiterios {
            color: #ff0000;
            display: none;
        }

        .loadChurch {
            color: #ff0000;
            display: none;
        }
    </style>
</head>
<body>

<?php include("menu.php") ?>
<div class="tudo container">
    <div class="col-xs-offset-4 col-xs-12"><h2 class="h2-titulo">Cadastrar Oficial</h2></div>
    <form class="form-horizontal" method="post" action="../controllers/presbiteros.php">

        <!-- SELECIONAR SINODO E PRESBITÉRIO -->

        <div class="row-txt form-group row">
            <label for="idSinodo" class="col-form-label col-xs-1">Sínodo</label>
            <div class="col-xs-3">
                <select name="idSinodo" id="idSinodo" class="input-txt form-control">

                    <option selected>- selecione -</option>
                    <?php
                    foreach (Crud::select(Select::sinodos()) as $key) {
                        echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                    }
                    ?>
                    <!-- CÓDIGO SINODO -->
                </select>
            </div>

            <label for="idPresbiterio" class="col-form-label col-xs-1">Presbitério</label>
            <div class="col-xs-3">
                <span class="carregandoPresbiterios">Aguarde, carregando...</span>
                <select name="idPresbiterio" id="idPresbiterio" class="input-txt form-control">
                    <option selected>- selecione -</option>
                    <!-- CÓDIGO SINODO -->
                </select>
            </div>

            <label for="igreja" class="col-form-label col-xs-1">Igrejas</label>
            <div class="col-xs-3">
                <span class="loadChurch">Aguarde, carregando...</span>
                <select name="igreja" id="igreja" class="input-txt form-control">
                    <option selected>- selecione -</option>
                    <!-- CÓDIGO SINODO -->
                </select>
            </div>
        </div>

        <!---------------------------------------------------->

        <!-- NOME E E-MAIL -->

        <div class="row-txt form-group row">
            <label for="nome" class="col-xs-1 col-form-label">Nome</label>
            <div class="col-xs-8">
                <input type="text" required name="nome" id="nome" class="input-txt form-control">
            </div>
            <label for="tipoPresbitero" class="col-xs-1 col-form-label">Ofício</label>
            <div class="col-xs-2">
                <select name="tipoPresbitero" id="tipoPresbitero" class="input-txt form-control">
                        <option value="0">Presbítero</option>
                        <option value="1">Pastor</option>
                </select>
            </div>


        </div>

        <!---------------------------------------------------->

        <!-- ENDEREÇO, NÚMERO E COMPLEMENTO -->

        <div class="row-txt form-group row">
            <label for="endereco" class="col-xs-1 col-form-label">Endereço</label>
            <div class="col-xs-3">
                <input type="text" required name="endereco" class="input-txt form-control">
            </div>
            <label for="enderecoNumero" class="col-xs-1 col-form-label">Número</label>
            <div class="col-xs-1">
                <input type="number" required name="enderecoNumero" id="enderecoNumero" class="input-txt form-control"
                       pattern="[0-9]+$">
            </div>
            <label class="col-xs-1 col-form-label" for="enderecoComplemento">Complemento</label>
            <div class="col-xs-2">
                <input type="text" required name="enderecoComplemento" id="enderecoComplemento"
                       class="input-txt form-control">
            </div>
            <label for="enderecoBairro" class="col-xs-1 col-form-label">Bairro</label>
            <div class="col-xs-2">
                <input type="text" required name="enderecoBairro" id="enderecoBairro" class="input-txt form-control">
            </div>

        </div>

        <!---------------------------------------------------->

        <!-- BAIRRO, CIDADE e ESTADO -->

        <div class="row-txt form-group row">

            <label for="estados" class="col-xs-1 col-form-label">Estado</label>
            <div class="col-xs-2">
                <select class="form-control col-form-label" required id="estados" name="estados" required>
                    <option selected>UF</option>
                        <?php
                        foreach (Crud::select(Select::estados()) as $estados) {
                            echo '<option value="' . $estados['id_estado'] . '">' . $estados['uf_nome'] . "</option>";
                        }
                        ?>
                </select>
            </div>
            <label for="idCidade" class="col-xs-1 col-form-label">Cidade</label>
            <div class="col-xs-2">
                <span class="carregando">Aguarde, carregando...</span>
                <select class="input-txt form-control" id="idCidade" name="idCidade" required>
                    <option value="">- selecione -</option>
                </select>

            </div>
            <label for="cep" class="col-xs-1 col-form-label">CEP</label>
            <div class="col-xs-2">
                <input type="number" required name="cep" id="cep" class="input-txt form-control" pattern="[0-9]+$">
            </div>
            <label for="cxPostal" class="col-xs-1 col-form-label">Cx. Postal</label>
            <div class="col-xs-2">
                <input type="number" required name="cxPostal" id="cxPostal" class="input-txt form-control"
                       pattern="[0-9]+$">
            </div>

        </div>

        <!---------------------------------------------------->

        <!-- CEP, TELEFONE, FAX E CX POSTAL -->

        <div class="row-txt form-group row">

            <label for="telefone" class="col-xs-1 col-form-label">Telefone</label>
            <div class="col-xs-2">
                <input type="number" required name="telefone" id="telefone" class="input-txt form-control"
                       pattern="[0-9]+$">
            </div>

            <label for="email" class="col-xs-1 col-form-label">E-mail</label>
            <div class="col-xs-5">
                <input type="email" required name="email" id="email" class="input-txt form-control">
            </div>

        </div>

        <!---------------------------------------------------->


        <div class="form-group">
            <div class="btn-teste col-xs-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>


    </form>

</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU"
        crossorigin="anonymous"></script>

</body>
</html>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("jquery", "1.4.2");
</script>
<script type="text/javascript">
    $(function () {
        $('#estados').change(function () {
            if ($(this).val()) {
                $('#idCidade').hide();
                $('.carregando').show();
                $.getJSON('../controllers/request_cidades.php?search=', {
                    id_estado: $(this).val(),
                    ajax: 'true'
                }, function (j) {
                    var options = '<option value="">- Escolha -</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
                    }
                    $('#idCidade').html(options).show();
                    $('.carregando').hide();
                });
            } else {
                $('#idCidade').html('<option value="">– Escolha –</option>');
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#idSinodo').change(function () {
            if ($(this).val()) {
                $('#idPresbiterio').hide();
                $('.carregandoPresbiterios').show();
                $.getJSON('../controllers/request_presbiterios.php?search=', {
                    id_sinodo: $(this).val(),
                    ajax: 'true'
                }, function (j) {
                    var options = '<option value="">- Escolha -</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
                    }
                    $('#idPresbiterio').html(options).show();
                    $('.carregandoPresbiterios').hide();
                });
            } else {
                $('#idPresbiterio').html('<option value="">– Escolha –</option>');
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#idPresbiterio').change(function () {
            if ($(this).val()) {
                $('#igreja').hide();
                $('.loadChurch').show();
                $.getJSON('../controllers/request_igrejas.php?search=', {
                    id_presbiterio: $(this).val(),
                    ajax: 'true'
                }, function (j) {
                    var options = '<option value="">- Escolha -</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
                    }
                    $('#igreja').html(options).show();
                    $('.loadChurch').hide();
                });
            } else {
                $('#igreja').html('<option value="">– Escolha –</option>');
            }
        });
    });
</script>


<!-- Initialize Bootstrap functionality -->
<script>
    // Initialize tooltip component
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>   