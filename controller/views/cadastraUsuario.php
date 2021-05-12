<?php require_once("../includes/header.php");?>

<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
          echo "<li>$e</li>";
      echo "</ul>";
  }

  $nomeLogin = isset($_POST['field_nomeLogin']) ? $_POST['field_nomeLogin'] : "";
  $senha = isset($_POST['field_senha']) ? $_POST['field_senha'] : "";

    ?>
</div>

  <form  action="" method="post" enctype="multipart/form-data">
    <div class="container-cadastra-login">
      <div>
        <label class="label-cadastra" for="id_nomeLogin">Login</label>
        <input type="text" id="id_nomeLogin" name="field_nomeLogin" value="<?=$nomeLogin ?>" required>
      </div>
      <div>
        <label class="label-cadastra" for="id_senha">Senha</label>
        <input type="password" id="id_senha" minlength="6" name="field_senha" value="<?=$senha ?>" required>
      </div>
      <div>
        <label class="label-cadastra" for="id_senhaConfirma">Confirmar senha</label>
        <input type="password" name="field_senhaConfirma" minlength="6" id="id_senhaConfirma" value="<?=$senha ?>" required>
      </div>
      <button class="button-form" type="submit">Cadastrar</button>
      <div class="login-a"><a href="../views/configuracoes.php">Voltar</a></div>
    </div>
  </form>

<!-- <script src="../../js/cadastro-login.js"></script> -->
