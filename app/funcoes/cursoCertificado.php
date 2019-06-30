<?php

    function cursoCertificado($curso){

        global $conn;

    $result_logn = "SELECT id, nome FROM cursos WHERE id = $curso";
    $resultado_logn  = mysqli_query($conn,$result_logn);
          if ($resultado_logn) {
            while ($row_logn  = mysqli_fetch_assoc($resultado_logn)){
                $curso = $row_logn['nome'];
          }
         }

         return $curso;
    }

?>