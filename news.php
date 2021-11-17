<?php
    $query = "SELECT * FROM news";
    $result = @mysqli_query($MySQL, $query);
    while($row = @mysqli_fetch_array($result)) {
        print'<div class="container">
                <div class="news">
                    <div class="naslov">
                        <h3>' . $row['title'] . '</h3>
                    </div>
                    <div class="inner">
                        <a href="index.php?menu=9&news_id='.$row['news_id'].'"><img src="data:image/png;base64,'.base64_encode($row['picture']).'"></a>
                        <p>
                        ' . $row['article'] . '
                        </p>
                    </div>
                </div>
            </div>';
    }
        

?>