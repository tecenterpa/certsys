<?php

    class Turma{

        public  $id;
        public  $cidade;
        public  $uf;
        public  $coord
        public  $prof;
        public  $dateI;
        public  $dateF;

        //get and set id ----------- inicio
        public function getId(){
            return $this->id;
          }
      
          public function setId($id){
            $this->id = $id;
          }
        //get and set id ----------- fim

        //get and set cidade ----------- inicio
        public function getCidade(){
            return $this->cidade;
          }
      
          public function setCidade($cidade){
            $this->cidade = $cidade;
          }
        //get and set cidade ----------- fim

        //get and set id ----------- inicio
        public function getUf(){
            return $this->uf;
          }
      
          public function setUf($uf){
            $this->uf = $uf;
          }
        //get and set uf ----------- fim
    
        //get and set coord ----------- inicio
        public function getCoord(){
            return $this->coord;
          }
      
          public function setId($coord){
            $this->coord = $coord;
          }
        //get and set coord ----------- fim

        //get and set prof ----------- inicio
        public function getProf(){
            return $this->prof;
          }
      
          public function setProf($prof){
            $this->prof = $prof;
          }
        //get and set prof ----------- fim

        //get and set dateI ----------- inicio
        public function getDateI(){
            return $this->dateI;
          }
      
          public function setDateI($dateI){
            $this->dateI = $dateI;
          }
        //get and set dateI ----------- fim        

        //get and set dateF ----------- inicio
        public function getDateF(){
            return $this->dateF;
          }
      
          public function setDateF($dateF){
            $this->dateF = $dateF;
          }
        //get and set dateF ----------- fim       

    }

?>