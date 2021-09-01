<!-- Examples 
<script>
function msg(){
 $('#modal').trigger('click');
}
</script> -->

<?php foreach ($aluno as $alunos): ?>
<div id="ver_<?= $alunos['id_ficha']; ?>" class="modal-block modal-block- info mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">FICHA Nº <?= $alunos['id_ficha']; ?></h2>
											</header>
											<div class="panel-body">
												<div class="modal-wrapper">
													
													<div class="modal-text">
                                                        <H5>DADOS DO ALUNO</H5>
														<b>ALUNO:</b><?= $alunos['nm_pessoa']; ?>  </br>
                                                        <b>DATA NASCIMENTO:</b><?= date('d/m/Y', strtotime($alunos['dt_nascimento']));?></br>
                                                        <b>CPF:</b><?= $alunos["n_cpf"]; ?> <b>RG:</b><?= $alunos["n_rg"]; ?>  </br>
                                                         <b>MÃE:</b><?= $alunos["nm_mae"];?>
                                                         <b>PAI:</b><?= $alunos["nm_pai"];?> 
                                                         <hr> 
                                                         <h5>ENDEREÇO</h5>
                                                         <b>CEP:</b><?= $alunos["cep"];?> <b>LOGRADOURO:</b><?= $alunos["logradouro"];?> 
                                                         <b>UF:</b><?= $alunos["uf"];?>
                                                         <b>BAIRRO:</b><?= $alunos["bairro"];?>
                                                         <b>NUMERO:</b><?= $alunos["n_endereco"];?>
                                                         <hr>
                                                         <h5>CONTATO</h5>
                                                         <b>EMAIL:</b><?= $alunos["nm_email"];?><br>
                                                         <b>TELEFONE/CELULAR:</b><?= $alunos["n_telefone"];?>
                                                        
                                                          
                                                          
                                                          
													</div>
												</div>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-primary modal-confirm"> OK</button>
													<!--	<button class="btn btn-default modal-dismiss">Cancel</button> -->
													</div>
												</div>
											</footer>
										</section>
									</div>
<?php endforeach; ?>
<!--Carrega o js do m-->                                    
