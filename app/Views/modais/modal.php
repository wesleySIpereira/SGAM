<!-- Examples -->
<script>
function msg(){
 $('#modal').trigger('click');
}
</script> 

<a class="mb-xs mt-xs mr-xs  modal-basic btn btn-primary" id='modal' href="#modalPrimary"></a>
<div id="modalPrimary" class="modal-block modal-block-<?= $tipo; ?> mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title"><?= $titulo; ?></h2>
											</header>
											<div class="panel-body">
												<div class="modal-wrapper">
													<div class="modal-icon">
													
														<i class="fa <?= $fa; ?>"></i>
													</div>
													<div class="modal-text">
														<h4><?= $stitulo; ?></h4>
													  	<p style="text-size-adjust: 14;"><?= $msg; ?></p>
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

<!--Carrega o js do m-->                                    
