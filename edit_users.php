<?php

print '
    <div class="container">
        <div class="news">
            <div class="naslov">
                <h3>EDIT USERS</h3>
            </div>';

            $query = "SELECT * FROM users JOIN user_type ON user_type.user_type_id = users.user_type_id JOIN country ON country.country_id = users.coutry_id order by id";
            $result = @mysqli_query($MySQL, $query);
            while($row1 = @mysqli_fetch_array($result)) {
            
            print'
                <button type="button" class="collapsible">' . $row1['username'] . ' ( ' . $row1['user_type_name'] . ' )<span style="float:right"><i class="fa fa-plus" style="font-size:12px"></i></span></button>
                <div class="content">
                  <form method="POST" id="usrform" enctype="multipart/form-data" action="user_edit_data.php?user_id='. $row1['id'] .'"><br>
                    <div class="region">
                        <label for="firstname">First name</label><br>
                        <input type="text" id="firstname" name="firstname" placeholder="First name.." required value="' . $row1['firstname'] . '">
                        <br><br>
                        <label for="lastname">Last name</label><br>
                        <input type="text" id="lastname" name="lastname" placeholder="Last name.." required value="' . $row1['lastname'] . '">
                        <br><br>
                        <label for="email">E-mail</label><br>
                        <input type="text" id="email" name="email" placeholder="E-mail.." required value="' . $row1['email'] . '">
                        <br><br>
                    </div>
                    <div class="region">
                        <label for="username">Username</label><br>
                        <input type="text" id="username" name="username" placeholder="Username.." required value="' . $row1['username'] . '">
                        <br><br>
                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" placeholder="Password..">
                        <br><br>
                        <input type="submit" name="submit" value="Delete">
                    </div>
                    <div class="region">
                        <label for="user">User type</label><br>
                        <select id="user" name="user">';
                                $query = "SELECT user_type_id, user_type_name FROM user_type";
                                $result2 = @mysqli_query($MySQL, $query);
                                while($row2 = @mysqli_fetch_array($result2)) {
                                    if ($row1['user_type_id'] == $row2['user_type_id']){
                                        print '<option value="' . $row2['user_type_id'] . '" selected>' . $row2['user_type_name'] . '</option>';
                                    }else{
                                        print '<option value="' . $row2['user_type_id'] . '">' . $row2['user_type_name'] . '</option>';
                                    }
                                }
                    print '
                        </select>
                        <br><br>
                        <label for="country">Country</label><br>
                        <select id="country" name="country">';
                            $query = "SELECT * FROM country";
                            $result3 = @mysqli_query($MySQL, $query);
                            while($row3 = @mysqli_fetch_array($result3)) {
                                if ($row1['coutry_id'] == $row3['country_id']){
                                    print '<option value="' . $row3['country_id'] . '" selected>' . $row3['name'] . '</option>';
                                }else{
                                    print '<option value="' . $row3['country_id'] . '">' . $row3['name'] . '</option>';
                                }
                            }
                    print '
                        </select>
                        <br><br>
                        <input type="submit" name="submit" value="Update">
                    </div>
                  </form> 
                </div>';
            }
    print'            
        </div>
    </div>';
    

    print'
        <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
        }
        </script>
    ';
?>
