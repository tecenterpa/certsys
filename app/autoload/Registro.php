<?php

    class Registro{

        public  $id;
        public  $turma;
        public  $curso;
        public  $aluno;

        public function __construct($id, $turma, $curso, $aluno){

            $this->id = $id;
            $this->turma = $turma;
            $this->curso = $curso;
            $this->aluno = $aluno;

        }


    }

?>