<?php

print '
    <div class="nav">
    <ul>
        <li><a href="index.php?menu=1">Home</a></li>
        <li><a href="index.php?menu=2">News</a></li>
        <li><a href="index.php?menu=3">Contact</a></li>
        <li><a href="index.php?menu=4">About</a></li>
        <li><a href="index.php?menu=5">Gallery</a></li>';
        if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
            print'<li style="float: right; margin-right: 40px;"><a href="index.php?menu=6">Login</a></li>';
        }else if ($_SESSION['user']['valid'] == 'true') {
            print'<li style="float: right; margin-right: 40px;"><a href="user_logout.php">Log out</a></li>
            <li style="float: right; margin-right: 40px;"><a class="user" href="">'.$_SESSION['user']['firstname'].'</a></li>';
        }
        
    print'
    </ul>
    </div>';

?>