<?php // \core\Services\Auth::restrict();  ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Web Games</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
     <link rel="stylesheet" href="assets/css/custom.css" type="text/css"/>
</head>
<body>
\<header class="section">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="collapsed navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><span class="glyphicon glyphicon-dashboard"></span> Painel de Administração</a></div>
            <?php//  if($sess=$_SESSION['auth']): ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-bell"></span> Notificações <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/webGamesf/" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> Projeto</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-cog"></span> Opções
                            <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-star"></span> Preferências</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">
                                    <span class="glyphicon glyphicon-off"></span> Sair
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <?php // endif; ?>
        </div>
    </nav>
</header>

