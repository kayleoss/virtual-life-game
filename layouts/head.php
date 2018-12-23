<?php 
    $uri = $_SERVER['REQUEST_URI'];
    $bg_class = 'main-bg';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>IRL: Virtual Second Life Web Game</title>
        <meta name="description" content="IRL is an online web game where players can live their virtual life.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body class='<?= $bg_class ?>' >
        <!--[if lt IE 7]>
            <p class="text-center">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
        <![endif]-->