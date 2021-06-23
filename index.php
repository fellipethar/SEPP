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
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Cadastra Produtos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="estoque.php">Estoque</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="fornecedor.php">Fornecedores</a>
						</li>
					</ul>
				
				</div>
			</div>
		</nav>

		<?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Produto inserido com sucesso!</h5>
			</div>
		<?php } ?>

		<form method="post" action="produto_controller.php?acao=inserir">
			<div class="container">
				<div class="row mb-3">
					<div class="col">
						<h2 class="display-4">Cadastra produtos</h2>
					</div>
				</div>

				<div class="row mb-2">
					<div class="col-md-8">
						<input type="text" class="form-control" name="nomeProduto" placeholder="Nome do produto" id="nome_produto">
					</div>
					<div class="col-md-2">
						<input type="text" class="form-control" name="valor" placeholder="Valor" id="preco_produto">
					</div>
				</div>

				<div class="row mb-2">
					<div class="col-md-8">
						<input type="text" class="form-control" name="fornecedor" placeholder="Fornecedor do prooduto" id="fornecedor">
					</div>
					<div class="col-md-2">
						<input type="date" class="form-control" name="data" placeholder="data" id="data">
					</div>
				</div>
				
				<div class="row -mb-2">
					<div class="col-md-8">
						<textarea type="text" class="form-control" name="descricao" placeholder="Descrição do produto" rows="1" id="descricao"></textarea>
					</div>
					<div class="col-md-2 d-flex justify-content-end">
						<button type="submit" class="btn btn-primary">
							adicionar
						</button>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>