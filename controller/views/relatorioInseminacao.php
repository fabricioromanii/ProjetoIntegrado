<table>
  <tr>
    <th>Código do Animal</th>
    <th>Touro inseminador</th>
    <th>Data da inseminação</th>
  </tr>
<?php
$obj = new inseminacaoDAO();
$lista = $obj->buscaMes($_GET['filtroMes']);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $inseminacao){
?>     

  <tr>
    <td><?=$inseminacao->getCodAnimal()?> </td>
    <td><?=$inseminacao->getTouroInseminador()?></td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtInseminacao())));?></td>
  </tr>

<?php
    }
    }
?>
</table>
