<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\Users\Maico\Documents\Login\bootstrap-5.0.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/telalogin.css">
    <title>Login</title>
  </head>
  <body id="body">    
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
      <a class="navbar-brand" href="login.php" style="margin-left: 20px;"><h2>SEPP</h2></a>
    </nav>
    <div class="card" id="telalogin" style="border-radius: 10px; top: 55%; height: 580px; width: 500px; padding-left: 20px; padding-right: 20px;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div id="img-logo" style="padding-left: 7%; padding-right: 7%;">
            <img src="img\download.png">
        </div>
        <div class="card-body">
            <form method="post" action="login_controller.php">
            <div class="mb-3">
                    <label for="" class="form-label">Login</label>
                    <div class="col-12">
                      <label class="visually-hidden" for="inlineFormInputGroupUsername" required>Login</label>
                      <div class="input-group">
                        <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                          <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
                        </svg></div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="email" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Senha</label>
                    
                    <div class="col-12">
                      <div class="input-group">
                        <div class="input-group-text"><img><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                          <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg></div>
                        <input type="password" class="form-control" id="" name="senha" placeholder="Senha" required>
                      </div>
                    </div>
                  </div>
                <div class="mb-3">
                  
                </div>
                <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                      <label class="form-check-label" for="inlineFormCheck">Lembrar usuário</label>
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" type="submit" >Entrar</button>
                </div>
                <br>
                <div id="center">
                  
                    <a rel="stylesheet" href="Cadastra.php" title="Cadastre-se">Cadastre-se </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"></svg>
                      <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    <a rel="stylesheet" href="cadastra.html" title="">Esqueci minha senha </a>
                </div>
            </form>
        </div>
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