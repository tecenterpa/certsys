<?php

    include '../config/db.php';
    require_once "../funcoes/mask.php";
    require_once "../funcoes/cursoCertificado.php";
    
    $style = "'stylesheet'";
    $textcss = "'text/css'";
    
             $result_log = "SELECT * FROM alunos WHERE cpf = 07995494602";
                              $resultado_log  = mysqli_query($conn,$result_log);                              
                              if ($resultado_log) {
                                while ($row_log  = mysqli_fetch_assoc($resultado_log)){
                                  
                                  $id = $row_log['id'];
                                  $aluno = $row_log['nome'];
                                  $cpf = $row_log['cpf'];
                                  $cpfR = Mask("###.###.###-##",$cpf);
                                  $turma = $row_log['turma'];

                                  $reg = "$id.$turma";
                                  $turmaRV = md5($turma);

                                  $qr = "../qrcode/php/qr_img.php?";
                                  $qr .= "d=www.mvbcursos.com/registroC/go?registro=$reg&";
                                  $qr .= "e=H&";
                                  $qr .= "s=4&";
                                  $qr .= "t=P&";
                                                                      
                                echo '
                                      <!DOCTYPE html>
                                      <html>
                                      <head>
                                        <title>Carteirinha</title>
                                        <meta charset="utf-8">
                                        <link rel="stylesheet" type="text/css" href="carteirinha.css">
                                      </head>
                                      <body>
                                        <div class="certificado">
                                          <img src="carteirinha.jpg" width="100%">
                                          <div class="qr">
                                            <img src="'.$qr.'" height="50px">
                                          </div>
                                            <h2>'.$aluno.'</h2>
                                            <h3>'.$cpfR.'</h3>
                                            <h4>'.$turmaRV.'</h4><p>';

                                            $result_lognc = "SELECT id, aluno, turma, curso FROM registros";
                                            $resultado_lognc  = mysqli_query($conn,$result_lognc);
                                                  if ($resultado_lognc) {                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
                                                    while ($row_lognc  = mysqli_fetch_assoc($resultado_lognc)){
                                                        
                                                        if ($row_lognc['aluno'] == $cpf) {
                                                          $curso = $row_lognc['curso'];
                                                          $curso = cursoCertificado($curso);
                                                            echo "$curso<br>";
                                                        }
                                                 }    
                                            }
                                              
                                            echo '</p><h5>'.$reg.'</h5>
                                        </div>
                                      </body>
                                      </html>
                                      ';
                                      }
                                     
                                    }                                    
                                
                            
    


?>
