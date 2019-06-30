<?php

    function nomeCertificado($aluno){

        global $conn;

    $result_logn = "SELECT id, nome, cpf FROM alunos WHERE cpf = $aluno";
    $resultado_logn  = mysqli_query($conn,$result_logn);
          if ($resultado_logn) {
            while ($row_logn  = mysqli_fetch_assoc($resultado_logn)){
                $nome = $row_logn['nome'];
          }
         }

         return $nome;
    }

?>