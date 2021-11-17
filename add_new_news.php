
<?php
    
    if(isset($_POST['submit'])){
        addNews();
    } 

function addNews(){
    include ("dbcon.php");

        $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));   
			
		$query  = "INSERT INTO news (title, article, source, picture)";
	    $query .= " VALUES ('" . $_POST['title'] . "', '" . $_POST['article'] . "', '" . $_POST['source'] . "', '" . $image . "')";
		$result = @mysqli_query($MySQL, $query);

		$_SESSION['message'] = '<p> NEWS ADDED!  </p>';

		header( "refresh:0.1;url=index.php?menu=8" );
		

}

?>