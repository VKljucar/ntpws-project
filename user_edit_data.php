
<?php

    $id=$_GET['user_id'];
    define('__APP__', TRUE);

    include ("dbcon.php");

    if ($_POST['submit'] == 'Delete'){

        $query = "DELETE FROM users WHERE id = $id";
        $result = @mysqli_query($MySQL, $query);

        $_SESSION['message'] = ' USER '. $_POST['username'] .'DELETED!';

        header( "refresh:0.1;url=index.php?menu=11" );

    }else{

        $query = "UPDATE users SET firstname = '" . $_POST['firstname'] . "', lastname  = '" . $_POST['lastname'] . "' , email  = '" . $_POST['email'] . "' , username  = '" . $_POST['username'] . "'";
        if (!empty($_POST['password']) ){
            $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
            $query .= ", password = '" . $pass_hash . "'";
        }
        $query .= ", user_type_id = '" . $_POST['user'] . "', coutry_id = '" . $_POST['country'] . "'";
        $query .= " WHERE id = $id";

        $result = @mysqli_query($MySQL, $query);

        $_SESSION['message'] = ' USER '. $_POST['username'] .' EDITED!  ';

        header( "refresh:0.1;url=index.php?menu=11" );

    }


?>