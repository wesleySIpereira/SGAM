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
                <form method="post" id="form_ficha" action="<?= base_url();?>/index.php/pessoa/inserir">
                <div class="text-danger "></div> 
                   
                    <h4 class="col-sm-12 col-lg-12 col-md-12 text-color3"><i class="fa fa-list-alt margin-right-5px"></i> Dados gerais</h4>

                   
                    <div class="form-group col-sm-4 col-lg-4 col-md-4 ">
                        <label class="text-text-capitalize">Nome</label>
                        <input name="pessoa[nm_pessoa]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="nome_aluno">
                    </div>

                    <div class="form-group col-sm-2 col-lg-2 col-md-2 ">
                        <label class="control-label" for="ClienteNome">Nascimento</label>
                        <input name="pessoa[dt_nascimento]"  class="nome-fantasia date form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">CPF</label>
                        <input name="pessoa[n_cpf]"   class="nome-fantasia cpf  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">RG</label>
                        <input name="pessoa[n_rg]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-6 col-lg-6 col-md-6 ">
                        <label class="control-label" for="ClienteNome">Nome da Mãe</label>
                        <input name="pessoa[nm_mae]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-6 col-lg-6 col-md-6 ">
                        <label class="control-label" for="ClienteNome">Nome do Pai</label>
                        <input name="pessoa[nm_pai]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>

                    <h4 class="col-sm-12 col-lg-12 col-md-12 margin-top-0 text-primary"><i class="glyphicon glyphicon-map-marker margin-right-5px"></i> Endereços</h4>                     
                  
			
			
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">CEP</label>
                        <input name="endereco[cep]"  class="nome-fantasia cep  form-control" value="" maxlength="100" autocomplete="off" type="text" id="cep">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">UF</label>
                        <input name="endereco[uf]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="estado">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">Cidade</label>
                        <input name="endereco[cidade]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="cidade">
                    </div>
                    <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                        <label class="control-label" for="ClienteNome">Logradouro</label>
                        <input name="endereco[logradouro]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="rua">
                    </div>
                    <div class="form-group col-sm-4 col-lg-4 col-md-4 ">
                        <label class="control-label" for="ClienteNome">Bairro</label>
                        <input name="endereco[bairro]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="bairro">
                    </div>
                    <div class="form-group col-sm-2 col-lg-2 col-md-2 ">
                        <label class="control-label" for="ClienteNome">Nº</label>
                        <input name="endereco[n_endereco]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12">
                  <!--  <button id="AdicionarEndereco" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign margin-right-5px"></i> Inserir novo endereço</button> -->
                    </div>
                    <h4 class="margin-top-20px col-sm-12 col-lg-12 col-md-12 text-primary"><i class="fa fa-bullhorn margin-right-5px"></i>Contatos</h4>
                    <div class="form-group col-sm-4 col-lg-4 col-md-4 ">
                        <label class="control-label" for="ClienteNome">Telefone</label>
                        <input name="contato[n_telefone]"  class="nome-fantasia phone_with_ddd form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="form-group col-sm-6 col-lg-6 col-md-6 ">
                        <label class="control-label" for="ClienteNome">E-mail</label>
                        <input name="contato[nm_email]"  class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12">
                  <!--  <button id="AdicionarContato" type="button" class="btn btn-primary margin-top-10px margin-bottom-10px"><i class="glyphicon glyphicon-plus-sign margin-right-5px"></i>Inserir novo contato</button> -->
                </div>
                <div class="margin-top-10px col-sm-12 col-lg-12 col-md-12">
                    <button id="cadastrar" class="btn btn-success btn-responsive" type="submit"><span class="glyphicon glyphicon-ok"></span> Cadastrar</button>                                 </div>
                </form>
            </div>
            <!--FIM PAGINA EDITAVEL -->

        </div>
    </section>

    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulario_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                                document.getElementById("numero").focus();
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulario_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulario_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulario_cep();
                }
            });
        });

    </script>

<script type="text/javascript">
      $(document).ready(function(){
           $('#formFicha').validate({
            rules :{
                  nome_aluno:{ required: true},
                  documento:{ required: true},
                  telefone:{ required: true},
                  email:{ required: true},
                  rua:{ required: true},
                  numero:{ required: true},
                  bairro:{ required: true},
                  cidade:{ required: true},
                  estado:{ required: true},
                  cep:{ required: true}
            },
            messages:{
                nome_aluno :{ required: 'Campo Requerido.'},
                  documento :{ required: 'Campo Requerido.'},
                  telefone:{ required: 'Campo Requerido.'},
                  email:{ required: 'Campo Requerido.'},
                  rua:{ required: 'Campo Requerido.'},
                  numero:{ required: 'Campo Requerido.'},
                  bairro:{ required: 'Campo Requerido.'},
                  cidade:{ required: 'Campo Requerido.'},
                  estado:{ required: 'Campo Requerido.'},
                  cep:{ required: 'Campo Requerido.'}

            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
      });
</script>