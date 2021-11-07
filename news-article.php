<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Projekt Napredne tehnike projektiranja web servisa (open source, php)">
    <meta name="keywords" content="HTML, CSS, PHP, JavaScript">
    <meta name="author" content="Valentino Ključar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/new-report.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>News article</title>
</head>

<body>

    <header>
        <img src="./img/logo.png" alt="header">
    </header>
    <?php include 'menu.php';?>
    <div class="main">
        <div class="w3-container">
            <div class="gallery">
                <div class="w3-content w3-display-container" style="max-width:800px">
                    <div class="mySlides">
                        <img src="./img/news2.jpg" style="width:100%"> 
                        <h5>Supply chain stress is intensifying and showing no signs of fading, Moody's Analytics says</h5>
                    </div>
                    <div class="mySlides">
                        <img src="./img/news3.jpg" style="width:100%">
                        <h5>About 200,000 shipping containers, holding everything from toys and sneakers to critical</h5>
                    </div>
                    <div class="mySlides">
                        <img src="./img/news1.jpg" style="width:100%">
                        <h5>Transportation Secretary Pete Buttigieg acknowledged Wednesday that despite the Biden</h5>
                    </div>
                    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle " id="shuffle" style="width:100%">
                        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="news">
                <div class="naslov">
                    <h3>Supply chain stress is intensifying and showing no signs of fading, Moody's Analytics says</h3>
                </div>
                <div class="inner">
                    <p>
                        About 200,000 shipping containers, holding everything from toys and sneakers to critical
                        parts for factories,
                        remain stuck on ships floating off the coast of Los Angeles. A record 100 cargo vessels,
                        from barges to container ships, are anchored outside the Ports of Los Angeles and Long
                        Beach.
                        Transportation Secretary Pete Buttigieg acknowledged Wednesday that despite the Biden
                        administration's efforts to address bottlenecks, it will take time to get supply chains back
                        to normal.
                        "There are going to be disruptions and shocks to the system as long as the pandemic
                        continues," Buttigieg told CNN's Jim Sciutto.
                    </p>
                    <div class="izvor">
                        <p>Izvor: <a href="https://www.bbc.com">bbc.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>TVZ-2021 VKljucar <a href="https://github.com/VKljucar/ntpws-project"><i class="fa fa-github"></i></a>
        </p>
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
    </script>

</body>

</html>