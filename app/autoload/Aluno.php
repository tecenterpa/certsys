<?php

    class Aluno{
        public  $id;
        public  $nome;
        public  $cpf;


        //get and set id ----------- inicio
        public function getId(){
            return $this->id;
          }
      
          public function setId($id){
            $this->id = $id;
          }
        //get and set id ----------- fim

        //get and set nome ----------- inicio
        public function getNome(){
            return $this->nome;
          }
      
          public function setNome($nome){
            $this->nome = $nome;
          }
        //get and set nome ----------- fim


        //get and set cpf ----------- inicio
        public function getCpf(){
            return $this->cpf;
          }
      
          public function setCpf($cpf){
            $this->cpf = $cpf;
          }
        //get and set cpf ----------- fim
        
    }

?>