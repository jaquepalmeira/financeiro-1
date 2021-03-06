<?php

// Inicia a sessão
session_name('financeiro');
session_start();

// ID do usuario
$usuarioID = $_SESSION['id'];

// Includes
include "../conn/DB.class.php";
include "../includes/globais.php";
include "../conn/check.php";

// Fim - todas as páginas tem que ter o código acima


?>


<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<h4 class="modal-title" id="myModalLabel">Adicionar novo cartão</h4>
</div> <!-- /.modal-header -->

<form method="post" class="form-horizontal" role="form" action="">

	<div class="modal-body">

		<p>Entre com as informações abaixo:</p>

			<div class="form-group">
				<label class="col-md-3 control-label">Cartão</label>
				<div class="col-md-6"> 
					<input type="text" name="cartao" class="form-control" placeholder="Ex: Caixa Federal, Santander" required >
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Número cartão</label>
				<div class="col-md-6">
					<input type="text" name="codigo" class="form-control numeros" maxlength="4" placeholder="Os 4 últimos digitos" required >
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Melhor data</label>
				<div class="col-md-6">
					<input type="text" name="melhor_data" class="form-control numeros" maxlength="2" placeholder="Dia em que o cartão fecha" required >
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Vencimento</label>
				<div class="col-md-6">
					<input type="text" name="data_vencimento" class="form-control numeros" maxlength="2" placeholder="Data do vencimento do cartão" required >
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Limite</label>
				<div class="col-md-6">
					<input type="text" name="limite" id="limite" class="form-control" placeholder="Limite disponível para o cartão" required >
				</div>
			</div>

		<p class="text-info"><i class="fa fa-exclamation-circle fa-fw"></i> Essas informações serão utilizadas apenas como informativos e para cadastramentos de despesas realizados nos respectivos cartões.</p>

	</div> <!-- /.modal-body -->

	<div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-fw"></i> Fechar</button>
		<button type="submit" name="btnAddNovoCartao" value="1" class="btn btn-success"><i class="fa fa-plus fa-fw"></i> Adicionar</button>
	</div> <!-- /.modal-footer -->

</form>

<!-- Arquivos JS Maskaras -->
<script src="<?php echo $home ?>/js/jquery.maskMoney.js"></script>
<script src="<?php echo $home ?>/js/numeros.js"></script>

<script>
	// Maskaras
	$(function() {
		$("#limite").maskMoney({symbol:'R$ ', showSymbol:false, thousands:'.', decimal:',', symbolStay: true});
    });
</script>