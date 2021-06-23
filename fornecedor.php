<?php

	$acao = 'recuperar';
	require 'fornecedor_controller.php';

?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Cadastra Produtos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="estoque.php">Estoque</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="fornecedor.php">Fornecedores</a>
						</li>
					</ul>
				
				</div>
			</div>
		</nav>

		<form  method="post" action="fornecedor_controller.php?acao=inserir">
			<div class="container">
				<div class="row mb-3">
					<div class="col">
						<h2 class="display-4">Cadastra fornecedor</h2>
					</div>
				</div>

				<div class="row mb-2">
					<div class="col-md-8">
						<input type="text" class="form-control" name="nome" placeholder="Nome do fornecedor" id="nome_fornecedor">
					</div>
					<div class="col-md-2">
						<input type="tel" class="form-control" name="telefone" placeholder="Telefone" id="data">
					</div>
				</div>

				<div class="row mb-2">
					<div class="col-md-8">
						<input type="email" class="form-control" name="email" placeholder="E-mail do fornecedor" id="email_fornecedor">
					</div>
					<div class="col-md-2 d-flex justify-content-end">
						<button type="submit" class="btn btn-primary">
							adicionar
						</button>
					</div>			
				</div>

				<div class="row">
					<div class="col">
						<table class="table">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Email</th>
									<th>Telefone</th>
									<th></th>
								</tr>

								<?php foreach($fornecedor as $indice => $fornecedor)	{ ?>
									<tr>
										<td><?= $fornecedor->nome ?></td>
										<td><?= $fornecedor->email ?></td>
										<td><?= $fornecedor->telefone ?></td>
										<td></td>
									</tr>
								<?php } ?>

							</thead>
						</table>
					</div>
				</div>

			</div>
		</form>
	</body>
</html>