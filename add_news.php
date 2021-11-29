<?php include ("add_new_news.php"); 
print '
    <div class="container">
        <div class="news">
            <div class="naslov">
                <h3>ADD NEWS</h3>
            </div>
                <form method="POST" id="usrform" enctype="multipart/form-data"><br>
                    <label for="title">Title</label><br>
                    <input type="text" id="title" name="title" placeholder="Title.." required>
                    <br><br>
                    <label for="article">Article</label><br>
                    <textarea name="article" id="article" rows="6" form="usrform" placeholder="Enter text here..." required></textarea>
                    <br><br>
                    <label for="source">Source</label><br>
                    <input type="text" id="source" name="source" placeholder="Source.." required style="width:30%" required>
                    <br><br>
                    <label for="picture">Picture</label><br>
                    <input type="file" id="picture" name="picture" accept=".jpg, .jpeg, .png" required>
                    <br><br>
                    <input type="submit" name="submit" value="Submit">
                  </form> 
        </div>
    </div>';
?>
