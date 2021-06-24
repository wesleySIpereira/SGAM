<style>
    #carregando div,
    #carregando-nfc div {
        border-color: #f3f3f3;
        border-top-color: #0C1B25;
        border-bottom-color: #0C1B25;
    }

    #bem-vindo .modal-header,
    #curtir-facebook .modal-header {
        background: #0C1B25;
        color: #FFFFFF;
    }

    .pace .pace-progress {
        background: #1F4968;
    }

    a {
        color: #0C1B25;
    }

    a:hover,
    a:active,
    a:focus {
        color: #1F4968
    }

    .text-primary {
        color: #0C1B25
    }

    .text-primary:hover {
        color: #1F4968
    }

    .cor-padrao {
        color: #0C1B25
    }

    .flash-tab {
        background: #0C1B25;
    }

    .dropdown-menu>li>a:hover {
        background-color: #0C1B25;
    }

    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:hover,
    .dropdown-menu>.active>a:focus {
        background-color: #0C1B25;
    }

    .navbar-nav>.user-menu>.dropdown-menu>li.user-header {
        background: #0C1B25;
    }

    .box.box-primary {
        border-top-color: #0C1B25;
    }

    .box.box-solid.box-primary>.box-header {
        background: #0C1B25;
        background-color: #0C1B25;
    }

    .box .todo-list>li.primary {
        border-left-color: #0C1B25;
    }

    .bg-light-blue {
        background-color: #0C1B25 !important;
    }

    .bg-olive {
        background-color: #0C1B25 !important;
    }

    .text-light-blue {
        color: #0C1B25 !important;
    }

    .text-olive {
        color: #0C1B25 !important;
    }

    .btn.btn-primary {
        background-color: #0C1B25;
        border-color: #1F4968;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .open .dropdown-toggle.btn-primary {
        background-color: #1F4968;
        border-color: #0C1B25;
    }

    .nav.nav-pills>li.active>a,
    .nav.nav-pills>li.active>a:hover {
        border-top-color: #0C1B25;
        color: #444;
    }

    .nav.nav-pills.nav-stacked>li.active>a,
    .nav.nav-pills.nav-stacked>li.active>a:hover {
        border-left-color: #0C1B25;
    }

    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #0C1B25;
    }

    .form-box .header {
        background: #0C1B25;
    }

    .skin-blue .navbar {
        background-color: #0C1B25;
    }

    .form-control:hover,
    .form-control:focus,
    .form-control-table:hover,
    .form-control-table:focus {
        border-color: #0C1B25 !important;
    }

    .progress-bar-light-blue,
    .progress-bar-primary {
        background-color: #0C1B25;
    }

    fieldset legend {
        color: #0C1B25;
    }

    table.calendario tr td .compromissos {
        background: #0C1B25;
    }

    .btn.btn-primary {
        border-color: #0C1B25;
    }

    .btn.btn-primary:hover,
    .btn.btn-primary:active,
    .btn.btn-primary.hover {
        background-color: #0C1B25;
    }

    .skin-blue .logo {
        background-color: #0C1B25;
    }

    div.token-input-dropdown ul li.token-input-selected-dropdown-item {
        background: #0C1B25 !important;
    }

    .text-info {
        color: #0C1B25;
    }

    .text-info:hover {
        color: #1F4968;
    }

    .pagination>.active>a,
    .pagination>.active>span,
    .pagination>.active>a:hover,
    .pagination>.active>span:hover,
    .pagination>.active>a:focus,
    .pagination>.active>span:focus {
        background-color: #0C1B25;
    }

    .wizard li.active span.round-tab {
        border: 2px solid #0C1B25;
    }

    .wizard li.active span.round-tab i {
        color: #0C1B25;
    }

    .wizard li:after {
        border-bottom-color: #0C1B25;
    }

    .wizard li.active:after {
        border-bottom-color: #0C1B25;
    }

    .ui-button.ui-state-active:hover {
        background: #0C1B25 !important;
    }
</style>
<!-- essa parte não mexer  -->
<section role="main" class="content-body">
    <header class="page-header">
        <h2><?= $titulo; ?></h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span><a href="<?= $l_titulo; ?>"><?= $t_titulo; ?></a></span></li>
                <li><span><?= $subtitulo; ?></span></li>
            </ol>

            <a class="sidebar-right-toggle"></a>
        </div>
    </header>
    <!-- isto acima é intocavel -->

    <section class="panel">
        <header class="panel-heading">
            <!--	<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div> -->

            <h2 class="panel-title"><?= $subtitulo; ?></h2>
        </header>
        <div class="panel-body">
            <!-- todo componente html vai aqui dentro , ATENÇÃO ALTERAR SOMENTE AQUI ABAIXO ATE O FIM -->
            <div class="col-sm-12 col-lg-12 col-md-12">
                <form method="post" action="<?= base_url();?>/index.php/pessoa/inserir">
                    <h4 class="col-sm-12 col-lg-12 col-md-12 text-color3"><i class="fa fa-list-alt margin-right-5px"></i> Dados gerais</h4>


                    <div class="form-group col-sm-4 col-lg-4 col-md-4 ">
                        <label class="text-text-capitalize">Nome</label>
                        <input name="pessoa[nm_pessoa]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>

                    <div class="form-group col-sm-2 col-lg-2 col-md-2 ">
                        <label class="control-label" for="ClienteNome">Nascimento</label>
                        <input name="pessoa[dt_nascimento]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">CPF</label>
                        <input name="pessoa[n_cpf]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">RG</label>
                        <input name="pessoa[n_rg]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-6 col-lg-6 col-md-6 ">
                        <label class="control-label" for="ClienteNome">Nome da Mãe</label>
                        <input name="pessoa[nm_mae]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-6 col-lg-6 col-md-6 ">
                        <label class="control-label" for="ClienteNome">Nome do Pai</label>
                        <input name="pessoa[nm_pai]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>

                    <h4 class="col-sm-12 col-lg-12 col-md-12 margin-top-0 text-primary"><i class="glyphicon glyphicon-map-marker margin-right-5px"></i> Endereços</h4>                     
                   
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">CEP</label>
                        <input name="endereco[cep]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">UF</label>
                        <input name="endereco[uf]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">Cidade</label>
                        <input name="endereco[cidade]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">Logradouro</label>
                        <input name="endereco[logradouro]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-4 col-lg-4 col-md-4 ">
                        <label class="control-label" for="ClienteNome">Bairro</label>
                        <input name="endereco[bairro]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-2 col-lg-2 col-md-2 ">
                        <label class="control-label" for="ClienteNome">Nº</label>
                        <input name="endereco[n_endereco]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12">
                  <!--  <button id="AdicionarEndereco" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign margin-right-5px"></i> Inserir novo endereço</button> -->
                    </div>
                    <h4 class="margin-top-20px col-sm-12 col-lg-12 col-md-12 text-primary"><i class="fa fa-bullhorn margin-right-5px"></i>Contatos</h4>
                    <div class="form-group col-sm-4 col-lg-4 col-md-4 ">
                        <label class="control-label" for="ClienteNome">Telefone</label>
                        <input name="contato[n_telefone]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-6 col-lg-6 col-md-6 ">
                        <label class="control-label" for="ClienteNome">E-mail</label>
                        <input name="contato[nm_email]" required="required" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12">
                  <!--  <button id="AdicionarContato" type="button" class="btn btn-primary margin-top-10px margin-bottom-10px"><i class="glyphicon glyphicon-plus-sign margin-right-5px"></i>Inserir novo contato</button> -->
                </div>
                <div class="margin-top-10px col-sm-12 col-lg-12 col-md-12">
                    <button id="cadastrar" class="btn btn-success btn-responsive" type="submit"><span class="glyphicon glyphicon-ok"></span> Cadastrar</button>                    <a href="/clientes/?menu=MTU%3D" class="btn btn-danger btn-responsive"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>                </div>
                </form>
            </div>
            <!--FIM PAGINA EDITAVEL -->

        </div>
    </section>