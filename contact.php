<?php
print '
    <div class="container">
        <div class="news">
            <div class="naslov">
                <h3>CONTACT FORM</h3>
            </div>
            <div class="inner">
                <form action="/action_page.php"><br>
                    <label for="fname">Ime</label><br>
                    <input type="text" id="fname" name="firstname" placeholder="Ime.." required>
                    <br><br>
                    <label for="lname">Prezime</label><br>
                    <input type="text" id="lname" name="lastname" placeholder="Prezime.." required>
                    <br><br>
                    <label for="email">E-mail</label><br>
                    <input type="text" id="email" name="email" placeholder="E-mail.." required>
                    <br><br>
                    <label for="adresa">Adresa</label><br>
                    <input type="text" id="adresa" name="adresa" placeholder="Adresa..">
                    <br><br>
                    <label for="subject">Razlog</label><br>
                    <input type="text" id="subject" name="subject" placeholder="razlog..">
                    <br><br>
                    <label for="sadrzaj">Tekst</label><br>
                    <input type="text" id="sadrzaj" name="sadrzaj" placeholder="tekst..">
                    <br><br>
                    <label for="country">Country</label><br>
                    <select id="country" name="country">
                      <option value="hrv">Hrvatska</option>
                      <option value="uk">Velika Britanija</option>
                      <option value="usa">USA</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Submit">
                  </form> 
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7904519056715!2d15.966801615568512!3d45.79542567910617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b5d094979%3A0xda8bfa8459b67560!2sVrbik%2C%2010000%2C%20Zagreb!5e0!3m2!1shr!2shr!4v1635368038207!5m2!1shr!2shr" style="width: 50%;height:520px;"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
            </div>
        </div>
    </div>';
?>
