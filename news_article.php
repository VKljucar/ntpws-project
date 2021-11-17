<?php

    $id=$_GET['news_id'];
    $query = "SELECT * FROM news where news_id = $id";
    $result = @mysqli_query($MySQL, $query);
    while($row = @mysqli_fetch_array($result)) {
        print'<div class="main">
        <div class="w3-container">
            <div class="gallery">
                <div class="w3-content w3-display-container" style="max-width:800px">
                    <div class="mySlides">
                        <img src="data:image/png;base64,'.base64_encode($row['picture']).'" style="width:100%"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="news">
                <div class="naslov">
                    <h3>' . $row['title'] . '</h3>
                </div>
                <div class="inner">
                    <p>
                        ' . $row['article'] . '
                    </p>
                    <div class="izvor">
                        <p>Izvor: <a href="' . $row['source'] . '">' . $row['source'] . '</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-white";
        }
    </script>';
    }
    
?>