<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Pizza !</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Main Header -->
    <header id="main-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand" href="/">
                    <img src="assets/images/logo.png" alt="Web Pizza">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active']== "pizzas" ? 'active' : '') ?>" href="/pizzas">Pizzas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active']== "salads" ? 'active' : '') ?>" href="/salades">Salades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active']== "desserts" ? 'active' : '') ?>" href="/desserts">Desserts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active']== "drinks" ? 'active' : '') ?>" href="/boissons">Boissons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active']== "menus" ? 'active' : '') ?>" href="/menus">Menus</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active']== "account" ? 'active' : '') ?>" href="/mon-compte">Mon Compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cart <?= ($GLOBALS['route_active']== "order" ? 'active' : '') ?>" href="/panier">Panier</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- end #main-header -->

    <!-- Main Content -->
    <div id="main-content">