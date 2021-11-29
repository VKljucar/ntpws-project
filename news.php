<?php
    $query = "SELECT * FROM news";
    $result = @mysqli_query($MySQL, $query);
    while($row = @mysqli_fetch_array($result)) {
        print'<div class="container">
                <div class="news">
                    <div class="naslov">';
                    if ($_SESSION['user']['valid'] == 'true' && $_SESSION['user']['user_type'] != 2) {
                        print'<a href="index.php?menu=10&news_id='.$row['news_id'].'" style="float:right;padding:10px 10px 0px 0px"><i class="fa fa-edit" style="font-size:24px"></i></a>';
                    }
                    print'
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