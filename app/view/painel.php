<?php

    require_once "../app/config/info.php";
    
?>


<!DOCTYPE html>
<html lang="pt">
	<head>		
		<meta charset="utf-8">
		<title><?php echo $title?></title>
		<link href="../app/view/css/painel.css" media="screen" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	</head>

<body>
	<div class="wrap">
	
	<nav>
		<ul class="menu">
			<li><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> DASHBOARD</a></li>
			<li><a href="#"> ALUNOS</a>
				<ul>
					<li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i> ADICIONAR</a></li>
					<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i> LISTAR</a></li>
				</ul>
			</li>
			<li><a href="#"> TURMAS</a>
				<ul>
                    <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i> ADICIONAR</a></li>
					<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i> LISTAR</a></li>
				</ul>
			</li>
			<li><a href="#"> DOCENTES</a>
				<ul>
                    <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i> ADICIONAR</a></li>
					<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i> LISTAR</a></li>
				</ul>
            </li>
            <h1>MVB</h1>
		</ul>
		<div class="clearfix"></div>
	</nav>
    </div>
    
    <div class="page">
        <h1>ok</h1>
    </div>

</body>

</html>

