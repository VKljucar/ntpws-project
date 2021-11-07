<?php
print'
        <div class="container">
            <div class="inner">
                <img id="Img1" src="./img/news1.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    (CNN) — Almost two decades since Concorde retired, interest around supersonic travel has been picking up pace, 
                    and several super-fast planes are under development
                </h5>
            </div>
        </div>
        <div class="container">
            <div class="inner">
                <img id="Img2" src="./img/news2.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    About 200,000 shipping containers, holding everything from toys and sneakers to critical parts for factories, 
                    remain stuck on ships floating off the coast of Los Angeles.
                </h5>
            </div>
        </div>
        <div class="container">
            <div class="inner">
                <img id="Img3" src="./img/news3.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    Hellisheiðarvirkjun, Iceland (CNN)The windswept valleys surrounding the Hengill volcano in southwestern Iceland are dotted with hot springs and steam vents.
                </h5>
            </div>
        </div>
        <div class="container">
            <div class="inner">
                <img id="Img4" src="./img/news4.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    (CNN)Fossils trapped in amber have been among paleontologys most fascinating finds in recent years.
                </h5>
            </div>
        </div>
        <div class="container">
            <div class="inner">
                <img id="Img5" src="./img/news5.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    Miss France, the countrys 101-year-old beauty pageant, is being sued by a feminist activist group and three unsuccessful applicants over alleged discriminatory entry requirements.
                </h5>
            </div>
        </div>
        <div class="container">
            <div class="inner">
                <img id="Img6" src="./img/news10.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    A British trawler has been seized by France and another has been fined, amid an escalating row over post-Brexit fishing rights.
                </h5>
            </div>
        </div>
        <div class="container">
            <div class="inner">
                <img id="Img7" src="./img/news6.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    Top executives of major Western oil companies are to testify before the US Congress amid
                    accusations that they misled the public about climate change.
                </h5>
            </div>
        </div>
        <div class="container">
            <div class="inner">
                <img id="Img8" src="./img/news7.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    Ronald Koeman has been sacked as head coach of Barcelona after 14 months in charge at the Nou Camp.
                </h5>
            </div>
        </div>
        <div class="container">
            <div class="inner">
                <img id="Img9" src="./img/news8.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    Shops, restaurants and schools have shut in Moscow in a partial lockdown, as Russia battles record Covid deaths and infections.
                </h5>
            </div>
        </div>
        <div class="container">
            <div class="inner">
                <img id="Img10" src="./img/news9.jpg" alt="html" onClick="Modal(this.id)">
                <h5>
                    A sample of hair belonging to the legendary 19th century Native American leader Sitting Bull has allowed scientists to confirm that a South Dakota man is his great-grandson.
                </h5>
            </div>
        </div>
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
            
        
        // When the user clicks on <span> (x), close the modal
        modal.onclick = function() {
            img01.className += " out";
            setTimeout(function() {
               modal.style.display = "none";
               img01.className = "modal-content";
             }, 400);
            
         }    
            
        </script>';
?>
