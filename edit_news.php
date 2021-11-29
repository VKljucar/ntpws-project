<?php 

    $id=$_GET['news_id'];
    $query = "SELECT * FROM news where news_id = $id";
    $result = @mysqli_query($MySQL, $query);
    while($row = @mysqli_fetch_array($result)) {

print '
    <div class="container" style="zoom:0.87">
        <div class="news">
            <div class="naslov">
                <a href="edit_them_news.php?delete=D&news_id='. $id .'"" style="float:right;padding:10px 10px 0px 0px"><i class="fa fa-trash" style="font-size:24px"></i></a>
                <h3>EDIT NEWS</h3>
            </div>
                <form method="POST" id="usrform" enctype="multipart/form-data" action="edit_them_news.php?news_id='. $id .'&delete=N"><br>
                    <label for="title">Title</label><br>
                    <input type="text" id="title" name="title" placeholder="Title.." required value="' . $row['title'] . '">
                    <br><br>
                    <label for="article">Article</label><br>
                    <textarea name="article" id="article" rows="6" form="usrform" placeholder="Enter text here...">' . $row['article'] . '</textarea>
                    <br><br>
                    <label for="source">Source</label><br>
                    <input type="text" id="source" name="source" placeholder="Source.." required style="width:30%" value="' . $row['source'] . '">
                    <br><br>
                    <label for="picture">Picture</label><br>
                    <input type="file" id="picture" name="picture" accept=".jpg, .jpeg, .png">
                    <br><br>
                    <img src="data:image/png;base64,'.base64_encode($row['picture']).'" style="width:20px;height:190px;zoom:0.8">
                    <br>
                    <input type="submit" name="submit" value="Submit">
                  </form> 
                  
        </div>
    </div>';

    }


?>
