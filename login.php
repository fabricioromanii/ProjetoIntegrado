<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../img/mstRedondo.png">
  <meta name="author" content="Fabrício Romani e Pedro Lill">
  <meta name="description" content="Cooptar - cooperativa agropecuária">
  <meta name="keywords" content="mst, cooperativa, pontão, agropecuária, bovino">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="stylesheet" href="/css/adicionar-animal.css">
  <title>LOGIN</title>
</head>

<div class="erro_cadastro">
<?php
  if(isset($erros) && count($erros) !=0){
    echo "<ul>";
    foreach($erros as $e)
      echo "<li>$e</li>";
  }
  $nomeLogin = isset($_POST['nomeLogin']) ? ($_POST['nomeLogin']) : "";
  $senha = isset($_POST['senha']) ? ($_POST['senha']) : "";
?>
</div>

<body>

  <br>
  <br>
  <br>
  <br>

  <div class="logo-mst"><img title="Logo do mst" src="/img/mstHeader.png"/></div>

  <form action="/controller/usuarioController.php?acao=logar" class="container-historicos" method="post" enctype="multipart/form-data">
    <div class="div-inteira">
      <label class="label-cadastra" for="id_nomeLogin">Login</label>
      <input type="text" id="id_nomeLogin" name="nomeLogin" value="<?=$nomeLogin?>" required>
    </div>
    <div class="div-inteira">
      <label class="label-cadastra" for="id_senha">Senha</label>
      <input type="password" id="id_senha" name="senha" value="<?=$senha ?>" required>
    </div>
    <button class="button-form-voltar" type="button"><a href="index.php">Voltar</a></button>
    <button name="logar" class="button-form-altera" onclick= "validarLogin()" type="submit">Login</button>
  </form>

<!-- <script src="/js/login.js"></script> -->

</body>
</html>