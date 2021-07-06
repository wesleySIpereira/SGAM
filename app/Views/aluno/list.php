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
                                                    <td><?= $alunos['dt_nascimento'];?></td> 
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
                                <?= $pager->links() ?>
            <!--FIM PAGINA EDITAVEL -->

        </div>
    </section>