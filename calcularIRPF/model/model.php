<?php
    class Usuario{
    
        private  $nome;
        private  $cpf;
        private  $rendimento;
        private  $aliquota;
        private  $imposto;


        public function __construct($nome, $cpf, $rendimento){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->rendimento = $rendimento;
        }


        //GETTERS
        public function getNome(){
            return $this->nome;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getRendimento(){
            return $this->rendimento;
        }

        public function getAliquota(){
            return $this->aliquota;
        }

        public function getImposto(){
            return $this->imposto;
        }

        //SETTERS

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function setRendimento($rendimento){
            $this->rendimento = $rendimento;
        }

        public function setAliquota($aliquota){
            $this->aliquota = $aliquota;
        }

        public function setImposto($imposto){
            $this->imposto = $imposto;
        }

        public function setClassificacao($classificacao){
            $this->classificacao = $classificacao;
        }


        //Alíquota
        public function calcularIR($rendimento){

        if ($rendimento < 22847.76) {
           $this->setImposto("Não há dedução fiscal.");

        } else if ($rendimento >= 22847.77 && $rendimento < 33919.80) {
            $this->setAliquota(7.5);
            $this->setImposto("Voce deve pagar " . $rendimento * 0.075 . " reais.");

        } else if ($rendimento >= 33919.81 && $rendimento < 45012.60) {
            $this->setAliquota(15);
            $this-> setImposto("Voce deve pagar " . $rendimento * 0.15 . " reais.");

        } else if ($rendimento >= 45012.61 && $rendimento < 55976.16) {
            $this->setAliquota(22.5);
            $this-> setImposto("Voce deve pagar " . $rendimento * 0.225 . " reais.");

        } else {
            $this->setAliquota(27.5);
            $this-> setImposto("Voce deve pagar " . $rendimento * 0.275 . " reais.");
        }

      }
    }

?>