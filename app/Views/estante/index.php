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
            

            
          <?php  if(isset($sala) and (!empty($sala))):  ?>
            
            <fieldset class="scheduler-border">
    <legend class="scheduler-border">LOCAL</legend>
    <div class="control-group">
    <table class="table table-striped">
             <tr>
             <td><B>SALA:</B> 1</td><td><B>Nome:</B> DISPENSA</td>
            </tr>
             <tr><td><b>OBS:</b> SALA USADA COMO ARQUIVO MORTO</td><TD><a class="btn btn-success " href="#">Adicionar estante</a></TD></tr>             


            </table>	
        
    </div>
</fieldset>
		
            
                
										
			
            
            <?php endif; ?>
           
         <!--começo estantes   -->
         
         <fieldset class="scheduler-border">
    <legend class="scheduler-border title">ESTANTES/ARMARIOS</legend>
    <div class="control-group">	 
         <table class="table table-striped">
             <tr>
             
            <td>  SEM ESTANTES CADASTRADAS ....</TD></tr>             


            </table>	
            </div>
</fieldset> 
		





         <style>
             fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }

         </style>
      



            <!--FIM PAGINA EDITAVEL -->

        </div>
    </section>

  