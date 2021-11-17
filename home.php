<?php
    $query = "SELECT * FROM news order by news_id desc limit 2";
    $result = @mysqli_query($MySQL, $query);
    while($row = @mysqli_fetch_array($result)) {
    print'<div class="container">
            <div class="html">
                <div class="naslov">
                    <h1>' . $row['title'] . '</h1>
                </div>
                <div class="inner">
                    <img src="data:image/png;base64,'.base64_encode($row['picture']).'">
                    <p>
                        ' . $row['article'] . '
                    </p>    
                </div>
            </div>
        </div>';
    }
?>