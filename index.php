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