<?php

    function login(){

        if (isset($_SESSION['chave'])) {
            header('Location: app/painel?page=dash');
        }else{
            require_once 'app/view/login.php';
        }

    }

?>