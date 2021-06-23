<!doctype html>
<html lang="pt-br">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\Users\Maico\Documents\Login\bootstrap-5.0.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/telacadastro.css">
    <title>Cadastro</title>
  </head>
  <body >    
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <a class="navbar-brand" href="tela_login.html" style="margin-left: 20px;" ><h2>SEPP</h2></a>
    </nav>
    <div class="card" id="cadastro" style="border-radius: 10px; top: 55%; height: 600px; width: 650px; margin-left: 23%; margin-top: 10px; box-shadow: 1px 5px 40px rgb(49, 52, 53)">
        <nav > <p class="font-weight-light text-center align-content-md-center " style="margin-bottom: -20px; font-size: 35px; margin-top: 20px; background-color: rgb(241, 241, 239);">Realize o seu cadastro</p></nav>
        
		<form id="form" method="post"action="usuario_controller.php?acao=inserir" style="margin-left: 20%">
            <div class="form-row" style="width: 700px;">
              <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control"  id="inputEmail4" name="email" placeholder="Email"  required>
              </div>
              <div class="form-group col-md-6">
                  <label for="inputPassword4">Senha</label>
                  <input type="password" class="form-control"  id="inputPassword4" name="senha" placeholder="Senha"  required>
              </div>
              <div class="form-group col-md-6">
                  <label for="inputAddress">Empresa</label>
                  <input type="text" class="form-control" id="inputAddress" name="empresa" placeholder="Informe o nome da empresa"  required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Ex: Rua dos Bobos, nº 0" required style="width: 400px;">
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputCEP">CEP</label>
                    <input type="text" class="form-control" id="inputCEP " name="cep" required style="width: 150%;">
                </div>
              <div class="form-group col-md-4" style="width: 50%;">
                <label for="inputEstado">Estado</label>
                    <select name="estado" id="inputEstado" class="form-control">
                        <option value="null">Selecionar Estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                     </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity" name="cidade" required>
              </div>
            </div>
          
            <br>
            <button type="submit" class="btn btn-outline-primary" style="margin-top: -10px; width: 400px;">Enviar</button>
            
          </form>
          
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>


    
</div>


  



    
