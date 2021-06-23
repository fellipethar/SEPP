<?php

	$acao = 'recuperar';
	$atualizar ='atualizar';
	require 'produto_controller.php';
	//include_once 'update_produto.php';
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

	<body>

			<nav class="navbar navbar-expand-sm bg-primary navbar-dark mb-5">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href=""><h2>SEPP</h2></a>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item ">
							<a class="nav-link  " href="dashboard.php">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
								<path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
								</svg> Dashboard
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="estoque.php"> <i class="fas fa-box-open"></i> Estoque</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="listarfornecedor.php"> <i class="fas fa-box-open"></i> Fornecedores</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="fornecedor.php"><i class="fas fa-truck"></i> Cadastrar Fornecedores</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
								<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
								</svg> Cadastrar Produto
							</a>
						</li>
					</ul>
				</nav>
		
		<div class="container">
			
			<div class="row mb-3">
				<div class="col-md-8">
					<input type="text" class="form-control" placeholder="Nome do produto" id="nome_produto">
				</div>
				
				<div class="col d-flex justify-content-end">
				<i class="bi bi-plus-square"></i>
					<button type="button" class="btn btn-primary">
						<i class="fas fa-search"></i>
					</button>
					<div class="col d-flex justify-content-end">
					 <a  class="btn btn-primary" href="" data-toggle="modal" data-target="#siteModal"> 
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="24	" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
						<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
						<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
						</svg>
					</a>
				</div>
				</div>
				
			</div>
			<!-- modal -->
			 <div class="modal" id="siteModal" tabindex="-1" role="dialog"> 
				<div class="modal-dialog" role="document">
					<div class="modal-content" style="border-radius: 10px; top: 55%; height: 600px; width: 600px;">
						<div class="modal-header ">
							<h3 class="modal-title text-center justify-content: center;"> Atualizar quantidade de produto </h3>		
							<button type="button" class="close" data-dismiss="modal">
								<span>x</span>
							</button>
						</div>

						<div class="modal-body">
							<form id="form" method="post"action="cadastra_controller.php?acao=update" style="width:600px;">
								<div class="form-row" style="">
									<div class="form-group col-md-6">
										<label for="text">Nome do produto</label>
										<input type="text" class="form-control" placeholder="Produto" name="produto" id="nome_produto" required>
									</div>
									<div class="form-group col-md-5">
										<label for="text">Fornecedor do produto</label>
										<input type="text" class="form-control" placeholder="Fornecedor" name="fornecedor" id="fornecedor" required>
									</div>
									<div class="form-group col-md-6">
										<label for="text">Quantidade</label>
										<input type="text" class="form-control" name="quantidade" placeholder="Quantidade" id="quantidade_produto">
									</div>
									<div class="form-group col-md-5">
										<label for="number">Valor</label>
										<input type="text" class="form-control" name="valor" placeholder="Valor" id="valor">
									</div>
								</div>
								<br>
								<button type="submit" class="btn btn-default" style="margin-left: 80px; width: 400px; margin-top:250px"	>Enviar</button>
			
							</form>	
						</div>
					</div>
				</div> 
			</div>


			<!-- final modal -->

			
			<div class="row">
				<div class="col">
					<table class="table">
						<thead>
							<tr>
								<th>Produto</th>
								<th>Fornecedor</th>
								<th>Valor</th>
								<th>Editar</th>
								<th></th>
							</tr>

							<?php foreach($produtos as $indice => $produto)	{ ?>
								<tr>
									
									<td><?= $produto->nome_produto ?></td>
									<td><?= $produto->fornecedor ?></td>
									<td><?= $produto->valor ?></td>	
									<td>
									<a  class="btn btn-primary" href=""> 
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
										<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
										</svg>
									</a>
									</td>
								</tr>
							<?php } ?>

						</thead>
					</table>
				</div>
			</div>
		
		</div>
	</body>
</html>