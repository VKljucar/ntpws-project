<?php
    $query = "SELECT * FROM news";
    $result = @mysqli_query($MySQL, $query);
    while($row = @mysqli_fetch_array($result)) {
    print'
        <div class="container">
            <div class="inner">
                <img id="'. $row['news_id'] .'" src="data:image/png;base64,'.base64_encode($row['picture']).'" alt="html" onClick="Modal(this.id)">
                <h5>
                    '. $row['title'] .'
                </h5>
            </div>
        </div>';
    }

    print'
    <div id="myModal" class="modal">
        <img class="modal-content" id="img01">
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        function Modal(clicked) {
            modal.style.display = "block";
            modalImg.src = document.getElementById(clicked).getAttribute("src");
            modalImg.alt = document.getElementById(clicked).getAttribute("alt");
            captionText.innerHTML = this.alt;
            
        }    
            
        
        modal.onclick = function() {
            img01.className += " out";
            setTimeout(function() {
               modal.style.display = "none";
               img01.className = "modal-content";
             }, 400);
            
         }    
            
        </script>';
?>
