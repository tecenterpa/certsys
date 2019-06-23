<?php 

    $qr = "../qrcode/php/qr_img.php?";
    $qr .= "d=Certificado Autenticado pela MVB CURSOS | Aluno Bruno Duarte da Silva, Reg: 184.5&";
    $qr .= "e=H&";
    $qr .= "s=4&";
    $qr .= "t=P&";

    

    /*require_once '../dompdf/autoload.inc.php';

    $html = '';
    
    use Dompdf\Dompdf;
    $pdf = new DOMPDF();

    $pdf->setPaper('A4', 'landscape');
    
    $pdf->load_html('
        oi
    ');

    $pdf->render();

    

    $pdf->stream(
        "certificado.pdf",
        array(
                "Attachment" => false
            )
        );*/

?>

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
        <div>
            <div class="certificado">
                <div class="curso-bandeira">
                    <span><img src="imagens/brasil.jpg"></span>
                    <h1>CERTIFICADO NACIONAL DE</h1>
                    <h1>OPERADO DE ESCAVADEIRA HIDRÁULICA</h1>            
                </div>
                <div class="text">
                    <center>
                        <h2>Bruno Duarte da Silva</h2>
                        <h3>CPF: 060.975.987-74</h3>
                        <h4>CAPACITADO PARA OPERADOR DE ESCAVADEIRA HIDRÁULICA</h4>
                        <h5 align="justify">
                            Conferido ao Aluno por ter concluído o curso em conformidade com a NR - 18, item 18.22.1, realizado
                            no dia 30 do mês de Maio a 04 do mês de Junho na Cidade de <span>GOIATUBA</span> - GO com Aulas
                            presenciais, Campo, Prático e Estudo em Casa com duração total de 60 <span>Horas/Aulas</span>.
                        </h5>
                    </center>
                    
                    <p align="right"><span>AUTORIZAÇÃO E VALIDADE DE CURSOS</span> conforme a lei nº. 9394/96, o Decreto nº. 5.154/04 e a Deliberação</p>
                    <p align="right">CEE 14/97 (Indicação CEE 14/97)</p>
                    <p align="right"><span>Registro Interno</span> 184.5</p>
                </div>            
                <div class="info">
                    <div class="linha">
                    </div>                
                </div>
                <div  class="text-info">
                    <span>PARA SOLICITAR 2º VIA OU CONSULTAR A AUTENTICIDADE DESDE DOCUMENTO ACESSE: WWW.MVBCURSOS.COM.BR/REGISTRO</span>
                </div>

                <div class="ass-aluno">
                    <center>
                        <p>Aluno Participante</p>
                    </center>
                </div>
                <div class="ass-diretor">
                    <center>
                        <p>Diretor Presidente</p>
                        <h2>MARCOS VINICIUS BENIGNO TEIXEIRA</h2>
                    </center>
                </div>
                <div class="ass-instrutor">
                    <center>
                        <p>Instrutor</p>
                        <h2>CICERO SEBASTIÃO DA SILVA</h2>
                    </center>
                </div>
                <div class="ass-tec">
                    <center>
                        <p>Técnico de Segurança</p>
                        <h2>ANDREIA TORRES DA MATA</h2>
                    </center>
                </div>
                <div class="logo-mvb">
                    <img src="imagens/mvb.png" height="160px">
                </div>
                <div class="qrcode">
                    <img src="<?php echo $qr?>" height="120px">
                </div>
            </div>
        </div>
    </body>
</html>



