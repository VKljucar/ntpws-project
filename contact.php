<?php include ("contact_mail.php"); ?>
<?php 
print '
    <div class="container">
        <div class="news">
            <div class="naslov">
                <h3>CONTACT FORM</h3>
            </div>
            <div class="inner">
                <form method="POST"><br>
                    <label for="fname">First name</label><br>
                    <input type="text" id="fname" name="firstname" placeholder="First name.." required>
                    <br><br>
                    <label for="lname">Last name</label><br>
                    <input type="text" id="lname" name="lastname" placeholder="Last name.." required>
                    <br><br>
                    <label for="email">E-mail</label><br>
                    <input type="text" id="email" name="email" placeholder="E-mail.." required>
                    <br><br>
                    <label for="adresa">Address</label><br>
                    <input type="text" id="adresa" name="adresa" placeholder="Address.." required>
                    <br><br>
                    <label for="subject">Subject</label><br>
                    <input type="text" id="subject" name="subject" placeholder="Subject.." required>
                    <br><br>
                    <label for="sadrzaj">Text</label><br>
                    <textarea name="article" id="sadrzaj" rows="6"placeholder="Enter text here..." style="width:69%" required></textarea>
                    <br><br>
                    <label for="country">Country</label><br>
                    <select id="country" name="country">';
                        $query = "SELECT * FROM country";
                        $result = @mysqli_query($MySQL, $query);
                        while($row = @mysqli_fetch_array($result)) {
                            print '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                        }
                    print '
                    </select>
                    <br><br>
                    <input type="submit" name="submit" value="Submit"">
                  </form> 
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7904519056715!2d15.966801615568512!3d45.79542567910617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b5d094979%3A0xda8bfa8459b67560!2sVrbik%2C%2010000%2C%20Zagreb!5e0!3m2!1shr!2shr!4v1635368038207!5m2!1shr!2shr" style="width: 55%;height:750px;"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
            </div>
        </div>
    </div>';
?>
