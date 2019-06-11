<?php

    class CategoriaCurso{

        public  $id;
        public  $cat;

        //get and set id ----------- inicio
        public function getId(){
            return $this->id;
          }
      
          public function setId($id){
            $this->id = $id;
          }
        //get and set id ----------- fim

        //get and set cat ----------- inicio
        public function getCat(){
            return $this->cat;
          }
      
          public function setCat($cat){
            $this->cat = $cat;
          }
        //get and set cat ----------- fim
    
    }

?>