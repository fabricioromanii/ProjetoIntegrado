<?php require_once("../includes/header.php");?>

<div class="erro_cadastro">
  <?php
    if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
        echo "<li>$e</li>";
    }
    $codAnimalPadrao = isset($_GET['codAnimal']) ? $_GET['codAnimal'] : "" ;
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $codAnimalPadrao;
    $dtColeta = isset($_POST['field_dtColeta']) ? $_POST['field_dtColeta'] : date("Y-m-d");
    $litros = isset($_POST['field_litros']) ? $_POST['field_litros'] : "";
    $periodoDia = isset($_POST['field_periodoDia']) ? $_POST['field_periodoDia'] : "";
  ?>
</div>

<form action="" class="container-historicos" method="post" enctype="multipart/form-data">

  <h2>CADASTRO DE PRODUÇÃO</h2>
  
  <div class="div-metade">
    <label class="label-cadastra" for="id_codAnimal">Código do animal </label>
    <input type="number" name="field_codAnimal" id="id_codAnimal" value="<?=$codAnimal?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_dtColeta">Data da coleta </label>
    <input type="date" name="field_dtColeta" maxlength="100" id="id_dtColeta" value="<?=$dtColeta?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_litros">Produção em litros </label>
    <input type="number" step="0.01" name="field_litros" id="id_litros" value="<?=$litros?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_periodoDia">Periodo do dia </label>
    <select name="field_periodoDia" id="id_periodoDia" required >
      <option value="manha" value="<?=$periodoDia?>">Manhã</option>
      <option value="tarde" value="<?=$periodoDia?>">Tarde</option>
    </select>
  </div>
  <button name="adiciona" class="button-form" type="submit">Salvar</button>
  
</form>

<?php require_once("../includes/footer.php");?>