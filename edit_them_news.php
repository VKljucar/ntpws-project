
<?php

        $id=$_GET['news_id'];
        define('__APP__', TRUE);

        include ("dbcon.php");
    
    if ($_GET['delete'] == 'D'){

        $query = "DELETE FROM news WHERE news_id = $id";
        $result = @mysqli_query($MySQL, $query);

        $_SESSION['message'] = ' NEWS DELETED!';
        
        header( "refresh:0.1;url=index.php?menu=2" );

    }else{

        if (!empty($_FILES['picture']['tmp_name']) && file_exists($_FILES['picture']['tmp_name'])){
            $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));   
        }

        //$query = "UPDATE news SET title = '" . $_POST['title'] . "' WHERE news_id = ". $id ."";
        $query = "UPDATE news SET title = '" . $_POST['title'] . "', article  = '" . $_POST['article'] . "' , source  = '" . $_POST['source'] . "' ";
        if (!empty($_FILES['picture']['tmp_name']) && file_exists($_FILES['picture']['tmp_name'])){
            $query .= ", picture = '" . $image . "'";
        }
        $query .= " WHERE news_id = $id";

		$result = @mysqli_query($MySQL, $query);

		$_SESSION['message'] = ' NEWS EDITED!  ';

		header( "refresh:0.1;url=index.php?menu=2" );
    }


?>