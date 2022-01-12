<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link href="/css/styleShop.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
<header class="header">
    <a href="index.html"><img src="/img/logo.png" alt="Logo" class="logo" /></a>

    <?php require_once 'navigation.php'; ?>

    <form action="" class="sucheForm">
        <input type="search" placeholder=" hier suchen.." id="sucheBox" />
        <label for="sucheBox" class="fas fa-search"></label>
    </form>
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="card-btn"></div>
        <!-- soll angezeigt, wenn KEINE auth-session existiert (if) -->
        <?php if ( !isset($_SESSION['auth'])): ?>
        <div class="fas fa-user" id="login-btn"></div>
        <!-- soll angezeigt, wenn auth-session existiert (else) -->
        <?php else: ?>
        <a href="/logout" title="logout"><div class="fas fa-sign-out-alt"></div></a>
        <?php endif; ?>

    </div>
    <div class="shoppingCart">
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="/img/logo.png" alt="" />
            <div class="content">
                <h3>texttext</h3>
                <span class="quantity">1</span>
                <span class="multiply">X</span>
                <span class="price">18.99Eu</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="/img/logo.png" alt="" />
            <div class="content">
                <h3>texttext</h3>
                <span class="quantity">1</span>
                <span class="multiply">X</span>
                <span class="price">18.99Eu</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="/img/logo.png" alt="" />
            <div class="content">
                <h3>texttext</h3>
                <span class="quantity">1</span>
                <span class="multiply">X</span>
                <span class="price">18.99Eu</span>
            </div>
        </div>
        <h3 class="total">total : <span>56.99</span></h3>
        <a href="#" class="btn">checkout</a>
    </div>
    <form method="post" action="/login/check" class="loginForm">
        <h3>login form</h3>
        <input type="email" name="email" placeholder="schreib deine email" class="box" />
        <input
            type="password"
            name="password"
            placeholder="schreib dein passwort"
            class="box"
        />
        <div class="remember">
            <input type="checkbox" name="" id="rememberMe" />
            <label for="rememberMe">erinnere dich an mich</label>
        </div>
        <input type="submit" value="jetzt anmelden" class="btn" />
        <p>passwort vergessen? <a href="#">klick hier</a></p>
        <p>kein konto <a href="#">erstelle ein Konto</a></p>
    </form>
</header>
