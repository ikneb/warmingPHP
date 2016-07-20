<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Утепление квартир</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/warming.css">

</head>

<body class="home">
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="<? if($act=='main')echo 'active'?>"><a href="?">Главная</a></li>
                <li class="<? if($act=='about')echo 'active'?>"><a href="?act=about">О нас</a></li>
                <li class="<? if($act=='gallery')echo 'active'?>"><a href="?act=gallery">Галерея</a></li>
                <li class="<? if($act=='contact')echo 'active'?>"><a href="?act=contact">Контакты</a></li>
                <li class="<? if($act=='login')echo 'active'?>"><a class="btn" href="?act=login">Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>