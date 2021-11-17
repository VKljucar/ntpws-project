<?php
    error_reporting(0);
    define('__APP__', TRUE);
    session_start();

    include ("dbcon.php");
    include ("message.php");

    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

    if (!isset($menu)) { $menu = 1; }
print '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Projekt Napredne tehnike projektiranja web servisa (open source, php)">
    <meta name="keywords" content="HTML, CSS, PHP, JavaScript">
    <meta name="author" content="Valentino Ključar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/';
        if (!isset($menu) || $menu == 1) { print'styles.css'; }
        else if ($menu == 2) { print'news.css';}
        else if ($menu == 3) { print'contact.css';}
        else if ($menu == 4) { print'about.css';}
        else if ($menu == 5) { print'gallery.css';}
        else if ($menu == 6) { print'login.css';}
        else if ($menu == 7) { print'register.css';}
        else if ($menu == 8) { print'add_news.css';}
        else if ($menu == 9) { print'news_article.css';}
    print '">
    <title>Home</title>
</head>
<body>

<header>
    <img src="./img/logo.png" alt="header">
</header>';
     include("menu.php");
     print '
<div class="main">';
    if (isset($_SESSION['message'])) {
        message(1,$_SESSION['message']);
        unset($_SESSION['message']);
    }
    if (!isset($menu) || $menu == 1) { include("home.php"); }
        else if ($menu == 2) { include("news.php"); }
        else if ($menu == 3) { include("contact.php"); }
        else if ($menu == 4) { include("about.php"); }
        else if ($menu == 5) { include("gallery.php"); }
        else if ($menu == 6) { include("login.php"); }
        else if ($menu == 7) { include("register.php"); }
        else if ($menu == 8) { include("add_news.php"); }
        else if ($menu == 9) { include("news_article.php"); }
print'
</div>
<div class="footer">
    <p>TVZ-2021 VKljucar <a href="https://github.com/VKljucar/ntpws-project"><i class="fa fa-github"></i></a></p>
</div>
  

</body>
</html>';
?>