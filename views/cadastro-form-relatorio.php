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
    </style>
</head>

<body>

<?php include("menu.php") ?>

<div class="container">

    <div class="form-group row">

        <div class="col-md-12"><h3 class="h2-titulo text-xs-center text-uppercase">Informações Cadastrais e Estatísticas
                de Comunidade Presbiteriana</h3></div>

        <form class="form-horizontal" method="post" action="../controllers/relatorio.php">

            <!-- SELECIONAR SINODO E PRESBITÉRIO -->

            <div class="row-txt form-group row">
                <label for="idSinodo" class="col-md-1">Sínodo</label>
                <div class="col-md-3">
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

                <label for="idPresbiterio" class="col-md-1">Presbitério</label>
                <div class="col-md-4">
                    <span class="carregandoPresbiterios">Aguarde, carregando...</span>
                    <select name="idPresbiterio" id="idPresbiterio" class="input-txt form-control">
                        <option selected>- selecione -</option>
                        <!-- CÓDIGO SINODO -->
                    </select>
                </div>
                <div class="row-txt form-group row">
                    <div class="col-md-3"></div>
                    <label for="ano" class="col-md-1">Ano Ref.</label>
                    <div class="col-md-2">
                        <input type="number_format" required name="ano" id="ano" class="form-control">
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>

            <!---------------------------------------------------->


            <!-- I - IDENTIFICAÇÃO DA IGREJA / CONGREGAÇÃO PRESBITERIAL -->
            <div class="col-md-12"><h3 class="h2-titulo text-xs-center text-uppercase">I - iDENTIFICAÇÃO DA IGREJA /
                    congregação presbiterial</h3></div>

            <!-- NOME -->

            <div class="row-txt form-group row">
                <label for="nome" class="col-md-1 col-form-label">Nome</label>
                <div class="col-md-11">
                    <select name="idIgreja" id="idIgreja" class="input-txt form-control">

                        <option selected>- selecione -</option>
                        <?php
                        foreach (Crud::select(Select::igrejas()) as $key) {
                            echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                        }
                        ?>
                        <!-- CÓDIGO SINODO -->
                    </select>
                </div>


            </div>

            <!---------------------------------------------------->

            <!-- ENDEREÇO, NÚMERO, COMPLEMENTO E BAIRRO-->

            <div class="row-txt form-group row">
                <label for="endereco" class="col-md-1 col-form-label">Endereço</label>
                <div class="col-md-3">
                    <input type="text" disabled required name="endereco" class="input-txt form-control">
                </div>
                <label for="enderecoNumero" class="col-md-1 col-form-label">Número</label>
                <div class="col-md-1">
                    <input type="number_format" disabled required name="enderecoNumero" id="enderecoNumero"
                           class="input-txt form-control" pattern="[0-9]+$">
                </div>
                <label class="col-md-1 col-form-label" for="enderecoComplemento">Complemento</label>
                <div class="col-md-2">
                    <input type="text" disabled required name="enderecoComplemento" id="enderecoComplemento"
                           class="input-txt form-control">
                </div>
                <label for="enderecoBairro" class="col-md-1 col-form-label">Bairro</label>
                <div class="col-md-2">
                    <input type="text" disabled required name="enderecoBairro" id="enderecoBairro"
                           class="input-txt form-control">
                </div>

            </div>

            <!---------------------------------------------------->

            <!-- ESTADO, CIDADE, CEP E CX. POSTAL -->

            <div class="row-txt form-group row">

                <label for="estados" class="col-md-1 col-form-label">Estado</label>
                <div class="col-md-2">
                    <input type="text" disabled required name="estados" id="estados" class="input-txt form-control">
                </div>
                <label for="idCidade" class="col-md-1 col-form-label">Cidade</label>
                <div class="col-md-2">
                    <input type="text" disabled required name="idCidade" id="idCidade" class="input-txt form-control">

                </div>
                <label for="cep" class="col-md-1 col-form-label">CEP</label>
                <div class="col-md-2">
                    <input type="number_format" disabled required name="cep" id="cep" class="input-txt form-control"
                           pattern="[0-9]+$">
                </div>
                <label for="cxPostal" class="col-md-1 col-form-label">Cx. Postal</label>
                <div class="col-md-2">
                    <input type="number_format" disabled required name="cxPostal" id="cxPostal"
                           class="input-txt form-control" pattern="[0-9]+$">
                </div>

            </div>

            <!---------------------------------------------------->

            <!-- TELEFONE, FAX E E-MAIL -->

            <div class="row-txt form-group row">

                <label for="telefone" class="col-md-1 col-form-label">Telefone</label>
                <div class="col-md-2">
                    <input type="number_format" disabled required name="telefone" id="telefone"
                           class="input-txt form-control" pattern="[0-9]+$">
                </div>
                <label for="fax" class="col-md-1 col-form-label">Fax</label>
                <div class="col-md-2">
                    <input type="number_format" disabled required name="fax" id="fax" class="input-txt form-control"
                           pattern="[0-9]+$">
                </div>
                <label for="email" class="col-md-1 col-form-label">E-mail</label>
                <div class="col-md-5">
                    <input type="email" disabled required name="email" id="email" class="input-txt form-control">
                </div>

            </div>

            <!---------------------------------------------------->

            <!-- DATA ORGANIZAÇÃO, CNPJ, NO ORDEM E WEB SITE -->

            <div class="row-txt form-group row">

                <label for="dataOrganizacao" class="col-md-2 col-form-label">Data Organização</label>
                <div class="col-md-2">
                    <input type="date" required disabled disabled name="dataOrganizacao" id="dataOrganizacao"
                           class="input-txt form-control" pattern="[0-9]+$">
                </div>
                <label for="cnpj" class="col-md-1 col-form-label text-md-right">CNPJ</label>
                <div class="col-md-2">
                    <input type="number_format" disabled required name="cnpj" id="cnpj" class="input-txt form-control"
                           pattern="[0-9]+$">
                </div>
                <label for="nroOrdem" class="col-md-1 col-form-label">N&deg; Ordem</label>
                <div class="col-md-1">
                    <input type="number_format" disabled required name="nroOrdem" id="nroOrdem"
                           class="input-txt form-control" pattern="[0-9]+$">
                </div>
                <label for="homepage" class="col-md-1 col-form-label text-md-right">WebSite</label>
                <div class="col-md-2">
                    <input type="text" required disabled name="homepage" id="homepage" class="input-txt form-control">
                </div>


            </div>

            <!-- II - INFORMAÇÕES DO TRABALHO -->

            <div class="col-md-12"><h3 class="h2-titulo text-xs-center text-uppercase">II - INFORMAÇÕES DO TRABALHO</h3>
            </div>

            <div class="row-txt form-group row">

                <label for="info-1" class="col-md-4 col-form-label">As informações prestadas abaixo se
                    relacionam:</label>
                <div class="col-md-3">
                    <select class="form-control">
                        <option>SOMENTE À SEDE</option>
                        <option>SOMENTE À CONGREGAÇÃO</option>
                        <option>AMBOS</option>
                    </select>
                </div>


            </div>
            <div class="row-txt form-group row">
                <label for="comentario" class="col-md-1 col-form-label">Comentários</label>
                <div class="col-md-11">
                    <input type="text" required name="comentario" id="comentario" class="input-txt form-control">
                </div>
            </div>

            <!---------------------------------------------------->


            <!-- III - ESTRUTURA DA COMUNIDADE PRESBITERIANA -->

            <div class="col-md-12"><h3 class="h2-titulo text-xs-center text-uppercase">III - ESTRUTURA DA COMUNIDADE
                    PRESBITERIANA</h3></div>

            <div class="row-txt form-group row">

                <label class="col-md-2 col-form-label">LIDERANÇA FORMAL</label>
                <label class="col-md-7 col-form-label text-md-center">ESTRUTURA DO TRABALHO</label>
                <label class="col-md-3 col-form-label">DEPARTAMENTOS INTERNOS</label>

                <label for="pastores" class="col-md-1 col-form-label">Pastores</label>
                <div class="col-md-1">
                    <input type="number_format" required name="pastores" id="pastores" class="input-txt form-control">
                </div>

                <label for="congregacoes" class="col-md-2 col-form-label">Congregações da Igreja</label>
                <div class="col-md-1">
                    <input type="number_format" required name="congregacoes" id="congregacoes"
                           class="input-txt form-control">
                </div>

                <label for="educandarios" class="col-md-2 col-form-label">N&deg; de Educandários</label>
                <div class="col-md-1">
                    <input type="number_format" required name="educandarios" id="educandarios"
                           class="input-txt form-control">
                </div>
                <label class="col-md-2 col-form-label text-md-center">N&deg; de Departamentos</label>
                <label class="col-md-2 col-form-label text-md-center">N&deg; de Membros</label>
            </div>

            <!--LINHA 2-->

            <div class="row-txt form-group row">

                <label for="lecenciados" class="col-md-1 col-form-label">Licenciados</label>
                <div class="col-md-1">
                    <input type="number_format" required name="lecenciados" id="lecenciados"
                           class="input-txt form-control">
                </div>

                <label for="pontosPregacao" class="col-md-2 col-form-label">Pontos de Pregação</label>
                <div class="col-md-1">
                    <input type="number_format" required name="pontosPregacao" id="pontosPregacao"
                           class="input-txt form-control">
                </div>

                <label for="educandariosAlunos" class="col-md-2 col-form-label">total alunos - educand.</label>
                <div class="col-md-1">
                    <input type="number_format" required name="educandariosAlunos" id="educandariosAlunos"
                           class="input-txt form-control">
                </div>

                <label for="upaDpto" class="col-md-1 col-form-label text-md-right">UPA</label>
                <div class="col-md-1">
                    <input type="number_format" required name="upaDpto" id="upaDpto" class="input-txt form-control">
                </div>

                <label for="upaMembro" class="col-md-1 col-form-label text-md-right">UPA</label>
                <div class="col-md-1">
                    <input type="number_format" required name="upaMembro" id="upaMembro" class="input-txt form-control">
                </div>
            </div>

            <!--LINHA 3-->

            <div class="row-txt form-group row">

                <label for="presbiteros" class="col-md-1 col-form-label">Presbíteros</label>
                <div class="col-md-1">
                    <input type="number_format" required name="presbiteros" id="presbiteros"
                           class="input-txt form-control">
                </div>

                <label for="ebds" class="col-md-2 col-form-label">N&deg; Escolas Dominicais</label>
                <div class="col-md-1">
                    <input type="number_format" required name="ebds" id="ebds" class="input-txt form-control">
                </div>

                <label for="creches" class="col-md-2 col-form-label">N&deg; Creches</label>
                <div class="col-md-1">
                    <input type="number_format" required name="creches" id="creches" class="input-txt form-control">
                </div>

                <label for="umpDpto" class="col-md-1 col-form-label text-md-right">UMP</label>
                <div class="col-md-1">
                    <input type="number_format" required name="umpDpto" id="umpDpto" class="input-txt form-control">
                </div>

                <label for="umpMembro" class="col-md-1 col-form-label text-md-right">UMP</label>
                <div class="col-md-1">
                    <input type="number_format" required name="umpMembro" id="umpMembro" class="input-txt form-control">
                </div>
            </div>

            <!--LINHA 4-->

            <div class="row-txt form-group row">

                <label for="diaconos" class="col-md-1 col-form-label">Diáconos</label>
                <div class="col-md-1">
                    <input type="number_format" required name="diaconos" id="diaconos" class="input-txt form-control">
                </div>

                <label for="ebdsProfessores" class="col-md-2 col-form-label">N&deg; Professores / E.B.D.</label>
                <div class="col-md-1">
                    <input type="number_format" required name="ebdsProfessores" id="ebdsProfessores"
                           class="input-txt form-control">
                </div>

                <label for="crechesCriancas" class="col-md-2 col-form-label">N&deg; Total de Crianças</label>
                <div class="col-md-1">
                    <input type="number_format" required name="crechesCriancas" id="crechesCriancas"
                           class="input-txt form-control">
                </div>

                <label for="safDpto" class="col-md-1 col-form-label text-md-right">SAF</label>
                <div class="col-md-1">
                    <input type="number_format" required name="safDpto" id="safDpto" class="input-txt form-control">
                </div>

                <label for="safMembro" class="col-md-1 col-form-label text-md-right">SAF</label>
                <div class="col-md-1">
                    <input type="number_format" required name="safMembro" id="safMembro" class="input-txt form-control">
                </div>
            </div>

            <!--LINHA 5-->

            <div class="row-txt form-group row">

                <label for="evangelistas" class="col-md-1 col-form-label">Evangelistas</label>
                <div class="col-md-1">
                    <input type="number_format" required name="evangelistas" id="evangelistas"
                           class="input-txt form-control">
                </div>

                <label for="alunosEbdsAtual" class="col-md-2 col-form-label">Alunos/Ed - Ano Atual</label>
                <div class="col-md-1">
                    <input type="number_format" required name="alunosEbdsAtual" id="alunosEbdsAtual"
                           class="input-txt form-control">
                </div>

                <label for="outros" class="col-md-2 col-form-label">N&deg; de Outros</label>
                <div class="col-md-1">
                    <input type="number_format" required name="outros" id="outros" class="input-txt form-control">
                </div>

                <label for="uphDpto" class="col-md-1 col-form-label text-md-right">UPH</label>
                <div class="col-md-1">
                    <input type="number_format" required name="uphDpto" id="uphDpto" class="input-txt form-control">
                </div>

                <label for="uphMembros" class="col-md-1 col-form-label text-md-right">UPH</label>
                <div class="col-md-1">
                    <input type="number_format" required name="uphMembros" id="uphMembros"
                           class="input-txt form-control">
                </div>
            </div>

            <!--LINHA 6-->

            <div class="row-txt form-group row">

                <label for="missionarios" class="col-md-1 col-form-label">Missionários</label>
                <div class="col-md-1">
                    <input type="number_format" required name="missionarios" id="missionarios"
                           class="input-txt form-control">
                </div>

                <label for="alunosEbdsAnterior" class="col-md-2 col-form-label">Alunos/Ed - Ano Ant.</label>
                <div class="col-md-1">
                    <input type="number_format" required name="alunosEbdsAnterior" id="alunosEbdsAnterior"
                           class="input-txt form-control">
                </div>

                <label for="total" class="col-md-2 col-form-label">N&deg; Total</label>
                <div class="col-md-1">
                    <input type="number_format" required name="total" id="total" class="input-txt form-control">
                </div>

                <label for="name" class="col-md-1 col-form-label text-md-right">Outras</label>
                <div class="col-md-1">
                    <input type="number_format" required name="name" id="name" class="input-txt form-control">
                </div>

                <label for="name" class="col-md-1 col-form-label text-md-right"></label>
                <div class="col-md-1">
                    <input type="number_format" required name="name" id="name" class="input-txt form-control">
                </div>
            </div>

            <!--LINHA 6-->

            <div class="row-txt form-group row">

                <label for="candidatos" class="col-md-1 col-form-label">Candidatos</label>
                <div class="col-md-1">
                    <input type="number_format" required name="candidatos" id="candidatos"
                           class="input-txt form-control">
                </div>

                <label for="name" class="col-md-2 col-form-label">Variação Percentual</label>
                <div class="col-md-1">
                    <input type="number_format" required name="name" id="name" class="input-txt form-control">
                </div>

                <label for="total" class="col-md-2 col-form-label"></label>
                <div class="col-md-1">

                </div>

                <label for="name" class="col-md-1 col-form-label text-md-right">Totais</label>
                <div class="col-md-1">
                    <input type="number_format" required name="name" id="name" class="input-txt form-control">
                </div>

                <label for="name" class="col-md-1 col-form-label text-md-right"></label>
                <div class="col-md-1">
                    <input type="number_format" required name="name" id="name" class="input-txt form-control">
                </div>
            </div>

            <!-- VI - INFORMAÇÕES FINAIS -->

            <div class="col-md-12"><h3 class="h2-titulo text-xs-center text-uppercase">VI - INFORMAÇÕES FINAIS</h3>
            </div>

            <div class="row-txt form-group row">

                <!-- NOME E E-MAIL -->

                <div class="row-txt form-group row">
                    <label for="nome" class="col-xs-1 col-form-label">Sec. do Conselho</label>
                    <div class="col-xs-11">
                        <select name="idPresbitero" id="idPresbitero" class="input-txt form-control">

                            <option selected>- selecione -</option>
                            <?php
                            foreach (Crud::select(Select::presbiteros()) as $key) {
                                echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                            }
                            ?>
                            <!-- CÓDIGO SINODO -->
                        </select>
                    </div>


                </div>

                <!---------------------------------------------------->

                <!-- ENDEREÇO, NÚMERO E COMPLEMENTO -->

                <div class="row-txt form-group row">
                    <label for="endereco" class="col-xs-1 col-form-label">Endereço</label>
                    <div class="col-xs-3">
                        <input type="text" disabled required name="endereco" class="input-txt form-control">
                    </div>
                    <label for="enderecoNumero" class="col-xs-1 col-form-label">Número</label>
                    <div class="col-xs-1">
                        <input type="number_format" disabled required name="enderecoNumero" id="enderecoNumero"
                               class="input-txt form-control" pattern="[0-9]+$">
                    </div>
                    <label class="col-xs-1 col-form-label" for="enderecoComplemento">Complemento</label>
                    <div class="col-xs-2">
                        <input type="text" disabled required name="enderecoComplemento" id="enderecoComplemento"
                               class="input-txt form-control">
                    </div>
                    <label for="enderecoBairro" class="col-xs-1 col-form-label">Bairro</label>
                    <div class="col-xs-2">
                        <input type="text" disabled required name="enderecoBairro" id="enderecoBairro"
                               class="input-txt form-control">
                    </div>

                </div>

                <!---------------------------------------------------->

                <!-- BAIRRO, CIDADE e ESTADO -->

                <div class="row-txt form-group row">

                    <label for="estados" class="col-md-1 col-form-label">Estado</label>
                    <div class="col-md-2">
                        <input type="text" disabled required name="estados" id="estados" class="input-txt form-control">
                    </div>
                    <label for="idCidade" class="col-md-1 col-form-label">Cidade</label>
                    <div class="col-md-2">
                        <input type="text" disabled required name="idCidade" id="idCidade"
                               class="input-txt form-control">
                    </div>
                    <label for="cep" class="col-xs-1 col-form-label">CEP</label>
                    <div class="col-xs-2">
                        <input type="number_format" disabled required name="cep" id="cep"
                               class="input-txt form-control">
                    </div>
                    <label for="cxPostal" class="col-xs-1 col-form-label">Cx. Postal</label>
                    <div class="col-xs-2">
                        <input type="number_format" disabled required name="cxPostal" id="cxPostal"
                               class="input-txt form-control">
                    </div>

                </div>

                <!---------------------------------------------------->

                <!-- CEP, TELEFONE, FAX E CX POSTAL -->

                <div class="row-txt form-group row">

                    <label for="telefone" class="col-xs-1 col-form-label">Telefone</label>
                    <div class="col-xs-2">
                        <input type="number_format" disabled required name="telefone" id="telefone"
                               class="input-txt form-control" pattern="[0-9]+$">
                    </div>

                    <label for="email" class="col-xs-1 col-form-label">E-mail</label>
                    <div class="col-xs-5">
                        <input type="email" disabled required name="email" id="email" class="input-txt form-control">
                    </div>

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