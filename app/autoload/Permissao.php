<?php

    class Permissao{

        public  $visualizar;
        public  $editar;
        public  $apagar;
        
        public function __construct($visualizar, $editar, $apagar){

            $this->visualizar   =   $visualizar;
            $this->editar       =   $editar;
            $this->apagar       =   $apagar;

        }

    }

?>