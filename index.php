<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
          echo "<li>$e</li>";
      echo "</ul>";
  }

  $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
  $motivoTratamento = isset($_POST['field_motivoTratamento']) ? $_POST['field_motivoTratamento'] : "";
  $nomeMedicamento = isset($_POST['field_nomeMedicamento']) ? $_POST['field_nomeMedicamento'] : "";
  ?>
</div>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="/img/mst.png">

  <meta name="author" content="Fabrício Romani e Pedro Lill">
  <meta name="description" content="Cooptar - cooperativa agropecuária">
  <meta name="keywords" content="mst, cooperativa, pontão, agropecuária, bovino">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/login.css">

  <title>Login - COOPTAR</title>

</head>

<body>

  <div class="logo-mst"><img title="Logo do mst" src="/img/mst.png"/></div>

  <form  action="/views/previsoes.php" onsubmit="return validarLogin()">
    <div class="container-login">
      <input type="text" placeholder="Login" name="username" required>
      <input type="password" placeholder="Senha" name="password" required>
      <button class="button-form" type="submit">Login</button>
      <div class="login-a"><a href="../controller/views/cadastraUsuario.php">Cadastrar novo usuario</a></div>
    </div>
  </form>

  <script src="/js/login.js"></script>

</body>

</html>