<?php

    class Registro{

        public  $id;
        public  $aluno;
        public  $curso;
        

        public function __construct($id, $turma, $curso, $aluno){

            $this->id    = $id;
            $this->aluno = $aluno;
            $this->curso = $curso;

        }


    }

?>