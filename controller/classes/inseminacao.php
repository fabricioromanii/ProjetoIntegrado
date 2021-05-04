<?php
    class Inseminacao{

        private $codInseminacao;
        private $codAnimal;
        private $dtInseminacao;
        private $touroInseminador;
        private $inseminadorResponsavel;
        private $retorno;
        private $obs;
        private $previsaoSecagem;
        private $previsaoParto;
        private $novaDtInseminacao;
        private $novaPrevisaoSecagem;
        private $novaPrevisaoParto;

        public function getCodInseminacao(){
            return $this->codInseminacao;
        }

        public function setCodInseminacao($codInseminacao){
            $this->codInseminacao = $codInseminacao;
        }

        public function getCodAnimal(){
            return $this->codAnimal;
        }

        public function setCodAnimal($codAnimal){
            $this->codAnimal = $codAnimal;
        }

        public function getDtInseminacao(){
            return $this->dtInseminacao;
        }

        public function setDtInseminacao($dtInseminacao){
            $this->dtInseminacao = $dtInseminacao;
        }

        public function getTouroInseminador(){
            return $this->touroInseminador;
        }

        public function setTouroInseminador($touroInseminador){
            $this->touroInseminador = $touroInseminador;
        }

        public function getInseminadorResponsavel(){
            return $this->inseminadorResponsavel;
        }

        public function setInseminadorResponsavel($inseminadorResponsavel){
            $this->inseminadorResponsavel = $inseminadorResponsavel;
        }     
        
        public function getRetorno(){
            return $this->retorno;
        }

        public function setRetorno($retorno){
            $this->retorno = $retorno;
        }  

        public function getObs(){
            return $this->obs;
        }

        public function setObs($obs){
            $this->obs = $obs;
        }

        public function getPrevisaoSecagem(){
            return $this->previsaoSecagem;
        }

        public function setPrevisaoSecagem($previsaoSecagem){
            $this->previsaoSecagem= $previsaoSecagem;
        } 

        public function getPrevisaoParto(){
            return $this->previsaoParto;
        }

        public function setPrevisaoParto($previsaoParto){
            $this->previsaoParto = $previsaoParto;
        } 

        public function getNovaDtInseminacao(){
            return $this->novaDtInseminacao;
        }

        public function setNovaDtInseminacao($novaDtInseminacao){
            $this->novaDtInseminacao = $novaDtInseminacao;
        } 

        public function getNovaPrevisaoSecagem(){
            return $this->novaPrevisaoSecagem;
        }

        public function setNovaPrevisaoSecagem($novaPrevisaoSecagem){
            $this->novaPrevisaoSecagem = $novaPrevisaoSecagem;
        } 

        public function getNovaPrevisaoParto(){
            return $this->novaPrevisaoParto;
        }

        public function setNovaPrevisaoParto($novaPrevisaoParto){
            $this->novaPrevisaoParto = $novaPrevisaoParto;
        } 

        public function validate(){
            $erros = array();
            if(empty($this->getCodAnimal()))
                $erros[] = "É necessário informar o codigo do animal";
           if(empty($this->getTouroInseminador()))
                $erros[] = "É necessário informar o touro inseminador";
            if(empty($this->getInseminadorResponsavel()))
                $erros[] = "É necessário informar o inseminador responsavel";
            if(empty($this->getRetorno()))
                $erros[] = "É necessário informar o retorno da inseminação";
            if(empty($this->getObs()))
                $erros[] = "É necessário informar a observação";
            //if(empty($this->getPrevisaoSecagem()))
               // $erros[] = "É necessário informar a previsão de secagem";
           // if(empty($this->getPrevisaoParto()))
             //   $erros[] = "É necessário informar a previsão de parto";
            //if(empty($this->getNovaDtInseminacao()))
           //     $erros[] = "É necessário informar a nova data de inseminação";
            //if(empty($this->getNovaPrevisaoSecagem()))
              //  $erros[] = "É necessário informar a nova previsão de secagem";
            //if(empty($this->getNovaPrevisaoParto()))
                //$erros[] = "É necessário informar a nova previsão de parto";
            return $erros;                                 
        }
        
    }
?>
