
<?php

    if(isset($_POST['submit'])){
        login();
    } 

function login(){
    include ("dbcon.php");

    $query  = "SELECT * FROM users";
    $query .= " WHERE username='" .  $_POST['username'] . "'";
    $result = @mysqli_query($MySQL, $query);
    $row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if (password_verify($_POST['password'], $row['password'])) {
        
        $_SESSION['user']['valid'] = 'true';
        $_SESSION['user']['id'] = $row['id'];
        $_SESSION['user']['firstname'] = $row['firstname'];
        $_SESSION['user']['lastname'] = $row['lastname'];
        $_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '</p>';
        header( "refresh:0;url=index.php" );

    }

    else {
        unset($_SESSION['user']);
        $_SESSION['message'] = '<p>Wrong email or password!</p>';
        message(2, $_SESSION['message']);
        unset($_SESSION['message']);
    }

}

?>