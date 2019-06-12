<?php

    function login(){

        if (isset($_SESSION['chave'])) {
            header('Location: admin/painel?page=dash');
        }else{
            require_once 'app/view/login.php';
        }

    }

?>