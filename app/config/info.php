<?php

    session_start();


    // pasta de arquivos do sistema, alterar pasta aqui ou deixe vazio
    $pasta = 'certsys';
    
    // caminho servidor
    $host = $_SERVER['SERVER_NAME'];

        if ($pasta != '') {
            $urlB = DIRECTORY_SEPARATOR;
        }else{
            $urlB  =   '';
        }

    //caminho completo
    $diretorioS = DIRECTORY_SEPARATOR;
    $GLOBALS['path'] = "$pasta$urlB";

?>