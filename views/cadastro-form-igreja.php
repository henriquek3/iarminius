<?php
require_once "../models/Crud.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html"
     charset="utf-8" />
    <title>iArminius</title>
    <link href="estilo.css" rel="stylesheet"/>
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
<div id="table-form" class="table-form">
    <?php include("menu.php") ?>
    <form id="form1" name="form1" method="post" action="../controllers/igreja.php">


        <!-----------------*************** TABELA IDENTIFICAÇÃO DA IGREJA ***************----------------->

        <table width="95%" border="0" align="center">
            <tr>
                <td colspan="8"><h1 class="h1-form-titulo tr-titulo-h1"> cadastrar igreja</h1></td>
            </tr>
        </table>

        <table width="95%" border="0" align="center">
            <tr class="tr-texto-i">
                <td>sínodo</td>
                <td>
                    <label for="idSinodo"></label>
                    <select name="idSinodo" id="idSinodo">
                        <option selected>- selecione -</option>
                        <?php
                        foreach (Crud::select(Select::sinodos()) as $key) {
                            echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                        }
                        ?>
                    </select>
                    <label for="idPresbiterio"></label></td>
                <td>presbitério</td>
                <td>
                    <span class="carregandoPresbiterios">Aguarde, carregando...</span>
                    <select name="idPresbiterio" id="idPresbiterio">
                        <option selected>- selecione -</option>
                    </select>
                </td>
            </tr>
        </table>
        <table width="95%" border="0" align="center">
            <tr class="tr-texto-i">
                <td>nome (igreja/congregação)</td>
                <td colspan="6"><input required type="text" name="nome" class="input-relatorio-txt"/></td>

                <td>e-mail</td>
                <td width="147"><input required type="email" name="email" class="input-relatorio-txt"/></td>
            </tr>
            <tr class="tr-texto-i">
                <td width="166">Endereço</td>
                <td colspan="3"><input required type="text" name="endereco" class="input-relatorio-txt"/></td>

                <td width="90">número</td>
                <td width="158"><input required type="text" name="enderecoNumero" class=input-relatorio-i
                                       pattern="[0-9]+$"/></td>
                <td width="6">&nbsp;</td>
                <td width="81">complemento</td>
                <td><input required type="text" name="enderecoComplemento" class="input-relatorio-txt"/></td>
            </tr>
            <tr class="tr-texto-i">
                <td>bairro</td>
                <td width="144"><input required type="text" name="enderecoBairro" class="input-relatorio-txt"/></td>
                <td width="26">uf</td>
                <td>
                    <select class="form-control" id="estados" name="estados" required="required">
                        <option selected>- selecione -</option>
                        <?php
                        foreach (Crud::select(Select::estados()) as $estados) {
                            echo '<option value="' . $estados['id_estado'] . '">' . $estados['nome'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
                <td>cidade</td>
                <td>
                    <span class="carregando">Aguarde, carregando...</span>
                    <select class="form-control" id="cidades" name="cidades" required="required">
                        <option value="">- selecione -</option>
                    </select>
                </td>
                <td>&nbsp;</td>
                <td>cep</td>

                <td><input required type="text" name="cep" class=input-relatorio-i pattern="[0-9]+$"/></td>
            </tr>
            <tr class="tr-texto-i">
                <td>telefone</td>
                <td><input required type="text" name="telefone" class=input-relatorio-i pattern="[0-9]+$"/></td>
                <td>fax</td>
                <td colspan="1"><input required type="text" name="fax" class=input-relatorio-i pattern="[0-9]+$"/></td>
                <td>Cx. Postal</td>
                <td><input required type="text" name="cxPostal" class=input-relatorio-i pattern="[0-9]+$"/></td>
                <td>&nbsp;</td>
                <td>website</td>
                <td colspan="2"><input required name="homepage" class="input-relatorio-txt"/></td>
            </tr>
            <tr class="tr-texto-i">
                <td>data organização</td>
                <td><input required type="text" name="dataOrganizacao" class=input-relatorio-i pattern="[0-9]+$"/></td>
                <td>cnpj</td>
                <td width="144"><input required type="text" name="cnpj" class=input-relatorio-i pattern="[0-9]+$"/></td>
                <td>n&deg; de ordem</td>
                <td><input required type="text" name="nroOrdem" class=input-relatorio-i pattern="[0-9]+$"/></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>

        </table>
        <table width="95%" border="0" align="center">
            <tr>
                <td class="td-btn"><input required type="submit" name="btn-enviar" class="btn-form-cadastro"
                                          id="btn-enviar" value="Cadastrar"/></td>
            </tr>
        </table>
    </form>
</div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("jquery", "1.4.2");
</script>
<script type="text/javascript">
    $(function () {
        $('#estados').change(function () {
            if ($(this).val()) {
                $('#cidades').hide();
                $('.carregando').show();
                $.getJSON('../controllers/request_cidades.php?search=', {
                    id_estado: $(this).val(),
                    ajax: 'true'
                }, function (j) {
                    var options = '<option value="">- Escolha -</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
                    }
                    $('#cidades').html(options).show();
                    $('.carregando').hide();
                });
            } else {
                $('#cidades').html('<option value="">– Escolha –</option>');
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
</body>
</html>