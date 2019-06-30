<?php 

    require_once "../config/db.php";
    require_once "../funcoes/mask.php";
    require_once "../funcoes/nomeCertificado.php";
    require_once "../funcoes/cursoCertificado.php";

        


    $result_log = "SELECT id, aluno, turma, curso FROM registros WHERE aluno = 08450342430";
    $resultado_log  = mysqli_query($conn,$result_log);
          if ($resultado_log) {
            while ($row_log  = mysqli_fetch_assoc($resultado_log)){

                $idC = $row_log['id'];
                $nome = $row_log['aluno'];
                $cpf =  $row_log['aluno'];
                $cpf = Mask("###.###.###-##",$cpf);
                $turmaC = $row_log['turma'];

                $curso = $row_log['curso'];

                $reg = "$idC.$turmaC";

                $qr = "../qrcode/php/qr_img.php?";
                $qr .= "d=www.mvbcursos.com/registro/go?registro=$reg&";
                $qr .= "e=H&";
                $qr .= "s=4&";
                $qr .= "t=P&";
                echo '

                <!DOCTYPE html>
                <html>
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <link rel="stylesheet" href="css/certificado.css">
                    <title>CERTIFICADO</title>
                </head>
                    <body>
                        <div class="certificado">            
                            <div>
                                <div class="curso-bandeira">
                                    <span><img src="imagens/brasil.jpg"></span>
                                    <h1>CERTIFICADO NACIONAL DE</h1>
                                    <h1>'.cursoCertificado($curso).'</h1>            
                                </div>
                                <div class="text">
                                    <center>
                                        <h2>'.nomeCertificado($nome).'</h2>
                                        <h3>CPF: '.$cpf.'</h3>
                                        <h4>CAPACITADO PARA '.cursoCertificado($curso).'</h4>
                                        <h5 align="justify">
                                            Conferido ao Aluno por ter concluído o curso em conformidade com a NR - 18, item 18.22.1, realizado
                                            nos dias 18 de Junho de 2019 a 24 de Junho de 2019 na Cidade de <span>CANÁPOLIS</span> - MG com Aulas
                                            presenciais, Campo, Prático e Estudo em Casa com duração total de 60 <span>Horas/Aulas</span>.
                                        </h5>
                                    </center>
                                    
                                    <p align="right"><span>AUTORIZAÇÃO E VALIDADE DE CURSOS</span> conforme a lei nº. 9394/96, o Decreto nº. 5.154/04 e a Deliberação</p>
                                    <p align="right">CEE 14/97 (Indicação CEE 14/97)</p>
                                    <p align="right"><span>Registro Interno</span> '.$reg.'</p>
                                </div>            
                                <div class="info">
                                    <div class="linha">
                                    </div>                
                                </div>
                                <div  class="text-info">
                                    <span>CONSULTE O QR-CODE PARA AUTENTICAR ESTE DOCUMENTO OU ACESSE: WWW.MVBCURSOS.COM/REGISTRO</span>
                                </div>
                
                                <div class="ass-aluno">
                                    <center>
                                        <p>Aluno Participante</p>
                                    </center>
                                </div>
                                <div class="ass-diretor">
                                    <center>
                                        <img src="../../_data/diretor.png">                        
                                        <p>Diretor Presidente</p>
                                        <h2>MARCOS VINICIUS BENIGNO TEIXEIRA</h2>
                                    </center>
                                </div>
                                <div class="ass-instrutor">
                                    <center>
                                        <img src="../../_data/professor.jpeg">                         
                                        <p>Instrutor</p>
                                        <h2>CICERO SEBASTIÃO DA SILVA</h2>
                                    </center>
                                </div>
                                <div class="ass-tec">
                                    <center>
                                        <img src="../../_data/tec.jpeg"> 
                                        <p>Técnico de Segurança</p>
                                        <h2>DIEGO LOPES DA SILVA</h2>
                                    </center>
                                </div>
                                <div class="logo-mvb">
                                    <img src="imagens/mvb.png" height="160px">
                                </div>
                                <div class="qrcode">
                                    <img src="'.$qr.'" height="120px">
                                </div>
                                <div class="caixa-text">
                
                                </div>
                            </div>
                        </div>
                    </body>
                </html>
                ';
          }
         }
    

?>





