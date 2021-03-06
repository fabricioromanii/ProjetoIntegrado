<?php
include_once "../controller/classes/ProducaoDAO.php";
if(!isset($_GET['acao'])){
    $obj = new ProducaoDAO();
    $lista = $obj->listar();
    include "views/listaAnimal.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraProducao.php";              
            }
            else{
                $obj = new Producao();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtColeta($_POST['field_dtColeta']);
                $obj->setLitros($_POST['field_litros']);
                $obj->setPeriodoDia($_POST['field_periodoDia']);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraProducao.php";                       
                }
                else{
                    $bd = new ProducaoDAO();
                    if($bd->inserir($obj))
                        header("Location: producaoController.php"); 
                }
            }
            break;
        
        case 'altera':
            if(!isset($_POST['altera'])){ 
                $obj = new ProducaoDAO();
                $producao = $obj->buscarAltera($_GET['codProducao']);
                include "views/alteraProducao.php";
            }
            else{ 
                $obj = new Producao();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtColeta($_POST['field_dtColeta']);
                $obj->setLitros($_POST['field_litros']);
                $obj->setPeriodoDia($_POST['field_periodoDia']);
                $obj->setCodProducao($_POST['field_codProducao']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraProducao.php";                      
                }else{
                    $bd = new ProducaoDAO();
                    if($bd->alterar($obj))
                        header("Location: producaoController.php"); 
                }
            }
            break;

        case 'exclui':
            $bd = new ProducaoDAO();
            if($bd->excluir($_GET['codProducao']))
                header("Location: producaoController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

