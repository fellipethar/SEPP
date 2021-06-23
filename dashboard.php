<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>
		<link rel="stylesheet" href="css/estilo.css">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
		<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
        <link rel="stylesheet" href="css/dashboard.css">
        <script src="https://kit.fontawesome.com/69629d0def.js" crossorigin="anonymous"></script>
        
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
            
            <div class="jumbotron  text-black border  mb-5"  >
                <h1>Relatorio do Mês!</h1>      <br>                               
                    <div class="spinner-grow text-muted"></div>
                    <div class="spinner-grow text-primary"></div>
                    <div class="spinner-grow text-success"></div>
                    <div class="spinner-grow text-info"></div>
                    <div class="spinner-grow text-warning"></div>
                    <div class="spinner-grow text-danger"></div>
                    <div class="spinner-grow text-secondary"></div>
                    <div class="spinner-grow text-dark"></div>
                    <div class="spinner-grow text-light"></div>
            </div>

          
            <!-- grafico 1 -->
            <div class="Content">
                <div class=".container-fluid ">
                    <div class="row" style=" margin-left: 15%; margin-top: 50px">
                        <div class=" card bg-light col-md-4" >
                                <h2 class="card-header text-center font-weight-normal">Porcentagem de produtos adquiridos no mês</h2>
                                <div id="piechart" class="card-body"style="width:550px; height: 350px; margin-left:50px "></div>
                        </div>
            <!-- grafico 2 -->
                        <div class="card bg-light col-md-4" style=" margin-left: 10%;">
                            <h2 class="card-header bg-light text-center font-weight-normal">Quantidade de Produtos adquiridos no mês</h2>
                            <div id="table_div" class="card-body"style="width: 500px; height: 300px; margin-left:40px "></div>
                        </div>     
                    </div>                 
                </div>
            </div>

           
        <!-- informações de vendas -->
        <div class="Content">
                    <div class=".container-fluid" style="">
                        <div class="row" style="margin-left:20% ;margin-top: 80px; margin-bottom: 100px;">
                        <div class="col-sm-3 text-center" style="">
                            <div class="card border-dark mb-3" style="max-width:20rem;">
                                <div class="card-header text-back border-dark bg-light">
                                    <h3 class="card-title">Total de produtos vendidos no mês</h3>
                                </div>
                                <div class="card-body text-black">
                                    <h3>2.900</h3>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-3 text-center" style="">
                            <div class="card border-dark mb-3" style="max-width: 20rem;">
                                <div class="card-header text-back border-dark bg-light  ">
                                    <h3 class="card-title">Quantidade de Fornecedores</h3>
                                </div>
                                <div class="card-body text-black">
                                    <h3>5</h3>
                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-3 text-center" style="">
                            <div class="card border-dark mb-3" style="max-width: 20rem;">
                                <div class="card-header text-back border-dark bg-light ">
                                    <h3 class="card-title">Produto mais Adquirido do mês</h3>
                                </div>
                                <div class="card-body text-black">
                                    <h3>Arroz</h3>
                                </div>
                            </div>
                        </div>           
                    </div>
                </div>
        




        <!-- arquivo js do grafico 1 -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                ['Produto', 'Quantidade'],
                ['Arroz',     11],
                ['Feijão',      2],
                ['Macarrão',  2],
                ['Farinha', 2],
                ['Pimenta em conserva',    7]
                ]);

                var options = {
                title: ''
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
            </script>

            <!-- arquivo js do Grafico2  -->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['table']});
            google.charts.setOnLoadCallback(drawTable);

            function drawTable() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Nome do Produto');
                data.addColumn('number', 'Valor total');
                data.addColumn('number', 'Quantidade');    
                data.addRows([
                ['Arroz',  {v: 1000   , f: 'R$5.000'}, {f: '1000'},],
                ['Feijão',   {v:700,   f: 'R$5.600'},  {f: '700'},],
                ['Farinha', {v: 500, f: 'R$2.500'}, {f: '500'},],
                ['Macarrão',   {v: 700,  f: 'R$1.750'},  {f: '700'},]
                ]);

                var table = new google.visualization.Table(document.getElementById('table_div'));

                table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
            }
            </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    

</body>