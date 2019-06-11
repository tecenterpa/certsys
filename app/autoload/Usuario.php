<?php

    class Usuario{

        public  $id;
        public  $nome;
        private $login;
        private $senha;
        private $permissao;

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

        //get and set login ----------- inicio
        public function getLogin(){
            return $this->login;
          }
      
          public function setLogin($login){
            $this->login = $login;
          }
        //get and set login ----------- fim

        //get and set senha ----------- inicio
        public function getSenha(){
            return $this->senha;
          }
      
          public function setSenha($senha){
            $this->senha = $senha;
          }
        //get and set senha ----------- fim

        //get and set permissao ----------- inicio
        public function getPermissao(){
            return $this->permissao;
          }
      
          public function setPermissao($permissao){
            $this->permissao = $permissao;
          }
        //get and set permissao ----------- fim

    }

?>