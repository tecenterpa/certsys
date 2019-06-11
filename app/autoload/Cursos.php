<?php

    class Curso{

        public  $id;        
        public  $nome;
        public  $cat;
        public  $cargaHs;

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

        //get and set cat ----------- inicio
        public function getCat(){
            return $this->cat;
          }
      
          public function setCat($cat){
            $this->cat = $cat;
          }
        //get and set cat ----------- fim

        //get and set cargaHs ----------- inicio
        public function getCargaHs(){
            return $this->cargaHs;
          }
      
          public function setCargaHs($cargaHs){
            $this->cargaHs = $cargaHs;
          }
        //get and set cargaHs ----------- fim

    }

?>