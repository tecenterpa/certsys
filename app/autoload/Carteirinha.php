<?php

    class Carteirinha{

        public  $nomeAluno;
        public  $cpfAluno;        
        public  $turmaId;
        public  $regId;


        public function __construct(){

            $this->nomeAluno    =   $nomeAluno;
            $this->cpfAluno     =   $cpfAluno;
            $this->turmaId      =   $turmaId;
            $this->regId        =   $regId;
        }

    }

    class ListaCursos extends Carteirinha{

        public $cursos;
        
        //get and set cursos ----------- inicio
        public function getCursos(){
            return $this->cursos;
          }
      
          public function setCursos($cursos){
            $this->cursos = $cursos;
          }
        //get and set cursos ----------- fim
    
    }

?>