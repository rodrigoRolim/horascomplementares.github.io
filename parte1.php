<?php 
$arrayGrupo = array(
	'1'=>'Grupo 1: formação social, humana e cultural',
	'2'=>'Grupo 2: formação isso e aquilo',
	'3'=>'Grupo 3: formação daquilo e aquilo outro'

);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<link rel="stylesheet" href="bootstrap-flatly.css" type="text/css">
		<title></title>
		<style type="text/css">
			input[type="radio"] {
				display: block;
			}
		</style>

	</head>
	<body>
		<header>

		</header>
		<div class="container">
			<div class="row">
				<div class="col-sm-10">
						<div class="panel panel-success">
							<form class="col-sm-8" method="POST">
								<div class="row">
									<fieldset class="col-sm-12">
										<legend>Dados pessoais</legend>
										<div class="form-group">
											<label for="nome">Nome completo</label>
											<input type="text" class="form-control" id="nome" name="nome" required>
										</div>
										<div class="form-group">
											<label for="ra">RA do aluno</label>
											<input type="text" class="form-control" id="ra" name="ra" required>
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<div class="input-group">
												<span class="input-group-addon">@</span>
												<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
											</div>
										</div>
									</fieldset>
									<fieldset class="col-md-12">
										<legend>Informações do documento</legend>
										<fieldset>
											<!--<div class="checkbox">
												<legend>Qual o grupo que seu documento pertence?</legend>
												<input type="radio" name="grupo" value="grupo1" id="grupo1">
												<label for="grupo1">Grupo 1</label>
												<input type="radio" name="grupo" value="grupo2" id="grupo2">
												<label for="grupo2">Grupo 2</label>
												<input type="radio" name="grupo" value="grupo3" id="grupo3">
												<label for="grupo3">Grupo 3</label>
											</div>-->
											<div class="form-group">
												<label for="grupo">Grupo</label>
												<select name="grupo" id="grupo" class="form-control">
													<option value="0">selecione um grupo</option>
												<?php foreach($arrayGrupo as $key => $value):?>   
												<?php echo "<option value=$key>$value</option>"; ?>
												<?php endforeach; ?>
												</select>
											
											</div>
											<div class="form-group">
												<label for="subgrupo">Subgrupo</label>
												<select name="subgrupo" id="subgrupo" class="form-control">
													<option value="0">Selecione o item</option>
												</select>
											
											</div>
											<!--<div class="form-group">
												<label for="numero-cartao">Numero - CVV</label>
												<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
											</div>
											
											<!--<div class="form-group">
												<label for="validade-cartao">Validade</label>
												<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
											</div>-->
										</fieldset>
									</fieldset>
									<button type="submit" class="btn btn-primary btn-lg pull-right" >
								
										<span type="glyphicon glyphicon-thumbs-up">Enviar</span>
									
									</button>
								</div>
							</form>
							<div class="panel-heading">
								<h2 class="panel-title">Informações</h2>
							</div>
							<!--<div class="panel-body">
								<img src="img/produtos/foto<?= $_POST["id"]?>-<?= $_POST["cor"]?>.png" class="img-thumbanail img-responsive">
								<dl>
									<dt>Produto</dt>
									<dd><?= $_POST["nome"]?></dd>
									<dt>Cor</dt>
									<dd><?= $_POST["cor"]?></dd>
									<dt>Tamanho</dt>
									<dd><?= $_POST["tamanho"]?></dd>
									<dt>Preço</dt>
									<dd><?= $_POST["preco"]?></dd>
								</dl>
							</div>-->
							
						</div>
						
					</div>
				</div>
			</div>
				
		</div>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script type="text/javascript">
			$('#nomeGrupo').change(function() {
				var valor document.getElementById("nomeGrupo").value;

				$get.("parte1.php")
			})
		</script>
	</body>
</html>