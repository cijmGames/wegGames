<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head lang="pt-br">
        <title>Web Games</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Um site de Jogos que disponibiliza pra você um programa de baixar jogos via torrent.">
        <meta name="keywords" content="jogos potentes, games 2016, como baixar jogos 2016, melhores jogos, programa para baixar jogos">
        <meta name="robots" content="index,follow">
        
        <link rel="icon" href="ativos/img/icon.png">
        <link rel="stylesheet" href="ativos/css/style.css">
        <link rel="stylesheet" href="ativos/css/style-mobile.css">
        <link href="ativos/css/bootstrap.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Days+One|Palanquin+Dark:400,700|Roboto+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption|Play:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="ativos/fonts/glyphicons-halflings-regular.svg">
        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        
        <script src="ativos/js/bootstrap.min.js"></script>
       
        
    </head>
    <body>
        <header id="top"class="inicio bgd">
            <a href="index.php"><h1 class="logo">Jogos Potentes</h1></a>
            <button class="btn-menu"><i class="fa fa-bars fa-lg" title="Menu"></i></button>
            <nav class="menu">
                <a href="#" class="btn-close"><p class="fa fa-times-circle"></p></a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="videos.php">Videos</a></li>
                    <li><a href="top-10.php">Top 10</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <?php
                    if($_POST['login']){

                    }
                    ?>

                    <li><a href="contato.php">Painel</a></li>
                </ul>
            </nav> 
        </header>