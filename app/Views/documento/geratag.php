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
            <h2 class="panel-title"><?= $subtitulo; ?></h2>
        </header>
        <div class="panel-body">
            <!-- todo componente html vai aqui dentro , ATENÇÃO ALTERAR SOMENTE AQUI ABAIXO ATE O FIM -->

            <div class="box-busca-avancada box-solid">
                <div class="row">
                    <div class="margin-top-10px col-sm-12 col-lg-12 col-md-12">
                        <form action="<?= base_url('index.php/pessoa/etiqueta'); ?>" id="form_ficha"  method="post" accept-charset="utf-8">
                            <div class="form-group col-sm-3 col-lg-3 col-md-3 ">
                                <label class="control-label" for="ClienteNome">De</label>
                                <input name="inicio" class="nome-fantasia  form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                            </div>
                            <div class="form-group col-sm-2 col-lg-2 col-md-2 ">
                                <label class="control-label" for="ClienteNome">Até</label>
                                <input name="fin" class="nome-fantasia cpf form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                            </div>
                           
                            
                            <div class="both col-sm-12 col-lg-12 col-md-12">
                                <button class="btn btn-success btn-responsive" type="submit"><span class="glyphicon glyphicon-ok-sign margin-right-10px"></span>GERAR</button>
                               
                            </div>
                           
                            <br>
                            </form>
                           

                      

                    </div>
                   
                </div>
            </div>
            <hr>
            <?php if(isset($aluno) and (!empty($aluno))){ ?>  
                            <div class="table-responsive">
									<table class="table table-bordered table-striped table-condensed mb-none">
										<thead>
           	                                	<th>FICHA</th>
												<th>ALUNO</th>
                                                <th >NASCIMENTO</th>
												<th>CPF</th>
                                                <th>MÃE</th>
												<th>PAI</th>
                                                <th class="text-center" colspan="3">AÇÕES</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                                <?php foreach ($aluno as $alunos): ?>
                                                    <td class="text-center"><?= $alunos['id_ficha'];?></td>  
                                                    <td><?= $alunos['nm_pessoa'];?></td> 
                                                    <td><?= date('d/m/Y', strtotime($alunos['dt_nascimento']));?></td> 
                                                    <td><?= $alunos['n_cpf'];?></td> 
                                                    <td><?= $alunos['nm_mae'];?></td> 
                                                    <td><?= $alunos['nm_pai'];?></td> 
                                                    <td class="text-center"><a class="btn btn-xs btn-dark" href="#" data-toggle="tooltip" data-original-title="VISUALIZAR"><i class="fa fa-eye"></i></a></td> 
                                                    <td class="text-center"><a class="btn btn-xs btn-warning" href="#" data-toggle="tooltip" data-original-title="EDITAR"><i class="fa fa-edit"></i></a></td> 
                                                    <td class="text-center"><a class="btn btn-xs btn-danger disabled" href="#" data-toggle="tooltip" data-original-title="DELETAR"><i class="fa fa-trash-o"></i></a></td> 
                                                </tr>
                                                    <?php   endforeach; ?>
                                                
											    
										   
										</tbody>
									</table>
								</div>
                                <?php }else{ } ?>


            <!--FIM PAGINA EDITAVEL -->

        </div>
    </section>