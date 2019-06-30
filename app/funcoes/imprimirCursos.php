<?php

    function imprimirCursos($cpf){

        global $conn;

        $result_lognc = "SELECT id, aluno, turma, curso FROM registros WHERE";
        $resultado_lognc  = mysqli_query($conn,$result_lognc);
              if ($resultado_lognc) {                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
                while ($row_lognc  = mysqli_fetch_assoc($resultado_lognc)){
                    
                    if ($row_lognc['aluno'] == $cpf) {
                        echo "<p>$curso</p>";
                    }
             }    
        }

    }

?>